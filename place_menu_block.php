<?php

use Drupal\block\Entity\Block;

echo "Placing Main Navigation block...\n";

$block_id = 'ibew_theme_main_menu';
$block = Block::load($block_id);

if (!$block) {
    $block = Block::create([
        'id' => $block_id,
        'plugin' => 'system_menu_block:main',
        'theme' => 'ibew_theme',
        'region' => 'primary_menu', // Ensure this matches theme info
        'weight' => 0,
        'status' => true,
        'settings' => [
            'id' => 'system_menu_block:main',
            'label' => 'Main navigation',
            'label_display' => false, // Hide Title
            'level' => 1,
            'depth' => 2, // Allow dropdowns?
        ],
    ]);
    $block->save();
    echo "Created block: $block_id\n";
} else {
    $block->setRegion('primary_menu');
    $block->setStatus(true);
    $block->save();
    echo "Updated block: $block_id\n";
}

// Clear cache?
drupal_flush_all_caches();
echo "Caches cleared.\n";
