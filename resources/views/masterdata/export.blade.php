<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemohon</th>
            <th colspan="3">Surat diterima REN</th>
            <th colspan="2">Permohonan Daya (VA)</th>
            <th>Selisih Daya (VA)</th>
            <th>Ampere</th>
            <th>BP (Rp))</th>
            <th colspan="2">Nilai RAB (Rp)</th>
            <th colspan="2">Nota Dinas dikirim ke SAR</th>
            <th>Status</th>
            <th>Kebutuhan APP</th>
            <th>KKF (Tahun)</th>
            <th>Penyulang</th>
            <th>Beban Penyulang(A)</th>
            <th>Beban (MW)</th>
            <th>Gardu Induk</th>
            <th>Trafo GI</th>
            <th>Kapasitas Trafo (MWA)</th>
            <th>Beban Trafo GI (A)</th>
            <th>Beban Trafo GI Setelah Pelanggan Energize (MW)</th>
            <th>Status Beban</th>
            <th>Tagging Lokasi</th>
            <th>Keterangan</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>Tanggal</th>
            <th>No Whatsapp</th>
            <th>AMS</th>
            <th>Daya Lama</th>
            <th>Daya Baru</th>
            <th></th>
            <th></th>
            <th></th>
            <th>Opsi 1</th>
            <th>Opsi 2</th>
            <th>Tanggal</th>
            <th>No Nodin</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
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
            <td>{{ $item->pbpdTersurvei->Ampere ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BP ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</td>
            <td>{{ $item->pbpdTerkirim->TanggalNota ?? '-' }}</td>
            <td>{{ $item->pbpdTerkirim->Nodin ?? '-' }}</td>
            <td>{{ $item->Status ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->KebutuhanApp ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->KKF ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->Penyulang ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->BebanPenyulang ?? '-' }}</td>
            <td>{{ $item->pbpdTersurvei->Beban ?? '-' }}</td>
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
