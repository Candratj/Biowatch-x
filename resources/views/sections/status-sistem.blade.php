{{-- Status Sistem --}}
<section id="status-sistem"
    class="relative max-w-7xl mx-auto px-4 py-8 overflow-hidden">
    
    <!-- Mobile Header -->
    <div class="lg:hidden mb-6">
        <div class="text-center">
            <span
                class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                Sistem Monitoring
            </span>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-2">
                Status Sistem
            </h2>
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block text-center mb-12 transform transition-all duration-500 hover:scale-105">
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
    </div>

    <!-- Status Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
        <!-- Sensor Aktif Card -->
        <div class="group relative rounded-3xl overflow-hidden shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl bg-white">
            <div class="p-6 lg:p-8">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 lg:w-16 lg:h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl lg:rounded-3xl flex items-center justify-center shadow-lg transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                            <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg lg:text-xl font-semibold text-gray-600 mb-2">Sensor Aktif</h3>
                            <div class="flex items-baseline space-x-2">
                                <span class="text-4xl lg:text-5xl font-bold text-emerald-600">6</span>
                                <span class="text-2xl lg:text-4xl text-gray-400">/8</span>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Circle Mobile -->
                    <div class="lg:hidden w-16 h-16 relative">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-gray-200" stroke="currentColor" stroke-width="2" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            <path class="text-emerald-500" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-sm font-bold text-emerald-600">75%</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center text-emerald-600 bg-emerald-50 rounded-xl p-3 transition-all duration-300 group-hover:bg-emerald-100">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="font-medium text-sm lg:text-base">Operasional optimal</span>
                </div>
            </div>
        </div>

        <!-- Deteksi Terakhir Card -->
        <div class="group relative rounded-3xl overflow-hidden shadow-xl transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl bg-white">
            <div class="p-6 lg:p-8">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 lg:w-16 lg:h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl lg:rounded-3xl flex items-center justify-center shadow-lg transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110">
                            <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg lg:text-xl font-semibold text-gray-600 mb-2">Deteksi Terakhir</h3>
                            <div class="flex items-baseline space-x-2">
                                <span class="text-4xl lg:text-5xl font-bold text-blue-600">15</span>
                                <span class="text-2xl lg:text-4xl text-gray-400">min</span>
                            </div>
                        </div>
                    </div>
                    <!-- Activity Indicator Mobile -->
                    <div class="lg:hidden flex flex-col items-center">
                        <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse mb-1"></div>
                        <span class="text-xs text-red-600 font-semibold">LIVE</span>
                    </div>
                </div>

                <div class="flex items-center text-blue-600 bg-blue-50 rounded-xl p-3 transition-all duration-300 group-hover:bg-blue-100">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-medium text-sm lg:text-base">Babi hutan - Blok A</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section for Mobile -->
    <div class="lg:hidden mt-8 bg-white rounded-3xl shadow-xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Aktivitas Minggu Ini</h3>
            <div class="flex space-x-1">
                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">7H</span>
                <span class="text-xs text-emerald-600 bg-emerald-100 px-2 py-1 rounded">30H</span>
                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">3B</span>
            </div>
        </div>
        
        <!-- Mobile Chart -->
        <div class="flex items-end justify-between h-24 space-x-1 mb-4">
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-300 w-6 rounded-t transition-all duration-300" style="height: 40%"></div>
                <span class="text-xs text-gray-500">S</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-400 w-6 rounded-t transition-all duration-300" style="height: 70%"></div>
                <span class="text-xs text-gray-500">S</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-500 w-6 rounded-t transition-all duration-300" style="height: 85%"></div>
                <span class="text-xs text-gray-500">R</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-400 w-6 rounded-t transition-all duration-300" style="height: 65%"></div>
                <span class="text-xs text-gray-500">K</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-600 w-6 rounded-t transition-all duration-300" style="height: 90%"></div>
                <span class="text-xs text-gray-500">J</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-300 w-6 rounded-t transition-all duration-300" style="height: 45%"></div>
                <span class="text-xs text-gray-500">S</span>
            </div>
            <div class="flex flex-col items-center space-y-1">
                <div class="bg-emerald-200 w-6 rounded-t transition-all duration-300" style="height: 30%"></div>
                <span class="text-xs text-gray-500">M</span>
            </div>
        </div>
        
        <div class="flex items-center justify-between text-sm">
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-emerald-500 rounded-full"></div>
                <span class="text-gray-600">Deteksi</span>
            </div>
            <span class="text-gray-500">24 aktivitas</span>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Add real-time updates simulation
    function updateStatus() {
        const timeElement = document.querySelector('.text-4xl.font-bold.text-blue-600, .text-5xl.font-bold.text-blue-600');
        if (timeElement) {
            const minutes = Math.floor(Math.random() * 30) + 1;
            timeElement.textContent = minutes;
        }
    }

    // Update every 15 seconds
    setInterval(updateStatus, 15000);

    // Add hover effects for cards
    document.querySelectorAll('.group').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
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

    // Chart bar animations
    document.querySelectorAll('[style*="height"]').forEach((bar, index) => {
        bar.style.animationDelay = `${index * 0.1}s`;
        bar.classList.add('animate-pulse');
    });
</script>
@endpush