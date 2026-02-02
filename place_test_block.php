<?php

use Drupal\block\Entity\Block;

$block = Block::create([
    'id' => 'ibew_theme_test_block',
    'plugin' => 'system_powered_by_block',
    'theme' => 'ibew_theme',
    'region' => 'homepage_hero',
    'weight' => -100,
    'settings' => [
        'label' => 'Test Block',
        'label_display' => 'visible',
    ],
]);
$block->save();
echo "Placed 'system_powered_by_block' in 'homepage_hero' region.\n";
