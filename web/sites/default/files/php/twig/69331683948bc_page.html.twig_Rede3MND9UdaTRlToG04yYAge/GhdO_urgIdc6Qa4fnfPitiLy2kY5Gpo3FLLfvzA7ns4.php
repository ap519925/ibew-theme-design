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

/* themes/custom/ibew_theme/ibew_theme/templates/page.html.twig */
class __TwigTemplate_1bb096a0fd788f8b1f97c9cd9c1af9cb extends Template
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
        yield "<div class=\"layout-container\">
  ";
        // line 8
        yield from $this->load("ibew_theme:ibew-header", 8)->unwrap()->yield(CoreExtension::merge($context, ["site_name" => "IBEW Local 90", "slots" => ["navigation" => CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 11)]]));
        // line 14
        yield "
  ";
        // line 15
        if ((($tmp = ($context["is_front"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "    ";
            yield from $this->load("ibew_theme:ibew-hero", 16)->unwrap()->yield($context);
            // line 17
            yield "  ";
        }
        // line 18
        yield "
  <main role=\"main\" class=\"main-content\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "          <aside class=\"col-md-3 sidebar-first\" role=\"complementary\">
            ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 26), "html", null, true);
            yield "
          </aside>
        ";
        }
        // line 29
        yield "
        <div class=\"";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 30) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 30))) ? ("col-md-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 30) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 30))) ? ("col-md-9") : ("col-md-12")))));
        yield "\">
          ";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 31), "html", null, true);
        yield "
        </div>

        ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "          <aside class=\"col-md-3 sidebar-second\" role=\"complementary\">
            ";
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 36), "html", null, true);
            yield "
          </aside>
        ";
        }
        // line 39
        yield "      </div>
    </div>
  </main>

  ";
        // line 43
        yield from $this->load("ibew_theme:ibew-footer", 43)->unwrap()->yield(CoreExtension::merge($context, ["site_name" => "IBEW Local 90", "copyright_year" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")]));
        // line 47
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/ibew_theme/templates/page.html.twig";
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
        return array (  112 => 47,  110 => 43,  104 => 39,  98 => 36,  95 => 35,  93 => 34,  87 => 31,  83 => 30,  80 => 29,  74 => 26,  71 => 25,  69 => 24,  61 => 18,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  48 => 11,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/ibew_theme/templates/page.html.twig", "/var/www/html/web/themes/custom/ibew_theme/ibew_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 8, "if" => 15];
        static $filters = ["escape" => 26, "date" => 45];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'date'],
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
