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
</section>

@push('scripts')
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
@endpush