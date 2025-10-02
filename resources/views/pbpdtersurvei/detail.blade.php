@extends('layout.app')

@section('style')
@endsection

@section('content')

    <body class="bg-gray-100 font-sans">

        <div class="bg-white rounded-xl shadow-main p-8 mb-8">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Detail PBPD Tersurvei</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Informasi lengkap tentang permohonan yang sudah disurvei.</p>
            </div>

            <div class="mb-8">
                <h2 class="text-xl font-semibold text-main mb-4">Data Permohonan PBPD</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">IDPel</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->IdPel ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nama Pemohon</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->NamaPemohon ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->TglSuratDiterima ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->TglSuratDiterima ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">No Whatsapp</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->NoWhatsapp ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Aplikasi Manajemen Surat:</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->AplManajemenSurat ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Permohonan Daya Lama:</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->PermoDayaLama ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Permohonan Daya Baru:</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->PermoDayaBaru ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Selisih Daya :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->SelisihDaya ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Ampere :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->permohonanPbpd->Ampere ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status :</span>
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">{{ $detailtersurvei->permohonanPbpd->Status ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-main p-8 mb-8">
        <div class="flex justify-between items-center p-2">
        </div>
        <div class="mb-8">
                <h2 class="text-xl font-semibold text-main mb-4">Data Hasil Survei</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">BP :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->BP }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 1 :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->NilaiRabOpsi1 }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 2 :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->NilaiRabOpsi2 }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kebutuhan APP :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->KebutuhanApp }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">KKF :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->KKF }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Penyulang :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->Penyulang }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Penyulang :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->BebanPenyulang }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->Beban }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Gardu Induk :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->GarduInduk }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Trafo GI :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->TrafoGI }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kapasitas Trafo :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->KapasitasTrafo }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo GI :</span>
                        <span class="block text-lg font-bold text-gray-800"> {{ $detailtersurvei->BebanTrafoGI }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Trafo GI MW :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->BebanTrafoGIMW }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo GI Setelah Pelanggan Energize :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->BebanTrafoGISetelah }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status Beban Trafo Dibanding Kapasitas Trafo :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->StatusBeban }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tagging Lokasi :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->TaggingLokasi }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Keterangan :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailtersurvei->Keterangan }}</span>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </body>
@endsection

@section('script')
@endsection
