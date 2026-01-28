<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\block\Entity\Block;

// HTML for News (Featured + Grid)
$news_html = '
<div class="ibew-news-container">
    <!-- Featured Hero Post (Top) -->
    <div class="card border-0 shadow-sm overflow-hidden mb-4 rounded-4 bg-white">
       <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1000&auto=format&fit=crop" class="card-img-top object-fit-cover" style="height: 320px; width: 100%;" alt="Construction Worker">
          <span class="badge bg-danger position-absolute top-0 start-0 m-3 py-2 px-3 rounded-pill text-uppercase font-oswald fw-bold" style="letter-spacing: 0.05em; font-size: 0.75rem;">Featured</span>
       </div>
       <div class="card-body p-4">
          <h3 class="h3 fw-bold font-oswald text-uppercase text-dark mb-2">New Training Facility Opens Downtown</h3>
          <div class="text-muted small mb-3 fw-bold text-uppercase" style="font-size: 0.75rem; letter-spacing: 0.05em;">Union News &bull; March 15, 2024</div>
          <p class="card-text text-muted mb-4 opacity-75" style="line-height: 1.6;">Local 90 celebrated the grand opening of our state-of-the-art training center, featuring the latest equipment and technology to prepare the next generation of skilled electricians for the challenges of tomorrow.</p>
          <a href="#" class="fw-bold text-decoration-none text-primary d-inline-flex align-items-center gap-1">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></a>
       </div>
    </div>

    <!-- Grid of Smaller Posts (Bottom) -->
    <div class="row g-4">
       <!-- Item 1 -->
       <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
             <div class="position-relative" style="height: 180px;">
                <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?q=80&w=1000&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Apprenticeship">
                <div class="position-absolute bottom-0 start-0 w-100 h-100 bg-gradient-to-t from-black/50 to-transparent"></div>
             </div>
             <div class="card-body p-3 pt-4">
                <h4 class="h6 fw-bold font-oswald text-uppercase text-dark mb-2" style="line-height: 1.3;">Apprenticeship Program Accepting Applications</h4>
                <div class="d-flex align-items-center gap-2 small mt-3">
                   <span class="badge bg-primary rounded-pill px-2 py-1">Training</span>
                   <span class="text-muted" style="font-size: 0.8rem;">March 12, 2024</span>
                </div>
             </div>
          </div>
       </div>
       <!-- Item 2 -->
       <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
             <div class="position-relative" style="height: 180px;">
                <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Community">
             </div>
             <div class="card-body p-3 pt-4">
                <h4 class="h6 fw-bold font-oswald text-uppercase text-dark mb-2" style="line-height: 1.3;">Community Outreach Project Success</h4>
                <div class="d-flex align-items-center gap-2 small mt-3">
                   <span class="badge bg-success rounded-pill px-2 py-1">Community</span>
                   <span class="text-muted" style="font-size: 0.8rem;">March 10, 2024</span>
                </div>
             </div>
          </div>
       </div>
       <!-- Item 3 -->
       <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
             <div class="position-relative" style="height: 180px;">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=1000&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Safety">
             </div>
             <div class="card-body p-3 pt-4">
                <h4 class="h6 fw-bold font-oswald text-uppercase text-dark mb-2" style="line-height: 1.3;">Safety Standards Update for 2024</h4>
                <div class="d-flex align-items-center gap-2 small mt-3">
                   <span class="badge bg-info text-dark rounded-pill px-2 py-1">Safety</span>
                   <span class="text-muted" style="font-size: 0.8rem;">March 8, 2024</span>
                </div>
             </div>
          </div>
       </div>
       <!-- Item 4 -->
       <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
             <div class="position-relative" style="height: 180px;">
                <img src="https://images.unsplash.com/photo-1605218457223-9528f57dc8ee?q=80&w=1000&auto=format&fit=crop" class="w-100 h-100 object-fit-cover" alt="Member Spotlight">
             </div>
             <div class="card-body p-3 pt-4">
                <h4 class="h6 fw-bold font-oswald text-uppercase text-dark mb-2" style="line-height: 1.3;">Member Spotlight: 30 Years of Service</h4>
                <div class="d-flex align-items-center gap-2 small mt-3">
                   <span class="badge bg-dark rounded-pill px-2 py-1">Member News</span>
                   <span class="text-muted" style="font-size: 0.8rem;">March 5, 2024</span>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>';

// HTML for Events (Date List)
$events_html = '
<div class="ibew-events-list">
    <!-- Event 1 -->
    <article class="ibew-event-card d-flex align-items-center bg-white rounded-3 shadow-sm p-3 mb-3 border-0 position-relative transition-hover">
      <div class="ibew-date-badge d-flex flex-column align-items-center justify-content-center rounded-2 text-white flex-shrink-0 me-3 bg-primary" style="width: 60px; height: 60px;">
        <span class="fs-4 fw-bold lh-1">18</span>
        <span class="small fw-bold text-uppercase lh-1" style="font-size: 0.7rem;">MAR</span>
      </div>
      <div class="flex-grow-1 min-w-0">
        <h3 class="h6 fw-bold text-uppercase text-dark mb-1 text-truncate font-oswald text-wrap" style="line-height:1.2;">
          <a href="#" class="text-decoration-none text-dark stretched-link">Monthly Union Meeting</a>
        </h3>
        <div class="d-flex flex-column flex-sm-row gap-2 small text-muted">
           <div class="d-flex align-items-center gap-1"><span>5:00 PM</span></div>
           <div class="d-flex align-items-center gap-1"><span class="text-truncate">Union Hall</span></div>
        </div>
      </div>
    </article>

     <!-- Event 2 -->
    <article class="ibew-event-card d-flex align-items-center bg-white rounded-3 shadow-sm p-3 mb-3 border-0 position-relative transition-hover">
      <div class="ibew-date-badge d-flex flex-column align-items-center justify-content-center rounded-2 text-white flex-shrink-0 me-3 bg-danger" style="width: 60px; height: 60px;">
        <span class="fs-4 fw-bold lh-1">22</span>
        <span class="small fw-bold text-uppercase lh-1" style="font-size: 0.7rem;">MAR</span>
      </div>
      <div class="flex-grow-1 min-w-0">
        <h3 class="h6 fw-bold text-uppercase text-dark mb-1 text-truncate font-oswald text-wrap" style="line-height:1.2;">
          <a href="#" class="text-decoration-none text-dark stretched-link">OSHA 10 Safety Training</a>
        </h3>
        <div class="d-flex flex-column flex-sm-row gap-2 small text-muted">
           <div class="d-flex align-items-center gap-1"><span>8:00 AM</span></div>
           <div class="d-flex align-items-center gap-1"><span class="text-truncate">Training Center</span></div>
        </div>
      </div>
    </article>

    <!-- Event 3 -->
    <article class="ibew-event-card d-flex align-items-center bg-white rounded-3 shadow-sm p-3 mb-3 border-0 position-relative transition-hover">
      <div class="ibew-date-badge d-flex flex-column align-items-center justify-content-center rounded-2 text-white flex-shrink-0 me-3 bg-primary" style="width: 60px; height: 60px;">
        <span class="fs-4 fw-bold lh-1">05</span>
        <span class="small fw-bold text-uppercase lh-1" style="font-size: 0.7rem;">APR</span>
      </div>
      <div class="flex-grow-1 min-w-0">
        <h3 class="h6 fw-bold text-uppercase text-dark mb-1 text-truncate font-oswald text-wrap" style="line-height:1.2;">
          <a href="#" class="text-decoration-none text-dark stretched-link">Apprentice Graduation</a>
        </h3>
        <div class="d-flex flex-column flex-sm-row gap-2 small text-muted">
           <div class="d-flex align-items-center gap-1"><span>6:00 PM</span></div>
           <div class="d-flex align-items-center gap-1"><span class="text-truncate">Omni Hotel</span></div>
        </div>
      </div>
    </article>
</div>';

// Function to Create or Update BlockContent
function ensure_block_content($info, $html)
{
    $existing = \Drupal::entityTypeManager()->getStorage('block_content')->loadByProperties(['info' => $info]);
    if ($existing) {
        $block = reset($existing);
        $block->set('body', ['value' => $html, 'format' => 'full_html']);
        $block->save();
        echo "Updated existing BlockContent: $info\n";
        return $block;
    } else {
        $block = BlockContent::create([
            'info' => $info,
            'type' => 'basic', // Assuming 'basic' block type exists
            'body' => ['value' => $html, 'format' => 'full_html'],
        ]);
        $block->save();
        echo "Created new BlockContent: $info\n";
        return $block;
    }
}

// Function to Place Block in Theme Region (Cleanly)
function ensure_block_placement($block_content, $region, $theme = 'ibew_theme')
{
    // 1. Remove ANY existing blocks in this region for this theme
    // Note: In a real prod site we might want to be more selective, but here we want to FORCE the layout.
    // Actually, let's only remove blocks that look like ours or are interfering.
    // Stragegy: Remove everything.

    $storage = \Drupal::entityTypeManager()->getStorage('block');
    $existing_blocks = $storage->loadByProperties(['theme' => $theme, 'region' => $region]);

    foreach ($existing_blocks as $b) {
        $b->delete();
        echo "Deleted interfering block from region: $region\n";
    }

    // 2. Place the new block
    $block = Block::create([
        'id' => 'static_' . $region . '_editable', // Predictable ID
        'plugin' => 'block_content:' . $block_content->uuid(),
        'theme' => $theme,
        'region' => $region,
        'weight' => 0,
        'settings' => [
            'label' => $block_content->label(),
            'label_display' => 0, // Hidden Label
        ],
        'visibility' => [
            'request_path' => [
                'id' => 'request_path',
                'negate' => false,
                'pages' => '<front>'
            ]
        ],
    ]);
    $block->save();
    echo "Placed " . $block_content->label() . " into $region\n";
}

// Helper to also ensure the 'Static About Homepage' is preserved if we want
// ... (Skipping About for now as user focused on News/Events)

echo "Finalizing Editable Blocks...\n";
$news_block = ensure_block_content('Static News Homepage', $news_html);
$events_block = ensure_block_content('Static Events Homepage', $events_html);

ensure_block_placement($news_block, 'homepage_news');
ensure_block_placement($events_block, 'homepage_events');

echo "Done.\n";
