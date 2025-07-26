{{-- Pemantauan Langsung --}}
<div class="mb-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-white">Live Cameras</h2>
        <button class="text-blue-400 text-sm flex items-center">
            <i class="fas fa-expand-arrows-alt mr-1"></i>
            View All
        </button>
    </div>
    
    <!-- Camera Grid: Mobile 1 column, Desktop 2 columns -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        
        <!-- Camera 1 -->
        <div class="glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
            <div class="relative">
                <!-- Video Placeholder -->
                <div class="bg-gray-800 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video text-4xl text-gray-600 mb-2"></i>
                        <p class="text-gray-400 text-sm">Camera 01</p>
                    </div>
                    
                    <!-- Live Badge -->
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                        LIVE
                    </div>
                    
                    <!-- Quality Badge -->
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                        4K
                    </div>
                </div>
                
                <!-- Camera Info -->
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok A - Utara</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-volume-up text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-green-400 text-xs">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                        <span>Online</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Camera 2 -->
        <div class="glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
            <div class="relative">
                <div class="bg-gray-800 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video text-4xl text-gray-600 mb-2"></i>
                        <p class="text-gray-400 text-sm">Camera 02</p>
                    </div>
                    
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                        LIVE
                    </div>
                    
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                        HD
                    </div>
                </div>
                
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok B - Timur</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-volume-up text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-green-400 text-xs">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                        <span>Online</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Camera 3 - Offline -->
        <div class="glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105 opacity-75">
            <div class="relative">
                <div class="bg-gray-900 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video-slash text-4xl text-red-500 mb-2"></i>
                        <p class="text-red-400 text-sm">Camera 03</p>
                    </div>
                    
                    <div class="absolute top-2 left-2 bg-gray-600 text-white px-2 py-1 rounded text-xs font-semibold">
                        OFFLINE
                    </div>
                </div>
                
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok C - Barat</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-600 cursor-not-allowed">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-600 cursor-not-allowed">
                                <i class="fas fa-volume-mute text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-red-400 text-xs">
                        <div class="w-2 h-2 bg-red-400 rounded-full mr-2"></div>
                        <span>Offline</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Camera 4 -->
        <div class="glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
            <div class="relative">
                <div class="bg-gray-800 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video text-4xl text-gray-600 mb-2"></i>
                        <p class="text-gray-400 text-sm">Camera 04</p>
                    </div>
                    
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                        LIVE
                    </div>
                    
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                        HD
                    </div>
                </div>
                
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok D - Selatan</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-volume-up text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-green-400 text-xs">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                        <span>Online</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- More cameras for desktop view -->
        <div class="hidden lg:block glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
            <div class="relative">
                <div class="bg-gray-800 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video text-4xl text-gray-600 mb-2"></i>
                        <p class="text-gray-400 text-sm">Camera 05</p>
                    </div>
                    
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                        LIVE
                    </div>
                    
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                        4K
                    </div>
                </div>
                
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok E - Tengah</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-volume-up text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-green-400 text-xs">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                        <span>Online</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden lg:block glass-effect rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
            <div class="relative">
                <div class="bg-gray-800 aspect-video flex items-center justify-center relative">
                    <div class="text-center">
                        <i class="fas fa-video text-4xl text-gray-600 mb-2"></i>
                        <p class="text-gray-400 text-sm">Camera 06</p>
                    </div>
                    
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-semibold flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1 animate-pulse"></div>
                        LIVE
                    </div>
                    
                    <div class="absolute top-2 right-2 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                        HD
                    </div>
                </div>
                
                <div class="p-3">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="font-semibold text-white text-sm">Blok F - Area 2</h3>
                        <div class="flex items-center space-x-2">
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-play text-xs"></i>
                            </button>
                            <button class="text-gray-400 hover:text-white transition-colors">
                                <i class="fas fa-volume-up text-xs"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center text-green-400 text-xs">
                        <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                        <span>Online</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Camera control functionality
    document.addEventListener('DOMContentLoaded', function() {
        const playButtons = document.querySelectorAll('.fas.fa-play');
        const volumeButtons = document.querySelectorAll('.fas.fa-volume-up');
        
        playButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Toggle play/pause
                if (this.classList.contains('fa-play')) {
                    this.classList.remove('fa-play');
                    this.classList.add('fa-pause');
                } else {
                    this.classList.remove('fa-pause');
                    this.classList.add('fa-play');
                }
            });
        });
        
        volumeButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // Toggle volume
                if (this.classList.contains('fa-volume-up')) {
                    this.classList.remove('fa-volume-up');
                    this.classList.add('fa-volume-mute');
                } else {
                    this.classList.remove('fa-volume-mute');
                    this.classList.add('fa-volume-up');
                }
            });
        });
    });
</script>
@endpush