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

/* radix:node */
class __TwigTemplate_fbd78c4f5ec3095ce58433279be694c8 extends Template
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
            'node_title_prefix' => [$this, 'block_node_title_prefix'],
            'node_title' => [$this, 'block_node_title'],
            'node_title_suffix' => [$this, 'block_node_title_suffix'],
            'node_metadata' => [$this, 'block_node_metadata'],
            'node_content' => [$this, 'block_node_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.radix--node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "radix:node"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "radix:node"));
        // line 33
        $context["node_classes"] = Twig\Extension\CoreExtension::merge(["node", (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 35
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--promoted") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--sticky") : ("")), (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--unpublished") : ("")), \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["node"] ?? null), "bundle", [], "any", false, false, true, 38)), ((\Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["node"] ?? null), "bundle", [], "any", false, false, true, 39)) . "--") . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))), ("node--" . \Drupal\Component\Utility\Html::getClass(        // line 40
($context["view_mode"] ?? null))), ((("node--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 41
($context["node"] ?? null), "bundle", [], "any", false, false, true, 41))) . "--") . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null))), ("view-mode--" . \Drupal\Component\Utility\Html::getClass(        // line 42
($context["view_mode"] ?? null)))], ((        // line 43
($context["node_utility_classes"] ?? null)) ? ($context["node_utility_classes"]) : ([])));
        // line 45
        yield "
";
        // line 47
        $context["author_classes"] = Twig\Extension\CoreExtension::merge(["author"], ((        // line 49
($context["author_utility_classes"] ?? null)) ? ($context["author_utility_classes"]) : ([])));
        // line 51
        yield "
";
        // line 53
        $context["node_content_classes"] = Twig\Extension\CoreExtension::merge(["node__content"], ((        // line 55
($context["node_content_utility_classes"] ?? null)) ? ($context["node_content_utility_classes"]) : ([])));
        // line 57
        yield "
";
        // line 58
        $context["node_attributes"] = ((($context["attributes"] ?? null)) ? ($context["attributes"]) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 59
        yield "
<article ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["node_attributes"] ?? null), "addClass", [($context["node_classes"] ?? null)], "method", false, false, true, 60), "html", null, true);
        yield ">
  ";
        // line 61
        yield from $this->unwrap()->yieldBlock('node_title_prefix', $context, $blocks);
        // line 64
        yield "
  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('node_title', $context, $blocks);
        // line 77
        yield "
  ";
        // line 78
        yield from $this->unwrap()->yieldBlock('node_title_suffix', $context, $blocks);
        // line 81
        yield "
  ";
        // line 82
        yield from $this->unwrap()->yieldBlock('node_metadata', $context, $blocks);
        // line 96
        yield "
  <div ";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["node_content_classes"] ?? null)], "method", false, false, true, 97), "html", null, true);
        yield ">
    ";
        // line 98
        yield from $this->unwrap()->yieldBlock('node_content', $context, $blocks);
        // line 101
        yield "  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "node_utility_classes", "author_utility_classes", "node_content_utility_classes", "attributes", "content_attributes", "title_prefix", "page", "label", "heading_html_tag", "title_link", "url", "title_attributes", "title_suffix", "display_submitted", "author_attributes", "author_picture", "author_name", "date", "content"]);        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title_prefix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 62
        yield "    ";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("title_prefix", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title_prefix");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title_prefix");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("title_prefix", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title_prefix");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title_prefix");
            }
        }
        yield "
  ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "    ";
        if ((($tmp =  !($context["page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "      ";
            // line 68
            yield from $this->load("radix:heading", 68)->unwrap()->yield(CoreExtension::merge($context, ["content" => ((            // line 69
array_key_exists("label", $context)) ? (Twig\Extension\CoreExtension::default(($context["label"] ?? null), "")) : ("")), "heading_html_tag" => ((            // line 70
array_key_exists("heading_html_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_html_tag"] ?? null), "h2")) : ("h2")), "title_link" => ((            // line 71
array_key_exists("title_link", $context)) ? (Twig\Extension\CoreExtension::default(($context["title_link"] ?? null), ($context["url"] ?? null))) : (($context["url"] ?? null))), "heading_attributes" =>             // line 72
($context["title_attributes"] ?? null)]));
            // line 75
            yield "    ";
        }
        // line 76
        yield "  ";
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_title_suffix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "    ";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("title_suffix", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "title_suffix");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "title_suffix");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("title_suffix", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "title_suffix");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "title_suffix");
            }
        }
        yield "
  ";
        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_metadata(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 83
        yield "    ";
        if ((($tmp = ($context["display_submitted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "      <footer>
        <div ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [($context["author_classes"] ?? null)], "method", false, false, true, 85), "html", null, true);
            yield ">
          ";
            // line 86
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author_picture", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "author_picture");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "author_picture");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("author_picture", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "author_picture");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "author_picture");
                }
            }
            yield "

          ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submitted by @author on @date", ["@author" =>             // line 89
($context["author_name"] ?? null), "@date" =>             // line 90
($context["date"] ?? null)]));
            // line 91
            yield "
        </div>
      </footer>
    ";
        }
        // line 95
        yield "  ";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_node_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "      ";
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("content", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "content");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "content");
            }
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
            if (array_key_exists("canvas_slot_ids", $context) && in_array("content", $context["canvas_slot_ids"], TRUE)) {
                yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "content");
            } else {
                yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "content");
            }
        }
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "radix:node";
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
        return array (  264 => 99,  257 => 98,  252 => 95,  246 => 91,  244 => 90,  243 => 89,  242 => 88,  223 => 86,  219 => 85,  216 => 84,  213 => 83,  206 => 82,  184 => 79,  177 => 78,  172 => 76,  169 => 75,  167 => 72,  166 => 71,  165 => 70,  164 => 69,  163 => 68,  161 => 67,  158 => 66,  151 => 65,  129 => 62,  122 => 61,  114 => 101,  112 => 98,  108 => 97,  105 => 96,  103 => 82,  100 => 81,  98 => 78,  95 => 77,  93 => 65,  90 => 64,  88 => 61,  84 => 60,  81 => 59,  79 => 58,  76 => 57,  74 => 55,  73 => 53,  70 => 51,  68 => 49,  67 => 47,  64 => 45,  62 => 43,  61 => 42,  60 => 41,  59 => 40,  58 => 39,  57 => 38,  56 => 37,  55 => 36,  54 => 35,  53 => 33,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "radix:node", "themes/contrib/radix/components/node/node.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 33, "block" => 61, "if" => 66, "include" => 68];
        static $filters = ["merge" => 43, "clean_class" => 38, "escape" => 60, "default" => 69, "t" => 88];
        static $functions = ["create_attribute" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['merge', 'clean_class', 'escape', 'default', 't'],
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
