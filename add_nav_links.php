<?php

use Drupal\menu_link_content\Entity\MenuLinkContent;

$menu_name = 'main';
$link_uri = 'internal:/events';
$link_title = 'Events';

// Check if standard content links exist, if not create them to populate the menu
$links_to_ensure = [
    '/about' => 'About',
    '/events' => 'Events',
    '/training' => 'Training',
    '/contractors' => 'Contractors',
    '/members' => 'Members',
    '/contact' => 'Contact'
];

foreach ($links_to_ensure as $path => $title) {
    $ids = \Drupal::entityQuery('menu_link_content')
        ->condition('menu_name', $menu_name)
        ->condition('link.uri', 'internal:' . $path)
        ->accessCheck(FALSE)
        ->execute();

    if (empty($ids)) {
        MenuLinkContent::create([
            'title' => $title,
            'link' => ['uri' => 'internal:' . $path],
            'menu_name' => $menu_name,
            'weight' => 0,
            'expanded' => TRUE,
        ])->save();
        echo "Added '$title' ($path) to Main Menu.\n";
    } else {
        echo "Link '$title' already exists in Main Menu.\n";
    }
}

drupal_flush_all_caches();
