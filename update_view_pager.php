<?php

$config = \Drupal::service('config.factory')->getEditable('views.view.homepage_news');
$display = $config->get('display');

// 1. Set Items Per Page to 9
$display['default']['display_options']['pager'] = [
    'type' => 'mini', // Use Mini Pager for "View More" style (Next/Prev)
    'options' => [
        'items_per_page' => 9,
        'offset' => 0,
        'id' => 0,
        'total_pages' => 0,
        'tags' => [
            'previous' => '‹ Previous',
            'next' => 'View More ›', // Customizing the text
        ],
        'expose' => [
            'items_per_page' => false,
            'items_per_page_label' => 'Items per page',
            'items_per_page_options' => '5, 10, 25, 50',
            'items_per_page_options_all' => false,
            'items_per_page_options_all_label' => '- All -',
            'offset' => false,
            'offset_label' => 'Offset',
        ],
    ],
];

// 2. Enable AJAX
$display['default']['display_options']['use_ajax'] = true;

$config->set('display', $display);
$config->save();

echo "Updated homepage_news view: 9 items, Mini Pager, AJAX enabled.\n";
