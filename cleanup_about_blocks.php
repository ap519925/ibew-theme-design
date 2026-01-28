<?php

use Drupal\block\Entity\Block;

// 1. Cleanup Blocks in homepage_about
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties([
    'theme' => 'ibew_theme',
    'region' => 'homepage_about'
]);

foreach ($blocks as $block) {
    echo "Deleting duplicate block: " . $block->id() . "\n";
    $block->delete();
}

// 2. Find the correct Content Block
$content_blocks = \Drupal::entityTypeManager()->getStorage('block_content')->loadByProperties([
    'info' => 'Static About Homepage'
]);

if (empty($content_blocks)) {
    echo "Warning: No 'Static About Homepage' content block found. You might need to recreate it.\n";
    // Optional: Create it if missing?
    // Let's assume it exists from previous steps. If not, section will be empty (better than duplicate).
} else {
    // Pick the last one (most recent)
    $plugin_uuid = end($content_blocks)->uuid();
    echo "Using Content Block UUID: $plugin_uuid\n";

    // 3. Place ONLY ONE block
    $block = Block::create([
        'id' => 'ibew_homepage_about',
        'plugin' => 'block_content:' . $plugin_uuid,
        'theme' => 'ibew_theme',
        'region' => 'homepage_about',
        'weight' => 0,
        'settings' => [
            'label' => 'About Us',
            'label_display' => 0,
        ],
        'visibility' => [
            'request_path' => ['id' => 'request_path', 'pages' => '<front>']
        ]
    ]);
    $block->save();
    echo "Placed unique 'ibew_homepage_about' block.\n";
}
