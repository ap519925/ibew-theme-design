<?php

use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;

// 1. Define Articles from the external site
$articles = [
    [
        'title' => 'Offshore Wind Petition',
        'body' => 'Sign The Equitable Offshore Wind Petition. Ensure that green jobs are union jobs. We are calling on all members to support this initiative for fair labor practices in the offshore wind sector.',
        'date' => '2024-03-25',
        'image_url' => 'https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop', // Windfarm
    ],
    [
        'title' => 'Important Updates: NEBF Benefit',
        'body' => 'IMPORTANT UPDATES ABOUT THE NEBF LIAISON ALERT MARCH 2024. We are excited to announce significant improvements to the National Electrical Benefit Fund (NEBF) that will directly benefit our respective members across the country. After careful consideration and analysis, the NEBF Trustees and the National Employees Benefit Board (NEBB) have announced the "Fresh Start" Amendment.',
        'date' => '2024-03-15',
        'image_url' => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=2070&auto=format&fit=crop', // Business/Benefits
    ],
    [
        'title' => 'IBEW 2024 Presidential Endorsement',
        'body' => 'Below you will find a notification from IBEW President Kenneth Cooper regarding the 2024 Presidential Endorsement. "Dear Sisters and Brothers, I request that you read this letter aloud at the start of the next local union meeting." Ensure you are informed about the upcoming election cycle.',
        'date' => '2024-02-20',
        'image_url' => 'https://images.unsplash.com/photo-1575320181502-90999d20c73c?q=80&w=2070&auto=format&fit=crop', // Flag/Vote
    ],
    [
        'title' => 'Lower Hudson Valley E.A.P.',
        'body' => 'Lower Hudson Valley has created an app for your smartphone to have easy, convenient access to care. The app is free and completely confidential. Please download it on your smartphone so it is there if or when you may need it.',
        'date' => '2024-01-10',
        'image_url' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop', // Health/Phone
    ]
];

// Helper to download image
function download_image_as_file($url, $filename)
{
    $data = file_get_contents($url);
    if (!$data)
        return null;
    $file = \Drupal::service('file.repository')->writeData($data, "public://$filename", \Drupal\Core\File\FileSystemInterface::EXISTS_REPLACE);
    return $file;
}

echo "Starting News Import (Content Type: news_article)...\n";

foreach ($articles as $index => $item) {
    // Check if exists
    $exists = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['title' => $item['title'], 'type' => 'news_article']);
    if ($exists) {
        echo " - Skipping existing article: " . $item['title'] . "\n";
        continue;
    }

    // Download Image
    $image_filename = 'news_import_' . $index . '.jpg';
    echo " - Downloading image for: " . $item['title'] . "\n";
    $file = download_image_as_file($item['image_url'], $image_filename);
    $image_target_id = $file ? $file->id() : null;

    // Create Node
    $node = Node::create([
        'type' => 'news_article',
        'title' => $item['title'],
        'body' => [
            'value' => $item['body'],
            'format' => 'basic_html', // or full_html
        ],
        'field_image' => [
            'target_id' => $image_target_id,
            'alt' => $item['title'],
        ],
        'field_date_published' => [
            'value' => $item['date']
        ],
        'field_news_category' => [
            'value' => 'Local 90 News', // Default tag
        ],
        'status' => 1,
        'uid' => 1,
    ]);

    $node->save();
    echo "Created Node: " . $node->getTitle() . " (ID: " . $node->id() . ")\n";
}

echo "Import Complete.\n";
