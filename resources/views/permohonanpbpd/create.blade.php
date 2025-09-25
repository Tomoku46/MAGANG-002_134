@extends('layout.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <main>
            <div class="bg-white rounded-xl shadow-main p-8 mb-8">
                    <h2 class="text-xl font-semibold text-[#14a2ba] mb-6">Form Input Data PBPD</h2>
                    <form action="{{Route('permohonanpbpd.store')}}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">IDPel</label>
                            <input type="number" name="IdPel" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan IDPel">
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" name="NamaPemohon" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan Nama">
                        </div>
                        <div class="mb-6 flex gap-6">
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Tanggal Surat di Terima REN</label>
                                <input type="date" Name="TglSuratDiterima" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">WA</label>
                                <input type="text" name="NoWhatsapp" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nomor WA">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">AMS</label>
                                <input type="text" name="AplManajemenSurat" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="AMS">
                            </div>
                        </div>
                        <div class="mb-6 flex gap-6">
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Daya Lama (VA)</label>
                                <input type="text" name="PermoDayaLama" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Daya Lama">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Daya Baru (VA)</label>
                                <input type="text" name="PermoDayaBaru" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Daya Baru">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Selisih Daya (VA)</label>
                                <input type="text" name="SelisihDaya" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Selisih Daya">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">Ampere</label>
                            <input type="text" name="Ampere" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ampere">
                        </div>
                        <button type="submit" class=" bg-blue-600 text-white">
                submit
            </button>
                    </form>
                    <!-- Button Tambah Data Permohonan PBPD -->
                    
                </div>
    </main>
@endsection

@section('script')
    
@endsection

