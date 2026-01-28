// Import Bootstrap
import 'bootstrap';
// Import Splide
import Splide from '@splidejs/splide';
// Import GSAP
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

// Custom JavaScript for IBEW Theme
(function (Drupal) {
    'use strict';

    Drupal.behaviors.ibewTheme = {
        attach(context) {

            // Initialize Splide for Hero Slider
            const heroSliderElement = context.querySelector('#ibewHeroSplide');
            if (heroSliderElement && !heroSliderElement.dataset.splideInitialized) {
                heroSliderElement.dataset.splideInitialized = 'true';
                new Splide(heroSliderElement, {
                    type: 'fade',
                    rewind: true,
                    autoplay: true,
                    interval: 6000,
                    arrows: true,
                    pagination: true,
                    pauseOnHover: false,
                    speed: 1000,
                }).mount();
            }

            // Initialize Generic Splide Instances (like the About Us one)
            const splides = context.querySelectorAll('.splide:not(#ibewHeroSplide)');
            splides.forEach(splideEl => {
                if (!splideEl.dataset.splideInitialized) {
                    splideEl.dataset.splideInitialized = 'true';
                    // Parse options from data-splide attribute if available, or use defaults
                    let options = {
                        type: 'slide',
                        arrows: true,
                        pagination: true,
                        autoplay: false,
                    };

                    try {
                        const dataOptions = JSON.parse(splideEl.getAttribute('data-splide'));
                        if (dataOptions) {
                            options = { ...options, ...dataOptions };
                        }
                    } catch (e) {
                        // ignore parse error use defaults
                    }

                    new Splide(splideEl, options).mount();
                }
            });

            // Mobile Menu Toggle logic and Sticky Scroll
            const nav = context.querySelector('.ibew-nav');
            if (nav && !nav.dataset.ibewNavReady) {
                nav.dataset.ibewNavReady = 'true';
                const toggle = nav.querySelector('.js-ibew-nav-toggle');

                // Mobile Toggle
                if (toggle) {
                    toggle.addEventListener('click', () => {
                        const isOpen = nav.classList.toggle('is-open');
                        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                    });
                }

                // Sticky Scroll Effect
                const handleScroll = () => {
                    if (window.scrollY > 50) {
                        nav.classList.add('is-scrolled');
                    } else {
                        nav.classList.remove('is-scrolled');
                    }
                };

                window.addEventListener('scroll', handleScroll, { passive: true });
                // Trigger once on load to set initial state
                handleScroll();
            }

            // --- Theme Toggle Logic ---
            // Only attach once to avoid duplicate listeners
            if (!document.documentElement.dataset.themeToggleAttached) {
                document.documentElement.dataset.themeToggleAttached = 'true';

                const themeToggleBtn = document.querySelector('.js-theme-toggle');
                const htmlEl = document.documentElement;
                const moonIcon = document.querySelector('.icon-moon');
                const sunIcon = document.querySelector('.icon-sun');

                // Check LocalStorage or System Preference
                const userTheme = localStorage.getItem('theme');
                const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                if (userTheme === 'dark' || (!userTheme && systemDark)) {
                    htmlEl.classList.add('dark');
                    updateIcons(true);
                } else {
                    htmlEl.classList.remove('dark');
                    updateIcons(false);
                }

                if (themeToggleBtn) {
                    themeToggleBtn.addEventListener('click', () => {
                        htmlEl.classList.toggle('dark');
                        const isDark = htmlEl.classList.contains('dark');
                        localStorage.setItem('theme', isDark ? 'dark' : 'light');
                        updateIcons(isDark);
                    });
                }

                function updateIcons(isDark) {
                    if (!moonIcon || !sunIcon) return;
                    if (isDark) {
                        sunIcon.classList.add('d-none');
                        moonIcon.classList.remove('d-none');
                    } else {
                        sunIcon.classList.remove('d-none');
                        moonIcon.classList.add('d-none');
                    }
                }
            }

            // Scroll Reveal Animation Observer
            // GSAP Scroll Animations
            gsap.registerPlugin(ScrollTrigger);

            // Hero Animations (Text reveal on load)
            const heroText = context.querySelectorAll('.ibew-hero__lead > *');
            if (heroText.length > 0) {
                gsap.from(heroText, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    stagger: 0.15,
                    ease: "power3.out",
                    delay: 0.2
                });
            }

            // Section Headers Reveal
            const sectionHeaders = context.querySelectorAll('.ibew-section__header');
            sectionHeaders.forEach(header => {
                gsap.from(header.children, {
                    scrollTrigger: {
                        trigger: header,
                        start: "top 85%",
                    },
                    y: 30,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: "power2.out"
                });
            });

            // Card Grids Stagger Reveal
            const grids = context.querySelectorAll('.ibew-grid');
            grids.forEach(grid => {
                gsap.from(grid.children, {
                    scrollTrigger: {
                        trigger: grid,
                        start: "top 85%",
                    },
                    y: 40,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: "power2.out"
                });
            });

            // Stats Counter Animation
            const stats = context.querySelectorAll('.ibew-stat__value');
            stats.forEach(stat => {
                // Parse the number (e.g. "120+" -> 120)
                const rawText = stat.innerText;
                const number = parseFloat(rawText.replace(/[^0-9.]/g, ''));

                if (!isNaN(number)) {
                    gsap.from(stat, {
                        textContent: 0,
                        duration: 2,
                        ease: "power1.out",
                        snap: { textContent: 1 },
                        stagger: 1,
                        scrollTrigger: {
                            trigger: stat,
                            start: "top 90%",
                            once: true,
                        },
                        onUpdate: function () {
                            // Keep original suffix if any
                            stat.innerText = Math.round(this.targets()[0].textContent) + rawText.replace(/[0-9.]/g, '');
                        }
                    });
                }
            });
        },
    };
})(Drupal);
