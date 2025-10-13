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
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Kirim PBPD</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Masukan tanggal dan NODIN sebagai tanda permohonan terkirim kepada pihak pemasaran</p>
            </div>
            <form action="{{ route('pbpdterkirim.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">Tanggal Nodin</label>
                    <input type="date" name="TanggalNota" value="{{ $edit->TanggalNota}}" class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                </div>
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">NODIN</label>
                    <input type="text" name="Nodin"  value="{{ $edit->Nodin }}" class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                </div>
                <button type="submit"
                    class="mb-6 w-full bg-green-600 text-white py-3  rounded-lg font-semibold text-base hover:bg-green-700 transition">
                    Simpan
                </button>
                @if ($permohonan)
                    <input type="hidden" name="IdPermohonan" value="{{ $permohonan->id }}">
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-main mb-4">Data Permohonan PBPD</h2>
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
                                <span
                                    class="block text-lg font-bold text-gray-800">{{ $permohonan->TglSuratDiterima }}</span>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-sm">No Whatsapp</span>
                                <span class="block text-lg font-bold text-gray-800">{{ $permohonan->NoWhatsapp }}</span>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-sm">AMS</span>
                                <span
                                    class="block text-lg font-bold text-gray-800">{{ $permohonan->AplManajemenSurat }}</span>
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
                        </div>
                    </div>
                @endif

                @if ($tersurvei)
                    <input type="hidden" name="IdTersurvei" value="{{ $tersurvei->id }}">
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-main mb-4">Data PBPD Tersurvei</h2>
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
                                <span class="block text-gray-500 text-sm">Keputuhan APP</span>
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
                                <span class="block text-gray-500 text-sm">Kapasitas Trafo(MWA)</span>
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
                                <span class="block text-gray-500 text-sm">Beban Trafo GI Setelah Pelanggan Energize
                                    (MW)</span>
                                <span
                                    class="block text-lg font-bold text-gray-800">{{ $tersurvei->BebanTrafoGISetelah }}</span>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-sm">Status Beban Trafo Dibanding Kapasitas
                                    Trafo</span>
                                <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->StatusBeban }}</span>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-sm">Tagging Lokasi</span>
                                <span class="block text-lg font-bold text-gray-800">{{ $tersurvei->TaggingLokasi }}</span>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-sm">Keterangan</span>
                                <span
                                    class="block text-justify text-lg font-bold text-gray-800 ">{{ $tersurvei->Keterangan }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            </form>

        </div>
    </main>
@endsection

@section('script')
@endsection
