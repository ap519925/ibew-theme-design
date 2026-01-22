<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\block\Entity\Block;
use Drupal\paragraphs\Entity\Paragraph;

echo "Placing Homepage Blocks...\n";

// 1. Create 'About' Block Content
$about_html = '
<div class="row align-items-center gy-5">
  <div class="col-lg-6">
    <div class="ibew-about-content pe-lg-5">
      <h2 class="display-5 fw-bold mb-4 font-oswald text-uppercase text-white">About IBEW 90</h2>
      <div class="lead text-muted mb-4">
        <p>New Haven, Connecticut was first chartered into the International Brotherhood of Electrical Workers on December 16, 1892, to be known as Local Union No. 20. On the first day of January, 1900, 15 electricians desiring to be organized into the IBEW became the listed electrical tradesman on an IBEW charter, which granted to Local 90 all of the inside jurisdiction in the city of New Haven and vicinity.</p>
        <p>The early years were filled with struggles for these men, both from inside the IBEW with divided factions and from outside of the organization. These members tried to prove to the community that unions were "skilled tradesmen who deserved respect and a better quality of life for their families."</p>
      </div>
      <a href="https://ibewlocal90.org/content/about-ibew-90" class="ibew-btn-lg ibew-btn--gold mt-2">Read Our History</a>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="ibew-image-wrapper position-relative rounded-4 overflow-hidden shadow-lg border border-white border-opacity-10">
       <!-- Mini Slideshow -->
       <section class="splide" aria-label="About Us Slideshow" data-splide=\'{"type":"fade","rewind":true,"autoplay":true,"interval":4000,"arrows":false,"pagination":true}\'>
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=1000&auto=format&fit=crop" class="img-fluid w-100 h-100 object-fit-cover" alt="Electrician wiring panel" style="min-height: 400px;">
              </li>
              <li class="splide__slide">
                <img src="https://images.unsplash.com/photo-1544724569-5f546fd6dd2d?q=80&w=1000&auto=format&fit=crop" class="img-fluid w-100 h-100 object-fit-cover" alt="Construction site sunset" style="min-height: 400px;">
              </li>
              <li class="splide__slide">
                <img src="https://plus.unsplash.com/premium_photo-1661962450893-b09e45041493?q=80&w=1000&auto=format&fit=crop" class="img-fluid w-100 h-100 object-fit-cover" alt="Electrical schematics" style="min-height: 400px;">
              </li>
            </ul>
          </div>
       </section>
       <!-- Overlay Gradient -->
       <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-to-t from-black/60 to-transparent pointer-events-none z-10"></div>
    </div>
  </div>
</div>';

$about_block = BlockContent::create([
  'info' => 'Homepage About Section',
  'type' => 'basic', // Standard block type
  'body' => [
    'value' => $about_html,
    'format' => 'full_html',
  ],
]);
$about_block->save();

// 2. Create 'Stats' Block Content
$stats_html = '
<div class="ibew-stats-container">
  <div class="row text-center g-4">
    <div class="col-md-4">
      <div class="ibew-stat-item p-4">
        <div class="display-3 fw-bold text-warning mb-2 font-oswald">130+</div>
        <div class="text-uppercase tracking-wider fw-semibold text-light small">Years of Excellence</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="ibew-stat-item p-4 border-start border-end border-white border-opacity-10">
        <div class="display-3 fw-bold text-warning mb-2 font-oswald">100+</div>
        <div class="text-uppercase tracking-wider fw-semibold text-light small">Contractors</div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="ibew-stat-item p-4">
        <div class="display-3 fw-bold text-warning mb-2 font-oswald">100%</div>
        <div class="text-uppercase tracking-wider fw-semibold text-light small">Safety Certified</div>
      </div>
    </div>
  </div>
</div>';

$stats_block = BlockContent::create([
  'info' => 'Homepage Stats Bar',
  'type' => 'basic',
  'body' => [
    'value' => $stats_html,
    'format' => 'full_html',
  ],
]);
$stats_block->save();


// 3. Place Blocks in Regions
function place_block($plugin_id, $region, $weight = 0, $settings = [])
{
  $theme = 'ibew_theme';
  $id = str_replace([':', '_'], '-', $plugin_id) . '-' . $region;

  try {
    $block = Block::create([
      'id' => $id . '-' . rand(100, 999),
      'plugin' => $plugin_id,
      'theme' => $theme,
      'region' => $region,
      'weight' => $weight,
      'settings' => array_merge([
        'label' => 'Block',
        'label_display' => 0, // Hidden
      ], $settings),
      'visibility' => [
        'request_path' => [
          'id' => 'request_path',
          'negate' => false,
          'pages' => '<front>',
        ],
      ],
    ]);
    $block->save();
    echo "Placed Block: $plugin_id in $region\n";
  } catch (\Exception $e) {
    echo "Error placing block: " . $e->getMessage() . "\n";
  }
}

// Place About
place_block('block_content:' . $about_block->uuid(), 'homepage_about', 0);

// Place Stats
place_block('block_content:' . $stats_block->uuid(), 'homepage_stats', 0);

// Place Views
place_block('views_block:homepage_news-block_1', 'homepage_news', 0, ['label' => 'Latest News', 'label_display' => 'visible']);

place_block('views_block:homepage_events-block_1', 'homepage_events', 0, ['label' => 'Upcoming Events', 'label_display' => 'visible']);


// 4. Create Structured 'Hero Overlay' Block Content
// Create Button 1: Join
$btn_join = Paragraph::create(['type' => 'hero_button']);
$btn_join->set('field_link', ['uri' => 'internal:/join', 'title' => 'Join Local 90']);
$btn_join->set('field_button_style', 'gold');
$btn_join->save();

// Create Button 2: Contractor
$btn_contractor = Paragraph::create(['type' => 'hero_button']);
$btn_contractor->set('field_link', ['uri' => 'internal:/contractors', 'title' => 'Find a Contractor']);
$btn_contractor->set('field_button_style', 'blue');
$btn_contractor->save();

// Create Button 3: Submit Project (Outline)
$btn_project = Paragraph::create(['type' => 'hero_button']);
$btn_project->set('field_link', ['uri' => 'internal:/projects', 'title' => 'Submit Project']);
$btn_project->set('field_button_style', 'outline');
$btn_project->save();

$hero_overlay_block = BlockContent::create([
  'info' => 'Homepage Hero Overlay',
  'type' => 'hero_overlay', // Structure!
  'field_display_title' => 'Empowering The Electrical Industry',
  'field_hero_description' => 'Representing the most skilled and safely trained electrical workers in New Haven and beyond since 1892.',
  'field_hero_actions' => [
    $btn_join,
    $btn_contractor,
    $btn_project
  ]
]);
$hero_overlay_block->save();

// Place Hero Overlay
place_block('block_content:' . $hero_overlay_block->uuid(), 'homepage_hero_content', 0);

echo "Block Placement Complete.\n";
