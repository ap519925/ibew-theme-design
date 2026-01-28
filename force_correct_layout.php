<?php

use Drupal\block_content\Entity\BlockContent;
use Drupal\block\Entity\Block;

echo "Forcing Correct Layout with Static Blocks...\n";

// Helper Block Placer
function place($block_content, $region, $weight = 0)
{
  $block = Block::create([
    'id' => 'static_' . $region . '_' . rand(100, 999),
    'plugin' => 'block_content:' . $block_content->uuid(),
    'theme' => 'ibew_theme',
    'region' => $region,
    'weight' => $weight,
    'settings' => ['label' => $block_content->label(), 'label_display' => 0],
    'visibility' => ['request_path' => ['id' => 'request_path', 'pages' => '<front>']],
  ]);
  $block->save();
  echo "Placed " . $block_content->label() . " in $region\n";
}

// 1. Static About Block (Dark Mode Friendly)
$about_html = '
<div class="row align-items-center gy-5">
  <div class="col-lg-6">
    <div class="ibew-about-content pe-lg-5">
      <h2 class="display-5 fw-bold mb-4 font-oswald text-uppercase text-white">About IBEW 90</h2>
      <div class="lead text-light opacity-75 mb-4">
        <p>New Haven, Connecticut was first chartered into the International Brotherhood of Electrical Workers on December 16, 1892. For over 130 years, we have powered the community with skilled craftsmanship and unwavering dedication to safety.</p>
      </div>
      <div class="d-flex gap-3">
          <a href="/about" class="btn btn-warning btn-lg fw-bold text-dark px-4">Our History</a>
          <a href="/leadership" class="btn btn-outline-light btn-lg fw-bold px-4">Leadership</a>
      </div>
      
      <div class="row mt-5">
         <div class="col-md-4">
            <h3 class="display-6 fw-bold text-warning mb-0">130+</h3>
            <span class="small text-uppercase tracking-wider text-white">Years</span>
         </div>
         <div class="col-md-4">
            <h3 class="display-6 fw-bold text-warning mb-0">1200+</h3>
            <span class="small text-uppercase tracking-wider text-white">Members</span>
         </div>
         <div class="col-md-4">
            <h3 class="display-6 fw-bold text-warning mb-0">100%</h3>
            <span class="small text-uppercase tracking-wider text-white">Safety</span>
         </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="position-relative">
       <div class="rounded-4 overflow-hidden shadow-lg border border-white border-opacity-10 position-relative">
           <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=1000&auto=format&fit=crop" class="img-fluid w-100 object-fit-cover" style="height: 500px;" alt="About Image">
           <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-to-t from-black/60 to-transparent"></div>
       </div>
       <!-- Decorative box -->
       <div class="position-absolute bottom-0 start-0 bg-primary p-4 rounded-3 shadow-lg m-4" style="max-width: 200px;">
          <p class="text-white fw-bold small mb-0 font-oswald text-uppercase">"Quality Work is Our Signature"</p>
       </div>
    </div>
  </div>
</div>';

$about = BlockContent::create([
  'info' => 'Static About Homepage',
  'type' => 'basic',
  'body' => ['value' => $about_html, 'format' => 'full_html'],
]);
$about->save();
place($about, 'homepage_about');


// 2. Static News Block (The GRID Layout matching Screenshot)
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

$news = BlockContent::create([
  'info' => 'Static News Homepage',
  'type' => 'basic',
  'body' => ['value' => $news_html, 'format' => 'full_html'],
]);
$news->save();
place($news, 'homepage_news');


// 3. Static Events Block (The DATEBOX Layout)
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

$events = BlockContent::create([
  'info' => 'Static Events Homepage',
  'type' => 'basic',
  'body' => ['value' => $events_html, 'format' => 'full_html'],
]);
$events->save();
place($events, 'homepage_events');

echo "Static Blocks Placed. Layout should be perfect.\n";
