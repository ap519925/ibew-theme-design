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

/* themes/custom/ibew_theme/templates/page.html.twig */
class __TwigTemplate_c7b184b81c22e95a2a72f4d23b8d8aec extends Template
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
        yield "<div class=\"ibew-page layout-container\">
  <header role=\"banner\" class=\"ibew-nav sticky-top\">
    ";
        // line 10
        yield "    <div class=\"ibew-top-bar d-none d-lg-block\">
      <div class=\"ibew-shell d-flex justify-content-between align-items-center\">
        ";
        // line 12
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 13), "html", null, true);
            yield "
        ";
        } else {
            // line 15
            yield "            ";
            // line 16
            yield "            <div class=\"d-flex align-items-center gap-4\">
              <span class=\"d-flex align-items-center gap-2\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
                2 N Plains Industrial Rd, Wallingford, CT 06492
              </span>
              <a href=\"tel:1-800-562-2590\" class=\"d-flex align-items-center gap-2\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
                1-800-562-2590
              </a>
              <a href=\"mailto:info@ibewlocal90.org\" class=\"d-flex align-items-center gap-2\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
                info@ibewlocal90.org
              </a>
            </div>
            <div class=\"d-flex align-items-center gap-3\">
              <span class=\"small me-2\"><a href=\"#\" class=\"text-white text-decoration-none\">JoinIBEWCT.org</a></span>
                ";
            // line 33
            yield "                <a href=\"#\" aria-label=\"Twitter\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z\"/></svg></a>
                <a href=\"#\" aria-label=\"Facebook\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/></svg></a>
            </div>
        ";
        }
        // line 37
        yield "      </div>
    </div>

    <div class=\"ibew-shell\">
      <div class=\"ibew-nav__inner\">
          ";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 43), "html", null, true);
            yield "
          ";
        } else {
            // line 45
            yield "            ";
            // line 46
            yield "            <a href=\"/\" class=\"ibew-brand\">
              <div class=\"ibew-brand__mark\">90</div>
              <div class=\"ibew-brand__text\">
                <span class=\"ibew-eyebrow\">";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("The New Haven Electricians"));
            yield "</span>
                <span class=\"ibew-brand__title\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW Local"));
            yield "</span>
              </div>
            </a>
            
            ";
            // line 55
            yield "            <div class=\"flex-grow-1 d-flex justify-content-center\">
              ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 57), "html", null, true);
                yield "
              ";
            } else {
                // line 59
                yield "                 ";
                // line 60
                yield "                 <nav class=\"ibew-nav__links\">
                   <a href=\"/about\">";
                // line 61
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
                yield "</a>
                   <a href=\"/events\">";
                // line 62
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
                yield "</a>
                   <a href=\"/training\">";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Training"));
                yield "</a>
                   <a href=\"/contractors\">";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
                yield "</a>
                   <a href=\"/members\">";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Members"));
                yield "</a>
                   <a href=\"/resources\">";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resources"));
                yield "</a>
                 </nav>
              ";
            }
            // line 69
            yield "            </div>
          ";
        }
        // line 71
        yield "
          <button class=\"ibew-nav__toggle js-ibew-nav-toggle\" aria-expanded=\"false\">
            ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        yield "
          </button>

          <div class=\"ibew-nav__cta\">
            <a class=\"ibew-cta ibew-cta--ghost\" href=\"/civicrm/user\">";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("My IBEW 90"));
        yield "</a>
            <a class=\"ibew-cta ibew-cta--primary\" href=\"/content/book-1-re-sign-procedure\">";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Member Re-Sign"));
        yield "</a>
          </div>
      </div>
    </div>
  </header>

  <main role=\"main\" class=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 88
        yield "    ";
        $context["has_canvas"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 88) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 88), "isEmpty", [], "method", false, false, true, 88));
        // line 89
        yield "
    ";
        // line 90
        if ((($tmp = ($context["has_canvas"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "      ";
            // line 92
            yield "      <div class=\"ibew-canvas-layout w-full min-h-screen\">
          ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 93), "html", null, true);
            yield "
      </div>
    ";
        } else {
            // line 96
            yield "      ";
            // line 97
            yield "      <div class=\"ibew-shell container py-5\">
        <div class=\"row g-4\">
          ";
            // line 100
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "            <aside class=\"col-lg-3\">
               <div class=\"ibew-card ibew-ghost-border h-100\">
                ";
                // line 103
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103), "html", null, true);
                yield "
              </div>
            </aside>
          ";
            }
            // line 107
            yield "  
          ";
            // line 109
            yield "          ";
            $context["content_class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 109))) ? ("col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 109))) ? ("col-lg-9") : ("col-12"))));
            // line 110
            yield "          <div class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_class"] ?? null), "html", null, true);
            yield "\">
            <div class=\"ibew-card ibew-ghost-border min-h-50vh\">
              ";
            // line 112
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 112), "html", null, true);
            yield "
            </div>
          </div>
  
          ";
            // line 117
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "            <aside class=\"col-lg-3\">
              <div class=\"ibew-card ibew-ghost-border h-100\">
                ";
                // line 120
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120), "html", null, true);
                yield "
              </div>
            </aside>
          ";
            }
            // line 124
            yield "        </div>
      </div>
    ";
        }
        // line 127
        yield "  </main>

  ";
        // line 130
        yield "  <footer class=\"ibew-footer\">
    <div class=\"ibew-shell max-w-7xl mx-auto px-6\">
      
      <div class=\"ibew-footer__container\">
        <!-- Col 1: Brand -->
        <div class=\"ibew-footer__brand-col\">
          ";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 136), "html", null, true);
        yield "
        </div>

        <!-- Col 2: Quick Links -->
        <div>
          ";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 141), "html", null, true);
        yield "
        </div>

        <!-- Col 3: Members -->
        <div>
           ";
        // line 146
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 146), "html", null, true);
        yield "
        </div>

        <!-- Col 4: Contact -->
        <div>
          ";
        // line 151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 151), "html", null, true);
        yield "
        </div>

      </div>

      <div class=\"ibew-footer__bottom\">
        ";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 158), "html", null, true);
            yield "
        ";
        } else {
            // line 160
            yield "          &copy; ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " IBEW Local 90. All rights reserved.
        ";
        }
        // line 162
        yield "      </div>
    </div>
  </footer>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "node"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/page.html.twig";
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
        return array (  328 => 162,  322 => 160,  316 => 158,  314 => 157,  305 => 151,  297 => 146,  289 => 141,  281 => 136,  273 => 130,  269 => 127,  264 => 124,  257 => 120,  253 => 118,  250 => 117,  243 => 112,  237 => 110,  234 => 109,  231 => 107,  224 => 103,  220 => 101,  217 => 100,  213 => 97,  211 => 96,  205 => 93,  202 => 92,  200 => 91,  198 => 90,  195 => 89,  192 => 88,  180 => 78,  176 => 77,  169 => 73,  165 => 71,  161 => 69,  155 => 66,  151 => 65,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  132 => 60,  130 => 59,  124 => 57,  122 => 56,  119 => 55,  112 => 50,  108 => 49,  103 => 46,  101 => 45,  95 => 43,  93 => 42,  86 => 37,  80 => 33,  62 => 16,  60 => 15,  54 => 13,  52 => 12,  48 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12, "set" => 88];
        static $filters = ["escape" => 13, "t" => 49, "date" => 160];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't', 'date'],
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
