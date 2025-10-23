@extends('layout.app')

@section('style')
@endsection

@section('content')

    <body class="bg-gray-100 font-sans">

        <div class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
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
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->IdPel ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nama Pemohon</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->NamaPemohon ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->TglSuratDiterima ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->TglSuratDiterima ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">No Whatsapp</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->NoWhatsapp ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Aplikasi Manajemen Surat:</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->AplManajemenSurat ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Permohonan Daya Lama:</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->PermoDayaLama ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Permohonan Daya Baru:</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->PermoDayaBaru ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Selisih Daya :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->SelisihDaya ?? '-' }}</span>
                    </div>
                    
                    <div>
                        <span class="block text-gray-500 text-sm">Status :</span>
                       @php
                                                $status = strtolower($detailmaster->Status ?? '');
                                                $statusClass = 'bg-gray-400';
                                                if ($status === 'permohonan') {
                                                    $statusClass = 'bg-pink-500';
                                                } elseif ($status === 'tersurvei') {
                                                    $statusClass = 'bg-yellow-500';
                                                } elseif ($status === 'terkirim') {
                                                    $statusClass = 'bg-green-700';
                                                }
                                            @endphp
                                            <span class="{{ $statusClass }} text-white px-3 py-1 rounded text-sm">
                                                {{ $detailmaster->Status ?? '-' }}
                                            </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
            <div class="flex justify-between items-center p-2">
            </div>
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-main mb-4">Data Hasil Survei</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">Ampere :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->Ampere ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">BP :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->BP ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 1 :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 2 :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kebutuhan APP :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->KebutuhanApp ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">KKF :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->KKF ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Penyulang :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->Penyulang ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Penyulang :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->BebanPenyulang ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->Beban ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Gardu Induk :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->GarduInduk ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Trafo GI :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->TrafoGI ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kapasitas Trafo :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->KapasitasTrafo ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo GI :</span>
                        <span class="block text-lg font-bold text-gray-800">
                            {{ $detailmaster->pbpdTersurvei->BebanTrafoGI ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Trafo GI MW :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->BebanTrafoGIMW ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo GI Setelah Pelanggan Energize :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->BebanTrafoGISetelah ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status Beban Trafo Dibanding Kapasitas Trafo :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->StatusBeban ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tagging Lokasi :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->TaggingLokasi ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Keterangan :</span>
                        <span
                            class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTersurvei->Keterangan ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
            <div class="flex justify-between items-center p-2">
            </div>
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-main mb-4">Nodin</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal:</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTerkirim->TanggalNota ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nodin :</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailmaster->pbpdTerkirim->Nodin ?? '-' }}</span>
                    </div>

                </div>
            </div>
        </div>

        </div>
    </body>
@endsection

@section('script')
@endsection
