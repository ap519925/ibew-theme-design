<?php

use Drupal\views\Entity\View;
use Drupal\yml\Yaml;

// Define the View Config Array (Exported structure for simplicity)
$view_config = [
    'langcode' => 'en',
    'status' => true,
    'dependencies' => [
        'config' => ['node.type.ibew_event'],
        'module' => ['node', 'user', 'views'],
    ],
    'id' => 'events_calendar',
    'label' => 'Events Calendar',
    'module' => 'views',
    'description' => 'Events listing page',
    'tag' => 'default',
    'base_table' => 'node_field_data',
    'base_field' => 'nid',
    'display' => [
        'default' => [
            'display_plugin' => 'default',
            'id' => 'default',
            'display_title' => 'Default',
            'position' => 0,
            'display_options' => [
                'access' => ['type' => 'perm', 'options' => ['perm' => 'access content']],
                'cache' => ['type' => 'tag', 'options' => []],
                'query' => ['type' => 'views_query', 'options' => []],
                'exposed_form' => [
                    'type' => 'basic',
                    'options' => [
                        'submit_button' => 'Filter',
                        'reset_button' => true,
                        'reset_button_label' => 'Reset',
                        'exposed_sorts_label' => 'Sort by',
                        'expose_sort_order' => true,
                        'sort_asc_label' => 'Asc',
                        'sort_desc_label' => 'Desc',
                    ],
                ],
                'pager' => [
                    'type' => 'full',
                    'options' => ['items_per_page' => 10, 'offset' => 0, 'id' => 0, 'total_pages' => 0, 'tags' => ['previous' => '‹ Previous', 'next' => 'Next ›']],
                ],
                'style' => [
                    'type' => 'grid', // Using Grid style for 2-col layout
                    'options' => [
                        'columns' => 2,
                        'automatic_width' => true,
                        'alignment' => 'horizontal',
                        'row_class_custom' => '',
                        'col_class_custom' => '',
                    ],
                ],
                'row' => [
                    'type' => 'entity:node',
                    'options' => ['view_mode' => 'teaser'],
                ],
                'fields' => [
                    'title' => [
                        'id' => 'title',
                        'table' => 'node_field_data',
                        'field' => 'title',
                        'label' => '',
                        'alter' => ['alter_text' => false, 'make_link' => false],
                        'element_label_colon' => false,
                    ],
                ],
                'filters' => [
                    'status' => [
                        'id' => 'status',
                        'table' => 'node_field_data',
                        'field' => 'status',
                        'value' => '1',
                        'group' => 1,
                        'expose' => ['operator' => false]
                    ],
                    'type' => [
                        'id' => 'type',
                        'table' => 'node_field_data',
                        'field' => 'type',
                        'value' => ['ibew_event' => 'ibew_event'],
                        'group' => 1
                    ],
                    'title' => [
                        'id' => 'title',
                        'table' => 'node_field_data',
                        'field' => 'title',
                        'operator' => 'contains',
                        'group' => 1,
                        'exposed' => true,
                        'expose' => [
                            'operator_id' => 'title_op',
                            'label' => 'Search events...',
                            'identifier' => 'title',
                            'remember' => false
                        ]
                    ]
                ],
                'sorts' => [
                    'field_event_date_value' => [
                        'id' => 'field_event_date_value',
                        'table' => 'node__field_event_date',
                        'field' => 'field_event_date_value',
                        'order' => 'ASC'
                    ]
                ],
                'title' => 'Events Calendar',
            ],
        ],
        'page_1' => [
            'display_plugin' => 'page',
            'id' => 'page_1',
            'display_title' => 'Page',
            'position' => 1,
            'display_options' => [
                'path' => 'events',
            ],
        ],
    ],
];

// Create or update view
$view = View::load('events_calendar');
if (!$view) {
    $view = View::create($view_config);
    $view->save();
    echo "Created 'events_calendar' view at /events\n";
} else {
    // Update existing? For now, we assume user doesn't have it or we overwrite simple properties if needed.
    // We won't overwrite aggressively to avoid breaking user customization if they edited it.
    echo "View 'events_calendar' already exists. Skipping creation.\n";
}

drupal_flush_all_caches();
