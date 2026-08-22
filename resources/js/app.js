import './bootstrap';
import Lenis from 'lenis';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { createIcons, icons } from 'lucide';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Initialize Lucide Icons
createIcons({ icons });

// Initialize Lenis Smooth Scroll & Sync with GSAP ScrollTrigger
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
});

// Synchronize Lenis scroll ticks with GSAP ticker loop
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

// Global references
window.lenis = lenis;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Navigation & ScrollSpy Setup
document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-floating a[data-section]');

    const activeClasses = ['bg-white/20', 'text-white', 'shadow-sm'];
    const inactiveClasses = ['text-white/80', 'hover:text-white', 'hover:bg-white/15'];

    function setActiveNavLink(targetId) {
        navLinks.forEach(link => {
            const sectionAttr = link.getAttribute('data-section');
            if (sectionAttr === targetId) {
                link.classList.add(...activeClasses);
                link.classList.remove(...inactiveClasses);
            } else {
                link.classList.remove(...activeClasses);
                link.classList.add(...inactiveClasses);
            }
        });
    }

    // IntersectionObserver for Accurate Viewport ScrollSpy
    if (sections.length > 0 && navLinks.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '-30% 0px -50% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    if (id) {
                        setActiveNavLink(id);
                    }
                }
            });
        }, observerOptions);

        sections.forEach(section => observer.observe(section));
    }

    // Smooth Anchor Scroll Handler
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return;

            const targetElement = document.querySelector(href);
            if (targetElement) {
                e.preventDefault();
                const targetId = href.replace('#', '');
                setActiveNavLink(targetId);

                if (window.lenis) {
                    window.lenis.scrollTo(targetElement, {
                        offset: -80,
                        duration: 1.2,
                        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
                    });
                } else {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });

    // GSAP Pendulum Sway & Mouse 3D Tilt for ID Badge Card
    const cardFrame = document.getElementById('about-card-frame');
    if (cardFrame) {
        // Continuous Gentle Pendulum Sway Animation from top center pivot
        const swayTween = gsap.to(cardFrame, {
            rotation: 2,
            duration: 3.5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            transformOrigin: 'top center'
        });

        // Interactive 3D Parallax Mouse Tilt on Hover
        cardFrame.addEventListener('mousemove', (e) => {
            swayTween.pause();
            const rect = cardFrame.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            gsap.to(cardFrame, {
                rotationY: x * 0.1,
                rotationX: -y * 0.1,
                transformPerspective: 1000,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        cardFrame.addEventListener('mouseleave', () => {
            gsap.to(cardFrame, {
                rotationY: 0,
                rotationX: 0,
                duration: 0.5,
                ease: 'power2.out',
                onComplete: () => swayTween.play()
            });
        });
    }

    // ScrollTrigger Gravity-Drop Card Animation on Leaving #about
    const aboutSec = document.getElementById('about');
    if (aboutSec && cardFrame) {
        const cardDropTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#about',
                start: 'bottom 80%',
                end: 'bottom 20%',
                scrub: 0.6,
                fastScrollEnd: true,
                preventOverlaps: true
            }
        });

        cardDropTl.to('#about-card-frame', {
            y: 350,
            rotation: 28,
            scale: 0.85,
            opacity: 0,
            transformOrigin: 'top right',
            ease: 'power1.in'
        }, 0)
        .to('#about-clip', {
            scale: 0.5,
            opacity: 0,
            ease: 'power1.in'
        }, 0);
    }

    // Interactive 3D Glass Showcase Deck Motion & Tilt
    function initProjectsShowcase() {
        const projectsSec = document.getElementById('projects');
        const showcaseCards = document.querySelectorAll('.project-showcase-card');

        if (!projectsSec || showcaseCards.length === 0) return;

        // 1. Bulletproof Staggered Scroll Reveal
        gsap.from('#projects .project-showcase-card', {
            scrollTrigger: {
                trigger: '#projects',
                start: 'top 75%',
                toggleActions: 'play none none none',
                once: true
            },
            y: 70,
            opacity: 0,
            duration: 0.9,
            stagger: 0.18,
            ease: 'power3.out',
            clearProps: 'all'
        });

        // 2. Interactive 3D Perspective Mouse Parallax Tilt
        showcaseCards.forEach((card) => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                gsap.to(card, {
                    rotationY: x * 0.08,
                    rotationX: -y * 0.08,
                    transformPerspective: 1000,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotationY: 0,
                    rotationX: 0,
                    duration: 0.5,
                    ease: 'power2.out'
                });
            });
        });
    }

    // Giant Typography Contact Section Animations
    function initContactMotion() {
        const contactSec = document.getElementById('contact');
        const contactBgText = document.getElementById('contact-bg-text');
        const contactCard = document.getElementById('contact-card');

        if (!contactSec) return;

        // 1. Backdrop Typography Scroll Zoom Scrub (0.8 -> 1.05 scale)
        if (contactBgText) {
            gsap.fromTo(contactBgText,
                { scale: 0.8, opacity: 0.7 },
                {
                    scale: 1.05,
                    opacity: 1,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: '#contact',
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 1
                    }
                }
            );
        }

        // 2. Floating Red Form Card Smooth Entrance
        if (contactCard) {
            gsap.fromTo(contactCard,
                { y: 80, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '#contact',
                        start: 'top 75%',
                        toggleActions: 'play none none none',
                        once: true
                    }
                }
            );
        }
    }

    // Wrap initialization inside load event & refresh ScrollTrigger after DOM assets settle
    window.addEventListener('load', () => {
        initProjectsShowcase();
        initContactMotion();
        setTimeout(() => {
            ScrollTrigger.refresh();
        }, 150);
    });

    window.addEventListener('resize', () => {
        ScrollTrigger.refresh();
    });

    const preloader = document.getElementById('preloader');
    const preloaderText = document.getElementById('preloader-text');
    const preloaderDot = document.getElementById('preloader-dot');

    // Prevent scrolling during preloader animation
    document.body.style.overflow = 'hidden';

    // Master Timeline
    const masterTl = gsap.timeline({
        onComplete: () => {
            document.body.style.overflow = '';
            if (preloader) {
                preloader.style.display = 'none';
                preloader.style.pointerEvents = 'none';
            }
            initProjectsShowcase();
            initContactMotion();
            initScrollAnimations();
        }
    });

    if (preloader && preloaderText) {
        masterTl
            // Step 1: Swipe Up Entry
            .fromTo(preloaderText, 
                { yPercent: 100, opacity: 0 }, 
                { yPercent: 0, opacity: 1, duration: 0.7, ease: 'power3.out' }
            )
            // Step 2: Rapid Subtle Flicker / Blink Animation
            .to(preloaderText, {
                opacity: 0.25,
                duration: 0.08,
                repeat: 3,
                yoyo: true,
                ease: 'power1.inOut'
            })
            // Dot Flicker Accent Sync
            .to(preloaderDot, {
                opacity: 0,
                duration: 0.08,
                repeat: 3,
                yoyo: true,
                ease: 'power1.inOut'
            }, '<')
            .to(preloaderText, {
                opacity: 1,
                duration: 0.15
            })
            // Step 3: Curtain Slide Exit
            .to(preloader, {
                yPercent: -100,
                duration: 0.8,
                ease: 'power4.inOut'
            });
    }

    // Step 4: Hero Stagger Entrance Timeline
    masterTl
        .fromTo('.nav-floating', 
            { y: -60, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 0.8, ease: 'power3.out' },
            '-=0.3'
        )
        .fromTo('.hero-text-elem', 
            { x: -50, opacity: 0 }, 
            { x: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: 'power3.out' },
            '-=0.4'
        )
        .fromTo('.hero-cta-elem', 
            { x: -30, opacity: 0 }, 
            { x: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: 'power3.out' },
            '-=0.4'
        )
        .fromTo('.hero-media-container', 
            { y: 80, opacity: 0, scale: 0.96 }, 
            { y: 0, opacity: 1, scale: 1, duration: 1.0, ease: 'power3.out' },
            '-=0.8'
        )
        .fromTo('.play-reel-trigger', 
            { scale: 0, opacity: 0 }, 
            { scale: 1, opacity: 1, duration: 0.6, ease: 'back.out(1.7)' },
            '-=0.4'
        );

    // Magnetic Button Effect
    const magneticBtns = document.querySelectorAll('.magnetic-btn');
    magneticBtns.forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            gsap.to(btn, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.5,
                ease: 'elastic.out(1, 0.4)'
            });
        });
    });

    // Tech Stack Parallax Tilt Effect
    const techCards = document.querySelectorAll('.tech-card');
    techCards.forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            gsap.to(card, {
                rotationY: x * 0.15,
                rotationX: -y * 0.15,
                transformPerspective: 800,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotationY: 0,
                rotationX: 0,
                duration: 0.5,
                ease: 'power2.out'
            });
        });
    });

    // PLAY REEL Image-to-Video Swap Mechanism
    const playReelBtn = document.getElementById('play-reel-btn');
    const heroImg = document.getElementById('hero-img');
    const heroVideo = document.getElementById('hero-video');
    const playIcon = document.getElementById('play-icon');
    const pauseIcon = document.getElementById('pause-icon');
    const playReelText = document.getElementById('play-reel-text');

    if (playReelBtn && heroImg && heroVideo) {

        function showImageState() {
            heroVideo.pause();
            heroVideo.classList.add('opacity-0', 'pointer-events-none');
            heroVideo.classList.remove('opacity-100');

            heroImg.classList.remove('opacity-0', 'pointer-events-none');
            heroImg.classList.add('opacity-100');

            if (playReelText) playReelText.innerText = 'PLAY REEL';
            if (playIcon) playIcon.classList.remove('hidden');
            if (pauseIcon) pauseIcon.classList.add('hidden');
        }

        function showVideoState() {
            heroImg.classList.add('opacity-0', 'pointer-events-none');
            heroImg.classList.remove('opacity-100');

            heroVideo.classList.remove('opacity-0', 'pointer-events-none');
            heroVideo.classList.add('opacity-100');

            heroVideo.currentTime = 0;
            heroVideo.muted = false;

            heroVideo.play().then(() => {
                if (playReelText) playReelText.innerText = 'PAUSE';
                if (playIcon) playIcon.classList.remove('hidden');
                if (pauseIcon) pauseIcon.classList.remove('hidden');
            }).catch(err => {
                console.log('Autoplay error:', err);
                // Fallback muted play if browser blocks sound
                heroVideo.muted = true;
                heroVideo.play();
                if (playReelText) playReelText.innerText = 'PAUSE';
                if (playIcon) playIcon.classList.remove('hidden');
                if (pauseIcon) pauseIcon.classList.add('hidden');
            });
        }

        playReelBtn.addEventListener('click', () => {
            if (heroVideo.paused || heroVideo.classList.contains('opacity-0')) {
                showVideoState();
                gsap.to(playReelBtn, { scale: 1.1, duration: 0.15, yoyo: true, repeat: 1 });
            } else {
                showImageState();
            }
        });

        heroVideo.addEventListener('ended', () => {
            showImageState();
        });
    }

    // Full-Stack Laravel AJAX Contact Form Submission
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit-btn');
    const submitSpinner = document.getElementById('submit-spinner');
    const submitBtnText = document.getElementById('submit-btn-text');
    const formFeedback = document.getElementById('form-feedback');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Reset Feedback & Errors
            if (formFeedback) {
                formFeedback.classList.add('hidden');
                formFeedback.innerText = '';
            }

            document.querySelectorAll('.error-text').forEach(el => el.innerText = '');

            // Loading state
            if (submitBtn) submitBtn.disabled = true;
            if (submitSpinner) submitSpinner.classList.remove('hidden');
            if (submitBtnText) submitBtnText.innerText = 'Sending...';

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
            const formData = new FormData(contactForm);

            const data = {
                first_name: formData.get('first_name'),
                last_name: formData.get('last_name'),
                email: formData.get('email'),
                message: formData.get('message'),
                agreement: formData.get('agreement') ? 'on' : ''
            };

            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Show success feedback
                    if (formFeedback) {
                        formFeedback.className = 'p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-medium mb-6 flex items-center gap-2';
                        formFeedback.innerHTML = `<i data-lucide="check-circle" class="w-5 h-5 text-emerald-400"></i> <span>${result.message}</span>`;
                        formFeedback.classList.remove('hidden');
                        createIcons({ icons });
                    }
                    contactForm.reset();
                } else if (result.errors) {
                    // Show validation errors under fields
                    for (const [field, messages] of Object.entries(result.errors)) {
                        const errorEl = document.getElementById(`error-${field}`);
                        if (errorEl) {
                            errorEl.innerText = messages[0];
                        }
                    }
                } else {
                    if (formFeedback) {
                        formFeedback.className = 'p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-sm font-medium mb-6';
                        formFeedback.innerText = result.message || 'An error occurred. Please try again.';
                        formFeedback.classList.remove('hidden');
                    }
                }
            } catch (error) {
                console.error('Contact submission error:', error);
                if (formFeedback) {
                    formFeedback.className = 'p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-sm font-medium mb-6';
                    formFeedback.innerText = 'Network error. Please check your connection and try again.';
                    formFeedback.classList.remove('hidden');
                }
            } finally {
                if (submitBtn) submitBtn.disabled = false;
                if (submitSpinner) submitSpinner.classList.add('hidden');
                if (submitBtnText) submitBtnText.innerText = 'Send';
            }
        });
    }

    // Initialize ScrollTriggers after preloader
    function initScrollAnimations() {
        const mm = gsap.matchMedia();

        // 1. Hero Scale-Down Transition on Scroll
        const heroSection = document.getElementById('home');
        if (heroSection) {
            gsap.to(heroSection, {
                scale: 0.94,
                opacity: 0.6,
                borderRadius: '32px',
                ease: 'none',
                scrollTrigger: {
                    trigger: heroSection,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 0.6
                }
            });
        }

        // 2. "How We Work" Card Stacking ScrollTrigger Animation (Desktop Pinned Deck)
        const stackSection = document.getElementById('process');
        const processCards = gsap.utils.toArray('.process-card');

        if (stackSection && processCards.length > 0) {
            mm.add("(min-width: 1024px)", () => {

                processCards.forEach((card, index) => {
                    if (index > 0) {
                        gsap.set(card, { yPercent: 100, opacity: 1, scale: 1 });
                    }
                });

                const stackTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: stackSection,
                        start: 'top top',
                        end: `+=${processCards.length * 100}%`,
                        pin: true,
                        pinSpacing: true,
                        scrub: 0.6,
                        anticipatePin: 1,
                        fastScrollEnd: true,
                        preventOverlaps: true
                    }
                });

                processCards.forEach((card, index) => {
                    if (index > 0) {
                        stackTl.to(card, {
                            yPercent: 0,
                            scale: 1,
                            opacity: 1,
                            duration: 1,
                            ease: 'power1.inOut'
                        });

                        stackTl.to(processCards[index - 1], {
                            scale: 0.92,
                            opacity: 0.5,
                            rotationX: -4,
                            transformOrigin: 'top center',
                            duration: 1,
                            ease: 'power1.inOut'
                        }, '<');
                    }
                });
            });
        }
    }
});
