@extends('layout.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <main>
        <div class="bg-white rounded-xl shadow-main p-8 mb-8">
            <div class="flex justify-between items-center p-2">
                <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Tambah Hasil Survei PBPD</h1>
            </div>
            <div class="mb-8 px-2">
                <p> Masukkan data hasil survei Permohonan PBPD.</p>
            </div>
            <form action="{{ Route('pbpdtersurvei.update', $edittersurvei->id) }}" method="POST">
                @csrf

               
                @if ($permohonan)
                 <input type="hidden" name="IdPermohonan" value="{{ $permohonan->id }}">
                    <div class="mb-6">
                        <label class="block text-base font-medium text-gray-700 mb-2">IDPel</label>
                        <input type="text" name="IdPel" value="{{ $permohonan->IdPel }}" readonly
                            class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                    </div>
                    <div class="mb-6">
                        <label class="block text-base font-medium text-gray-700 mb-2">Nama Pemohon</label>
                        <input type="text" name="NamaPemohon" value="{{ $permohonan->NamaPemohon }}" readonly
                            class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                    </div>
                    <div>
                        <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Surat Di terima REN</h1>
                    </div>
                    <div class="mb-6 flex gap-6">
                        <div class="flex-1">
                            <label class="block text-base font-medium text-gray-700 mb-2">Tanggal </label>
                            <input type="date" name="TglSuratDiterima"
                                class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="{{ $permohonan->TglSuratDiterima }}" readonly>
                        </div>
                        <div class="flex-1">
                            <label class="block text-base font-medium text-gray-700 mb-2">No Whatsapp</label>
                            <input type="text" name="NoWhatsapp"
                                class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="08xxxx" value="{{ $permohonan->NoWhatsapp }}" readonly>
                        </div>
                        <div class="flex-1">
                            <label class="block text-base font-medium text-gray-700 mb-2">AMS</label>
                            <input type="text" name="AplManajemenSurat"
                                class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="AMS" value="{{ $permohonan->AplManajemenSurat }}" readonly>
                        </div>
                    </div>

                    <div>
                        <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Permohonan Daya</h1>
                    </div>
                    <div class="mb-6 flex gap-6">
                        <div class="flex-1">
                            <label class="block text-base font-medium text-gray-700 mb-2">Daya Lama</label>
                            <input type="text" name="PermoDayaLama" value="{{ $permohonan->PermoDayaLama }}" readonly
                                class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                        </div>
                        <div class="flex-1">
                            <label class="block text-base font-medium text-gray-700 mb-2">Daya Baru</label>
                            <input type="text" name="PermoDayaBaru" value="{{ $permohonan->PermoDayaBaru }}" readonly
                                class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="block text-base font-medium text-gray-700 mb-2">SelisihDaya</label>
                        <input type="text" name="SelisihDaya" value="{{ $permohonan->SelisihDaya }}" readonly
                            class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                    </div>
                    <div class="mb-6">
                        <label class="block text-base font-medium text-gray-700 mb-2">Ampere</label>
                        <input type="text" name="Ampere" value="{{ $permohonan->Ampere }}" readonly
                            class="w-full border rounded-lg px-4 py-3 text-base bg-gray-100">
                    </div>
                    <!-- Tambahkan field lain dari $permohonan jika ingin ditampilkan -->
                @endif
                @method ('PUT')
                <div class="mb-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">BP</label>
                    <input type="number" name="BP" value="{{ $edittersurvei->BP }}"
                        class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Rp">
                </div>
                <div>
                    <h1 class="text-1xl font-bold text-main mb-4 md:mb-0">Nilai RAB</h1>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Opsi 1</label>
                        <input type="number" name="NilaiRabOpsi1" value="{{ $edittersurvei->NilaiRabOpsi1 }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Rp">
                    </div>
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Opsi 2</label>
                        <input type="number" name="NilaiRabOpsi2" value="{{ $edittersurvei->NilaiRabOpsi2 }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Rp">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Kebutuhan APP</label>
                        <input type="text" name="KebutuhanApp" value="{{ $edittersurvei->KebutuhanApp }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan APP">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">KKF</label>
                        <input type="number" name="KKF" value="{{ $edittersurvei->KKF }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tahun">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Penyulang</label>
                        <input type="text" name="Penyulang" value="{{ $edittersurvei->Penyulang }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Penyulang">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Penyulang</label>
                        <input type="number" name="BebanPenyulang" value="{{ $edittersurvei->BebanPenyulang }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="A">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban</label>
                        <input type="number" name="Beban" value="{{ $edittersurvei->Beban }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Gardu Induk</label>
                        <input type="text" name="GarduInduk" value="{{ $edittersurvei->GarduInduk }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Gardu Induk">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Travo GI</label>
                        <input type="text" name="TrafoGI" value="{{ $edittersurvei->TrafoGI }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Travo">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">kapasitas Travo</label>
                        <input type="text" name="KapasitasTrafo" value="{{ $edittersurvei->KapasitasTrafo }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MWA">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Trafo GI</label>
                        <input type="text" name="BebanTrafoGI" value="{{ $edittersurvei->BebanTrafoGI }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="A">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Travo GI</label>
                        <input type="text" name="BebanTrafoGIMW" value="{{ $edittersurvei->BebanTrafoGIMW }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Beban Trafo GI Setelah Pelanggan
                            Energize</label>
                        <input type="text" name="BebanTrafoGISetelah"
                            value="{{ $edittersurvei->BebanTrafoGISetelah }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="MW">
                    </div>
                </div>
                <div class="mb-6 gap-6">
                    <label class="block text-base font-medium text-gray-700 mb-2">
                        Status Beban Trafo Dibanding Kapasitas Trafo
                    </label>
                    <select name="StatusBeban" value="{{ $edittersurvei->StatusBeban }}"
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
                        <input type="text" name="TaggingLokasi" value="{{ $edittersurvei->TaggingLokasi }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukan Kordinat">
                    </div>
                </div>
                <div class="mb-6 flex gap-6">
                    <div class="flex-1">
                        <label class="block text-base font-medium text-gray-700 mb-2">Keterangan</label>
                        <input type="text" name="Keterangan" value="{{ $edittersurvei->Keterangan }}"
                            class="w-full border rounded-lg px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tambahkan Keterangan Jika Ada">
                    </div>
                </div>
                <button type="submit"
                    class="mt-6 w-full bg-green-600 text-white py-3 rounded-lg font-semibold text-base hover:bg-green-700 transition">
                    Tambah Data Permohonan PBPD
                </button>
            </form>
            <!-- Button Tambah Data Permohonan PBPD -->

        </div>
    </main>
@endsection

@section('script')
@endsection
