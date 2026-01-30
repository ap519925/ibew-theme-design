<?php
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => 'ibew_theme', 'region' => 'homepage_about']);
echo "Checking 'homepage_about' region in 'ibew_theme':\n";
if (empty($blocks)) {
    echo "  Region is empty.\n";
}
foreach ($blocks as $id => $block) {
    echo "  Block ID: $id\n";
    echo "  Plugin: " . $block->getPluginId() . "\n";
}
