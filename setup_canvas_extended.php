<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\NodeType;

echo "Configuring Canvas for Additional Content Types...\n";

// List of content types to enable Canvas on
$target_bundles = ['ibew_event', 'ibew_news', 'article'];
$field_name = 'field_content_canvas';
$field_type = 'component_tree';

// Ensure Field Storage exists (should be done by previous script, but good to be safe)
if (!FieldStorageConfig::loadByName('node', $field_name)) {
    // Check if field type exists
    $field_types = \Drupal::service('plugin.manager.field.field_type')->getDefinitions();
    if (isset($field_types[$field_type])) {
        FieldStorageConfig::create([
            'field_name' => $field_name,
            'entity_type' => 'node',
            'type' => $field_type,
            'cardinality' => 1,
        ])->save();
        echo "Created Field Storage: $field_name\n";
    } else {
        echo "Error: Field type '$field_type' not found.\n";
        exit;
    }
}

foreach ($target_bundles as $bundle) {
    echo "Processing $bundle...\n";

    // Check if type exists
    if (!NodeType::load($bundle)) {
        echo "  - Content type '$bundle' does not exist. Skipping.\n";
        continue;
    }

    // Attach Field Instance
    if (!FieldConfig::loadByName('node', $bundle, $field_name)) {
        FieldConfig::create([
            'field_name' => $field_name,
            'entity_type' => 'node',
            'bundle' => $bundle,
            'label' => 'Canvas Content',
            'settings' => [],
        ])->save();
        echo "  - Attached Field to $bundle.\n";
    } else {
        echo "  - Field already attached.\n";
    }

    // Configure View Display
    $view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', $bundle, 'default');
    if ($view_display) {
        $view_display->setComponent($field_name, [
            'type' => 'canvas_naive_render_sdc_tree',
            'weight' => 0,
            'label' => 'hidden',
        ])->save();
        echo "  - Configured View Display.\n";
    }

    // Configure Form Display - skipping explicit widget as per previous findings, relying on default/fallback
    /*
   $form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', $bundle, 'default');
   if ($form_display) {
       $form_display->setComponent($field_name, [
            'weight' => 0,
       ])->save();
        echo "  - Configured Form Display.\n";
   }
   */
}

echo "Done.\n";
