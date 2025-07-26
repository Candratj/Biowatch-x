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
</section>

@push('scripts')
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
@endpush