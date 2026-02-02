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

/* @ibew_theme/includes/header.html.twig */
class __TwigTemplate_41c02d487968476737c3e49bcfe6e95c extends Template
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
        yield "<div class=\"ibew-header-wrapper\">
  ";
        // line 4
        yield "  <div class=\"ibew-top-bar\" style=\"background-color: #1f2937; color: white;\">
    <div class=\"ibew-shell d-flex justify-content-between align-items-center\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 2rem;\">
      <div class=\"d-flex align-items-center gap-4\" style=\"display: flex; gap: 1rem;\">
        <span class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem;\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
          2 N Plains Industrial Rd, Wallingford, CT 06492
        </span>
        <a href=\"tel:1-800-562-2590\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
          1-800-562-2590
        </a>
        <a href=\"mailto:info@ibewlocal90.org\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
          info@ibewlocal90.org
        </a>
      </div>
      <div class=\"d-flex align-items-center gap-3\" style=\"display: flex; gap: 1rem; align-items: center;\">
        <a href=\"https://JoinIBEWCT.org\" style=\"color: white; text-decoration: none; font-weight: bold; font-size: 0.9rem;\">JoinIBEWCT.org</a>
        <div style=\"display: flex; gap: 0.75rem;\">
           <a href=\"#\" aria-label=\"Twitter\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z\"/></svg></a>
           <a href=\"#\" aria-label=\"LinkedIn\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z\"/></svg></a>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 31
        yield "  <nav class=\"ibew-nav sticky-top\">
    <div class=\"ibew-shell ibew-nav__inner\">
      <a href=\"/\" class=\"ibew-brand\">
        <img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"IBEW Local 90\" class=\"ibew-brand__logo\">
        <div class=\"ibew-brand__text\">
          <span class=\"ibew-brand__title\">";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW LOCAL 90"));
        yield "</span>
          <span class=\"ibew-eyebrow\">";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW Local 90"));
        yield "</span>
        </div>
      </a>

      ";
        // line 42
        yield "      <div class=\"flex-grow-1 d-none d-xl-flex justify-content-center\">
          ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 44), "html", null, true);
            yield "
          ";
        } else {
            // line 46
            yield "              <nav class=\"ibew-nav__links\">
                <a href=\"/about\">";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
            yield "</a>
                <a href=\"/events\">";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
            yield "</a>
                <a href=\"/news\">";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
            yield "</a>
                <a href=\"/training\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Training"));
            yield "</a>
                <a href=\"/contractors\">";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
            yield "</a>
                <a href=\"/members\">";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Members"));
            yield "</a>
                <a href=\"/resources\">";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resources"));
            yield "</a>
              </nav>
          ";
        }
        // line 56
        yield "      </div>

      <div class=\"d-none d-xl-block\">
          <div class=\"d-flex align-items-center gap-3\">
             <a class=\"ibew-cta ibew-cta--nav\" href=\"/user/login\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/></svg>
                ";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Member Sign-In"));
        yield "
             </a>
             <button class=\"js-theme-toggle btn btn-link p-2 text-decoration-none rounded-circle text-white hover:text-ibew-gold transition-colors\" aria-label=\"Toggle Theme\" style=\"min-width: 44px; min-height: 44px; border: 1px solid rgba(255,255,255,0.1);\">
                <svg class=\"icon-sun text-warning\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                 <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z\" />
                </svg>
                <svg class=\"icon-moon text-white d-none\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                 <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z\" />
                </svg>
             </button>
          </div>
      </div>
      
      <!-- Mobile Menu Toggle -->
      <button class=\"ibew-mobile-toggle d-xl-none border-0 bg-transparent p-2 text-white\" aria-label=\"Toggle Menu\" id=\"ibewMobileToggle\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/></svg>
      </button>
    </div>
  </nav>
  
  ";
        // line 83
        yield "  <div class=\"ibew-mobile-menu d-none bg-white border-top shadow-sm p-4\" id=\"ibewMobileMenu\" style=\"position: absolute; width: 100%; z-index: 1050;\">
    <nav class=\"d-flex flex-column gap-3 text-center\">
       <a href=\"/about\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">About</a>
       <a href=\"/events\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Events</a>
       <a href=\"/news\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">News</a>
       <a href=\"/training\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Training</a>
       <a href=\"/contractors\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Contractors</a>
       <a href=\"/members\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Members</a>
       <a href=\"/user/login\" class=\"btn btn-primary w-100 mt-2\">Member Sign-In</a>
    </nav>
  </div>

  ";
        // line 96
        yield "  <div class=\"d-xl-none\">
    <input class=\"menu-icon-checkbox\" type=\"checkbox\" id=\"menu-icon-checkbox\" name=\"menu-icon-checkbox\"/>
    <label class=\"menu-icon-label\" for=\"menu-icon-checkbox\"></label>
    <div class=\"nav-animated\">
      <ul>
        <li><a href=\"/about\">";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
        yield "</a></li>
        <li><a href=\"/events\">";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
        yield "</a></li>
        <li><a href=\"/news\">";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
        yield "</a></li>
        <li><a href=\"/training\">";
        // line 104
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Training"));
        yield "</a></li>
        <li><a href=\"/contractors\">";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
        yield "</a></li>
        <li><a href=\"/members\">";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Members"));
        yield "</a></li>
      </ul>
    </div>
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ibew_theme/includes/header.html.twig";
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
        return array (  209 => 106,  205 => 105,  201 => 104,  197 => 103,  193 => 102,  189 => 101,  182 => 96,  168 => 83,  145 => 62,  137 => 56,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  104 => 46,  98 => 44,  96 => 43,  93 => 42,  86 => 37,  82 => 36,  75 => 31,  47 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ibew_theme/includes/header.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 43];
        static $filters = ["t" => 36, "escape" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
