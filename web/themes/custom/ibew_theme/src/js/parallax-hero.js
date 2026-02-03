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
                    gsap.to(bgImage, {
                        yPercent: 30, // Move background down 30% of its height
                        ease: "none",
                        scrollTrigger: {
                            trigger: hero,
                            start: "top top", // Start when hero top hits viewport top
                            end: "bottom top", // End when hero bottom hits viewport top
                            scrub: true // Smooth scrubbing based on scroll position
                        }
                    });
                }
            });
        }
    };

})(Drupal);
