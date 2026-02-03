/**
 * Enhanced Page Transitions for IBEW Theme
 * Uses GSAP for smooth, minimal wipe transitions
 */

// Import GSAP
import { gsap } from "gsap";

(function (Drupal) {
    'use strict';

    // Create transition overlay with text
    function createTransitionOverlay() {
        if (document.getElementById('page-transition-overlay')) return;

        const overlay = document.createElement('div');
        overlay.id = 'page-transition-overlay';
        overlay.innerHTML = `
            <span class="transition-text">IBEW LOCAL 90</span>
        `;
        document.body.appendChild(overlay);

        // Add styles
        const style = document.createElement('style');
        style.textContent = `
            #page-transition-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #1e3a5f 0%, #2d4a6f 100%);
                z-index: 99999;
                pointer-events: none;
                transform: scaleY(0);
                transform-origin: bottom;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            #page-transition-overlay.active {
                pointer-events: all;
            }
            
            .transition-text {
                font-family: 'Oswald', sans-serif;
                font-size: 2.5rem;
                font-weight: 700;
                color: #fff;
                letter-spacing: 4px;
                text-transform: uppercase;
                opacity: 0;
            }
            
            @media (max-width: 768px) {
                .transition-text {
                    font-size: 1.5rem;
                    letter-spacing: 2px;
                }
            }
        `;
        document.head.appendChild(style);
    }

    // Smooth page out animation
    function animatePageOut(callback) {
        const overlay = document.getElementById('page-transition-overlay');
        const text = overlay.querySelector('.transition-text');
        overlay.classList.add('active');

        gsap.timeline({
            onComplete: callback
        })
            .to('main, .ibew-footer', {
                opacity: 0,
                y: -20,
                duration: 0.2,
                ease: 'power2.in'
            })
            .to(overlay, {
                scaleY: 1,
                duration: 0.35,
                ease: 'power3.inOut',
                transformOrigin: 'bottom'
            }, '-=0.1')
            .to(text, {
                opacity: 1,
                duration: 0.2,
                ease: 'power2.out'
            }, '-=0.1');
    }

    // Smooth page in animation
    function animatePageIn() {
        const overlay = document.getElementById('page-transition-overlay');
        const text = overlay.querySelector('.transition-text');
        if (!overlay) return;

        gsap.set('main, .ibew-footer', { opacity: 0, y: 20 });

        gsap.timeline({
            onComplete: () => {
                overlay.classList.remove('active');
                document.body.classList.add('page-loaded');
                gsap.set(text, { opacity: 0 });
            }
        })
            .to(text, {
                opacity: 0,
                duration: 0.15,
                ease: 'power2.in'
            })
            .to(overlay, {
                scaleY: 0,
                duration: 0.35,
                ease: 'power3.inOut',
                transformOrigin: 'top'
            }, '-=0.05')
            .to('main, .ibew-footer', {
                opacity: 1,
                y: 0,
                duration: 0.4,
                ease: 'power2.out',
                stagger: 0.05
            }, '-=0.2');
    }

    // Simple content reveal
    function revealContent() {
        document.body.classList.add('page-loaded');
        gsap.fromTo('main, .ibew-footer',
            { opacity: 0, y: 20 },
            { opacity: 1, y: 0, duration: 0.5, ease: 'power2.out', stagger: 0.1 }
        );
    }

    Drupal.behaviors.ibewPageTransitions = {
        attach(context) {
            if (context !== document) return;

            createTransitionOverlay();

            const isTransition = sessionStorage.getItem('pageTransitioning') === 'true';

            if (isTransition) {
                sessionStorage.removeItem('pageTransitioning');
                requestAnimationFrame(() => animatePageIn());
            } else {
                requestAnimationFrame(() => revealContent());
            }

            // Attach to internal links
            context.querySelectorAll('a').forEach(link => {
                if (link.dataset.transitionAttached) return;

                const href = link.getAttribute('href');
                if (!href) return;

                if (
                    link.hostname === window.location.hostname &&
                    !link.hash && !link.target &&
                    !href.startsWith('#') &&
                    !href.startsWith('mailto:') &&
                    !href.startsWith('tel:') &&
                    !href.startsWith('javascript:') &&
                    !href.includes('/admin/') &&
                    !href.includes('/node/') &&
                    !href.includes('/user/') &&
                    !link.closest('.admin-toolbar') &&
                    !link.dataset.noTransition
                ) {
                    link.dataset.transitionAttached = 'true';
                    link.addEventListener('click', function (e) {
                        const targetUrl = this.href;
                        if (targetUrl === window.location.href) return;
                        e.preventDefault();
                        sessionStorage.setItem('pageTransitioning', 'true');
                        animatePageOut(() => { window.location.href = targetUrl; });
                    });
                }
            });
        }
    };

    // Handle browser back/forward
    window.addEventListener('pageshow', (event) => {
        if (event.persisted) {
            const overlay = document.getElementById('page-transition-overlay');
            if (overlay) {
                gsap.set(overlay, { scaleY: 0 });
                overlay.classList.remove('active');
            }
            gsap.set('main, .ibew-footer', { opacity: 1, y: 0 });
            document.body.classList.add('page-loaded');
        }
    });

})(Drupal);
