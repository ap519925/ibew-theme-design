<?php

use Drupal\views\Views;
use Drupal\views\Entity\View;

$view_id = 'homepage_news';
$view = View::load($view_id);

if (!$view) {
    echo "View '$view_id' not found. Creating it...\n";
    // If missing, we'd create it, but it should exist.
    exit(1);
}

echo "Updating View '$view_id'...\n";

// Get Executable
$executable = Views::getView($view_id);
$display_id = 'block_1'; // Assuming block_1 is the one placed. Check default too.

// Iterate displays to fix the row/style plugins
$displays = $view->get('display');

foreach ($displays as $id => &$display) {
    if ($id == 'default' || $id == 'block_1') {
        echo "Configuring display: $id\n";

        // 1. Set Style to Unformatted (default)
        // This ensures it uses views-view-unformatted.html.twig
        $display['display_options']['style']['type'] = 'default';
        $display['display_options']['style']['options'] = ['row_class' => '', 'default_row_class' => true, 'uses_fields' => false];

        // 2. Set Row to 'Content' (Entity)
        $display['display_options']['row']['type'] = 'entity:node';
        $display['display_options']['row']['options'] = [
            'view_mode' => 'teaser',
            'relationship' => 'none',
        ];

        echo " - Set Style to Unformatted\n";
        echo " - Set Row to Content (Teaser)\n";
    }
}

$view->set('display', $displays);
$view->save();

echo "View Saved Successfully.\n";

// Also check 'homepage_events'
$view_id = 'homepage_events';
$view = View::load($view_id);
if ($view) {
    echo "Updating View '$view_id'...\n";
    $displays = $view->get('display');
    foreach ($displays as $id => &$display) {
        if ($id == 'default' || $id == 'block_1') {
            // Set Style to Unformatted
            $display['display_options']['style']['type'] = 'default';
            // Set Row to Content (Teaser)
            $display['display_options']['row']['type'] = 'entity:node';
            $display['display_options']['row']['options'] = ['view_mode' => 'teaser'];
        }
    }
    $view->set('display', $displays);
    $view->save();
    echo "Events View Updated.\n";
}
