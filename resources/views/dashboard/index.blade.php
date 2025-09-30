@extends('layout.app')

@section('style')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('content')
    <!-- Main Content -->
    <main class="flex-1 p-10 pt-1 overflow-hidden">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Dashboard</h1>
            <div class="flex items-center gap-2">
                <input type="date" class="border rounded px-2 py-1 text-main" value="{{ date('Y-m-d') }}">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-[#14a2ba] shadow rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Daftar Permohonan PBPD</span>
                <div class="flex justify-between items-center w-full mb-2">
                    <span class="text-3xl font-bold text-white">{{ $jumlahPermohonan }}</span>
                    
                </div>
                <a href="#" class="text-white underline text-sm">Selengkapnya</a>
            </div>
            <div class="bg-[#efe62f] rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Permohonan PBPD tersurvey</span>
                <span class="text-3xl font-bold mb-2">{{ $jumlahTersurvei }}</span>
                <a href="#" class="text-white underline text-sm">Selengkapnya</a>
            </div>
            <div class="bg-green-600 rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Permohonan PBPD Terkirim</span>
                <span class="text-3xl font-bold mb-2">0</span>
                <a href="#" class="text-white underline text-sm">Selengkapnya</a>
            </div>
        </div>



        <div class="mb-2">
            <h1 class="text-2xl font-bold text-main mb-4 md:mb-0">Peta Persebaran</h1>
        </div>
        <!-- Peta Leaflet -->
        <div class="rounded-xl shadow-main overflow-hidden" style="height:280px;">
            <div id="map"></div>
        </div>
    </main>
@endsection

@section('script')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-7.797068, 110.370529], 12); // Koordinat default

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Custom icon kuning
            var yellowIcon = L.icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-yellow.png',
                shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var lokasi = @json($lokasi);

            lokasi.forEach(function(item) {
                var koordinat = item.TaggingLokasi.split(',');
                if (koordinat.length === 2) {
                    var lat = parseFloat(koordinat[0]);
                    var lng = parseFloat(koordinat[1]);
                    if (!isNaN(lat) && !isNaN(lng)) {
                        var popupContent = `
                            <div>
                                <strong>IDPEL:</strong> ${item.permohonan_pbpd?.IdPel ?? '-'}<br>
                                <strong>Nama Pemohon:</strong> ${item.permohonan_pbpd?.NamaPemohon ?? '-'}<br>
                                <strong>Status:</strong> ${item.permohonan_pbpd?.Status ?? '-'}
                            </div>
                        `;
                        L.marker([lat, lng], {
                            icon: yellowIcon
                        }).addTo(map).bindPopup(popupContent);
                    }
                }
            });
        });
    </script>
@endsection
