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

/* themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig */
class __TwigTemplate_a295fa4b71d1795007d2e7b2556582e6 extends Template
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
        $context["event_date"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_date", [], "any", false, false, true, 2), "date", [], "any", false, false, true, 2);
        yield " ";
        // line 3
        if ((($tmp = ($context["event_date"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  ";
            $context["day"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["event_date"] ?? null), "d");
            // line 5
            yield "  ";
            $context["month"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["event_date"] ?? null), "M"));
            // line 6
            yield "  ";
            $context["time"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["event_date"] ?? null), "g:i A");
        } else {
            // line 8
            yield "  ";
            $context["day"] = "00";
            // line 9
            yield "  ";
            $context["month"] = "OCT";
            // line 10
            yield "  ";
            $context["time"] = "TBD";
        }
        // line 12
        yield "
";
        // line 13
        $context["location"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_location", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13);
        // line 14
        yield "
<article class=\"ibew-event-card d-flex align-items-center bg-white rounded-3 shadow-sm p-3 mb-3 border-0 position-relative transition-hover\">
  
  ";
        // line 18
        yield "  <div class=\"ibew-date-badge d-flex flex-column align-items-center justify-content-center rounded-2 text-white flex-shrink-0 me-3 bg-primary\" style=\"width: 60px; height: 60px;\">
    <span class=\"fs-4 fw-bold lh-1\">";
        // line 19
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("day", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "day");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "day");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["day"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("day", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "day");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "day");
            }
        }
        yield "</span>
    <span class=\"small fw-bold text-uppercase lh-1\" style=\"font-size: 0.7rem;\">";
        // line 20
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("month", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "month");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "month");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["month"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("month", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "month");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "month");
            }
        }
        yield "</span>
  </div>

  ";
        // line 24
        yield "  <div class=\"flex-grow-1 min-w-0\">
    <h3 class=\"h6 fw-bold text-uppercase text-dark mb-1 text-truncate font-oswald text-wrap\" style=\"line-height:1.2;\">
      <a href=\"";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"text-decoration-none text-dark stretched-link\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 26), "html", null, true);
        yield "</a>
    </h3>
    
    <div class=\"d-flex flex-column flex-sm-row gap-2 small text-muted\">
       <div class=\"d-flex align-items-center gap-1\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z\"/><path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z\"/></svg>
          <span>";
        // line 32
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("time", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "time");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "time");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["time"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("time", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "time");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "time");
            }
        }
        yield "</span>
       </div>
       ";
        // line 34
        if ((($tmp = ($context["location"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "       <div class=\"d-flex align-items-center gap-1\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"12\" height=\"12\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/><path d=\"M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4z\"/></svg>
          <span class=\"text-truncate\">";
            // line 37
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("location", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "location");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "location");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["location"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("location", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "location");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "location");
                }
            }
            yield "</span>
       </div>
       ";
        }
        // line 40
        yield "    </div>
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig";
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
        return array (  180 => 40,  160 => 37,  156 => 35,  154 => 34,  135 => 32,  124 => 26,  120 => 24,  100 => 20,  82 => 19,  79 => 18,  74 => 14,  72 => 13,  69 => 12,  65 => 10,  62 => 9,  59 => 8,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 3];
        static $filters = ["date" => 4, "upper" => 5, "escape" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['date', 'upper', 'escape'],
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
