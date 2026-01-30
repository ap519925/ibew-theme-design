<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\block\Entity\Block;

// 1. Force delete the specific broken config if it can be found by ID
$broken_ids = [
    'block.block.ibew_theme_homepage_about',
    'block.block.homepage_about' // Check generic name too
];

foreach ($broken_ids as $id) {
    $config = \Drupal::configFactory()->getEditable($id);
    if (!$config->isNew()) {
        echo "Deleting old config: $id\n";
        $config->delete();
    }
}

// 2. Also delete any block in 'homepage_about' region just to be safe (Clean Slate)
$existing_blocks = \Drupal::entityTypeManager()->getStorage('block')->loadByProperties(['theme' => 'ibew_theme', 'region' => 'homepage_about']);
foreach ($existing_blocks as $block) {
    echo "Removing existing block placement: " . $block->id() . "\n";
    $block->delete();
}

// 3. Create New Content
$block_content = BlockContent::create([
    'type' => 'basic',
    'info' => 'Homepage About Intro',
    'body' => [
        'value' => '
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="display-5 fw-bold font-oswald text-uppercase text-dark mb-4">Welcome to IBEW Local 90</h2>
                <p class="lead text-secondary mb-4">
                    Serving our community with excellence in electrical work since 1892. 
                    We are dedicated to bettering the lives of our members and the community through strict adherence to the Code of Excellence.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/about" class="btn btn-primary btn-lg rounded-pill px-5">Our History</a>
                    <a href="/join" class="btn btn-outline-primary btn-lg rounded-pill px-5">Join Us</a>
                </div>
            </div>
        ',
        'format' => 'full_html',
    ],
]);
$block_content->save();
echo "Created new Block Content (UUID: " . $block_content->uuid() . ")\n";

// 4. Place the Block
$block = Block::create([
    'id' => 'ibew_theme_homepage_about_intro', // Unique ID
    'plugin' => 'block_content:' . $block_content->uuid(),
    'region' => 'homepage_about',
    'theme' => 'ibew_theme',
    'settings' => [
        'label' => 'About Intro',
        'label_display' => '0', // Hide Title
        'provider' => 'block_content',
    ],
    'weight' => 0,
]);
$block->save();
echo "Placed new Block in 'homepage_about'.\n";

drupal_flush_all_caches();
