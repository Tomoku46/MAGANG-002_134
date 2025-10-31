<table>
    <thead>
        <tr>
            <th rowspan="2">IDPel</th>
            <th rowspan="2">Nama Pemohon</th>
            <th colspan="3">Surat diterima REN</th>
            <th colspan="2">Permohonan Daya (VA)</th>
            <th rowspan="2">Selisih Daya (VA)</th>
            <th rowspan="2">Ampere</th>
            <th rowspan="2">BP (Rp)</th>
            <th colspan="2">Nilai RAB (Rp)</th>
            <th colspan="2">Nota Dinas dikirim ke SAR</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Kebutuhan APP</th>
            <th rowspan="2">KKF (Tahun)</th>
            <th rowspan="2">Penyulang</th>
            <th rowspan="2">Beban Penyulang(A)</th>
            <th rowspan="2">Beban (MW)</th>
            <th rowspan="2">Gardu Induk</th>
            <th rowspan="2">Trafo GI</th>
            <th rowspan="2">Kapasitas Trafo (MWA)</th>
            <th rowspan="2">Beban Trafo GI (A)</th>
            <th rowspan="2">Beban Trafo GI Setelah Pelanggan Energize (MW)</th>
            <th rowspan="2">Status Beban</th>
            <th rowspan="2">Tagging Lokasi</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>Tanggal</th>
            <th>No Whatsapp</th>
            <th>AMS</th>
            <th>Daya Lama</th>
            <th>Daya Baru</th>
            <th>Opsi 1</th>
            <th>Opsi 2</th>
            <th>Tanggal</th>
            <th>No Nodin</th>
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
        </tr>
        @endforeach
    </tbody>
</table>
