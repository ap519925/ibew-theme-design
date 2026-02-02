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

/* themes/custom/ibew_theme/templates/node/node--news-article.html.twig */
class __TwigTemplate_d3ec22aa7142af15014c0c3bee195523 extends Template
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
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ibew-news-page", "py-5"], "method", false, false, true, 7), "html", null, true);
        yield ">
\t";
        // line 9
        yield "\t<div class=\"container-md max-w-4xl text-center mb-5\">
\t\t<div class=\"d-inline-flex flex-wrap justify-content-center align-items-center gap-2 text-primary fw-bold text-uppercase tracking-wider small mb-3\">
\t\t\t<span class=\"badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1\">News</span>
\t\t\t<span>&bull;</span>
\t\t\t";
        // line 14
        yield "\t\t\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_published_date", [], "any", false, false, true, 14), "html", null, true);
        yield "
\t\t</div>

\t\t<h1 class=\"display-5 fw-bold font-oswald text-dark mb-4\">";
        // line 17
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "label");
            }
        }
        yield "</h1>
\t</div>

\t";
        // line 21
        yield "
\t";
        // line 23
        yield "\t<div class=\"container-md\" style=\"max-width: 800px;\">
\t\t<div class=\"ibew-prose lead text-dark\">
\t\t\t";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 25), "html", null, true);
        yield "
\t\t</div>

\t\t";
        // line 29
        yield "\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "\t\t\t<div class=\"mt-4 pt-4 border-top\">
\t\t\t\t<strong>Tags:</strong>
\t\t\t\t";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 32), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 35
        yield "
\t\t<div class=\"mt-5 pt-5 border-top d-flex justify-content-between align-items-center\">
\t\t\t<a href=\"/news\" class=\"btn btn-outline-dark rounded-pill px-4\">
\t\t\t\t← Back to News
\t\t\t</a>
\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t<span class=\"text-muted small align-self-center me-2\">Share:</span>
\t\t\t\t";
        // line 43
        yield "\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(($context["url"] ?? null)), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm rounded-circle\" style=\"background-color: #3b5998; border-color: #3b5998;\" aria-label=\"Share on Facebook\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z\"/></svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"https://twitter.com/intent/tweet?url=";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(($context["url"] ?? null)), "html", null, true);
        yield "&text=";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(($context["label"] ?? null)), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-info btn-sm rounded-circle text-white\" style=\"background-color: #1da1f2; border-color: #1da1f2;\" aria-label=\"Share on Twitter\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z\"/></svg>
\t\t\t\t</a>
\t\t\t\t<a href=\"mailto:?subject=";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(($context["label"] ?? null)), "html", null, true);
        yield "&body=";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode(($context["url"] ?? null)), "html", null, true);
        yield "\" class=\"btn btn-secondary btn-sm rounded-circle\" style=\"background-color: #6c757d; border-color: #6c757d;\" aria-label=\"Share by Email\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewbox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 56
        yield "\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_gallery", [], "any", false, false, true, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "\t\t\t<style>
\t\t\t\t.photoswipe-gallery-container .field__items {
\t\t\t\t\tdisplay: grid;
\t\t\t\t\tgrid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
\t\t\t\t\tgap: 1rem;
\t\t\t\t}
\t\t\t\t.photoswipe-gallery-container .field__item {
\t\t\t\t\tdisplay: block;
\t\t\t\t\toverflow: hidden;
\t\t\t\t\tborder-radius: 0.5rem;
\t\t\t\t\tbox-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
\t\t\t\t}
\t\t\t\t.photoswipe-gallery-container img {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 200px; /* Fixed height for consistent grid */
\t\t\t\t\tobject-fit: cover;
\t\t\t\t\ttransition: transform 0.3s ease;
\t\t\t\t}
\t\t\t\t.photoswipe-gallery-container .field__item:hover img {
\t\t\t\t\ttransform: scale(1.05);
\t\t\t\t}
\t\t\t</style>
\t\t\t<div class=\"mt-5 mb-5 pb-5 border-bottom\">
\t\t\t\t<h3 class=\"h4 font-oswald text-uppercase mb-4 border-start border-4 border-warning ps-3\">Photo Gallery</h3>
\t\t\t\t<div class=\"photoswipe-gallery-container\">
\t\t\t\t\t";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_gallery", [], "any", false, false, true, 82), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 86
        yield "
\t\t<div class=\"mt-4\">
\t\t\t";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_featured_image", "field_published_date", "body", "field_tags", "field_image_gallery"), "html", null, true);
        yield "
\t\t</div>
\t</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "label", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--news-article.html.twig";
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
        return array (  184 => 88,  180 => 86,  173 => 82,  146 => 57,  143 => 56,  132 => 49,  124 => 46,  117 => 43,  108 => 35,  102 => 32,  98 => 30,  95 => 29,  89 => 25,  85 => 23,  82 => 21,  62 => 17,  55 => 14,  49 => 9,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--news-article.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--news-article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 29];
        static $filters = ["escape" => 7, "url_encode" => 43, "without" => 88];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'url_encode', 'without'],
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
