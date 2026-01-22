<?php

use Symfony\Component\Yaml\Yaml;

echo "Creating SDC Components for IBEW Theme...\n";

$theme_path = 'themes/custom/ibew_theme';
$components_path = $theme_path . '/components';

if (!is_dir($components_path)) {
    mkdir($components_path, 0777, true);
}

$components = [
    'ibew_button' => [
        'label' => 'IBEW Button',
        'props' => [
            'type' => 'object',
            'properties' => [
                'text' => ['type' => 'string', 'title' => 'Button Text'],
                'url' => ['type' => 'string', 'title' => 'Link URL'],
                'style' => [
                    'type' => 'string',
                    'title' => 'Style',
                    'enum' => ['gold', 'blue', 'red', 'outline'],
                ],
                'icon' => ['type' => 'string', 'title' => 'Icon Name (e.g. user, arrow)'],
            ],
            'required' => ['text', 'url'],
        ],
        'template' => '
<a href="{{ url }}" class="ibew-btn-lg ibew-btn--{{ style|default(\'gold\') }} gap-2 inline-flex items-center justify-center">
    {% if icon %}
        {# Simple icon mapping or usage #}
        {% if icon == "user" %}
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg> 
        {% elseif icon == "contractor" %}
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16"><path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/></svg>
        {% endif %}
    {% endif %}
    {{ text }}
</a>',
    ],
    'ibew_card' => [
        'label' => 'IBEW Card',
        'props' => [
            'type' => 'object',
            'properties' => [
                'title' => ['type' => 'string', 'title' => 'Title'],
                'description' => ['type' => 'string', 'title' => 'Description'],
                'link_text' => ['type' => 'string', 'title' => 'Link Text'],
                'link_url' => ['type' => 'string', 'title' => 'Link URL'],
                'style' => ['type' => 'string', 'title' => 'Style', 'enum' => ['default', 'cta']],
            ],
        ],
        'template' => '
<div class="ibew-cta-card">
  <h3 class="font-oswald text-2xl font-bold mb-2">{{ title }}</h3>
  <p class="mb-6 opacity-90">{{ description }}</p>
  {% if link_url %}
      <a href="{{ link_url }}" class="ibew-btn-lg ibew-btn--{{ style == \'cta\' ? \'gold\' : \'blue\' }}">{{ link_text|default(\'Read More\') }}</a>
  {% endif %}
</div>',
    ],
    'ibew_hero' => [
        'label' => 'IBEW Hero',
        'props' => [
            'type' => 'object',
            'properties' => [
                'slides' => [
                    'type' => 'array',
                    'title' => 'Slides',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'image_url' => ['type' => 'string', 'title' => 'Image URL'],
                            'title' => ['type' => 'string', 'title' => 'Title'], // Optional slide title
                        ]
                    ]
                ],
                'overlay_title' => ['type' => 'string', 'title' => 'Overlay Title'],
                'overlay_text' => ['type' => 'string', 'title' => 'Overlay Text'],
                'actions' => [
                    'type' => 'array',
                    'title' => 'Buttons',
                    'items' => ['type' => 'string']
                ],
            ],
        ],
        'template' => '
<section class="ibew-hero p-0 relative h-screen">
    {# Background Slider #}
    <div class="absolute inset-0 w-full h-full z-0">
        <div class="splide h-full w-full" data-splide=\'{"type":"fade","rewind":true,"autoplay":true,"interval":6000,"arrows":false,"pagination":false}\'>
          <div class="splide__track h-full w-full">
            <ul class="splide__list h-full w-full">
              {% for slide in slides %}
                  <li class="splide__slide h-full w-full relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(\'{{ slide.image_url }}\');">
                    </div>
                  </li>
              {% endfor %}
            </ul>
          </div>
        </div>
    </div>

    {# Global Overlay #}
    <div class="absolute inset-0 z-10 bg-black/40 pointer-events-none"></div>

    {# Content Overlay #}
    <div class="ibew-hero__content absolute inset-0 z-20 flex flex-col justify-center items-center text-center px-4 pointer-events-none">
        <div class="pointer-events-auto max-w-4xl mx-auto w-full"> 
            {% if overlay_title %}
                <h1 class="font-oswald text-6xl font-bold text-white mb-4 tracking-wider uppercase drop-shadow-lg">{{ overlay_title }}</h1>
            {% endif %}
            
            {% if overlay_text %}
                <p class="text-white text-xl mb-8 font-sans drop-shadow-md mx-auto" style="max-width: 650px;">{{ overlay_text }}</p>
            {% endif %}
            
            {% if actions %}
                <div class="flex flex-wrap gap-4 justify-center">
                    {# Expecting render array or list of links from Canvas #}
                    {% for action in actions %}
                         {# Use SDC button if possible, otherwise raw link #}
                         {{ action }} 
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    </div>
</section>
',
        'js' => '
// Initialize Splide if not already handled generally
document.querySelectorAll(".ibew-hero .splide").forEach(el => {
    if(!el.dataset.init) {
        el.dataset.init = true;
        new Splide(el).mount();
    }
});
'
    ],
    'ibew_section_header' => [
        'label' => 'IBEW Section Header',
        'props' => [
            'type' => 'object',
            'properties' => [
                'title' => ['type' => 'string', 'title' => 'Title'],
                'alignment' => ['type' => 'string', 'enum' => ['left', 'center']],
            ]
        ],
        'template' => '
<div class="ibew-section-header mb-8 {{ alignment == \'center\' ? \'text-center\' : \'text-left\' }}">
    <h2 class="font-oswald text-4xl font-bold uppercase text-ibew-navy">{{ title }}</h2>
    <div class="h-1 w-20 bg-ibew-gold mt-2 {{ alignment == \'center\' ? \'mx-auto\' : \'\' }}"></div>
</div>
'
    ],
    'ibew_stat_group' => [
        'label' => 'IBEW Stats Group',
        'props' => [
            'type' => 'object',
            'properties' => [
                'stats' => [
                    'type' => 'array',
                    'title' => 'Statistics',
                    'items' => [
                        'type' => 'object',
                        'properties' => [
                            'value' => ['type' => 'string', 'title' => 'Value (e.g. 100+)'],
                            'label' => ['type' => 'string', 'title' => 'Label'],
                        ]
                    ]
                ]
            ]
        ],
        'template' => '
<div class="ibew-stats-container">
  <div class="row text-center g-4">
    {% for stat in stats %}
        <div class="col-md-4">
          <div class="ibew-stat-item p-4 {{ not loop.first and not loop.last ? \'border-start border-end border-white border-opacity-10\' : \'\' }}">
            <div class="display-3 fw-bold text-warning mb-2 font-oswald">{{ stat.value }}</div>
            <div class="text-uppercase tracking-wider fw-semibold text-light small">{{ stat.label }}</div>
          </div>
        </div>
    {% endfor %}
  </div>
</div>
'
    ]
];

foreach ($components as $id => $data) {
    if ($data === null)
        continue; // Skip if null
    $dir = $components_path . '/' . $id;
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    // 1. Create .component.yml
    $yaml = [
        'name' => $data['label'],
        'status' => 'stable',
        'props' => $data['props'],
    ];
    file_put_contents($dir . '/' . $id . '.component.yml', Yaml::dump($yaml, 10));

    // 2. Create .twig
    file_put_contents($dir . '/' . $id . '.twig', trim($data['template']));

    // 3. Create .js if exists
    if (isset($data['js'])) {
        file_put_contents($dir . '/' . $id . '.js', trim($data['js']));
    }

    echo "Created component: $id\n";
}
