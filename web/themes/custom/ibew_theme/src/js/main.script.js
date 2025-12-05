// Import Bootstrap
import 'bootstrap';

// Custom JavaScript for IBEW Theme
(function (Drupal) {
  'use strict';

  Drupal.behaviors.ibewTheme = {
    attach(context) {
      const nav = context.querySelector('.ibew-nav');
      if (!nav || nav.dataset.ibewNavReady) return;

      nav.dataset.ibewNavReady = 'true';
      const toggle = nav.querySelector('.js-ibew-nav-toggle');

      if (toggle) {
        toggle.addEventListener('click', () => {
          const isOpen = nav.classList.toggle('is-open');
          toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
      }

      nav.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener('click', () => {
          if (nav.classList.contains('is-open')) {
            nav.classList.remove('is-open');
            if (toggle) {
              toggle.setAttribute('aria-expanded', 'false');
            }
          }
        });
      });

      // Safety: close any lingering overlay on load.
      nav.classList.remove('is-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    },
  };
})(Drupal);
