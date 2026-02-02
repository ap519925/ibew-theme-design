<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\paragraphs\Entity\Paragraph;

echo "Checking Hero Slider Content Integrity...\n";
$blocks = BlockContent::loadMultiple();
foreach ($blocks as $block) {
    if ($block->bundle() == 'hero_slider') {
        echo "Found Hero Slider Block: " . $block->label() . " (ID: " . $block->id() . ")\n";

        if ($block->hasField('field_hero_slides') && !$block->get('field_hero_slides')->isEmpty()) {
            $slides = $block->get('field_hero_slides')->getValue();
            echo "  Found " . count($slides) . " slides.\n";

            foreach ($slides as $index => $item) {
                echo "  - Slide " . ($index + 1) . ": ";
                $p = Paragraph::load($item['target_id']);
                if ($p) {
                    if ($p->hasField('field_hero_media') && !$p->get('field_hero_media')->isEmpty()) {
                        $media = $p->get('field_hero_media')->entity;
                        if ($media) {
                            echo "Has Media: " . $media->label() . " (ID: " . $media->id() . ")\n";
                        } else {
                            echo "Media Entity Missing/Broken reference.\n";
                        }
                    } else {
                        echo "NO MEDIA ATTACHED (Field Empty).\n";
                    }
                } else {
                    echo "Paragraph Entity Missing (ID: " . $item['target_id'] . ")\n";
                }
            }
        } else {
            echo "  No Slides found (field_hero_slides empty).\n";
        }
    }
}
