<?php

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\core\Entity\Entity\EntityFormDisplay;
use Drupal\core\Entity\Entity\EntityViewDisplay;

// Helper to create simple text fields
function create_field($entity_type, $bundle, $field_name, $label, $type = 'string', $cardinality = 1)
{
    if (!FieldConfig::loadByName($entity_type, $bundle, $field_name)) {
        if (!FieldStorageConfig::loadByName($entity_type, $field_name)) {
            FieldStorageConfig::create([
                'field_name' => $field_name,
                'entity_type' => $entity_type,
                'type' => $type,
                'cardinality' => $cardinality,
            ])->save();
        }
        FieldConfig::create([
            'field_name' => $field_name,
            'entity_type' => $entity_type,
            'bundle' => $bundle,
            'label' => $label,
        ])->save();

        // Simple display settings default
        $form_display = \Drupal::service('entity_display.repository')->getFormDisplay($entity_type, $bundle);
        $form_display->setComponent($field_name, ['type' => $type . '_textfield'])->save();

        $view_display = \Drupal::service('entity_display.repository')->getViewDisplay($entity_type, $bundle);
        $view_display->setComponent($field_name, ['label' => 'hidden'])->save();
    }
}

// 1. Create Content Types
$types = [
    'ibew_news' => [
        'name' => 'News Article',
        'description' => 'News regarding membership, union updates, and community.',
    ],
    'ibew_event' => [
        'name' => 'Event',
        'description' => 'Calendar events, meetings, and workshops.',
    ],
];

foreach ($types as $id => $info) {
    if (!NodeType::load($id)) {
        NodeType::create([
            'type' => $id,
            'name' => $info['name'],
            'description' => $info['description'],
            'display_submitted' => FALSE,
        ])->save();
        echo "Created Content Type: {$info['name']}\n";
    }
}

// 2. Add Fields to News
// Body is default. Add Image, Date, Tags.
create_field('node', 'ibew_news', 'field_news_image', 'Main Image', 'image');
create_field('node', 'ibew_news', 'field_news_date', 'Date', 'datetime');
// Tags usually exist as field_tags, let's reuse or create distinct
create_field('node', 'ibew_news', 'field_news_category', 'Category', 'entity_reference'); // Simpler than taxo setup for script

// 3. Add Fields to Event
create_field('node', 'ibew_event', 'field_event_date', 'Event Date', 'datetime');
create_field('node', 'ibew_event', 'field_event_location', 'Location', 'string');

echo "Content Architecture Setup Complete.\n";
