<?php

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\node\Entity\Node;
use Drupal\block_content\Entity\BlockContent;

echo "Setting up External News capability...\n";

// 1. Add 'field_external_link' to 'ibew_news' content type
if (!FieldStorageConfig::loadByName('node', 'field_external_link')) {
    FieldStorageConfig::create([
        'field_name' => 'field_external_link',
        'entity_type' => 'node',
        'type' => 'link',
        'cardinality' => 1,
    ])->save();
    echo "Created Field Storage: field_external_link\n";
}

if (!FieldConfig::loadByName('node', 'ibew_news', 'field_external_link')) {
    FieldConfig::create([
        'field_name' => 'field_external_link',
        'entity_type' => 'node',
        'bundle' => 'ibew_news',
        'label' => 'External Link',
        'settings' => [
            'link_type' => 16, // Link::LINK_GENERIC
            'title' => 0, // Link::LINK_DISABLED
        ],
    ])->save();
    echo "Attached Field: field_external_link to ibew_news\n";
}

// 2. Add 'field_news_source' (Text) to label the source (e.g. "CNN", "IBEW.org")
if (!FieldStorageConfig::loadByName('node', 'field_news_source')) {
    FieldStorageConfig::create([
        'field_name' => 'field_news_source',
        'entity_type' => 'node',
        'type' => 'string',
        'cardinality' => 1,
    ])->save();
}

if (!FieldConfig::loadByName('node', 'ibew_news', 'field_news_source')) {
    FieldConfig::create([
        'field_name' => 'field_news_source',
        'entity_type' => 'node',
        'bundle' => 'ibew_news',
        'label' => 'News Source Name',
    ])->save();
}

// 3. Create Sample External News Content
$external_news = [
    [
        'title' => 'IBEW International President Announces New Initiatives',
        'date' => '2025-12-20',
        'source' => 'IBEW.org',
        'url' => 'http://www.ibew.org/media-center/Articles/24Daily/2403/240315_President',
        'image_url' => 'https://images.unsplash.com/photo-1577412647305-991150c7d163?q=80&w=1000&auto=format&fit=crop', // Meeting / Formal
    ],
    [
        'title' => 'Green Energy Construction Booms in New England',
        'date' => '2025-12-18',
        'source' => 'Energy News',
        'url' => 'https://example.com/green-energy',
        'image_url' => 'https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?q=80&w=1000&auto=format&fit=crop', // Solar
    ],
    [
        'title' => 'Department of Labor Updates Safety Guidelines',
        'date' => '2025-12-05',
        'source' => 'DOL.gov',
        'url' => 'https://www.dol.gov',
        'image_url' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop', // Construction Safety
    ]
];

// Helper to download/manage files (mocks file creation for simplicity)
// In a real script we'd download, but here we can't easily. 
// We will just create nodes. If images fail, they fail gracefully in template.

foreach ($external_news as $item) {
    // Check if exists
    $query = \Drupal::entityQuery('node')
        ->condition('type', 'ibew_news')
        ->condition('title', $item['title'])
        ->accessCheck(FALSE)
        ->execute();

    if (empty($query)) {
        $node = Node::create([
            'type' => 'ibew_news',
            'title' => $item['title'],
            'field_news_date' => $item['date'],
            'field_news_source' => $item['source'],
            'field_external_link' => ['uri' => $item['url']],
            'status' => 1,
            // We're skipping image download/attach for speed unless we want to reuse existing field logic
            // Let's assume the theme can handle missing images or use a placeholder
        ]);
        $node->save();
        echo "Created External News: " . $item['title'] . "\n";
    }
}

echo "External News Setup Complete.\n";
