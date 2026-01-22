<?php

use Drupal\views\Entity\View;
use Drupal\Core\Serialization\Yaml;

$config_storage = \Drupal::service('config.storage');
$install_storage = \Drupal::service('config.storage'); // In real module, this would form module install.

// We will creating Views by creating their Config Objects directly.
// This is faster than using the Views API for one-off setup.

// 1. Homepage News View Configuration
$news_view_config = [
    'langcode' => 'en',
    'status' => true,
    'dependencies' => [
        'module' => ['node', 'user'],
    ],
    'id' => 'homepage_news',
    'label' => 'Homepage News',
    'module' => 'views',
    'base_table' => 'node_field_data',
    'core' => '10',
    'display' => [
        'default' => [
            'display_plugin' => 'default',
            'id' => 'default',
            'display_title' => 'Default',
            'position' => 0,
            'display_options' => [
                'access' => ['type' => 'perm', 'options' => ['perm' => 'access content']],
                'cache' => ['type' => 'tag'],
                'query' => ['type' => 'views_query'],
                'exposed_form' => ['type' => 'basic'],
                'pager' => ['type' => 'some', 'options' => ['items_per_page' => 3]],
                'style' => ['type' => 'default'],
                'row' => ['type' => 'entity:node', 'options' => ['view_mode' => 'teaser']], // Critical: Use Teaser Mode
                'fields' => ['title' => ['id' => 'title', 'table' => 'node_field_data', 'field' => 'title', 'plugin_id' => 'field']],
                'filters' => [
                    'status' => ['id' => 'status', 'table' => 'node_field_data', 'field' => 'status', 'plugin_id' => 'boolean', 'value' => '1'],
                    'type' => ['id' => 'type', 'table' => 'node_field_data', 'field' => 'type', 'plugin_id' => 'bundle', 'value' => ['ibew_news' => 'ibew_news']],
                ],
                'sorts' => [
                    'created' => ['id' => 'created', 'table' => 'node_field_data', 'field' => 'created', 'plugin_id' => 'date', 'order' => 'DESC'],
                ],
            ],
        ],
        'block_1' => [
            'display_plugin' => 'block',
            'id' => 'block_1',
            'display_title' => 'News Grid Block',
            'position' => 1,
            'display_options' => [
                'display_description' => 'News items for homepage',
                'block_description' => 'Homepage News Grid',
            ],
        ],
    ],
];

// 2. Homepage Events View Configuration
$events_view_config = [
    'langcode' => 'en',
    'status' => true,
    'dependencies' => ['module' => ['node']],
    'id' => 'homepage_events',
    'label' => 'Homepage Events',
    'module' => 'views',
    'base_table' => 'node_field_data',
    'core' => '10',
    'display' => [
        'default' => [
            'display_plugin' => 'default',
            'id' => 'default',
            'display_title' => 'Default',
            'position' => 0,
            'display_options' => [
                'access' => ['type' => 'perm', 'options' => ['perm' => 'access content']],
                'cache' => ['type' => 'tag'],
                'query' => ['type' => 'views_query'],
                'exposed_form' => ['type' => 'basic'],
                'pager' => ['type' => 'some', 'options' => ['items_per_page' => 4]],
                'style' => ['type' => 'default'],
                'row' => ['type' => 'entity:node', 'options' => ['view_mode' => 'teaser']], // Critical: Use Teaser Mode
                'filters' => [
                    'status' => ['id' => 'status', 'table' => 'node_field_data', 'field' => 'status', 'plugin_id' => 'boolean', 'value' => '1'],
                    'type' => ['id' => 'type', 'table' => 'node_field_data', 'field' => 'type', 'plugin_id' => 'bundle', 'value' => ['ibew_event' => 'ibew_event']],
                ],
                'sorts' => [
                    'field_event_date_value' => ['id' => 'field_event_date_value', 'table' => 'node__field_event_date', 'field' => 'field_event_date_value', 'plugin_id' => 'standard', 'order' => 'ASC'],
                ],
            ],
        ],
        'block_1' => [
            'display_plugin' => 'block',
            'id' => 'block_1',
            'display_title' => 'Events List Block',
            'position' => 1,
            'display_options' => [
                'block_description' => 'Homepage Events List',
            ],
        ],
    ],
];

// Helper to save view
function save_view_config($config_data)
{
    $view = \Drupal\views\Entity\View::create($config_data);
    $view->save();
    echo "Created View: " . $config_data['label'] . "\n";
}

// Check and Save
if (!View::load('homepage_news')) {
    save_view_config($news_view_config);
} else {
    echo "View 'homepage_news' already exists.\n";
}

if (!View::load('homepage_events')) {
    save_view_config($events_view_config);
} else {
    echo "View 'homepage_events' already exists.\n";
}
