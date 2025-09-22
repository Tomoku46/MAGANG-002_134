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
    <main class="flex-1 p-10 pt-1 ">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Dashboard</h1>
            <div class="flex items-center gap-2">
                <input type="date" class="border rounded px-2 py-1 text-main" value="{{ date('Y-m-d') }}">
            </div>
        </div>

        <div class="mb-[2em]">
            <div class="bg-[#176B87] rounded-xl shadow-main p-6">
                <h2 class="text-xl font-bold text-white mb-1">Selamat Datang Administrator!</h2>
                <p class="text-white text-sm">Di Website Pendataan PDPB PLN UP3 Daerah Istimewa Yogyakarta</p>
            </div>
        </div>

        <div class="mb-2">
            <h1 class="text-2xl font-bold text-main mb-4 md:mb-0">Statistik</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-blue-600 rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Daftar Permohonan PBPD</span>
                <span class="text-3xl font-bold mb-2">0</span>
                <a href="#" class="text-white underline text-sm">Selengkapnya</a>
            </div>
            <div class="bg-yellow-500 rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Permohonan PBPD tersurvey</span>
                <span class="text-3xl font-bold mb-2">0</span>
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
        <div class="rounded-xl shadow-main overflow-hidden mb-8" style="height:400px;">
            <div id="map"></div>
        </div>
    </main>
@endsection

@section('script')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-7.797068, 110.370529], 12); // Koordinat Yogyakarta
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);
        });
    </script>
@endsection
