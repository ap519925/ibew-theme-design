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

/* themes/custom/ibew_theme/templates/node/node--ibew-news--teaser.html.twig */
class __TwigTemplate_220d0f80872d87431cb92efa891827fa extends Template
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
        $context["external_url"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_external_link", [], "any", false, false, true, 2), "uri", [], "any", false, false, true, 2);
        // line 3
        yield "  ";
        $context["link_url"] = (((($tmp = ($context["external_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["external_url"] ?? null)) : (($context["url"] ?? null)));
        // line 4
        yield "  ";
        $context["link_target"] = (((($tmp = ($context["external_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("_blank") : ("_self"));
        // line 5
        yield "  ";
        $context["source_label"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_news_source", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_news_source", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5)) : ("Union News"));
        // line 6
        yield "
  ";
        // line 8
        yield "  <div class=\"card-img-top position-relative bg-secondary w-100 overflow-hidden illustration-container\">
    ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_image", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "       ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_image", [], "any", false, false, true, 10), "html", null, true);
            yield "
    ";
        }
        // line 12
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_url"] ?? null), "html", null, true);
        yield "\" target=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_target"] ?? null), "html", null, true);
        yield "\" class=\"stretched-link visually-hidden\" aria-label=\"Read ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "\"></a>
  </div>

  <div class=\"card-body p-4 d-flex flex-column flex-grow-1 bg-white\">
    ";
        // line 17
        yield "    <div class=\"d-flex align-items-center flex-wrap gap-2 mb-2 small\">
       ";
        // line 19
        yield "       <span class=\"badge ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["external_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-info text-dark") : ("bg-primary text-white")));
        yield " rounded-1 px-2 py-1 fw-bold text-uppercase\" style=\"font-size: 0.7rem;\">
          ";
        // line 20
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
       <span class=\"text-muted fw-bold\">";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_news_date", [], "any", false, false, true, 23), "html", null, true);
        yield "</span>
    </div>

    <h3 class=\"card-title fw-bold mb-3 font-oswald text-uppercase text-dark lh-base\">
      ";
        // line 27
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
      ";
        // line 28
        if ((($tmp = ($context["external_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "        <svg class=\"ms-1 text-muted\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" viewBox=\"0 0 16 16\" style=\"vertical-align: text-top;\"><path fill-rule=\"evenodd\" d=\"M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z\"/><path fill-rule=\"evenodd\" d=\"M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z\"/></svg>
      ";
        }
        // line 31
        yield "    </h3>

    ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "      <div class=\"card-text text-muted opacity-75 small mb-4 flex-grow-1\">
        ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 35)))), 0, 120) . "..."), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 38
        yield "
    <div class=\"mt-auto\">
      <a href=\"";
        // line 40
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
            ->checkDeprecations($context, ["node", "url", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--ibew-news--teaser.html.twig";
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
        return array (  162 => 40,  158 => 38,  152 => 35,  149 => 34,  147 => 33,  143 => 31,  139 => 29,  137 => 28,  119 => 27,  112 => 23,  92 => 20,  87 => 19,  84 => 17,  72 => 12,  66 => 10,  64 => 9,  61 => 8,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--ibew-news--teaser.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--ibew-news--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 9];
        static $filters = ["escape" => 10, "slice" => 35, "trim" => 35, "striptags" => 35, "render" => 35];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'slice', 'trim', 'striptags', 'render'],
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
