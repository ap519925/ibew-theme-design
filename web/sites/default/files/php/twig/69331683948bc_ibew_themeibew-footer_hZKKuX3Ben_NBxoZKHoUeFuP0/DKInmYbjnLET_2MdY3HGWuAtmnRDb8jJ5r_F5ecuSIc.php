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

/* ibew_theme:ibew-footer */
class __TwigTemplate_644ce71b7ad9f81cf7c116f912e7106c extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.ibew_theme--ibew-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "ibew_theme:ibew-footer"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "ibew_theme:ibew-footer"));
        // line 7
        yield "<footer class=\"ibew-footer\">
  <div class=\"ibew-footer__container\">
    <div class=\"ibew-footer__grid\">
      <div class=\"ibew-footer__brand\">
        <h3>";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield "</h3>
        <p>Empowering electricians with the best training, wages, and benefits since 1900.</p>
      </div>
      
      <div class=\"ibew-footer__links\">
        <h4>Quick Links</h4>
        <ul>
          <li><a href=\"#\">About Us</a></li>
          <li><a href=\"#\">Events</a></li>
          <li><a href=\"#\">Training</a></li>
          <li><a href=\"#\">Contractors</a></li>
        </ul>
      </div>
      
      <div class=\"ibew-footer__links\">
        <h4>Members</h4>
        <ul>
          <li><a href=\"#\">Member Login</a></li>
          <li><a href=\"#\">Pay Dues</a></li>
          <li><a href=\"#\">Benefits</a></li>
          <li><a href=\"#\">Resources</a></li>
        </ul>
      </div>
      
      <div class=\"ibew-footer__contact\">
        <h4>Contact</h4>
        <ul>
          <li>2 North Plains Industrial Rd</li>
          <li>Wallingford, CT 06492</li>
          <li>(203) 265-9533</li>
          <li>info@ibew90.org</li>
        </ul>
      </div>
    </div>
    
    <div class=\"ibew-footer__bottom\">
      <p>&copy; ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["copyright_year"] ?? null), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield ". All rights reserved.</p>
    </div>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_name", "copyright_year"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ibew_theme:ibew-footer";
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
        return array (  93 => 47,  54 => 11,  48 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ibew_theme:ibew-footer", "themes/custom/ibew_theme/ibew_theme/components/ibew-footer/ibew-footer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
