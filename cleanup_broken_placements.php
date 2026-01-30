<?php

use Drupal\block\Entity\Block;

// Load all blocks for the theme
$blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => 'ibew_theme']);

foreach ($blocks as $block) {
    try {
        $plugin = $block->getPlugin();
        $base_id = $plugin->getBaseId();

        // Check if it's a content block (Custom Block)
        if ($base_id === 'block_content') {
            $uuid = $plugin->getDerivativeId();
            $content = \Drupal::service('entity.repository')->loadEntityByUuid('block_content', $uuid);

            if (!$content) {
                echo "Found broken block placement: " . $block->id() . " in region '" . $block->getRegion() . "'.\n";
                echo "  -> Linked content (UUID: $uuid) is missing.\n";
                $block->delete();
                echo "  -> DELETED.\n";
            }
        }
    } catch (\Exception $e) {
        // If getting the plugin throws exception (PluginNotFound), delete it too
        echo "Found invalid block config: " . $block->id() . " (" . $e->getMessage() . ").\n";
        $block->delete();
        echo "  -> DELETED.\n";
    }
}

drupal_flush_all_caches();
echo "Caches cleared.\n";
