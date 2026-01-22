<?php
$field_type = 'component_tree';
$formatters = \Drupal::service('plugin.manager.field.formatter')->getDefinitions();
$widgets = \Drupal::service('plugin.manager.field.widget')->getDefinitions();

echo "Formatters for $field_type:\n";
foreach ($formatters as $id => $def) {
    if (in_array($field_type, $def['field_types'])) {
        echo "- $id\n";
    }
}

echo "\nWidgets for $field_type:\n";
foreach ($widgets as $id => $def) {
    if (in_array($field_type, $def['field_types'])) {
        echo "- $id\n";
    }
}
