<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemohon</th>
            <th>Status</th>
            <th>Tanggal Surat</th>
            <th>No Whatsapp</th>
            <th>Aplikasi Manajemen Surat</th>
            <th>Permohonana Daya Lama</th>
            <th>Permohonana Daya Baru</th>
            <th>Selisih Daya</th>
            <th>Ampere</th>
            <th>BP</th>
            <th>Nilai RAB Opsi 1</th>
            <th>Nilai RAB Opsi 2</th>
            <th>Tanggal Nota Dinas</th>
            <th>Nodin</th>
            <th>Kebutuhan APP</th>
            <th>KKF</th>
            <th>Jenis Konstruksi</th>
            <th>Penyulang</th>
            <th>Beban Penyulang</th>
            <th>Gardu Induk</th>
            <th>Trafo GI</th>
            <th>Kapasitas Trafo</th>
            <th>Beban Trafo GI</th>
            <th>Beban Trafo GI Setelah Pelanggan Energiza</th>
            <th>Status Beban</th>
            <th>Tagging Lokasi</th>
            <th>Keterangan</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->IdPel ?? '-' }}</td>
            <td>{{ $item->NamaPemohon ?? '-' }}</td>
            <td>{{ $item->TglSuratDiterima ?? '-' }}</td>
            <td>{{ $item->NoWhatsapp ?? '-' }}</td>
            <td>{{ $item->AplManajemenSurat ?? '-' }}</td>
            <td>{{ $item->PermoDayaLama ?? '-' }}</td>
            <td>{{ $item->PermoDayaBaru ?? '-' }}</td>
            <td>{{ $item->SelisihDaya ?? '-' }}</td>
            <td>{{ $item->Ampere ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BP ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</td>
            <td>{{ $item->pbpdTerkirim->TanggalNota ?? '-' }}</td>
            <td>{{ $item->pbpdTerkirim->Nodin ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->KebutuhanApp ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->KKF ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->Penyulang ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BebanPenyulang ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->GarduInduk ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->TrafoGI ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->KapasitasTrafo ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BebanTrafoGI ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BebanTrafoGISetelah ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->StatusBeban ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->TaggingLokasi ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->Keterangan ?? '-' }}</td>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        @endforeach
    </tbody>
</table>
