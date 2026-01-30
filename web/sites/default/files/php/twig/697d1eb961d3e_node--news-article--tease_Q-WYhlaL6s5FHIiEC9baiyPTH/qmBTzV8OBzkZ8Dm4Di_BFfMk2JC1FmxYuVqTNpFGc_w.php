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

/* themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig */
class __TwigTemplate_820d0aa4f97e85c2d0ec4cb1ff9ff60d extends Template
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
        // line 1
        yield "<article class=\"card ibew-card h-100 p-0 overflow-hidden d-flex flex-column border-0 shadow-sm rounded-4\">
  ";
        // line 2
        $context["link_url"] = ($context["url"] ?? null);
        // line 3
        yield "  ";
        $context["link_target"] = "_self";
        // line 4
        yield "  ";
        // line 5
        yield "  ";
        $context["source_label"] = (((($tmp = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_source", [], "any", false, false, true, 5))))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_source", [], "any", false, false, true, 5))))) : ("News"));
        // line 6
        yield "
  <div class=\"card-img-top position-relative bg-secondary w-100 overflow-hidden illustration-container\">
    ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_image", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "       ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_image", [], "any", false, false, true, 9), "html", null, true);
            yield "
    ";
        }
        // line 11
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_url"] ?? null), "html", null, true);
        yield "\" class=\"stretched-link visually-hidden\" aria-label=\"Read ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "\"></a>
  </div>

  <div class=\"card-body p-4 d-flex flex-column flex-grow-1 bg-white\">
    <div class=\"d-flex align-items-center flex-wrap gap-2 mb-2 small\">
       <span class=\"badge bg-primary text-white rounded-1 px-2 py-1 fw-bold text-uppercase\" style=\"font-size: 0.7rem;\">
          ";
        // line 17
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("source_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "source_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "source_label");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["source_label"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("source_label", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "source_label");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "source_label");
            }
        }
        yield "
       </span>
       <span class=\"text-muted fw-bold\">&bull;</span>
       ";
        // line 21
        yield "       <span class=\"text-muted fw-bold\">
         ";
        // line 22
        if ((($tmp = Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_date", [], "any", false, false, true, 22)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_date", [], "any", false, false, true, 23), "html", null, true);
            yield "
         ";
        } else {
            // line 25
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), "F j, Y"), "html", null, true);
            yield "
         ";
        }
        // line 27
        yield "       </span>
    </div>

    <h3 class=\"card-title fw-bold mb-3 font-oswald text-uppercase text-dark lh-base\">
      ";
        // line 31
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
        yield "
    </h3>

    ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "      <div class=\"card-text text-muted opacity-75 small mb-4 flex-grow-1\">
        ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 36)))), 0, 120) . "..."), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 39
        yield "
    <div class=\"mt-auto\">
      <a href=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_url"] ?? null), "html", null, true);
        yield "\" class=\"fw-bold text-decoration-none text-primary d-inline-flex align-items-center gap-1\">
        Read More <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/></svg>
      </a>
    </div>
  </div>
</article>
<style>
/* Local override to ensure image fills the constrained container */
.illustration-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "content", "label", "node"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig";
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
        return array (  159 => 41,  155 => 39,  149 => 36,  146 => 35,  144 => 34,  124 => 31,  118 => 27,  112 => 25,  106 => 23,  104 => 22,  101 => 21,  81 => 17,  69 => 11,  63 => 9,  61 => 8,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 8];
        static $filters = ["trim" => 5, "striptags" => 5, "render" => 5, "escape" => 9, "date" => 25, "slice" => 36];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'striptags', 'render', 'escape', 'date', 'slice'],
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
