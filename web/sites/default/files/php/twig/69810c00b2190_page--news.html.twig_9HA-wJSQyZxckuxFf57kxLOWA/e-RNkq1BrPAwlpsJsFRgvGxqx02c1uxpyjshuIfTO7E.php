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

/* themes/custom/ibew_theme/templates/page/page--news.html.twig */
class __TwigTemplate_4ddd6187ca4aabbe8bfeb209454fd2ca extends Template
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
        // line 7
        yield "<a id=\"main-content\" tabindex=\"-1\"></a>

<div class=\"ibew-page bg-gray-100 text-gray-900 min-h-screen\">
\t";
        // line 10
        yield from $this->load("@ibew_theme/includes/header.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
\t";
        // line 13
        yield "\t<section class=\"bg-gradient-to-r from-ibew-navy to-ibew-blue text-white py-16 relative overflow-hidden\">
\t\t<div class=\"absolute inset-0 z-0\" style=\"background-image: url('/themes/custom/ibew_theme/screenshot.jpg'); background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; mix-blend-mode: overlay; opacity: 0.2;\"></div>
\t\t<div class=\"container relative z-10\">
\t\t\t<h1 class=\"text-5xl font-oswald fw-bold mb-4\">News & Updates</h1>
\t\t\t<p class=\"text-xl text-gray-200\">Stay informed with the latest news from IBEW Local 90</p>
\t\t</div>
\t</section>

\t";
        // line 22
        yield "\t<section class=\"bg-white border-bottom shadow-sm sticky-top\" style=\"top: 80px; z-index: 100;\">
\t\t<div class=\"container py-4\">
\t\t\t<div
\t\t\t\tclass=\"d-flex flex-wrap gap-3 align-items-center justify-content-between\">
\t\t\t\t";
        // line 27
        yield "\t\t\t\t<div class=\"flex-grow-1\" style=\"max-width: 400px;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-text bg-white border-end-0\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t<path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input type=\"text\" id=\"newsSearch\" class=\"form-control border-start-0\" placeholder=\"Search news articles...\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 39
        yield "\t\t\t\t<div class=\"d-flex gap-2 align-items-center\">
\t\t\t\t\t<label class=\"mb-0 fw-bold text-secondary small\">Sort by:</label>
\t\t\t\t\t<select id=\"newsSort\" class=\"form-select form-select-sm\" style=\"width: auto;\">
\t\t\t\t\t\t<option value=\"date-desc\">Newest First</option>
\t\t\t\t\t\t<option value=\"date-asc\">Oldest First</option>
\t\t\t\t\t\t<option value=\"title-asc\">Title (A-Z)</option>
\t\t\t\t\t\t<option value=\"title-desc\">Title (Z-A)</option>
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t";
        // line 50
        yield "\t\t\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary active\" id=\"gridView\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path d=\"M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"listView\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 67
        yield "\t<main class=\"py-16\">
\t\t<div class=\"container\">
\t\t\t<div
\t\t\t\tid=\"newsContainer\" class=\"row g-4\">";
        // line 71
        yield "\t\t\t</div>

\t\t\t";
        // line 74
        yield "\t\t\t<div id=\"newsLoading\" class=\"text-center py-5\">
\t\t\t\t<div class=\"spinner-border text-primary\" role=\"status\">
\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t</div>
\t\t\t\t<p class=\"mt-3 text-muted\">Loading news articles...</p>
\t\t\t</div>

\t\t\t";
        // line 82
        yield "\t\t\t<div id=\"noResults\" class=\"text-center py-5 d-none\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" fill=\"currentColor\" class=\"text-muted mb-3\" viewbox=\"0 0 16 16\">
\t\t\t\t\t<path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
\t\t\t\t\t<path d=\"M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z\"/>
\t\t\t\t</svg>
\t\t\t\t<h3 class=\"text-muted\">No articles found</h3>
\t\t\t\t<p class=\"text-secondary\">Try adjusting your search or filters</p>
\t\t\t</div>
\t\t</div>
\t</main>

\t";
        // line 94
        yield "\t<footer class=\"ibew-footer\">
\t\t<div class=\"ibew-shell max-w-7xl mx-auto px-6\">

\t\t\t<div
\t\t\t\tclass=\"ibew-footer__container\">
\t\t\t\t<!-- Col 1: Brand -->
\t\t\t\t<div class=\"ibew-footer__brand-col\">
\t\t\t\t\t";
        // line 101
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 102), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 104
            yield "\t\t\t\t\t\t<a href=\"/\" class=\"ibew-footer__brand-logo\">
\t\t\t\t\t\t\t<img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"Local 90\">
\t\t\t\t\t\t\t<span>Local 90</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p>Serving our community with excellence in electrical work since 1892. Building tomorrow's infrastructure today.</p>
\t\t\t\t\t";
        }
        // line 110
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 2: Quick Links -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 115), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 117
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
        // line 133
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 3: Members -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 137
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 138), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 140
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
        // line 156
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Col 4: Contact -->
\t\t\t\t<div>
\t\t\t\t\t";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "\t\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 161), "html", null, true);
            yield "
\t\t\t\t\t";
        } else {
            // line 163
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
        // line 177
        yield "\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"ibew-footer__bottom\">
\t\t\t\t";
        // line 182
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "\t\t\t\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 183), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 185
            yield "\t\t\t\t\t&copy;
\t\t\t\t\t";
            // line 186
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield "
\t\t\t\t\tIBEW Local 90. All rights reserved.
\t\t\t\t";
        }
        // line 189
        yield "\t\t\t</div>
\t\t</div>
\t</footer>
</div>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
let newsArticles = [];
let currentView = 'grid';

// Fetch news articles
fetch('/news-json').then(response => response.json()).then(data => {
newsArticles = data;
renderNews();
document.getElementById('newsLoading').classList.add('d-none');
}).catch(error => {
console.error('Error loading news:', error);
document.getElementById('newsLoading').innerHTML = '<p class=\"text-danger\">Error loading news articles</p>';
});

// Search functionality
document.getElementById('newsSearch').addEventListener('input', function (e) {
renderNews();
});

// Sort functionality
document.getElementById('newsSort').addEventListener('change', function (e) {
renderNews();
});

// View toggle
document.getElementById('gridView').addEventListener('click', function () {
currentView = 'grid';
this.classList.add('active');
document.getElementById('listView').classList.remove('active');
renderNews();
});

document.getElementById('listView').addEventListener('click', function () {
currentView = 'list';
this.classList.add('active');
document.getElementById('gridView').classList.remove('active');
renderNews();
});

function renderNews() {
const searchTerm = document.getElementById('newsSearch').value.toLowerCase();
const sortBy = document.getElementById('newsSort').value;

// Filter
let filtered = newsArticles.filter(article => {
return article.title.toLowerCase().includes(searchTerm) || (article.summary && article.summary.toLowerCase().includes(searchTerm));
});

// Sort
filtered.sort((a, b) => {
switch (sortBy) {
case 'date-desc':
return new Date(b.date) - new Date(a.date);
case 'date-asc':
return new Date(a.date) - new Date(b.date);
case 'title-asc':
return a.title.localeCompare(b.title);
case 'title-desc':
return b.title.localeCompare(a.title);
default:
return 0;
}
});

const container = document.getElementById('newsContainer');
const noResults = document.getElementById('noResults');

if (filtered.length === 0) {
container.innerHTML = '';
noResults.classList.remove('d-none');
return;
}

noResults.classList.add('d-none');

if (currentView === 'grid') {
container.className = 'row g-4';
container.innerHTML = filtered.map(article => `
        <div class=\"col-md-6 col-lg-4\">
          <article class=\"ibew-news-card rounded-lg shadow-lg overflow-hidden h-100 d-flex flex-column hover-lift transition-all\" style=\"background-color: #3E4C63;\">
            \${
article.image ? `
              <div class=\"position-relative\" style=\"height: 200px; overflow: hidden;\">
                <img src=\"\${
article.image
}\" alt=\"\${
article.title
}\" class=\"w-100 h-100 object-fit-cover\">
              </div>
            ` : ''
}
            <div class=\"p-4 flex-grow-1 d-flex flex-column\">
              <div class=\"text-xs text-ibew-gold fw-bold mb-2\">\${
formatDate(article.date)
}</div>
              <h3 class=\"h5 fw-bold text-white mb-3\">
                <a href=\"\${
article.url
}\" class=\"text-decoration-none text-white hover:text-ibew-gold transition-colors\">\${
article.title
}</a>
              </h3>
              \${
article.summary ? `<p class=\"text-gray-400 text-sm mb-4 flex-grow-1\">\${
article.summary
}</p>` : ''
}
              <a href=\"\${
article.url
}\" class=\"btn btn-sm btn-outline-light mt-auto\">Read More →</a>
            </div>
          </article>
        </div>
      `).join('');
} else {
container.className = 'd-flex flex-column gap-3';
container.innerHTML = filtered.map(article => `
        <article class=\"ibew-news-card rounded-lg shadow-lg overflow-hidden d-flex flex-row hover-lift transition-all\" style=\"background-color: #3E4C63;\">
          \${
article.image ? `
            <div class=\"position-relative\" style=\"width: 250px; flex-shrink: 0;\">
              <img src=\"\${
article.image
}\" alt=\"\${
article.title
}\" class=\"w-100 h-100 object-fit-cover\">
            </div>
          ` : ''
}
          <div class=\"p-4 flex-grow-1\">
            <div class=\"text-xs text-ibew-gold fw-bold mb-2\">\${
formatDate(article.date)
}</div>
            <h3 class=\"h4 fw-bold text-white mb-3\">
              <a href=\"\${
article.url
}\" class=\"text-decoration-none text-white hover:text-ibew-gold transition-colors\">\${
article.title
}</a>
            </h3>
            \${
article.summary ? `<p class=\"text-gray-400 mb-3\">\${
article.summary
}</p>` : ''
}
            <a href=\"\${
article.url
}\" class=\"btn btn-sm btn-outline-light\">Read More →</a>
          </div>
        </article>
      `).join('');
}
}

function formatDate(dateString) {
const date = new Date(dateString);
return date.toLocaleDateString('en-US', {
year: 'numeric',
month: 'long',
day: 'numeric'
});
}
});
</script>

<style>
\t/* Force news card background color in all modes */
\t.ibew-news-card,
\thtml.dark .ibew-news-card,
\thtml:not(.dark) .ibew-news-card,
\t.ibew-news-card.bg-gray-800 {
\t\tbackground-color: #3E4C63 !important;
\t}
\t.hover-lift {
\t\ttransition: transform 0.3s ease, box-shadow 0.3s ease;
\t}
\t.hover-lift:hover {
\t\ttransform: translateY(-4px);
\t\tbox-shadow: 0 12px 24px rgba(0, 0, 0, 0.4) !important;
\t}
\t.object-fit-cover {
\t\tobject-fit: cover;
\t}
</style>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/page/page--news.html.twig";
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
        return array (  287 => 189,  281 => 186,  278 => 185,  272 => 183,  270 => 182,  263 => 177,  247 => 163,  241 => 161,  239 => 160,  233 => 156,  215 => 140,  209 => 138,  207 => 137,  201 => 133,  183 => 117,  177 => 115,  175 => 114,  169 => 110,  161 => 104,  155 => 102,  153 => 101,  144 => 94,  131 => 82,  122 => 74,  118 => 71,  113 => 67,  95 => 50,  83 => 39,  70 => 27,  64 => 22,  54 => 13,  51 => 11,  49 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--news.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 10, "if" => 101];
        static $filters = ["escape" => 102, "date" => 186];
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
