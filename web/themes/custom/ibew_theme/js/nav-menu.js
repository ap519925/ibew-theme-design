/**
 * @file
 * Animated Circular Mobile Navigation Menu - JavaScript
 */

(function () {
    'use strict';

    function init() {
        const nav = document.querySelector('#nav-mobile');
        const menu = document.querySelector('#nav-mobile-menu');
        const menuToggle = document.querySelector('.nav-mobile__toggle');

        if (!nav || !menu || !menuToggle) {
            return;
        }

        let isMenuOpen = false;

        // Toggle menu active state
        menuToggle.addEventListener('click', function (e) {
            e.preventDefault();
            isMenuOpen = !isMenuOpen;

            // Toggle a11y attributes and active class
            menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
            menu.hidden = !isMenuOpen;
            nav.classList.toggle('nav-mobile--open');

            // Lock body scroll when menu is open
            document.body.classList.toggle('nav-mobile-open', isMenuOpen);
        });

        // Close button inside overlay
        const closeButton = document.querySelector('.nav-mobile__close');
        if (closeButton) {
            closeButton.addEventListener('click', function (e) {
                e.preventDefault();
                isMenuOpen = false;
                menuToggle.setAttribute('aria-expanded', 'false');
                menu.hidden = true;
                nav.classList.remove('nav-mobile--open');
                document.body.classList.remove('nav-mobile-open');
            });
        }

        // Close menu when clicking on a link
        const menuLinks = menu.querySelectorAll('.nav-mobile__link');
        menuLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                isMenuOpen = false;
                menuToggle.setAttribute('aria-expanded', 'false');
                menu.hidden = true;
                nav.classList.remove('nav-mobile--open');
                document.body.classList.remove('nav-mobile-open');
            });
        });

        // Trap tab inside nav when open
        nav.addEventListener('keydown', function (e) {
            // Abort if menu isn't open or modifier keys are pressed
            if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
                return;
            }

            // Listen for tab press and move focus if we're on either end
            if (e.keyCode === 9) { // Tab key
                if (e.shiftKey) {
                    if (document.activeElement === menuLinks[0]) {
                        menuToggle.focus();
                        e.preventDefault();
                    }
                } else if (document.activeElement === menuToggle) {
                    menuLinks[0].focus();
                    e.preventDefault();
                }
            }

            // Close on Escape
            if (e.keyCode === 27) { // Escape key
                isMenuOpen = false;
                menuToggle.setAttribute('aria-expanded', 'false');
                menu.hidden = true;
                nav.classList.remove('nav-mobile--open');
                document.body.classList.remove('nav-mobile-open');
                menuToggle.focus();
            }
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
