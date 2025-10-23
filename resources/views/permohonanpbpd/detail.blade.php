@extends('layout.app')

@section('style')
@endsection

@section('content')

    <body class="bg-gray-100 font-sans">

        <div class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Detail</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Informasi lengkap tentang permohonan yang sudah diajukan.</p>
            </div>

            <div class="mb-8">
                <h2 class="text-xl font-semibold text-main mb-4">Data Permohonan PBPD</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">IDPel</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->IdPel }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nama Pemohon</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->NamaPemohon }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->TglSuratDiterima }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">No Whatsapp</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->NoWhatsapp }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">AMS</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->AplManajemenSurat }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Daya Lama</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->PermoDayaLama }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Daya Baru</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->PermoDayaBaru }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Selisih Daya</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $detailpbpd->SelisihDaya }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status</span>
                        <span class="bg-pink-500 text-white px-3 py-1 rounded text-sm">{{ $detailpbpd->Status }}</span>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </body>
@endsection

@section('script')
@endsection
