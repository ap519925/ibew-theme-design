<?php

use Drupal\block\Entity\Block;

$theme = 'ibew_theme';
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => $theme]);

$output = "Blocks in $theme:\n";
foreach ($blocks as $block) {
    if ($block->getRegion() != -1) {
        $output .= "ID: " . $block->id() . " | Label: " . $block->label() . " | Region: " . $block->getRegion() . " | Weight: " . $block->getWeight() . "\n";
    }
}

file_put_contents('blocks_debug.txt', $output);
echo "Debug file written.\n";
