@extends('layout.app')

@section('style')
@endsection

@section('content')

    <body class="bg-gray-100 font-sans">

        <div class="flex flex-col w-full">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Detail</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Informasi lengkap tentang permohonan yang sudah diajukan.</p>
            </div>
            <!-- Judul -->


            <!-- Card Container -->
            <div class="bg-white rounded shadow p-6 flex flex-col lg:flex-row justify-between gap-6">

                <!-- Kolom Kiri -->
                {{-- filepath: c:\laragon\www\kp\resources\views\pbpdtersurvei\detail.blade.php --}}
                <div class="flex-1 space-y-3 text-sm">
                    <div><span class="font-semibold">IdPel:</span> {{ $detailtersurvei->permohonanPbpd->IdPel ?? '-' }}</div>
                    <div><span class="font-semibold">Nama Pemohon:</span>
                        {{ $detailtersurvei->permohonanPbpd->NamaPemohon ?? '-' }}
                    </div>
                    <div><span class="font-semibold">Tanggal Surat Diterima:</span>
                        {{ $detailtersurvei->permohonanPbpd->TglSuratDiterima ?? '-' }}</div>
                    <div><span class="font-semibold">No Whatsapp:</span> {{ $detailtersurvei->permohonanPbpd->NoWhatsapp ?? '-' }}
                    </div>
                    <div><span class="font-semibold">Aplikasi Manajemen Surat:</span>
                        {{ $detailtersurvei->permohonanPbpd->AplManajemenSurat ?? '-' }}</div>
                    <div><span class="font-semibold">Permohonan Daya Lama:</span>
                        {{ $detailtersurvei->permohonanPbpd->PermoDayaLama ?? '-' }}</div>
                    <div><span class="font-semibold">Permohonan Daya Baru:</span>
                        {{ $detailtersurvei->permohonanPbpd->PermoDayaBaru ?? '-' }}</div>
                    <div><span class="font-semibold">Selisih Daya:</span>
                        {{ $detailtersurvei->permohonanPbpd->SelisihDaya ?? '-' }}
                    </div>
                    <div><span class="font-semibold">Ampere:</span> {{ $detailtersurvei->permohonanPbpd->Ampere ?? '-' }}
                    </div>
                    <div><span class="font-semibold">Status:</span>
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                            {{ $detailtersurvei->permohonanPbpd->Status ?? '-' }}
                        </span>
                    </div>
                    <div><span class="font-semibold">BP:</span> {{ $detailtersurvei->BP }}</div>
                    <div><span class="font-semibold">NilaiRabOpsi1:</span> {{ $detailtersurvei->NilaiRabOpsi1 }}</div>
                    <div><span class="font-semibold">NilaiRabOpsi2:</span> {{ $detailtersurvei->NilaiRabOpsi2 }}</div>
                    <div><span class="font-semibold">KebutuhanApp:</span> {{ $detailtersurvei->KebutuhanApp }}</div>
                    
                </div>

                <!-- Kolom Kanan -->
                <div class="flex-1 space-y-3 text-sm">
                    
                    <div><span class="font-semibold">KKF:</span> {{ $detailtersurvei->KKF }}</div>
                    <div><span class="font-semibold">Penyulang:</span> {{ $detailtersurvei->Penyulang }}</div>
                    <div><span class="font-semibold">Beban Penyulang:</span> {{ $detailtersurvei->BebanPenyulang }}</div>
                    <div><span class="font-semibold">Beban :</span> {{ $detailtersurvei->Beban }}</div>
                    <div><span class="font-semibold">Gardu Induk :</span> {{ $detailtersurvei->GarduInduk }}</div>
                    <div><span class="font-semibold">Trafo GI :</span> {{ $detailtersurvei->TrafoGI }}</div>
                    <div><span class="font-semibold">Kapasitas Trafo :</span> {{ $detailtersurvei->KapasitasTrafo }}</div>
                    <div><span class="font-semibold">Beban Trafo GI :</span> {{ $detailtersurvei->BebanTrafoGI }}</div>
                    <div><span class="font-semibold">Beban Trafo GIMW :</span> {{ $detailtersurvei->BebanTrafoGIMW }}</div>
                    <div><span class="font-semibold">Beban Trafo GI Setelah Pelanggan Energize:</span> {{ $detailtersurvei->BebanTrafoGISetelah }}</div>
                    <div><span class="font-semibold">Status Beban Trafo Dibanding Kapasitas Trafo:</span> {{ $detailtersurvei->StatusBeban }}</div>
                    <div><span class="font-semibold">Status Beban Trafo Dibanding Kapasitas Trafo:</span> {{ $detailtersurvei->StatusBeban }}</div>
                    <div><span class="font-semibold">Tagging Lokasi:</span> {{ $detailtersurvei->TaggingLokasi }}</div>
                    <div><span class="font-semibold">Keterangan:</span> {{ $detailtersurvei->Keterangan }}</div>

                </div>
            </div>
        </div>
        </div>
    </body>
@endsection

@section('script')
@endsection
