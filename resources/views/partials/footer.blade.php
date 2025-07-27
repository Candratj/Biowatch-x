{{-- Mobile Bottom Navigation --}}
<div class="lg:hidden fixed bottom-0 left-0 right-0 z-50 bg-white border-t border-gray-200 shadow-2xl">
    <div class="flex justify-around items-center py-2 px-4">
        <!-- Home -->
        <button class="nav-btn flex flex-col items-center space-y-1 p-2 rounded-xl text-emerald-600" data-target="status">
            <div class="w-8 h-8 bg-emerald-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-home text-sm"></i>
            </div>
            <span class="text-xs font-medium">Home</span>
        </button>
        
        <!-- Sensors -->
        <button class="nav-btn flex flex-col items-center space-y-1 p-2 rounded-xl text-gray-400" data-target="sensors">
            <div class="w-8 h-8 bg-gray-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-satellite-dish text-sm"></i>
            </div>
            <span class="text-xs font-medium">Sensor</span>
        </button>
        
        <!-- Camera -->
        <button class="nav-btn flex flex-col items-center space-y-1 p-2 rounded-xl text-gray-400" data-target="cameras">
            <div class="w-8 h-8 bg-gray-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-video text-sm"></i>
            </div>
            <span class="text-xs font-medium">Camera</span>
        </button>
        
        <!-- Alerts -->
        <button class="nav-btn flex flex-col items-center space-y-1 p-2 rounded-xl text-gray-400" data-target="alerts">
            <div class="w-8 h-8 bg-gray-100 rounded-xl flex items-center justify-center relative">
                <i class="fas fa-bell text-sm"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-bold">3</span>
            </div>
            <span class="text-xs font-medium">Alerts</span>
        </button>

        <!-- FAQ -->
        <button class="nav-btn flex flex-col items-center space-y-1 p-2 rounded-xl text-gray-400" data-target="faq">
            <div class="w-8 h-8 bg-gray-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-question-circle text-sm"></i>
            </div>
            <span class="text-xs font-medium">FAQ</span>
        </button>
    </div>
</div>

{{-- Desktop Footer --}}
<footer class="hidden lg:block bg-gradient-to-r from-emerald-500 to-emerald-600 text-white py-6 relative shadow-lg mt-20">
    <!-- Accent color bar at top -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 via-emerald-300 to-emerald-400"></div>

    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjxwYXRoIGQ9Ik0yNCAzNmMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiMwMDAiIHN0cm9rZS1vcGFjaXR5PSIuMSIvPjwvZz48L3N2Zz4=')]"></div>
    </div>

    <div class="container max-w-6xl mx-auto px-4 relative z-10">
        <!-- Navigation Button -->
        <div class="flex justify-center items-center">
            <!-- Dashboard Button -->
            <a href="{{ route('admin.dashboard') }}" class="group bg-white text-emerald-600 hover:bg-emerald-50 font-medium py-3 px-6 rounded-xl flex items-center space-x-3">
                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-th-large"></i>
                </div>
                <span class="font-medium">Buka Dashboard</span>
            </a>
        </div>

        <!-- Bottom indicator -->
        <div class="flex justify-center mt-6">
            <div class="w-12 h-1 bg-white bg-opacity-50 rounded-full"></div>
        </div>
    </div>
</footer>

<!-- Mobile spacer -->
<div class="lg:hidden h-20"></div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile navigation functionality - Simplified without animations and notifications
        const navButtons = document.querySelectorAll('.nav-btn');
        
        navButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = this.getAttribute('data-target');
                if (!target) return;
                
                // Reset all buttons to inactive state
                navButtons.forEach(btn => {
                    btn.classList.remove('text-emerald-600');
                    btn.classList.add('text-gray-400');
                    
                    const icon = btn.querySelector('div');
                    icon.classList.remove('bg-emerald-100');
                    icon.classList.add('bg-gray-100');
                });
                
                // Activate clicked button
                this.classList.remove('text-gray-400');
                this.classList.add('text-emerald-600');
                
                const activeIcon = this.querySelector('div');
                activeIcon.classList.remove('bg-gray-100');
                activeIcon.classList.add('bg-emerald-100');
                
                // Trigger page navigation (handled by welcome.blade.php script)
                const event = new CustomEvent('mobilePageNavigation', {
                    detail: { target: target }
                });
                document.dispatchEvent(event);
            });
        });
        
        // Handle badge updates for alerts (simplified)
        function updateAlertsBadge(count) {
            const alertsBadge = document.querySelector('[data-target="alerts"] .bg-red-500');
            if (alertsBadge) {
                alertsBadge.textContent = count;
                if (count > 0) {
                    alertsBadge.style.display = 'flex';
                } else {
                    alertsBadge.style.display = 'none';
                }
            }
        }
        
        // Listen for alert updates
        document.addEventListener('alertsUpdated', function(e) {
            updateAlertsBadge(e.detail.count);
        });
    });
</script>
@endpush