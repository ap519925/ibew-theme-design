/**
 * Page Transitions for IBEW Theme
 * Implements a simple fade-out/fade-in effect on navigation.
 */

(function (Drupal) {
    'use strict';

    Drupal.behaviors.ibewPageTransitions = {
        attach(context) {
            // Run once on initial page load
            if (!document.body.classList.contains('page-loaded')) {
                // Force a small delay to ensure CSS is ready, then fade in
                setTimeout(() => {
                    document.body.classList.add('page-loaded');
                }, 50);
            }

            // Attach click listeners to eligible links
            const links = context.querySelectorAll('a');
            links.forEach(link => {
                // Check if link is internal, not anchor, not target_blank, not admin
                if (
                    link.hostname === window.location.hostname && // Same domain
                    !link.hash && // Not an anchor link
                    !link.target && // Not opening in new tab
                    !link.getAttribute('href').startsWith('#') &&
                    !link.getAttribute('href').startsWith('mailto:') &&
                    !link.getAttribute('href').startsWith('tel:') &&
                    !link.getAttribute('href').includes('/admin/') && // Avoid Admin/Edit pages
                    !link.getAttribute('href').includes('/node/add') &&
                    !link.closest('.admin-toolbar') && // Not in admin toolbar
                    !link.dataset.noTransition // Allow opt-out
                ) {

                    // Avoid double attaching
                    if (link.dataset.transitionAttached) return;
                    link.dataset.transitionAttached = 'true';

                    link.addEventListener('click', function (e) {
                        const targetUrl = this.href;

                        // Don't transition if just clicking same page
                        if (targetUrl === window.location.href) return;

                        e.preventDefault();

                        // Add fade-out class to body
                        document.body.classList.remove('page-loaded');
                        document.body.classList.add('page-transitioning');

                        // Wait for animation (e.g., 300ms) then navigate
                        setTimeout(() => {
                            window.location.href = targetUrl;
                        }, 400); // 400ms matches CSS transition duration
                    });
                }
            });
        }
    };
})(Drupal);

