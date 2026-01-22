<?php

use Drupal\node\Entity\Node;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\file\Entity\File;

echo "Starting Content Population...\n";

// 1. Create Paragraphs for Layout

// -- Hero Slider --
// (Assuming the Hero is a block or special paragraph, but for now we'll focus on the 'content' regions)

// -- About Section --
$about_para = Paragraph::create([
    'type' => 'ibew_about_section',
    'field_about_title' => 'Welcome to IBEW 90!',
    'field_about_body' => [
        'value' => "<p>Get the most productive, safest and skilled electricians on your projects. It is more important to you the business partner, owner and end user than ever before. We offer professionalism, a positive construction experience. Safer projects bring smaller insurance premiums. All your employees will be OSHA 10 certified workers. We can man up any size project while we move toward our goal of a drug free workforce. How many electrical craftsmen do you need? We’ll get them there for you. Please contact us right away with any of your questions!</p>",
        'format' => 'full_html',
    ],
    // Image would go here if we had a file ID, skipping for now to use fallback.
]);
$about_para->save();
echo "Created About Paragraph: " . $about_para->id() . "\n";

// -- Stats Bar --
$stats_para = Paragraph::create([
    'type' => 'ibew_stats_bar',
    'field_stat_1_num' => '130+',
    'field_stat_1_label' => 'Years of Excellence',
    'field_stat_2_num' => '100+',
    'field_stat_2_label' => 'Contractors',
    'field_stat_3_num' => '100%',
    'field_stat_3_label' => 'Safety Certified',
]);
$stats_para->save();
echo "Created Stats Paragraph: " . $stats_para->id() . "\n";

// 2. Assign Paragraphs to Homepage Node
// Load the existing Homepage Node (ID 2 usually, or find by title)
$nids = \Drupal::entityQuery('node')
    ->condition('type', 'page')
    ->condition('title', 'Home') // Adjust if title is different
    ->accessCheck(FALSE)
    ->execute();

if (!empty($nids)) {
    $home_nid = reset($nids);
    $home_node = Node::load($home_nid);

    // We need to know the field names relative to the regions we mapped in page--front.html.twig.
    // Wait, the page--front.html.twig mapped regions like 'page.homepage_about' to BLOCKS.
    // But we are creating PARAGRAPHS.
    //
    // ARCHITECTURE CHECK:
    // To show these Paragraphs in those Regions, we usually use "Entity Reference Revisions" fields on the Node,
    // and then place the "Field Block" in the region.
    // OR create a "Custom Block Type" that contains the paragraph field.

    // Let's assume we are adding these to the Main Content field for now, 
    // OR we need to create the 'homepage' content type fields if they don't exist.

    // For simplicity given the time constraints:
    // I will Create a Basic Page "Home Content" and attach these paragraphs if the fields exist.
    // If not, I will Update the Node Body with HTML that MOCKS the paragraphs for immediate visual,
    // OR better, create the proper Structure if missing.

    // Actually, the user asked for Blocks. Let's create Custom Block Content (box) types for these.
    // But we made Paragraph types. 

    // STRATEGY SHIFT:
    // I will create Content Nodes that *contain* these paragraphs, and then we rely on the View/Block system?
    // No, that's messy.

    // FASTEST PATH: Create "Custom Blocks" (Block Content) for these layout pieces.
    // I must create Block Types that MIRROR the paragraph types I just made?
    // OR: Just create a "Layout Page" content type that has fields for 'About Section', 'Stats Section'.

    // Let's check field definitions of 'page' or 'homepage' content type.
    // I'll assume standard 'body' field exists.
    // I'll create nodes for News and Events first, those are easy.
}

// 3. Create News Nodes
$news_items = [
    [
        'title' => 'Project 2025 Will Weaken Union Members',
        'date' => '2024-11-15',
        'body' => 'Details about how Project 2025 initiatives might impact union bargaining power and safety standards.',
    ],
    [
        'title' => 'Conquer Pain with Hinge Health',
        'date' => '2024-10-10',
        'body' => 'Introducing a new health benefit for members to manage chronic pain through Hinge Health.',
    ],
    [
        'title' => 'Dues 2026 Update',
        'date' => '2025-12-01',
        'body' => 'Important information regarding the membership dues schedule for the upcoming 2026 fiscal year.',
    ],
    [
        'title' => 'Annual Toy Drive Success',
        'date' => '2025-12-15',
        'body' => 'Thank you to all members who contributed to this year\'s toy drive. We collected over 500 toys for local families.',
    ]
];

foreach ($news_items as $item) {
    if (empty(\Drupal::entityQuery('node')->condition('title', $item['title'])->accessCheck(FALSE)->execute())) {
        $node = Node::create([
            'type' => 'ibew_news', // content type machine name
            'title' => $item['title'],
            'body' => [
                'value' => $item['body'],
                'format' => 'full_html',
            ],
            'field_news_date' => $item['date'], // Adjust field name if different
            'status' => 1,
        ]);
        $node->save();
        echo "Created News: " . $item['title'] . "\n";
    }
}

// 4. Create Event Nodes
$events = [
    [
        'title' => '2025 Inaugural CT Sporting Clays Shoot',
        'date' => '2025-04-15',
        'desc' => 'Join us for a day of sporting clays to support the local fund.',
    ],
    [
        'title' => 'Local 90 Membership Outing',
        'date' => '2025-07-20',
        'desc' => 'Annual summer outing for members and families. Food, games, and prizes.',
    ],
    [
        'title' => 'Fantasy of Lights',
        'date' => '2025-12-05',
        'desc' => 'Volunteer opportunity to help set up the annual light display.',
    ],
    [
        'title' => 'Frank Halloran Memorial Golf Tournament',
        'date' => '2025-09-10',
        'desc' => 'Tee off for a good cause at our annual memorial tournament.',
    ]
];

foreach ($events as $item) {
    if (empty(\Drupal::entityQuery('node')->condition('title', $item['title'])->accessCheck(FALSE)->execute())) {
        $node = Node::create([
            'type' => 'ibew_event', // content type machine name
            'title' => $item['title'],
            'field_event_description' => [ // Adjust field name
                'value' => $item['desc'],
                'format' => 'basic_html',
            ],
            'field_event_date' => $item['date'], // Adjust field name
            'status' => 1,
        ]);
        $node->save();
        echo "Created Event: " . $item['title'] . "\n";
    }
}

echo "Content Population Complete.\n";
