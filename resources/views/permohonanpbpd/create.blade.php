@extends('layout.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <main>
        <div class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Tambah Permohonan PBPD</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Masukkan data Permohonan PBPD yang ingin anda ajukan.</p>
            </div>
            @if ($errors->any())
                <div class="mb-4">
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-2">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif
            <form action="{{ Route('permohonanpbpd.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">IDPel</label>
                    <input type="number" name="IdPel"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukan IDPel">
                </div>
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Nama</label>
                    <input type="text" name="NamaPemohon"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukan Nama">
                </div>
                <div>
                    <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Surat Di terima REN</h1>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Tanggal</label>
                        <input type="date" Name="TglSuratDiterima"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">No Whatsapp</label>
                        <input type="number" name="NoWhatsapp"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="08xxxxx">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">AMS</label>
                        <input type="text" name="AplManajemenSurat"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="00/XXX/000">
                    </div>
                </div>
                <div>
                    <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Permohonan Daya</h1>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Daya Lama (VA)</label>
                        <input type="number" name="PermoDayaLama"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="VA">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Daya Baru (VA)</label>
                        <input type="number" name="PermoDayaBaru"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="VA">
                    </div>

                </div>
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Ampere</label>
                    <input type="number" name="Ampere"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="A">
                </div>
                <button type="submit"
                    class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold text-base hover:bg-green-700 transition">
                    Simpan
                </button>
            </form>
            <!-- Button Tambah Data Permohonan PBPD -->

        </div>
    </main>
@endsection

@section('script')
@endsection
