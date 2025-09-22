<!-- filepath: c:\laragon\www\tugasakhirmplm\resources\views\home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body { font-family: 'Inter', sans-serif; font-size: 12px; }
        h1, h2, h3, h4, h5, h6 { font-size: 1rem; }
        .sidebar-bg { background-color: #125d72; }
        .text-main { color: #125d72; }
        .bg-main { background-color: #125d72; }
        .shadow-main { box-shadow: 0 4px 24px 0 rgba(18,93,114,0.12); }
        .sidebar-active { background-color: #0e3c4c; }
        .font-bold { font-size: 1rem; }
        .text-lg { font-size: 0.95rem; }
        .text-xl { font-size: 1.1rem; }
        .text-2xl { font-size: 1.2rem; }
        .text-3xl { font-size: 1.3rem; }
        .text-sm { font-size: 0.8rem; }
        .text-xs { font-size: 0.7rem; }
        /* Perkecil input dan button */
        input, button { font-size: 0.9rem; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex" x-data="{ sidebarOpen: true }">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full h-16 bg-white shadow flex items-center justify-between z-30 px-6">
        <!-- Hamburger Menu -->
        <button @click="sidebarOpen = !sidebarOpen" class="mr-4 focus:outline-none">
            <svg class="w-7 h-7 text-main" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <span class="font-bold text-xl text-main"></span>
        <!-- Profile Circle -->
        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('img/profile.png') }}" alt="Profile" class="w-10 h-10 object-cover rounded-full">
        </div>
    </nav>

    <!-- Sidebar-->
    <aside
        x-data="{ activeMenu: 'dashboard' }"
        x-show="sidebarOpen"
        x-transition:enter="transition-all duration-500"
        x-transition:enter-start="-translate-x-64 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition-all duration-500"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-64 opacity-0"
        class="sidebar-bg w-64 min-h-screen flex flex-col py-8 px-4 shadow-lg fixed md:static z-20"
        style="top:4rem; left:0;"
    >
        <!-- Tambahkan margin atas lebih besar agar logo dan teks Smart RT punya jarak dari navbar -->
        <div class="mt-16 flex flex-col h-full">
            <div class="flex items-center gap-3 mb-8">
                <img src="{{ asset('img/pln.jpg') }}" alt="Logo" class="h-10 w-10 rounded-full border-2 border-white shadow">
                <span class="font-bold text-lg text-white">SMART-PLN</span>
            </div>
            <nav class="flex-1">
                <ul class="space-y-1">
                    <li>
                        <a href="{{ url('/dashboard') }}"
                           @click="activeMenu = 'dashboard'"
                           :class="activeMenu === 'dashboard' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/masterdata') }}"
                           @click="activeMenu = 'masterdata'"
                           :class="activeMenu === 'masterdata' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a4 4 0 01-8 0m8 0a4 4 0 00-8 0"/>
                            </svg>
                            Master Data
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/inputdatapbpd') }}"
                           @click="activeMenu = 'pbpd'"
                           :class="activeMenu === 'pbpd' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a4 4 0 01-8 0m8 0a4 4 0 00-8 0"/>
                            </svg>
                            Input Data PBPD
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           @click="activeMenu = 'survey'"
                           :class="activeMenu === 'survey' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.104.896-2 2-2s2 .896 2 2-.896 2-2 2-2-.896-2-2z"/>
                            </svg>
                            Input Hasil Survey
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           @click="activeMenu = 'nodin'"
                           :class="activeMenu === 'nodin' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Input Nomor NODIN
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/riwayatpengajuan') }}"
                           @click="activeMenu = 'riwayat'"
                           :class="activeMenu === 'riwayat' ? 'sidebar-active text-white font-semibold' : 'text-white font-semibold'"
                           class="flex items-center gap-3 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17l4 4 4-4m-4-5v9"/>
                            </svg>
                            Riwayat Hapus Data
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="mt-auto pt-8 text-xs text-white">
                Logged in as:<br>
                <span class="font-bold">Agun Wiguna</span>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 pt-24">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Dashboard</h1>
            <div class="flex items-center gap-2">
                <input type="date" class="border rounded px-2 py-1 text-main" value="{{ date('Y-m-d') }}">
                <span class="text-main font-semibold">-</span>
                <input type="date" class="border rounded px-2 py-1 text-main" value="{{ date('Y-m-d') }}">
            </div>
        </div>
        <div class="bg-main rounded-xl shadow-main p-4 flex flex-col md:flex-row items-center justify-between mb-4">
            <div>
                <h2 class="text-xl font-bold text-white mb-1">Selamat Datang Administrator!</h2>
                <p class="text-white text-sm">Di Website Pendataan PDPB PLN UP3 Daerah Istimewa Yogyakarta</p>
            </div>
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
        <!-- Peta Leaflet -->
        <div class="rounded-xl shadow-main overflow-hidden mb-8" style="height:400px;">
            <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-7.797068, 110.370529], 12); // Koordinat Yogyakarta
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);
        });
    </script>
</body>
</html>