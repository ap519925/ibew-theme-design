<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/ibew_theme/templates/page/page--events.html.twig */
class __TwigTemplate_228b399bdf4bd8bd8c48150722015a97 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"ibew-page bg-gray-100 text-gray-900 min-h-screen\">
  
  ";
        // line 4
        yield from $this->load("@ibew_theme/includes/header.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
  ";
        // line 7
        yield "  <section class=\"relative py-20 overflow-hidden\">
      <div class=\"absolute inset-0 bg-ibew-navy opacity-90 z-0\"></div>
      <div class=\"absolute inset-0 z-0\" style=\"background-image: url('/themes/custom/ibew_theme/screenshot.jpg'); background-size: cover; mix-blend-mode: overlay; opacity: 0.2;\"></div>
      <div class=\"container relative z-10 text-center text-white\">
          <h1 class=\"font-oswald text-5xl md:text-6xl fw-bold text-uppercase mb-2 tracking-wide\">Events Calendar</h1>
          <p class=\"text-gray-300 text-lg\">Stay connected with union meetings, training, and community events</p>
      </div>
  </section>

  <section class=\"py-8 bg-ibew-navy border-bottom border-gray-800\">
      <div class=\"container\">
          <div class=\"flex flex-col md:flex-row justify-between items-center gap-4\">
              <div class=\"flex gap-2\">
                  <button class=\"btn btn-primary px-4 py-2 fw-bold active\" data-filter=\"all\">All Events</button>
                  <button class=\"btn btn-outline-secondary text-white border-gray-600 px-4 py-2 fw-bold hover:bg-gray-700\" data-filter=\"meeting\">Meetings</button>
                  <button class=\"btn btn-outline-secondary text-white border-gray-600 px-4 py-2 fw-bold hover:bg-gray-700\" data-filter=\"training\">Training</button>
              </div>
              <div class=\"flex gap-3 items-center w-full md:w-auto\">
                  <div class=\"relative flex-grow md:flex-grow-0\">
                      <input type=\"text\" placeholder=\"Search events...\" class=\"form-control bg-gray-800 border-gray-700 text-white rounded px-3 py-2 w-full md:w-64 focus:ring-ibew-gold ring-offset-0\">
                  </div>
                  <div class=\"btn-group\" role=\"group\">
                      <button id=\"viewListBtn\" class=\"btn btn-danger text-white px-3 py-2 active\">List</button>
                      <button id=\"viewCalendarBtn\" class=\"btn btn-secondary bg-gray-700 text-white border-gray-600 px-3 py-2\">Calendar</button>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class=\"py-12 bg-ibew-navy-light relative w-100 h-100\">
       <div class=\"container\">
           <div id=\"eventsListView\" class=\"transition-opacity duration-300\">
                ";
        // line 40
        if ((($tmp = ($context["embedded_events_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                    ";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_events_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_events_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_events_view");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["embedded_events_view"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_events_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_events_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_events_view");
                }
            }
            yield "
                ";
        } else {
            // line 43
            yield "                    <p class=\"text-white\">No events view found. Please ensure 'homepage_events' view is active.</p>
                ";
        }
        // line 45
        yield "           </div>
           <div id=\"eventsCalendarView\" class=\"hidden bg-white rounded-lg p-4 shadow-xl text-dark\">
                <div id=\"calendar\"></div>
           </div>
       </div>
  </section>

  ";
        // line 53
        yield "  <footer class=\"ibew-footer\">
    <div class=\"ibew-shell max-w-7xl mx-auto px-6\">
      <div class=\"ibew-footer__container\">
        <div class=\"ibew-footer__brand-col\">
          <div class=\"d-flex align-items-center gap-2 mb-3\">
               <img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"Local 90\" style=\"height: 40px; width: auto;\">
               <span class=\"fs-4 fw-bold text-white\">Local 90</span>
          </div>
          <p>Serving our community with excellence in electrical work since 1892.</p>
        </div>
        <div>
           <h4>Contact</h4>
           <div class=\"d-flex flex-column gap-2 small\">
             <a href=\"tel:18005622590\" class=\"text-white text-decoration-none\">1-800-562-2590</a>
             <a href=\"mailto:info@ibewlocal90.org\" class=\"text-white text-decoration-none\">info@ibewlocal90.org</a>
           </div>
        </div>
      </div>
      <div class=\"mt-4 pt-4 border-top border-secondary text-center small text-gray-400\">
        &copy; ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " IBEW Local 90. All rights reserved.
      </div>
    </div>
  </footer>

</div>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      themeSystem: 'bootstrap5',
      height: 'auto',
      events: function(info, successCallback, failureCallback) {
        // Fetch events from Drupal
        fetch('/events-json')
          .then(response => response.json())
          .then(data => {
            const events = data.map(event => ({
              title: event.title,
              start: event.start,
              end: event.end,
              url: event.url,
              backgroundColor: event.type === 'training' ? '#983A54' : '#313F6B',
              borderColor: event.type === 'training' ? '#983A54' : '#313F6B'
            }));
            successCallback(events);
          })
          .catch(error => {
            console.error('Error loading events:', error);
            // Fallback to sample events
            successCallback([
              { title: 'Monthly Union Meeting', start: '2026-03-18T18:00:00', backgroundColor: '#313F6B' },
              { title: 'OSHA Safety Workshop', start: '2026-03-22T09:00:00', backgroundColor: '#983A54' },
              { title: 'Regional Job Fair', start: '2026-03-25T10:00:00', backgroundColor: '#313F6B' }
            ]);
          });
      },
      eventClick: function(info) {
        if (info.event.url) {
          window.location.href = info.event.url;
          info.jsEvent.preventDefault();
        }
      }
    });
    
    const listBtn = document.getElementById('viewListBtn');
    const calBtn = document.getElementById('viewCalendarBtn');
    const listView = document.getElementById('eventsListView');
    const calView = document.getElementById('eventsCalendarView');

    listBtn.addEventListener('click', function() {
        listView.classList.remove('hidden');
        calView.classList.add('hidden');
        listBtn.classList.add('btn-danger'); listBtn.classList.remove('btn-secondary', 'bg-gray-700');
        calBtn.classList.remove('btn-danger'); calBtn.classList.add('btn-secondary', 'bg-gray-700');
    });

    calBtn.addEventListener('click', function() {
        listView.classList.add('hidden');
        calView.classList.remove('hidden');
        calBtn.classList.add('btn-danger'); calBtn.classList.remove('btn-secondary', 'bg-gray-700');
        listBtn.classList.remove('btn-danger'); listBtn.classList.add('btn-secondary', 'bg-gray-700');
        setTimeout(() => calendar.render(), 100);
    });

    // Filter functionality
    const filterButtons = document.querySelectorAll('[data-filter]');
    filterButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');
        filterButtons.forEach(b => b.classList.remove('active', 'btn-primary'));
        filterButtons.forEach(b => b.classList.add('btn-outline-secondary', 'text-white', 'border-gray-600'));
        this.classList.add('active', 'btn-primary');
        this.classList.remove('btn-outline-secondary', 'text-white', 'border-gray-600');
        
        // Filter events in list view
        const eventCards = document.querySelectorAll('.ibew-event-card');
        eventCards.forEach(card => {
          if (filter === 'all') {
            card.closest('.views-row')?.classList.remove('hidden');
          } else {
            const cardText = card.textContent.toLowerCase();
            const shouldShow = (filter === 'training' && cardText.includes('training')) ||
                             (filter === 'meeting' && cardText.includes('meeting'));
            card.closest('.views-row')?.classList.toggle('hidden', !shouldShow);
          }
        });
      });
    });
  });
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["embedded_events_view"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/page/page--events.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  144 => 72,  123 => 53,  114 => 45,  110 => 43,  90 => 41,  88 => 40,  53 => 7,  50 => 5,  48 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--events.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--events.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 4, "if" => 40];
        static $filters = ["escape" => 41, "date" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'date'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
