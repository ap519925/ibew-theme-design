<?php

use Drupal\block\Entity\Block;

echo "Aggressively Cleaning Homepage Regions...\n";

$regions = ['homepage_hero_content', 'homepage_about', 'homepage_news', 'homepage_events', 'homepage_stats', 'homepage_contact', 'content'];
// Added 'content' region just in case blocks leaked there, but be careful not to delete main page content block

$blocks = Block::loadMultiple();
$count = 0;

foreach ($blocks as $block) {
    if ($block->getTheme() !== 'ibew_theme')
        continue;

    $region = $block->getRegion();

    // Safety: Don't delete system main block
    if ($block->getPluginId() == 'system_main_block')
        continue;

    if (in_array($region, $regions)) {
        echo "Deleting block: " . $block->id() . " (Region: $region, Plugin: " . $block->getPluginId() . ")\n";
        $block->delete();
        $count++;
    }
}

echo "Total Deleted: $count\n";
