<?php

use Drupal\block\Entity\Block;

$theme = 'ibew_theme';
$regions = ['homepage_hero', 'homepage_news', 'homepage_events', 'homepage_about'];

foreach ($regions as $region) {
    echo "Region: $region\n";
    $blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties([
        'theme' => $theme,
        'region' => $region
    ]);

    foreach ($blocks as $block) {
        echo " - Block ID: " . $block->id() . "\n";
        echo "   Plugin: " . $block->getPluginId() . "\n";
        echo "   Weight: " . $block->getWeight() . "\n";
        echo "   Status: " . ($block->status() ? 'Enabled' : 'Disabled') . "\n";
    }
}
