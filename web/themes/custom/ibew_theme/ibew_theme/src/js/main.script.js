// Import Bootstrap
import 'bootstrap';

// Custom JavaScript for IBEW Theme
(function ($, Drupal) {
    'use strict';

    Drupal.behaviors.ibewTheme = {
        attach: function (context, settings) {
            // Initialize any custom functionality here
            console.log('IBEW Theme initialized');
        }
    };

})(jQuery, Drupal);
