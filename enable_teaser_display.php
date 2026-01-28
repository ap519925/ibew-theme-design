<?php

use Drupal\Core\Entity\Entity\EntityViewDisplay;

echo "Enabling Teaser View Modes...\n";

// Helper to enable teaser
function enable_teaser($bundle)
{
    // Check if 'teaser' display exists, if not create it copying 'default' or fresh
    $display = EntityViewDisplay::load("node.$bundle.teaser");

    if (!$display) {
        $display = EntityViewDisplay::create([
            'targetEntityType' => 'node',
            'bundle' => $bundle,
            'mode' => 'teaser',
            'status' => true,
        ]);

        // Configure fields for Teaser
        // We want NO fields by default displayed by field formatter, because our twig template handles everything.
        // But we need the display object to exist so the view mode is valid.

        // Actually, for Twig control, we often hide everything or leave basic fields. 
        // Let's enable the fields we rely on just in case, though usually manual twig access works regardless of display settings properties 
        // (Wait, 'content' variable in twig relies on these settings, but 'node.field_X' works always).

        // Just creating the display object is usually enough to switch the view mode context.
        $display->save();
        echo "Created Teaser Display for $bundle\n";
    } else {
        $display->setStatus(true);
        $display->save();
        echo "Enabled Teaser Display for $bundle\n";
    }
}

try {
    // Ensure the View Mode entity exists first
    if (!\Drupal\Core\Entity\Entity\EntityViewMode::load('node.teaser')) {
        \Drupal\Core\Entity\Entity\EntityViewMode::create([
            'id' => 'node.teaser',
            'label' => 'Teaser',
            'targetEntityType' => 'node',
        ])->save();
        echo "Created 'node.teaser' view mode entity.\n";
    }

    enable_teaser('ibew_news');
    enable_teaser('ibew_event');
    echo "Teaser View Modes Active.\n";

} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
