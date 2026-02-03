/**
 * @file
 * Login page enhancements - adds clickable back button and gooey button effect
 */
(function () {
    'use strict';

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function init() {
        // Only run on user pages
        if (!document.body.classList.contains('path-user')) {
            return;
        }

        // Add SVG filter for gooey effect
        addGooeyFilter();

        // Find the container and add back link
        const container = document.querySelector('.block-system-main-block') ||
            document.querySelector('.region-content') ||
            document.querySelector('form.user-login-form')?.parentElement ||
            document.querySelector('main');

        if (container && !container.querySelector('.ibew-back-link')) {
            const backLink = document.createElement('a');
            backLink.href = '/';
            backLink.className = 'ibew-back-link';
            backLink.textContent = 'Back to Website';
            container.insertBefore(backLink, container.firstChild);
        }

        // Apply gooey effect to all submit buttons
        document.querySelectorAll('[type="submit"]').forEach(wrapWithGooeyEffect);
    }

    function addGooeyFilter() {
        if (document.getElementById('goo')) return;

        const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        svg.setAttribute('version', '1.1');
        svg.style.cssText = 'display:block;height:0;width:0;';

        const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
        const filter = document.createElementNS('http://www.w3.org/2000/svg', 'filter');
        filter.setAttribute('id', 'goo');

        const blur = document.createElementNS('http://www.w3.org/2000/svg', 'feGaussianBlur');
        blur.setAttribute('in', 'SourceGraphic');
        blur.setAttribute('stdDeviation', '10');
        blur.setAttribute('result', 'blur');

        const colorMatrix = document.createElementNS('http://www.w3.org/2000/svg', 'feColorMatrix');
        colorMatrix.setAttribute('in', 'blur');
        colorMatrix.setAttribute('mode', 'matrix');
        colorMatrix.setAttribute('values', '1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7');
        colorMatrix.setAttribute('result', 'goo');

        const blend = document.createElementNS('http://www.w3.org/2000/svg', 'feBlend');
        blend.setAttribute('in', 'SourceGraphic');
        blend.setAttribute('in2', 'goo');

        filter.appendChild(blur);
        filter.appendChild(colorMatrix);
        filter.appendChild(blend);
        defs.appendChild(filter);
        svg.appendChild(defs);

        document.body.insertBefore(svg, document.body.firstChild);
    }

    function wrapWithGooeyEffect(button) {
        if (button.closest('.gooey-button-wrapper')) return;

        const wrapper = document.createElement('div');
        wrapper.className = 'gooey-button-wrapper';

        button.parentNode.insertBefore(wrapper, button);
        wrapper.appendChild(button);

        const blobs = document.createElement('div');
        blobs.className = 'c-button__blobs';

        for (let i = 0; i < 3; i++) {
            blobs.appendChild(document.createElement('div'));
        }

        wrapper.appendChild(blobs);
    }
})();
