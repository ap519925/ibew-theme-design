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

/* themes/custom/ibew_theme/templates/node/node--page.html.twig */
class __TwigTemplate_69831edc5795701b31efc27911839299 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ibew-basic-page", "py-5"], "method", false, false, true, 7), "html", null, true);
        yield ">
\t<div class=\"ibew-shell\">

\t\t<header class=\"mb-5 pb-4 border-bottom\">
\t\t\t<h1 class=\"display-4 fw-bold font-oswald text-dark mb-0\">";
        // line 11
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
\t\t</header>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"content-body lead text-dark\">
\t\t\t\t\t";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 17), "html", null, true);
        yield "
\t\t\t\t</div>

\t\t\t\t";
        // line 21
        yield "\t\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_gallery", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "\t\t\t\t\t<style>
\t\t\t\t\t\t.photoswipe-gallery-container .field__items {
\t\t\t\t\t\t\tdisplay: grid;
\t\t\t\t\t\t\tgrid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
\t\t\t\t\t\t\tgap: 1rem;
\t\t\t\t\t\t}
\t\t\t\t\t\t.photoswipe-gallery-container .field__item {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\toverflow: hidden;
\t\t\t\t\t\t\tborder-radius: 0.5rem;
\t\t\t\t\t\t\tbox-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t}
\t\t\t\t\t\t.photoswipe-gallery-container img {
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\theight: 200px;
\t\t\t\t\t\t\tobject-fit: cover;
\t\t\t\t\t\t\ttransition: transform 0.3s ease;
\t\t\t\t\t\t}
\t\t\t\t\t\t.photoswipe-gallery-container .field__item:hover img {
\t\t\t\t\t\t\ttransform: scale(1.05);
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"mt-5 mb-5 pb-5 border-bottom\">
\t\t\t\t\t\t<h3 class=\"h4 font-oswald text-uppercase mb-4 border-start border-4 border-warning ps-3\">Photo Gallery</h3>
\t\t\t\t\t\t<div class=\"photoswipe-gallery-container\">
\t\t\t\t\t\t\t";
            // line 47
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_gallery", [], "any", false, false, true, 47), "html", null, true);
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        yield "
\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "body", "field_image_gallery"), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--page.html.twig";
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
        return array (  122 => 53,  118 => 51,  111 => 47,  84 => 22,  81 => 21,  75 => 17,  52 => 11,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--page.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21];
        static $filters = ["escape" => 7, "without" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
