@extends('layouts.app')

@section('content')
<style>
    .gradient-bg {
        background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdf4 100%);
    }
    .card-shadow {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .card-hover:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .status-active {
        background: linear-gradient(135deg, #10b981, #059669);
    }
    .status-warning {
        background: linear-gradient(135deg, #f59e0b, #d97706);
    }
    .status-inactive {
        background: linear-gradient(135deg, #6b7280, #4b5563);
    }
    .desktop-container {
        max-width: 1200px;
        margin: 0 auto;
    }
    .rounded-3xl {
        border-radius: 1.5rem;
    }
    .rounded-4xl {
        border-radius: 2rem;
    }
    .backdrop-blur-sm {
        backdrop-filter: blur(8px);
    }
    .notification-badge {
        position: absolute;
        top: -2px;
        right: -2px;
        width: 8px;
        height: 8px;
        background: #ef4444;
        border-radius: 50%;
        border: 2px solid white;
    }
    .toggle-switch {
        width: 44px;
        height: 24px;
        background: #e5e7eb;
        border-radius: 12px;
        position: relative;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .toggle-switch.active {
        background: #10b981;
    }
    .toggle-switch::after {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 50%;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .toggle-switch.active::after {
        transform: translateX(20px);
    }
</style>

<div class="gradient-bg min-h-screen">
    <div class="desktop-container">
        <!-- Desktop Header -->
        <header class="bg-white/90 backdrop-blur-sm shadow-sm sticky top-0 z-50 rounded-b-3xl mx-4 mt-4">
            <div class="px-8 py-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">BioWatch-x</h1>
                            <p class="text-sm text-gray-500">Sistem Monitoring Cerdas</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                            <div class="notification-badge"></div>
                        </div>
                        <a href="{{ route('login') }}" class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center hover:bg-emerald-200 transition-colors">
                            <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="px-6 py-8 space-y-8">
            <!-- Status System Section -->
            <div class="bg-white rounded-4xl p-8 card-shadow">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Status Sistem</h2>
                    <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">Real-time</span>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Active Sensors -->
                    <div class="bg-gradient-to-br from-emerald-50 via-emerald-100 to-emerald-50 rounded-3xl p-6 card-hover">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 status-active rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-4xl font-bold text-emerald-700">8<span class="text-2xl text-gray-400">/8</span></p>
                                <p class="text-sm text-emerald-600 font-medium">Sensor Aktif</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Live Cameras -->
                    <div class="bg-gradient-to-br from-blue-50 via-blue-100 to-blue-50 rounded-3xl p-6 card-hover">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-4xl font-bold text-blue-700">6<span class="text-2xl text-gray-400">/8</span></p>
                                <p class="text-sm text-blue-600 font-medium">Kamera Live</p>
                            </div>
                        </div>
                    </div>

                    <!-- Last Detection -->
                    <div class="bg-gradient-to-br from-orange-50 via-orange-100 to-orange-50 rounded-3xl p-6 card-hover">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 status-warning rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-orange-800">Deteksi Terakhir</p>
                                    <p class="text-xs text-orange-600">Babi Hutan - Blok A</p>
                                </div>
                            </div>
                            <span class="text-sm bg-orange-200 text-orange-800 px-3 py-1.5 rounded-full font-medium">2m</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sensor Control Section -->
            <div class="bg-white rounded-4xl p-8 card-shadow">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Kontrol Sensor</h2>
                    <button class="text-emerald-600 text-sm font-medium hover:text-emerald-700 transition-colors">Lihat Semua</button>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Sensor Utara -->
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-3xl p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 status-active rounded-xl flex items-center justify-center shadow-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                                </svg>
                            </div>
                            <div class="toggle-switch active" data-sensor="utara"></div>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg mb-1">Sensor Utara</h3>
                        <p class="text-sm text-gray-600 mb-3">Blok A</p>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                            <span class="text-sm text-emerald-600 font-medium">AKTIF</span>
                        </div>
                    </div>

                    <!-- Sensor Timur -->
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-3xl p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 status-active rounded-xl flex items-center justify-center shadow-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div class="toggle-switch active" data-sensor="timur"></div>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg mb-1">Sensor Timur</h3>
                        <p class="text-sm text-gray-600 mb-3">Blok B</p>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                            <span class="text-sm text-emerald-600 font-medium">AKTIF</span>
                        </div>
                    </div>

                    <!-- Sensor Barat - Inactive -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 status-inactive rounded-xl flex items-center justify-center shadow-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <div class="toggle-switch" data-sensor="barat"></div>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg mb-1">Sensor Barat</h3>
                        <p class="text-sm text-gray-600 mb-3">Blok C</p>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                            <span class="text-sm text-red-600 font-medium">MATI</span>
                        </div>
                    </div>

                    <!-- Sensor Selatan -->
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-3xl p-6 card-hover">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 status-active rounded-xl flex items-center justify-center shadow-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div class="toggle-switch active" data-sensor="selatan"></div>
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg mb-1">Sensor Selatan</h3>
                        <p class="text-sm text-gray-600 mb-3">Blok D</p>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full mr-2"></span>
                            <span class="text-sm text-emerald-600 font-medium">AKTIF</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Alerts Section -->
            <div class="bg-white rounded-4xl p-8 card-shadow">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Peringatan Terkini</h2>
                    <button class="text-emerald-600 text-sm font-medium hover:text-emerald-700 transition-colors">Lihat Semua</button>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 bg-orange-50 rounded-2xl border border-orange-100">
                        <div class="w-12 h-12 status-warning rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Babi Hutan Terdeteksi</h3>
                            <p class="text-sm text-gray-600">Blok A Utara - 2 menit yang lalu</p>
                        </div>
                        <span class="text-xs bg-orange-200 text-orange-800 px-3 py-1.5 rounded-full font-medium">TINGGI</span>
                    </div>

                    <div class="flex items-center space-x-4 p-4 bg-yellow-50 rounded-2xl border border-yellow-100">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Orangutan Terlihat</h3>
                            <p class="text-sm text-gray-600">Blok C Barat - 1 jam yang lalu</p>
                        </div>
                        <span class="text-xs bg-yellow-200 text-yellow-800 px-3 py-1.5 rounded-full font-medium">SEDANG</span>
                    </div>

                    <div class="flex items-center space-x-4 p-4 bg-green-50 rounded-2xl border border-green-100">
                        <div class="w-12 h-12 status-active rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Semua Normal</h3>
                            <p class="text-sm text-gray-600">Blok E Tengah - Aktivitas normal</p>
                        </div>
                        <span class="text-xs bg-green-200 text-green-800 px-3 py-1.5 rounded-full font-medium">NORMAL</span>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-4xl p-8 card-shadow">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">FAQ</h2>
                    <button class="text-emerald-600 text-sm font-medium hover:text-emerald-700 transition-colors">Lihat Semua</button>
                </div>

                <div class="space-y-4">
                    <div class="faq-item bg-emerald-50 border border-emerald-100 rounded-2xl p-4 cursor-pointer hover:bg-emerald-100 transition-colors">
                        <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                            Apa itu sistem BioWatch-x?
                            <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-3 text-sm text-gray-600 leading-relaxed">
                            BioWatch-x adalah sistem monitoring real-time berbasis Internet of Things (IoT) yang dirancang untuk mendeteksi pergerakan babi hutan dan orangutan di perkebunan kelapa sawit. Sistem ini memberikan peringatan dini kepada petani sehingga mereka dapat merespons ancaman secara cepat dan efisien.
                        </p>
                    </div>

                    <div class="faq-item bg-gray-50 border border-gray-100 rounded-2xl p-4 cursor-pointer hover:bg-gray-100 transition-colors">
                        <h3 class="text-gray-700 font-medium flex justify-between items-center">
                            Bagaimana cara kerja sistem ini?
                            <span class="faq-icon transition-transform duration-300 text-gray-600 text-lg">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-3 text-sm text-gray-600 leading-relaxed">
                            Sistem ini menggunakan kombinasi sensor gerak, kamera, dan teknologi IoT untuk mendeteksi keberadaan satwa liar. Ketika terdeteksi, sistem akan mengirimkan notifikasi real-time kepada petani dan mengaktifkan alarm suara serta pencahayaan yang dirancang untuk menghalau satwa tanpa menyakiti mereka.
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <!-- Bottom Navigation -->
        <nav class="bg-white/90 backdrop-blur-sm shadow-lg sticky bottom-0 rounded-t-4xl mx-4 mb-4">
            <div class="px-8 py-6">
                <div class="flex justify-around items-center max-w-md mx-auto">
                    <button class="flex flex-col items-center space-y-2 text-emerald-600 group">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                        </div>
                        <span class="text-sm font-medium">Home</span>
                    </button>
                    <button class="flex flex-col items-center space-y-2 text-gray-400 group hover:text-gray-600">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                        </div>
                        <span class="text-sm">Analytics</span>
                    </button>
                    <button class="flex flex-col items-center space-y-2 text-gray-400 group hover:text-gray-600">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm">Map</span>
                    </button>
                    <button class="flex flex-col items-center space-y-2 text-gray-400 group hover:text-gray-600">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-sm">Settings</span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</div>

<script>
    // Custom toggle switch functionality
    document.querySelectorAll('.toggle-switch').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const card = this.closest('.rounded-3xl');
            const statusDot = card.querySelector('.w-2.h-2');
            const statusText = card.querySelector('.font-medium:last-child');
            const icon = card.querySelector('.w-12');
            
            if (this.classList.contains('active')) {
                // Change to inactive state
                this.classList.remove('active');
                card.className = card.className.replace('from-emerald-50 to-emerald-100', 'from-gray-50 to-gray-100');
                if (statusDot) {
                    statusDot.className = statusDot.className.replace('bg-emerald-500', 'bg-red-500');
                }
                if (statusText) {
                    statusText.textContent = 'MATI';
                    statusText.className = statusText.className.replace('text-emerald-600', 'text-red-600');
                }
                if (icon) {
                    icon.className = 'w-12 h-12 status-inactive rounded-xl flex items-center justify-center shadow-md';
                }
            } else {
                // Change to active state
                this.classList.add('active');
                card.className = card.className.replace('from-gray-50 to-gray-100', 'from-emerald-50 to-emerald-100');
                if (statusDot) {
                    statusDot.className = statusDot.className.replace('bg-red-500', 'bg-emerald-500');
                }
                if (statusText) {
                    statusText.textContent = 'AKTIF';
                    statusText.className = statusText.className.replace('text-red-600', 'text-emerald-600');
                }
                if (icon) {
                    icon.className = 'w-12 h-12 status-active rounded-xl flex items-center justify-center shadow-md';
                }
            }
        });
    });

    // FAQ Toggle functionality
    document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', function() {
            const answer = this.querySelector('.faq-answer');
            const icon = this.querySelector('.faq-icon');
            
            // Close other FAQ items
            document.querySelectorAll('.faq-answer').forEach(ans => {
                if (ans !== answer && !ans.classList.contains('hidden')) {
                    ans.classList.add('hidden');
                    ans.parentElement.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current FAQ item
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        });
    });

    // Simulate real-time updates
    setInterval(() => {
        const timeElements = document.querySelectorAll('[data-time]');
        timeElements.forEach(element => {
            const minutes = Math.floor(Math.random() * 10) + 1;
            element.textContent = `${minutes}m`;
        });
    }, 30000);

    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all cards for animation
    document.querySelectorAll('.card-shadow').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Navigation interaction
    document.querySelectorAll('nav button').forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('nav button').forEach(btn => {
                btn.className = btn.className.replace('text-emerald-600', 'text-gray-400');
            });
            // Add active class to clicked button
            this.className = this.className.replace('text-gray-400', 'text-emerald-600');
        });
    });

    // Add hover effects for better interactivity
    document.querySelectorAll('.card-hover').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-4px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Add click feedback for touch devices
    document.querySelectorAll('.toggle-switch, .faq-item, button').forEach(element => {
        element.addEventListener('touchstart', function() {
            this.style.transform = 'scale(0.98)';
        });

        element.addEventListener('touchend', function() {
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 100);
        });
    });

    // Initialize tooltips or help text (optional)
    document.querySelectorAll('[data-tooltip]').forEach(element => {
        element.addEventListener('mouseenter', function() {
            const tooltip = document.createElement('div');
            tooltip.className = 'absolute bg-gray-800 text-white text-xs px-2 py-1 rounded shadow-lg z-50';
            tooltip.textContent = this.getAttribute('data-tooltip');
            this.appendChild(tooltip);
        });

        element.addEventListener('mouseleave', function() {
            const tooltip = this.querySelector('.absolute.bg-gray-800');
            if (tooltip) tooltip.remove();
        });
    });
</script>
@endsection