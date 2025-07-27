{{-- Pemantauan Langsung --}}
<section id="pemantauan-langsung" class="relative max-w-7xl mx-auto px-4 py-8 lg:py-12">
    
    <!-- Mobile Header -->
    <div class="lg:hidden mb-6">
        <div class="text-center">
            <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                Sistem Kamera
            </span>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-2">
                Kontrol Kamera
            </h2>
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block text-center mb-12 transform transition-all duration-500 hover:scale-105">
        <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            Sistem Kamera
        </span>
        <h2 class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
            Kontrol Kamera
            <span class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
        </h2>
    </div>

    <!-- Camera Status Summary (Mobile) -->
    <div class="lg:hidden mb-6 bg-white rounded-3xl p-6 shadow-xl">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Status Kamera</h3>
                <p class="text-sm text-gray-500">Real-time monitoring</p>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                <span class="text-red-600 font-semibold text-sm">LIVE</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 text-sm">
            <div class="text-center">
                <div class="text-emerald-600 font-bold text-lg camera-active-count">3</div>
                <div class="text-gray-500">Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-red-500 font-bold text-lg camera-offline-count">1</div>
                <div class="text-gray-500">Offline</div>
            </div>
            <div class="text-center">
                <div class="text-blue-500 font-bold text-lg">HD+</div>
                <div class="text-gray-500">Quality</div>
            </div>
        </div>
    </div>

    <!-- Camera Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
        
        <!-- Camera Card 1 -->
        <div class="bg-white rounded-3xl p-6 shadow-xl group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-emerald-600 font-semibold text-sm lg:text-base">Kamera 01</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold animate-pulse">LIVE</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer camera-toggle" checked data-camera="1">
                        <div class="relative w-8 h-4 lg:w-10 lg:h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-3 after:w-3 lg:after:h-4 lg:after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                    </label>
                </div>
            </div>

            <div class="camera-preview bg-gray-800 rounded-2xl h-32 lg:h-40 flex items-center justify-center mb-4 relative overflow-hidden">
                <div class="text-center camera-content">
                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-white font-semibold text-sm lg:text-base">4K</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-green-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <div class="text-center mb-4">
                <p class="text-gray-600 font-medium text-sm lg:text-base">Blok A - Utara</p>
                <p class="text-gray-400 text-xs">IP: 192.168.1.101</p>
            </div>

            <div class="flex justify-center space-x-4">
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>View</span>
                </button>
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                    </svg>
                    <span>Audio</span>
                </button>
            </div>
        </div>

        <!-- Camera Card 2 -->
        <div class="bg-white rounded-3xl p-6 shadow-xl group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-emerald-600 font-semibold text-sm lg:text-base">Kamera 02</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold animate-pulse">LIVE</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer camera-toggle" checked data-camera="2">
                        <div class="relative w-8 h-4 lg:w-10 lg:h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-3 after:w-3 lg:after:h-4 lg:after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                    </label>
                </div>
            </div>

            <div class="camera-preview bg-gray-800 rounded-2xl h-32 lg:h-40 flex items-center justify-center mb-4 relative overflow-hidden">
                <div class="text-center camera-content">
                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-white font-semibold text-sm lg:text-base">HD</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <div class="text-center mb-4">
                <p class="text-gray-600 font-medium text-sm lg:text-base">Blok B - Timur</p>
                <p class="text-gray-400 text-xs">IP: 192.168.1.102</p>
            </div>

            <div class="flex justify-center space-x-4">
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>View</span>
                </button>
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                    </svg>
                    <span>Audio</span>
                </button>
            </div>
        </div>

        <!-- Camera Card 3 (OFFLINE) -->
        <div class="bg-white rounded-3xl p-6 shadow-xl group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl opacity-75">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gray-100 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-gray-400 font-semibold text-sm lg:text-base">Kamera 03</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="bg-gray-400 text-white px-2 py-1 rounded-md text-xs font-semibold">OFFLINE</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer camera-toggle" data-camera="3">
                        <div class="relative w-8 h-4 lg:w-10 lg:h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-3 after:w-3 lg:after:h-4 lg:after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                    </label>
                </div>
            </div>

            <div class="camera-preview bg-gray-600 rounded-2xl h-32 lg:h-40 flex items-center justify-center mb-4 relative overflow-hidden">
                <div class="text-center camera-content">
                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636" />
                    </svg>
                    <span class="text-gray-300 font-semibold text-sm lg:text-base">OFFLINE</span>
                </div>
            </div>

            <div class="text-center mb-4">
                <p class="text-gray-400 font-medium text-sm lg:text-base">Blok C - Barat</p>
                <p class="text-gray-300 text-xs">IP: 192.168.1.103</p>
            </div>

            <div class="flex justify-center space-x-4">
                <button class="camera-action flex items-center space-x-1 text-gray-400 cursor-not-allowed text-sm" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>View</span>
                </button>
                <button class="camera-action flex items-center space-x-1 text-gray-400 cursor-not-allowed text-sm" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                    </svg>
                    <span>Audio</span>
                </button>
            </div>
        </div>

        <!-- Camera Card 4 -->
        <div class="bg-white rounded-3xl p-6 shadow-xl group transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-emerald-100 rounded-xl flex items-center justify-center">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="text-emerald-600 font-semibold text-sm lg:text-base">Kamera 04</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="bg-red-500 text-white px-2 py-1 rounded-md text-xs font-semibold animate-pulse">LIVE</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer camera-toggle" checked data-camera="4">
                        <div class="relative w-8 h-4 lg:w-10 lg:h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-3 after:w-3 lg:after:h-4 lg:after:w-4 after:transition-all peer-checked:bg-emerald-500"></div>
                    </label>
                </div>
            </div>

            <div class="camera-preview bg-gray-800 rounded-2xl h-32 lg:h-40 flex items-center justify-center mb-4 relative overflow-hidden">
                <div class="text-center camera-content">
                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    <span class="text-white font-semibold text-sm lg:text-base">HD</span>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-pink-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>

            <div class="text-center mb-4">
                <p class="text-gray-600 font-medium text-sm lg:text-base">Blok D - Selatan</p>
                <p class="text-gray-400 text-xs">IP: 192.168.1.104</p>
            </div>

            <div class="flex justify-center space-x-4">
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span>View</span>
                </button>
                <button class="camera-action flex items-center space-x-1 text-emerald-600 hover:text-emerald-700 transition-colors duration-300 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
                        </svg>
                    <span>Audio</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Quick Controls (Mobile) -->
    <div class="lg:hidden mt-6 grid grid-cols-1 gap-4">
        <div class="bg-white rounded-3xl p-6 shadow-xl">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Kontrol Cepat</h3>
            <div class="grid grid-cols-2 gap-3">
                <button class="camera-control-btn bg-emerald-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-play text-sm"></i>
                    <span class="text-sm">Start All</span>
                </button>
                <button class="camera-control-btn bg-red-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-stop text-sm"></i>
                    <span class="text-sm">Stop All</span>
                </button>
                <button class="camera-control-btn bg-blue-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-expand text-sm"></i>
                    <span class="text-sm">Fullscreen</span>
                </button>
                <button class="camera-control-btn bg-purple-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-record-vinyl text-sm"></i>
                    <span class="text-sm">Record</span>
                </button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Camera toggle functionality
        const cameraToggles = document.querySelectorAll('.camera-toggle');
        const activeCountElement = document.querySelector('.camera-active-count');
        const offlineCountElement = document.querySelector('.camera-offline-count');
        
        cameraToggles.forEach(toggle => {
            toggle.addEventListener('change', function() {
                const cameraCard = this.closest('.bg-white');
                const cameraPreview = cameraCard.querySelector('.camera-preview');
                const cameraContent = cameraCard.querySelector('.camera-content');
                const liveStatus = cameraCard.querySelector('span[class*="bg-red-500"], span[class*="bg-gray-400"]');
                const cameraNumber = this.getAttribute('data-camera');
                const actionButtons = cameraCard.querySelectorAll('.camera-action');
                const iconContainer = cameraCard.querySelector('div[class*="bg-emerald-100"], div[class*="bg-gray-100"]');
                const cameraName = cameraCard.querySelector('span[class*="text-emerald-600"], span[class*="text-gray-400"]');
                
                if (this.checked) {
                    // Camera ON
                    cameraPreview.classList.remove('bg-gray-600');
                    cameraPreview.classList.add('bg-gray-800');
                    cameraCard.classList.remove('opacity-75');
                    
                    // Update live status
                    liveStatus.classList.remove('bg-gray-400');
                    liveStatus.classList.add('bg-red-500', 'animate-pulse');
                    liveStatus.textContent = 'LIVE';
                    
                    // Enable action buttons
                    actionButtons.forEach(btn => {
                        btn.classList.remove('text-gray-400', 'cursor-not-allowed');
                        btn.classList.add('text-emerald-600', 'hover:text-emerald-700');
                        btn.removeAttribute('disabled');
                    });
                    
                    // Update icon colors
                    if (iconContainer) {
                        iconContainer.classList.remove('bg-gray-100');
                        iconContainer.classList.add('bg-emerald-100');
                        const icon = iconContainer.querySelector('svg');
                        if (icon) {
                            icon.classList.remove('text-gray-400');
                            icon.classList.add('text-emerald-600');
                        }
                    }
                    
                    // Update camera name color
                    if (cameraName && cameraName.textContent.includes('Kamera')) {
                        cameraName.classList.remove('text-gray-400');
                        cameraName.classList.add('text-emerald-600');
                    }
                    
                    // Update camera content
                    const qualityText = cameraContent.querySelector('span');
                    if (qualityText) {
                        qualityText.textContent = cameraNumber <= 2 ? '4K' : 'HD';
                        qualityText.classList.remove('text-gray-300');
                        qualityText.classList.add('text-white');
                    }
                    
                    // Update icon to show camera
                    const cameraIcon = cameraContent.querySelector('svg');
                    if (cameraIcon) {
                        cameraIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />';
                        cameraIcon.classList.remove('text-gray-300');
                        cameraIcon.classList.add('text-white');
                    }
                    
                    // Update location text color
                    const locationText = cameraCard.querySelector('p[class*="text-gray-400"]');
                    if (locationText && locationText.textContent.includes('Blok')) {
                        locationText.classList.remove('text-gray-400');
                        locationText.classList.add('text-gray-600');
                    }
                    
                    // Update IP text color
                    const ipText = cameraCard.querySelector('p[class*="text-gray-300"]');
                    if (ipText && ipText.textContent.includes('IP:')) {
                        ipText.classList.remove('text-gray-300');
                        ipText.classList.add('text-gray-400');
                    }
                    
                    if (window.BioWatch) {
                        window.BioWatch.showToast(`Kamera ${cameraNumber} telah diaktifkan`, 'success');
                    }
                } else {
                    // Camera OFF
                    cameraPreview.classList.remove('bg-gray-800');
                    cameraPreview.classList.add('bg-gray-600');
                    cameraCard.classList.add('opacity-75');
                    
                    // Update live status
                    liveStatus.classList.remove('bg-red-500', 'animate-pulse');
                    liveStatus.classList.add('bg-gray-400');
                    liveStatus.textContent = 'OFFLINE';
                    
                    // Disable action buttons
                    actionButtons.forEach(btn => {
                        btn.classList.remove('text-emerald-600', 'hover:text-emerald-700');
                        btn.classList.add('text-gray-400', 'cursor-not-allowed');
                        btn.setAttribute('disabled', 'true');
                    });
                    
                    // Update icon colors
                    if (iconContainer) {
                        iconContainer.classList.remove('bg-emerald-100');
                        iconContainer.classList.add('bg-gray-100');
                        const icon = iconContainer.querySelector('svg');
                        if (icon) {
                            icon.classList.remove('text-emerald-600');
                            icon.classList.add('text-gray-400');
                        }
                    }
                    
                    // Update camera name color
                    if (cameraName && cameraName.textContent.includes('Kamera')) {
                        cameraName.classList.remove('text-emerald-600');
                        cameraName.classList.add('text-gray-400');
                    }
                    
                    // Update camera content to show offline
                    const qualityText = cameraContent.querySelector('span');
                    if (qualityText) {
                        qualityText.textContent = 'OFFLINE';
                        qualityText.classList.remove('text-white');
                        qualityText.classList.add('text-gray-300');
                    }
                    
                    // Update icon to show offline
                    const cameraIcon = cameraContent.querySelector('svg');
                    if (cameraIcon) {
                        cameraIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636" />';
                        cameraIcon.classList.remove('text-white');
                        cameraIcon.classList.add('text-gray-300');
                    }
                    
                    // Update location text color
                    const locationText = cameraCard.querySelector('p[class*="text-gray-600"]');
                    if (locationText && locationText.textContent.includes('Blok')) {
                        locationText.classList.remove('text-gray-600');
                        locationText.classList.add('text-gray-400');
                    }
                    
                    // Update IP text color
                    const ipText = cameraCard.querySelector('p[class*="text-gray-400"]:last-child');
                    if (ipText && ipText.textContent.includes('IP:')) {
                        ipText.classList.remove('text-gray-400');
                        ipText.classList.add('text-gray-300');
                    }
                    
                    if (window.BioWatch) {
                        window.BioWatch.showToast(`Kamera ${cameraNumber} telah dimatikan`, 'warning');
                    }
                }
                
                updateCameraStats();
            });
        });

        // Update camera statistics
        function updateCameraStats() {
            const activeCameras = Array.from(cameraToggles).filter(toggle => toggle.checked).length;
            const totalCameras = cameraToggles.length;
            
            if (activeCountElement) {
                activeCountElement.textContent = activeCameras;
            }
            if (offlineCountElement) {
                offlineCountElement.textContent = totalCameras - activeCameras;
            }
        }

        // Camera action buttons
        document.querySelectorAll('.camera-action').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                if (this.hasAttribute('disabled')) return;
                
                const action = this.textContent.trim();
                const cameraCard = this.closest('.bg-white');
                const cameraNumber = cameraCard.querySelector('.camera-toggle').getAttribute('data-camera');
                
                if (window.BioWatch) {
                    window.BioWatch.showToast(`${action} kamera ${cameraNumber}`, 'info');
                }
                
                // Add visual feedback
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Quick control buttons (mobile)
        document.querySelectorAll('.camera-control-btn').forEach(button => {
            button.addEventListener('click', function() {
                const action = this.textContent.trim();
                
                if (action.includes('Start All')) {
                    cameraToggles.forEach(toggle => {
                        if (!toggle.checked) {
                            toggle.checked = true;
                            toggle.dispatchEvent(new Event('change'));
                        }
                    });
                } else if (action.includes('Stop All')) {
                    cameraToggles.forEach(toggle => {
                        if (toggle.checked) {
                            toggle.checked = false;
                            toggle.dispatchEvent(new Event('change'));
                        }
                    });
                }
                
                if (window.BioWatch) {
                    window.BioWatch.showToast(`${action} executed`, 'info');
                }
            });
        });

        // Initialize camera stats
        updateCameraStats();

        // Card animations on scroll
        const cards = document.querySelectorAll('.bg-white');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${entry.target.dataset.index * 0.1}s`;
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        cards.forEach((card, index) => {
            card.dataset.index = index;
            cardObserver.observe(card);
        });

        // Touch feedback for mobile
        if ('ontouchstart' in window) {
            cards.forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                
                card.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        }
    });
</script>
@endpush