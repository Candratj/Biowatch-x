@extends('layouts.guest')

@section('title', 'BioWatch-x - Sistem Monitoring Cerdas')

@section('content')
    <div class="navigation-container">
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
@endsection

@push('styles')
<style>
    /* Navigation Styles for both mobile and desktop */
    .navigation-container {
        position: relative;
        min-height: 100vh;
    }
    
    .page-section {
        display: none;
        min-height: 100vh;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
    }
    
    .page-section.active {
        display: block;
    }
    
    /* Mobile specific adjustments */
    @media (max-width: 1023px) {
        .navigation-container {
            min-height: calc(100vh - 80px); /* Account for mobile footer height */
        }
        
        .page-section {
            min-height: calc(100vh - 80px);
        }
    }
    
    /* Desktop specific adjustments */
    @media (min-width: 1024px) {
        .navigation-container {
            min-height: calc(100vh - 120px); /* Account for desktop navbar height */
        }
        
        .page-section {
            min-height: calc(100vh - 120px);
            padding-top: 2rem;
        }
    }
    
    /* Page transition animations */
    .page-section {
        opacity: 0;
        transform: translateX(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .page-section.active {
        opacity: 1;
        transform: translateX(0);
    }
    
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Navigation functionality for both mobile and desktop
        const mobileNavButtons = document.querySelectorAll('.nav-btn[data-target]');
        const desktopNavLinks = document.querySelectorAll('nav a[href^="#"]');
        
        const pageMapping = {
            'status': 'status-page',
            'kontrol': 'sensors-page',
            'pemantauan': 'cameras-page', 
            'peringatan': 'alerts-page',
            'sensors': 'sensors-page',
            'cameras': 'cameras-page',
            'alerts': 'alerts-page',
            'faq': 'faq-page'
        };
        
        let currentPage = 'status';
        
        // Mobile navigation handlers
        mobileNavButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetPage = this.getAttribute('data-target');
                if (targetPage && targetPage !== currentPage) {
                    navigateToPage(targetPage);
                    updateMobileActiveNavigation(targetPage);
                }
            });
        });
        
        // Desktop navigation handlers
        desktopNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    const targetPage = href.substring(1); // Remove # symbol
                    const mappedPage = Object.keys(pageMapping).find(key => 
                        targetPage.includes(key) || pageMapping[key].includes(targetPage)
                    );
                    
                    if (mappedPage) {
                        const finalTarget = mapToStandardPage(mappedPage);
                        if (finalTarget !== currentPage) {
                            navigateToPage(finalTarget);
                            updateDesktopActiveNavigation(this);
                        }
                    }
                }
            });
        });
        
        // Add FAQ link handler for desktop (if exists in footer or other locations)
        const faqLinks = document.querySelectorAll('a[href*="faq"], button[data-page="faq"]');
        faqLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                if (currentPage !== 'faq') {
                    navigateToPage('faq');
                    updateMobileActiveNavigation('faq');
                }
            });
        });
        
        function mapToStandardPage(page) {
            const mapping = {
                'kontrol': 'sensors',
                'pemantauan': 'cameras',
                'peringatan': 'alerts'
            };
            return mapping[page] || page;
        }
        
        function navigateToPage(targetPage) {
            const currentPageElement = document.getElementById(pageMapping[currentPage]);
            const targetPageElement = document.getElementById(pageMapping[targetPage]);
            
            if (!targetPageElement || !currentPageElement) return;
            
            // Add smooth transition
            currentPageElement.style.opacity = '0';
            currentPageElement.style.transform = 'translateX(-20px)';
            
            setTimeout(() => {
                currentPageElement.classList.remove('active');
                targetPageElement.classList.add('active');
                
                // Reset and animate new page
                targetPageElement.style.opacity = '0';
                targetPageElement.style.transform = 'translateX(20px)';
                
                setTimeout(() => {
                    targetPageElement.style.opacity = '1';
                    targetPageElement.style.transform = 'translateX(0)';
                }, 50);
                
                // Scroll to top of new page
                window.scrollTo(0, 0);
                
                // Update current page
                currentPage = targetPage;
                
                // Update URL without page reload
                const newUrl = `${window.location.pathname}?page=${targetPage}`;
                history.pushState({page: targetPage}, '', newUrl);
                
            }, 150);
        }
        
        function showPage(pageKey) {
            // Hide all pages
            document.querySelectorAll('.page-section').forEach(page => {
                page.classList.remove('active');
                page.style.opacity = '0';
                page.style.transform = 'translateX(20px)';
            });
            
            // Show target page
            const targetPage = document.getElementById(pageMapping[pageKey]);
            if (targetPage) {
                targetPage.classList.add('active');
                setTimeout(() => {
                    targetPage.style.opacity = '1';
                    targetPage.style.transform = 'translateX(0)';
                }, 50);
                currentPage = pageKey;
            }
        }
        
        function updateMobileActiveNavigation(activeTarget) {
            mobileNavButtons.forEach(btn => {
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
        
        function updateDesktopActiveNavigation(activeLink) {
            desktopNavLinks.forEach(link => {
                link.classList.remove('bg-white', 'bg-opacity-20');
            });
            activeLink.classList.add('bg-white', 'bg-opacity-20');
        }
        
        // Initialize first page
        showPage('status');
        
        // Handle browser back/forward buttons
        window.addEventListener('popstate', function(e) {
            if (e.state && e.state.page) {
                navigateToPage(e.state.page);
                updateMobileActiveNavigation(e.state.page);
                
                // Update desktop nav too
                const matchingDesktopLink = Array.from(desktopNavLinks).find(link => {
                    const href = link.getAttribute('href');
                    return href && href.includes(e.state.page);
                });
                if (matchingDesktopLink) {
                    updateDesktopActiveNavigation(matchingDesktopLink);
                }
            }
        });
        
        // Check URL parameters on load
        const urlParams = new URLSearchParams(window.location.search);
        const initialPage = urlParams.get('page');
        if (initialPage && pageMapping[initialPage]) {
            showPage(initialPage);
            updateMobileActiveNavigation(initialPage);
        }
        
        // Add keyboard navigation support (Alt + Arrow keys)
        document.addEventListener('keydown', function(e) {
            if (e.altKey) {
                const pages = ['status', 'sensors', 'cameras', 'alerts', 'faq'];
                const currentIndex = pages.indexOf(currentPage);
                
                if (e.key === 'ArrowLeft' && currentIndex > 0) {
                    e.preventDefault();
                    const prevPage = pages[currentIndex - 1];
                    navigateToPage(prevPage);
                    updateMobileActiveNavigation(prevPage);
                } else if (e.key === 'ArrowRight' && currentIndex < pages.length - 1) {
                    e.preventDefault();
                    const nextPage = pages[currentIndex + 1];
                    navigateToPage(nextPage);
                    updateMobileActiveNavigation(nextPage);
                }
            }
        });
        
        // Add swipe gesture support for mobile
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
            if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 80) {
                const pages = ['status', 'sensors', 'cameras', 'alerts', 'faq'];
                const currentIndex = pages.indexOf(currentPage);
                
                if (diffX > 0 && currentIndex < pages.length - 1) {
                    // Swipe left - next page
                    const nextPage = pages[currentIndex + 1];
                    navigateToPage(nextPage);
                    updateMobileActiveNavigation(nextPage);
                } else if (diffX < 0 && currentIndex > 0) {
                    // Swipe right - previous page
                    const prevPage = pages[currentIndex - 1];
                    navigateToPage(prevPage);
                    updateMobileActiveNavigation(prevPage);
                }
            }
            
            startX = null;
            startY = null;
        });
        
        // Initialize active states
        if (window.innerWidth < 1024) {
            updateMobileActiveNavigation('status');
        } else {
            const firstDesktopLink = desktopNavLinks[0];
            if (firstDesktopLink) {
                updateDesktopActiveNavigation(firstDesktopLink);
            }
        }
        
        // Handle window resize
        window.addEventListener('resize', function() {
            // Reinitialize navigation states on resize
            setTimeout(() => {
                if (window.innerWidth < 1024) {
                    updateMobileActiveNavigation(currentPage);
                } else {
                    const matchingLink = Array.from(desktopNavLinks).find(link => {
                        const href = link.getAttribute('href');
                        return href && href.includes(currentPage);
                    });
                    if (matchingLink) {
                        updateDesktopActiveNavigation(matchingLink);
                    }
                }
            }, 100);
        });
    });
</script>
@endpush