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
        $context["source_label"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_tags", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "label", [], "any", false, false, true, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_tags", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), "entity", [], "any", false, false, true, 5), "label", [], "any", false, false, true, 5)) : ("News"));
        // line 6
        yield "
  ";
        // line 8
        yield "  <div class=\"card-img-top position-relative bg-secondary w-100 overflow-hidden illustration-container\">
    ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_featured_image", [], "any", false, false, true, 9), "entity", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "      ";
            // line 11
            yield "      ";
            $context["media_entity"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_featured_image", [], "any", false, false, true, 11), "entity", [], "any", false, false, true, 11);
            // line 12
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "          ";
                $context["image_file"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13);
                // line 14
                yield "          ";
                $context["image_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["image_file"] ?? null), "uri", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14));
                // line 15
                yield "          <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["image_url"] ?? null), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["media_entity"] ?? null), "field_media_image", [], "any", false, false, true, 15), "alt", [], "any", false, false, true, 15), "html", null, true);
                yield "\" class=\"w-100 h-100\" style=\"object-fit: cover;\" loading=\"lazy\">
      ";
            }
            // line 17
            yield "    ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_image", [], "any", false, false, true, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "       ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_featured_image", [], "any", false, false, true, 18), "html", null, true);
            yield "
    ";
        }
        // line 20
        yield "    <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_url"] ?? null), "html", null, true);
        yield "\" target=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link_target"] ?? null), "html", null, true);
        yield "\" class=\"stretched-link visually-hidden\" aria-label=\"Read ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "\"></a>
  </div>

  <div class=\"card-body p-4 d-flex flex-column flex-grow-1 ibew-card-surface\">
    ";
        // line 25
        yield "    <div class=\"d-flex align-items-center flex-wrap gap-2 mb-2 small\">
       ";
        // line 27
        yield "       <span class=\"badge bg-primary text-white rounded-1 px-2 py-1 fw-bold text-uppercase\" style=\"font-size: 0.7rem;\">
          ";
        // line 28
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
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_published_date", [], "any", false, false, true, 31), "html", null, true);
        yield "</span>
    </div>

    <h3 class=\"card-title fw-bold mb-3 font-oswald text-uppercase text-dark lh-base\">
      ";
        // line 35
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
        // line 36
        if ((($tmp = ($context["external_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "        <svg class=\"ms-1 text-muted\" xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" viewBox=\"0 0 16 16\" style=\"vertical-align: text-top;\"><path fill-rule=\"evenodd\" d=\"M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z\"/><path fill-rule=\"evenodd\" d=\"M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z\"/></svg>
      ";
        }
        // line 39
        yield "    </h3>

    ";
        // line 41
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "      <div class=\"card-text text-muted opacity-75 small mb-4 flex-grow-1\">
        ";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 43)))), 0, 120) . "..."), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 46
        yield "
    <div class=\"mt-auto\">
      <a href=\"";
        // line 48
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
            ->checkDeprecations($context, ["url", "node", "content", "label", "external_url"]);        yield from [];
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
        return array (  184 => 48,  180 => 46,  174 => 43,  171 => 42,  169 => 41,  165 => 39,  161 => 37,  159 => 36,  141 => 35,  134 => 31,  114 => 28,  111 => 27,  108 => 25,  96 => 20,  90 => 18,  87 => 17,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  65 => 10,  63 => 9,  60 => 8,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--news-article--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 9];
        static $filters = ["escape" => 15, "slice" => 43, "trim" => 43, "striptags" => 43, "render" => 43];
        static $functions = ["file_url" => 14];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'slice', 'trim', 'striptags', 'render'],
                ['file_url'],
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
