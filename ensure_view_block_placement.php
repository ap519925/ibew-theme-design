<?php

use Drupal\block\Entity\Block;

// Map: Region -> Plugin ID
$map = [
    'homepage_news' => 'views_block:homepage_news-block_1',
    'homepage_events' => 'views_block:homepage_events-block_1',
];

foreach ($map as $region => $plugin_id) {
    // 1. Delete ALL blocks in this region for ibew_theme
    $existing = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties([
        'theme' => 'ibew_theme',
        'region' => $region
    ]);

    foreach ($existing as $b) {
        // If it's already the correct block, check if it's active, if so, skip delete?
        // No, let's refresh to be clean.
        echo "Deleting block " . $b->id() . " from $region\n";
        $b->delete();
    }

    // 2. Create the View Block
    $block = Block::create([
        'id' => 'ibew_' . $region, // Predictable ID
        'plugin' => $plugin_id,
        'theme' => 'ibew_theme',
        'region' => $region,
        'weight' => 0,
        'settings' => [
            'label' => 'Latest News', // Label might be hidden by template
            'label_display' => 0,
            'views_label' => '',
            'items_per_page' => 'none',
        ],
        'visibility' => [
            'request_path' => ['id' => 'request_path', 'pages' => '<front>']
        ]
    ]);
    $block->save();
    echo "Placed $plugin_id in $region\n";
}
