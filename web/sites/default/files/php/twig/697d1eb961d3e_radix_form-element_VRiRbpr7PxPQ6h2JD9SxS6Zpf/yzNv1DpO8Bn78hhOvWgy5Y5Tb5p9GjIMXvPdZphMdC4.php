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

/* radix:form-element */
class __TwigTemplate_492f3f12a52728ae57d2971e3a1b4802 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:form-element"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:form-element"));
        // line 50
        $context["form_element_classes"] = Twig\Extension\CoreExtension::merge(["js-form-item", "form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["type"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 56
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 57
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 58
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled disabled") : ("")), (((($tmp =         // line 59
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--error has-error") : ("")), "form-group"], ((        // line 61
($context["form_element_utility_classes"] ?? null)) ? ($context["form_element_utility_classes"]) : ([])));
        // line 63
        yield "
";
        // line 65
        $context["description_classes"] = ["description", "form-text", "text-muted", (((        // line 69
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 72
        yield "
";
        // line 73
        $context["form_element_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 74
        yield "
<div";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["form_element_attributes"] ?? null), "addClass", [($context["form_element_classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        yield ">
  ";
        // line 76
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 77
            yield "    ";
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
        }
        // line 79
        yield "
  ";
        // line 80
        if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
            // line 81
            yield "    <div class=\"input-group\">
    ";
        }
        // line 83
        yield "
    ";
        // line 84
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "      <span class=\"field-prefix input-group-text\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("prefix", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "prefix");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "prefix");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("prefix", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "prefix");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "prefix");
                }
            }
            yield "</span>
    ";
        }
        // line 87
        yield "
    ";
        // line 88
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 88))) {
            // line 89
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 89), "html", null, true);
            yield ">
        ";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 90), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 93
        yield "
    ";
        // line 94
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("children", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "children");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "children");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("children", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "children");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "children");
            }
        }
        yield "

    ";
        // line 96
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 97
            yield "      <span class=\"field-suffix input-group-text\">";
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("suffix", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "suffix");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "suffix");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("suffix", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "suffix");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "suffix");
                }
            }
            yield "</span>
    ";
        }
        // line 99
        yield "
    ";
        // line 100
        if (((!Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) || (!Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))))) {
            // line 101
            yield "    </div>
  ";
        }
        // line 103
        yield "
  ";
        // line 104
        if ((($context["label_display"] ?? null) == "after")) {
            // line 105
            yield "    ";
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
        }
        // line 107
        yield "
  ";
        // line 108
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "    <div class=\"invalid-feedback\">
      ";
            // line 110
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("errors", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "errors");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "errors");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("errors", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "errors");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "errors");
                }
            }
            yield "
    </div>
  ";
        }
        // line 113
        yield "
  ";
        // line 114
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 114))) {
            // line 115
            yield "    <small";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 115), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 115), "html", null, true);
            yield ">
      ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 116), "html", null, true);
            yield "
    </small>
  ";
        }
        // line 119
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "form_element_utility_classes", "description_display", "attributes", "label_display", "label", "prefix", "suffix", "description", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:form-element";
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
        return array (  270 => 119,  264 => 116,  259 => 115,  257 => 114,  254 => 113,  234 => 110,  231 => 109,  229 => 108,  226 => 107,  206 => 105,  204 => 104,  201 => 103,  197 => 101,  195 => 100,  192 => 99,  172 => 97,  170 => 96,  151 => 94,  148 => 93,  142 => 90,  137 => 89,  135 => 88,  132 => 87,  112 => 85,  110 => 84,  107 => 83,  103 => 81,  101 => 80,  98 => 79,  78 => 77,  76 => 76,  72 => 75,  69 => 74,  67 => 73,  64 => 72,  62 => 69,  61 => 65,  58 => 63,  56 => 61,  55 => 59,  54 => 58,  53 => 57,  52 => 56,  51 => 55,  50 => 54,  49 => 53,  48 => 50,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:form-element", "themes/contrib/radix/components/form-element/form-element.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 50, "if" => 76];
        static $filters = ["merge" => 61, "clean_class" => 53, "escape" => 75];
        static $functions = ["create_attribute" => 73];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'clean_class', 'escape'],
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
