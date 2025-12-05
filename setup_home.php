<?php

use Drupal\node\Entity\Node;

// Check if a Home node already exists to avoid duplicates
$query = \Drupal::entityQuery('node')
  ->condition('type', 'page')
  ->condition('title', 'Home')
  ->accessCheck(FALSE);
$nids = $query->execute();

if (!empty($nids)) {
  $nid = reset($nids);
  echo "Home node already exists: " . $nid . "\n";
} else {
  $node = Node::create([
    'type' => 'page',
    'title' => 'Home',
    'status' => 1,
    'body' => [
      'value' => '<p>Welcome to IBEW Local 90.</p>',
      'format' => 'basic_html',
    ],
  ]);
  $node->save();
  $nid = $node->id();
  echo "Created Home node: " . $nid . "\n";
}

// Set as front page
\Drupal::configFactory()->getEditable('system.site')->set('page.front', '/node/' . $nid)->save();
echo "Set /node/" . $nid . " as front page.\n";
