<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\NodeType;

echo "Configuring Canvas for 'Page' content type...\n";

$bundle = 'page';
$field_name = 'field_content_canvas';

// 1. Check if 'page' type exists
if (!NodeType::load($bundle)) {
    echo "Node type '$bundle' does not exist.\n";
    exit;
}

// 2. Check/Create Field Storage
// I suspect the field type is 'canvas' or 'component_tree'. Let's try to find it.
$field_type = 'component_tree'; // Based on template name.
// Check if field type exists in definitions
$field_types = \Drupal::service('plugin.manager.field.field_type')->getDefinitions();
if (!isset($field_types[$field_type])) {
    echo "Field type '$field_type' not found. Trying 'canvas'...\n";
    $field_type = 'canvas';
    if (!isset($field_types[$field_type])) {
        echo "Field type 'canvas' not found either. Available types: " . implode(', ', array_keys($field_types)) . "\n";
        // exit; // Don't exit, maybe it's named something else totally.
    }
}

if (isset($field_types[$field_type])) {
    echo "Using field type: $field_type\n";

    if (!FieldStorageConfig::loadByName('node', $field_name)) {
        FieldStorageConfig::create([
            'field_name' => $field_name,
            'entity_type' => 'node',
            'type' => $field_type,
            'cardinality' => 1,
        ])->save();
        echo "Created Field Storage: $field_name\n";
    }

    if (!FieldConfig::loadByName('node', $bundle, $field_name)) {
        FieldConfig::create([
            'field_name' => $field_name,
            'entity_type' => 'node',
            'bundle' => $bundle,
            'label' => 'Canvas Content',
            'settings' => [],
        ])->save();
        echo "Attached Field to $bundle: $field_name\n";
    }

    // Configure Display
    $view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', $bundle, 'default');
    if ($view_display) {
        $view_display->setComponent($field_name, [
            'type' => 'canvas_naive_render_sdc_tree',
            'weight' => 0,
            'label' => 'hidden',
        ])->save();
        echo "Configured View Display.\n";
    }

    // Configure Form Display (Skipping explicit widget assignment as none were found via API)
    /*
    $form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', $bundle, 'default');
    if ($form_display) {
        $form_display->setComponent($field_name, [
            'type' => 'component_tree_widget',
            'weight' => 0,
        ])->save();
         echo "Configured Form Display.\n";
    }
    */
}

echo "Done.\n";
