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

/* themes/contrib/radix/src/kits/radix_starterkit/templates/form/form-element.html.twig */
class __TwigTemplate_cbeb7bb3b6a9af2b5c1f2ee77e59df66 extends Template
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
        // line 48
        yield from $this->load("radix:form-element", 48)->unwrap()->yield(CoreExtension::merge($context, ["errors" =>         // line 49
($context["errors"] ?? null), "prefix" =>         // line 50
($context["prefix"] ?? null), "suffix" =>         // line 51
($context["suffix"] ?? null), "type" =>         // line 52
($context["type"] ?? null), "name" =>         // line 53
($context["name"] ?? null), "label" =>         // line 54
($context["label"] ?? null), "label_display" =>         // line 55
($context["label_display"] ?? null), "description_display" =>         // line 56
($context["description_display"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["errors", "prefix", "suffix", "type", "name", "label", "label_display", "description_display"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/radix/src/kits/radix_starterkit/templates/form/form-element.html.twig";
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
        return array (  52 => 56,  51 => 55,  50 => 54,  49 => 53,  48 => 52,  47 => 51,  46 => 50,  45 => 49,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/radix/src/kits/radix_starterkit/templates/form/form-element.html.twig", "/var/www/html/web/themes/contrib/radix/src/kits/radix_starterkit/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 48];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
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
