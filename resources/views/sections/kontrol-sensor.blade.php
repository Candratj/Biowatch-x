{{-- Kontrol Sensor --}}
<div class="mb-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-white">Sensor Control</h2>
        <button class="text-blue-400 text-sm flex items-center">
            <i class="fas fa-sliders-h mr-1"></i>
            Settings
        </button>
    </div>
    
    <!-- Quick Actions -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">
        
        <!-- Enable All -->
        <button class="glass-effect rounded-xl p-4 text-center transition-all duration-300 hover:scale-105 hover:bg-green-500 hover:bg-opacity-20 group">
            <div class="bg-green-500 p-3 rounded-lg mx-auto mb-2 group-hover:scale-110 transition-transform">
                <i class="fas fa-power-off text-white text-lg"></i>
            </div>
            <p class="text-white text-sm font-medium">Enable All</p>
        </button>
        
        <!-- Disable All -->
        <button class="glass-effect rounded-xl p-4 text-center transition-all duration-300 hover:scale-105 hover:bg-red-500 hover:bg-opacity-20 group">
            <div class="bg-red-500 p-3 rounded-lg mx-auto mb-2 group-hover:scale-110 transition-transform">
                <i class="fas fa-power-off text-white text-lg"></i>
            </div>
            <p class="text-white text-sm font-medium">Disable All</p>
        </button>
        
        <!-- Auto Mode -->
        <button class="glass-effect rounded-xl p-4 text-center transition-all duration-300 hover:scale-105 hover:bg-blue-500 hover:bg-opacity-20 group">
            <div class="bg-blue-500 p-3 rounded-lg mx-auto mb-2 group-hover:scale-110 transition-transform">
                <i class="fas fa-magic text-white text-lg"></i>
            </div>
            <p class="text-white text-sm font-medium">Auto Mode</p>
        </button>
        
        <!-- Reset All -->
        <button class="glass-effect rounded-xl p-4 text-center transition-all duration-300 hover:scale-105 hover:bg-yellow-500 hover:bg-opacity-20 group">
            <div class="bg-yellow-500 p-3 rounded-lg mx-auto mb-2 group-hover:scale-110 transition-transform">
                <i class="fas fa-sync-alt text-white text-lg"></i>
            </div>
            <p class="text-white text-sm font-medium">Reset All</p>
        </button>
    </div>
    
    <!-- Individual Sensor Controls -->
    <div class="space-y-3">
        
        <!-- Sensor A1 Control -->
        <div class="glass-effect rounded-xl p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-green-500 p-2 rounded-lg">
                        <i class="fas fa-broadcast-tower text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sensor A1</h3>
                        <p class="text-gray-400 text-xs">Blok A - Motion Detection</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-green-400 text-xs">ON</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="A1">
                            <div class="relative w-10 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </div>
                    <button class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-cog text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sensor B2 Control -->
        <div class="glass-effect rounded-xl p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-green-500 p-2 rounded-lg">
                        <i class="fas fa-broadcast-tower text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sensor B2</h3>
                        <p class="text-gray-400 text-xs">Blok B - Motion Detection</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-green-400 text-xs">ON</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="B2">
                            <div class="relative w-10 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </div>
                    <button class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-cog text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sensor C3 Control (Offline) -->
        <div class="glass-effect rounded-xl p-4 opacity-75">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-red-500 p-2 rounded-lg">
                        <i class="fas fa-broadcast-tower text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sensor C3</h3>
                        <p class="text-gray-400 text-xs">Blok C - Connection Lost</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-red-400 text-xs">OFF</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" data-sensor="C3" disabled>
                            <div class="relative w-10 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </div>
                    <button class="text-gray-600 cursor-not-allowed">
                        <i class="fas fa-cog text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sensor D4 Control -->
        <div class="glass-effect rounded-xl p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-green-500 p-2 rounded-lg">
                        <i class="fas fa-broadcast-tower text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sensor D4</h3>
                        <p class="text-gray-400 text-xs">Blok D - Motion Detection</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-green-400 text-xs">ON</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="D4">
                            <div class="relative w-10 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </div>
                    <button class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-cog text-sm"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Additional sensors for desktop -->
        <div class="hidden md:block glass-effect rounded-xl p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-green-500 p-2 rounded-lg">
                        <i class="fas fa-broadcast-tower text-white text-sm"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sensor E5</h3>
                        <p class="text-gray-400 text-xs">Blok E - Motion Detection</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2">
                        <span class="text-green-400 text-xs">ON</span>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer sensor-toggle" checked data-sensor="E5">
                            <div class="relative w-10 h-5 bg-gray-600 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-green-500"></div>
                        </label>
                    </div>
                    <button class="text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-cog text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Control Summary -->
    <div class="mt-6 glass-effect rounded-xl p-4">
        <div class="flex justify-between items-center">
            <div>
                <h3 class="text-white font-semibold text-sm mb-1">System Status</h3>
                <p class="text-gray-400 text-xs">6 of 8 sensors active</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-center">
                    <p class="text-green-400 font-bold text-lg">6</p>
                    <p class="text-gray-400 text-xs">Active</p>
                </div>
                <div class="text-center">
                    <p class="text-red-400 font-bold text-lg">2</p>
                    <p class="text-gray-400 text-xs">Offline</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Sensor control functionality
    document.addEventListener('DOMContentLoaded', function() {
        const sensorToggles = document.querySelectorAll('.sensor-toggle');
        
        sensorToggles.forEach(toggle => {
            toggle.addEventListener('change', function() {
                const sensorId = this.dataset.sensor;
                const isEnabled = this.checked;
                const statusText = this.closest('.flex').querySelector('span');
                const iconContainer = this.closest('.glass-effect').querySelector('.bg-green-500, .bg-red-500');
                
                if (isEnabled) {
                    statusText.textContent = 'ON';
                    statusText.className = 'text-green-400 text-xs';
                    iconContainer.className = 'bg-green-500 p-2 rounded-lg';
                } else {
                    statusText.textContent = 'OFF';
                    statusText.className = 'text-red-400 text-xs';
                    iconContainer.className = 'bg-red-500 p-2 rounded-lg';
                }
                
                // Simulate API call
                console.log(`Sensor ${sensorId} ${isEnabled ? 'enabled' : 'disabled'}`);
                
                // Update summary
                updateSummary();
            });
        });
        
        // Quick action buttons
        const enableAllBtn = document.querySelector('button:has(.fa-power-off)');
        const disableAllBtn = document.querySelectorAll('button:has(.fa-power-off)')[1];
        
        if (enableAllBtn) {
            enableAllBtn.addEventListener('click', function() {
                sensorToggles.forEach(toggle => {
                    if (!toggle.disabled) {
                        toggle.checked = true;
                        toggle.dispatchEvent(new Event('change'));
                    }
                });
            });
        }
        
        if (disableAllBtn) {
            disableAllBtn.addEventListener('click', function() {
                sensorToggles.forEach(toggle => {
                    if (!toggle.disabled) {
                        toggle.checked = false;
                        toggle.dispatchEvent(new Event('change'));
                    }
                });
            });
        }
        
        function updateSummary() {
            const activeSensors = document.querySelectorAll('.sensor-toggle:checked:not(:disabled)').length;
            const totalSensors = document.querySelectorAll('.sensor-toggle:not(:disabled)').length;
            const offlineSensors = document.querySelectorAll('.sensor-toggle:disabled').length;
            
            // Update summary display
            const activeCount = document.querySelector('.text-green-400.font-bold');
            const offlineCount = document.querySelector('.text-red-400.font-bold');
            
            if (activeCount) activeCount.textContent = activeSensors;
            if (offlineCount) offlineCount.textContent = totalSensors - activeSensors + offlineSensors;
        }
    });
</script>
@endpush