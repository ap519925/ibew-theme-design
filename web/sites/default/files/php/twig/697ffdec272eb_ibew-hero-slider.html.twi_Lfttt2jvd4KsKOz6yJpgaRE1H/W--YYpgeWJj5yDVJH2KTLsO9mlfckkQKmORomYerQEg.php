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

/* modules/custom/ibew_homepage_blocks/templates/ibew-hero-slider.html.twig */
class __TwigTemplate_805a7cf8705a1190250647c087a21fdf extends Template
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
        // line 10
        yield "<div id=\"ibewHeroSplide\" class=\"ibew-hero__slider splide w-100\" style=\"height: 100vh;\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hero Background Slider"));
        yield "\">
  <div class=\"splide__track w-100\" style=\"height: 100vh;\">
    <ul class=\"splide__list w-100\" style=\"height: 100vh;\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 14
            yield "        <li class=\"splide__slide w-100\" style=\"height: 100vh;\">
           <div class=\"ibew-slide-bg\" style=\"
               height: 100%; 
               width: 100%; 
               background-image: linear-gradient(rgba(11, 18, 34, 0.4), rgba(11, 18, 34, 0.6)), url('";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "url", [], "any", false, false, true, 18), "html", null, true);
            yield "');
               background-position: center;
               background-size: cover;
               background-repeat: no-repeat;
               background-attachment: fixed;
           \"></div>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </ul>
  </div>
  <div class=\"ibew-hero__overlay\"></div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slides"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/ibew_homepage_blocks/templates/ibew-hero-slider.html.twig";
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
        return array (  75 => 26,  61 => 18,  55 => 14,  51 => 13,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/ibew_homepage_blocks/templates/ibew-hero-slider.html.twig", "/var/www/html/web/modules/custom/ibew_homepage_blocks/templates/ibew-hero-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 13];
        static $filters = ["t" => 10, "escape" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
