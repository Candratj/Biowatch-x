{{-- Peringatan Terkini --}}
<section id="peringatan-terkini" class="relative max-w-7xl mx-auto px-4 py-8 lg:py-12">
    
    <!-- Mobile Header -->
    <div class="lg:hidden mb-6">
        <div class="text-center">
            <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                Sistem Notifikasi
            </span>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-2">
                Peringatan Terkini
            </h2>
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block text-center mb-12 transform transition-all duration-500 hover:scale-105">
        <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            Sistem Notifikasi
        </span>
        <h2 class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
            Pemberitahuan Terkini
            <span class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
        </h2>
    </div>

    <!-- Alert Summary (Mobile) -->
    <div class="lg:hidden mb-6 bg-white rounded-3xl p-6 shadow-xl">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Status Peringatan</h3>
                <p class="text-sm text-gray-500">Real-time monitoring</p>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                <span class="text-red-600 font-semibold text-sm">AKTIF</span>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 text-sm">
            <div class="text-center">
                <div class="text-red-600 font-bold text-lg">2</div>
                <div class="text-gray-500">Kritis</div>
            </div>
            <div class="text-center">
                <div class="text-green-600 font-bold text-lg">1</div>
                <div class="text-gray-500">Normal</div>
            </div>
            <div class="text-center">
                <div class="text-blue-600 font-bold text-lg">1</div>
                <div class="text-gray-500">Maintenance</div>
            </div>
        </div>
    </div>

    <!-- Notification List -->
    <div class="bg-white rounded-3xl shadow-xl border border-emerald-100 overflow-hidden group transition-all duration-300 hover:shadow-2xl">
        
        <!-- Notification Item 1 - Babi Hutan -->
        <div class="flex items-center justify-between p-4 lg:p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
            <div class="flex items-center gap-3 lg:gap-4 flex-1">
                <div class="notification-icon-warning p-2 lg:p-3 rounded-xl shadow-sm flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-gray-900 text-sm lg:text-base">Babi hutan terdeteksi di Blok A Utara</h3>
                    <div class="flex items-center gap-2 mt-1 lg:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-4 lg:w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-xs lg:text-sm text-emerald-700 font-medium">15:23 - Hari Ini</span>
                    </div>
                    <p class="text-xs lg:text-sm text-gray-600 mt-1 lg:mt-2 hidden lg:block">Sistem mengaktifkan alarm suara dan lampu untuk mengusir babi hutan</p>
                </div>
            </div>
            <div class="status-active px-2 lg:px-4 py-1 lg:py-1.5 rounded-full text-xs font-semibold shadow-sm flex-shrink-0 ml-2">
                PERINGATAN
            </div>
        </div>

        <!-- Notification Item 2 - Orangutan -->
        <div class="flex items-center justify-between p-4 lg:p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
            <div class="flex items-center gap-3 lg:gap-4 flex-1">
                <div class="notification-icon-warning p-2 lg:p-3 rounded-xl shadow-sm flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-gray-900 text-sm lg:text-base">Orangutan terlihat di Blok C Barat</h3>
                    <div class="flex items-center gap-2 mt-1 lg:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-4 lg:w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-xs lg:text-sm text-emerald-700 font-medium">13:45 - Hari Ini</span>
                    </div>
                    <p class="text-xs lg:text-sm text-gray-600 mt-1 lg:mt-2 hidden lg:block">Sistem mengaktifkan mode konservasi - notifikasi ke BKSDA</p>
                </div>
            </div>
            <div class="status-warning px-2 lg:px-4 py-1 lg:py-1.5 rounded-full text-xs font-semibold shadow-sm flex-shrink-0 ml-2">
                KONSERVASI
            </div>
        </div>

        <!-- Notification Item 3 - Sensor -->
        <div class="flex items-center justify-between p-4 lg:p-5 border-b border-emerald-50 hover:bg-emerald-50 transition-all duration-200 notification-item">
            <div class="flex items-center gap-3 lg:gap-4 flex-1">
                <div class="notification-icon-info p-2 lg:p-3 rounded-xl shadow-sm flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1v-3a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-gray-900 text-sm lg:text-base">Sensor Gerak Blok E Normal</h3>
                    <div class="flex items-center gap-2 mt-1 lg:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-4 lg:w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-xs lg:text-sm text-emerald-700 font-medium">11:30 - Hari Ini</span>
                    </div>
                    <p class="text-xs lg:text-sm text-gray-600 mt-1 lg:mt-2 hidden lg:block">Tidak ada aktivitas satwa liar yang terdeteksi selama 6 jam terakhir</p>
                </div>
            </div>
            <div class="status-resolved px-2 lg:px-4 py-1 lg:py-1.5 rounded-full text-xs font-semibold shadow-sm flex-shrink-0 ml-2">
                NORMAL
            </div>
        </div>

        <!-- Notification Item 4 - Maintenance -->
        <div class="flex items-center justify-between p-4 lg:p-5 hover:bg-emerald-50 transition-all duration-200 notification-item">
            <div class="flex items-center gap-3 lg:gap-4 flex-1">
                <div class="notification-icon-maintenance p-2 lg:p-3 rounded-xl shadow-sm flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-5 lg:w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <h3 class="font-semibold text-gray-900 text-sm lg:text-base">Maintenance Kamera Blok D</h3>
                    <div class="flex items-center gap-2 mt-1 lg:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-4 lg:w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-xs lg:text-sm text-emerald-700 font-medium">09:15 - Hari Ini</span>
                    </div>
                    <p class="text-xs lg:text-sm text-gray-600 mt-1 lg:mt-2 hidden lg:block">Tim teknis sedang melakukan kalibrasi sensor dan pembersihan lensa</p>
                </div>
            </div>
            <div class="status-maintenance px-2 lg:px-4 py-1 lg:py-1.5 rounded-full text-xs font-semibold shadow-sm flex-shrink-0 ml-2">
                MAINTENANCE
            </div>
        </div>
    </div>

    <!-- Quick Actions (Mobile) -->
    <div class="lg:hidden mt-6 grid grid-cols-1 gap-4">
        <div class="bg-white rounded-3xl p-6 shadow-xl">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-3">
                <button class="alert-control-btn bg-red-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-bell text-sm"></i>
                    <span class="text-sm">Test Alarm</span>
                </button>
                <button class="alert-control-btn bg-blue-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-eye text-sm"></i>
                    <span class="text-sm">View All</span>
                </button>
                <button class="alert-control-btn bg-green-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-check text-sm"></i>
                    <span class="text-sm">Mark Read</span>
                </button>
                <button class="alert-control-btn bg-purple-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-download text-sm"></i>
                    <span class="text-sm">Export</span>
                </button>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .notification-icon-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #ef4444 100%);
    }

    .notification-icon-info {
        background: linear-gradient(135deg, #10b981 0%, #0ea5e9 100%);
    }

    .notification-icon-maintenance {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
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

    @media (max-width: 768px) {
        .notification-item {
            border-radius: 1rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation to notification items
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
                
                // Show notification details on mobile
                if (window.innerWidth < 1024) {
                    const description = this.querySelector('p.hidden');
                    if (description) {
                        description.classList.toggle('hidden');
                        description.classList.toggle('lg:block');
                    }
                }
                
                if (window.BioWatch) {
                    window.BioWatch.showToast('Notification clicked', 'info');
                }
            });
        });

        // Quick action buttons (mobile)
        document.querySelectorAll('.alert-control-btn').forEach(button => {
            button.addEventListener('click', function() {
                const action = this.textContent.trim();
                
                if (window.BioWatch) {
                    window.BioWatch.showToast(`${action} executed`, 'info');
                }
            });
        });

        // Auto-refresh notifications (simulate real-time updates)
        setInterval(() => {
            const timestamps = document.querySelectorAll('.text-emerald-700');
            timestamps.forEach(timestamp => {
                if (timestamp.textContent.includes('15:23')) {
                    const now = new Date();
                    const minutes = now.getMinutes();
                    const hours = now.getHours();
                    timestamp.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')} - Hari Ini`;
                }
            });
        }, 60000); // Update every minute

        // Touch feedback for mobile
        if ('ontouchstart' in window) {
            notificationItems.forEach(item => {
                item.addEventListener('touchstart', function() {
                    this.style.backgroundColor = '#f0fdf4';
                });
                
                item.addEventListener('touchend', function() {
                    setTimeout(() => {
                        this.style.backgroundColor = '';
                    }, 200);
                });
            });
        }
    });
</script>
@endpush