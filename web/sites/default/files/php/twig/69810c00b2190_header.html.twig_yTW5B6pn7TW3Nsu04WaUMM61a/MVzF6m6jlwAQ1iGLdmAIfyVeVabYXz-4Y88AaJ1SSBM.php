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
        yield "<div
\tclass=\"ibew-header-wrapper\">
\t";
        // line 5
        yield "\t<div class=\"ibew-top-bar\" style=\"background-color: #1f2937; color: white;\">
\t\t<div class=\"ibew-shell d-flex justify-content-between align-items-center\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 2rem;\">
\t\t\t<div class=\"d-flex align-items-center gap-4\" style=\"display: flex; gap: 1rem;\">
\t\t\t\t<span class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem;\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
\t\t\t\t\t2 N Plains Industrial Rd, Wallingford, CT 06492
\t\t\t\t</span>
\t\t\t\t<a href=\"tel:1-800-562-2590\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
\t\t\t\t\t1-800-562-2590
\t\t\t\t</a>
\t\t\t\t<a href=\"mailto:info@ibewlocal90.org\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
\t\t\t\t\tinfo@ibewlocal90.org
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"d-flex align-items-center gap-3\" style=\"display: flex; gap: 1rem; align-items: center;\">
\t\t\t\t<a href=\"https://JoinIBEWCT.org\" style=\"color: white; text-decoration: none; font-weight: bold; font-size: 0.9rem;\">JoinIBEWCT.org</a>
\t\t\t\t<div style=\"display: flex; gap: 0.75rem;\">
\t\t\t\t\t<a href=\"#\" aria-label=\"Twitter\" style=\"color: white;\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z\"/></svg>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" aria-label=\"LinkedIn\" style=\"color: white;\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z\"/></svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 36
        yield "\t<nav class=\"ibew-nav sticky-top\">
\t\t<div class=\"ibew-shell ibew-nav__inner\">
\t\t\t<a href=\"/\" class=\"ibew-brand\">
\t\t\t\t<img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"IBEW Local 90\" class=\"ibew-brand__logo\">
\t\t\t\t<div class=\"ibew-brand__text\">
\t\t\t\t\t<span class=\"ibew-brand__title\">";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW LOCAL 90"));
        yield "</span>
\t\t\t\t\t<span class=\"ibew-eyebrow\">";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW Local 90"));
        yield "</span>
\t\t\t\t</div>
\t\t\t</a>

\t\t\t";
        // line 47
        yield "\t\t\t<div
\t\t\t\tclass=\"flex-grow-1 d-none d-xl-flex justify-content-center\">
\t\t\t\t";
        // line 50
        yield "\t\t\t\t";
        if ((($tmp = ($context["ibew_main_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "\t\t\t\t\t";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_main_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_main_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_main_menu");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ibew_main_menu"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_main_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_main_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_main_menu");
                }
            }
            yield "
\t\t\t\t";
        } else {
            // line 53
            yield "\t\t\t\t\t<nav class=\"ibew-nav__links\">
\t\t\t\t\t\t<a href=\"/\">";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "</a>
\t\t\t\t\t\t<a href=\"/about\">";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
            yield "</a>
\t\t\t\t\t\t<a href=\"/events\">";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
            yield "</a>
\t\t\t\t\t\t<a href=\"/news\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
            yield "</a>
\t\t\t\t\t\t<a href=\"/contractors\">";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
            yield "</a>
\t\t\t\t\t\t<a href=\"/contact\">";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact"));
            yield "</a>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 62
        yield "\t\t\t</div>

\t\t\t<div class=\"d-none d-xl-block\">
\t\t\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t\t\t<a class=\"ibew-cta ibew-cta--nav\" href=\"/user/login\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/></svg>
\t\t\t\t\t\t";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Member Sign-In"));
        yield "
\t\t\t\t\t</a>
\t\t\t\t\t<button class=\"js-theme-toggle btn btn-link p-2 text-decoration-none rounded-circle text-white hover:text-ibew-gold transition-colors\" aria-label=\"Toggle Theme\" style=\"min-width: 44px; min-height: 44px; border: 1px solid rgba(255,255,255,0.1);\">
\t\t\t\t\t\t<svg class=\"icon-sun text-warning\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<svg class=\"icon-moon text-white d-none\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Mobile Menu Toggle -->
\t\t\t<button class=\"ibew-mobile-toggle d-xl-none border-0 bg-transparent p-2 text-white\" aria-label=\"Toggle Menu\" id=\"ibewMobileToggle\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/></svg>
\t\t\t</button>
\t\t</div>
\t</nav>

\t";
        // line 89
        yield "\t<div class=\"ibew-mobile-menu d-none bg-white border-top shadow-sm p-4\" id=\"ibewMobileMenu\" style=\"position: absolute; width: 100%; z-index: 1050;\">
\t\t<nav
\t\t\tclass=\"d-flex flex-column gap-3 text-center\">

\t\t\t";
        // line 94
        yield "\t\t\t";
        if ((($tmp = ($context["ibew_mobile_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "\t\t\t\t";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_mobile_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_mobile_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_mobile_menu");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ibew_mobile_menu"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_mobile_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_mobile_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_mobile_menu");
                }
            }
            yield "
\t\t\t";
        } else {
            // line 97
            yield "\t\t\t\t<a href=\"/\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Home</a>
\t\t\t\t<a href=\"/about\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">About</a>
\t\t\t\t<a href=\"/events\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Events</a>
\t\t\t\t<a href=\"/news\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">News</a>
\t\t\t\t<a href=\"/contractors\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Contractors</a>
\t\t\t\t<a href=\"/contact\" class=\"text-decoration-none fw-bold text-dark fs-5 py-2 border-bottom\">Contact</a>
\t\t\t";
        }
        // line 104
        yield "
\t\t\t<a href=\"/user/login\" class=\"btn btn-primary w-100 mt-2\">Member Sign-In</a>
\t\t</nav>
\t</div>

\t";
        // line 110
        yield "\t<div class=\"d-xl-none\">
\t\t<input class=\"menu-icon-checkbox\" type=\"checkbox\" id=\"menu-icon-checkbox\" name=\"menu-icon-checkbox\"/>
\t\t<label class=\"menu-icon-label\" for=\"menu-icon-checkbox\"></label>
\t\t<div class=\"nav-animated\">
\t\t\t";
        // line 114
        if ((($tmp = ($context["ibew_mobile_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "\t\t\t\t";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_mobile_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_mobile_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "ibew_mobile_menu");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["ibew_mobile_menu"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("ibew_mobile_menu", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_mobile_menu");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "ibew_mobile_menu");
                }
            }
            yield "
\t\t\t";
        } else {
            // line 117
            yield "\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"/\">";
            // line 118
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "</a></li>
\t\t\t\t\t<li><a href=\"/about\">";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
            yield "</a></li>
\t\t\t\t\t<li><a href=\"/events\">";
            // line 120
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
            yield "</a></li>
\t\t\t\t\t<li><a href=\"/news\">";
            // line 121
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
            yield "</a></li>
\t\t\t\t\t<li><a href=\"/contractors\">";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
            yield "</a></li>
\t\t\t\t\t<li><a href=\"/contact\">";
            // line 123
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact"));
            yield "</a></li>
\t\t\t\t</ul>
\t\t\t";
        }
        // line 126
        yield "\t\t</div>
\t</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["ibew_main_menu", "ibew_mobile_menu"]);        yield from [];
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
        return array (  287 => 126,  281 => 123,  277 => 122,  273 => 121,  269 => 120,  265 => 119,  261 => 118,  258 => 117,  238 => 115,  236 => 114,  230 => 110,  223 => 104,  214 => 97,  194 => 95,  191 => 94,  185 => 89,  162 => 68,  154 => 62,  148 => 59,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  128 => 54,  125 => 53,  105 => 51,  102 => 50,  98 => 47,  91 => 42,  87 => 41,  80 => 36,  48 => 5,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ibew_theme/includes/header.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 50];
        static $filters = ["t" => 41, "escape" => 51];
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
