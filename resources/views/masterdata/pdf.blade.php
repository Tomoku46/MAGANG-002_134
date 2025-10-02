<html>
<head>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Detail Master Data</h2>
    <table>
        <tr><th>ID Pel</th><td>{{ $detailmaster->IdPel ?? '-' }}</td></tr>
        <tr><th>Nama Pemohon</th><td>{{ $detailmaster->NamaPemohon ?? '-' }}</td></tr>
        <tr><th>Tanggal Surat Diterima</th><td>{{ $detailmaster->TglSuratDiterima ?? '-' }}</td></tr>
        <tr><th>No Whatsapp</th><td>{{ $detailmaster->NoWhatsapp ?? '-' }}</td></tr>
        <tr><th>Aplikasi Manajemen Surat</th><td>{{ $detailmaster->AplManajemenSurat ?? '-' }}</td></tr>
        <tr><th>Daya Lama</th><td>{{ $detailmaster->PermoDayaLama ?? '-' }}</td></tr>
        <tr><th>Daya Baru</th><td>{{ $detailmaster->PermoDayaBaru ?? '-' }}</td></tr>
        <tr><th>Selisih Daya</th><td>{{ $detailmaster->SelisihDaya ?? '-' }}</td></tr>
        <tr><th>Ampere</th><td>{{ $detailmaster->Ampere ?? '-' }}</td></tr>
        <tr><th>Status</th><td>{{ $detailmaster->Status ?? '-' }}</td></tr>
        <tr><th>BP</th><td>{{ $detailmaster->pbpdTersurvei->BP ?? '-' }}</td></tr>
        <tr><th>Nilai RAB Opsi 1</th><td>{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</td></tr>
        <tr><th>Nilai RAB Opsi 2</th><td>{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</td></tr>
        <tr><th>Tanggal Nota Dinas</th><td>{{ $detailmaster->pbpdTerkirim->TanggalNota ?? '-' }}</td></tr>
        <tr><th>Nodin</th><td>{{ $detailmaster->pbpdTerkirim->Nodin ?? '-' }}</td></tr>
        <tr><th>Kebutuhan APP</th><td>{{ $detailmaster->pbpdTersurvei->KebutuhanApp ?? '-' }}</td></tr>
        <tr><th>KKF</th><td>{{ $detailmaster->pbpdTersurvei->KKF ?? '-' }}</td></tr>
        <tr><th>Penyulang</th><td>{{ $detailmaster->pbpdTersurvei->Penyulang ?? '-' }}</td></tr>
        <tr><th>Beban Penyulang</th><td>{{ $detailmaster->pbpdTersurvei->BebanPenyulang ?? '-' }}</td></tr>
        <tr><th>Gardu Induk</th><td>{{ $detailmaster->pbpdTersurvei->GarduInduk ?? '-' }}</td></tr>
        <tr><th>Trafo GI</th><td>{{ $detailmaster->pbpdTersurvei->TrafoGI ?? '-' }}</td></tr>
        <tr><th>Kapasitas Trafo</th><td>{{ $detailmaster->pbpdTersurvei->KapasitasTrafo ?? '-' }}</td></tr>
        <tr><th>Beban Trafo GI</th><td>{{ $detailmaster->pbpdTersurvei->BebanTrafoGI ?? '-' }}</td></tr>
        <tr><th>Beban Trafo GI Setelah Pelanggan Energiza</th><td>{{ $detailmaster->pbpdTersurvei->BebanTrafoGISetelah ?? '-' }}</td></tr>
        <tr><th>Status Beban</th><td>{{ $detailmaster->pbpdTersurvei->StatusBeban ?? '-' }}</td></tr>
        <tr><th>Tagging Lokasi</th><td>{{ $detailmaster->pbpdTersurvei->TaggingLokasi ?? '-' }}</td></tr>
        
        <!-- Tambahkan kolom lain jika perlu -->
    </table>
</body>
</html>
