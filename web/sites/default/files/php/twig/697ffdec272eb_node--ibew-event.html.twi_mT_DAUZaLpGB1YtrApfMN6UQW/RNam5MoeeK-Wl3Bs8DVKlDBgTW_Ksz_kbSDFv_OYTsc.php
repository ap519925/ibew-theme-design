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

/* themes/custom/ibew_theme/templates/node/node--ibew-event.html.twig */
class __TwigTemplate_51888b39452a07ef5e462ec2d1b9d595 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ibew-event-page", "py-5"], "method", false, false, true, 7), "html", null, true);
        yield ">
  <div class=\"ibew-shell\">
    
    ";
        // line 11
        yield "    <header class=\"row mb-5 align-items-center\">
      <div class=\"col-lg-8\">
        <div class=\"d-flex align-items-center gap-3 mb-3\">
             <span class=\"badge bg-primary fs-6 px-3 py-2 rounded-pill text-uppercase tracking-wider\">Event</span>
             ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_time", [], "any", false, false, true, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "               <span class=\"d-flex align-items-center text-muted fw-semibold\">
                  <svg class=\"me-2\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z\"/><path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z\"/></svg>
                  ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_time", [], "any", false, false, true, 18), "html", null, true);
            yield "
               </span>
             ";
        }
        // line 21
        yield "        </div>

        <h1 class=\"display-4 fw-bold font-oswald text-dark mb-2\">";
        // line 23
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
        
        ";
        // line 26
        yield "        <div class=\"d-flex align-items-center gap-2 text-secondary h4 font-oswald mb-0\">
           <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z\"/></svg>
           ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_date", [], "any", false, false, true, 28), "html", null, true);
        yield "
        </div>
      </div>
      
      ";
        // line 33
        yield "      <div class=\"col-lg-4 text-lg-end mt-4 mt-lg-0\">
         <div class=\"ibew-card bg-light p-4 border-0\">
             <div class=\"fw-bold text-uppercase text-muted small mb-2\">Actions</div>
             <a href=\"#register\" class=\"btn ibew-btn--gold w-100 mb-2\">Register Now</a>
             <a href=\"/events\" class=\"btn btn-outline-secondary w-100\">Back to Events</a>
         </div>
      </div>
    </header>

    ";
        // line 43
        yield "    <div class=\"row g-5\">
       <div class=\"col-lg-8\">
          ";
        // line 46
        yield "          ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_image", [], "any", false, false, true, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "            <div class=\"mb-5 rounded-4 overflow-hidden shadow-sm\">
               ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_image", [], "any", false, false, true, 48), "html", null, true);
            yield "
            </div>
          ";
        }
        // line 51
        yield "
          <div class=\"lead text-dark mb-4\">
            ";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 53), "html", null, true);
        yield "
          </div>
          
          <div class=\"ibew-event-details\">
             ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_description", [], "any", false, false, true, 57), "html", null, true);
        yield "
          </div>
          
          ";
        // line 61
        yield "          <div class=\"mt-4\">
             ";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_event_image", "field_event_date", "field_event_time", "field_event_description", "body"), "html", null, true);
        yield "
          </div>
       </div>

       <div class=\"col-lg-4\">
         <div class=\"sticky-top\" style=\"top: 120px;\">
           <div class=\"ibew-card p-4 border shadow-sm\">
             <h3 class=\"h5 font-oswald fw-bold mb-4 border-bottom pb-2\">Event Details</h3>
             
             <ul class=\"ibew-list\">
               <li>
                 <strong>Date:</strong> ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_date", [], "any", false, false, true, 73), "html", null, true);
        yield "
               </li>
               ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_time", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "               <li>
                 <strong>Time:</strong> ";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_time", [], "any", false, false, true, 77), "html", null, true);
            yield "
               </li>
               ";
        }
        // line 80
        yield "               ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "               <li>
                 <strong>Location:</strong> ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 82), "html", null, true);
            yield "
               </li>
               ";
        }
        // line 85
        yield "             </ul>
             
             <div class=\"mt-4 pt-4 border-top\">
                <p class=\"small text-muted\">Questions? Contact the hall at <a href=\"tel:1234567890\">123-456-7890</a>.</p>
             </div>
           </div>
         </div>
       </div>
    </div>

  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/node/node--ibew-event.html.twig";
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
        return array (  192 => 85,  186 => 82,  183 => 81,  180 => 80,  174 => 77,  171 => 76,  169 => 75,  164 => 73,  150 => 62,  147 => 61,  141 => 57,  134 => 53,  130 => 51,  124 => 48,  121 => 47,  118 => 46,  114 => 43,  103 => 33,  96 => 28,  92 => 26,  73 => 23,  69 => 21,  63 => 18,  59 => 16,  57 => 15,  51 => 11,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/node/node--ibew-event.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/node/node--ibew-event.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15];
        static $filters = ["escape" => 7, "without" => 62];
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
