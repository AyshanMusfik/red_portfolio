<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(app()->isProduction())
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ayshan Musfik | Founder @ CodeZorex | Full-Stack Developer</title>
    <meta name="description" content="Ayshan Musfik - Founder of CodeZorex & Full-Stack Developer specializing in Laravel, Livewire, Tailwind CSS, MySQL, and modern business systems.">
    <meta name="author" content="Ayshan Musfik">

    <!-- Brand Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate icon" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/favicon.svg">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0B0B0C] text-white font-sans antialiased overflow-x-hidden selection:bg-[#E50914] selection:text-white">

    <!-- ==================== 1. CINEMATIC BRAND PRELOADER ==================== -->
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-[#E50914] overflow-hidden">
        <div class="overflow-hidden px-4 py-2">
            <h1 id="preloader-text" class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white tracking-wider flex items-center">
                AYSHAN<span id="preloader-dot" class="text-black">.</span>
            </h1>
        </div>
    </div>

    <!-- ==================== 2. TOP NAVBAR (iOS Liquid Glassmorphism) ==================== -->
    <header class="fixed top-4 sm:top-6 left-0 right-0 z-40 px-4 sm:px-8 pointer-events-none">
        <nav class="nav-floating pointer-events-auto glass-liquid-nav max-w-6xl mx-auto rounded-full px-5 py-2.5 sm:px-7 sm:py-3.5 flex items-center justify-between transition-all duration-300">
            <!-- Brand Logo -->
            <a href="#home" class="flex items-center gap-2 group">
                <span class="text-white font-bold tracking-wider text-lg sm:text-xl md:text-2xl group-hover:opacity-90 transition-opacity">
                    AYSHAN<span class="text-white/70 font-mono text-sm ml-0.5">.dev</span>
                </span>
            </a>

            <!-- Center Nav Links (Desktop) -->
            <div class="hidden md:flex items-center gap-2 text-sm font-semibold text-white">
                <a href="#home" data-section="home" class="nav-link px-4 py-1.5 rounded-full bg-white/20 text-white shadow-sm transition-all duration-300">Home</a>
                <a href="#about" data-section="about" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">About</a>
                <a href="#process" data-section="process" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Process</a>
                <a href="#skills" data-section="skills" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Tech Stack</a>
                <a href="#projects" data-section="projects" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Projects</a>
                <a href="#testimonials" data-section="testimonials" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Reviews</a>
                <a href="#contact" data-section="contact" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Contact</a>
            </div>

            <!-- Right Actions Container (Desktop & Mobile) -->
            <div class="flex items-center gap-2 sm:gap-3">
                <!-- Right Hire Me Pill Button -->
                <a href="#contact" class="magnetic-btn bg-white text-black hover:bg-neutral-100 font-bold px-4 py-1.5 sm:px-6 sm:py-2.5 rounded-full text-xs sm:text-sm tracking-wide shadow-md hover:scale-105 transition-all duration-300 flex items-center justify-center">
                    <span class="text-black font-bold">Hire Me</span>
                </a>

                <!-- Mobile Hamburger Menu Button (Mobile Only) -->
                <button id="mobile-menu-btn" aria-label="Toggle Navigation Menu" class="md:hidden w-9 h-9 rounded-full bg-white/15 hover:bg-white/25 border border-white/20 flex items-center justify-center text-white transition-all duration-300 cursor-pointer">
                    <span id="icon-menu-wrapper" class="flex items-center justify-center">
                        <i data-lucide="menu" class="w-5 h-5"></i>
                    </span>
                    <span id="icon-close-wrapper" class="hidden items-center justify-center">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </span>
                </button>
            </div>
        </nav>

        <!-- Mobile Floating Glass Navigation Menu Sheet -->
        <div id="mobile-menu-drawer" class="pointer-events-auto max-w-6xl mx-auto mt-3 rounded-3xl glass-liquid-nav p-5 hidden flex-col gap-2 md:hidden shadow-2xl border border-white/20 backdrop-blur-xl transition-all duration-300">
            <div class="flex flex-col gap-1.5 font-semibold text-sm text-white">
                <a href="#home" data-section="home" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl bg-white/15 text-white transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/15 border border-white/20 flex items-center justify-center text-white">
                            <i data-lucide="home" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>Home</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#about" data-section="about" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-white">
                            <i data-lucide="user" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>About</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#process" data-section="process" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-white">
                            <i data-lucide="workflow" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>Process</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#skills" data-section="skills" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-white">
                            <i data-lucide="code-2" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>Tech Stack</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#projects" data-section="projects" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-white">
                            <i data-lucide="layers" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>Projects</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#testimonials" data-section="testimonials" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-amber-400">
                            <i data-lucide="star" class="w-4 h-4 text-amber-400 fill-amber-400"></i>
                        </span>
                        <span>Reviews</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
                <a href="#contact" data-section="contact" class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-2xl hover:bg-white/10 text-white/90 transition-all">
                    <span class="flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-white/10 border border-white/15 flex items-center justify-center text-white">
                            <i data-lucide="send" class="w-4 h-4 text-white"></i>
                        </span>
                        <span>Contact</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-4 h-4 opacity-50"></i>
                </a>
            </div>

            <div class="pt-3 mt-1 border-t border-white/10 flex items-center gap-3">
                <a href="/assets/docs/Ayshan_CV.pdf" download class="flex-1 py-2.5 rounded-xl bg-white/10 border border-white/15 text-center text-xs font-bold text-white hover:bg-white/20 transition-all flex items-center justify-center gap-2">
                    <i data-lucide="download" class="w-3.5 h-3.5"></i>
                    <span>Download CV</span>
                </a>
                <a href="#contact" class="mobile-nav-link flex-1 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 text-center text-xs font-bold text-white transition-all flex items-center justify-center gap-2 shadow-lg shadow-red-600/30">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                    <span>Let's Talk</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ==================== 3. RESPONSIVE FULL-BLEED HERO CANVAS ==================== -->
    <section id="home" class="relative min-h-screen w-full flex items-end justify-between overflow-hidden bg-[#E50914] pt-24 sm:pt-28 pb-0 px-0 transition-all duration-300 origin-top">
        
        <!-- MAIN CONTAINER -->
        <div class="relative z-10 w-full max-w-[1700px] mx-auto px-4 sm:px-6 lg:px-16 min-h-[calc(100vh-5rem)] sm:min-h-[calc(100vh-6rem)] flex flex-col lg:flex-row items-start lg:items-end justify-between pointer-events-none">
            
            <!-- LEFT COLUMN: Typography & Action CTAs -->
            <div class="w-full lg:w-5/12 xl:w-5/12 flex flex-col items-start text-left pt-1 sm:pt-4 pb-4 md:pb-12 lg:pb-24 z-20 pointer-events-auto">
                
                <h1 class="hero-text-elem text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white tracking-tight leading-[1.1] md:leading-[1.05] mb-1">
                    Hi, I'm a
                </h1>

                <h2 class="hero-text-elem text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-black text-stroke-white tracking-tight leading-[1.1] md:leading-[1.05] mb-2 sm:mb-3 md:mb-6">
                    Full Stack Developer
                </h2>

                <p class="hero-text-elem text-white/90 text-xs sm:text-sm md:text-xl max-w-[320px] sm:max-w-md md:max-w-lg font-medium leading-relaxed mb-3.5 sm:mb-4 md:mb-8">
                    Founder of <span class="font-bold underline decoration-white/40">CodeZorex</span> & Full-Stack Developer building modern web apps, scalable business systems, and clean UI/UX with Laravel, Livewire & Tailwind CSS.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-row items-center gap-2 sm:gap-4 flex-wrap">
                    <!-- CTA 1: View My Work -->
                    <a href="#projects" class="hero-cta-elem magnetic-btn inline-flex items-center justify-center px-4 py-2.5 md:px-9 md:py-4 rounded-full bg-white text-black hover:bg-gray-100 font-bold text-xs md:text-base tracking-wide shadow-xl hover:scale-105 transition-all duration-300">
                        <span>View My Work</span>
                    </a>

                    <!-- CTA 2: Contact Me -->
                    <a href="#contact" class="hero-cta-elem magnetic-btn inline-flex items-center justify-center px-4 py-2.5 md:px-9 md:py-4 rounded-full bg-black/50 border border-white/30 hover:bg-black/70 text-white font-bold text-xs md:text-base tracking-wide transition-all duration-300">
                        <span>Contact Me</span>
                    </a>

                    <!-- CTA 3: Download CV -->
                    <a href="/assets/docs/Ayshan_CV.pdf" download class="hero-cta-elem magnetic-btn inline-flex items-center justify-center px-4 py-2.5 md:px-6 md:py-4 rounded-full bg-white/15 border border-white/40 hover:bg-white/25 text-white font-bold text-xs md:text-base tracking-wide transition-all duration-300">
                        <span>Download CV</span>
                    </a>
                </div>

            </div>

            <!-- RIGHT COLUMN / FULL-BLEED MEDIA CONTAINER -->
            <div class="hero-media-container media-mask-fade absolute bottom-0 right-0 w-full md:w-[90vw] lg:w-[75vw] xl:w-[70vw] h-[64vh] sm:h-[70vh] md:h-[78vh] lg:h-[90vh] xl:h-[95vh] max-h-[980px] flex items-end justify-center md:justify-end pointer-events-none z-0">
                
                <!-- LAYER A (Default Visible Static Image) -->
                <img id="hero-img" 
                     src="/assets/hero-avatar.jpg" 
                     class="w-full h-full object-cover object-bottom scale-110 sm:scale-100 origin-bottom pointer-events-auto transition-opacity duration-500 z-10" 
                     alt="Ayshan Musfik Avatar" 
                     onerror="this.src='/assets/hero-avatar.png'">

                <!-- LAYER B (Default Hidden Video Element) -->
                <video id="hero-video" 
                       src="/assets/intro-video.mp4" 
                       playsinline 
                       class="w-full h-full object-cover object-bottom scale-110 sm:scale-100 origin-bottom absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-500 z-10">
                    Your browser does not support HTML5 video.
                </video>

            </div>

            <!-- FLOATING "PLAY REEL" TRIGGER BUTTON -->
            <div class="play-reel-trigger absolute bottom-4 sm:bottom-8 md:bottom-10 right-3 sm:right-8 lg:right-16 z-30 pointer-events-auto scale-80 sm:scale-90 md:scale-100 origin-bottom-right">
                <button id="play-reel-btn" class="magnetic-btn group flex flex-col items-center gap-2 cursor-pointer">
                    <div class="w-14 h-14 sm:w-20 sm:h-20 rounded-full bg-[#E50914] border-2 border-white/50 shadow-2xl flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                        <i data-lucide="play" id="play-icon" class="w-7 h-7 sm:w-8 sm:h-8 fill-white translate-x-0.5"></i>
                        <i data-lucide="pause" id="pause-icon" class="w-7 h-7 sm:w-8 sm:h-8 fill-white hidden"></i>
                    </div>
                    <span id="play-reel-text" class="text-[10px] sm:text-xs font-mono font-bold tracking-widest text-white uppercase drop-shadow-md">
                        PLAY REEL
                    </span>
                </button>
            </div>

        </div>
    </section>

    <!-- ==================== 4. ABOUT ME (SOLID RED HANGING PORTRAIT FRAME SECTION) ==================== -->
    <section id="about" class="relative bg-[#E50914] text-white min-h-screen py-24 sm:py-32 px-6 md:px-12 lg:px-20 flex items-center overflow-hidden">
        
        <div class="max-w-[1700px] mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- LEFT COLUMN: Hanging Portrait Card Frame (5 Cols) -->
            <div class="lg:col-span-5 flex flex-col items-center justify-center relative">
                
                <!-- Lanyard Connector Slot & Hook Clip -->
                <div id="about-clip" class="w-5 h-4 bg-white rounded-t-sm mx-auto shadow-md relative -mb-1 z-20"></div>
                <div class="w-8 h-2 bg-black mx-auto rounded-full -mb-1 relative z-10"></div>

                <!-- Tall Portrait Card Frame -->
                <div id="about-card-frame" class="relative w-[280px] sm:w-[330px] md:w-[380px] lg:w-[410px] aspect-[3/4.2] bg-black border-4 md:border-[6px] border-black rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl shadow-black/60 transform-gpu cursor-pointer transition-all duration-300 -rotate-3 md:-rotate-4 origin-top-center">
                    <img src="/assets/hero-avatar.jpg" 
                         alt="Ayshan Musfik" 
                         class="w-full h-full object-cover object-top"
                         onerror="this.src='/assets/hero-avatar.png'">
                </div>

            </div>

            <!-- RIGHT COLUMN: Minimalist Editorial Content (7 Cols) -->
            <div class="lg:col-span-7 flex flex-col items-start pt-4 text-white">
                
                <h2 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight leading-tight mb-8">
                    Hello!
                </h2>

                <p class="text-white text-xl sm:text-2xl md:text-3xl font-semibold leading-snug mb-6 max-w-2xl">
                    I'm <strong class="font-black text-white underline decoration-white/30 underline-offset-8">Ayshan Musfik</strong>, Founder of CodeZorex and a Full-Stack Developer from Sri Lanka dedicated to crafting clean, functional, and highly scalable web systems.
                </p>

                <p class="text-white/90 text-base sm:text-lg md:text-xl font-normal leading-relaxed max-w-2xl mb-8">
                    I bridge the gap between creative visual UI/UX design and bulletproof backend engineering. Specializing in Laravel, Livewire, PHP, MySQL, JavaScript, and Tailwind CSS to transform complex ideas into reliable digital products.
                </p>

                <!-- Key Highlights / Stat Badges -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full max-w-2xl pt-4 border-t border-white/20">
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl font-black text-white font-mono">12+</span>
                        <span class="text-xs text-white/80 uppercase font-mono">Projects Built</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl font-black text-white font-mono">5+</span>
                        <span class="text-xs text-white/80 uppercase font-mono">Business Systems</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl font-black text-white font-mono">1</span>
                        <span class="text-xs text-white/80 uppercase font-mono">Startup Founded</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl sm:text-3xl font-black text-white font-mono">2026</span>
                        <span class="text-xs text-white/80 uppercase font-mono">Active Full-Stack</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== 5. HOW WE WORK / PROCESS (CARD STACKING SECTION) ==================== -->
    <section id="process" class="relative bg-[#0B0B0C] text-white min-h-screen py-14 sm:py-20 lg:py-0 px-4 sm:px-6 md:px-12 lg:px-20 flex items-center overflow-hidden">
        
        <!-- Ambient Red Glows -->
        <div class="absolute top-1/3 right-10 w-[500px] h-[500px] bg-[#E50914]/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-16 items-center">
            
            <!-- LEFT COLUMN: Sticky Content -->
            <div class="left-sticky-col lg:col-span-5 flex flex-col items-start pt-1 lg:pt-4">
                
                <!-- Pill Tag -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1 sm:px-4 sm:py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-2.5 sm:mb-4 lg:mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#E50914]"></span>
                    <span class="text-[10px] sm:text-xs font-mono tracking-widest text-white uppercase font-bold">
                        How We Work
                    </span>
                </div>

                <!-- Main Bold Headline -->
                <h2 class="text-2xl sm:text-4xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.15] mb-2 sm:mb-3 lg:mb-6">
                    Let us show you how we drive your brand to <span class="text-[#E50914]">new heights</span>
                </h2>

                <!-- Description Paragraph -->
                <p class="text-gray-400 text-xs sm:text-base md:text-lg leading-relaxed max-w-md font-normal mb-3 sm:mb-4 lg:mb-8 line-clamp-2 sm:line-clamp-none">
                    We follow a structured, creative, and highly technical approach to turn your ideas into robust full stack applications.
                </p>

                <!-- Small Stack Counter Badge -->
                <div class="flex items-center gap-3 text-[11px] sm:text-xs font-mono text-gray-500 mb-1 lg:mb-0">
                    <span class="text-[#E50914] font-bold text-xs sm:text-sm">04 STEPS</span>
                    <span>/</span>
                    <span>SCROLL TO UNLOCK</span>
                </div>

            </div>

            <!-- RIGHT COLUMN: 4 Stackable Red Process Cards -->
            <div class="right-stack-col lg:col-span-7 relative w-full h-[450px] sm:h-[490px] md:h-[530px] lg:h-[560px]">
                
                <!-- CARD 01 -->
                <div class="process-card absolute inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-5 sm:p-7 md:p-10 shadow-2xl border border-white/15 flex flex-col justify-between z-10">
                    <!-- Top Header -->
                    <div>
                        <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-white/20 pb-2.5 sm:pb-3">
                            <span class="font-mono text-2xl sm:text-3xl md:text-4xl font-extrabold opacity-75">01</span>
                            <span class="px-3 py-0.5 sm:px-3.5 sm:py-1 rounded-full bg-black/25 text-[10px] sm:text-xs font-mono font-bold tracking-widest uppercase border border-white/10">Phase One</span>
                        </div>

                        <div>
                            <h3 class="text-xl sm:text-3xl md:text-4xl font-black tracking-tight mb-1.5 sm:mb-2">Define & Plan</h3>
                            <p class="text-white/90 text-xs sm:text-base leading-relaxed font-normal">
                                Understanding project goals, business workflows, database structures, and technical requirements to lay a rock-solid foundation.
                            </p>
                        </div>
                    </div>

                    <!-- Center Deliverables Grid -->
                    <div class="my-2 sm:my-4">
                        <div class="text-[10px] sm:text-[11px] font-mono font-bold tracking-widest text-white/80 uppercase mb-2 sm:mb-3 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                            <span>KEY DELIVERABLES & FOCUS</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 sm:gap-2.5">
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Requirements Spec</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">DB Architecture</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Workflow Mapping</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Delivery Roadmap</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Phase Footer -->
                    <div class="pt-2.5 sm:pt-3 border-t border-white/15 flex items-center justify-between text-[10px] sm:text-xs font-mono text-white/80">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="compass" class="w-3 h-3 sm:w-3.5 sm:h-3.5"></i>
                            <span>Architecture & Discovery</span>
                        </span>
                        <span class="font-bold text-white bg-black/20 px-2 py-0.5 sm:px-2.5 rounded-full">Step 1 of 4</span>
                    </div>
                </div>

                <!-- CARD 02 -->
                <div class="process-card absolute inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-5 sm:p-7 md:p-10 shadow-2xl border border-white/15 flex flex-col justify-between z-20">
                    <!-- Top Header -->
                    <div>
                        <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-white/20 pb-2.5 sm:pb-3">
                            <span class="font-mono text-2xl sm:text-3xl md:text-4xl font-extrabold opacity-75">02</span>
                            <span class="px-3 py-0.5 sm:px-3.5 sm:py-1 rounded-full bg-black/25 text-[10px] sm:text-xs font-mono font-bold tracking-widest uppercase border border-white/10">Phase Two</span>
                        </div>

                        <div>
                            <h3 class="text-xl sm:text-3xl md:text-4xl font-black tracking-tight mb-1.5 sm:mb-2">Design & Prototype</h3>
                            <p class="text-white/90 text-xs sm:text-base leading-relaxed font-normal">
                                Crafting clean, pixel-perfect user interfaces and wireframes in Figma optimized for clarity, brand identity, and high usability.
                            </p>
                        </div>
                    </div>

                    <!-- Center Deliverables Grid -->
                    <div class="my-2 sm:my-4">
                        <div class="text-[10px] sm:text-[11px] font-mono font-bold tracking-widest text-white/80 uppercase mb-2 sm:mb-3 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                            <span>KEY DELIVERABLES & FOCUS</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 sm:gap-2.5">
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Figma UI Design</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Mobile Responsive</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Click Prototypes</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Token Styleguide</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Phase Footer -->
                    <div class="pt-2.5 sm:pt-3 border-t border-white/15 flex items-center justify-between text-[10px] sm:text-xs font-mono text-white/80">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="palette" class="w-3 h-3 sm:w-3.5 sm:h-3.5"></i>
                            <span>UI/UX & Prototyping</span>
                        </span>
                        <span class="font-bold text-white bg-black/20 px-2 py-0.5 sm:px-2.5 rounded-full">Step 2 of 4</span>
                    </div>
                </div>

                <!-- CARD 03 -->
                <div class="process-card absolute inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-5 sm:p-7 md:p-10 shadow-2xl border border-white/15 flex flex-col justify-between z-30">
                    <!-- Top Header -->
                    <div>
                        <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-white/20 pb-2.5 sm:pb-3">
                            <span class="font-mono text-2xl sm:text-3xl md:text-4xl font-extrabold opacity-75">03</span>
                            <span class="px-3 py-0.5 sm:px-3.5 sm:py-1 rounded-full bg-black/25 text-[10px] sm:text-xs font-mono font-bold tracking-widest uppercase border border-white/10">Phase Three</span>
                        </div>

                        <div>
                            <h3 class="text-xl sm:text-3xl md:text-4xl font-black tracking-tight mb-1.5 sm:mb-2">Full-Stack Build</h3>
                            <p class="text-white/90 text-xs sm:text-base leading-relaxed font-normal">
                                Developing robust backend architectures and reactive full-stack interfaces using Laravel, Livewire, MySQL, and Tailwind CSS.
                            </p>
                        </div>
                    </div>

                    <!-- Center Deliverables Grid -->
                    <div class="my-2 sm:my-4">
                        <div class="text-[10px] sm:text-[11px] font-mono font-bold tracking-widest text-white/80 uppercase mb-2 sm:mb-3 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                            <span>KEY DELIVERABLES & FOCUS</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 sm:gap-2.5">
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Laravel 12 APIs</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Livewire Reactive</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">MySQL Query Tuning</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Auth & Security</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Phase Footer -->
                    <div class="pt-2.5 sm:pt-3 border-t border-white/15 flex items-center justify-between text-[10px] sm:text-xs font-mono text-white/80">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="code-2" class="w-3 h-3 sm:w-3.5 sm:h-3.5"></i>
                            <span>Engineering & Integration</span>
                        </span>
                        <span class="font-bold text-white bg-black/20 px-2 py-0.5 sm:px-2.5 rounded-full">Step 3 of 4</span>
                    </div>
                </div>

                <!-- CARD 04 -->
                <div class="process-card absolute inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-5 sm:p-7 md:p-10 shadow-2xl border border-white/15 flex flex-col justify-between z-40">
                    <!-- Top Header -->
                    <div>
                        <div class="flex items-center justify-between mb-3 sm:mb-4 border-b border-white/20 pb-2.5 sm:pb-3">
                            <span class="font-mono text-2xl sm:text-3xl md:text-4xl font-extrabold opacity-75">04</span>
                            <span class="px-3 py-0.5 sm:px-3.5 sm:py-1 rounded-full bg-black/25 text-[10px] sm:text-xs font-mono font-bold tracking-widest uppercase border border-white/10">Phase Four</span>
                        </div>

                        <div>
                            <h3 class="text-xl sm:text-3xl md:text-4xl font-black tracking-tight mb-1.5 sm:mb-2">Test & Launch</h3>
                            <p class="text-white/90 text-xs sm:text-base leading-relaxed font-normal">
                                Rigorous testing, speed optimization, and seamless cloud deployment, backed by continuous improvements and ongoing support.
                            </p>
                        </div>
                    </div>

                    <!-- Center Deliverables Grid -->
                    <div class="my-2 sm:my-4">
                        <div class="text-[10px] sm:text-[11px] font-mono font-bold tracking-widest text-white/80 uppercase mb-2 sm:mb-3 flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                            <span>KEY DELIVERABLES & FOCUS</span>
                        </div>
                        <div class="grid grid-cols-2 gap-2 sm:gap-2.5">
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Cross-Device QA</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Speed & SEO</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Cloud Deployment</span>
                            </div>
                            <div class="flex items-center gap-2 px-2.5 py-1.5 sm:px-3.5 sm:py-2 rounded-xl bg-black/20 backdrop-blur-sm border border-white/10 text-[11px] sm:text-sm font-medium text-white/95">
                                <i data-lucide="check-circle-2" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-white shrink-0"></i>
                                <span class="truncate">Support & Monitoring</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Phase Footer -->
                    <div class="pt-2.5 sm:pt-3 border-t border-white/15 flex items-center justify-between text-[10px] sm:text-xs font-mono text-white/80">
                        <span class="flex items-center gap-1.5">
                            <i data-lucide="rocket" class="w-3 h-3 sm:w-3.5 sm:h-3.5"></i>
                            <span>Production & Delivery</span>
                        </span>
                        <span class="font-bold text-white bg-black/20 px-2 py-0.5 sm:px-2.5 rounded-full">Step 4 of 4</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== 6. INTERACTIVE TECH STACK SECTION (HORIZONTAL SCROLL DECK - DARK RED THEME) ==================== -->
    <section id="skills" class="relative bg-[#0B0B0C] text-white py-24 sm:py-32 px-4 sm:px-6 md:px-12 lg:px-20 border-t border-white/5 overflow-hidden">
        
        <!-- Giant Screen-Filling Backdrop Typography (Same as Contact Section) -->
        <h2 id="skills-bg-text" class="text-[21vw] font-black leading-none tracking-tighter text-white select-none pointer-events-none absolute inset-0 flex items-center justify-center z-0 uppercase opacity-95 transform-gpu">
            SKILLS
        </h2>

        <!-- Ambient Red Atmosphere Glow Orbs -->
        <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[600px] h-[600px] bg-[#E50914]/15 rounded-full blur-[160px] pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-[450px] h-[450px] bg-[#E50914]/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full flex flex-col relative z-10">
            
            <!-- Section Header & Navigation Row -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-10">
                <div class="flex flex-col items-start text-left">
                    <!-- Section Pill Header -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-4 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-[#E50914] animate-pulse"></span>
                        <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                            ✦ TECHNICAL ARSENAL
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
                        Complete Software <span class="text-[#E50914]">Toolkit & Skills</span>
                    </h2>
                    <p class="text-gray-400 text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed mt-2">
                        Scroll through all 18+ languages, frameworks, database systems, and development tools I use to build scalable products.
                    </p>
                </div>

                <!-- Horizontal Navigation Scroll Arrows -->
                <div class="flex items-center gap-3 self-start md:self-end">
                    <button id="skills-prev-btn" aria-label="Scroll skills left" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                        <i data-lucide="chevron-left" class="w-6 h-6 group-hover:-translate-x-0.5 transition-transform"></i>
                    </button>
                    <button id="skills-next-btn" aria-label="Scroll skills right" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                        <i data-lucide="chevron-right" class="w-6 h-6 group-hover:translate-x-0.5 transition-transform"></i>
                    </button>
                </div>
            </div>

            <!-- Category Filter Pills -->
            <div class="flex items-center gap-2 overflow-x-auto pb-4 mb-6 scrollbar-none">
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-[#E50914] text-white border border-[#E50914] shadow-md shadow-red-600/30" data-category="all">All (18)</button>
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white border border-white/10" data-category="backend">Backend & Core</button>
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white border border-white/10" data-category="frontend">Frontend & UI</button>
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white border border-white/10" data-category="database">Database</button>
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white border border-white/10" data-category="tools">Tools & DevOps</button>
                <button class="skill-filter-btn px-4 py-2 rounded-full text-xs font-mono font-bold uppercase transition-all duration-300 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white border border-white/10" data-category="design">Design & Learning</button>
            </div>            <!-- Infinite Marquee Two-Way Motion Deck Container -->
            <div class="skills-marquee-container relative w-full overflow-hidden flex flex-col gap-4 sm:gap-6 py-4">
                
                <!-- Left Gradient Shadow Blend Overlay -->
                <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-r from-[#0B0B0C] via-[#0B0B0C]/90 to-transparent z-30"></div>

                <!-- Right Gradient Shadow Blend Overlay -->
                <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-l from-[#0B0B0C] via-[#0B0B0C]/90 to-transparent z-30 flex items-center justify-end pr-3">
                    <div class="w-8 h-8 rounded-full bg-[#E50914]/20 border border-[#E50914]/40 flex items-center justify-center text-white/80 animate-pulse hidden sm:flex shadow-lg">
                        <i data-lucide="sparkles" class="w-4 h-4 text-red-400"></i>
                    </div>
                </div>

                <!-- ================= ROW 1: MARQUEE LEFT (ODD CARDS: 1, 3, 5, 7, 9, 11, 13, 15, 17) ================= -->
                <div class="overflow-visible w-full py-6 sm:py-8">
                    <div id="skills-row-1" class="skills-marquee-left flex items-center gap-4 px-2">
                        
                        <!-- 1. Laravel -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">01</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="layers" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Core Stack</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Laravel 12</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">MVC architecture, Eloquent ORM, REST APIs, and queues.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. PHP -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">03</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="code-2" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Language</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">PHP 8.x</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Object-oriented programming, attributes & strong types.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 5. JavaScript -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">05</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="terminal" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Frontend</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">JavaScript</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Async/await, AJAX fetch, DOM animations & event handling.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Proficient</span>
                                </div>
                            </div>
                        </div>

                        <!-- 7. SQL Queries -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="database">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">07</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="hard-drive" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Query Engine</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">SQL Queries</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Complex joins, aggregates, transactions & data integrity.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Proficient</span>
                                </div>
                            </div>
                        </div>

                        <!-- 9. CSS3 -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">09</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Styling</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">CSS3</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Flexbox, CSS Grid, keyframes, fluid layouts & glassmorphism.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- 11. Git CLI -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="tools">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">11</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="git-branch" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">VCS</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Git CLI</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Branching workflows, rebasing, merge conflict resolution.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 13. Figma -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="design">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">13</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="layout" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Design</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Figma</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Component libraries, auto-layout & interactive prototypes.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 15. React -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="design">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">15</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="component" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Learning</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">React.js</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Component architecture, JSX, hooks & state management.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Learning</span>
                                </div>
                            </div>
                        </div>

                        <!-- 17. Docker -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="tools">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">17</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="box" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Containers</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Docker</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Docker Compose & reproducible development environments.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Proficient</span>
                                </div>
                            </div>
                        </div>

                        <!-- DUPLICATE SET 1 FOR SEAMLESS INFINITE LOOP -->
                        <!-- 1. Laravel (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">01</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="layers" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Core Stack</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Laravel 12</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">MVC architecture, Eloquent ORM, REST APIs, and queues.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 3. PHP (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">03</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="code-2" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Language</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">PHP 8.x</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Object-oriented programming, attributes & strong types.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 5. JavaScript (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">05</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="terminal" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Frontend</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">JavaScript</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Async/await, AJAX fetch, DOM animations & event handling.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Proficient</span>
                                </div>
                            </div>
                        </div>

                        <!-- 7. SQL Queries (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="database">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">07</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="hard-drive" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Query Engine</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">SQL Queries</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Complex joins, aggregates, transactions & data integrity.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Proficient</span>
                                </div>
                            </div>
                        </div>

                        <!-- 9. CSS3 (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">09</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="sparkles" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Styling</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">CSS3</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Flexbox, CSS Grid, keyframes, fluid layouts & glassmorphism.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ================= ROW 2: MARQUEE RIGHT (EVEN CARDS: 2, 4, 6, 8, 10, 12, 14, 16, 18) ================= -->
                <div class="overflow-visible w-full py-6 sm:py-8">
                    <div id="skills-row-2" class="skills-marquee-right flex items-center gap-4 px-2">
                        
                        <!-- 2. Livewire -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">02</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="zap" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Full-Stack</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Livewire 3</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Real-time reactive frontend components in PHP & Blade.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Tailwind CSS -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">04</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="palette" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Styling</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Tailwind CSS</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Rapid responsive styling, dark modes, animations & tokens.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- 6. MySQL -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="database">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">06</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="database" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Database</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">MySQL</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Schema design, query optimization, indexing & migrations.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 8. HTML5 -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">08</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="layout-template" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Markup</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">HTML5</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Accessible, SEO-compliant semantic structure & meta tags.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- 10. GitHub -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="tools">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">10</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="git-pull-request" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">DevOps</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">GitHub</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Repositories, GitHub Actions, pull requests & CI/CD workflows.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 12. VS Code -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="tools">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">12</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="laptop" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">IDE</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">VS Code</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">PHP Intelephense, Laravel extensions, debugging & snippets.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- 14. REST APIs -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">14</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="cpu" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Integration</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">RESTful APIs</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">JSON APIs, rate limiting, Sanctum auth & integrations.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 16. TypeScript -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="design">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">16</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="file-code" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Learning</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">TypeScript</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Static typing, interface contracts & frontend stability.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Learning</span>
                                </div>
                            </div>
                        </div>

                        <!-- 18. Postman -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" data-category="tools">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">18</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="send" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Testing</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Postman</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Request collections, schema verification & endpoint testing.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- DUPLICATE SET 2 FOR SEAMLESS INFINITE LOOP -->
                        <!-- 2. Livewire (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="backend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">02</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="zap" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Full-Stack</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Livewire 3</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Real-time reactive frontend components in PHP & Blade.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Tailwind CSS (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="frontend">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">04</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="palette" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Styling</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">Tailwind CSS</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Rapid responsive styling, dark modes, animations & tokens.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Expert</span>
                                </div>
                            </div>
                        </div>

                        <!-- 6. MySQL (dup) -->
                        <div class="skill-item flex-none w-[200px] sm:w-[220px] md:w-[230px] bg-[#141418] border-2 border-[#E50914]/80 hover:border-[#E50914] rounded-2xl overflow-hidden shadow-lg shadow-black/40 flex flex-col justify-between cursor-pointer" aria-hidden="true" data-category="database">
                            <div class="w-full bg-[#E50914] py-1.5 flex items-center justify-center relative shadow-sm">
                                <div class="w-2.5 h-2.5 rounded-full bg-white shadow-inner"></div>
                            </div>
                            <div class="p-3.5 sm:p-4 flex flex-col justify-between flex-1 bg-gradient-to-b from-[#18181d] to-[#121215]">
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-serif italic text-xs font-bold text-white/40">06</span>
                                        <div class="flex items-center gap-1.5">
                                            <i data-lucide="database" class="w-3.5 h-3.5 text-[#E50914]"></i>
                                            <span class="px-2 py-0.5 rounded-full bg-[#E50914]/15 text-red-300 text-[9px] font-mono font-bold uppercase tracking-wider border border-[#E50914]/30">Database</span>
                                        </div>
                                    </div>
                                    <h3 class="text-sm sm:text-base font-extrabold text-white mb-1 group-hover:text-red-400 transition-colors">MySQL</h3>
                                    <p class="text-[11px] text-gray-400 leading-snug line-clamp-2">Schema design, query optimization, indexing & migrations.</p>
                                </div>
                                <div class="pt-2 mt-2.5 border-t border-white/10 flex items-center justify-between text-[10px] font-mono text-gray-400">
                                    <span>Proficiency</span>
                                    <span class="text-red-400 font-bold">Advanced</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== 7. INTERACTIVE 3D GLASS SHOWCASE & HORIZONTAL DECK (PROJECTS) ==================== -->
    <section id="projects" class="relative bg-[#0A0A0A] text-white py-28 px-4 sm:px-6 md:px-12 lg:px-20 border-t border-white/5 overflow-hidden">
        
        <!-- Giant Screen-Filling Backdrop Typography (Same as Contact Section) -->
        <h2 id="projects-bg-text" class="text-[21vw] font-black leading-none tracking-tighter text-white select-none pointer-events-none absolute inset-0 flex items-center justify-center z-0 uppercase opacity-95 transform-gpu">
            PROJECTS
        </h2>

        <!-- Ambient Red Backdrop Glow Orb -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full relative z-10 flex flex-col">
            
            <!-- Section Header & Navigation Row -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-12">
                <div class="flex flex-col items-start text-left">
                    <!-- Section Pill Header -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-4">
                        <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                        <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                            ✦ FEATURED WORK & CLIENT BUILDS
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        Featured <span class="text-red-600">Projects</span>
                    </h2>
                    <p class="text-gray-400 text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed mt-2">
                        Explore real-world business systems, client platforms, and active web applications built with Laravel, Livewire, and modern architectures.
                    </p>
                </div>

                <!-- Horizontal Navigation Scroll Arrows -->
                <div class="flex items-center gap-3 self-start md:self-end">
                    <button id="projects-prev-btn" aria-label="Scroll projects left" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                        <i data-lucide="chevron-left" class="w-6 h-6 group-hover:-translate-x-0.5 transition-transform"></i>
                    </button>
                    <button id="projects-next-btn" aria-label="Scroll projects right" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                        <i data-lucide="chevron-right" class="w-6 h-6 group-hover:translate-x-0.5 transition-transform"></i>
                    </button>
                </div>
            </div>

            <!-- Scrollable Track Container with Side Gradient Shadows -->
            <div class="relative w-full">
                <!-- Left Gradient Shadow Blend Overlay -->
                <div id="projects-fade-left" class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-[#0A0A0A] via-[#0A0A0A]/80 to-transparent z-20 opacity-0 transition-opacity duration-300"></div>

                <!-- Right Gradient Shadow Blend Overlay -->
                <div id="projects-fade-right" class="pointer-events-none absolute right-0 top-0 bottom-0 w-20 sm:w-36 bg-gradient-to-l from-[#0A0A0A] via-[#0A0A0A]/90 to-transparent z-20 transition-opacity duration-300 flex items-center justify-end pr-2 sm:pr-4">
                    <div class="w-8 h-8 rounded-full bg-red-600/20 border border-red-600/40 flex items-center justify-center text-white/80 animate-pulse hidden sm:flex shadow-lg">
                        <i data-lucide="chevron-right" class="w-4 h-4 text-white"></i>
                    </div>
                </div>

                <!-- Horizontal Scrollable Project Deck Track -->
                <div id="projects-track" class="flex gap-6 overflow-x-auto pb-10 pt-2 scrollbar-none snap-x snap-mandatory scroll-smooth cursor-grab active:cursor-grabbing px-1 items-stretch">
                    
                    <!-- CARD 01: JR Marketing POS System -->
                    <div class="project-showcase-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#141414] border border-red-600/30 hover:border-red-500 rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Index Tag -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">01 / BUSINESS MANAGEMENT & POS</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[10px] font-mono font-bold uppercase flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    Deployed & Active
                                </span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                                JR Marketing POS System
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                                Fully developed, deployed to cloud, and actively used by the client for daily business operations, inventory tracking, sales transactions, automated POS invoicing, and revenue reporting.
                            </p>
                        </div>

                        <div>
                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Laravel 12</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Livewire</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">MySQL</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                            </div>

                            <!-- CTA Action Button -->
                            <a href="#contact" class="magnetic-btn inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/30 hover:scale-[1.02] transition-all duration-300">
                                <span>Explore Details</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CARD 02: HHMA Sri Lanka Website -->
                    <div class="project-showcase-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#141414] border border-red-600/30 hover:border-red-500 rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Index Tag -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">02 / NON-PROFIT & COMMUNITY</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[10px] font-mono font-bold uppercase flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                    Completed & Live
                                </span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                                HHMA Sri Lanka Official Website
                            </h3>

                            <p class="text-gray-300 text-sm leading-relaxed mb-6 font-normal">
                                A completed, live responsive organization portal built to showcase HHMA Sri Lanka's community initiatives, event feeds, donation workflows, and mobile-optimized user experience.
                            </p>
                        </div>

                        <div>
                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Laravel</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Livewire</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">JavaScript</span>
                            </div>

                            <!-- CTA Action Button -->
                            <a href="#contact" class="magnetic-btn inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/40 hover:scale-[1.02] transition-all duration-300">
                                <span>Explore Details</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CARD 03: Fruit Hub Restaurant POS System (NEW) -->
                    <div class="project-showcase-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#141414] border border-red-600/30 hover:border-red-500 rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Index Tag -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">03 / RESTAURANT & POS SYSTEM</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/40 text-[10px] font-mono font-bold uppercase flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
                                    In Development
                                </span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                                Fruit Hub Restaurant POS System
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                                A specialized restaurant point-of-sale and kitchen order system for Fruit Hub, managing dynamic fruit menus, table / takeaway billing, ingredients stock tracking, and daily cash flow reports.
                            </p>
                        </div>

                        <div>
                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Laravel 12</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Livewire</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">MySQL</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                            </div>

                            <!-- CTA Action Button -->
                            <a href="#contact" class="magnetic-btn inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/30 hover:scale-[1.02] transition-all duration-300">
                                <span>Explore Details</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CARD 04: Indoor Arena Sports Booking System (NEW) -->
                    <div class="project-showcase-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#141414] border border-red-600/30 hover:border-red-500 rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Index Tag -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">04 / SPORTS ARENA & BOOKINGS</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/40 text-[10px] font-mono font-bold uppercase flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-400 animate-pulse"></span>
                                    In Development
                                </span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                                Indoor Sports Arena Booking System
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                                An interactive court and game slot reservation platform for an indoor sports arena, featuring real-time time slot scheduling, player reservations, advance deposits, and admin calendar control.
                            </p>
                        </div>

                        <div>
                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Laravel 12</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Livewire</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">MySQL</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                            </div>

                            <!-- CTA Action Button -->
                            <a href="#contact" class="magnetic-btn inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/30 hover:scale-[1.02] transition-all duration-300">
                                <span>Explore Details</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- CARD 05: Food Delivery Web Platform -->
                    <div class="project-showcase-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#141414] border border-red-600/30 hover:border-red-500 rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Index Tag -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">05 / WEB APPLICATION PLATFORM</span>
                                <span class="px-2.5 py-0.5 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/40 text-[10px] font-mono font-bold uppercase flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                                    Planning Phase
                                </span>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                                Food Delivery Web Platform
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                                A client-requested modern food ordering and delivery system currently in system architecture planning, database schema modeling, and requirement discovery phase.
                            </p>
                        </div>

                        <div>
                            <!-- Tech Chips -->
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Laravel</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">MySQL</span>
                                <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">REST APIs</span>
                            </div>

                            <!-- CTA Action Button -->
                            <a href="#contact" class="magnetic-btn inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/30 hover:scale-[1.02] transition-all duration-300">
                                <span>Explore Details</span>
                                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ==================== 8. CLIENT REVIEWS & RATINGS (TESTIMONIALS DECK) ==================== -->
    <section id="testimonials" class="relative bg-[#0F0F10] text-white py-28 px-4 sm:px-6 md:px-12 lg:px-20 border-t border-white/5 overflow-hidden">
        
        <!-- Giant Screen-Filling Backdrop Typography (Same as Contact Section) -->
        <h2 id="testimonials-bg-text" class="text-[21vw] font-black leading-none tracking-tighter text-white select-none pointer-events-none absolute inset-0 flex items-center justify-center z-0 uppercase opacity-95 transform-gpu">
            REVIEWS
        </h2>

        <!-- Ambient Red Glows -->
        <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[550px] h-[550px] bg-[#E50914]/10 rounded-full blur-[150px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full relative z-10 flex flex-col">
            
            <!-- Section Header & Navigation Row -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-12">
                <div class="flex flex-col items-start text-left">
                    <!-- Pill Tag -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#E50914] animate-pulse"></span>
                        <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                            ✦ CLIENT FEEDBACK & RATINGS
                        </span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        Client Satisfaction & <span class="text-[#E50914]">Reviews</span>
                    </h2>
                    <p class="text-gray-400 text-sm sm:text-base md:text-lg max-w-2xl leading-relaxed mt-2">
                        Real feedback, 5-star ratings, and measurable business results delivered for completed client systems and live digital platforms.
                    </p>
                </div>

                <!-- Trust Metrics & Horizontal Navigation Scroll Arrows -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 self-start lg:self-end">
                    <!-- Trust Summary Pill -->
                    <div class="flex items-center gap-3 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-xs font-mono text-gray-300">
                        <div class="flex items-center text-amber-400">
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-amber-400 text-amber-400"></i>
                        </div>
                        <span class="font-bold text-white">5.0 / 5.0</span>
                        <span class="text-gray-500">•</span>
                        <span class="text-emerald-400 font-bold">100% Satisfaction</span>
                    </div>

                    <!-- Scroll Arrows -->
                    <div class="flex items-center gap-3">
                        <button id="testimonials-prev-btn" aria-label="Scroll reviews left" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                            <i data-lucide="chevron-left" class="w-6 h-6 group-hover:-translate-x-0.5 transition-transform"></i>
                        </button>
                        <button id="testimonials-next-btn" aria-label="Scroll reviews right" class="magnetic-btn w-12 h-12 rounded-full bg-white/10 border border-white/20 hover:bg-[#E50914] hover:border-[#E50914] flex items-center justify-center text-white transition-all duration-300 cursor-pointer group shadow-lg">
                            <i data-lucide="chevron-right" class="w-6 h-6 group-hover:translate-x-0.5 transition-transform"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Scrollable Track Container with Side Gradient Shadows -->
            <div class="relative w-full">
                <!-- Left Gradient Shadow Blend Overlay -->
                <div id="testimonials-fade-left" class="pointer-events-none absolute left-0 top-0 bottom-0 w-16 sm:w-28 bg-gradient-to-r from-[#0F0F10] via-[#0F0F10]/80 to-transparent z-20 opacity-0 transition-opacity duration-300"></div>

                <!-- Right Gradient Shadow Blend Overlay -->
                <div id="testimonials-fade-right" class="pointer-events-none absolute right-0 top-0 bottom-0 w-20 sm:w-36 bg-gradient-to-l from-[#0F0F10] via-[#0F0F10]/90 to-transparent z-20 transition-opacity duration-300 flex items-center justify-end pr-2 sm:pr-4">
                    <div class="w-8 h-8 rounded-full bg-[#E50914]/20 border border-[#E50914]/40 flex items-center justify-center text-white/80 animate-pulse hidden sm:flex shadow-lg">
                        <i data-lucide="chevron-right" class="w-4 h-4 text-white"></i>
                    </div>
                </div>

                <!-- Horizontal Scrollable Testimonial Deck Track -->
                <div id="testimonials-track" class="flex gap-6 overflow-x-auto pb-10 pt-2 scrollbar-none snap-x snap-mandatory scroll-smooth cursor-grab active:cursor-grabbing px-1 items-stretch">
                    
                    <!-- REVIEW 01: JR Marketing -->
                    <div class="testimonial-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#121215]/95 backdrop-blur-2xl border border-red-600/40 hover:border-[#E50914] rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Rating & Project Badge -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <div class="flex items-center gap-1 text-amber-400">
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-red-600/15 text-red-400 border border-red-500/30 text-[10px] font-mono font-bold uppercase">
                                    POS & Stock System
                                </span>
                            </div>

                            <!-- Quote -->
                            <p class="text-white/90 text-sm sm:text-base leading-relaxed font-normal mb-6 italic">
                                "Ayshan transformed our entire retail & stock management workflow. The custom Laravel POS system is lightning-fast, zero downtime, and generates automated invoices seamlessly. Our daily billing time dropped by more than 65%!"
                            </p>

                            <!-- Measurable Outcome Pill -->
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs font-mono font-bold mb-6">
                                <i data-lucide="zap" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>+65% Faster Billing Speed • Live in Production</span>
                            </div>
                        </div>

                        <!-- Client Profile -->
                        <div class="pt-5 border-t border-white/10 flex items-center gap-3.5">
                            <div class="w-12 h-12 rounded-full bg-[#E50914]/20 border border-[#E50914]/50 flex items-center justify-center font-bold text-white font-mono text-sm shrink-0 shadow-md">
                                JR
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-white text-sm sm:text-base group-hover:text-red-400 transition-colors">J. Rathnayake</h4>
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
                                </div>
                                <p class="text-xs text-gray-400 font-mono">Managing Director • JR Marketing, Sri Lanka</p>
                            </div>
                        </div>
                    </div>

                    <!-- REVIEW 02: HHMA Sri Lanka -->
                    <div class="testimonial-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#121215]/95 backdrop-blur-2xl border border-red-600/40 hover:border-[#E50914] rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Rating & Project Badge -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <div class="flex items-center gap-1 text-amber-400">
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-red-600/20 text-red-300 border border-red-500/40 text-[10px] font-mono font-bold uppercase">
                                    Official Organization Portal
                                </span>
                            </div>

                            <!-- Quote -->
                            <p class="text-white/90 text-sm sm:text-base leading-relaxed font-normal mb-6 italic">
                                "Working with Ayshan and CodeZorex was a seamless experience. He delivered a stunning, mobile-responsive organization platform that perfectly presents our community programs and events. His dedication and speed are commendable."
                            </p>

                            <!-- Measurable Outcome Pill -->
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs font-mono font-bold mb-6">
                                <i data-lucide="globe" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>100% Mobile Responsive • Live Community Platform</span>
                            </div>
                        </div>

                        <!-- Client Profile -->
                        <div class="pt-5 border-t border-white/10 flex items-center gap-3.5">
                            <div class="w-12 h-12 rounded-full bg-red-600 border border-white/30 flex items-center justify-center font-bold text-white font-mono text-sm shrink-0 shadow-md">
                                HF
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-white text-sm sm:text-base group-hover:text-red-400 transition-colors">M. Farzan</h4>
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
                                </div>
                                <p class="text-xs text-gray-400 font-mono">Executive Secretary • HHMA Sri Lanka</p>
                            </div>
                        </div>
                    </div>

                    <!-- REVIEW 03: Fruit Hub Restaurant -->
                    <div class="testimonial-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#121215]/95 backdrop-blur-2xl border border-red-600/40 hover:border-[#E50914] rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Rating & Project Badge -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <div class="flex items-center gap-1 text-amber-400">
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-blue-500/15 text-blue-300 border border-blue-500/30 text-[10px] font-mono font-bold uppercase">
                                    Restaurant POS & Billing
                                </span>
                            </div>

                            <!-- Quote -->
                            <p class="text-white/90 text-sm sm:text-base leading-relaxed font-normal mb-6 italic">
                                "The architecture and rapid prototypes Ayshan designed for our restaurant POS have exceeded our expectations. The Livewire reactive menus and order tracking interface are exceptionally clean and easy for our staff to use."
                            </p>

                            <!-- Measurable Outcome Pill -->
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-blue-500/10 border border-blue-500/30 text-blue-300 text-xs font-mono font-bold mb-6">
                                <i data-lucide="cpu" class="w-3.5 h-3.5 text-blue-400"></i>
                                <span>Real-Time Order Sync • High Team Efficiency</span>
                            </div>
                        </div>

                        <!-- Client Profile -->
                        <div class="pt-5 border-t border-white/10 flex items-center gap-3.5">
                            <div class="w-12 h-12 rounded-full bg-[#E50914]/20 border border-[#E50914]/50 flex items-center justify-center font-bold text-white font-mono text-sm shrink-0 shadow-md">
                                FH
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-white text-sm sm:text-base group-hover:text-red-400 transition-colors">S. Nazeer</h4>
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
                                </div>
                                <p class="text-xs text-gray-400 font-mono">Operations Lead • Fruit Hub Restaurant</p>
                            </div>
                        </div>
                    </div>

                    <!-- REVIEW 04: Indoor Sports Arena -->
                    <div class="testimonial-card flex-none w-[320px] sm:w-[380px] md:w-[420px] bg-[#121215]/95 backdrop-blur-2xl border border-red-600/40 hover:border-[#E50914] rounded-3xl p-7 sm:p-8 relative group transition-all duration-500 shadow-2xl hover:shadow-2xl hover:shadow-red-600/30 hover:-translate-y-2 flex flex-col justify-between cursor-pointer snap-start">
                        <div>
                            <!-- Top Rating & Project Badge -->
                            <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/20">
                                <div class="flex items-center gap-1 text-amber-400">
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-blue-500/15 text-blue-300 border border-blue-500/30 text-[10px] font-mono font-bold uppercase">
                                    Court & Slot Booking
                                </span>
                            </div>

                            <!-- Quote -->
                            <p class="text-white/90 text-sm sm:text-base leading-relaxed font-normal mb-6 italic">
                                "Ayshan's problem-solving skills in building our court scheduling and player reservation workflow are top-notch. Clear communication, clean code architecture, and high attention to detail throughout the development."
                            </p>

                            <!-- Measurable Outcome Pill -->
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-blue-500/10 border border-blue-500/30 text-blue-300 text-xs font-mono font-bold mb-6">
                                <i data-lucide="calendar-check" class="w-3.5 h-3.5 text-blue-400"></i>
                                <span>Zero Booking Conflicts • Real-Time Calendar Sync</span>
                            </div>
                        </div>

                        <!-- Client Profile -->
                        <div class="pt-5 border-t border-white/10 flex items-center gap-3.5">
                            <div class="w-12 h-12 rounded-full bg-[#E50914]/20 border border-[#E50914]/50 flex items-center justify-center font-bold text-white font-mono text-sm shrink-0 shadow-md">
                                IA
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-1.5">
                                    <h4 class="font-bold text-white text-sm sm:text-base group-hover:text-red-400 transition-colors">K. Thilakaratne</h4>
                                    <i data-lucide="check-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
                                </div>
                                <p class="text-xs text-gray-400 font-mono">Arena Director • Indoor Sports Venue</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ==================== 8. GIANT TYPOGRAPHY BACKDROP & FLOATING RED FORM (CONTACT) ==================== -->
    <section id="contact" class="relative min-h-screen w-full bg-black text-white flex items-center justify-center py-20 px-4 sm:px-6 md:px-12 overflow-hidden border-t border-white/10">
        
        <!-- Giant Screen-Filling Backdrop Typography -->
        <h2 id="contact-bg-text" class="text-[23vw] font-black leading-none tracking-tighter text-white select-none pointer-events-none absolute inset-0 flex items-center justify-center z-0 uppercase opacity-95 transform-gpu">
            CONTACT
        </h2>

        <!-- Floating Translucent Glass Red Form Overlay Card -->
        <div id="contact-card" class="relative z-10 max-w-4xl w-full mx-auto bg-red-600/25 backdrop-blur-[2px] rounded-3xl p-6 sm:p-8 md:p-12 shadow-2xl shadow-red-950/50 border border-red-500/40 text-white transform-gpu my-12 transition-all duration-300">
            
            <!-- Toast Feedback Banner -->
            <div id="form-feedback" class="hidden mb-6"></div>

            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
                <div class="text-xs font-mono font-bold tracking-widest text-white/90 uppercase flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                    <span>REACH US • CODEZOREX</span>
                </div>
                <div class="text-xs font-mono text-white/80">
                    <span>Direct: </span><a href="mailto:ayshanmusfik@gmail.com" class="underline hover:text-white">ayshanmusfik@gmail.com</a>
                </div>
            </div>

            <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="flex flex-col gap-6">
                @csrf

                <!-- 2-Column Responsive Layout Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
                    
                    <!-- Left Column Inputs (6 Cols) -->
                    <div class="lg:col-span-6 flex flex-col gap-4">
                        
                        <!-- First Name -->
                        <div class="flex flex-col gap-1">
                            <label for="first_name" class="text-xs font-mono text-white/80 uppercase">First Name *</label>
                            <input type="text" id="first_name" name="first_name" placeholder="First Name" class="w-full bg-white/10 border border-white/20 focus:border-white rounded-xl px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:ring-1 focus:ring-white transition-all text-sm">
                            <span id="error-first_name" class="error-text text-xs text-white/90 font-mono"></span>
                        </div>

                        <!-- Last Name -->
                        <div class="flex flex-col gap-1">
                            <label for="last_name" class="text-xs font-mono text-white/80 uppercase">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="w-full bg-white/10 border border-white/20 focus:border-white rounded-xl px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:ring-1 focus:ring-white transition-all text-sm">
                            <span id="error-last_name" class="error-text text-xs text-white/90 font-mono"></span>
                        </div>

                        <!-- Email Address -->
                        <div class="flex flex-col gap-1">
                            <label for="email" class="text-xs font-mono text-white/80 uppercase">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="Email Address" class="w-full bg-white/10 border border-white/20 focus:border-white rounded-xl px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:ring-1 focus:ring-white transition-all text-sm">
                            <span id="error-email" class="error-text text-xs text-white/90 font-mono"></span>
                        </div>

                    </div>

                    <!-- Right Column Message Textarea (6 Cols) -->
                    <div class="lg:col-span-6 flex flex-col gap-1 h-full">
                        <label for="message" class="text-xs font-mono text-white/80 uppercase">Your Message *</label>
                        <textarea id="message" name="message" rows="7" placeholder="Tell me about your project, business system, or idea..." class="w-full h-full min-h-[160px] bg-white/10 border border-white/20 focus:border-white rounded-xl px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:ring-1 focus:ring-white transition-all text-sm resize-none"></textarea>
                        <span id="error-message" class="error-text text-xs text-white/90 font-mono"></span>
                    </div>

                </div>

                <!-- Bottom Row: Agreement Checkbox & Action Button -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-4 border-t border-white/15">
                    
                    <label class="flex items-center gap-3 cursor-pointer group">
                        <input type="checkbox" id="agreement" name="agreement" class="w-4 h-4 rounded accent-black bg-white/10 border-white/30 focus:ring-0">
                        <span class="text-xs text-white/80 group-hover:text-white transition-colors">
                            I give permission to contact me at this email address.
                        </span>
                    </label>

                    <button type="submit" id="contact-submit-btn" class="magnetic-btn inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full bg-white text-black font-bold text-sm hover:bg-neutral-100 shadow-xl transition-all duration-300 group cursor-pointer disabled:opacity-50 self-end sm:self-auto">
                        <span id="submit-spinner" class="hidden animate-spin w-4 h-4 border-2 border-black border-t-transparent rounded-full"></span>
                        <span id="submit-btn-text">Send Message</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </button>

                </div>

            </form>

        </div>
    </section>

    <!-- ==================== 9. MINIMAL FOOTER MARQUEE & COPYRIGHT ==================== -->
    <footer class="bg-black text-white pt-12 pb-8 overflow-hidden border-t border-white/10">
        
        <!-- Horizontal Infinite Marquee Ticker -->
        <div class="w-full overflow-hidden border-b border-white/10 pb-8 mb-8">
            <div class="animate-marquee flex items-center gap-8 whitespace-nowrap text-2xl md:text-4xl font-extrabold text-white/40 font-mono">
                <span>AYSHAN MUSFIK</span> <span class="text-[#E50914]">•</span>
                <span>FOUNDER @ CODEZOREX</span> <span class="text-[#E50914]">•</span>
                <span>FULL STACK DEVELOPER</span> <span class="text-[#E50914]">•</span>
                <span>LARAVEL & LIVEWIRE</span> <span class="text-[#E50914]">•</span>
                <span>BUSINESS SYSTEMS</span> <span class="text-[#E50914]">•</span>
                <span>SRI LANKA</span> <span class="text-[#E50914]">•</span>
                <span>AYSHAN MUSFIK</span> <span class="text-[#E50914]">•</span>
                <span>FOUNDER @ CODEZOREX</span> <span class="text-[#E50914]">•</span>
                <span>FULL STACK DEVELOPER</span> <span class="text-[#E50914]">•</span>
                <span>LARAVEL & LIVEWIRE</span> <span class="text-[#E50914]">•</span>
            </div>
        </div>

        <!-- Copyright Bottom Bar & Socials -->
        <div class="max-w-[1700px] mx-auto px-6 md:px-12 lg:px-20 flex flex-col md:flex-row items-center justify-between gap-6 text-xs font-mono text-gray-400">
            <div>
                <span>© 2026 AYSHAN MUSFIK | CODEZOREX. All rights reserved.</span>
            </div>

            <!-- Social Links from old portfolio -->
            <div class="flex items-center gap-6 flex-wrap justify-center">
                <a href="https://github.com/AyshanMusfik" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">GitHub</a>
                <a href="https://linkedin.com/in/ayshan-musfik-876b78296" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">LinkedIn</a>
                <a href="https://wa.me/94759992494" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">WhatsApp</a>
                <a href="mailto:ayshanmusfik@gmail.com" class="hover:text-white transition-colors">Email</a>
                <a href="/assets/docs/Ayshan_CV.pdf" download class="hover:text-red-400 text-red-500 font-bold transition-colors">CV ↓</a>
                <a href="#home" class="hover:text-white transition-colors">Top ↑</a>
            </div>
        </div>
    </footer>

</body>
</html>
