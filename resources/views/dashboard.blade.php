<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Mengajar Robotika - Belajar Robotika Menyenangkan</title>
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="Jasa Mengajar Robotika terbaik untuk pemula hingga persiapan kompetisi. Belajar robotika dasar, sensor, smart life, hingga pemrograman tingkat lanjut.">
    <meta name="keywords" content="mengajar robotika, belajar robotik, arduino, lego, iot, smart life, jmk robotics">
    <meta name="author" content="Jasa Mengajar Robotika">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col antialiased">

    <!-- ========================================== -->
    <!--                HEADER & NAVBAR             -->
    <!-- ========================================== -->
    <header class="fixed top-0 left-0 right-0 h-20 bg-white/80 backdrop-blur-md border-b border-slate-200/80 z-50 px-4 sm:px-8 flex items-center justify-between transition-all duration-300">
        <!-- Logo -->
        <a href="#beranda" class="flex items-center gap-2.5 group">
            <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-blue-600 text-white shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform duration-300">
                <!-- Robotic Brain/Gear SVG Icon -->
                <svg class="w-5.5 h-5.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="10" rx="2" />
                    <circle cx="8" cy="16" r="1.5" fill="currentColor"/>
                    <circle cx="16" cy="16" r="1.5" fill="currentColor"/>
                    <path d="M12 6V2M9 2h6M12 11V6" />
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-base font-extrabold tracking-tight text-slate-900 group-hover:text-blue-600 transition-colors">
                    Jasa Mengajar Robotika
                </span>
                <span class="text-[9px] text-blue-500 font-mono tracking-widest uppercase font-semibold">JMK Robotics Lab</span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#beranda" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Beranda</a>
            <a href="#tentang" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Tentang Kami</a>
            <a href="#layanan" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Layanan</a>
            <a href="#galeri" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Galeri</a>
            <a href="#kontak" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors">Kontak</a>
        </nav>

        <!-- CTA Button in Navbar -->
        <div class="hidden md:block">
            <a href="#kontak" class="px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs tracking-wide transition-all shadow-sm">
                Hubungi Kami
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <button id="mobile-menu-btn" class="md:hidden flex items-center justify-center p-2 rounded-lg text-slate-600 hover:bg-slate-100 transition-colors" aria-label="Open menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </header>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 z-50 w-72 bg-white shadow-2xl border-l border-slate-200 p-6 flex flex-col gap-6 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="flex items-center justify-between border-b border-slate-100 pb-4">
            <span class="text-sm font-bold text-slate-850">Navigasi Menu</span>
            <button id="mobile-menu-close-btn" class="p-1 rounded hover:bg-slate-100 text-slate-500 hover:text-slate-900 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <nav class="flex flex-col gap-4">
            <a href="#beranda" class="mobile-nav-link text-base font-semibold text-slate-600 hover:text-blue-600 py-1 transition-colors">Beranda</a>
            <a href="#tentang" class="mobile-nav-link text-base font-semibold text-slate-600 hover:text-blue-600 py-1 transition-colors">Tentang Kami</a>
            <a href="#layanan" class="mobile-nav-link text-base font-semibold text-slate-600 hover:text-blue-600 py-1 transition-colors">Layanan</a>
            <a href="#galeri" class="mobile-nav-link text-base font-semibold text-slate-600 hover:text-blue-600 py-1 transition-colors">Galeri</a>
            <a href="#kontak" class="mobile-nav-link text-base font-semibold text-slate-600 hover:text-blue-600 py-1 transition-colors">Kontak</a>
        </nav>
        <div class="mt-auto pt-6 border-t border-slate-100">
            <a href="#kontak" class="mobile-nav-link flex items-center justify-center w-full py-3 rounded-xl bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm transition-colors shadow-md shadow-blue-600/10">
                Daftar Kelas Sekarang
            </a>
        </div>
    </div>
    <!-- Mobile Menu Backdrop -->
    <div id="mobile-menu-backdrop" class="fixed inset-0 z-40 bg-black/30 backdrop-blur-sm hidden transition-opacity duration-300"></div>


    <!-- ========================================== -->
    <!--                HERO SECTION                -->
    <!-- ========================================== -->
    <section id="beranda" class="pt-28 pb-16 px-4 sm:px-8 max-w-7xl mx-auto w-full flex flex-col justify-center">
        <!-- Figma Container: Large Rounded Light Blue Box -->
        <div class="bg-gradient-to-tr from-sky-400 via-blue-500 to-indigo-600 rounded-3xl p-8 sm:p-12 lg:p-16 text-white shadow-xl shadow-blue-500/10 flex flex-col lg:flex-row items-center gap-12 relative overflow-hidden">
            <!-- Decorative cyber circles behind content -->
            <div class="absolute -top-12 -right-12 w-64 h-64 rounded-full bg-white/5 border border-white/10 pointer-events-none"></div>
            <div class="absolute -bottom-20 -left-20 w-96 h-96 rounded-full bg-white/5 border border-white/10 pointer-events-none"></div>

            <!-- Left Text Content -->
            <div class="flex-1 flex flex-col items-start text-left relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-semibold tracking-wider uppercase mb-6 backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Pembelajaran Terbuka 2026
                </div>
                
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
                    Jasa Mengajar Robotika untuk Pemula hingga Kompetisi
                </h1>
                
                <p class="text-white/90 text-sm sm:text-base mt-6 leading-relaxed max-w-xl">
                    Belajar robotika dari nol dengan mentor berpengalaman, kurikulum terstruktur, dan pembelajaran interaktif langsung menggunakan kit fisik yang modern.
                </p>
                
                <!-- Hero Action Buttons -->
                <div class="mt-8 flex flex-wrap gap-4 w-full sm:w-auto">
                    <a href="#layanan" class="flex-1 sm:flex-none px-6 py-3.5 rounded-xl bg-white hover:bg-slate-50 text-blue-600 font-bold text-sm tracking-wide text-center transition-all shadow-md hover:shadow-lg active:scale-98">
                        Lihat Program
                    </a>
                    <a href="#kontak" class="flex-1 sm:flex-none px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm tracking-wide text-center transition-all shadow-md active:scale-98">
                        Daftar Kelas
                    </a>
                </div>
                
                <a href="#kontak" class="group mt-6 text-white/80 hover:text-white text-xs font-semibold flex items-center gap-1.5 transition-colors">
                    Hubungi Kami 
                    <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
            
            <!-- Right Image Content -->
            <div class="flex-1 w-full flex justify-center items-center relative z-10">
                <div class="relative w-full max-w-md aspect-square rounded-2xl overflow-hidden border-4 border-white/20 shadow-2xl bg-white/5 backdrop-blur-sm group">
                    <img src="/images/hero_robot.png" alt="Edu Robot Illustration" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!--            HARGA & PAKET LAYANAN           -->
    <!-- ========================================== -->
    <section id="layanan" class="py-20 px-4 sm:px-8 max-w-7xl mx-auto w-full">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">
                Harga & Paket Singkat
            </h2>
            <p class="text-sm text-slate-500 mt-3 leading-relaxed">
                Layanan Mingguan/Bulanan. Untuk diskon/kelas khusus, cek kontak di bawah.
            </p>
        </div>

        <!-- 3 Cards Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1: Tema Animal -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-blue-500/20 hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
                <!-- Visual Box Accent -->
                <div class="h-44 bg-slate-100 flex items-center justify-center border-b border-slate-200/60 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-sky-50 to-blue-50/30"></div>
                    <!-- Robot Animal Icon Representation -->
                    <div class="relative w-16 h-16 rounded-2xl bg-sky-500/10 border border-sky-500/20 text-sky-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.905 0-5.54-1.037-7.614-2.766m15.372 0a11.962 11.962 0 010 8.532M4.386 7.734a11.963 11.963 0 000 8.532m0 0A11.953 11.953 0 0112 13.5c2.905 0 5.54 1.037 7.614 2.766" />
                        </svg>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <!-- Pricing Details -->
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Mulai dari</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 font-mono">Rp1.500.000</h3>
                        
                        <h4 class="text-lg font-bold text-slate-850 mt-4">Tema Animal</h4>
                        <p class="text-sm text-slate-500 mt-2.5 leading-relaxed">
                            Membangun proyek robotik bertema hewan (Animal Robot) dengan mekanik dasar, gear system, dan pengenalan gerakan kinetik.
                        </p>
                    </div>

                    <!-- Badges & Action -->
                    <div class="mt-8">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">mekanik</span>
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">level 1</span>
                        </div>
                        <a href="#kontak" onclick="selectPackage('Tema Animal - Rp1.500.000')" class="block w-full py-2.5 rounded-xl border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-700 hover:text-blue-600 font-bold text-xs text-center transition-all">
                            Pilih Paket
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tema Smart Life -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-blue-500/20 hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
                <!-- Visual Box Accent -->
                <div class="h-44 bg-slate-100 flex items-center justify-center border-b border-slate-200/60 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-purple-50 to-indigo-50/30"></div>
                    <!-- Smart Sensor Icon Representation -->
                    <div class="relative w-16 h-16 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <!-- Pricing Details -->
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Mulai dari</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 font-mono">Rp2.500.000</h3>
                        
                        <h4 class="text-lg font-bold text-slate-850 mt-4">Tema Smart Life</h4>
                        <p class="text-sm text-slate-500 mt-2.5 leading-relaxed">
                            Termasuk merancang & memprogram bertema smart life menggunakan sensor otomatisasi, deteksi hambatan, dan dasar sirkuit.
                        </p>
                    </div>

                    <!-- Badges & Action -->
                    <div class="mt-8">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">sensor</span>
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">level 2</span>
                        </div>
                        <a href="#kontak" onclick="selectPackage('Tema Smart Life - Rp2.500.000')" class="block w-full py-2.5 rounded-xl border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-700 hover:text-blue-600 font-bold text-xs text-center transition-all">
                            Pilih Paket
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Advance Smart Life -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:border-blue-500/20 hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
                <!-- Visual Box Accent -->
                <div class="h-44 bg-slate-100 flex items-center justify-center border-b border-slate-200/60 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-tr from-rose-50 to-pink-50/30"></div>
                    <!-- Microcontroller Chip Icon Representation -->
                    <div class="relative w-16 h-16 rounded-2xl bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-inner">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>

                <!-- Card Content -->
                <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                    <div>
                        <!-- Pricing Details -->
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mb-1">Mulai dari</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 font-mono">Rp3.500.000</h3>
                        
                        <h4 class="text-lg font-bold text-slate-850 mt-4">Advance Smart Life</h4>
                        <p class="text-sm text-slate-500 mt-2.5 leading-relaxed">
                            Membangun proyek Advance Smart Life dengan pembelajaran pemrograman yang lebih kompleks, logika bersyarat, dan integrasi IoT.
                        </p>
                    </div>

                    <!-- Badges & Action -->
                    <div class="mt-8">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">complex</span>
                            <span class="px-2.5 py-1 text-[10px] font-semibold text-slate-600 bg-slate-100 border border-slate-200/80 rounded-full font-mono">level 3</span>
                        </div>
                        <a href="#kontak" onclick="selectPackage('Advance Smart Life - Rp3.500.000')" class="block w-full py-2.5 rounded-xl border border-slate-200 hover:border-blue-600 hover:bg-blue-50/20 text-slate-700 hover:text-blue-600 font-bold text-xs text-center transition-all">
                            Pilih Paket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!--               GALERI KEGIATAN              -->
    <!-- ========================================== -->
    <section id="galeri" class="py-20 bg-slate-100/50 border-y border-slate-200/60 w-full">
        <div class="px-4 sm:px-8 max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
                <div class="text-left">
                    <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">
                        Galeri Kegiatan
                    </h2>
                    <p class="text-sm text-slate-500 mt-2">
                        Hover untuk zoom, lihat suasana kelas robotika.
                    </p>
                </div>
                <button class="px-5 py-2.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs tracking-wide transition-all shadow-sm active:scale-98">
                    Lihat Semua
                </button>
            </div>

            <!-- Gallery Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Gallery 1 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/images/gallery_level_1.png" alt="Lego Mechanical Kit" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                        <span class="absolute top-4 left-4 px-3 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-sm text-[10px] font-bold text-white uppercase tracking-wider">Level 1</span>
                    </div>
                    <div class="p-5 flex items-center gap-3">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-500"></span>
                        <h4 class="text-sm font-semibold text-slate-800">Kelas Robotika Level 1</h4>
                    </div>
                </div>

                <!-- Gallery 2 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/images/gallery_level_2.png" alt="Arduino sensor setup" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                        <span class="absolute top-4 left-4 px-3 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-sm text-[10px] font-bold text-white uppercase tracking-wider">Level 2</span>
                    </div>
                    <div class="p-5 flex items-center gap-3">
                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span>
                        <h4 class="text-sm font-semibold text-slate-800">Kelas Robotika Level 2</h4>
                    </div>
                </div>

                <!-- Gallery 3 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="/images/gallery_level_3.png" alt="Robotic Arm Setup" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                        <span class="absolute top-4 left-4 px-3 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-sm text-[10px] font-bold text-white uppercase tracking-wider">Level 3</span>
                    </div>
                    <div class="p-5 flex items-center gap-3">
                        <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                        <h4 class="text-sm font-semibold text-slate-800">Kelas Robotika level 3</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!--            VISI, MISI, & NILAI             -->
    <!-- ========================================== -->
    <section id="tentang" class="py-20 px-4 sm:px-8 max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <!-- Left Side Column -->
            <div class="lg:col-span-5 text-left">
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block mb-2">SIAPA KAMI</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 leading-tight">
                    Visi • Misi • Nilai
                </h2>
                <p class="text-sm text-slate-500 mt-4 leading-relaxed max-w-md">
                    Pendidikan pembelajaran robotika yang jelas, ramah anak, terstruktur, dan berdampak nyata bagi kreativitas masa depan.
                </p>
                
                <!-- Quick Stats inside visual block -->
                <div class="mt-8 p-6 rounded-2xl bg-white border border-slate-200/80 shadow-sm grid grid-cols-2 gap-4">
                    <div>
                        <span class="text-2xl font-extrabold text-blue-600 font-mono block">10+</span>
                        <span class="text-[11px] text-slate-500 font-bold uppercase tracking-wider">Tahun Pengalaman</span>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold text-indigo-600 font-mono block">500+</span>
                        <span class="text-[11px] text-slate-500 font-bold uppercase tracking-wider">Siswa Lulus</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Column -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Visi Card -->
                <div class="p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex items-start gap-5">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-slate-900">Visi</h4>
                        <p class="text-xs text-blue-600 font-mono mt-1 font-semibold uppercase tracking-wider">Memberdayakan generasi melalui teknologi</p>
                        <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                            Menjadi wadah belajar robotika yang membuat siswa mampu membangun teknologi dari ide secara mandiri, logis, dan inovatif.
                        </p>
                    </div>
                </div>

                <!-- Misi Card -->
                <div class="p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex items-start gap-5">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-slate-900">Misi</h4>
                        <p class="text-xs text-indigo-600 font-mono mt-1 font-semibold uppercase tracking-wider">Praktis, Modern, dan Terstruktur</p>
                        <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                            Menyusun kurikulum bertahap, mendampingi praktik secara intensif, dan membentuk siswa mandiri dalam menyelesaikan persoalan teknis pemrograman.
                        </p>
                    </div>
                </div>

                <!-- Nilai Card -->
                <div class="p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex items-start gap-5">
                    <div class="w-12 h-12 rounded-xl bg-rose-500/10 border border-rose-500/20 text-rose-600 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-1.41m8.595-8.594l1.414-1.414M3.553 5.879l1.414 1.413m8.596 8.596l1.414 1.414M16.243 4.757l-1.414 1.414M6.343 14.657l-1.414 1.414M12 3v1.5M12 19.5V21" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-base font-bold text-slate-900">Nilai Kami</h4>
                        <p class="text-xs text-rose-600 font-mono mt-1 font-semibold uppercase tracking-wider">Kreativitas, Kolaborasi, dan Tanggung Jawab</p>
                        <p class="text-sm text-slate-500 mt-2 leading-relaxed">
                            Melahirkan karya inovatif yang bermanfaat bagi lingkungan sekitar, serta melatih kerja sama tim dan disiplin tinggi dalam memecahkan masalah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!--            KONTAK & HUBUNGI KAMI           -->
    <!-- ========================================== -->
    <section id="kontak" class="py-20 bg-slate-100/50 border-t border-slate-200/60 w-full">
        <div class="px-4 sm:px-8 max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl font-extrabold tracking-tight text-slate-900">
                    Kontak & Form Pengiriman Pesan
                </h2>
                <p class="text-sm text-slate-500 mt-3">
                    Hubungi kami jika ada pertanyaan atau pemesanan paket program robotika.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Contact Methods -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- Telegram Card -->
                    <a href="https://t.me/shift91" target="_blank" class="block p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md hover:border-blue-500/20 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-600 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                <!-- Telegram Icon SVG -->
                                <svg class="w-5.5 h-5.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 9.725A9.602 9.602 0 0019 7.748M6 12l2.731 2.275A9.602 9.602 0 0019 16.24M6 12l10.89-6.23M19 7.748L21 3m0 0l-5 1.5m5-1.5v5" />
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="text-sm font-bold text-slate-900">Telegram</h4>
                                <p class="text-xs text-blue-600 font-mono mt-0.5">@JMK_Admin</p>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 mt-4 leading-relaxed">
                            Hubungi kami via Telegram untuk respon cepat dan penjelasan interaktif dengan tim teknis kami.
                        </p>
                    </a>

                    <!-- WhatsApp Card -->
                    <a href="https://wa.me/6282246921912" target="_blank" class="block p-6 bg-white border border-slate-200/80 rounded-2xl shadow-sm hover:shadow-md hover:border-emerald-500/20 transition-all group">
                        <div class="flex items-center gap-4">
                            <div class="w-11 h-11 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                <!-- WhatsApp Icon SVG -->
                                <svg class="w-5.5 h-5.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.824-1.806-5.122-4.11-6.928-6.927l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="text-sm font-bold text-slate-900">WhatsApp</h4>
                                <p class="text-xs text-emerald-600 font-mono mt-0.5">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 mt-4 leading-relaxed">
                            Kirim pesan instan untuk pendaftaran program belajar & konsultasi gratis detail lebih dari 10 paket belajar khusus.
                        </p>
                    </a>
                </div>

                <!-- Right Column: Interactive Form -->
                <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm">
                    <form id="contact-form" onsubmit="handleFormSubmit(event)" class="space-y-5">
                        <div class="text-left">
                            <label for="name" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Nama Lengkap</label>
                            <input type="text" id="name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 text-sm placeholder-slate-400 bg-slate-50 transition-all">
                        </div>

                        <div class="text-left">
                            <label for="email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Alamat Email</label>
                            <input type="email" id="email" required placeholder="Contoh: budi@gmail.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 text-sm placeholder-slate-400 bg-slate-50 transition-all">
                        </div>

                        <div class="text-left">
                            <label for="package" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Pilih Paket Layanan</label>
                            <select id="package" required class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 text-sm bg-slate-50 transition-all text-slate-700">
                                <option value="" disabled selected>Pilih paket belajar...</option>
                                <option value="Tema Animal">Tema Animal (Level 1) - Rp1.500.000</option>
                                <option value="Tema Smart Life">Tema Smart Life (Level 2) - Rp2.500.000</option>
                                <option value="Advance Smart Life">Tema Advance Smart Life (Level 3) - Rp3.500.000</option>
                                <option value="Custom / Kelas Khusus">Kustom / Kelas Khusus / Lainnya</option>
                            </select>
                        </div>

                        <div class="text-left">
                            <label for="message" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Pesan Anda</label>
                            <textarea id="message" rows="4" required placeholder="Tuliskan pertanyaan atau kebutuhan kelas Anda..." class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 text-sm placeholder-slate-400 bg-slate-50 transition-all resize-none"></textarea>
                        </div>

                        <!-- Success Alert Toast (hidden by default) -->
                        <div id="form-success" class="hidden p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-medium flex items-center gap-3">
                            <span class="flex h-2 w-2 relative shrink-0">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            <span>Terima kasih! Pesan Anda telah berhasil terkirim. Tim JMK akan segera menghubungi Anda.</span>
                        </div>

                        <div class="pt-2 text-right">
                            <button type="submit" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs tracking-wide transition-all shadow-md active:scale-98">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================== -->
    <!--                   FOOTER                   -->
    <!-- ========================================== -->
    <footer class="mt-auto py-8 bg-white border-t border-slate-200/80 w-full text-center">
        <div class="px-4 sm:px-8 max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <span class="text-xs text-slate-500 font-medium">
                &copy; 2026 Jasa Mengajar Robotika. All Rights Reserved.
            </span>
            <div class="flex items-center gap-6">
                <a href="#beranda" class="text-xs text-slate-400 hover:text-blue-600 transition-colors font-medium">Syarat & Ketentuan</a>
                <a href="#beranda" class="text-xs text-slate-400 hover:text-blue-600 transition-colors font-medium">Kebijakan Privasi</a>
            </div>
        </div>
    </footer>


    <!-- ========================================== -->
    <!--           INTERACTIVE JAVASCRIPT           -->
    <!-- ========================================== -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mobile Menu Open/Close logic
            const mobileMenuBtn = document.getElementById("mobile-menu-btn");
            const mobileMenuCloseBtn = document.getElementById("mobile-menu-close-btn");
            const mobileMenu = document.getElementById("mobile-menu");
            const mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
            const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");

            function toggleMobileMenu(isOpen) {
                if (isOpen) {
                    mobileMenu.classList.remove("translate-x-full");
                    mobileMenuBackdrop.classList.remove("hidden");
                    setTimeout(() => {
                        mobileMenuBackdrop.classList.add("opacity-100");
                    }, 50);
                    document.body.classList.add("overflow-hidden");
                } else {
                    mobileMenu.classList.add("translate-x-full");
                    mobileMenuBackdrop.classList.remove("opacity-100");
                    setTimeout(() => {
                        mobileMenuBackdrop.classList.add("hidden");
                    }, 300);
                    document.body.classList.remove("overflow-hidden");
                }
            }

            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener("click", () => toggleMobileMenu(true));
            }
            if (mobileMenuCloseBtn) {
                mobileMenuCloseBtn.addEventListener("click", () => toggleMobileMenu(false));
            }
            if (mobileMenuBackdrop) {
                mobileMenuBackdrop.addEventListener("click", () => toggleMobileMenu(false));
            }

            mobileNavLinks.forEach(link => {
                link.addEventListener("click", () => toggleMobileMenu(false));
            });
        });

        // Function to auto-select dropdown value when clicking pricing card
        function selectPackage(packageName) {
            const dropdown = document.getElementById("package");
            if (dropdown) {
                // Find matching option prefix
                for (let option of dropdown.options) {
                    if (option.value && packageName.startsWith(option.value)) {
                        dropdown.value = option.value;
                        dropdown.dispatchEvent(new Event('change'));
                        break;
                    }
                }
            }
        }

        // Form Submit Handler
        function handleFormSubmit(event) {
            event.preventDefault();
            const successAlert = document.getElementById("form-success");
            const form = document.getElementById("contact-form");
            
            if (successAlert) {
                successAlert.classList.remove("hidden");
                successAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Clear input fields after brief display
                setTimeout(() => {
                    form.reset();
                    successAlert.classList.add("hidden");
                }, 5000);
            }
        }
    </script>
</body>
</html>