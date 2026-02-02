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

\t";
        // line 4
        yield from $this->load("@ibew_theme/includes/header.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "
\t";
        // line 7
        yield "\t<section class=\"relative py-20 overflow-hidden\">
\t\t<div class=\"absolute inset-0 bg-ibew-navy opacity-90 z-0\"></div>
\t\t<div class=\"absolute inset-0 z-0\" style=\"background-image: url('/themes/custom/ibew_theme/screenshot.jpg'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; mix-blend-mode: overlay; opacity: 0.2;\"></div>
\t\t<div class=\"container relative z-10 text-center text-white\">
\t\t\t<h1 class=\"font-oswald text-5xl md:text-6xl fw-bold text-uppercase mb-2 tracking-wide\">Events Calendar</h1>
\t\t\t<p class=\"text-gray-300 text-lg\">Stay connected with union meetings, training, and community events</p>
\t\t</div>
\t</section>

\t<section class=\"py-8 bg-ibew-navy border-bottom border-gray-800\">
\t\t<div class=\"container\">
\t\t\t<div class=\"flex flex-col md:flex-row justify-between items-center gap-4\">
\t\t\t\t<div class=\"flex gap-2\">
\t\t\t\t\t<button class=\"btn btn-primary px-4 py-2 fw-bold active\" data-filter=\"all\">All Events</button>
\t\t\t\t\t<button class=\"btn btn-outline-secondary text-white border-gray-600 px-4 py-2 fw-bold hover:bg-gray-700\" data-filter=\"meeting\">Meetings</button>
\t\t\t\t\t<button class=\"btn btn-outline-secondary text-white border-gray-600 px-4 py-2 fw-bold hover:bg-gray-700\" data-filter=\"training\">Training</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex gap-3 items-center w-full md:w-auto\">
\t\t\t\t\t<div class=\"relative flex-grow md:flex-grow-0\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search events...\" class=\"form-control bg-gray-800 border-gray-700 text-white rounded px-3 py-2 w-full md:w-64 focus:ring-ibew-gold ring-offset-0\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t\t<button id=\"viewListBtn\" class=\"btn btn-danger text-white px-3 py-2 active\">List</button>
\t\t\t\t\t\t<button id=\"viewCalendarBtn\" class=\"btn btn-secondary bg-gray-700 text-white border-gray-600 px-3 py-2\">Calendar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"py-12 bg-ibew-navy-light relative w-100 h-100\">
\t\t<div class=\"container\">
\t\t\t<div id=\"eventsListView\" class=\"transition-opacity duration-300\">
\t\t\t\t";
        // line 40
        if ((($tmp = ($context["embedded_events_view"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "\t\t\t\t\t";
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
\t\t\t\t";
        } else {
            // line 43
            yield "\t\t\t\t\t<p class=\"text-white\">No events view found. Please ensure 'homepage_events' view is active.</p>
\t\t\t\t";
        }
        // line 45
        yield "\t\t\t</div>
\t\t\t<div id=\"eventsCalendarView\" class=\"hidden bg-white rounded-lg p-4 shadow-xl text-dark\">
\t\t\t\t<div id=\"calendar\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 53
        yield "\t<footer class=\"ibew-footer\">
\t\t<div class=\"ibew-shell max-w-7xl mx-auto px-6\">

\t\t\t<div
\t\t\t\tclass=\"ibew-footer__container\">
\t\t\t\t<!-- Col 1: Brand -->
\t\t\t\t<div class=\"ibew-footer__brand-col\">
\t\t\t\t\t";
        // line 60
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 61), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 63
            yield "\t\t\t\t\t\t<a href=\"/\" class=\"ibew-footer__brand-logo\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"Local 90\">
\t\t\t\t\t\t\t<span>Local 90</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>Serving our community with excellence in electrical work since 1892. Building tomorrow's infrastructure today.</p>
\t\t\t\t\t";
        }
        // line 69
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 2: Quick Links -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 74), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 76
            yield "\t\t\t\t\t\t<h4>Quick Links</h4>
\t\t\t\t\t\t<ul class=\"ibew-footer__links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/about\">About Us</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/training\">Training Programs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/join\">Become a Member</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/contractors\">Find a Contractor</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 3: Members -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 96
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 97), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 99
            yield "\t\t\t\t\t\t<h4>Members</h4>
\t\t\t\t\t\t<ul class=\"ibew-footer__links\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/member-portal\" class=\"highlight\">Member Portal</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/dues\">Pay Dues</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/benefits\">Benefits Info</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"/jobs\">Job Board</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 115
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 4: Contact -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 119
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 120), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 122
            yield "\t\t\t\t\t\t<h4>Contact</h4>
\t\t\t\t\t\t<div class=\"ibew-footer__contact-item\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
\t\t\t\t\t\t\t<span>(203) 265-9533</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ibew-footer__contact-item\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
\t\t\t\t\t\t\t<a href=\"mailto:info@ibewlocal90.org\" class=\"text-gray-400 hover:text-white\">info@ibewlocal90.org</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ibew-footer__contact-item\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
\t\t\t\t\t\t\t<span>2 N Plains Industrial Rd<br>Wallingford, CT 06492</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 136
        yield "\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"ibew-footer__bottom\">
\t\t\t\t";
        // line 141
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 142
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 142), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 144
            yield "\t\t\t\t\t&copy;
\t\t\t\t\t";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield "
\t\t\t\t\tIBEW Local 90. All rights reserved.
\t\t\t\t";
        }
        // line 148
        yield "\t\t\t</div>
\t\t</div>
\t</footer>

</div>

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
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
events: function (info, successCallback, failureCallback) { // Fetch events from Drupal
fetch('/events-json').then(response => response.json()).then(data => {
const events = data.map(event => ({
title: event.title,
start: event.start,
end: event.end,
url: event.url,
backgroundColor: event.type === 'training' ? '#983A54' : '#313F6B',
borderColor: event.type === 'training' ? '#983A54' : '#313F6B'
}));
successCallback(events);
}).catch(error => {
console.error('Error loading events:', error);
// Fallback to sample events
successCallback([
{
title: 'Monthly Union Meeting',
start: '2026-03-18T18:00:00',
backgroundColor: '#313F6B'
}, {
title: 'OSHA Safety Workshop',
start: '2026-03-22T09:00:00',
backgroundColor: '#983A54'
}, {
title: 'Regional Job Fair',
start: '2026-03-25T10:00:00',
backgroundColor: '#313F6B'
}
]);
});
},
eventClick: function (info) {
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

listBtn.addEventListener('click', function () {
listView.classList.remove('hidden');
calView.classList.add('hidden');
listBtn.classList.add('btn-danger');
listBtn.classList.remove('btn-secondary', 'bg-gray-700');
calBtn.classList.remove('btn-danger');
calBtn.classList.add('btn-secondary', 'bg-gray-700');
});

calBtn.addEventListener('click', function () {
listView.classList.add('hidden');
calView.classList.remove('hidden');
calBtn.classList.add('btn-danger');
calBtn.classList.remove('btn-secondary', 'bg-gray-700');
listBtn.classList.remove('btn-danger');
listBtn.classList.add('btn-secondary', 'bg-gray-700');
setTimeout(() => calendar.render(), 100);
});

// Filter functionality
const filterButtons = document.querySelectorAll('[data-filter]');
filterButtons.forEach(btn => {
btn.addEventListener('click', function () {
const filter = this.getAttribute('data-filter');
filterButtons.forEach(b => b.classList.remove('active', 'btn-primary'));
filterButtons.forEach(b => b.classList.add('btn-outline-secondary', 'text-white', 'border-gray-600'));
this.classList.add('active', 'btn-primary');
this.classList.remove('btn-outline-secondary', 'text-white', 'border-gray-600');

// Filter events in list view
const eventCards = document.querySelectorAll('.ibew-event-card');
eventCards.forEach(card => {
if (filter === 'all') {
card.closest('.views-row') ?. classList.remove('hidden');
} else {
const cardText = card.textContent.toLowerCase();
const shouldShow = (filter === 'training' && cardText.includes('training')) || (filter === 'meeting' && cardText.includes('meeting'));
card.closest('.views-row') ?. classList.toggle('hidden', ! shouldShow);
}
});
});
});
});
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["embedded_events_view", "page"]);        yield from [];
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
        return array (  266 => 148,  260 => 145,  257 => 144,  251 => 142,  249 => 141,  242 => 136,  226 => 122,  220 => 120,  218 => 119,  212 => 115,  194 => 99,  188 => 97,  186 => 96,  180 => 92,  162 => 76,  156 => 74,  154 => 73,  148 => 69,  140 => 63,  134 => 61,  132 => 60,  123 => 53,  114 => 45,  110 => 43,  90 => 41,  88 => 40,  53 => 7,  50 => 5,  48 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--events.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--events.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 4, "if" => 40];
        static $filters = ["escape" => 41, "date" => 145];
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
