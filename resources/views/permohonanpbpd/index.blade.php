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
        }

        .text-center {
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
                        <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Permohonan PBPD</h1>
                        <div class="flex space-x-2">
                            <a
                                href="{{ Route('permohonanpbpd.create') }}"class="bg-[#14a2ba] text-white px-6 py-2 rounded hover:bg-[#117e91]">+
                                Tambahkan Permohonan PBPD</a>
                        </div>
                    </div>
                    <div class="mb-8 px-2">
                        <p> Kumpulan Permohonan PBPD yang telah diajukan</p>
                    </div>



                    <!-- Container dengan scroll horizontal -->
                    <div class="table-scroll-container">
                        <table id="myTable" class="display text-center">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">IdPel</th>
                                    <th rowspan="2">Nama</th>
                                    <th class="text-center" colspan="3">Surat diterima REN</th>
                                    <th class="text-center" colspan="2">Permohonan Daya (VA)</th>
                                    <th rowspan="2">Selisih Daya</th>
                                    
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Aksi</th>

                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>No whatsapp</th>
                                    <th>AMS</th>

                                    <th>Daya Lama</th>
                                    <th>Daya Baru</th>

                                </tr>


                            </thead>
                            <tbody>
                                @foreach ($data as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->IdPel }}</td>
                                        <td>{{ $item->NamaPemohon }}</td>
                                        <td>{{ $item->TglSuratDiterima }}</td>
                                        <td>{{ $item->NoWhatsapp }}</td>
                                        <td>{{ $item->AplManajemenSurat }}</td>
                                        <td>{{ $item->PermoDayaLama }}(VA)</td>
                                        <td>{{ $item->PermoDayaBaru }}(VA)</td>
                                        <td>{{ $item->SelisihDaya }}(VA)</td>
                                        
                                        <td class="px-4 py-3 text-center"><span
                                                class="bg-pink-500 text-white px-3 py-1 rounded text-sm">{{ $item->Status }}</span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="flex space-x-2">
                                                <!-- Tombol Tambah -->
                                                <a href="{{ route('pbpdtersurvei.create', ['IdPermohonan' => $item->id]) }}"
                                                    title="Tambah Hasil Survey"
                                                    class="inline-flex items-center gap-2 group bg-[#14a2ba] hover:bg-[#117e91] text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap">
                                                    <img src="{{ asset('img/icontambah.png') }}" alt="Tambah"
                                                        class="w-5 h-5">
                                
                                                </a>

                                                <!-- Tombol Edit -->
                                                <a href="{{ Route('permohonanpbpd.edit', $item->id) }}" title="Edit Data"
                                                    class="inline-flex items-center gap-2 group bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap btn-edit">
                                                    <img src="{{ asset('img/iconedit.png') }}" alt="Edit"
                                                        class="w-5 h-5">
                                                </a>

                                                <!-- Tombol Hapus -->
                                                <form action="{{ Route('permohonanpbpd.destroy', $item->id) }}"
                                                    method="POST"
                                                    class="inline-flex items-center gap-2 group bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md transition-all duration-300 whitespace-nowrap hapus-form"
                                                    data-id="{{ $item->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" 
                                                        class="flex items-center gap-2 btn-hapus"
                                                        title="Hapus Data"
                                                        data-id="{{ $item->id }}">
                                                        <img src="{{ asset('img/icondelete1.png') }}" alt="Hapus"
                                                            class="w-5 h-5">
                                                        
                                                    </button>
                                                </form>

                                                <!-- Tombol Detail -->
                                                <a href="{{ Route('permohonanpbpd.show', $item->id) }}"
                                                    title="Lihat Detail"
                                                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded">
                                                    Detail
                                                </a>
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
            <p class="mb-6" id="successMessage">Data berhasil diedit!</p>
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
            // Jika user menekan tombol back, hapus flag agar modal tidak muncul
            window.addEventListener('popstate', function() {
                sessionStorage.removeItem('showEditSuccess');
            });
            $('#closeSuccessModal').on('click', function() {
                $('#successModal').addClass('hidden');
            });
        });
    </script>
@endsection
