<?php

use Drupal\paragraphs\Entity\ParagraphsType;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\core\Entity\Entity\EntityFormDisplay;
use Drupal\core\Entity\Entity\EntityViewDisplay;

/**
 * Helper to create a Paragraph Type
 */
function create_paragraph_type($id, $label, $description = '')
{
    if (!ParagraphsType::load($id)) {
        ParagraphsType::create([
            'id' => $id,
            'label' => $label,
            'description' => $description,
        ])->save();
        echo "Created Paragraph: $label\n";
    }
}

/**
 * Helper to create a Field on a Paragraph
 */
function create_paragraph_field($bundle, $field_name, $label, $type, $widget = 'string_textfield', $formatter = 'string')
{
    $entity_type = 'paragraph';

    // 1. Storage
    if (!FieldStorageConfig::loadByName($entity_type, $field_name)) {
        FieldStorageConfig::create([
            'field_name' => $field_name,
            'entity_type' => $entity_type,
            'type' => $type,
            'cardinality' => ($type == 'image' || $type == 'entity_reference_revisions') ? 1 : 1, // Default to 1
        ])->save();
    }

    // 2. Instance
    if (!FieldConfig::loadByName($entity_type, $bundle, $field_name)) {
        FieldConfig::create([
            'field_name' => $field_name,
            'entity_type' => $entity_type,
            'bundle' => $bundle,
            'label' => $label,
        ])->save();

        // 3. Form Display
        $form_display = \Drupal::service('entity_display.repository')->getFormDisplay($entity_type, $bundle);
        $form_display->setComponent($field_name, ['type' => $widget])->save();

        // 4. View Display
        $view_display = \Drupal::service('entity_display.repository')->getViewDisplay($entity_type, $bundle);
        $view_display->setComponent($field_name, ['type' => $formatter])->save();
    }
}

// --- 1. About / Welcome Section ---
// Simple text blog + optional image
create_paragraph_type('ibew_about_section', 'About Section');
create_paragraph_field('ibew_about_section', 'field_about_title', 'Title', 'string');
create_paragraph_field('ibew_about_section', 'field_about_body', 'Body', 'text_long', 'text_textarea', 'text_default');
create_paragraph_field('ibew_about_section', 'field_about_image', 'Image', 'image', 'image_image', 'image');

// --- 2. Stats Bar ---
// A container for stats. Ideally uses a nested "Stat Item" or just simplified fields.
// Let's use simple fields for robustness now.
create_paragraph_type('ibew_stats_bar', 'Stats Bar');
create_paragraph_field('ibew_stats_bar', 'field_stat_1_num', 'Stat 1 Number', 'string');
create_paragraph_field('ibew_stats_bar', 'field_stat_1_label', 'Stat 1 Label', 'string');
create_paragraph_field('ibew_stats_bar', 'field_stat_2_num', 'Stat 2 Number', 'string');
create_paragraph_field('ibew_stats_bar', 'field_stat_2_label', 'Stat 2 Label', 'string');
create_paragraph_field('ibew_stats_bar', 'field_stat_3_num', 'Stat 3 Number', 'string');
create_paragraph_field('ibew_stats_bar', 'field_stat_3_label', 'Stat 3 Label', 'string');

// --- 3. CTA Strip ---
// High impact call to action
create_paragraph_type('ibew_cta_strip', 'CTA Strip');
create_paragraph_field('ibew_cta_strip', 'field_cta_text', 'Main Text', 'string');
create_paragraph_field('ibew_cta_strip', 'field_cta_link', 'Link', 'link', 'link_default', 'link');

echo "Paragraph Types Setup Complete.\n";
