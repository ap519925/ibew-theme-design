<?php

use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;

echo "Populating Sample Content...\n";

// Helper to create content
function create_node($type, $title, $body, $date, $extra = [])
{
    $node_data = [
        'type' => $type,
        'title' => $title,
        'body' => [
            'value' => $body,
            'format' => 'full_html',
        ],
        'status' => 1,
        'created' => strtotime($date),
    ];

    // Merge extra fields
    $node_data = array_merge($node_data, $extra);

    $node = Node::create($node_data);
    $node->save();
    echo "Created $type: $title\n";
    return $node;
}

// Helper to get image
function fetch_image($url, $filename)
{
    $data = file_get_contents($url);
    if ($data) {
        $file = \Drupal::service('file.repository')->writeData($data, "public://$filename", \Drupal\Core\File\FileSystemInterface::EXISTS_REPLACE);
        return $file;
    }
    return null;
}

// 1. News: Toy Drive (Holiday/Gift Theme)
$toy_img = fetch_image('https://images.unsplash.com/photo-1512474932474-321f515ed530?q=80&w=1000&auto=format&fit=crop', 'toy_drive.jpg');
$toy_drive_body = '<p>Local 90 is proud to host our annual Toy Drive. Please bring new, unwrapped toys to the Union Hall by December 20th. Together we can make the holidays brighter for families in need.</p>';

create_node('ibew_news', 'Annual Holiday Toy Drive', $toy_drive_body, 'now', [
    'field_news_date' => date('Y-m-d'),
    'field_news_image' => $toy_img ? ['target_id' => $toy_img->id(), 'alt' => 'Toy Drive Gifts'] : [],
]);

// 2. News: Training Facility (Construction/Modern Theme)
$training_img = fetch_image('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1000&auto=format&fit=crop', 'training_center.jpg');
$training_body = '<p>We are excited to announce the opening of our expanded training center. This state-of-the-art facility will allow us to double our apprentice intake next year.</p>';

create_node('ibew_news', 'New State-of-the-Art Training Facility Opens', $training_body, '-1 day', [
    'field_news_date' => date('Y-m-d', strtotime('-1 day')),
    'field_news_image' => $training_img ? ['target_id' => $training_img->id(), 'alt' => 'Training Center'] : [],
]);

// 3. News: Community Project (Electrician/Work Theme)
$community_img = fetch_image('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=1000&auto=format&fit=crop', 'electrician_work.jpg');
$community_body = '<p>IBEW Local 90 members volunteered their weekend to upgrade the electrical systems at the local food bank. A huge thank you to everyone who participated!</p>';

create_node('ibew_news', 'Members Power Local Food Bank Upgrade', $community_body, '-5 days', [
    'field_news_date' => date('Y-m-d', strtotime('-5 days')),
    'field_news_image' => $community_img ? ['target_id' => $community_img->id(), 'alt' => 'Electrician Working'] : [],
]);


// 4. Events
$now = time();
$day = 86400;

create_node('ibew_event', 'Monthly Union Meeting', '<p>Regular monthly meeting for all members. Agenda includes contract updates.</p>', '+2 days', [
    'field_event_date' => date('Y-m-d\TH:i:s', $now + ($day * 2)),
    'field_event_location' => 'Union Hall, Wallingford',
]);

create_node('ibew_event', 'Safety Workshop: OSHA 10', '<p>Required safety certification course for new apprentices.</p>', '+5 days', [
    'field_event_date' => date('Y-m-d\TH:i:s', $now + ($day * 5)),
    'field_event_location' => 'Training Center',
]);

create_node('ibew_event', 'Apprentice Graduation Ceremony', '<p>Celebrating the class of 2025!</p>', '+12 days', [
    'field_event_date' => date('Y-m-d\TH:i:s', $now + ($day * 12)),
    'field_event_location' => 'Omni Hotel, New Haven',
]);

create_node('ibew_event', 'Community BBQ', '<p>Family fun day at the park. Free food and drinks.</p>', '+20 days', [
    'field_event_date' => date('Y-m-d\TH:i:s', $now + ($day * 20)),
    'field_event_location' => 'City Park',
]);

echo "Sample Content Population Complete.\n";
