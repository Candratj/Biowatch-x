@extends('layouts.guest')

@section('title', 'BioWatch-x - Sistem Monitoring Cerdas')

@section('content')
    <div class="mobile-navigation-container">
        {{-- Status Sistem --}}
        <div class="page-section active" id="status-page" data-page="status">
            @include('sections.status-sistem')
        </div>

        {{-- Kontrol Sensor --}}
        <div class="page-section" id="sensors-page" data-page="sensors">
            @include('sections.kontrol-sensor')
        </div>

        {{-- Pemantauan Langsung --}}
        <div class="page-section" id="cameras-page" data-page="cameras">
            @include('sections.pemantauan-langsung')
        </div>

        {{-- Peringatan Terkini --}}
        <div class="page-section" id="alerts-page" data-page="alerts">
            @include('sections.peringatan-terkini')
        </div>

        {{-- FAQ --}}
        <div class="page-section" id="faq-page" data-page="faq">
            @include('sections.faq')
        </div>
    </div>

    {{-- Desktop shows all sections (unchanged) --}}
    <div class="desktop-content hidden lg:block">
        @include('sections.status-sistem')
        @include('sections.kontrol-sensor')
        @include('sections.pemantauan-langsung')
        @include('sections.peringatan-terkini')
        @include('sections.faq')
    </div>
@endsection

@push('styles')
<style>
    /* Mobile Navigation Styles */
    @media (max-width: 1023px) {
        .desktop-content {
            display: none !important;
        }
        
        .mobile-navigation-container {
            position: relative;
            min-height: calc(100vh - 80px); /* Account for footer height */
        }
        
        .page-section {
            display: none;
            min-height: calc(100vh - 80px);
        }
        
        .page-section.active {
            display: block;
        }
        
        /* Ensure smooth scrolling within each page */
        .page-section {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }
    }
    
    /* Desktop shows all content normally */
    @media (min-width: 1024px) {
        .mobile-navigation-container {
            display: none;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile navigation functionality
        const navButtons = document.querySelectorAll('.nav-btn');
        const pageMapping = {
            'status': 'status-page',
            'sensors': 'sensors-page', 
            'cameras': 'cameras-page',
            'alerts': 'alerts-page',
            'faq': 'faq-page'
        };
        
        let currentPage = 'status';
        
        // Only run on mobile
        if (window.innerWidth < 1024) {
            navButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetPage = this.getAttribute('data-target');
                    if (targetPage && targetPage !== currentPage) {
                        navigateToPage(targetPage);
                    }
                    
                    // Update active state
                    updateActiveNavigation(targetPage);
                });
            });
            
            // Initialize first page
            showPage('status');
        }
        
        function navigateToPage(targetPage) {
            const currentPageElement = document.getElementById(pageMapping[currentPage]);
            const targetPageElement = document.getElementById(pageMapping[targetPage]);
            
            if (!targetPageElement || !currentPageElement) return;
            
            // Simple instant page switching - no animations
            currentPageElement.classList.remove('active');
            targetPageElement.classList.add('active');
            
            // Scroll to top of new page
            window.scrollTo(0, 0);
            
            // Update current page
            currentPage = targetPage;
        }
        
        function showPage(pageKey) {
            // Hide all pages
            document.querySelectorAll('.page-section').forEach(page => {
                page.classList.remove('active');
            });
            
            // Show target page
            const targetPage = document.getElementById(pageMapping[pageKey]);
            if (targetPage) {
                targetPage.classList.add('active');
                currentPage = pageKey;
            }
        }
        
        function updateActiveNavigation(activeTarget) {
            navButtons.forEach(btn => {
                const target = btn.getAttribute('data-target');
                const iconContainer = btn.querySelector('div');
                
                if (target === activeTarget) {
                    btn.classList.remove('text-gray-400');
                    btn.classList.add('text-emerald-600');
                    
                    iconContainer.classList.remove('bg-gray-100');
                    iconContainer.classList.add('bg-emerald-100');
                } else {
                    btn.classList.remove('text-emerald-600');
                    btn.classList.add('text-gray-400');
                    
                    iconContainer.classList.remove('bg-emerald-100');
                    iconContainer.classList.add('bg-gray-100');
                }
            });
        }
        
        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(e) {
            if (window.innerWidth < 1024 && e.state && e.state.page) {
                navigateToPage(e.state.page);
                updateActiveNavigation(e.state.page);
            }
        });
        
        // Check URL parameters on load
        const urlParams = new URLSearchParams(window.location.search);
        const initialPage = urlParams.get('page');
        if (initialPage && pageMapping[initialPage] && window.innerWidth < 1024) {
            showPage(initialPage);
            updateActiveNavigation(initialPage);
        }
        
        // Add swipe gesture support for mobile (simplified)
        let startX = null;
        let startY = null;
        
        document.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });
        
        document.addEventListener('touchend', function(e) {
            if (!startX || !startY) return;
            
            const endX = e.changedTouches[0].clientX;
            const endY = e.changedTouches[0].clientY;
            
            const diffX = startX - endX;
            const diffY = startY - endY;
            
            // Only respond to horizontal swipes
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                const pages = ['status', 'sensors', 'cameras', 'alerts', 'faq'];
                const currentIndex = pages.indexOf(currentPage);
                
                if (diffX > 0 && currentIndex < pages.length - 1) {
                    // Swipe left - next page
                    const nextPage = pages[currentIndex + 1];
                    navigateToPage(nextPage);
                    updateActiveNavigation(nextPage);
                } else if (diffX < 0 && currentIndex > 0) {
                    // Swipe right - previous page
                    const prevPage = pages[currentIndex - 1];
                    navigateToPage(prevPage);
                    updateActiveNavigation(prevPage);
                }
            }
            
            startX = null;
            startY = null;
        });
    });
</script>
@endpush