<?php

use Drupal\node\Entity\NodeType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Entity\Entity\EntityViewDisplay;

$bundle = 'news_article';
$bundle_label = 'News Article';

// 1. Create Content Type if it doesn't exist
if (!NodeType::load($bundle)) {
    $type = NodeType::create([
        'type' => $bundle,
        'name' => $bundle_label,
        'description' => 'News articles and updates for the IBEW website.',
        'display_submitted' => TRUE,
    ]);
    $type->save();
    echo "Created Content Type: $bundle\n";
} else {
    echo "Content Type $bundle already exists\n";
}

// Helper to create field
function create_field_if_missing($entity_type, $bundle, $field_name, $field_type, $label, $cardinality = 1)
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
    } else {
        echo "Storage $field_name already exists\n";
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
    } else {
        echo "Instance $field_name on $bundle already exists\n";
    }
}

// 2. Add Body field
// Body field is special in node types, usually added via node_add_body_field
if (!FieldConfig::loadByName('node', $bundle, 'body')) {
    node_add_body_field(NodeType::load($bundle), 'Body');
    echo "Added Body field\n";
}

// 3. Add Image field (field_image)
create_field_if_missing('node', $bundle, 'field_image', 'image', 'Featured Image');

// 4. Add "Published By" (field_published_by) - Text field
create_field_if_missing('node', $bundle, 'field_published_by', 'string', 'Published By');

// 5. Configure Form Display (Enable fields so they show up in "Add Content")
$form_display = \Drupal::service('entity_display.repository')->getFormDisplay('node', $bundle, 'default');
if (!$form_display) {
    $form_display = EntityFormDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => $bundle,
        'mode' => 'default',
        'status' => TRUE,
    ]);
}

// Set components in form display
$form_display->setComponent('title', [
    'type' => 'string_textfield',
    'weight' => -5,
])
    ->setComponent('body', [
        'type' => 'text_textarea_with_summary',
        'weight' => 1,
    ])
    ->setComponent('field_image', [
        'type' => 'image_image',
        'weight' => 2,
    ])
    ->setComponent('field_published_by', [
        'type' => 'string_textfield',
        'weight' => 3,
    ])
    ->setComponent('path', [
        'type' => 'path',
        'weight' => 30,
    ])
    ->setComponent('status', [
        'type' => 'boolean_checkbox',
        'weight' => 50,
    ])
    ->setComponent('uid', [
        'type' => 'entity_reference_autocomplete',
        'weight' => 5,
    ])
    ->setComponent('created', [
        'type' => 'datetime_timestamp',
        'weight' => 10,
    ])
    ->setComponent('promote', [
        'type' => 'boolean_checkbox',
        'weight' => 15,
    ])
    ->setComponent('sticky', [
        'type' => 'boolean_checkbox',
        'weight' => 16,
    ]);

$form_display->save();
echo "Updated Form Display for $bundle\n";

// 6. Configure View Display (Teaser & Default)
$view_display = \Drupal::service('entity_display.repository')->getViewDisplay('node', $bundle, 'default');
if (!$view_display) {
    $view_display = EntityViewDisplay::create([
        'targetEntityType' => 'node',
        'bundle' => $bundle,
        'mode' => 'default',
        'status' => TRUE,
    ]);
}
$view_display->setComponent('body', ['label' => 'hidden', 'type' => 'text_default'])
    ->setComponent('field_image', ['label' => 'hidden', 'type' => 'image', 'settings' => ['image_style' => 'large']])
    ->setComponent('field_published_by', ['label' => 'inline', 'type' => 'string'])
    ->save();
echo "Updated View Display for $bundle\n";

echo "Setup Complete.\n";
