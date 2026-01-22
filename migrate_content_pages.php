<?php

use Drupal\node\Entity\Node;
use Drupal\menu_link_content\Entity\MenuLinkContent;

echo "Migrating Key Content Pages...\n";

// Helper function to create page + menu link
function create_migrated_page($title, $body_html, $menu_title, $parent_menu_link_id = null)
{
    // Check if node exists to avoid duplicates
    $query = \Drupal::entityQuery('node')
        ->condition('type', 'page')
        ->condition('title', $title)
        ->accessCheck(FALSE);
    $nids = $query->execute();

    if (!empty($nids)) {
        echo "Page exists: $title\n";
        $node = Node::load(reset($nids));
    } else {
        $node = Node::create([
            'type' => 'page',
            'title' => $title,
            'body' => [
                'value' => $body_html,
                'format' => 'full_html',
            ],
            'status' => 1,
            'uid' => 1,
        ]);
        $node->save();
        echo "Created Page: $title\n";
    }

    // Create Menu Link
    // We want to add it to 'main' menu.
    if ($menu_title) {
        // Check link existence by title ?? simple check
        // Simplification: Always create for now or check via hash.
        // Real migration would map IDs.

        $menu_link_data = [
            'title' => $menu_title,
            'link' => ['uri' => 'entity:node/' . $node->id()],
            'menu_name' => 'main',
            'expanded' => TRUE,
        ];

        if ($parent_menu_link_id) {
            $menu_link_data['parent'] = $parent_menu_link_id;
        }

        $menu_link = MenuLinkContent::create($menu_link_data);
        $menu_link->save();

        return $menu_link->getPluginId();
    }

    return null;
}


// --- 1. ABOUT SECTION ---
// Parent: About
// Child pages: History, 4 Myths, Green Buildings

// Parent "About" (Using the About Node we might have already, or create new container)
$about_id = create_migrated_page(
    'About IBEW 90',
    '<h2>About IBEW Local 90</h2><p>For over 100 years, IBEW Local 90 has been powering New Haven and the surrounding communities...</p><p>(Content placeholder for full About page)</p>',
    'About'
);

create_migrated_page(
    'History',
    '<h2>Our History</h2><p>New Haven, Connecticut was first chartered into the International Brotherhood of Electrical Workers on December 16, 1892...</p>',
    'History',
    $about_id
);

create_migrated_page(
    '4 Myths About Affiliated Electricians',
    '<h2>Debunking Myths</h2><p>Content regarding common misconceptions about union electricians...</p>',
    '4 Myths',
    $about_id
);

create_migrated_page(
    'Green Buildings & Climate Resilience',
    '<h2>Green Energy Initiatives</h2><p>IBEW 90 is at the forefront of renewable energy projects in Connecticut...</p>',
    'Green Buildings',
    $about_id
);

// --- 2. TRAINING ---
$training_id = create_migrated_page(
    'Training',
    '<h2>JATC Training</h2><p>Information about our Joint Apprenticeship and Training Committee programs...</p>',
    'Training'
);

// --- 3. APPRENTICESHIP ---
$apprentice_id = create_migrated_page(
    'Apprenticeship',
    '<h2>Become an Apprentice</h2><p>Interested in a career? The apprenticeship program is a 5-year rigorous training course...</p>',
    'Apprenticeship'
);

// --- 4. CONTRACTORS ---
$contractors_id = create_migrated_page(
    'Signatory Contractors',
    '<h2>Our Partners</h2><p>We work with over 100 Signatory Contractors in the region. Choosing a union contractor guarantees quality and safety.</p>',
    'Contractors'
);

create_migrated_page(
    'Tell Us About A Project',
    '<h2>Project Information</h2><p>Have a project coming up? Let us know so we can staff it with the best.</p>',
    'Project Info',
    $contractors_id
);

// --- 5. MEMBERS ---
$members_id = create_migrated_page(
    'Member Information',
    '<h2>Member Resources</h2><p>Access benefits, pension info, and important forms here.</p>',
    'Members'
);

create_migrated_page(
    'Benefits',
    '<h2>Your Benefits</h2><p>Details about health, welfare, and annuity funds...</p>',
    'Benefits',
    $members_id
);

create_migrated_page(
    'Pension',
    '<h2>Pension Fund</h2><p>Information regarding the IBEW Local 90 Pension Fund...</p>',
    'Pension',
    $members_id
);

// --- 6. GALLERIES ---
$gallery_id = create_migrated_page(
    'Galleries',
    '<h2>Photo Galleries</h2><p>Photos from past events, retirement dinners, and outings.</p>',
    'Galleries'
);

echo "Migration Complete.\n";
