@extends('layout.app')

@section('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            width: 100%;
            height: 100%;
        }
        /* Style untuk koordinat yang bisa di-klik di dalam popup */
        .copy-coords {
            cursor: pointer;
            color: #007bff; /* Warna biru agar terlihat seperti link */
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <main class="flex-1 p-10 pt-1 overflow-hidden">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <h1 class="text-3xl font-bold text-main mb-4 md:mb-0">Dashboard</h1>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-[#14a2ba] shadow rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Daftar Permohonan</span>
                <div class="flex justify-between items-center w-full mb-2">
                    <span class="text-3xl font-bold text-white">{{ $jumlahPermohonan }}</span>

                </div>
                <a href="{{ url('/permohonanpbpd') }}" class="text-white underline text-sm">Selengkapnya</a>
            </div>
            <div class="bg-purple-600 rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Permohonan Sudah Disurvei</span>
                <span class="text-3xl font-bold mb-2">{{ $jumlahTersurvei }}</span>
                <a href="{{ url('/pbpdtersurvei') }}" class="text-white underline text-sm">Selengkapnya</a>
            </div>
            <div class="bg-green-600 rounded-xl shadow-main p-6 text-white flex flex-col items-start">
                <span class="font-bold text-lg mb-2">Permohonan Sudah Dikirim</span>
                <span class="text-3xl font-bold mb-2">{{ $jumlahTerkirim }}</span>
                <a href="{{ url('/pbpdterkirim') }}" class="text-white underline text-sm">Selengkapnya</a>
            </div>
        </div>



        <div class="mb-2">
            <h1 class="text-2xl font-bold text-main mb-4 md:mb-0">Peta Persebaran</h1>
        </div>
        <div class="rounded-xl shadow-main overflow-hidden" style="height:280px;">
            <div id="map"></div>
        </div>
    </main>
@endsection

@section('script')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Fungsi untuk menampilkan notifikasi custom
        function showNotification(message, isError = false) {
            const notification = document.createElement('div');
            notification.textContent = message;

            // Styling notifikasi
            Object.assign(notification.style, {
                position: 'fixed',
                bottom: '20px',
                left: '50%',
                transform: 'translateX(-50%)',
                padding: '12px 20px',
                borderRadius: '8px',
                backgroundColor: isError ? '#ef4444' : '#22c55e', // Merah untuk error, Hijau untuk sukses
                color: 'white',
                boxShadow: '0 4px 8px rgba(0,0,0,0.2)',
                zIndex: '10001',
                transition: 'opacity 0.3s ease, bottom 0.3s ease',
                opacity: '0',
            });

            document.body.appendChild(notification);

            // Animasi masuk
            setTimeout(() => {
                notification.style.opacity = '1';
                notification.style.bottom = '40px';
            }, 10);

            // Animasi keluar dan hapus elemen
            setTimeout(() => {
                notification.style.opacity = '0';
                notification.style.bottom = '20px';
                setTimeout(() => notification.remove(), 300);
            }, 2500);
        }

        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-7.797068, 110.370529], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Definisikan icon untuk masing-masing status
            var icons = {
                'tersurvei': L.icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-violet.png',
                    shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                }),
                'terkirim': L.icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
                    shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                }),
                'default': L.icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-grey.png',
                    shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                }),
            };

            var lokasi = @json($lokasi);

            lokasi.forEach(function(item) {
                if (item.TaggingLokasi) {
                    var koordinat = item.TaggingLokasi.split(',');
                    if (koordinat.length === 2) {
                        var lat = parseFloat(koordinat[0]);
                        var lng = parseFloat(koordinat[1]);

                        if (!isNaN(lat) && !isNaN(lng)) {
                            var status = (item.permohonan_pbpd?.Status ?? '').toLowerCase();
                            var icon = icons[status] || icons['default'];
                            var koordinatText = item.TaggingLokasi;

                            // Tambahkan span dengan class 'copy-coords' untuk membungkus koordinat
                            var popupContent = `
                                <div>
                                    <strong>IDPEL:</strong> ${item.permohonan_pbpd?.IdPel ?? '-'}<br>
                                    <strong>Nama Pemohon:</strong> ${item.permohonan_pbpd?.NamaPemohon ?? '-'}<br>
                                    <strong>Status:</strong> ${item.permohonan_pbpd?.Status ?? '-'}<br>
                                    <strong>Koordinat:</strong> 
                                    <span class="copy-coords" title="Salin koordinat">${koordinatText}</span>
                                </div>
                            `;

                            var marker = L.marker([lat, lng], { icon: icon })
                                          .addTo(map)
                                          .bindPopup(popupContent);

                            // Tambahkan event listener saat popup dibuka
                            marker.on('popupopen', function() {
                                const copyElement = document.querySelector('.copy-coords');
                                if (copyElement) {
                                    copyElement.addEventListener('click', function() {
                                        const coordsToCopy = this.textContent;
                                        navigator.clipboard.writeText(coordsToCopy).then(() => {
                                            showNotification('Koordinat berhasil disalin!');
                                        }).catch(err => {
                                            console.error('Gagal menyalin: ', err);
                                            showNotification('Gagal menyalin ke clipboard.', true);
                                        });
                                    });
                                }
                            });
                        }
                    }
                }
            });
        });
    </script>
@endsection