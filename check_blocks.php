<?php

use Drupal\block_content\Entity\BlockContent;

echo "Listing All custom blocks:\n";
$blocks = BlockContent::loadMultiple();
foreach ($blocks as $block) {
    echo "--------------------------\n";
    echo "ID: " . $block->id() . "\n";
    echo "UUID: " . $block->uuid() . "\n";
    echo "Label: " . $block->label() . "\n";
    echo "Bundle: " . $block->bundle() . "\n";
    echo "Status: " . ($block->isPublished() ? 'Published' : 'Unpublished') . "\n";

    // Check paragraphs
    if ($block->hasField('field_hero_slides') && !$block->get('field_hero_slides')->isEmpty()) {
        $count = count($block->get('field_hero_slides')->getValue());
        echo "Slides: $count\n";
    } elseif ($block->hasField('field_hero_slides')) {
        echo "Slides: 0 (Empty)\n";
    }

    // Check old field (should be gone)
    if ($block->hasField('field_hero_image')) {
        echo "Has Legacy Field 'field_hero_image'!\n";
    }
}
