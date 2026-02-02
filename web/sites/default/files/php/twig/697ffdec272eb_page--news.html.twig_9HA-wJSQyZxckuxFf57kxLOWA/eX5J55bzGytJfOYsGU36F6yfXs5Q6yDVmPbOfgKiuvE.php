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
  ";
        // line 10
        yield from $this->load("@ibew_theme/includes/header.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
  ";
        // line 13
        yield "  <section class=\"bg-gradient-to-r from-ibew-navy to-ibew-blue text-white py-16\">
    <div class=\"container\">
      <h1 class=\"text-5xl font-oswald fw-bold mb-4\">News & Updates</h1>
      <p class=\"text-xl text-gray-200\">Stay informed with the latest news from IBEW Local 90</p>
    </div>
  </section>

  ";
        // line 21
        yield "  <section class=\"bg-white border-bottom shadow-sm sticky-top\" style=\"top: 80px; z-index: 100;\">
    <div class=\"container py-4\">
      <div class=\"d-flex flex-wrap gap-3 align-items-center justify-content-between\">
        ";
        // line 25
        yield "        <div class=\"flex-grow-1\" style=\"max-width: 400px;\">
          <div class=\"input-group\">
            <span class=\"input-group-text bg-white border-end-0\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
              </svg>
            </span>
            <input type=\"text\" id=\"newsSearch\" class=\"form-control border-start-0\" placeholder=\"Search news articles...\">
          </div>
        </div>

        ";
        // line 37
        yield "        <div class=\"d-flex gap-2 align-items-center\">
          <label class=\"mb-0 fw-bold text-secondary small\">Sort by:</label>
          <select id=\"newsSort\" class=\"form-select form-select-sm\" style=\"width: auto;\">
            <option value=\"date-desc\">Newest First</option>
            <option value=\"date-asc\">Oldest First</option>
            <option value=\"title-asc\">Title (A-Z)</option>
            <option value=\"title-desc\">Title (Z-A)</option>
          </select>
        </div>

        ";
        // line 48
        yield "        <div class=\"btn-group\" role=\"group\">
          <button type=\"button\" class=\"btn btn-sm btn-outline-secondary active\" id=\"gridView\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
              <path d=\"M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z\"/>
            </svg>
          </button>
          <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"listView\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
              <path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 65
        yield "  <main class=\"py-16\">
    <div class=\"container\">
      <div id=\"newsContainer\" class=\"row g-4\">
        ";
        // line 69
        yield "      </div>
      
      ";
        // line 72
        yield "      <div id=\"newsLoading\" class=\"text-center py-5\">
        <div class=\"spinner-border text-primary\" role=\"status\">
          <span class=\"visually-hidden\">Loading...</span>
        </div>
        <p class=\"mt-3 text-muted\">Loading news articles...</p>
      </div>

      ";
        // line 80
        yield "      <div id=\"noResults\" class=\"text-center py-5 d-none\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"64\" height=\"64\" fill=\"currentColor\" class=\"text-muted mb-3\" viewBox=\"0 0 16 16\">
          <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
          <path d=\"M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z\"/>
        </svg>
        <h3 class=\"text-muted\">No articles found</h3>
        <p class=\"text-secondary\">Try adjusting your search or filters</p>
      </div>
    </div>
  </main>

  ";
        // line 92
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
        // line 111
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " IBEW Local 90. All rights reserved.
      </div>
    </div>
  </footer>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  let newsArticles = [];
  let currentView = 'grid';
  
  // Fetch news articles
  fetch('/news-json')
    .then(response => response.json())
    .then(data => {
      newsArticles = data;
      renderNews();
      document.getElementById('newsLoading').classList.add('d-none');
    })
    .catch(error => {
      console.error('Error loading news:', error);
      document.getElementById('newsLoading').innerHTML = '<p class=\"text-danger\">Error loading news articles</p>';
    });

  // Search functionality
  document.getElementById('newsSearch').addEventListener('input', function(e) {
    renderNews();
  });

  // Sort functionality
  document.getElementById('newsSort').addEventListener('change', function(e) {
    renderNews();
  });

  // View toggle
  document.getElementById('gridView').addEventListener('click', function() {
    currentView = 'grid';
    this.classList.add('active');
    document.getElementById('listView').classList.remove('active');
    renderNews();
  });

  document.getElementById('listView').addEventListener('click', function() {
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
      return article.title.toLowerCase().includes(searchTerm) ||
             (article.summary && article.summary.toLowerCase().includes(searchTerm));
    });

    // Sort
    filtered.sort((a, b) => {
      switch(sortBy) {
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
          <article class=\"ibew-news-card bg-gray-800 rounded-lg shadow-lg overflow-hidden h-100 d-flex flex-column hover-lift transition-all\">
            \${article.image ? `
              <div class=\"position-relative\" style=\"height: 200px; overflow: hidden;\">
                <img src=\"\${article.image}\" alt=\"\${article.title}\" class=\"w-100 h-100 object-fit-cover\">
              </div>
            ` : ''}
            <div class=\"p-4 flex-grow-1 d-flex flex-column\">
              <div class=\"text-xs text-ibew-gold fw-bold mb-2\">\${formatDate(article.date)}</div>
              <h3 class=\"h5 fw-bold text-white mb-3\">
                <a href=\"\${article.url}\" class=\"text-decoration-none text-white hover:text-ibew-gold transition-colors\">\${article.title}</a>
              </h3>
              \${article.summary ? `<p class=\"text-gray-400 text-sm mb-4 flex-grow-1\">\${article.summary}</p>` : ''}
              <a href=\"\${article.url}\" class=\"btn btn-sm btn-outline-light mt-auto\">Read More →</a>
            </div>
          </article>
        </div>
      `).join('');
    } else {
      container.className = 'd-flex flex-column gap-3';
      container.innerHTML = filtered.map(article => `
        <article class=\"ibew-news-card bg-gray-800 rounded-lg shadow-lg overflow-hidden d-flex flex-row hover-lift transition-all\">
          \${article.image ? `
            <div class=\"position-relative\" style=\"width: 250px; flex-shrink: 0;\">
              <img src=\"\${article.image}\" alt=\"\${article.title}\" class=\"w-100 h-100 object-fit-cover\">
            </div>
          ` : ''}
          <div class=\"p-4 flex-grow-1\">
            <div class=\"text-xs text-ibew-gold fw-bold mb-2\">\${formatDate(article.date)}</div>
            <h3 class=\"h4 fw-bold text-white mb-3\">
              <a href=\"\${article.url}\" class=\"text-decoration-none text-white hover:text-ibew-gold transition-colors\">\${article.title}</a>
            </h3>
            \${article.summary ? `<p class=\"text-gray-400 mb-3\">\${article.summary}</p>` : ''}
            <a href=\"\${article.url}\" class=\"btn btn-sm btn-outline-light\">Read More →</a>
          </div>
        </article>
      `).join('');
    }
  }

  function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
  }
});
</script>

<style>
.hover-lift {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-lift:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4) !important;
}
.object-fit-cover {
  object-fit: cover;
}
</style>
";
        yield from [];
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
        return array (  163 => 111,  142 => 92,  129 => 80,  120 => 72,  116 => 69,  111 => 65,  93 => 48,  81 => 37,  68 => 25,  63 => 21,  54 => 13,  51 => 11,  49 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--news.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--news.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 10];
        static $filters = ["escape" => 111, "date" => 111];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
