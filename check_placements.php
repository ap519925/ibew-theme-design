<?php

$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => 'ibew_theme', 'region' => 'homepage_hero']);
echo "Blocks in 'homepage_hero':\n";
foreach ($blocks as $block) {
    echo "- ID: " . $block->id() . " | Status: " . ($block->status() ? 'Enabled' : 'Disabled') . " | Weight: " . $block->getWeight() . "\n";
}
