@extends('layout.app')

@section('style')
    <style>
        /* Style kustom dapat ditambahkan di sini jika diperlukan */
    </style>
@endsection

@section('content')
    <!-- Breadcrumb Navigation -->
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
                    <a href="#tersurvei" class="breadcrumb-link font-semibold text-gray-900 hover:underline">
                        Data Tersurvei
                    </a>
                </li>
                <li class="text-gray-400">></li>
                <li>
                    <a href="#kirim" class="breadcrumb-link font-semibold text-gray-900 hover:underline">
                        Kirim Data
                    </a>
            </ol>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto">

        <!-- Section 1: Form Kirim PBPD (Hidden by default now) -->
        <div id="kirim" class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto w-full hidden mt-8">
            <form action="{{ route('pbpdterkirim.store') }}" method="POST">
                @csrf
                <div class="flex justify-between items-center p-2">
                    <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Kirim PBPD</h1>
                </div>
                <div class="mb-8 px-2">
                    <p> Masukan tanggal dan NODIN sebagai tanda permohonan terkirim kepada pihak pemasaran</p>
                </div>

                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Tanggal Nodin</label>
                    <input type="date" name="TanggalNota" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">NODIN</label>
                    <input type="text" name="Nodin" class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Nomor Nota Dinas">
                </div>

                <!-- Hidden inputs for IDs -->
                @if ($permohonan)
                    <input type="hidden" name="IdPermohonan" value="{{ $permohonan->id }}">
                @endif
                @if ($tersurvei)
                    <input type="hidden" name="IdTersurvei" value="{{ $tersurvei->id }}">
                @endif

                <button type="submit"
                    class="mt-4 w-full bg-green-600 text-white py-3 rounded-lg font-semibold text-base hover:bg-green-700 transition">
                    Simpan
                </button>
            </form>
        </div>

        <!-- Section 2: Data Permohonan (Visible by default now) -->
        @if ($permohonan)
            <div id="permohonan" class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto w-full mt-8">
                <h1 class="text-3xl font-bold text-main mb-8">Data Permohonan PBPD</h1>
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
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">{{ $permohonan->Status }}</span>
                    </div>
                </div>
            </div>
        @endif

        <!-- Section 3: Data Tersurvei (Hidden by default, with all fields) -->
        @if ($tersurvei)
            <div id="tersurvei" class="bg-white rounded-xl shadow-main p-8 mb-8 max-w-5xl mx-auto w-full hidden mt-8">
                <h1 class="text-3xl font-bold text-main mb-8">Data PBPD Tersurvei</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <span class="block text-gray-500 text-sm">BP</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->BP }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 1</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->NilaiRabOpsi1 }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Nilai RAB Opsi 2</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->NilaiRabOpsi2 }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kebutuhan APP</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->KebutuhanApp }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">KKF</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->KKF }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Penyulang</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->Penyulang }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Penyulang (A)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->BebanPenyulang }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban (MW)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->Beban }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Gardu Induk</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->GarduInduk }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Trafo GI</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->TrafoGI }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Kapasitas Trafo (MWA)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->KapasitasTrafo }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo (A)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->BebanTrafoGI }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo (MW)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->BebanTrafoGIMW }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Beban Trafo GI Setelah Pelanggan Energize (MW)</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->BebanTrafoGISetelah }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Status Beban Trafo Dibanding Kapasitas Trafo</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->StatusBeban }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-500 text-sm">Tagging Lokasi</span>
                        <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->TaggingLokasi }}</span>
                    </div>
                    <div class="md:col-span-2">
                        <span class="block text-gray-500 text-sm">Keterangan</span>
                        <span class="block text-justify text-lg font-bold text-gray-800 ">{{ $tersurvei->Keterangan }}</span>
                    </div>
                </div>
            </div>
        @endif

    </main>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.breadcrumb-link');
        const sections = [
            document.getElementById('kirim'),
            document.getElementById('permohonan'),
            document.getElementById('tersurvei')
        ];

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetSelector = this.getAttribute('href');
                const target = document.querySelector(targetSelector);

                if (target) {
                    // Sembunyikan semua section yang ada
                    sections.forEach(s => {
                        if (s) s.classList.add('hidden');
                    });
                    
                    // Tampilkan section yang dituju
                    target.classList.remove('hidden');

                    // Scroll ke atas halaman
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

        // Inisialisasi: Tampilkan 'Kirim Permohonan' sebagai default saat halaman dimuat
        const kirimSection = document.getElementById('kirim');
        const kirimLink = document.querySelector('a[href="#kirim"]');

        if (kirimSection && kirimLink) {
            sections.forEach(s => {
                // Sembunyikan semua section kecuali 'kirim'
                if (s && s.id !== 'kirim') {
                    s.classList.add('hidden');
                } else if (s) {
                    s.classList.remove('hidden');
                }
            });

            // Atur link yang aktif
            links.forEach(l => {
                l.classList.remove('font-semibold', 'text-gray-900');
                l.classList.add('text-gray-700');
            });
            kirimLink.classList.add('font-semibold', 'text-gray-900');
            kirimLink.classList.remove('text-gray-700');
        }
    });
</script>
@endsection

