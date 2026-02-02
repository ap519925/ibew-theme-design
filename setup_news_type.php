<?php

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Entity\Entity\EntityViewDisplay;

// 1. Create Content Type
if (!NodeType::load('ibew_news')) {
    $type = NodeType::create([
        'type' => 'ibew_news',
        'name' => 'News Article',
        'description' => 'News articles and updates for the IBEW website.',
    ]);
    $type->save();
    echo "Created Content Type: ibew_news\n";
} else {
    echo "Content Type ibew_news already exists\n";
}

// Helper to create field
function create_field($entity_type, $bundle, $field_name, $field_type, $label, $cardinality = 1)
{
    // Storage
    if (!FieldStorageConfig::loadByName($entity_type, $field_name)) {
        FieldStorageConfig::create([
            'field_name' => $field_name,
            'entity_type' => $entity_type,
            'type' => $field_type,
            'cardinality' => $cardinality,
            'settings' => [],
        ])->save();
        echo "Created Storage: $field_name\n";
    }

    // Instance
    if (!FieldConfig::loadByName($entity_type, $bundle, $field_name)) {
        FieldConfig::create([
            'field_name' => $field_name,
            'entity_type' => $entity_type,
            'bundle' => $bundle,
            'label' => $label,
            'settings' => [],
        ])->save();
        echo "Created Instance: $field_name on $bundle\n";
        return true;
    }
    return false;
}

// 2. Add Body field
if (!FieldConfig::loadByName('node', 'ibew_news', 'body')) {
    node_add_body_field(NodeType::load('ibew_news'), 'Body');
    echo "Added Body field\n";
}

// 3. Add Image field (field_image)
create_field('node', 'ibew_news', 'field_image', 'image', 'Featured Image');

// 4. Add "Published By" (field_published_by) - Text field
create_field('node', 'ibew_news', 'field_published_by', 'string', 'Published By');

// 5. Configure Form Display (Enable fields)
$form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', 'ibew_news', 'default');
if ($form_display) {
    $form_display->setComponent('body', [
        'type' => 'text_textarea_with_summary',
    ])
        ->setComponent('field_image', [
            'type' => 'image_image',
        ])
        ->setComponent('field_published_by', [
            'type' => 'string_textfield',
        ])
        ->setComponent('title', [
            'type' => 'string_textfield',
            'weight' => -5,
        ])
        ->setComponent('created', [
            'type' => 'datetime_timestamp',
            'weight' => 10,
        ])
        ->setComponent('uid', [
            'type' => 'entity_reference_autocomplete',
            'weight' => 5,
        ])
        ->save();
    echo "Updated Form Display\n";
}

// 6. Configure View Display (Teaser & Default)
$view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', 'ibew_news', 'default');
if ($view_display) {
    $view_display->setComponent('body', ['label' => 'hidden', 'type' => 'text_default'])
        ->setComponent('field_image', ['label' => 'hidden', 'type' => 'image', 'settings' => ['image_style' => 'large']])
        ->setComponent('field_published_by', ['label' => 'inline', 'type' => 'string'])
        ->save();
}

$teaser_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', 'ibew_news', 'teaser');
if (!$teaser_display->isNew()) {
    // Ensure teaser mode exists
} else {
    $teaser_display = EntityViewDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => 'ibew_news',
        'mode' => 'teaser',
        'status' => TRUE,
    ]);
}
$teaser_display->setComponent('body', ['label' => 'hidden', 'type' => 'text_summary_or_trimmed'])
    ->setComponent('field_image', ['label' => 'hidden', 'type' => 'image', 'settings' => ['image_style' => 'medium']])
    ->save();

echo "Configuration Complete.\n";
