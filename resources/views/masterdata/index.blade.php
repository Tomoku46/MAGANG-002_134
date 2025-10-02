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

        /* Kolom Status (sebelum aksi) */
        .table-scroll-container th:nth-last-child(2),
        .table-scroll-container td:nth-last-child(2) {
            position: sticky;
            right: 120px;
            /* Ganti 120px sesuai lebar kolom aksi Anda */
            background: white;
            z-index: 3;
            /* Optional: tambahkan border kiri agar lebih jelas */
            border-left: 2px solid #e5e7eb;
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
                        <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Master Data</h1>
                    </div>
                    <div class="mb-8 px-2">
                        <p> Kumpulan data PBPD</p>
                    </div>

                    <!-- Tombol Export Excel -->
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('masterdata.export') }}"
                            class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Export Excel
                        </a>
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
                                    <th colspan="2">Nota Dinas dikirim ke SAR</th>
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
                                    <th>Opsi 2</th>


                                    <th style="z-index: 1">Tanggal</th>
                                    <th style="z-index: 1">No nodin</th>
                                </tr>


                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr data-id="{{ $item->id }}">
                                        <td>{{ $item->IdPel ?? '-' }}</td>
                                        <td>{{ $item->NamaPemohon ?? '-' }}</td>
                                        <td>{{ $item->TglSuratDiterima ?? '-' }}</td>
                                        <td>{{ $item->NoWhatsapp ?? '-' }}</td>
                                        <td>{{ $item->AplManajemenSurat ?? '-' }}</td>
                                        <td>{{ $item->PermoDayaLama ?? '-' }}</td>
                                        <td>{{ $item->PermoDayaBaru ?? '-' }}</td>
                                        <td>{{ $item->SelisihDaya ?? '-' }}</td>
                                        <td>{{ $item->Ampere ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->BP ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->NilaiRabOpsi1 ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->NilaiRabOpsi2 ?? '-' }}</td>
                                        <td>{{ $item->pbpdTerkirim->TanggalNota ?? '-' }}</td>
                                        <td>{{ $item->pbpdTerkirim->Nodin ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->KebutuhanApp ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->KKF ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->Penyulang ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->BebanPenyulang ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->GarduInduk ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->TrafoGI ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->KapasitasTrafo ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->BebanTrafoGI ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->BebanTrafoGISetelah ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->StatusBeban ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->TaggingLokasi ?? '-' }}</td>
                                        <td>{{ $item->pbpdTersurvei->Keterangan ?? '-' }}</td>
                                        <td>
                                            @php
                                                $status = strtolower($item->Status ?? '');
                                                $statusClass = 'bg-gray-400';
                                                if ($status === 'permohonan') {
                                                    $statusClass = 'bg-pink-500';
                                                } elseif ($status === 'tersurvei') {
                                                    $statusClass = 'bg-yellow-500';
                                                } elseif ($status === 'terkirim') {
                                                    $statusClass = 'bg-green-700';
                                                }
                                            @endphp
                                            <span class="{{ $statusClass }} text-white px-3 py-1 rounded text-sm">
                                                {{ $item->Status ?? '-' }}
                                            </span>
                                        </td>


                                        <td class="px-4 py-3">
                                            <div class="flex space-x-2">

                                                <a href="{{ route('masterdata.show', $item->id) }}"
                                                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded">Detail</a>
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

    <!-- Modal Konfirmasi Cetak PDF -->
    <div id="pdfConfirmModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-80">
            <h2 class="text-lg font-bold mb-4">Konfirmasi Cetak PDF</h2>
            <p class="mb-6">Apakah Anda ingin mencetak data ini sebagai PDF?</p>
            <div class="flex justify-end gap-2">
                <button id="cancelPdfBtn" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Batal</button>
                <a id="printPdfBtn" href="#" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Cetak</a>
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

            // Double click event on table cell
            let selectedId = null;
            $(document).on('dblclick', '.table-scroll-container td', function() {
                const row = $(this).closest('tr');
                selectedId = row.data('id');
                if(selectedId) {
                    $('#pdfConfirmModal').removeClass('hidden');
                    $('#printPdfBtn').attr('href', '/masterdata/' + selectedId + '/pdf');
                }
            });
            // Hide modal on cancel
            $('#cancelPdfBtn').on('click', function() {
                $('#pdfConfirmModal').addClass('hidden');
            });
        });
    </script>
@endsection
