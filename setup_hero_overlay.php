<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\NodeType;
use Drupal\block_content\Entity\BlockContentType;
use Drupal\paragraphs\Entity\ParagraphsType;

echo "Setting up Hero Overlay Structure...\n";

// 1. Create Paragraph Type: 'hero_button'
$paragraph_type = 'hero_button';
if (!ParagraphsType::load($paragraph_type)) {
    $paragraph_type_entity = ParagraphsType::create([
        'id' => $paragraph_type,
        'label' => 'Hero Button',
        'description' => 'A configurable button for the hero overlay.',
    ]);
    $paragraph_type_entity->save();
    echo "Created Paragraph Type: $paragraph_type\n";
}

// 1a. Add Fields to Paragraph
// Link Field
if (!FieldStorageConfig::loadByName('paragraph', 'field_link')) {
    FieldStorageConfig::create([
        'field_name' => 'field_link',
        'entity_type' => 'paragraph',
        'type' => 'link',
        'cardinality' => 1,
    ])->save();
}
if (!FieldConfig::loadByName('paragraph', $paragraph_type, 'field_link')) {
    FieldConfig::create([
        'field_name' => 'field_link',
        'entity_type' => 'paragraph',
        'bundle' => $paragraph_type,
        'label' => 'Link',
        'settings' => ['title' => 1, 'link_type' => 17], // Both internal and external
    ])->save();
}

// Style Field (List Text)
if (!FieldStorageConfig::loadByName('paragraph', 'field_button_style')) {
    FieldStorageConfig::create([
        'field_name' => 'field_button_style',
        'entity_type' => 'paragraph',
        'type' => 'list_string',
        'cardinality' => 1,
        'settings' => [
            'allowed_values' => [
                'gold' => 'Gold (Primary)',
                'blue' => 'Blue (Secondary)',
                'outline' => 'White Outline',
            ],
        ],
    ])->save();
}
if (!FieldConfig::loadByName('paragraph', $paragraph_type, 'field_button_style')) {
    FieldConfig::create([
        'field_name' => 'field_button_style',
        'entity_type' => 'paragraph',
        'bundle' => $paragraph_type,
        'label' => 'Button Style',
        'required' => true,
        'settings' => [],
    ])->save();
}

// 2. Create Block Content Type: 'hero_overlay'
$block_type = 'hero_overlay';
if (!BlockContentType::load($block_type)) {
    $block_type_entity = BlockContentType::create([
        'id' => $block_type,
        'label' => 'Hero Overlay',
        'description' => 'Overlay content for the homepage hero slider.',
    ]);
    $block_type_entity->save();
    echo "Created Block Type: $block_type\n";
}

// 2a. Add Fields to Block Type
// Reuse or Create Body/Description field? Let's generic 'field_hero_description' (Text Long)
if (!FieldStorageConfig::loadByName('block_content', 'field_hero_description')) {
    FieldStorageConfig::create([
        'field_name' => 'field_hero_description',
        'entity_type' => 'block_content',
        'type' => 'string_long', // Simple text area, no CKEditor needed per se, but 'text_long' is better for lines.
        'cardinality' => 1,
    ])->save();
}
if (!FieldConfig::loadByName('block_content', $block_type, 'field_hero_description')) {
    FieldConfig::create([
        'field_name' => 'field_hero_description',
        'entity_type' => 'block_content',
        'bundle' => $block_type,
        'label' => 'Description',
        'required' => true,
    ])->save();
}

// Title field? block_content has a label, but usually that's admin title.
// Let's add 'field_display_title'
if (!FieldStorageConfig::loadByName('block_content', 'field_display_title')) {
    FieldStorageConfig::create([
        'field_name' => 'field_display_title',
        'entity_type' => 'block_content',
        'type' => 'string',
        'cardinality' => 1,
    ])->save();
}
if (!FieldConfig::loadByName('block_content', $block_type, 'field_display_title')) {
    FieldConfig::create([
        'field_name' => 'field_display_title',
        'entity_type' => 'block_content',
        'bundle' => $block_type,
        'label' => 'Display Title',
        'required' => true,
    ])->save();
}

// Buttons Field (Reference to Paragraph using Entity Reference Revisions)
if (!FieldStorageConfig::loadByName('block_content', 'field_hero_actions')) {
    FieldStorageConfig::create([
        'field_name' => 'field_hero_actions',
        'entity_type' => 'block_content',
        'type' => 'entity_reference_revisions',
        'cardinality' => -1, // Unlimited
        'settings' => [
            'target_type' => 'paragraph',
        ],
    ])->save();
}
if (!FieldConfig::loadByName('block_content', $block_type, 'field_hero_actions')) {
    FieldConfig::create([
        'field_name' => 'field_hero_actions',
        'entity_type' => 'block_content',
        'bundle' => $block_type,
        'label' => 'Action Buttons',
        'settings' => [
            'handler' => 'default:paragraph',
            'handler_settings' => [
                'target_bundles' => [
                    'hero_button' => 'hero_button',
                ],
            ],
        ],
    ])->save();
}


// 3. Configure Form Display (Simple default)
$entity_form_display = \Drupal::service('entity_display.repository')
    ->getFormDisplay('block_content', $block_type, 'default');
$entity_form_display
    ->setComponent('field_display_title', ['type' => 'string_textfield', 'weight' => 0])
    ->setComponent('field_hero_description', ['type' => 'string_textarea', 'weight' => 1])
    ->setComponent('field_hero_actions', [
        'type' => 'paragraph_experimental',
        'weight' => 2,
        'settings' => [
            'title' => 'Button',
            'title_plural' => 'Buttons',
            'edit_mode' => 'open',
        ]
    ])
    ->save();

echo "Hero Overlay Structure Setup Complete.\n";
