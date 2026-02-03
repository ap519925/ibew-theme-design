/**
 * Parallax Hero Effect
 * Adds a smooth parallax scrolling effect to hero sections using GSAP ScrollTrigger
 */

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

(function (Drupal) {
    'use strict';

    Drupal.behaviors.ibewParallaxHero = {
        attach(context) {
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            const parallaxHeroes = context.querySelectorAll('.ibew-parallax-hero');

            parallaxHeroes.forEach(hero => {
                if (hero.dataset.parallaxInitialized) return;
                hero.dataset.parallaxInitialized = 'true';

                const bgImage = hero.querySelector('.ibew-parallax-bg');

                if (bgImage) {
                    gsap.fromTo(bgImage,
                        {
                            yPercent: -20 // Start pulled up
                        },
                        {
                            yPercent: 10, // Move down slightly
                            ease: "none",
                            scrollTrigger: {
                                trigger: hero,
                                start: "top bottom", // Start when hero enters viewport
                                end: "bottom top", // End when hero leaves viewport
                                scrub: true // Smooth scrubbing based on scroll position
                            }
                        }
                    );
                }
            });
        }
    };

})(Drupal);
