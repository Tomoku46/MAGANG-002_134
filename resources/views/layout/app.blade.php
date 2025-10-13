<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    @include('partial.head')
    @yield('style')
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div id="sidebar"
            class="bg-white w-64 shadow-md fixed inset-y-0 left-0 transform -translate-x-64 transition-transform duration-300 ease-in-out z-50 h-full">
            <div class="p-4 font-bold text-lg border-b flex justify-between items-center">
                <span>SMART PBPD</span>
                <!-- Tombol close -->
                <button id="closeBtn" class="text-gray-600 hover:text-black lg:hidden">✕</button>
            </div>

            <!-- Wrapper menu -->
            <div class="flex flex-col justify-between h-[40em] p-4">
                <!-- Menu Atas -->
                <ul class="space-y-3">
                    <p class="font-light">Navigasi</p>
                    <li><a href="{{ url('/dashboard') }}" class="block p-2 rounded hover:bg-gray-200">Dashboard</a></li>
                    <li><a href="{{ url('/masterdata') }}" class="block p-2 rounded hover:bg-gray-200 mb-7">Daftar PBPD</a></li>
                    <p class="font-light">PBPD</p>
                    <li><a href="{{ url('/permohonanpbpd') }}" class="block p-2 rounded hover:bg-gray-200">Permohonan
                            PBPD</a></li>
                    <li><a href="{{ url('pbpdtersurvei') }}" class="block p-2 rounded hover:bg-gray-200">PBPD
                            Tersurvei</a></li>
                    <li><a href="{{ url('pbpdterkirim') }}" class="block p-2 rounded hover:bg-gray-200">PBPD
                            Terkirim</a></li>
                    <li><a href="{{ url('/riwayathapus') }}" class="block p-2 rounded hover:bg-gray-200">Riwayat
                            hapus</a></li>
                </ul>

                <!-- Logout di bawah -->
                <ul>
                    <li><a href="#" class="block p-2 rounded hover:bg-gray-200">Logout</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Section -->
        <div id="mainContent" class="flex-1 flex flex-col transition-all duration-300 ease-in-out ml-0 overflow-hidden">
            <!-- Header -->
            <header class="bg-gradient-to-r from-[#035B71] to-[#00A2B9] shadow p-3 flex items-center justify-between fixed top-0 w-full z-50">
                <button id="toggleBtn" class="px-3 py-2 bg-white text-black rounded">
                    ☰
                </button>
                <h1 class="font-bold text-xl"></h1>
            </header>

            <!-- Content -->
            <main class="p-6 pt-16">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="//cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    @yield('script')

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');
        const closeBtn = document.getElementById('closeBtn');
        const mainContent = document.getElementById('mainContent');

        let isOpen = false;

        function openSidebar() {
            sidebar.classList.remove('-translate-x-64');
            mainContent.classList.add('ml-64');
            isOpen = true;
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-64');
            mainContent.classList.remove('ml-64');
            isOpen = false;
        }

        toggleBtn.addEventListener('click', () => {
            if (isOpen) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                closeSidebar();
            });
        }
    </script>
</body>

</html>
