@extends('layout.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <main>
            <div class="bg-white rounded-xl shadow-main p-8 mb-8">
                    <h2 class="text-xl font-semibold text-blue-700 mb-6">Form Input Data PBPD</h2>
                    <form>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">IDPel</label>
                            <input type="text" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan IDPel">
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukan Nama">
                        </div>
                         <div><h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Surat Di terima REN</h1></div>
                        <div class="mb-6 flex gap-6">
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Tanggal </label>
                                <input type="date" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">No Whatsapp</label>
                                <input type="text" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="08xxxx">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">AMS</label>
                                <input type="text" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="AMS">
                            </div>
                        </div>
                        <div><h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Permohonan Daya</h1></div>
                        <div class="mb-6 flex gap-6">
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Daya Lama</label>
                                <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="VA">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Daya Baru</label>
                                <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="VA">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Selisih Daya</label>
                                <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="VA">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">Ampere</label>
                            <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ampere">
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-gray-700 mb-2">BP</label>
                            <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Rp">
                        </div>
                        <div><h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Nilai RAB</h1></div>
                        <div class="mb-6 flex gap-6">
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Opsi 1</label>
                                <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Rp">
                            </div>
                            <div class="flex-1">
                                <label class="block text-base font-medium text-gray-700 mb-2">Opsi 2</label>
                                <input type="number" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Rp">
                            </div>
                        </div>
                    </form>
                    <!-- Button Tambah Data Permohonan PBPD -->
                    <button 
                        class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold text-base hover:bg-green-700 transition"
                        @click="showForm2 = true"
                        x-show="!showForm2"
                    >
                        Tambah Hasil Survei
                    </button>
                </div>
    </main>
@endsection

@section('script')
    
@endsection

