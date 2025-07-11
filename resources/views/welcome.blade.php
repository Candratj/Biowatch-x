@extends('layouts.app')

@section('content')
    {{-- Navbar --}}
    <header class="mb-20">
        <nav class="fixed w-full z-20 top-0 start-0 bg-gradient-to-r from-green-300 to-green-200 shadow-lg">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-3 px-6">
                <!-- Logo dengan efek hover -->
                <a href="#" class="flex items-center space-x-3 group">
                    <div
                        class="relative overflow-hidden rounded-lg transition-all duration-300 transform group-hover:scale-105 bg-white p-2">
                        <div class="w-8 h-8 bg-green-600 rounded-md flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L13.09 8.26L20 9L13.09 9.74L12 16L10.91 9.74L4 9L10.91 8.26L12 2Z" />
                                <path
                                    d="M12 8C12 8 14 10 16 12C18 14 16 16 16 16C16 16 14 14 12 16C10 14 8 16 8 16C8 16 6 14 8 12C10 10 12 8 12 8Z" />
                            </svg>
                        </div>
                        <div class="absolute inset-0 bg-green-400 opacity-0 group-hover:opacity-20 transition-opacity">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <span
                            class="text-2xl font-bold text-green-800 transition-all duration-300 group-hover:text-green-600">BioWatch-x</span>
                        <span class="text-sm text-green-700 transition-all duration-300 group-hover:text-green-800">Sistem
                            Monitoring Cerdas</span>
                    </div>
                </a>

                <!-- Desktop Menu dengan efek hover - CENTERED -->
                <div class="hidden lg:flex lg:items-center lg:space-x-8 text-sm font-medium absolute left-1/2 transform -translate-x-1/2"
                    id="menu">
                    <a href="#status"
                        class="text-green-800 py-2 px-4 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                        <span class="relative z-10">Status Sistem</span>
                        <div
                            class="absolute bottom-0 left-0 w-0 h-1 bg-green-600 group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a href="#pemantauan"
                        class="text-green-800 py-2 px-4 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                        <span class="relative z-10">Pemantauan</span>
                        <div
                            class="absolute bottom-0 left-0 w-0 h-1 bg-green-600 group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a href="#peringatan"
                        class="text-green-800 py-2 px-4 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                        <span class="relative z-10">Peringatan</span>
                        <div
                            class="absolute bottom-0 left-0 w-0 h-1 bg-green-600 group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                    <a href="#kontrol"
                        class="text-green-800 py-2 px-4 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative overflow-hidden group">
                        <span class="relative z-10">Kontrol</span>
                        <div
                            class="absolute bottom-0 left-0 w-0 h-1 bg-green-600 group-hover:w-full transition-all duration-300">
                        </div>
                    </a>
                </div>
                <!-- Hamburger Menu Button dengan animasi -->
                <button id="menu-toggle"
                    class="lg:hidden text-green-800 focus:outline-none hover:bg-green-400 p-2 rounded-lg transition-all duration-300 transform hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>
                </button>

                <!-- Right Side Items -->
                <div class="hidden lg:flex lg:items-center lg:space-x-4">
                    <!-- Notification Bell with Badge -->
                    <div class="relative">
                        <button
                            class="text-green-800 p-2 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">3</span>
                        </button>
                    </div>

                    <!-- Settings Button -->
                    <button
                        class="text-green-800 p-2 rounded-lg hover:bg-green-400 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Login Button -->
                    <a href="{{ route('login') }}"
                        class="text-white py-2 px-4 rounded-lg bg-green-600 hover:bg-green-700 font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-md flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Login</span>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu dengan animasi -->
            <div id="mobile-menu"
                class="hidden lg:hidden flex flex-col items-center space-y-3 py-4 bg-green-400 border-t border-green-300 text-sm font-medium">
                <a href="#status"
                    class="text-green-800 py-2 px-6 w-4/5 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center">Status
                    Sistem</a>
                <a href="#pemantauan"
                    class="text-green-800 py-2 px-6 w-4/5 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center">Pemantauan</a>
                <a href="#peringatan"
                    class="text-green-800 py-2 px-6 w-4/5 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center">Peringatan</a>
                <a href="#kontrol"
                    class="text-green-800 py-2 px-6 w-4/5 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center">Kontrol</a>

                <!-- Mobile Notification -->
                <div class="flex items-center space-x-4">
                    <button
                        class="text-green-800 p-2 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md relative">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">3</span>
                    </button>

                    <button
                        class="text-green-800 p-2 rounded-lg hover:bg-green-500 hover:text-white transition-all duration-300 transform hover:scale-105 hover:shadow-md">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <a href="#login"
                    class="text-white py-2 px-4 rounded-lg bg-green-600 hover:bg-green-700 font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-md flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Login</span>
                </a>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const menuToggle = document.getElementById('menu-toggle');
                    const mobileMenu = document.getElementById('mobile-menu');

                    menuToggle.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                        // Tambahkan efek animasi ketika toggle menu
                        if (!mobileMenu.classList.contains('hidden')) {
                            mobileMenu.style.animation = 'fadeIn 0.3s ease-in-out';
                        } else {
                            mobileMenu.style.animation = 'fadeOut 0.3s ease-in-out';
                        }
                    });
                });

                // Tambahkan CSS animasi untuk toggle menu
                const style = document.createElement('style');
                style.textContent = `
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(-20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
                @keyframes fadeOut {
                    from { opacity: 1; transform: translateY(0); }
                    to { opacity: 0; transform: translateY(-20px); }
                }
            `;
                document.head.appendChild(style);
            </script>
        </nav>
    </header>
    {{-- End Navbar --}}

    {{-- Status Sistem --}}
    <section id="status-sistem"
        class="relative max-w-7xl mx-auto px-4 py-12 overflow-hidden bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <!-- Header Section -->
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Monitoring
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Status Sistem
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Pantau status sensor dan deteksi terakhir dari sistem monitoring kami
            </p>
        </div>

        <!-- Status Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Sensor Aktif Card -->
            <div
                class="group relative rounded-2xl overflow-hidden shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl bg-white">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center">
                            <div
                                class="bg-emerald-500 p-4 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-600 mb-2">Sensor Aktif</h3>
                                <div class="text-5xl font-bold text-emerald-600">8<span
                                        class="text-4xl text-gray-400">/8</span></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center text-emerald-600 bg-emerald-50 rounded-lg p-3 transition-all duration-300 group-hover:bg-emerald-100">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="font-medium">Semua sensor berfungsi optimal</span>
                    </div>
                </div>
            </div>

            <!-- Deteksi Terakhir Card -->
            <div
                class="group relative rounded-2xl overflow-hidden shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl bg-white">
                <div class="p-8">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center">
                            <div
                                class="bg-blue-500 p-4 rounded-xl shadow-md mr-4 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-600 mb-2">Deteksi Terakhir</h3>
                                <div class="text-5xl font-bold text-blue-500">2<span
                                        class="text-4xl text-gray-400">m</span></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex items-center text-blue-600 bg-blue-50 rounded-lg p-3 transition-all duration-300 group-hover:bg-blue-100">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span class="font-medium">Monitoring aktif</span>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Add real-time updates simulation
            function updateStatus() {
                const timeElement = document.querySelector('.text-5xl.font-bold.text-blue-500');
                if (timeElement) {
                    const minutes = Math.floor(Math.random() * 5) + 1;
                    timeElement.innerHTML = `${minutes}<span class="text-4xl text-gray-400">m</span>`;
                }
            }

            // Update every 10 seconds
            setInterval(updateStatus, 10000);

            // Add hover effects for cards
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Mobile touch interactions
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.classList.add('scale-105');
                    setTimeout(() => {
                        this.classList.remove('scale-105');
                    }, 200);
                });
            });
        </script>
    </section>
    {{-- End Status Sistem --}}

    {{-- Kontrol Sensor --}}
    <section id="kontrol-sensor"
        class="relative max-w-7xl mx-auto px-4 py-12 overflow-hidden bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <!-- Header Section -->
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Kontrol Sensor
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Kontrol Sensor
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Kelola dan pantau 8 unit sensor yang terpasang di berbagai lokasi
            </p>
        </div>

        <!-- Sensor Cards Scrollable Container -->
        <div class="relative">
            <!-- Scroll Buttons -->
            <button id="scrollLeft"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/80 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-md">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="scrollRight"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/80 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-md">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Scrollable Cards Container -->
            <div id="sensorContainer" class="flex overflow-x-auto scroll-smooth gap-8 px-12 pb-6 scrollbar-hide"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Sensor Card Template -->
                <!-- Sensor Card 1 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-blue-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Utara</h3>
                            <p class="text-emerald-600 text-base">Blok A</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-emerald-600 text-base font-semibold">AKTIF</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 2 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-green-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Timur</h3>
                            <p class="text-emerald-600 text-base">Blok B</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-emerald-600 text-base font-semibold">AKTIF</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 3 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-orange-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Barat</h3>
                            <p class="text-emerald-600 text-base">Blok C</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-red-500 text-base font-semibold">MATI</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 4 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-purple-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Selatan</h3>
                            <p class="text-emerald-600 text-base">Blok D</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-emerald-600 text-base font-semibold">AKTIF</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 5 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-pink-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0v2a1 1 0 01-1 1H8a1 1 0 01-1-1V4m0 0H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Tengah</h3>
                            <p class="text-emerald-600 text-base">Blok E</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-emerald-600 text-base font-semibold">AKTIF</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 6 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-indigo-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Utara 2</h3>
                            <p class="text-emerald-600 text-base">Blok F</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-red-500 text-base font-semibold">MATI</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 7 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-red-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Pintu</h3>
                            <p class="text-emerald-600 text-base">Blok G</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-emerald-600 text-base font-semibold">AKTIF</span>
                        </div>
                    </div>
                </div>

                <!-- Sensor Card 8 -->
                <div
                    class="flex-shrink-0 w-96 bg-white backdrop-blur-sm rounded-2xl p-8 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 shadow-lg transform hover:-translate-y-2">
                    <div class="flex flex-col items-center space-y-6">
                        <div
                            class="w-20 h-20 bg-yellow-500 rounded-2xl flex items-center justify-center shadow-lg transform transition-all duration-500 hover:rotate-6 hover:scale-110">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="text-center">
                            <h3 class="text-emerald-800 font-bold text-xl">Sensor Gedung</h3>
                            <p class="text-emerald-600 text-base">Blok H</p>
                        </div>
                        <div class="flex flex-col items-center space-y-3">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-14 h-7 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-emerald-500 shadow-inner">
                                </div>
                            </label>
                            <span class="text-red-500 text-base font-semibold">MATI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Toggle functionality
            document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const statusText = this.closest('.flex-shrink-0').querySelector('span:last-child');
                    if (this.checked) {
                        statusText.textContent = 'AKTIF';
                        statusText.className = 'text-emerald-600 text-base font-semibold';
                    } else {
                        statusText.textContent = 'MATI';
                        statusText.className = 'text-red-500 text-base font-semibold';
                    }
                });
            });

            // Scroll functionality
            const container = document.getElementById('sensorContainer');
            const scrollLeft = document.getElementById('scrollLeft');
            const scrollRight = document.getElementById('scrollRight');

            scrollLeft.addEventListener('click', () => {
                container.scrollBy({
                    left: -400,
                    behavior: 'smooth'
                });
            });

            scrollRight.addEventListener('click', () => {
                container.scrollBy({
                    left: 400,
                    behavior: 'smooth'
                });
            });

            // Hide scrollbar but keep functionality
            container.style.scrollbarWidth = 'none';
            container.style.msOverflowStyle = 'none';
        </script>
    </section>
    {{-- End Kontrol Sensor --}}

    {{-- Pemantauan Langsung --}}
    <section class="relative max-w-7xl mx-auto px-4 py-12 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <!-- Header Section -->
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Kamera
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Pemantauan Langsung (8 Kamera)
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Pantau kondisi setiap kamera secara real-time dan interaktif.
            </p>
        </div>

        <!-- Camera Cards Scrollable Container -->
        <div class="relative">
            <!-- Scroll Buttons -->
            <button id="scrollLeft"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="scrollRight"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Scrollable Cards Container -->
            <div id="cameraContainer" class="flex overflow-x-auto scroll-smooth gap-6 px-12 pb-6 scrollbar-hide">
                <!-- Camera Card 1 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 01</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok A - Utara</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 2 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 02</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok B - Timur</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 3 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 03</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok C - Barat</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 4 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 04</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok D - Selatan</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 5 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 05</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok E - Tengah</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 6 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 06</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok F - Utara 2</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 7 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 07</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok G - Pintu</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 8 -->
                <div
                    class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 08</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok H - Gedung</p>
                    </div>

                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Toggle functionality for camera on/off
            document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const cameraCard = this.closest('.flex-shrink-0');
                    const videoArea = cameraCard.querySelector('.bg-gray-800');

                    if (this.checked) {
                        videoArea.style.opacity = '1';
                        videoArea.style.filter = 'none';
                    } else {
                        videoArea.style.opacity = '0.5';
                        videoArea.style.filter = 'grayscale(100%)';
                    }
                });
            });

            // Scroll functionality
            const container = document.getElementById('cameraContainer');
            const scrollLeft = document.getElementById('scrollLeft');
            const scrollRight = document.getElementById('scrollRight');

            scrollLeft.addEventListener('click', () => {
                container.scrollBy({
                    left: -320,
                    behavior: 'smooth'
                });
            });

            scrollRight.addEventListener('click', () => {
                container.scrollBy({
                    left: 320,
                    behavior: 'smooth'
                });
            });

            // Auto-scroll functionality (shows 3 cameras at a time)
            function updateScrollButtons() {
                const scrollLeftPos = container.scrollLeft;
                const maxScroll = container.scrollWidth - container.clientWidth;

                scrollLeft.style.opacity = scrollLeftPos > 0 ? '1' : '0.5';
                scrollRight.style.opacity = scrollLeftPos < maxScroll ? '1' : '0.5';
            }

            container.addEventListener('scroll', updateScrollButtons);
            updateScrollButtons();
        </script>
    </section>
    {{-- End Pemantauan Langsung --}}

    {{-- Status Sensor --}}
    <section id="status-sensor"
        class="relative max-w-7xl mx-auto px-4 py-12 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Sensor
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Status Sensor (8 Unit)
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Pantau kondisi setiap unit sensor secara real-time dan interaktif.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- SENSOR A1 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor A1</h3>
                        <p class="text-sm text-gray-500">📍 Blok A</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR B2 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor B2</h3>
                        <p class="text-sm text-gray-500">📍 Blok B</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR C3 (TIDAK AKTIF) -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-gray-300 text-gray-700 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor C3</h3>
                        <p class="text-sm text-gray-500">📍 Blok C</p>
                    </div>
                </div>
                <div
                    class="bg-gray-100 text-red-600 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-red-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- SENSOR D4 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor D4</h3>
                        <p class="text-sm text-gray-500">📍 Blok D</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR E5 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor E5</h3>
                        <p class="text-sm text-gray-500">📍 Blok E</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR F6 (TIDAK AKTIF) -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-gray-300 text-gray-700 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor F6</h3>
                        <p class="text-sm text-gray-500">📍 Blok F</p>
                    </div>
                </div>
                <div
                    class="bg-gray-100 text-red-600 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-red-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- SENSOR G7 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor G7</h3>
                        <p class="text-sm text-gray-500">📍 Blok G</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR H8 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor H8</h3>
                        <p class="text-sm text-gray-500">📍 Blok H</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-all duration-300 transform hover:bg-green-100 hover:scale-[0.98] hover:shadow-inner select-none">
                    ✅ AKTIF
                </div>
            </div>

        </div>

        <!-- OPTIONAL: Efek sentuh untuk mobile -->
        <script>
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.classList.add('scale-105');
                    setTimeout(() => {
                        this.classList.remove('scale-105');
                    }, 200);
                });
            });
        </script>
    </section>
    {{-- End Status Sensor --}}

    {{-- Peringatan Terkini --}}
    {{-- <section class="max-w-4xl mx-auto px-4 py-12">
        <!-- Header -->
        <div class="mb-8 transform transition-all duration-500 hover:scale-[1.02]">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-emerald-100 p-3 rounded-xl shadow-sm transition-all duration-300 hover:bg-emerald-200 hover:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-700" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M10 2L3 7v11c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V7l-7-5z" />
                        <path d="M8 11h4v2H8v-2z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent">
                    Peringatan Terkini BioWatch-x
                </h1>
            </div>
            <p class="text-emerald-800 ml-14 transition-all duration-300 hover:text-emerald-900">
                Update real-time deteksi satwa liar di perkebunan sawit
            </p>
        </div>

        <!-- Notification List -->
        <div class="bg-white rounded-2xl shadow-lg border border-emerald-100 overflow-hidden group transition-all duration-300 hover:shadow-xl">
            <!-- Notification Item 1 - Babi Hutan -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-warning p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Babi hutan terdeteksi di Blok A Utara</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">15:23 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Sistem mengaktifkan alarm suara dan lampu untuk mengusir babi hutan</p>
                    </div>
                </div>
                <div class="status-active px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    PERINGATAN
                </div>
            </div>

            <!-- Notification Item 2 - Orangutan -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-warning p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Orangutan terlihat di Blok C Barat</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">13:45 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Sistem mengaktifkan mode konservasi - notifikasi ke BKSDA</p>
                    </div>
                </div>
                <div class="status-warning px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    KONSERVASI
                </div>
            </div>

            <!-- Notification Item 3 - Sensor -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-info p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1v-3a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Sensor Gerak Blok E Normal</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">11:30 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Tidak ada aktivitas satwa liar yang terdeteksi selama 6 jam terakhir</p>
                    </div>
                </div>
                <div class="status-resolved px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    NORMAL
                </div>
            </div>

            <!-- Notification Item 4 - Maintenance -->
            <div class="flex items-center justify-between p-5 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-maintenance p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Maintenance Kamera Blok D</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">09:15 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Tim teknis sedang melakukan kalibrasi sensor dan pembersihan lensa</p>
                    </div>
                </div>
                <div class="status-maintenance px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    MAINTENANCE
                </div>
            </div>
        </div>

        <script>
            // Add animation to notification items
            document.addEventListener('DOMContentLoaded', () => {
                const notificationItems = document.querySelectorAll('.notification-item');
                notificationItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(10px)';
                    item.style.transition = 'all 0.3s ease';

                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 150 * index);
                });

                // Add click effect for notification items
                notificationItems.forEach(item => {
                    item.addEventListener('click', function() {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 200);
                    });
                });
            });
        </script>

        <style>
            .notification-icon-warning {
                background-color: #f59e0b;
                background-image: linear-gradient(to right, #f59e0b, #ef4444);
            }

            .notification-icon-info {
                background-color: #10b981;
                background-image: linear-gradient(to right, #10b981, #0ea5e9);
            }

            .notification-icon-maintenance {
                background-color: #6366f1;
                background-image: linear-gradient(to right, #6366f1, #8b5cf6);
            }

            .status-active {
                background-color: #ef4444;
                color: white;
            }

            .status-warning {
                background-color: #f59e0b;
                color: white;
            }

            .status-resolved {
                background-color: #10b981;
                color: white;
            }

            .status-maintenance {
                background-color: #6366f1;
                color: white;
            }
        </style>
    </section> --}}
    <section class="relative max-w-7xl mx-auto px-4 py-12 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <!-- Header -->
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Peringatan
            </span>
            <h2 class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Peringatan Terkini BioWatch-x
                <span class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Update real-time deteksi satwa liar di perkebunan sawit
            </p>
        </div>

        <!-- Notification List -->
        <div class="bg-white rounded-2xl shadow-xl border border-emerald-100 overflow-hidden group transition-all duration-300 hover:shadow-2xl transform hover:-translate-y-1">
            <!-- Notification Item 1 - Babi Hutan -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-warning p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Babi hutan terdeteksi di Blok A Utara</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">15:23 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Sistem mengaktifkan alarm suara dan lampu untuk mengusir babi hutan</p>
                    </div>
                </div>
                <div class="status-active px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    PERINGATAN
                </div>
            </div>

            <!-- Notification Item 2 - Orangutan -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-warning p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Orangutan terlihat di Blok C Barat</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">13:45 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Sistem mengaktifkan mode konservasi - notifikasi ke BKSDA</p>
                    </div>
                </div>
                <div class="status-warning px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    KONSERVASI
                </div>
            </div>

            <!-- Notification Item 3 - Sensor -->
            <div
                class="flex items-center justify-between p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-info p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1v-3a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Sensor Gerak Blok E Normal</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">11:30 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Tidak ada aktivitas satwa liar yang terdeteksi selama 6 jam terakhir</p>
                    </div>
                </div>
                <div class="status-resolved px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    NORMAL
                </div>
            </div>

            <!-- Notification Item 4 - Maintenance -->
            <div class="flex items-center justify-between p-5 hover:bg-emerald-50 transition-all duration-200 notification-item">
                <div class="flex items-center gap-4">
                    <div class="notification-icon-maintenance p-3 rounded-xl shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Maintenance Kamera Blok D</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-emerald-700 font-medium">09:15 - Hari Ini</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Tim teknis sedang melakukan kalibrasi sensor dan pembersihan lensa</p>
                    </div>
                </div>
                <div class="status-maintenance px-4 py-1.5 rounded-full text-xs font-semibold shadow-sm">
                    MAINTENANCE
                </div>
            </div>
        </div>

        <script>
            // Add animation to notification items
            document.addEventListener('DOMContentLoaded', () => {
                const notificationItems = document.querySelectorAll('.notification-item');
                notificationItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(10px)';
                    item.style.transition = 'all 0.3s ease';

                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 150 * index);
                });

                // Add click effect for notification items
                notificationItems.forEach(item => {
                    item.addEventListener('click', function() {
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 200);
                    });
                });
            });
        </script>

        <style>
            .notification-icon-warning {
                background-color: #f59e0b;
                background-image: linear-gradient(to right, #f59e0b, #ef4444);
            }

            .notification-icon-info {
                background-color: #10b981;
                background-image: linear-gradient(to right, #10b981, #0ea5e9);
            }

            .notification-icon-maintenance {
                background-color: #6366f1;
                background-image: linear-gradient(to right, #6366f1, #8b5cf6);
            }

            .status-active {
                background-color: #ef4444;
                color: white;
            }

            .status-warning {
                background-color: #f59e0b;
                color: white;
            }

            .status-resolved {
                background-color: #10b981;
                color: white;
            }

            .status-maintenance {
                background-color: #6366f1;
                color: white;
            }
        </style>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="w-full px-5 py-16 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <!-- Header -->
        <div class="text-center mb-10 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Pertanyaan Umum
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Frequently Asked Questions
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Temukan jawaban untuk pertanyaan yang sering diajukan tentang sistem BioWatch-x
            </p>
        </div>
        <div
            class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg group transition-all duration-300 hover:shadow-xl">

            <!-- FAQ List -->
            <div class="space-y-4 text-left">
                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Apa itu sistem BioWatch-x?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        BioWatch-x adalah sistem monitoring real-time berbasis Internet of Things (IoT) yang dirancang untuk
                        mendeteksi pergerakan babi hutan dan orangutan di perkebunan kelapa sawit. Sistem ini memberikan
                        peringatan dini kepada petani sehingga mereka dapat merespons ancaman secara cepat dan efisien.
                    </p>
                </div>

                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Mengapa BioWatch-x diperlukan di perkebunan sawit?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        Kerusakan akibat satwa liar seperti babi hutan dan orangutan menyebabkan kerugian hingga Rp 10 juta
                        per tahun bagi petani sawit di Desa Kanamit, Kalimantan Tengah. Metode tradisional seperti pagar
                        kawat dan patroli manual terbukti tidak efektif, sehingga diperlukan solusi teknologi yang lebih
                        efisien.
                    </p>
                </div>

                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Bagaimana cara kerja BioWatch-x?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        Sistem ini menggunakan kombinasi sensor gerak, kamera, dan teknologi IoT untuk mendeteksi keberadaan
                        satwa liar. Ketika terdeteksi, sistem akan mengirimkan notifikasi real-time kepada petani dan
                        mengaktifkan alarm suara serta pencahayaan yang dirancang untuk menghalau satwa tanpa menyakiti
                        mereka.
                    </p>
                </div>

                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Apakah sistem ini ramah lingkungan dan aman untuk satwa liar?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        Ya, BioWatch-x dirancang dengan pendekatan humanis yang tidak menyakiti satwa liar. Sistem ini hanya
                        menggunakan alarm suara dan cahaya untuk mengusir satwa, serta membantu dalam pemetaan pola
                        pergerakan satwa untuk strategi konservasi yang lebih baik.
                    </p>
                </div>

                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Bagaimana dampak ekonomi dari penerapan BioWatch-x?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        Dengan mengurangi kerusakan tanaman sawit, sistem ini dapat menekan kerugian ekonomi petani hingga
                        70%. Selain itu, sistem ini lebih efisien dibanding metode tradisional karena mengurangi kebutuhan
                        tenaga kerja untuk patroli manual.
                    </p>
                </div>

                <div
                    class="faq-item bg-white p-6 border border-gray-200 rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                    <h3 class="text-emerald-700 font-medium flex justify-between items-center">
                        Bagaimana mitra dapat mempelajari penggunaan BioWatch-x?
                        <span class="faq-icon transition-transform duration-300 text-emerald-600">▼</span>
                    </h3>
                    <p class="faq-answer hidden mt-3 text-gray-600">
                        Tim akan menyediakan pelatihan langsung dan buku panduan penggunaan untuk memastikan mitra dapat
                        mengoperasikan sistem dengan efektif. Selain itu, tersedia dukungan teknis melalui saluran
                        komunikasi yang telah disepakati.
                    </p>
                </div>
            </div>
        </div>

        <!-- Script untuk Interaktif FAQ -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                let faqItems = document.querySelectorAll(".faq-item");

                faqItems.forEach(item => {
                    item.addEventListener("click", function() {
                        let answer = this.querySelector(".faq-answer");
                        let icon = this.querySelector(".faq-icon");

                        // Tutup semua jawaban yang lain sebelum membuka yang diklik
                        document.querySelectorAll(".faq-answer").forEach(ans => {
                            if (ans !== answer) {
                                ans.classList.add("hidden");
                                ans.style.opacity = "0";
                                ans.parentElement.querySelector(".faq-icon").style.transform =
                                    "rotate(0deg)";
                            }
                        });

                        if (answer.classList.contains("hidden")) {
                            answer.classList.remove("hidden");
                            answer.style.opacity = "1";
                            icon.style.transform = "rotate(180deg)";
                        } else {
                            answer.classList.add("hidden");
                            answer.style.opacity = "0";
                            icon.style.transform = "rotate(0deg)";
                        }
                    });
                });
            });
        </script>
    </section>
    {{-- End FAQ --}}

    {{-- Footer --}}
    {{-- <footer class="bg-gradient-to-r from-green-600 to-green-800 text-white py-4 relative">
        <!-- Accent color bar at top -->
        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-yellow-400 via-orange-500 to-yellow-500">
        </div>

        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-5">
            <div
                class="w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0yNCAzNmMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1vcGFjaXR5PSIuNSIvPjwvZz48L3N2Zz4=')]">
            </div>
        </div>

        <div class="container max-w-4xl mx-auto px-4 relative z-10">
            <!-- Navigation Buttons - Android Style -->
            <div class="flex justify-center items-center space-x-3 md:space-x-6">
                <!-- Buka Dashboard Button -->
                <button
                    class="group bg-green-500 hover:bg-green-400 text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div class="w-6 h-6 md:w-8 md:h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-th-large text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Buka Dashboard</span>
                </button>

                <!-- Lihat Peta Button -->
                <button
                    class="group bg-transparent border-2 border-green-400 hover:bg-green-400 text-green-200 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-green-400 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fas fa-map text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Lihat Peta</span>
                </button>

                <!-- Live Camera Button -->
                <button
                    class="group bg-transparent border-2 border-green-400 hover:bg-green-400 text-green-200 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-green-400 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fas fa-video text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Live Camera</span>
                </button>
            </div>

            <!-- Bottom indicator (Android style) -->
            <div class="flex justify-center mt-4">
                <div class="w-12 h-1 bg-green-400 bg-opacity-50 rounded-full"></div>
            </div>
        </div>

        <!-- FontAwesome Script untuk Icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
    </footer> --}}
    <footer class="bg-gradient-to-r from-green-300 to-green-200 text-green-800 py-4 relative shadow-lg">
        <!-- Accent color bar at top - Diubah menjadi gradien hijau -->
        <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-400 via-green-500 to-green-400">
        </div>

        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
            <div
                class="w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjxwYXRoIGQ9Ik0yNCAzNmMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA6IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjwvZz48L3N2Zz4=')]">
            </div>
        </div>

        <div class="container max-w-4xl mx-auto px-4 relative z-10">
            <!-- Navigation Buttons - Android Style -->
            <div class="flex justify-center items-center space-x-3 md:space-x-6">
                <!-- Buka Dashboard Button -->
                <button
                    class="group bg-green-600 hover:bg-green-500 text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div class="w-6 h-6 md:w-8 md:h-8 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                        <i class="fas fa-th-large text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Buka Dashboard</span>
                </button>

                <!-- Lihat Peta Button -->
                <button
                    class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-700 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fas fa-map text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Lihat Peta</span>
                </button>

                <!-- Live Camera Button -->
                <button
                    class="group bg-transparent border-2 border-green-600 hover:bg-green-600 text-green-700 hover:text-white font-medium py-2.5 px-4 md:py-3 md:px-6 rounded-xl flex items-center space-x-2 md:space-x-3 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl active:scale-95">
                    <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-green-600 bg-opacity-20 group-hover:bg-white group-hover:bg-opacity-20 rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fas fa-video text-sm md:text-base"></i>
                    </div>
                    <span class="text-xs md:text-sm font-medium">Live Camera</span>
                </button>
            </div>

            <!-- Bottom indicator (Android style) - juga diubah warnanya -->
            <div class="flex justify-center mt-4">
                <div class="w-12 h-1 bg-green-600 rounded-full"></div>
            </div>
        </div>

        <!-- FontAwesome Script untuk Icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
    </footer>
    {{-- end Footer --}}

    {{-- <section class="bg-gradient-to-br from-green-400 to-green-600 p-6 rounded-lg">
        <!-- Header -->
        <div class="flex items-center mb-6">
            <div class="bg-white bg-opacity-20 p-2 rounded-lg mr-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                    </path>
                </svg>
            </div>
            <h2 class="text-white text-xl font-semibold">Pemantauan Langsung (8 Kamera)</h2>
        </div>

        <!-- Camera Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Camera 01 -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                <!-- Camera Header -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-white text-sm font-medium">Kamera 01</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-white text-xs bg-green-600 px-2 py-1 rounded-full">LIVE</span>
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                    </div>
                </div>

                <!-- Camera Screen -->
                <div
                    class="bg-gray-700 rounded-lg aspect-video mb-3 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-600 to-gray-800"></div>
                    <div class="relative z-10 text-center text-white">
                        <svg class="w-8 h-8 mx-auto mb-2 opacity-70" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <div class="text-lg font-bold">4K</div>
                    </div>
                    <!-- Scan line effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-green-400 to-transparent opacity-30 w-1 animate-pulse"
                        style="animation: scan 2s linear infinite;"></div>
                </div>

                <!-- Camera Info -->
                <div class="text-center mb-3">
                    <span class="text-white text-sm">Blok A - Utara</span>
                </div>

                <!-- Controls -->
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-white text-sm hover:text-green-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <span>View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-white text-sm hover:text-green-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 9.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 14.142M5.586 9.464A5 5 0 006 16.95m-2.828-9.9a9 9 0 000 14.142">
                            </path>
                        </svg>
                        <span>Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera 02 -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                <!-- Camera Header -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-white text-sm font-medium">Kamera 02</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-white text-xs bg-green-600 px-2 py-1 rounded-full">LIVE</span>
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                    </div>
                </div>

                <!-- Camera Screen -->
                <div
                    class="bg-gray-700 rounded-lg aspect-video mb-3 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-600 to-gray-800"></div>
                    <div class="relative z-10 text-center text-white">
                        <svg class="w-8 h-8 mx-auto mb-2 opacity-70" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <div class="text-lg font-bold">HD</div>
                    </div>
                </div>

                <!-- Camera Info -->
                <div class="text-center mb-3">
                    <span class="text-white text-sm">Blok B - Timur</span>
                </div>

                <!-- Controls -->
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-white text-sm hover:text-green-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <span>View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-white text-sm hover:text-green-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 9.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 14.142M5.586 9.464A5 5 0 006 16.95m-2.828-9.9a9 9 0 000 14.142">
                            </path>
                        </svg>
                        <span>Audio</span>
                    </button>
                </div>
            </div>

            <!-- Camera 03 -->
            <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                <!-- Camera Header -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-white text-sm font-medium">Kamera 03</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-white text-xs bg-gray-600 px-2 py-1 rounded-full">MAINTENANCE</span>
                        <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
                    </div>
                </div>

                <!-- Camera Screen -->
                <div
                    class="bg-gray-800 rounded-lg aspect-video mb-3 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-700 to-gray-900"></div>
                    <div class="relative z-10 text-center text-white">
                        <svg class="w-8 h-8 mx-auto mb-2 opacity-50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                        <div class="text-lg font-bold opacity-50">HD</div>
                    </div>
                </div>

                <!-- Camera Info -->
                <div class="text-center mb-3">
                    <span class="text-white text-sm">Blok C - Barat</span>
                </div>

                <!-- Controls -->
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center space-x-1 text-white text-sm opacity-50 cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <span>View</span>
                    </button>
                    <button class="flex items-center space-x-1 text-white text-sm opacity-50 cursor-not-allowed">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 9.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 14.142M5.586 9.464A5 5 0 006 16.95m-2.828-9.9a9 9 0 000 14.142">
                            </path>
                        </svg>
                        <span>Audio</span>
                    </button>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="status-sensor" class="max-w-7xl mx-auto px-4 py-12">
        <!-- Judul -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">Status Sensor (8 Unit)</h2>
        </div>

        <!-- Grid Sensor -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor A1</h3>
                        <p class="text-sm text-gray-500">📍 Blok A</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor B2</h3>
                        <p class="text-sm text-gray-500">📍 Blok B</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

            <!-- Sensor Tidak Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-gray-300">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-gray-300 text-gray-700 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor C3</h3>
                        <p class="text-sm text-gray-500">📍 Blok C</p>
                    </div>
                </div>
                <div class="bg-gray-200 text-red-600 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor D4</h3>
                        <p class="text-sm text-gray-500">📍 Blok D</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor E5</h3>
                        <p class="text-sm text-gray-500">📍 Blok E</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

            <!-- Sensor Tidak Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-gray-300">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-gray-300 text-gray-700 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor F6</h3>
                        <p class="text-sm text-gray-500">📍 Blok F</p>
                    </div>
                </div>
                <div class="bg-gray-200 text-red-600 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor G7</h3>
                        <p class="text-sm text-gray-500">📍 Blok G</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

            <!-- Sensor Aktif -->
            <div class="bg-white rounded-xl p-5 shadow-md border border-green-200">
                <div class="flex items-center gap-3 mb-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Sensor H8</h3>
                        <p class="text-sm text-gray-500">📍 Blok H</p>
                    </div>
                </div>
                <div class="bg-green-100 text-green-700 font-semibold text-sm rounded-full py-2 px-4 text-center">
                    ✅ AKTIF
                </div>
            </div>

        </div>
    </section> --}}

    {{-- <section id="status-sensor"
        class="relative max-w-7xl mx-auto px-4 py-12 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
        <div class="text-center mb-12 transform transition-all duration-500 hover:scale-105">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                Sistem Sensor
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
                Status Sensor (8 Unit)
                <span
                    class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
            </h2>
            <p class="text-emerald-800 mt-6 max-w-2xl mx-auto transition-all duration-300 hover:text-emerald-900">
                Pantau kondisi setiap unit sensor secara real-time dan interaktif.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- SENSOR A1 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor A1</h3>
                        <p class="text-sm text-gray-500">📍 Blok A</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR B2 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor B2</h3>
                        <p class="text-sm text-gray-500">📍 Blok B</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR C3 - TIDAK AKTIF -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-gray-300 text-gray-700 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor C3</h3>
                        <p class="text-sm text-gray-500">📍 Blok C</p>
                    </div>
                </div>
                <div
                    class="bg-gray-100 text-red-600 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-red-100">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- SENSOR D4 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor D4</h3>
                        <p class="text-sm text-gray-500">📍 Blok D</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR E5 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor E5</h3>
                        <p class="text-sm text-gray-500">📍 Blok E</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR F6 - TIDAK AKTIF -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-gray-300 text-gray-700 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor F6</h3>
                        <p class="text-sm text-gray-500">📍 Blok F</p>
                    </div>
                </div>
                <div
                    class="bg-gray-100 text-red-600 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-red-100">
                    ❌ TIDAK AKTIF
                </div>
            </div>

            <!-- SENSOR G7 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor G7</h3>
                        <p class="text-sm text-gray-500">📍 Blok G</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

            <!-- SENSOR H8 -->
            <div
                class="group bg-white rounded-2xl p-5 shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                <div class="flex items-center gap-4 mb-4">
                    <div
                        class="bg-green-100 text-green-600 p-3 rounded-full transition-transform duration-300 group-hover:rotate-6 group-hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700">Sensor H8</h3>
                        <p class="text-sm text-gray-500">📍 Blok H</p>
                    </div>
                </div>
                <div
                    class="bg-green-50 text-green-700 font-medium text-sm rounded-full py-2 px-4 text-center transition-colors duration-300 group-hover:bg-green-100">
                    ✅ AKTIF
                </div>
            </div>

        </div>

        <!-- TOUCH EFFECT -->
        <script>
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.classList.add('scale-105');
                    setTimeout(() => {
                        this.classList.remove('scale-105');
                    }, 200);
                });
            });
        </script>
    </section> --}}

    {{-- <section class="w-full px-6 py-8 bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex items-center mb-8">
                <div class="bg-blue-500 p-3 rounded-xl shadow-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Peringatan Terkini</h1>
            </div>

            <!-- Alert Cards -->
            <div class="space-y-4">
                <!-- Alert 1 - Active -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-orange-100 p-3 rounded-xl mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Pergerakan terdeteksi di Blok A
                                    </h3>
                                    <div class="flex items-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm">10:23</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                    AKTIF
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alert 2 - Active -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-orange-100 p-3 rounded-xl mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Sensor C3 tidak merespon</h3>
                                    <div class="flex items-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm">09:45</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                    AKTIF
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alert 3 - Resolved -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden opacity-75">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-gray-100 p-3 rounded-xl mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Aktivitas normal di Blok B</h3>
                                    <div class="flex items-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm">08:30</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    SELESAI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alert 4 - Active -->
                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-orange-100 p-3 rounded-xl mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Kamera 03 sedang maintenance</h3>
                                    <div class="flex items-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm">07:15</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span
                                    class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                    AKTIF
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom spacing -->
            <div class="mt-8"></div>
        </div>

        <script>
            // Add click interactions for mobile
            document.querySelectorAll('.bg-white').forEach(card => {
                card.addEventListener('click', function() {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });

            // Auto-refresh simulation
            setInterval(() => {
                const activeAlerts = document.querySelectorAll('.animate-pulse');
                activeAlerts.forEach(dot => {
                    dot.style.opacity = '0.3';
                    setTimeout(() => {
                        dot.style.opacity = '1';
                    }, 500);
                });
            }, 3000);
        </script>
    </section> --}}

    {{-- <section
        class="relative max-w-7xl mx-auto px-6 py-12 bg-gradient-to-br from-amber-50 via-yellow-50 to-lime-100 min-h-screen">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="flex items-center mb-12 transform transition-transform duration-500 hover:scale-105">
                <div class="bg-yellow-400 p-4 rounded-xl shadow-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h1
                    class="text-4xl font-bold text-gray-800 bg-gradient-to-r from-yellow-600 to-lime-600 bg-clip-text text-transparent">
                    Peringatan Terkini
                </h1>
            </div>

            <!-- Alert Cards -->
            <div class="space-y-6">

                <!-- Alert 1 -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="bg-orange-100 p-3 rounded-xl mr-4 group-hover:rotate-3 transition-transform duration-300">
                                    <svg class="h-7 w-7 text-orange-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Pergerakan terdeteksi di Blok A
                                    </h3>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>10:23</span>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                AKTIF
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Alert 2 -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="bg-orange-100 p-3 rounded-xl mr-4 group-hover:rotate-3 transition-transform duration-300">
                                    <svg class="h-7 w-7 text-orange-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Sensor C3 tidak merespon</h3>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>09:45</span>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                AKTIF
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Alert 3 - Resolved -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden opacity-80">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="bg-gray-200 p-3 rounded-xl mr-4 group-hover:rotate-3 transition-transform duration-300">
                                    <svg class="h-7 w-7 text-gray-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Aktivitas normal di Blok B</h3>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>08:30</span>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                <svg class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                SELESAI
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Alert 4 -->
                <div
                    class="group bg-white rounded-2xl shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="bg-orange-100 p-3 rounded-xl mr-4 group-hover:rotate-3 transition-transform duration-300">
                                    <svg class="h-7 w-7 text-orange-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Kamera 03 sedang maintenance</h3>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>07:15</span>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-medium flex items-center">
                                <div class="w-2 h-2 bg-red-500 rounded-full mr-2 animate-pulse"></div>
                                AKTIF
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom spacing -->
            <div class="mt-12"></div>
        </div>

        <script>
            // Efek klik di mobile
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.classList.add('scale-105');
                    setTimeout(() => {
                        this.classList.remove('scale-105');
                    }, 200);
                });
            });

            // Simulasi refresh animasi
            setInterval(() => {
                const activeAlerts = document.querySelectorAll('.animate-pulse');
                activeAlerts.forEach(dot => {
                    dot.style.opacity = '0.3';
                    setTimeout(() => {
                        dot.style.opacity = '1';
                    }, 500);
                });
            }, 3000);
        </script>
    </section> --}}

    {{-- <section class="w-full bg-gray-100 min-h-screen py-10 px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-6">

            <!-- Header -->
            <div class="flex items-center gap-3 mb-6">
                <div class="bg-blue-500 text-white p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Peringatan Terkini</h2>
            </div>

            <!-- Alert List -->
            <div class="space-y-4">

                <!-- Card 1 -->
                <div class="bg-white flex items-center justify-between px-4 py-3 rounded-xl shadow border border-gray-200">
                    <div class="flex items-center gap-3">
                        <div class="bg-orange-100 text-orange-600 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667
                      1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732
                      0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Pergerakan terdeteksi di Blok A</h4>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                10:23
                            </p>
                        </div>
                    </div>
                    <span class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full font-medium">AKTIF</span>
                </div>

                <!-- Card 2 -->
                <div class="bg-white flex items-center justify-between px-4 py-3 rounded-xl shadow border border-gray-200">
                    <div class="flex items-center gap-3">
                        <div class="bg-orange-100 text-orange-600 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667
                      1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732
                      0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Sensor C3 tidak merespon</h4>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                09:45
                            </p>
                        </div>
                    </div>
                    <span class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full font-medium">AKTIF</span>
                </div>

                <!-- Card 3 -->
                <div class="bg-white flex items-center justify-between px-4 py-3 rounded-xl shadow border border-gray-200">
                    <div class="flex items-center gap-3">
                        <div class="bg-gray-200 text-gray-700 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Aktivitas normal di Blok B</h4>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                08:30
                            </p>
                        </div>
                    </div>
                    <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full font-medium">SELESAI</span>
                </div>

                <!-- Card 4 -->
                <div class="bg-white flex items-center justify-between px-4 py-3 rounded-xl shadow border border-gray-200">
                    <div class="flex items-center gap-3">
                        <div class="bg-orange-100 text-orange-600 p-2 rounded-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667
                      1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732
                      0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Kamera 03 sedang maintenance</h4>
                            <p class="text-sm text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                07:15
                            </p>
                        </div>
                    </div>
                    <span class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded-full font-medium">AKTIF</span>
                </div>

            </div>
        </div>
    </section> --}}

    {{-- <section class="relative max-w-7xl mx-auto px-4 py-12 overflow-hidden bg-gradient-to-br from-emerald-400 via-green-500 to-emerald-600 min-h-screen">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <div class="flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <h2 class="text-3xl font-bold text-white">Pemantauan Langsung (8 Kamera)</h2>
            </div>
        </div>

        <!-- Camera Cards Scrollable Container -->
        <div class="relative">
            <!-- Scroll Buttons -->
            <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-white/90 hover:bg-white rounded-full p-3 transition-all duration-300 shadow-lg">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Scrollable Cards Container -->
            <div id="cameraContainer" class="flex overflow-x-auto scroll-smooth gap-6 px-12 pb-6 scrollbar-hide">
                <!-- Camera Card 1 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 01</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok A - Utara</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 2 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 02</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok B - Timur</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 3 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 03</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok C - Barat</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 4 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 04</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok D - Selatan</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 5 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 05</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok E - Tengah</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 6 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 06</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok F - Utara 2</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 7 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 07</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer" checked>
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">4K</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok G - Pintu</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>

                <!-- Camera Card 8 -->
                <div class="flex-shrink-0 w-80 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-emerald-600 font-semibold">Kamera 08</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold">LIVE</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="relative w-10 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-500">
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg h-40 flex items-center justify-center mb-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                            <span class="text-white font-semibold">HD</span>
                        </div>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-600 font-medium">Blok H - Gedung</p>
                    </div>
                    
                    <div class="flex justify-center space-x-4">
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <span class="text-sm">View</span>
                        </button>
                        <button class="flex items-center space-x-1 text-emerald-600 hover:text-emerald-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                            </svg>
                            <span class="text-sm">Audio</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Toggle functionality for camera on/off
            document.querySelectorAll('input[type="checkbox"]').forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const cameraCard = this.closest('.flex-shrink-0');
                    const videoArea = cameraCard.querySelector('.bg-gray-800');
                    
                    if (this.checked) {
                        videoArea.style.opacity = '1';
                        videoArea.style.filter = 'none';
                    } else {
                        videoArea.style.opacity = '0.5';
                        videoArea.style.filter = 'grayscale(100%)';
                    }
                });
            });

            // Scroll functionality
            const container = document.getElementById('cameraContainer');
            const scrollLeft = document.getElementById('scrollLeft');
            const scrollRight = document.getElementById('scrollRight');

            scrollLeft.addEventListener('click', () => {
                container.scrollBy({
                    left: -320,
                    behavior: 'smooth'
                });
            });

            scrollRight.addEventListener('click', () => {
                container.scrollBy({
                    left: 320,
                    behavior: 'smooth'
                });
            });

            // Auto-scroll functionality (shows 3 cameras at a time)
            function updateScrollButtons() {
                const scrollLeftPos = container.scrollLeft;
                const maxScroll = container.scrollWidth - container.clientWidth;
                
                scrollLeft.style.opacity = scrollLeftPos > 0 ? '1' : '0.5';
                scrollRight.style.opacity = scrollLeftPos < maxScroll ? '1' : '0.5';
            }

            container.addEventListener('scroll', updateScrollButtons);
            updateScrollButtons();
        </script>
    </section> --}}
@endsection
