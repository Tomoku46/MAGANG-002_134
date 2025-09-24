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
        }
    </style>
@endsection

@section('content')
    <section class="flex w-full">
        <div class="flex flex-col w-full">
            <div class="w-full">
                <div class="bg-white py-4 md:py-7  md:px-8 xl:px-10 rounded-md">
                   <div class="flex justify-between items-center p-2">
                     <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Riwayat Hapus</h1>
                     <div class="flex space-x-2"> 
                        <a href="{{ url('/tambahpermohonanpbpd') }}"class="bg-[#14a2ba] text-white px-6 py-2 rounded hover:bg-blue-600">+ Tambahkan Permohonan PBPD</a>
                    </div>
                </div>
                <div class="mb-8 px-2"> <p> Lihat dan pulihkan data PBPD yang terhapus</p></div>
                    <!-- Container dengan scroll horizontal -->
                    <div class="table-scroll-container">
                        <table id="myTable" class="display">
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
                                    <th colspan="2">Nota Dinas dikirim ke SAR</th>
                                    <th rowspan="2">Status</th>
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
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>No whatsapp</th>
                                    <th>AMS</th>

                                    <th>Daya Lama</th>
                                    <th>Daya Baru</th>

                                    
                                    <th>Opsi 1</th>
                                    <th>Opsi 2</th>

                                    
                                    <th>Tanggal</th>
                                    <th>No nodin</th>
                                </tr>
                                

                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>1</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>1</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>1</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                    <td>tomo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        });
    </script>
@endsection
