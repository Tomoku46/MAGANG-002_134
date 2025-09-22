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
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 rounded-md">
                    <h2 class="text-xl font-semibold mb-4 text-gray-800">Master Data</h2>

                    <!-- Container dengan scroll horizontal -->
                    <div class="table-scroll-container">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konseling</th>
                                    <th>Pukul</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Action</th>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konseling</th>
                                    <th>Pukul</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Action</th>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konseling</th>
                                    <th>Pukul</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Action</th>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Konseling</th>
                                    <th>Pukul</th>
                                    <th>Tanggal Pendaftaran</th>
                                    <th>Nomor WhatsApp</th>
                                    <th>Action</th>
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
