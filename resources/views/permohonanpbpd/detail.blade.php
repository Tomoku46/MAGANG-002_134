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
                <div class="flex-1 space-y-3 text-sm">
                    <div><span class="font-semibold">IdPel:</span> {{ $detailpbpd->IdPel }}</div>
                    <div><span class="font-semibold">Nama Pemohon:</span> {{ $detailpbpd->NamaPemohon }}</div>
                    <div><span class="font-semibold">Tanggal Surat Diterima:</span> {{ $detailpbpd->TglSuratDiterima }}</div>
                    <div><span class="font-semibold">No Whatsapp:</span> {{ $detailpbpd->NoWhatsapp }}</div>
                    <div><span class="font-semibold">Aplikasi Manajemen Surat:</span> {{ $detailpbpd->AplManajemenSurat }}
                    </div>
                    <div><span class="font-semibold">Permohonan Daya Lama:</span> {{ $detailpbpd->PermoDayaLama }}</div>
                    <div><span class="font-semibold">Permohonan Daya Baru:</span> {{ $detailpbpd->PermoDayaBaru }}</div>
                    <div><span class="font-semibold">Selisih Daya:</span> {{ $detailpbpd->SelisihDaya }}</div>
                    <div><span class="font-semibold">Ampere:</span> {{ $detailpbpd->Ampere }}</div>
                    <div><span class="font-semibold">Status:</span> <span class="bg-pink-500 text-white px-3 py-1 rounded text-sm">{{ $detailpbpd->Status }}</span></div>
                    

                   
                </div>

                <!-- Kolom Kanan -->
                <div class="w-full lg:w-1/3 space-y-4">
                    <div class="flex justify-between">
                        <span class="font-semibold"></span>
                        <span class="font-semibold">Status:</span> <span class="bg-pink-500 text-white px-3 py-1 rounded text-sm">{{ $detailpbpd->Status }}</span>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@section('script')
@endsection
