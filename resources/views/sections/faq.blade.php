{{-- FAQ - Fixed Version --}}
<section id="faq" class="relative max-w-7xl mx-auto px-4 py-8 lg:py-16">
    
    <!-- Mobile Header -->
    <div class="lg:hidden mb-6">
        <div class="text-center">
            <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                FAQ
            </span>
            <h2 class="text-2xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-2">
                Pertanyaan Umum
            </h2>
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden lg:block text-center mb-10 transform transition-all duration-500 hover:scale-105">
        <span class="inline-block bg-gradient-to-r from-emerald-100 to-teal-200 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-medium shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
            Pertanyaan Umum
        </span>
        <h2 class="text-4xl font-bold bg-gradient-to-r from-emerald-700 to-teal-600 bg-clip-text text-transparent mt-3 relative group">
            Click Button
            <span class="absolute -bottom-2 left-1/2 w-0 h-1 bg-gradient-to-r from-emerald-600 to-teal-500 group-hover:w-48 transition-all duration-300 transform -translate-x-1/2"></span>
        </h2>
    </div>

    <!-- FAQ Search (Mobile) -->
    <div class="lg:hidden mb-6">
        <div class="relative">
            <input type="text" placeholder="Cari pertanyaan..." class="w-full p-4 pr-12 rounded-3xl border border-emerald-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent shadow-sm">
            <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                <i class="fas fa-search text-emerald-400"></i>
            </div>
        </div>
    </div>

    <!-- FAQ Container -->
    <div class="max-w-4xl mx-auto bg-white p-6 lg:p-8 rounded-3xl shadow-xl group transition-all duration-300 hover:shadow-2xl">
        
        <!-- FAQ List -->
        <div class="space-y-3 lg:space-y-4 text-left">
            
            <!-- FAQ Item 1 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Apa itu sistem BioWatch-x?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <!-- PERBAIKAN: Ganti class hidden dengan display: none -->
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    BioWatch-x adalah sistem monitoring real-time berbasis Internet of Things (IoT) yang dirancang untuk
                    mendeteksi pergerakan babi hutan dan orangutan di perkebunan kelapa sawit. Sistem ini memberikan
                    peringatan dini kepada petani sehingga mereka dapat merespons ancaman secara cepat dan efisien.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Mengapa BioWatch-x diperlukan di perkebunan sawit?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    Kerusakan akibat satwa liar seperti babi hutan dan orangutan menyebabkan kerugian hingga Rp 10 juta
                    per tahun bagi petani sawit di Desa Kanamit, Kalimantan Tengah. Metode tradisional seperti pagar
                    kawat dan patroli manual terbukti tidak efektif, sehingga diperlukan solusi teknologi yang lebih
                    efisien.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Bagaimana cara kerja BioWatch-x?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    Sistem ini menggunakan kombinasi sensor gerak, kamera, dan teknologi IoT untuk mendeteksi keberadaan
                    satwa liar. Ketika terdeteksi, sistem akan mengirimkan notifikasi real-time kepada petani dan
                    mengaktifkan alarm suara serta pencahayaan yang dirancang untuk menghalau satwa tanpa menyakiti
                    mereka.
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Apakah sistem ini ramah lingkungan dan aman untuk satwa liar?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    Ya, BioWatch-x dirancang dengan pendekatan humanis yang tidak menyakiti satwa liar. Sistem ini hanya
                    menggunakan alarm suara dan cahaya untuk mengusir satwa, serta membantu dalam pemetaan pola
                    pergerakan satwa untuk strategi konservasi yang lebih baik.
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Bagaimana dampak ekonomi dari penerapan BioWatch-x?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    Dengan mengurangi kerusakan tanaman sawit, sistem ini dapat menekan kerugian ekonomi petani hingga
                    70%. Selain itu, sistem ini lebih efisien dibanding metode tradisional karena mengurangi kebutuhan
                    tenaga kerja untuk patroli manual.
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item bg-white p-4 lg:p-6 border border-gray-200 rounded-2xl lg:rounded-xl cursor-pointer shadow-sm transition-all duration-300 hover:bg-emerald-50 hover:shadow-md active:scale-[0.98]">
                <h3 class="text-emerald-700 font-medium flex justify-between items-center text-sm lg:text-base">
                    Bagaimana mitra dapat mempelajari penggunaan BioWatch-x?
                    <span class="faq-icon transition-transform duration-300 text-emerald-600 text-lg lg:text-xl">▼</span>
                </h3>
                <div class="faq-answer mt-3 text-gray-600 text-sm lg:text-base leading-relaxed" style="display: none;">
                    Tim akan menyediakan pelatihan langsung dan buku panduan penggunaan untuk memastikan mitra dapat
                    mengoperasikan sistem dengan efektif. Selain itu, tersedia dukungan teknis melalui saluran
                    komunikasi yang telah disepakati.
                </div>
            </div>
        </div>

        <!-- FAQ Actions (Mobile) -->
        <div class="lg:hidden mt-6 pt-6 border-t border-gray-200">
            <div class="grid grid-cols-2 gap-3">
                <button class="faq-control-btn bg-emerald-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-expand-alt text-sm"></i>
                    <span class="text-sm">Expand All</span>
                </button>
                <button class="faq-control-btn bg-gray-500 text-white p-3 rounded-2xl font-semibold transition-all duration-300 transform active:scale-95 flex items-center justify-center space-x-2">
                    <i class="fas fa-compress-alt text-sm"></i>
                    <span class="text-sm">Collapse All</span>
                </button>
            </div>
        </div>

        <!-- Contact Support -->
        <div class="mt-6 lg:mt-8 p-4 lg:p-6 bg-emerald-50 rounded-2xl lg:rounded-xl border border-emerald-200">
            <div class="text-center">
                <h4 class="text-emerald-800 font-semibold text-sm lg:text-base mb-2">Tidak menemukan jawaban yang Anda cari?</h4>
                <p class="text-emerald-600 text-xs lg:text-sm mb-4">Tim support kami siap membantu Anda 24/7</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <button class="bg-emerald-600 text-white px-4 lg:px-6 py-2 lg:py-3 rounded-xl font-semibold transition-all duration-300 hover:bg-emerald-700 transform hover:scale-105 flex items-center justify-center space-x-2">
                        <i class="fas fa-headset text-sm"></i>
                        <span class="text-sm lg:text-base">Hubungi Support</span>
                    </button>
                    <button class="bg-white text-emerald-600 border-2 border-emerald-600 px-4 lg:px-6 py-2 lg:py-3 rounded-xl font-semibold transition-all duration-300 hover:bg-emerald-50 transform hover:scale-105 flex items-center justify-center space-x-2">
                        <i class="fas fa-book text-sm"></i>
                        <span class="text-sm lg:text-base">Panduan Manual</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const faqItems = document.querySelectorAll(".faq-item");
        const searchInput = document.querySelector('input[placeholder="Cari pertanyaan..."]');
        
        console.log('FAQ initialized. Found items:', faqItems.length); // Debug log
        
        // FAQ accordion functionality - IMPROVED & TESTED
        faqItems.forEach((item, index) => {
            console.log(`Setting up FAQ item ${index + 1}`); // Debug log
            
            // Ensure initial state is properly set
            const answer = item.querySelector(".faq-answer");
            const icon = item.querySelector(".faq-icon");
            
            if (answer && icon) {
                // Set initial state
                answer.style.display = "none";
                answer.style.opacity = "0";
                answer.style.transition = "opacity 0.3s ease";
                icon.style.transition = "transform 0.3s ease";
                icon.style.transform = "rotate(0deg)";
            }
            
            item.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('FAQ item clicked:', index + 1); // Debug log
                
                const answer = this.querySelector(".faq-answer");
                const icon = this.querySelector(".faq-icon");
                
                if (!answer || !icon) {
                    console.error('Answer or icon not found in item:', index + 1);
                    return;
                }
                
                // Check current state more reliably
                const isCurrentlyOpen = answer.style.display === "block" && answer.style.opacity === "1";
                console.log('Current state - isOpen:', isCurrentlyOpen); // Debug log

                if (isCurrentlyOpen) {
                    // Close this item with smooth animation
                    answer.style.opacity = "0";
                    setTimeout(() => {
                        answer.style.display = "none";
                    }, 300);
                    icon.style.transform = "rotate(0deg)";
                    this.classList.remove('bg-emerald-50');
                    console.log('Closing item:', index + 1);
                } else {
                    // Close all other items first (optional - remove this if you want multiple items open)
                    faqItems.forEach((otherItem, otherIndex) => {
                        if (otherItem !== this) {
                            const otherAnswer = otherItem.querySelector(".faq-answer");
                            const otherIcon = otherItem.querySelector(".faq-icon");
                            if (otherAnswer && otherIcon) {
                                otherAnswer.style.opacity = "0";
                                setTimeout(() => {
                                    otherAnswer.style.display = "none";
                                }, 300);
                                otherIcon.style.transform = "rotate(0deg)";
                                otherItem.classList.remove('bg-emerald-50');
                            }
                        }
                    });

                    // Open this item with smooth animation
                    answer.style.display = "block";
                    // Small delay to ensure display:block is applied before opacity change
                    setTimeout(() => {
                        answer.style.opacity = "1";
                    }, 10);
                    icon.style.transform = "rotate(180deg)";
                    this.classList.add('bg-emerald-50');
                    console.log('Opening item:', index + 1);
                }

                // Add ripple effect
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
            
            // Also add click event to the question specifically (redundant but safer)
            const questionElement = item.querySelector('h3');
            if (questionElement) {
                questionElement.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    // Trigger the parent item click
                    item.click();
                });
            }
        });

        // Search functionality
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                console.log('Searching for:', searchTerm); // Debug log
                
                faqItems.forEach((item, index) => {
                    const question = item.querySelector('h3').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
                    
                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';
                        item.style.opacity = '1';
                    } else {
                        item.style.opacity = '0.3';
                        if (searchTerm.length > 0) {
                            item.style.display = searchTerm.length > 2 ? 'none' : 'block';
                        } else {
                            item.style.display = 'block';
                            item.style.opacity = '1';
                        }
                    }
                });
            });
        }

        // FAQ control buttons (mobile) - FIXED TO MATCH INDIVIDUAL LOGIC
        document.querySelectorAll('.faq-control-btn').forEach(button => {
            button.addEventListener('click', function() {
                const action = this.textContent.trim();
                console.log('Control button clicked:', action); // Debug log
                
                if (action.includes('Expand All')) {
                    faqItems.forEach((item, index) => {
                        const answer = item.querySelector('.faq-answer');
                        const icon = item.querySelector('.faq-icon');
                        if (answer && icon) {
                            // Use same logic as individual click - OPEN
                            answer.style.display = 'block';
                            setTimeout(() => {
                                answer.style.opacity = '1';
                            }, 10 * (index + 1)); // Stagger animation slightly
                            icon.style.transform = 'rotate(180deg)';
                            item.classList.add('bg-emerald-50');
                            console.log('Expanding item:', index + 1);
                        }
                    });
                } else if (action.includes('Collapse All')) {
                    faqItems.forEach((item, index) => {
                        const answer = item.querySelector('.faq-answer');
                        const icon = item.querySelector('.faq-icon');
                        if (answer && icon) {
                            // Use same logic as individual click - CLOSE
                            answer.style.opacity = '0';
                            setTimeout(() => {
                                answer.style.display = 'none';
                            }, 100 * (index + 1)); // Stagger animation
                            icon.style.transform = 'rotate(0deg)';
                            item.classList.remove('bg-emerald-50');
                            console.log('Collapsing item:', index + 1);
                        }
                    });
                }
                
                // Visual feedback for button click
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Animation on scroll
        const faqObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${entry.target.dataset.index * 0.1}s`;
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });

        faqItems.forEach((item, index) => {
            item.dataset.index = index;
            faqObserver.observe(item);
        });

        // Touch feedback for mobile
        if ('ontouchstart' in window) {
            faqItems.forEach(item => {
                item.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                
                item.addEventListener('touchend', function() {
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 100);
                });
            });
        }
        
        console.log('FAQ setup complete!'); // Debug log
    });
</script>
@endpush