<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Data Permohonan</title>
<style>
/* ============ GAYA LAYAR ============ */
body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
    line-height: 1.5;
    margin: 0;
    padding: 20px;
    background-color: #f9f9f9;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 25px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.header {
    text-align: center;
    border-bottom: 2px solid #eee;
    padding-bottom: 15px;
    margin-bottom: 10px;
}

.header h1 {
    margin: 0;
    font-size: 22px;
    color: #2c3e50;
}

.header p {
    margin: 4px 0 0;
    color: #7f8c8d;
    font-size: 13px;
}

.section {
    margin-bottom: 15px;
}

.section-title {
    font-size: 17px;
    font-weight: bold;
    color: #3498db;
    border-bottom: 2px solid #3498db;
    padding-bottom: 6px;
    margin-bottom: 10px;
}

.grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 25px;
}

.grid-item {
    display: flex;
    flex-direction: column;
}

.grid-item .label {
    font-weight: bold;
    font-size: 13px;
    color: #555;
    margin-bottom: 3px;
}

.grid-item .value {
    font-size: 13px;
    color: #333;
    padding: 6px;
    background-color: #f5f5f5;
    border-radius: 4px;
    word-wrap: break-word;
}

.full-width {
    grid-column: 1 / -1;
}

/* ============ GAYA CETAK ============ */
@media print {
    @page {
        size: A4 portrait;
        margin: 0.7cm;
    }

    html, body {
        background: #fff;
        margin: 0;
        padding: 0;
        width: 100%;
        font-family: Arial, sans-serif;
        font-size: 8.5pt;
        line-height: 1.1;
    }

    .container {
        box-shadow: none;
        border: none;
        margin: 0;
        padding: 0.3cm 0.5cm;
        width: 100%;
        max-width: 100%;
    }

    .header {
        margin-bottom: 6px;
        padding-bottom: 3px;
        border-bottom: 1px solid #999;
    }

    .header h1 {
        font-size: 10.5pt;
        color: #000;
        margin: 0;
    }

    .header p {
        font-size: 7pt;
        color: #333;
    }

    .section {
        margin-bottom: 5px;
    }

    .section-title {
        font-size: 8.5pt;
        color: #000;
        border-bottom: 1px solid #000;
        padding-bottom: 1px;
        margin-bottom: 3px;
    }

    .grid-container {
        grid-template-columns: 1fr 1fr;
        gap: 2px 8px;
    }

    .grid-item .label {
        font-size: 7pt;
        font-weight: bold;
        margin-bottom: 0;
    }

    .grid-item .value {
        font-size: 7.5pt;
        padding: 1px 3px;
        background-color: #f3f3f3;
        border: 1px solid #ccc;
        border-radius: 2px;
    }
}
</style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Detail Data Permohonan</h1>
    </div>

    <div class="section">
        <h2 class="section-title">Informasi Permohonan</h2>
        <div class="grid-container">
            <div class="grid-item"><span class="label">ID Pelanggan:</span><span class="value">{{ $detailmaster->IdPel ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Nama Pemohon:</span><span class="value">{{ $detailmaster->NamaPemohon ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">No. Whatsapp:</span><span class="value">{{ $detailmaster->NoWhatsapp ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Aplikasi Manajemen Surat:</span><span class="value">{{ $detailmaster->AplManajemenSurat ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Tanggal Surat Diterima:</span><span class="value">{{ $detailmaster->TglSuratDiterima ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Daya Lama:</span><span class="value">{{ $detailmaster->PermoDayaLama ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Daya Baru:</span><span class="value">{{ $detailmaster->PermoDayaBaru ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Selisih Daya:</span><span class="value">{{ $detailmaster->SelisihDaya ?? '-' }}</span></div>
        </div>
    </div>


    <div class="section">
        <h2 class="section-title">Data Teknis Survei</h2>
        <div class="grid-container">
            <div class="grid-item"><span class="label">Ampere:</span><span class="value">{{ $detailmaster->pbpdTersurvei->Ampere ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">BP (Biaya Penyambungan):</span><span class="value">{{ $detailmaster->pbpdTersurvei->BP ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Nilai RAB Opsi 1 : Rp</span><span class="value">{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Nilai RAB Opsi 2 : Rp</span><span class="value">{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Kebutuhan APP:</span><span class="value">{{ $detailmaster->pbpdTersurvei->KebutuhanApp ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">KKF (Tahun):</span><span class="value">{{ $detailmaster->pbpdTersurvei->KKF ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Penyulang:</span><span class="value">{{ $detailmaster->pbpdTersurvei->Penyulang ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Beban Penyulang (A):</span><span class="value">{{ $detailmaster->pbpdTersurvei->BebanPenyulang ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Beban (MW):</span><span class="value">{{ $detailmaster->pbpdTersurvei->Beban ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Gardu Induk:</span><span class="value">{{ $detailmaster->pbpdTersurvei->GarduInduk ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Trafo GI:</span><span class="value">{{ $detailmaster->pbpdTersurvei->TrafoGI ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Kapasitas Trafo (MWA):</span><span class="value">{{ $detailmaster->pbpdTersurvei->KapasitasTrafo ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Beban Trafo GI (A):</span><span class="value">{{ $detailmaster->pbpdTersurvei->BebanTrafoGI ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Beban Trafo GI (MW):</span><span class="value">{{ $detailmaster->pbpdTersurvei->BebanTrafoGIMW ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Beban Trafo GI (Setelah Energize):</span><span class="value">{{ $detailmaster->pbpdTersurvei->BebanTrafoGISetelah ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Status Beban:</span><span class="value">{{ $detailmaster->pbpdTersurvei->StatusBeban ?? '-' }}</span></div>
            <div class="grid-item"><span class="label">Tagging Lokasi:</span><span class="value">{{ $detailmaster->pbpdTersurvei->TaggingLokasi ?? '-' }}</span></div>
        </div>
    </div>
    <div class="section">
        <h2 class="section-title">Informasi Administrasi</h2>
        <div class="grid-container">
            <div class="grid-item"><span class="label">No. Nota Dinas:</span><span class="value">{{ $detailmaster->pbpdTerkirim->Nodin ?? '-' }}</span></div>
            <div class="grid-item full-width"><span class="label">Tanggal Nota Dinas:</span><span class="value">{{ $detailmaster->pbpdTerkirim->TanggalNota ?? '-' }}</span></div>
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Status Permohonan</h2>
        <div class="grid-item full-width">
            @php
                $status = strtolower($detailmaster->Status ?? '');
                $statusStyle = 'background-color: #9ca3af;';
                if ($status === 'permohonan') $statusStyle = 'background-color: #ec4899;';
                elseif ($status === 'tersurvei') $statusStyle = 'background-color: #facc15;';
                elseif ($status === 'terkirim') $statusStyle = 'background-color: #15803d;';
            @endphp
            <span class="value text-white px-3 py-1 rounded" style="{{ $statusStyle }} color:#fff;">
                {{ $detailmaster->Status ?? '-' }}
            </span>
        </div>
    </div>
</div>

</body>
</html>