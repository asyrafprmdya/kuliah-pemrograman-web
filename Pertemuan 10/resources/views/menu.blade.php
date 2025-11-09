<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Oemah Senara</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <style>
        /* Mengaplikasikan font Poppins ke seluruh halaman */
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Mengatur font judul agar lebih tebal dan menonjol */
        h1, h2, h3, .font-display {
            font-family: 'Poppins', sans-serif;
            font-weight: 700; /* Bold */
        }
        .bg-sage-primary {
            background-color: #8A9A5B;
        }
        .bg-sage-light {
            background-color: #F0F2EF;
        }
        .bg-sage-darker {
            background-color: #6B7B4B;
        }
        .text-sage-primary {
            color: #8A9A5B;
        }
        .text-sage-darker {
            color: #4A5D23;
        }
        .border-sage-primary {
            border-color: #8A9A5B;
        }
        .hover\:bg-sage-darker:hover {
            background-color: #6B7B4B;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .nav-link {
            position: relative;
        }
        .nav-link.active::after,
        .nav-link:hover::after {
            content: '';
            position: absolute;
            bottom: -4px; /* Sedikit penyesuaian posisi garis bawah */
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #8A9A5B;
        }
        .menu-section {
            animation: fadeIn 0.6s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .menu-item-row {
            transition: all 0.3s ease;
        }
        .menu-item-row:hover {
            background-color: rgba(138, 154, 91, 0.05);
            transform: translateX(5px);
        }
        .category-header {
            background: linear-gradient(135deg, #8A9A5B 0%, #6B7B4B 100%);
        }
    </style>
</head>

<body class="bg-sage-light text-gray-800 antialiased">

    <nav class="glass-effect shadow-lg fixed top-0 w-full z-50 border-b border-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl sm:text-3xl font-display font-extrabold text-sage-darker tracking-tight">
                    Oemah Senara
                </a>
                
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link text-base text-gray-700 hover:text-sage-darker transition-colors duration-300 font-medium pb-1">Home</a>
                    <a href="/menu" class="nav-link text-base text-gray-700 hover:text-sage-darker transition-colors duration-300 font-medium active pb-1">Menu</a>
                     <a href="/galeri" class="nav-link text-base text-gray-700 hover:text-sage-darker transition-colors duration-300 font-medium pb-1">Galeri</a>
                    <a href="/#kontak" class="nav-link text-base text-gray-700 hover:text-sage-darker transition-colors duration-300 font-medium pb-1">Kontak</a>
                </div>
                
                <button id="mobileMenuBtn" class="lg:hidden text-gray-700 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <div id="mobileMenu" class="hidden lg:hidden mt-6 pb-4 space-y-4">
                <a href="index.blade.php" class="block text-gray-700 hover:text-sage-darker transition py-2 font-medium">Home</a>
                <a href="#" class="block text-gray-700 hover:text-sage-darker transition py-2 font-medium">Menu</a>
                <a href="galeri.blade.php" class="block text-gray-700 hover:text-sage-darker transition py-2 font-medium">Galeri</a>
                <a href="index.blade.php#tentang" class="block text-gray-700 hover:text-sage-darker transition py-2 font-medium">Tentang</a>
            </div>
        </div>
    </nav>

    <header class="pt-32 pb-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sage-primary font-semibold text-sm sm:text-base tracking-widest uppercase mb-4">Menu Kami</p>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-sage-darker mb-6">Pilihan Istimewa</h1>
            <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto font-light">Setiap hidangan dan minuman dibuat dengan bahan terbaik dan penuh perhatian</p>
        </div>
    </header>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <section class="mb-16 menu-section">
            <div class="text-center mb-10">
                <h2 class="text-3xl sm:text-4xl font-display text-sage-darker mb-4">Menu Andalan</h2>
                <p class="text-gray-600 font-light">Rekomendasi spesial dari kami</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <img src="baileys.png" alt="Baileys Coffee" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display text-sage-darker">Baileys Coffee (Hot/Iced)</h3>
                            <span class="text-sage-primary font-bold text-lg flex-shrink-0 ml-3">22K/26K</span>
                        </div>
                        <p class="text-gray-600 text-sm font-light">Kopi susu lembut dengan sentuhan rasa Baileys yang unik dan mewah.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <img src="sumpunch.png" alt="Summer Punch" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display text-sage-darker">Summer Punch (Iced)</h3>
                            <span class="text-sage-primary font-bold text-lg flex-shrink-0 ml-3">26K</span>
                        </div>
                        <p class="text-gray-600 text-sm font-light">Kesegaran espresso, soda, dan jeruk yang sempurna untuk mencerahkan harimu.</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <img src="hotways.png" alt="Hotways Wings" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display text-sage-darker">Hot Ways Wings</h3>
                            <span class="text-sage-primary font-bold text-lg flex-shrink-0 ml-3">30K</span>
                        </div>
                        <p class="text-gray-600 text-sm font-light">Sayap ayam goreng pedas dengan bumbu rahasia yang bikin ketagihan.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-12 gap-y-16">
            
            <div class="space-y-12">
                 <section class="menu-section">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="category-header p-6">
                            <h2 class="text-3xl font-display text-white">Ricebowl</h2>
                            <p class="text-white/90 text-sm mt-1 font-light">Nasi hangat dengan lauk pilihan yang melimpah</p>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Beef Sambal Matah</h3><p class="text-gray-600 text-sm font-light">Daging sapi empuk dengan kesegaran sambal matah khas Bali.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">35K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Beef Sesame</h3><p class="text-gray-600 text-sm font-light">Daging sapi gurih dengan saus wijen yang aromatik.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">35K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Beef Black pepper</h3><p class="text-gray-600 text-sm font-light">Tumis daging sapi dengan saus lada hitam yang hangat dan pekat.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">37K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Chicken Senara</h3><p class="text-gray-600 text-sm font-light">Ayam fillet dengan bumbu khas Senara yang istimewa.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">30K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Chicken Buttermilk</h3><p class="text-gray-600 text-sm font-light">Ayam goreng renyah disiram saus buttermilk yang creamy.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">30K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Chicken Buttermilk Hotways</h3><p class="text-gray-600 text-sm font-light">Sensasi creamy saus buttermilk bertemu dengan rasa pedas Hotways.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">32K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Chicken Spicy Garlic</h3><p class="text-gray-600 text-sm font-light">Ayam renyah dengan balutan saus bawang putih pedas yang menggoda.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">28K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ricebowl Chicken Woku</h3><p class="text-gray-600 text-sm font-light">Cita rasa khas Manado dalam semangkuk nasi ayam woku yang kaya rempah.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">30K</span>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="menu-section">
                     <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="category-header p-6">
                            <h2 class="text-3xl font-display text-white">Main & Side</h2>
                            <p class="text-white/90 text-sm mt-1 font-light">Hidangan pembuka, camilan, hingga penutup</p>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Crostini Prawn</h3><p class="text-gray-600 text-sm font-light">Roti baguette renyah dengan topping udang segar dan saus spesial.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">35K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Hot Ways Wings</h3><p class="text-gray-600 text-sm font-light">Sayap ayam goreng pedas dengan bumbu rahasia yang bikin ketagihan.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">30K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Snack Bucket</h3><p class="text-gray-600 text-sm font-light">Aneka camilan gurih dalam satu sajian, cocok untuk berbagi.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">32K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Fries Cheesy</h3><p class="text-gray-600 text-sm font-light">Kentang goreng renyah disiram dengan saus keju yang melimpah.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">25K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Indomie Goreng Telur</h3><p class="text-gray-600 text-sm font-light">Indomie goreng klasik disajikan dengan telur mata sapi.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">13K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Milk Bun Vanilla</h3><p class="text-gray-600 text-sm font-light">Roti susu lembut dengan isian krim vanilla yang manis dan ringan.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">20K</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="space-y-12">
                <section class="menu-section">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="category-header p-6">
                            <h2 class="text-3xl font-display text-white">Coffee</h2>
                            <p class="text-white/90 text-sm mt-1 font-light">Dari espresso klasik hingga racikan kopi spesial</p>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Senara Signature (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Es kopi susu andalan dengan rasa creamy yang tak terlupakan.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">22K/25K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Americano (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Espresso murni yang diencerkan untuk rasa kopi yang kuat dan bersih.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">17K/19K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Cafe Latte (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Perpaduan seimbang antara espresso dan susu steamed yang lembut.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">20K/23K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Vanilla Latte (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Cafe latte klasik dengan tambahan sirup vanilla yang manis.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">22K/25K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Summer Punch (Iced)</h3><p class="text-gray-600 text-sm font-light">Kesegaran espresso, soda, dan jeruk untuk mencerahkan harimu.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">26K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Choco Crunchy Coffee (Iced)</h3><p class="text-gray-600 text-sm font-light">Kopi susu cokelat dengan taburan crunchy yang renyah.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">25K</span>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="menu-section">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div class="category-header p-6">
                            <h2 class="text-3xl font-display text-white">Non-Coffee</h2>
                            <p class="text-white/90 text-sm mt-1 font-light">Pilihan segar untuk semua selera</p>
                        </div>
                         <div class="p-6 space-y-4">
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Belgian Chocolate (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Cokelat Belgia premium yang kaya rasa dan meleleh di mulut.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">20K/23K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Green Tea Latte (Hot/Iced)</h3><p class="text-gray-600 text-sm font-light">Matcha berkualitas tinggi dipadukan dengan susu segar yang creamy.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">20K/23K</span>
                            </div>
                            <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Cookies & Cream (Iced)</h3><p class="text-gray-600 text-sm font-light">Minuman manis dan creamy dengan potongan biskuit cokelat.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">23K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Lychee Tea (Iced)</h3><p class="text-gray-600 text-sm font-light">Teh manis dengan rasa dan buah leci asli yang menyegarkan.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">22K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3 border-b border-gray-200">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Ivory Splash (Iced)</h3><p class="text-gray-600 text-sm font-light">Mocktail signature kami yang menyegarkan dengan kombinasi rasa unik.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">23K</span>
                            </div>
                             <div class="menu-item-row flex justify-between items-center py-3">
                                <div class="flex-1"><h3 class="font-semibold text-sage-darker text-lg">Tiramisu Crunchy Milk (Iced)</h3><p class="text-gray-600 text-sm font-light">Susu segar dengan rasa kue tiramisu dan taburan crunchy.</p></div>
                                <span class="text-sage-primary font-bold text-lg ml-4">23K</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="text-center mt-16 bg-white rounded-2xl shadow-lg p-8 sm:p-12 max-w-4xl mx-auto">
            <h2 class="text-2xl sm:text-3xl font-display text-sage-darker mb-4">Ada Pertanyaan tentang Menu?</h2>
            <p class="text-gray-600 mb-6 text-sm sm:text-base font-light">Hubungi kami untuk informasi lebih lanjut tentang menu dan reservasi</p>
            <a href="https://ig.me/m/oemah.senara?text=Halo%20Oemah%20Senara,%20saya%20ingin%20tanya%20tentang%20menu" target="_blank" class="inline-block bg-sage-primary text-white py-4 px-10 rounded-full font-semibold hover:bg-sage-darker transition-all duration-300 shadow-lg hover:shadow-xl">
                Hubungi Kami
            </a>
        </div>

    </main>

    <footer class="bg-sage-darker text-white mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <h3 class="text-xl sm:text-2xl font-display mb-2">Oemah Senara</h3>
                <p class="text-white/70 text-xs sm:text-sm font-light">© 2025 Oemah Senara. Semua hak cipta dilindungi. Dibuat dengan ❤</p>
            </div>
        </div>
    </footer>

    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animate menu sections on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.menu-section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(section);
        });
    </script>

</body>

</html>