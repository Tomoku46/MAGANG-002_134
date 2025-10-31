@extends('layout.app')

@section('style')
    <style>
        /* Container untuk tabel dengan scroll horizontal */
        .table-scroll-container {
            width: 100%;
            overflow-x: auto;
            overflow-y: visible;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: white;
        }

        /* Styling untuk tabel */
        .table-scroll-container table {
            width: 100%;
            min-width: max-content;
            border-collapse: collapse;
            margin: 0;
        }

        /* Header tabel */
        .table-scroll-container th {
            background-color: #f8fafc;
            padding: 12px 16px;
            text-align: center;
            font-weight: 600;
            border-bottom: 2px solid #e5e7eb;
            border-right: 1px solid #e5e7eb;
            white-space: nowrap;
            min-width: 120px;
        }

        /* Body tabel */
        .table-scroll-container td {
            padding: 12px 16px;
            text-align: center;
            border-bottom: 1px solid #e5e7eb;
            border-right: 1px solid #e5e7eb;
            white-space: nowrap;
            min-width: 120px;
        }

        /* Hover effect untuk baris */
        .table-scroll-container tbody tr:hover {
            background-color: #f1f5f9;
        }

        /* Custom scrollbar styling */
        .table-scroll-container::-webkit-scrollbar {
            height: 12px;
        }

        .table-scroll-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 6px;
        }

        .table-scroll-container::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 6px;
            border: 2px solid #f1f1f1;
        }

        .table-scroll-container::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Menghilangkan border pada kolom terakhir */
        .table-scroll-container th:last-child,
        .table-scroll-container td:last-child {
            border-right: none;
            position: sticky;
            right: 0;
            background: white;
            z-index: 3;
        }


        .table-scroll-container th,
        .table-scroll-container td {
            text-align: center !important;
            vertical-align: middle !important;
        }
    </style>
@endsection

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="bg-white py-4 md:py-7  md:px-8 xl:px-10 rounded-md">
                    <div class="flex justify-between items-center p-2">
                        <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">PBPD Tersurvei</h1>
                    </div>
                    <div class="mb-8 px-2">
                        <p> Masukan Hasil Suvei PBPD pada permohonan PBPD</p>
                    </div>



                    <!-- Container dengan scroll horizontal -->
                    <div class="table-scroll-container">
                        <table id="myTable" class="display text-center">
                            <thead>
                                <tr>
                                    <th rowspan="2">IdPel</th>
                                    <th rowspan="2">Nama</th>
                                    <th colspan="3">Surat diterima REN</th>
                                    <th colspan="2">Permohonan Daya (VA)</th>
                                    <th rowspan="2">Selisih Daya</th>
                                    <th rowspan="2">Ampere</th>
                                    <th rowspan="2">BP (Rp)</th>
                                    <th colspan="2">Nilai RAB (Rp)</th>
                                    <th rowspan="2">Kebutuhan APP</th>
                                    <th rowspan="2">KKF (Tahun)</th>
                                    <th rowspan="2">Penyulang</th>
                                    <th rowspan="2">Beban Penyulang (A)</th>
                                    <th rowspan="2">Gardu Induk</th>
                                    <th rowspan="2">Trafo GI</th>
                                    <th rowspan="2">Kapasitas Trafo (MWA)</th>
                                    <th rowspan="2">Beban Trafo GI (A)</th>
                                    <th rowspan="2">Beban Trafo GI Setelah Pelanggan Energiza (MW)</th>
                                    <th rowspan="2">STATUS BEBAN TRAFO DIBANDING KAPASITAS TRAFO</th>
                                    <th rowspan="2">TAGGING LOKASI</th>
                                    <th rowspan="2">KATERANGAN</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>No whatsapp</th>
                                    <th>AMS</th>
                                    <th>Daya Lama</th>
                                    <th>Daya Baru</th>
                                    <th>Opsi 1</th>
                                    <th style="z-index: 1">Opsi 2</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->permohonanPbpd->IdPel ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->NamaPemohon ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->TglSuratDiterima ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->NoWhatsapp ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->AplManajemenSurat ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->PermoDayaLama ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->PermoDayaBaru ?? '-' }}</td>
                                        <td>{{ $item->permohonanPbpd->SelisihDaya ?? '-' }}</td>
                                        <td>{{ $item->Ampere }}</td>
                                        <td>{{ $item->BP }}</td>
                                        <td>{{ $item->NilaiRabOpsi1 }}</td>
                                        <td>{{ $item->NilaiRabOpsi2 }}</td>
                                        <td>{{ $item->KebutuhanApp }}</td>
                                        <td>{{ $item->KKF }}</td>
                                        <td>{{ $item->Penyulang }}</td>
                                        <td>{{ $item->BebanPenyulang }}</td>
                                        <td>{{ $item->GarduInduk }}</td>
                                        <td>{{ $item->TrafoGI }}</td>
                                        <td>{{ $item->KapasitasTrafo }}</td>
                                        <td>{{ $item->BebanTrafoGI }}</td>
                                        <td>{{ $item->BebanTrafoGISetelah }}</td>
                                        <td>{{ $item->StatusBeban }}</td>
                                        <td>{{ $item->TaggingLokasi }}</td>
                                        <td>{{ $item->Keterangan }}</td>
                                        <td>
                                            <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                                {{ $item->permohonanPbpd->Status ?? '-' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex space-x-2">
                                                <!-- Tombol Tambah -->
                                                <a href="{{ route('pbpdterkirim.create', ['IdTersurvei' => $item->id]) }}"
                                                    title="Kirim Ke Pemasaran"
                                                    class="inline-flex items-center gap-2 group bg-[#14a2ba] hover:bg-[#117e91] text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap">
                                                    <img src="{{ asset('img/icontambah.png') }}" alt="Tambah"
                                                        class="w-5 h-5">

                                                </a>

                                                <!-- Tombol Edit -->
                                                <a href="{{ Route('pbpdtersurvei.edit', $item->id) }}" title="Edit Data"
                                                    class="inline-flex items-center gap-2 group bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap btn-edit">
                                                    <img src="{{ asset('img/iconedit.png') }}" alt="Edit"
                                                        class="w-5 h-5">

                                                </a>

                                                <!-- Tombol Hapus -->
                                                <form action="{{ Route('pbpdtersurvei.destroy', $item->id) }}"
                                                    method="POST"
                                                    class="inline-flex items-center gap-2 group bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap hapus-form"
                                                    data-id="{{ $item->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="flex items-center gap-2 btn-hapus"
                                                        data-id="{{ $item->id }}" title="Hapus Data">
                                                        <img src="{{ asset('img/icondelete1.png') }}" alt="Hapus"
                                                            class="w-5 h-5">

                                                    </button>
                                                </form>

                                                <a href="{{ route('pbpdtersurvei.show', $item->id) }}"
                                                    class="bg-green-500  hover:bg-green-600  text-white px-4 py-1 rounded"
                                                    title="Detail Data">Detail</a>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Konfirmasi Berhasil -->
    <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-80 text-center">
            <h2 class="text-lg font-bold mb-4 text-green-700">Berhasil!</h2>
            <p class="mb-6">{{ session('success') }}</p>
            <button id="closeSuccessModal"
                class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Tutup</button>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div id="hapusConfirmModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-100">
            <h2 class="text-lg font-bold mb-4">Konfirmasi Hapus Data</h2>
            <p class="mb-6">Apakah Anda yakin ingin menghapus data ini?</p>
            <p class="mb-6 text-sm" style="opacity:0.8;">Anda dapat memulihkan data ini di riwayat hapus</p>
            <div class="flex justify-end gap-2">
                <button id="cancelHapusBtn" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <button id="confirmHapusBtn" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Pindahkan Ke
                    Riwayat Hapus</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "scrollX": true, // Enable horizontal scrolling
                "autoWidth": false, // Disable automatic column width calculation
                "responsive": false, // Disable responsive features untuk scroll horizontal
                "columnDefs": [{
                    "targets": "_all",
                    "className": "text-center"
                }],
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "infoFiltered": "(difilter dari _MAX_ total data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    },
                    "emptyTable": "Tidak ada data tersedia",
                    "zeroRecords": "Tidak ditemukan data yang sesuai"
                }
            });
            // Modal konfirmasi hapus
            let formToDelete = null;
            $(document).on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                formToDelete = $(this).closest('form');
                $('#hapusConfirmModal').removeClass('hidden');
            });
            $('#cancelHapusBtn').on('click', function() {
                $('#hapusConfirmModal').addClass('hidden');
                formToDelete = null;
            });
            $('#confirmHapusBtn').on('click', function() {
                if (formToDelete) {
                    formToDelete.submit();
                }
            });
            // Modal konfirmasi sukses
            // Tampilkan modal sukses di index jika flag sessionStorage ada (setelah simpan di edit)
            if (sessionStorage.getItem('showEditSuccess')) {
                $('#successModal').removeClass('hidden');
                sessionStorage.removeItem('showEditSuccess');
            }
            $('#closeSuccessModal').on('click', function() {
                $('#successModal').addClass('hidden');
            });
        });
    </script>
@endsection
