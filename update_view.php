<?php

use Drupal\views\Entity\View;

$config = \Drupal::service('config.factory')->getEditable('views.view.homepage_news');
$display = $config->get('display');

// Update Sorts
$display['default']['display_options']['sorts'] = [
    'field_published_date_value' => [
        'id' => 'field_published_date_value',
        'table' => 'node__field_published_date',
        'field' => 'field_published_date_value',
        'plugin_id' => 'date',
        'order' => 'DESC',
    ]
];

// Ensure Filter is correct (it was already news_article in the dump, but let's be safe)
// $display['default']['display_options']['filters']['type']['value'] = ['news_article' => 'news_article'];

$config->set('display', $display);
$config->save();

echo "Update homepage_news view configuration.\n";
