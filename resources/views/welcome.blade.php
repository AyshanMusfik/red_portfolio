<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AYSHAN | Creative Full Stack Architect</title>

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

            <!-- Center Nav Links -->
            <div class="hidden md:flex items-center gap-2 text-sm font-semibold text-white">
                <a href="#home" data-section="home" class="nav-link px-4 py-1.5 rounded-full bg-white/20 text-white shadow-sm transition-all duration-300">Home</a>
                <a href="#about" data-section="about" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">About</a>
                <a href="#process" data-section="process" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Process</a>
                <a href="#skills" data-section="skills" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Tech Stack</a>
                <a href="#projects" data-section="projects" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Projects</a>
                <a href="#contact" data-section="contact" class="nav-link px-4 py-1.5 rounded-full text-white/80 hover:text-white hover:bg-white/15 transition-all duration-300">Contact</a>
            </div>

            <!-- Right Hire Me Pill Button -->
            <a href="#contact" class="magnetic-btn bg-white text-black hover:bg-neutral-100 font-bold px-5 py-2 sm:px-6 sm:py-2.5 rounded-full text-xs sm:text-sm tracking-wide shadow-md hover:scale-105 transition-all duration-300 flex items-center justify-center">
                <span class="text-black font-bold">Hire Me</span>
            </a>
        </nav>
    </header>

    <!-- ==================== 3. RESPONSIVE FULL-BLEED HERO CANVAS ==================== -->
    <section id="home" class="relative min-h-screen w-full flex items-end justify-between overflow-hidden bg-[#E50914] pt-24 sm:pt-28 pb-0 px-0 transition-all duration-300 origin-top">
        
        <!-- MAIN CONTAINER -->
        <div class="relative z-10 w-full max-w-[1700px] mx-auto px-4 sm:px-6 lg:px-16 min-h-[calc(100vh-5rem)] sm:min-h-[calc(100vh-6rem)] flex flex-col lg:flex-row items-end justify-between pointer-events-none">
            
            <!-- LEFT COLUMN: Typography & Action CTAs -->
            <div class="w-full lg:w-5/12 xl:w-5/12 flex flex-col items-start text-left pb-6 md:pb-12 lg:pb-24 z-20 pointer-events-auto">
                
                <h1 class="hero-text-elem text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-white tracking-tight leading-[1.1] md:leading-[1.05] mb-1">
                    Hi, I'm a
                </h1>

                <h2 class="hero-text-elem text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-black text-stroke-white tracking-tight leading-[1.1] md:leading-[1.05] mb-3 md:mb-6">
                    Full Stack Developer
                </h2>

                <p class="hero-text-elem text-white/90 text-xs sm:text-sm md:text-xl max-w-[280px] sm:max-w-md md:max-w-lg font-medium leading-relaxed mb-4 md:mb-8">
                    I build fast, scalable and modern web applications using Laravel, React, Node.js and Tailwind CSS.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-row items-center gap-2.5 sm:gap-4">
                    <!-- CTA 1: View My Work -->
                    <a href="#projects" class="hero-cta-elem magnetic-btn inline-flex items-center justify-center px-4 py-2 md:px-9 md:py-4 rounded-full bg-white text-black hover:bg-gray-100 font-bold text-xs md:text-base tracking-wide shadow-xl hover:scale-105 transition-all duration-300">
                        <span>View My Work</span>
                    </a>

                    <!-- CTA 2: Contact Me -->
                    <a href="#contact" class="hero-cta-elem magnetic-btn inline-flex items-center justify-center px-4 py-2 md:px-9 md:py-4 rounded-full bg-black/50 border border-white/30 hover:bg-black/70 text-white font-bold text-xs md:text-base tracking-wide transition-all duration-300">
                        <span>Contact Me</span>
                    </a>
                </div>

            </div>

            <!-- RIGHT COLUMN / FULL-BLEED MEDIA CONTAINER -->
            <div class="hero-media-container media-mask-fade absolute bottom-0 right-0 w-full md:w-[90vw] lg:w-[75vw] xl:w-[70vw] h-[48vh] sm:h-[55vh] md:h-[78vh] lg:h-[90vh] xl:h-[95vh] max-h-[980px] flex items-end justify-end pointer-events-none z-0">
                
                <!-- LAYER A (Default Visible Static Image) -->
                <img id="hero-img" 
                     src="{{ asset('assets/hero-avatar.jpg') }}" 
                     class="w-full h-full object-cover object-bottom pointer-events-auto transition-opacity duration-500 z-10" 
                     alt="Ayshan Musfik Avatar" 
                     onerror="this.src='{{ asset('assets/hero-avatar.png') }}'">

                <!-- LAYER B (Default Hidden Video Element) -->
                <video id="hero-video" 
                       src="{{ asset('assets/intro-video.mp4') }}" 
                       playsinline 
                       class="w-full h-full object-cover object-bottom absolute inset-0 opacity-0 pointer-events-none transition-opacity duration-500 z-10">
                    Your browser does not support HTML5 video.
                </video>

            </div>

            <!-- FLOATING "PLAY REEL" TRIGGER BUTTON -->
            <div class="play-reel-trigger absolute bottom-4 sm:bottom-8 md:bottom-10 right-3 sm:right-8 lg:right-16 z-30 pointer-events-auto scale-75 sm:scale-90 md:scale-100 origin-bottom-right">
                <button id="play-reel-btn" class="magnetic-btn group flex flex-col items-center gap-2 cursor-pointer">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#E50914] border-2 border-white/50 shadow-2xl flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                        <i data-lucide="play" id="play-icon" class="w-8 h-8 fill-white translate-x-0.5"></i>
                        <i data-lucide="pause" id="pause-icon" class="w-8 h-8 fill-white hidden"></i>
                    </div>
                    <span id="play-reel-text" class="text-xs font-mono font-bold tracking-widest text-white uppercase drop-shadow-md">
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
                    <img src="{{ asset('assets/hero-avatar.jpg') }}" 
                         alt="Ayshan Musfik" 
                         class="w-full h-full object-cover object-top"
                         onerror="this.src='{{ asset('assets/hero-avatar.png') }}'">
                </div>

            </div>

            <!-- RIGHT COLUMN: Minimalist Editorial Content (7 Cols) -->
            <div class="lg:col-span-7 flex flex-col items-start pt-4 text-white">
                
                <h2 class="text-4xl sm:text-6xl lg:text-7xl font-black text-white tracking-tight leading-tight mb-8">
                    Hello!
                </h2>

                <p class="text-white text-xl sm:text-2xl md:text-3xl font-semibold leading-snug mb-8 max-w-2xl">
                    I'm <strong class="font-black text-white underline decoration-white/30 underline-offset-8">Ayshan Musfik</strong>, a passionate full-stack developer dedicated to crafting clean, functional, and highly scalable web applications.
                </p>

                <p class="text-white/90 text-base sm:text-lg md:text-xl font-normal leading-relaxed max-w-2xl">
                    I bridge the gap between creative visual UI design and bulletproof backend architectures. Specializing in Laravel 12, React, Tailwind CSS, and GSAP motion graphics to build exceptional digital experiences.
                </p>

            </div>

        </div>
    </section>

    <!-- ==================== 5. HOW WE WORK / PROCESS (CARD STACKING SECTION) ==================== -->
    <section id="process" class="relative bg-[#0B0B0C] text-white min-h-screen py-20 lg:py-0 px-6 md:px-12 lg:px-20 flex items-center overflow-hidden">
        
        <!-- Ambient Red Glows -->
        <div class="absolute top-1/3 right-10 w-[500px] h-[500px] bg-[#E50914]/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- LEFT COLUMN: Sticky Content -->
            <div class="left-sticky-col lg:col-span-5 flex flex-col items-start pt-4">
                
                <!-- Pill Tag -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#E50914]"></span>
                    <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                        How We Work
                    </span>
                </div>

                <!-- Main Bold Headline -->
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-[1.1] mb-6">
                    Let us show you how we drive your brand to <span class="text-[#E50914]">new heights</span>
                </h2>

                <!-- Description Paragraph -->
                <p class="text-gray-400 text-base md:text-lg leading-relaxed max-w-md font-normal mb-8">
                    We follow a structured, creative, and highly technical approach to turn your ideas into robust full stack applications.
                </p>

                <!-- Small Stack Counter Badge -->
                <div class="hidden lg:flex items-center gap-3 text-xs font-mono text-gray-500">
                    <span class="text-[#E50914] font-bold text-sm">04 STEPS</span>
                    <span>/</span>
                    <span>SCROLL TO UNLOCK</span>
                </div>

            </div>

            <!-- RIGHT COLUMN: 4 Stackable Red Process Cards -->
            <div class="right-stack-col lg:col-span-7 relative w-full min-h-[460px] sm:min-h-[520px] lg:min-h-[560px] flex flex-col lg:block gap-6">
                
                <!-- CARD 01 -->
                <div class="process-card lg:absolute lg:inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-8 sm:p-10 md:p-12 shadow-2xl border border-white/10 flex flex-col justify-between z-10">
                    <div class="flex items-center justify-between mb-6 border-b border-white/20 pb-4">
                        <span class="font-mono text-3xl md:text-4xl font-extrabold opacity-75">01</span>
                        <span class="px-4 py-1 rounded-full bg-black/20 text-xs font-mono font-bold tracking-widest uppercase">Phase One</span>
                    </div>
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Define</h3>
                        <p class="text-white/90 text-base md:text-lg leading-relaxed font-normal">
                            We start by understanding your goals, user requirements, and technical constraints to lay a rock-solid foundation for the project.
                        </p>
                    </div>
                </div>

                <!-- CARD 02 -->
                <div class="process-card lg:absolute lg:inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-8 sm:p-10 md:p-12 shadow-2xl border border-white/10 flex flex-col justify-between z-20">
                    <div class="flex items-center justify-between mb-6 border-b border-white/20 pb-4">
                        <span class="font-mono text-3xl md:text-4xl font-extrabold opacity-75">02</span>
                        <span class="px-4 py-1 rounded-full bg-black/20 text-xs font-mono font-bold tracking-widest uppercase">Phase Two</span>
                    </div>
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Design</h3>
                        <p class="text-white/90 text-base md:text-lg leading-relaxed font-normal">
                            Crafting clean, pixel-perfect user interfaces and wireframes that guarantee an engaging user experience and high conversion rates.
                        </p>
                    </div>
                </div>

                <!-- CARD 03 -->
                <div class="process-card lg:absolute lg:inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-8 sm:p-10 md:p-12 shadow-2xl border border-white/10 flex flex-col justify-between z-30">
                    <div class="flex items-center justify-between mb-6 border-b border-white/20 pb-4">
                        <span class="font-mono text-3xl md:text-4xl font-extrabold opacity-75">03</span>
                        <span class="px-4 py-1 rounded-full bg-black/20 text-xs font-mono font-bold tracking-widest uppercase">Phase Three</span>
                    </div>
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Build</h3>
                        <p class="text-white/90 text-base md:text-lg leading-relaxed font-normal">
                            Developing scalable frontend architectures and secure backend systems using Laravel 12, Tailwind CSS, GSAP, and modern APIs.
                        </p>
                    </div>
                </div>

                <!-- CARD 04 -->
                <div class="process-card lg:absolute lg:inset-0 w-full h-full bg-[#E50914] text-white rounded-3xl p-8 sm:p-10 md:p-12 shadow-2xl border border-white/10 flex flex-col justify-between z-40">
                    <div class="flex items-center justify-between mb-6 border-b border-white/20 pb-4">
                        <span class="font-mono text-3xl md:text-4xl font-extrabold opacity-75">04</span>
                        <span class="px-4 py-1 rounded-full bg-black/20 text-xs font-mono font-bold tracking-widest uppercase">Phase Four</span>
                    </div>
                    <div>
                        <h3 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Launch</h3>
                        <p class="text-white/90 text-base md:text-lg leading-relaxed font-normal">
                            Rigorous testing, optimization, and seamless deployment to cloud infrastructure, followed by ongoing support and feature updates.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== 6. INTERACTIVE TECH STACK SECTION ==================== -->
    <section id="skills" class="relative bg-[#111111] text-white py-24 sm:py-32 px-6 md:px-12 lg:px-20 border-t border-white/5 overflow-hidden">
        
        <div class="max-w-[1700px] mx-auto w-full flex flex-col items-center text-center">
            
            <!-- Section Pill Header -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-6">
                <span class="w-2 h-2 rounded-full bg-[#E50914]"></span>
                <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                    Technical Expertise
                </span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight mb-4">
                Powering Modern <span class="text-[#E50914]">Digital Experiences</span>
            </h2>
            <p class="text-gray-400 text-base md:text-lg max-w-2xl leading-relaxed mb-16">
                Hover over the technologies below to experience interactive 3D parallax tilt effects.
            </p>

            <!-- Tech Cards Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8 w-full">
                
                <!-- Tech 1: Laravel -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="layers" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">Laravel 12</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Backend Architecture</span>
                </div>

                <!-- Tech 2: React / Vue -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="code-2" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">React & Vue</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Frontend Frameworks</span>
                </div>

                <!-- Tech 3: Node.js -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="server" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">Node.js</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Runtime Environment</span>
                </div>

                <!-- Tech 4: Tailwind CSS -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="palette" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">Tailwind CSS</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Design Systems</span>
                </div>

                <!-- Tech 5: GSAP -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="sparkles" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">GSAP 3</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Motion & Animations</span>
                </div>

                <!-- Tech 6: MySQL -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="database" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">MySQL</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Relational Database</span>
                </div>

                <!-- Tech 7: Docker -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="container" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">Docker</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">Containerization</span>
                </div>

                <!-- Tech 8: REST APIs -->
                <div class="tech-card bg-white/5 border border-white/10 hover:border-[#E50914]/50 rounded-2xl p-6 sm:p-8 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:shadow-[#E50914]/20 group cursor-pointer">
                    <div class="w-14 h-14 rounded-2xl bg-[#E50914]/10 border border-[#E50914]/30 flex items-center justify-center mb-4 group-hover:scale-110 group-hover:bg-[#E50914] transition-all duration-300">
                        <i data-lucide="cpu" class="w-7 h-7 text-[#E50914] group-hover:text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-1">REST & APIs</h3>
                    <span class="text-xs font-mono text-gray-400 uppercase tracking-wider">System Integration</span>
                </div>

            </div>

        </div>
    </section>

    <!-- ==================== 7. INTERACTIVE 3D GLASS SHOWCASE & PARALLAX DECK (PROJECTS) ==================== -->
    <section id="projects" class="relative bg-[#0A0A0A] text-white py-28 px-6 lg:px-20 border-t border-white/5 overflow-hidden">
        
        <!-- Ambient Red Backdrop Glow Orb -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-600/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-[1700px] mx-auto w-full relative z-10 flex flex-col items-center">
            
            <!-- Section Pill Header -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md mb-4">
                <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                <span class="text-xs font-mono tracking-widest text-white uppercase font-bold">
                    ✦ FEATURED PRODUCTIONS
                </span>
            </div>

            <!-- Big Bold Title -->
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight text-center max-w-4xl leading-tight mb-4">
                Crafting Digital <span class="text-red-600">Masterpieces</span>
            </h2>

            <!-- Subtitle -->
            <p class="text-gray-400 text-base md:text-lg max-w-2xl text-center leading-relaxed font-normal mb-16">
                Engineered for speed, built for scale. Explore selected full-stack web applications and interactive motion platforms.
            </p>

            <!-- 3-Column Asymmetric Showcase Deck Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 w-full relative z-10 items-stretch">
                
                <!-- CARD 01 (Core Product) -->
                <div class="project-showcase-card bg-[#141414] border border-white/10 hover:border-red-600/60 rounded-3xl p-8 relative group transition-all duration-500 shadow-2xl flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Top Index Tag -->
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-white/10">
                            <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">01 / ERP & POS PLATFORM</span>
                            <span class="w-3 h-3 rounded-full bg-red-600/30 border border-red-500 group-hover:scale-125 transition-transform"></span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                            E-Commerce & POS Automation Platform
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                            High-throughput inventory telemetry, multi-tenant synchronization, real-time analytics, and automated invoicing system built for scale.
                        </p>
                    </div>

                    <div>
                        <!-- Tech Chips -->
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Laravel 12</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Tailwind CSS</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">MySQL</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">REST API</span>
                        </div>

                        <!-- CTA Action Button -->
                        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-bold text-white group-hover:text-red-500 transition-colors">
                            <span>Explore Project</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- CARD 02 (Featured SaaS - Elevated Accent Card) -->
                <div class="project-showcase-card lg:-translate-y-6 bg-gradient-to-b from-neutral-900 to-[#121212] border-2 border-red-600 rounded-3xl p-8 relative group transition-all duration-500 shadow-2xl shadow-red-600/20 flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Top Index Tag -->
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-red-600/30">
                            <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">02 / MOTION DASHBOARD (FEATURED)</span>
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                            </span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                            Next-Gen SaaS Telemetry System
                        </h3>

                        <p class="text-gray-300 text-sm leading-relaxed mb-6 font-normal">
                            Interactive data dashboard with fluid GSAP micro-interactions, responsive telemetry charts, and sub-second rendering.
                        </p>
                    </div>

                    <div>
                        <!-- Tech Chips -->
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">React</span>
                            <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">GSAP 3</span>
                            <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Node.js</span>
                            <span class="px-3 py-1 rounded-full bg-red-600/10 text-xs font-mono text-red-400 font-semibold border border-red-600/30">Tailwind CSS</span>
                        </div>

                        <!-- CTA Action Button -->
                        <a href="#contact" class="inline-flex items-center justify-center gap-2 w-full py-3 rounded-full bg-red-600 hover:bg-red-700 text-white font-bold text-sm shadow-lg shadow-red-600/40 transition-all duration-300">
                            <span>Explore Project</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- CARD 03 (Creative Web App) -->
                <div class="project-showcase-card bg-[#141414] border border-white/10 hover:border-red-600/60 rounded-3xl p-8 relative group transition-all duration-500 shadow-2xl flex flex-col justify-between cursor-pointer">
                    <div>
                        <!-- Top Index Tag -->
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-white/10">
                            <span class="text-xs font-mono font-bold text-red-500 uppercase tracking-wider">03 / FULL STACK SUITE</span>
                            <span class="w-3 h-3 rounded-full bg-red-600/30 border border-red-500 group-hover:scale-125 transition-transform"></span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4 group-hover:text-red-500 transition-colors">
                            Modern Cloud Architecture & Web Suite
                        </h3>

                        <p class="text-gray-400 text-sm leading-relaxed mb-6 font-normal">
                            Scalable web infrastructure featuring clean MVC design, end-to-end security, Docker containerization, and lightning-fast SEO optimization.
                        </p>
                    </div>

                    <div>
                        <!-- Tech Chips -->
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Laravel</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Blade</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Docker</span>
                            <span class="px-3 py-1 rounded-full bg-white/5 text-xs font-mono text-gray-300 font-semibold border border-white/10">Tailwind CSS</span>
                        </div>

                        <!-- CTA Action Button -->
                        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-bold text-white group-hover:text-red-500 transition-colors">
                            <span>Explore Project</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </a>
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

        <!-- Floating Semi-Transparent Red Form Overlay Card -->
        <div id="contact-card" class="relative z-10 max-w-4xl w-full mx-auto bg-red-600/85 backdrop-blur-md rounded-3xl p-6 sm:p-8 md:p-12 shadow-2xl border border-red-400/30 text-white transform-gpu my-12">
            
            <!-- Toast Feedback Banner -->
            <div id="form-feedback" class="hidden mb-6"></div>

            <div class="text-xs font-mono font-bold tracking-widest text-white/90 uppercase mb-6 flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                <span>REACH US</span>
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
                        <textarea id="message" name="message" rows="7" placeholder="Type your message here..." class="w-full h-full min-h-[160px] bg-white/10 border border-white/20 focus:border-white rounded-xl px-4 py-3 text-white placeholder-white/60 focus:outline-none focus:ring-1 focus:ring-white transition-all text-sm resize-none"></textarea>
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
                        <span id="submit-btn-text">Send</span>
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
                <span>CREATIVE ENGINEERING</span> <span class="text-[#E50914]">•</span>
                <span>UI/UX PRECISION</span> <span class="text-[#E50914]">•</span>
                <span>FULL STACK ARCHITECT</span> <span class="text-[#E50914]">•</span>
                <span>LARAVEL & GSAP SPECIALIST</span> <span class="text-[#E50914]">•</span>
                <span>CREATIVE ENGINEERING</span> <span class="text-[#E50914]">•</span>
                <span>UI/UX PRECISION</span> <span class="text-[#E50914]">•</span>
                <span>FULL STACK ARCHITECT</span> <span class="text-[#E50914]">•</span>
                <span>LARAVEL & GSAP SPECIALIST</span> <span class="text-[#E50914]">•</span>
            </div>
        </div>

        <!-- Copyright Bottom Bar -->
        <div class="max-w-[1700px] mx-auto px-6 md:px-12 lg:px-20 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-gray-500">
            <span>© 2026 AYSHAN. All rights reserved.</span>
            <div class="flex items-center gap-6">
                <a href="#home" class="hover:text-white transition-colors">Back to Top ↑</a>
            </div>
        </div>
    </footer>

</body>
</html>
