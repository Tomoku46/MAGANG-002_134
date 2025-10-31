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
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Edit Permohonan PBPD</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Silakan ubah data Permohonan PBPD yang ingin anda perbarui.</p>
            </div>
            <form action="{{ Route('permohonanpbpd.update', $editpbpd->id) }}" method="POST">
                @csrf
                @method ('PUT')
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">IDPel</label>
                    <input type="number" name="IdPel" value="{{ $editpbpd->IdPel }}"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukan IDPel">
                </div>
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Nama</label>
                    <input type="text" name="NamaPemohon" value="{{ $editpbpd->NamaPemohon }}"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukan Nama">
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Tanggal Surat di Terima REN</label>
                        <input type="date" Name="TglSuratDiterima" value="{{ $editpbpd->TglSuratDiterima }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">WA</label>
                        <input type="text" name="NoWhatsapp" value="{{ $editpbpd->NoWhatsapp }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Nomor WA">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">AMS</label>
                        <input type="text" name="AplManajemenSurat" value="{{ $editpbpd->AplManajemenSurat }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="AMS">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Daya Lama (VA)</label>
                        <input type="text" name="PermoDayaLama" value="{{ $editpbpd->PermoDayaLama }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Daya Lama">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Daya Baru (VA)</label>
                        <input type="text" name="PermoDayaBaru" value="{{ $editpbpd->PermoDayaBaru }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Daya Baru">
                    </div>

                </div>
                
                <button type="submit"
                    class="mt-6 w-full bg-green-500 text-white py-3 rounded-lg font-semibold text-base hover:bg-yellow-600 transition btn-edit-simpan">
                    Simpan
                </button>
            </form>
            <!-- Button Tambah Data Permohonan PBPD -->

        </div>
    </main>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.btn-edit-simpan').on('click', function() {
            sessionStorage.setItem('showEditSuccess', '1');
        });
    });
</script>
@endsection
