<?php

use Drupal\block\Entity\Block;

echo "Cleaning Homepage Regions...\n";

// Load all blocks
$blocks = Block::loadMultiple();
$count = 0;

foreach ($blocks as $block) {
    // Check if block is in our target regions
    $region = $block->getRegion();
    if (in_array($region, ['homepage_news', 'homepage_events', 'homepage_about', 'homepage_stats'])) {
        echo "Removing block: " . $block->id() . " from $region\n";
        $block->delete();
        $count++;
    }
}

echo "Removed $count blocks.\n";
