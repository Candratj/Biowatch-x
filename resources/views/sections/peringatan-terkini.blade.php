{{-- Peringatan Terkini --}}
<div class="mb-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-white">Recent Alerts</h2>
        <button class="text-blue-400 text-sm flex items-center">
            <i class="fas fa-history mr-1"></i>
            History
        </button>
    </div>
    
    <!-- Alert Cards -->
    <div class="space-y-3">
        
        <!-- High Priority Alert -->
        <div class="glass-effect rounded-xl p-4 border-l-4 border-red-500 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
                <div class="bg-red-500 p-2 rounded-lg mt-1">
                    <i class="fas fa-exclamation-triangle text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-white text-sm">Babi Hutan Detected</h3>
                        <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-medium">HIGH</span>
                    </div>
                    <p class="text-gray-400 text-xs mb-2">Blok A Utara - Sensor A1</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-400 text-xs">
                            <i class="fas fa-clock mr-1"></i>
                            <span>15:23 - Today</span>
                        </div>
                        <button class="text-blue-400 text-xs hover:text-blue-300">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Medium Priority Alert -->
        <div class="glass-effect rounded-xl p-4 border-l-4 border-yellow-500 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
                <div class="bg-yellow-500 p-2 rounded-lg mt-1">
                    <i class="fas fa-exclamation text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-white text-sm">Motion Detected</h3>
                        <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-medium">MEDIUM</span>
                    </div>
                    <p class="text-gray-400 text-xs mb-2">Blok C Barat - Sensor C3</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-400 text-xs">
                            <i class="fas fa-clock mr-1"></i>
                            <span>13:45 - Today</span>
                        </div>
                        <button class="text-blue-400 text-xs hover:text-blue-300">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Low Priority Alert -->
        <div class="glass-effect rounded-xl p-4 border-l-4 border-blue-500 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
                <div class="bg-blue-500 p-2 rounded-lg mt-1">
                    <i class="fas fa-info text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-white text-sm">System Normal</h3>
                        <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-medium">INFO</span>
                    </div>
                    <p class="text-gray-400 text-xs mb-2">All sensors operational</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-400 text-xs">
                            <i class="fas fa-clock mr-1"></i>
                            <span>11:30 - Today</span>
                        </div>
                        <button class="text-blue-400 text-xs hover:text-blue-300">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Alert -->
        <div class="glass-effect rounded-xl p-4 border-l-4 border-green-500 transition-all duration-300 hover:scale-[1.02]">
            <div class="flex items-start space-x-3">
                <div class="bg-green-500 p-2 rounded-lg mt-1">
                    <i class="fas fa-check text-white text-sm"></i>
                </div>
                <div class="flex-1">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-semibold text-white text-sm">Area Cleared</h3>
                        <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium">CLEAR</span>
                    </div>
                    <p class="text-gray-400 text-xs mb-2">Blok A Utara - All clear</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-gray-400 text-xs">
                            <i class="fas fa-clock mr-1"></i>
                            <span>09:15 - Today</span>
                        </div>
                        <button class="text-blue-400 text-xs hover:text-blue-300">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Alert Summary (Mobile Only) -->
    <div class="md:hidden mt-4 glass-effect rounded-xl p-4">
        <div class="flex justify-between items-center">
            <div class="text-center">
                <p class="text-2xl font-bold text-red-400">1</p>
                <p class="text-xs text-gray-400">High</p>
            </div>
            <div class="text-center">
                <p class="text-2xl font-bold text-yellow-400">1</p>
                <p class="text-xs text-gray-400">Medium</p>
            </div>
            <div class="text-center">
                <p class="text-2xl font-bold text-blue-400">1</p>
                <p class="text-xs text-gray-400">Info</p>
            </div>
            <div class="text-center">
                <p class="text-2xl font-bold text-green-400">1</p>
                <p class="text-xs text-gray-400">Resolved</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Alert interaction functionality
    document.addEventListener('DOMContentLoaded', function() {
        const alertCards = document.querySelectorAll('.glass-effect');
        
        alertCards.forEach(card => {
            card.addEventListener('click', function() {
                // Add click animation
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });
        
        // Auto-refresh alerts every 30 seconds
        setInterval(() => {
            // Simulate new alert arrival
            const alerts = document.querySelectorAll('.glass-effect');
            if (alerts.length > 0) {
                const firstAlert = alerts[0];
                firstAlert.style.animation = 'pulse 0.5s ease-in-out';
                setTimeout(() => {
                    firstAlert.style.animation = '';
                }, 500);
            }
        }, 30000);
    });
</script>
@endpush