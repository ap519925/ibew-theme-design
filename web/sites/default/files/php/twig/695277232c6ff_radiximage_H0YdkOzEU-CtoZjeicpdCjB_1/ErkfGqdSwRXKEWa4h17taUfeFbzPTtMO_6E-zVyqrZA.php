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

/* radix:image */
class __TwigTemplate_59976c808b521248c4cb958af356aef5 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:image"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:image"));
        // line 23
        $context["image_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : (((($context["image_attributes"] ?? null)) ? ($context["image_attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()))));
        // line 24
        yield "
";
        // line 25
        if ((($tmp = ($context["src"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "  ";
            $context["image_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "setAttribute", ["src", ((            // line 27
($context["src"] ?? null)) ? ($context["src"]) : (""))], "method", false, false, true, 26), "setAttribute", ["alt", ((            // line 28
($context["alt"] ?? null)) ? ($context["alt"]) : (""))], "method", false, false, true, 27), "setAttribute", ["title", ((            // line 29
($context["title"] ?? null)) ? ($context["title"]) : (""))], "method", false, false, true, 28), "setAttribute", ["width", ((            // line 30
($context["width"] ?? null)) ? ($context["width"]) : (""))], "method", false, false, true, 29), "setAttribute", ["height", ((            // line 31
($context["height"] ?? null)) ? ($context["height"]) : (""))], "method", false, false, true, 30), "setAttribute", ["loading", ((            // line 32
($context["loading"] ?? null)) ? ($context["loading"]) : ("auto"))], "method", false, false, true, 31);
        }
        // line 35
        yield "
";
        // line 37
        $context["align_classes"] = ["start" => ["float-start"], "center" => ["mx-auto", "d-block"], "end" => ["float-end"]];
        // line 43
        yield "
";
        // line 44
        $context["image_classes"] = Twig\Extension\CoreExtension::merge([(((($tmp =         // line 45
($context["align"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::join((($_v0 = ($context["align_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["align"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["align_classes"] ?? null), ($context["align"] ?? null), [], "array", false, false, true, 45)), " ")) : ("")), (((($tmp =         // line 46
($context["responsive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("img-fluid") : ("")), (((($tmp =         // line 47
($context["thumbnails"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("img-thumbnail") : ("")), (((($tmp =         // line 48
($context["rounded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rounded") : (""))], ((        // line 49
($context["image_utility_classes"] ?? null)) ? ($context["image_utility_classes"]) : ([])));
        // line 51
        yield "
<img";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["image_attributes"] ?? null), "addClass", [($context["image_classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "src", "alt", "title", "width", "height", "loading", "align", "responsive", "thumbnails", "rounded", "image_utility_classes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:image";
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
        return array (  83 => 52,  80 => 51,  78 => 49,  77 => 48,  76 => 47,  75 => 46,  74 => 45,  73 => 44,  70 => 43,  68 => 37,  65 => 35,  62 => 32,  61 => 31,  60 => 30,  59 => 29,  58 => 28,  57 => 27,  55 => 26,  53 => 25,  50 => 24,  48 => 23,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:image", "themes/contrib/radix/components/image/image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 25];
        static $filters = ["merge" => 49, "join" => 45, "escape" => 52];
        static $functions = ["create_attribute" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'join', 'escape'],
                ['create_attribute'],
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
