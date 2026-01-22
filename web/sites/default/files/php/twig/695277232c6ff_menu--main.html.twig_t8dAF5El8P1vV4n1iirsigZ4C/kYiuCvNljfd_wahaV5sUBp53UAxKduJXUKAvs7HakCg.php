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

/* themes/custom/ibew_theme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_6f02ed9ce97fc492d76c3d152868ce92 extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 8
        yield "
";
        // line 38
        yield "
";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 39, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 13
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "  ";
            $macros["menus"] = $this;
            // line 15
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 16
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 17
                    yield "      <nav class=\"ibew-nav__links\">
    ";
                } else {
                    // line 19
                    yield "      <div class=\"ibew-nav__dropdown\"> ";
                    // line 20
                    yield "    ";
                }
                // line 21
                yield "
    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    yield "      <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "html", null, true);
                    yield "\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 23), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 23), "html", null, true);
                    yield "</a>
      ";
                    // line 29
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                yield "
    ";
                // line 31
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 32
                    yield "      </nav>
    ";
                } else {
                    // line 34
                    yield "      </div>
    ";
                }
                // line 36
                yield "  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/navigation/menu--main.html.twig";
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
        return array (  127 => 36,  123 => 34,  119 => 32,  117 => 31,  114 => 30,  108 => 29,  99 => 23,  95 => 22,  92 => 21,  89 => 20,  87 => 19,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  60 => 13,  52 => 39,  49 => 38,  46 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 7, "macro" => 13, "if" => 15, "for" => 22];
        static $filters = ["escape" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
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
