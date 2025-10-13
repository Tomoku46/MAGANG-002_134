@extends('layout.app')

@section('style')
    <style>
        
    </style>
@endsection

@section('content')
    <div class="bg-white rounded-xl shadow-main p-6 fixed top-[64px] z-40">
        <nav aria-label="Breadcrumb">
            <ol class="flex flex-wrap items-center space-x-2 text-base sm:text-lg text-gray-600">
                <li>
                    <a href="#permohonan" class="breadcrumb-link text-gray-700 hover:underline">
                        Data Permohonan
                    </a>
                </li>
                <li class="text-gray-400">></li>
                <li>
                    <a href="#survei" class="breadcrumb-link font-semibold text-gray-900 hover:underline">
                        Data Survei
                    </a>
                </li>
            </ol>
        </nav>
    </div>

    <main class="mt-[20px] bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">
        <div id="survei" class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto w-full">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Tambah Hasil Survei</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Masukkan data hasil survei.</p>
            </div>
            <form action="{{ route('pbpdtersurvei.store') }}" method="POST">
                @csrf
                <input type="hidden" name="IdPermohonan" value="{{ $permohonan->id }}">
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">BP</label>
                    <input type="number" name="BP"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Rp">
                </div>
                <div>
                    <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Nilai RAB</h1>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Opsi 1</label>
                        <input type="number" name="NilaiRabOpsi1"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Rp">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Opsi 2</label>
                        <input type="number" name="NilaiRabOpsi2"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Rp">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Kebutuhan APP</label>
                        <input type="text" name="KebutuhanApp"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan APP">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">KKF</label>
                        <input type="number" name="KKF"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tahun">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Penyulang</label>
                        <input type="text" name="Penyulang"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Penyulang">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Penyulang</label>
                        <input type="number" name="BebanPenyulang"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="A">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban</label>
                        <input type="number" name="Beban"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Gardu Induk</label>
                        <input type="text" name="GarduInduk"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Gardu Induk">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Travo GI</label>
                        <input type="text" name="TrafoGI"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Travo">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">kapasitas Travo</label>
                        <input type="text" name="KapasitasTrafo"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MWA">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Travo GI</label>
                        <input type="text" name="BebanTrafoGI"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="A">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Travo GI</label>
                        <input type="text" name="BebanTrafoGIMW"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Trafo GI Setelah Pelanggan
                            Energize</label>
                        <input type="text" name="BebanTrafoGISetelah"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 gap-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">
                        Status Beban Trafo Dibanding Kapasitas Trafo
                    </label>
                    <select name="StatusBeban"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="kurang">Kurang</option>
                        <option value="cukup">Cukup</option>
                        <option value="lebih">Lebih</option>
                        <option value="berlebihan">Berlebihan</option>
                    </select>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Tagging Lokasi</label>
                        <input type="text" name="TaggingLokasi"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="-7.782998662270575, 110.36857589443142">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Keterangan</label>
                        <input type="text" name="Keterangan"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tambahkan Keterangan Jika Ada">
                    </div>
                </div>
                <button type="submit"
                    class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold text-base hover:bg-green-700 transition">
                    Simpan
                </button>
            </form>
        </div>

        <div id="permohonan" class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto w-full hidden">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-main mb-8">Data Permohonan</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">IDPel</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->IdPel }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nama Pemohon</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->NamaPemohon }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tanggal Surat Diterima</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->TglSuratDiterima }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">No Whatsapp</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->NoWhatsapp }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">AMS</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->AplManajemenSurat }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Daya Lama</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->PermoDayaLama }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Daya Baru</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->PermoDayaBaru }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Selisih Daya</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->SelisihDaya }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Ampere</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $permohonan->Ampere }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status</span>
                        <span class="bg-pink-500 text-white px-3 py-1 rounded text-sm">{{ $permohonan->Status }}</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.breadcrumb-link');
            const sections = [document.getElementById('survei'), document.getElementById('permohonan')];

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetSelector = this.getAttribute('href');
                    const target = document.querySelector(targetSelector);

                    if (target) {
                        // Sembunyikan semua section
                        sections.forEach(s => {
                            if (s) s.classList.add('hidden');
                        });
                        // Tampilkan section yang dituju
                        target.classList.remove('hidden');

                        // Tambahkan baris ini untuk scroll ke atas halaman
                        window.scrollTo(0, 0);

                        // Perbarui style link breadcrumb yang aktif
                        links.forEach(l => {
                            l.classList.remove('font-semibold', 'text-gray-900');
                            l.classList.add('text-gray-700');
                        });
                        this.classList.add('font-semibold', 'text-gray-900');
                        this.classList.remove('text-gray-700');
                    }
                });
            });

            // Inisialisasi awal saat halaman pertama kali dimuat
            const surveiSection = document.getElementById('survei');
            const permohonanSection = document.getElementById('permohonan');
            const surveiLink = document.querySelector('a[href="#survei"]');
            const permohonanLink = document.querySelector('a[href="#permohonan"]');

            if (surveiSection && permohonanSection && surveiLink && permohonanLink) {
                // Tampilkan section 'survei' sebagai default
                surveiSection.classList.remove('hidden');
                permohonanSection.classList.add('hidden');

                // Atur link 'Data Survei' sebagai yang aktif
                surveiLink.classList.add('font-semibold', 'text-gray-900');
                surveiLink.classList.remove('text-gray-700');
                permohonanLink.classList.remove('font-semibold', 'text-gray-900');
                permohonanLink.classList.add('text-gray-700');
            }
        });
    </script>
@endsection
@endsection