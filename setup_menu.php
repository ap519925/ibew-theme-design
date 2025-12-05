<?php

use Drupal\menu_link_content\Entity\MenuLinkContent;

$links = [
    'About' => 'route:<nolink>',
    'Events' => 'route:<nolink>',
    'Training' => 'route:<nolink>',
    'Contractors' => 'route:<nolink>',
    'Members' => 'route:<nolink>',
    'Resources' => 'route:<nolink>',
];

foreach ($links as $title => $uri) {
    $existing = \Drupal::entityQuery('menu_link_content')
        ->condition('menu_name', 'main')
        ->condition('title', $title)
        ->accessCheck(FALSE)
        ->execute();

    if (empty($existing)) {
        MenuLinkContent::create([
            'title' => $title,
            'link' => ['uri' => $uri],
            'menu_name' => 'main',
            'expanded' => TRUE,
        ])->save();
        echo "Created menu link: $title\n";
    } else {
        echo "Menu link already exists: $title\n";
    }
}
