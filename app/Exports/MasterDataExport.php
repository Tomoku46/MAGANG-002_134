<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
// --- TAMBAHAN BARU UNTUK WARNA ---
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Color;
// --- BATAS TAMBAHAN ---

class MasterDataExport implements FromView, WithStyles, WithColumnWidths
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('masterdata.export', [
            'data' => $this->data
        ]);
    }

    /**
    * 1. FUNGSI UNTUK MENGATUR LEBAR KOLOM
    * (Tidak ada perubahan di sini)
    */
    public function columnWidths(): array
    {
        return [
            'A' => 15,  // ID
            'B' => 30,  // Nama Pemohon
            'C' => 12,  // Tgl Surat
            'D' => 15,  // No Whatsapp
            'E' => 10,  // AMS
            'F' => 12,  // Daya Lama
            'G' => 12,  // Daya Baru
            'H' => 12,  // Selisih Daya
            'I' => 10,  // Ampere
            'J' => 15,  // BP (Rp)
            'K' => 15,  // RAB Opsi 1
            'L' => 15,  // RAB Opsi 2
            'M' => 12,  // Tgl Nodin
            'N' => 15,  // No Nodin
            'O' => 15,  // Status
            'P' => 20,  // Kebutuhan APP
            'Q' => 10,  // KKF
            'R' => 15,  // Penyulang
            'S' => 15,  // Beban Penyulang
            'T' => 12,  // Beban (MW)
            'U' => 15,  // Gardu Induk
            'V' => 15,  // Trafo GI
            'W' => 15,  // Kapasitas Trafo
            'X' => 15,  // Beban Trafo GI (A)
            'Y' => 20,  // Beban Trafo GI Setelah...
            'Z' => 12,  // Status Beban
            'AA' => 20, // Tagging Lokasi
            'AB' => 40, // Keterangan
        ];
    }

    /**
    * 2. FUNGSI STYLING (DIUBAH TOTAL SESUAI GAMBAR)
    * @param Worksheet $sheet
    */
    public function styles(Worksheet $sheet)
    {
        // --- TAMBAHAN: SET FONT DEFAULT ---
        // Gunakan worksheet parent (Spreadsheet) untuk mengakses default style
        $sheet->getParent()->getDefaultStyle()->getFont()->setName('Comfortaa')->setSize(11);
        
        // --- TAMBAHAN: 1. TAMBAHKAN 3 BARIS BARU DI ATAS ---
        $sheet->insertNewRowBefore(1, 3);
        
        // --- TAMBAHAN: 2. SET JUDUL DI BARIS 1 (UPDATE) ---
        $sheet->setCellValue('A1', 'UPDATE : ' . date('d/m/Y'));
        $sheet->mergeCells('A1:AB1');
        
        // Style untuk Judul "UPDATE"
        $styleJudulUpdate = $sheet->getStyle('A1');
        $styleJudulUpdate->getFont()
                         ->setBold(true)
                         ->setSize(12)
                         ->setColor(new Color(Color::COLOR_WHITE)); // Warna font putih
        $styleJudulUpdate->getFill()
                         ->setFillType(Fill::FILL_SOLID)
                         ->getStartColor()->setARGB('125d72'); // Warna Latar PLN
        $styleJudulUpdate->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $styleJudulUpdate->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);


        // --- TAMBAHAN BARU: WARNAI BARIS 2 ---
        $sheet->mergeCells('A2:AB2'); // Merge baris ke 2
        // --- PERUBAHAN DI SINI: Terapkan style ke seluruh range A2:AB2 ---
        $sheet->getStyle('A2:AB2')->getFill() 
              ->setFillType(Fill::FILL_SOLID)
              ->getStartColor()->setARGB('125d72'); // Set warna latar yang sama
        // --- BATAS PERUBAHAN ---
        // Atur tinggi baris ke 2 jika ingin (opsional, bisa dihapus jika tidak perlu)
        $sheet->getRowDimension(2)->setRowHeight(5); 
        // --- BATAS TAMBAHAN BARU ---


        // --- TAMBAHAN: 3. SET JUDUL DI BARIS 3 (JUDUL UTAMA) ---
        $sheet->setCellValue('A3', 'Monitoring PBPD TM UP3 Yogya');
        $sheet->mergeCells('A3:AB3');
        
        // Style untuk Judul Utama
        $styleJudulUtama = $sheet->getStyle('A3');
        $styleJudulUtama->getFont()
                        ->setBold(true)
                        ->setSize(14)
                        ->setColor(new Color(Color::COLOR_WHITE)); // Warna font putih
        $styleJudulUtama->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()->setARGB('125d72'); // Warna Latar PLN
        $styleJudulUtama->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $styleJudulUtama->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        
        // Atur tinggi baris untuk judul
        $sheet->getRowDimension(1)->setRowHeight(20);
        $sheet->getRowDimension(3)->setRowHeight(25);
        // --- BATAS TAMBAHAN JUDUL ---


        // --- PENYESUAIAN: SEMUA NOMOR BARIS BERGESER 3 ---
        $cellRange = 'A4:' . $sheet->getHighestColumn() . $sheet->getHighestRow();
        $lastRow = $sheet->getHighestRow();

        // 1. Terapkan TEXT WRAPPING (mulai dari header di baris 4)
        $sheet->getStyle($cellRange)->getAlignment()->setWrapText(true);

        // 2. Terapkan PERATAAN (CENTERING) (mulai dari header di baris 4)
        $sheet->getStyle($cellRange)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle($cellRange)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        
        // 3. Style Header (Baris 4 dan 5)
        $headerRange = 'A4:' . $sheet->getHighestColumn() . '5';
        $styleHeader = $sheet->getStyle($headerRange);
        
        // Font Bold untuk Header
        $styleHeader->getFont()->setBold(true);
        
        // --- TAMBAHAN: WARNA LATAR HEADER ---
        $styleHeader->getFill()
                    ->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('14a2ba'); // Warna PLN
        
        // 4. Terapkan FORMAT TEKS ke kolom ID (Data sekarang mulai dari baris 6)
        if ($lastRow >= 6) {
            $sheet->getStyle('A6:A' . $lastRow)
                  ->getNumberFormat()
                  ->setFormatCode(NumberFormat::FORMAT_TEXT);
        }

        // --- PENYESUAIAN: 5. FREEZE PANES ---
        $sheet->freezePane('C6');
    }
}