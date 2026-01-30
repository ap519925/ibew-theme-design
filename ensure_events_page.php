<?php

use Drupal\node\Entity\Node;

// Check if /events alias exists
$alias = '/events';
$path = \Drupal::service('path_alias.manager')->getPathByAlias($alias);

if ($path === $alias) {
    // Alias doesn't exist (returned itself), so let's check if we just need to create the node
    echo "Creating Events Page node...\n";
    $node = Node::create([
        'type' => 'page',
        'title' => 'Events Calendar',
        'path' => ['alias' => '/events'],
        'uid' => 1,
        'status' => 1,
    ]);
    $node->save();
    echo "Node created with alias /events (NID: " . $node->id() . ")\n";
} else {
    echo "Path $alias already exists (points to $path).\n";
}

drupal_flush_all_caches();
