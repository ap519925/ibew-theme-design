<?php

use Drupal\views\Views;
use Drupal\views\Entity\View;

$view_id = 'homepage_news';
// 1. Delete Existing
$view = View::load($view_id);
if ($view) {
    echo "Deleting existing view '$view_id'...\n";
    $view->delete();
}

// 2. Create New View configuration (Array structure closest to YAML export)
$config = [
    'langcode' => 'en',
    'status' => true,
    'dependencies' => [
        'config' => ['node.type.ibew_news'],
        'module' => ['node', 'user', 'views'],
    ],
    'id' => $view_id,
    'label' => 'Homepage News',
    'module' => 'views',
    'base_table' => 'node_field_data',
    'base_field' => 'nid',
    'core' => '11', // Drupal 11
    'display' => [
        'default' => [
            'display_plugin' => 'default',
            'id' => 'default',
            'display_title' => 'Master',
            'position' => 0,
            'display_options' => [
                'access' => ['type' => 'perm', 'options' => ['perm' => 'access content']],
                'cache' => ['type' => 'tag', 'options' => []],
                'query' => ['type' => 'views_query', 'options' => []],
                'exposed_form' => ['type' => 'basic', 'options' => []],
                'pager' => ['type' => 'some', 'options' => ['items_per_page' => 5, 'offset' => 0]],
                'style' => [
                    'type' => 'default', // Unformatted List
                ],
                'row' => [
                    'type' => 'entity:node', // Content
                    'options' => ['view_mode' => 'teaser'],
                ],
                'fields' => ['title' => ['id' => 'title', 'table' => 'node_field_data', 'field' => 'title', 'plugin_id' => 'field']],
                'filters' => [
                    'status' => ['id' => 'status', 'table' => 'node_field_data', 'field' => 'status', 'plugin_id' => 'boolean', 'value' => '1', 'group' => 1],
                    'type' => ['id' => 'type', 'table' => 'node_field_data', 'field' => 'type', 'plugin_id' => 'bundle', 'value' => ['ibew_news' => 'ibew_news'], 'group' => 1],
                ],
                'sorts' => [
                    'created' => ['id' => 'created', 'table' => 'node_field_data', 'field' => 'created', 'order' => 'DESC'],
                ],
                'title' => 'Latest News',
            ],
        ],
        'block_1' => [
            'display_plugin' => 'block',
            'id' => 'block_1',
            'display_title' => 'Block',
            'position' => 1,
            'display_options' => [
                'display_description' => '',
                'display_extenders' => [],
            ],
        ],
    ],
];

echo "Creating View '$view_id' from scratch...\n";
$view = View::create($config);
$view->save();
echo "View Saved.\n";

// 3. Ensure Events View is also reset to Unformatted/Teaser
$event_view_id = 'homepage_events';
$ev = View::load($event_view_id);
if ($ev) {
    echo "Resetting Events View to Unformatted/Teaser...\n";
    $displays = $ev->get('display');
    foreach ($displays as $id => &$d) {
        $d['display_options']['style']['type'] = 'default';
        $d['display_options']['row']['type'] = 'entity:node';
        $d['display_options']['row']['options'] = ['view_mode' => 'teaser'];
    }
    $ev->set('display', $displays);
    $ev->save();
}

echo "Done. Please clear cache.\n";
