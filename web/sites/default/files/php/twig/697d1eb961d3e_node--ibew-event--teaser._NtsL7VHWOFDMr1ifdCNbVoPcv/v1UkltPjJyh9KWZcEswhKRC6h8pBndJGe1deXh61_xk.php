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
        // line 1
        $context["date_day"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_date", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1), "d");
        // line 2
        $context["date_month"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_date", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2), "M");
        // line 3
        $context["date_time_start"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_event_date", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3), "g:i A");
        // line 4
        $context["label_text"] = CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 4);
        // line 5
        $context["is_training"] = (CoreExtension::inFilter("Training", ($context["label_text"] ?? null)) || CoreExtension::inFilter("Safety", ($context["label_text"] ?? null)));
        // line 6
        $context["date_bg_class"] = (((($tmp = ($context["is_training"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-ibew-raspberry") : ("bg-ibew-navy"));
        // line 7
        yield "
<article";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ibew-event-card group flex flex-col md:flex-row bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100 h-full"], "method", false, false, true, 8), "html", null, true);
        yield ">
  
  ";
        // line 11
        yield "  <div class=\"ibew-event-date w-full md:w-32 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_bg_class"] ?? null), "html", null, true);
        yield " text-white flex flex-col items-center justify-center p-4 flex-shrink-0\">
    <span class=\"text-4xl fw-bold font-oswald leading-none\">";
        // line 12
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_day", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_day");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_day");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_day"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_day", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_day");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_day");
            }
        }
        yield "</span>
    <span class=\"text-sm uppercase tracking-wider mt-1 fw-bold\">";
        // line 13
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_month", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_month");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_month");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_month"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_month", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_month");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_month");
            }
        }
        yield "</span>
  </div>

  ";
        // line 17
        yield "  <div class=\"p-6 flex-grow flex flex-col justify-between\">
    <div>
        <h3 class=\"font-oswald text-xl fw-bold text-ibew-navy mb-2 group-hover:text-ibew-gold transition-colors\">
          <a href=\"";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"text-decoration-none text-reset\">";
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
        yield "</a>
        </h3>
        
        <div class=\"flex flex-wrap gap-x-6 gap-y-2 text-sm text-gray-500 mb-3\">
             <div class=\"flex items-center gap-2\">
                 ";
        // line 26
        yield "                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z\"/><path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z\"/></svg>
                 <span>";
        // line 27
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_time_start", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_time_start");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "date_time_start");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date_time_start"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("date_time_start", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_time_start");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "date_time_start");
            }
        }
        yield "</span>
             </div>
             ";
        // line 29
        if ((($tmp = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location", [], "any", false, false, true, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "             <div class=\"flex items-center gap-2\">
                 ";
            // line 32
            yield "                 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
                 <span>";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location", [], "any", false, false, true, 33), "html", null, true);
            yield "</span>
             </div>
             ";
        }
        // line 36
        yield "        </div>

        <div class=\"text-sm text-gray-600 line-clamp-2 mb-4\">
             ";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 39), "html", null, true);
        yield "
        </div>
    </div>
    
    <div class=\"flex justify-between items-center border-top pt-3 mt-auto\">
        <div class=\"text-xs font-bold text-uppercase tracking-wider ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["is_training"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-ibew-raspberry") : ("text-ibew-navy")));
        yield "\">
            ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["is_training"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Training") : ("Meeting")));
        yield "
        </div>
        <a href=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"text-sm fw-bold text-primary text-decoration-none group-hover:translate-x-1 transition-transform inline-block\">Register &rarr;</a>
    </div>

  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "attributes", "url", "label", "content"]);        yield from [];
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
        return array (  194 => 47,  189 => 45,  185 => 44,  177 => 39,  172 => 36,  166 => 33,  163 => 32,  160 => 30,  158 => 29,  139 => 27,  136 => 26,  112 => 20,  107 => 17,  87 => 13,  69 => 12,  64 => 11,  59 => 8,  56 => 7,  54 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--ibew-event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 29];
        static $filters = ["date" => 1, "escape" => 8, "render" => 29];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['date', 'escape', 'render'],
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
