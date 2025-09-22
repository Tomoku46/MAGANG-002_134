@extends('layout.app')

@section('style')
    <style>

    </style>
@endsection

@section('content')
<main>
  <div class="p-6">
    <!-- Judul -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">PBPD Tersurvei</h1>
              <div class="relative w-full max-w-sm">
    <input 
      type="text" 
      placeholder="Cari data..." 
      class="w-full pl-10 pr-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
    >
    <!-- Icon Search -->
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
      </svg>
    </div>
  </div>

        </div>
    <!-- Batas Waktu -->
    <div class="bg-white shadow p-6 rounded mb-6">
      <table class="min-w-full border-separate border-spacing-x-4 border-spacing-y-2">
        <thead>
          <tr>
            <th class="px-4 py-2 text-left"><p class="text-2xl">Jumlah Permohonan PBPD Tersurvei</p></th>
            <th> <p class="text-3xl font-bold mt-4">XX</p></th>
          </tr>
        </thead>
      </table>
    </div>

    <!-- Riwayat Pengajuan -->
    <div class="bg-white shadow rounded">
      <div class="flex justify-between items-center border-b p-4">
        <h2 class="font-semibold text-lg">Riwayat Permohonan PBPD Tersurvei</h2>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full border-collapse">
          <thead class="bg-gray-50 border-b">
            <tr>
              <th class="px-4 py-2 text-center">#</th>
              <th class="px-4 py-2 text-center">IDPel</th>
              <th class="px-4 py-2 text-center">Nama</th>
              <th class="px-4 py-2 text-center">Tanggal</th>
              <th class="px-4 py-2 text-center">No whatsapp</th>
              <th class="px-4 py-2 text-center">Ams</th>
              <th class="px-4 py-2 text-center">Daya Lama</th>
              <th class="px-4 py-2 text-center">Daya Baru</th>
              <th class="px-4 py-2 text-center">Selisih Daya (VA)</th>
              <th class="px-4 py-2 text-center">Ampere</th>
              <th class="px-4 py-2 text-center">Status</th>
              <th class="px-4 py-2 text-center">Aksi</th> 
              <th class="px-4 py-2 text-center">Detail</th>
            </tr>
            
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="px-4 py-3 text-center">1</td>
              <td class="px-4 py-3 text-center">521090294957</td>
              <td class="px-4 py-3">PT. ABADI PRIMA INTI KARYA</td>
              <td class="px-4 py-3 text-center">04/02/2025</td>
              <td class="px-4 py-3 text-center">0899999999999</td>
              <td class="px-4 py-3 text-center">0091/2025</td>
              <td class="px-4 py-3 text-center">197000</td>
              <td class="px-4 py-3 text-center">345000</td>
              <td class="px-4 py-3 text-center">10</td>
              <td class="px-4 py-3 text-center">10</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                  Permohonan
                </span>
              </td>
              <td class="px-4 py-3"><button class="bg-blue-500 text-white px-4 py-1 rounded">Terkirim ke pemasaran</button></td>
              <td class="px-4 py-3">
                <button class="bg-green-500 text-white px-4 py-1 rounded">Detail</button>
              </td>
            </tr>

             <tr class="bg-gray-200 border-b">
              <td class="px-4 py-3 text-center">1</td>
              <td class="px-4 py-3 text-center">521090294957</td>
              <td class="px-4 py-3">PT. ABADI PRIMA INTI KARYA</td>
              <td class="px-4 py-3 text-center">04/02/2025</td>
              <td class="px-4 py-3 text-center">0899999999999</td>
              <td class="px-4 py-3 text-center">0091/2025</td>
              <td class="px-4 py-3 text-center">197000</td>
              <td class="px-4 py-3 text-center">345000</td>
              <td class="px-4 py-3 text-center">10</td>
              <td class="px-4 py-3 text-center">10</td>
              <td class="px-4 py-3 text-center">
                <span class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                  Permohonan
                </span>
              </td>
              <td class="px-4 py-3"><button class="bg-blue-500 text-white px-4 py-1 rounded">Terkirim ke pemasaran</button></td>
              <td class="px-4 py-3">
                <button class="bg-green-500 text-white px-4 py-1 rounded">Detail</button>
              </td>
            </tr>

            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
    
@endsection

@section('script')
@endsection

