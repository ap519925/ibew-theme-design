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

/* themes/custom/ibew_theme/templates/page/page--front.html.twig */
class __TwigTemplate_6855c6eafb4247de332f892abe1b8faf extends Template
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
        yield "<a id=\"main-content\" tabindex=\"-1\"></a>

<div class=\"ibew-page bg-gray-100 text-gray-900 min-h-screen\">
  ";
        // line 10
        yield from $this->load("@ibew_theme/includes/header.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "  
  <style>
    /* EMERGENCY OVERRIDE FOR HERO TRANSPARENCY */
    .ibew-region--hero-content,
    .ibew-region--hero-content .block,
    .ibew-region--hero-content .ibew-card,
    .ibew-region--hero-content .card,
    .ibew-region--hero-content .field--name-body,
    html.dark .ibew-region--hero-content .ibew-card,
    html.dark .ibew-region--hero-content .card {
        background: transparent !important;
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
    
    .ibew-region--hero-content h1,
    .ibew-region--hero-content h2,
    .ibew-region--hero-content p {
         text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
    }
  </style>

  <section class=\"ibew-hero p-0 relative h-screen\">
    ";
        // line 36
        yield "    <div class=\"absolute inset-0 w-full h-full z-0\">
      ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero", [], "any", false, false, true, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero", [], "any", false, false, true, 38), "html", null, true);
            yield "
      ";
        }
        // line 40
        yield "    </div>
    ";
        // line 42
        yield "    <div class=\"absolute inset-0 z-10 pointer-events-none\" style=\"background-color: rgba(0, 0, 0, 0.6);\"></div>



    ";
        // line 47
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero_content", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "      <div style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 20; display: flex; align-items: center; justify-content: center; text-align: center; pointer-events: none;\">
        <div class=\"container\" style=\"pointer-events: auto;\">
          <div class=\"ibew-region ibew-region--hero-content w-100\">
            ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero_content", [], "any", false, false, true, 51), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    ";
        }
        // line 56
        yield "  </section>

  <main>
    ";
        // line 60
        yield "    ";
        $context["has_canvas"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 60) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 60), "isEmpty", [], "method", false, false, true, 60));
        // line 61
        yield "
      ";
        // line 63
        yield "
      ";
        // line 65
        yield "      <div class=\"sections-wrapper\">
        ";
        // line 67
        yield "
        ";
        // line 69
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_about", [], "any", false, false, true, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "          <section id=\"about\" class=\"ibew-section py-24 bg-white text-gray-900 w-100\">
            <div class=\"ibew-region ibew-region--about w-100\">
              ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_about", [], "any", false, false, true, 72), "html", null, true);
            yield "
            </div>
          </section>
        ";
        }
        // line 76
        yield "      </div>

      ";
        // line 79
        yield "      ";
        if ((($context["embedded_news_view"] ?? null) || ($context["embedded_events_view"] ?? null))) {
            // line 80
            yield "        <section id=\"news-events\" class=\"ibew-section py-24 bg-gray-50\">
          ";
            // line 82
            yield "          <div class=\"container\">
            ";
            // line 84
            yield "            ";
            // line 85
            yield "            ";
            // line 86
            yield "            <div class=\"row gx-3\">
               ";
            // line 88
            yield "              <div class=\"col-lg-9\">
                <div class=\"d-flex justify-content-between align-items-end mb-4\">
                   <h2 class=\"display-6 fw-bold font-oswald text-uppercase text-dark mb-0\">Latest News</h2>
                </div>
                
                <div class=\"ibew-region ibew-region--news\">
                  ";
            // line 94
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_news_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_news_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_news_view");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["embedded_news_view"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_news_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_news_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_news_view");
                }
            }
            yield "
                </div>
              </div>

              ";
            // line 99
            yield "              <div class=\"col-lg-3\">
                 <div class=\"d-flex justify-content-between align-items-end mb-4\">
                   <h2 class=\"display-6 fw-bold font-oswald text-uppercase text-dark mb-0\">Events & Training</h2>
                   <a href=\"/events\" class=\"text-decoration-none fw-bold small text-primary\">Calendar &rarr;</a>
                </div>

                ";
            // line 106
            yield "                <div class=\"ibew-card bg-primary-subtle border-0 p-4 mb-4 rounded-4 position-relative overflow-hidden\">
                   <div class=\"position-relative z-10\">
                      <div class=\"d-flex align-items-center gap-3 mb-3\">
                         <div class=\"bg-primary text-white rounded p-2\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z\"/></svg> 
                         </div>
                         <h3 class=\"h5 fw-bold font-oswald mb-0 text-dark\">FOR CONTRACTORS</h3>
                      </div>
                      <p class=\"small text-muted mb-4\">Connect with skilled IBEW professionals and submit your project requirements.</p>
                      
                      <div class=\"d-grid gap-2\">
                         <a href=\"/contractors\" class=\"btn btn-light shadow-sm text-start fw-bold d-flex justify-content-between align-items-center\">
                            Find IBEW Contractors
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/></svg>
                         </a>
                         <a href=\"/projects\" class=\"btn btn-light shadow-sm text-start fw-bold d-flex justify-content-between align-items-center\">
                            Submit Project Request
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z\"/></svg>
                         </a>
                      </div>
                   </div>
                   <!-- Decor -->
                   <div class=\"position-absolute top-0 end-0 rounded-circle bg-white opacity-25\" style=\"width: 150px; height: 150px; margin-top: -50px; margin-right: -50px;\"></div>
                </div>

                <div class=\"ibew-region ibew-region--events\">
                  ";
            // line 132
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_events_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_events_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "embedded_events_view");
                }
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["embedded_events_view"] ?? null), "html", null, true);
            if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && array_key_exists("canvas_uuid", $context)) {
                if (array_key_exists("canvas_slot_ids", $context) && in_array("embedded_events_view", $context["canvas_slot_ids"], TRUE)) {
                    yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_events_view");
                } else {
                    yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "embedded_events_view");
                }
            }
            yield "
                </div>
              </div>

            </div>
          </div>
        </section>
      ";
        }
        // line 140
        yield "
      ";
        // line 142
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_stats", [], "any", false, false, true, 142) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_members", [], "any", false, false, true, 142))) {
            // line 143
            yield "        <section id=\"stats\" class=\"ibew-section py-20 bg-gray-900 text-white relative overflow-hidden w-100\">
           ";
            // line 145
            yield "            <div class=\"ibew-region ibew-region--stats w-100\">
               ";
            // line 146
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_stats", [], "any", false, false, true, 146), "html", null, true);
            yield "
               ";
            // line 148
            yield "            </div>
          ";
            // line 150
            yield "          <div class=\"absolute inset-0 bg-blue-900/20 pointer-events-none\"></div>
        </section>
      ";
        }
        // line 153
        yield "
      ";
        // line 155
        yield "      ";
        // line 164
        yield "
      ";
        // line 166
        yield "      <section class=\"ibew-cta-section w-100\">
        <div class=\"container text-center\">
          <h2 style=\"font-size: 2.8rem; font-weight: 800; margin-bottom: 0.5rem; line-height: 1.1;\">
            READY TO BUILD YOUR FUTURE?
          </h2>
          
          <div class=\"ibew-cta-grid\">
            <!-- Prospective Members -->
            <div class=\"ibew-cta-card\">
              <h3>Prospective Members</h3>
              <p>Start your journey in the electrical trade with world-class training and support</p>
              <a href=\"/join\" class=\"ibew-btn-lg ibew-btn--gold\">Become a Member</a>
            </div>

            <!-- Contractors -->
            <div class=\"ibew-cta-card\">
              <h3>Contractors</h3>
              <p>Find skilled IBEW electricians for your next project today</p>
              <a href=\"/contractors\" class=\"ibew-btn-lg ibew-btn--blue\">Find Contractors</a>
            </div>

            <!-- Training -->
            <div class=\"ibew-cta-card\">
              <h3>Training</h3>
              <p>Advance your skills with comprehensive apprenticeship programs</p>
              <a href=\"/training\" class=\"ibew-btn-lg ibew-btn--red\">Learn more</a>
            </div>
          </div>
        </div>
      </section>
      </section>
  </main>

  ";
        // line 200
        yield "  <footer class=\"ibew-footer\">
    <div class=\"ibew-shell max-w-7xl mx-auto px-6\">
      
      <div class=\"ibew-footer__container\">
        <!-- Col 1: Brand -->
        <div class=\"ibew-footer__brand-col\">
          ";
        // line 206
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 207
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 207), "html", null, true);
            yield "
          ";
        } else {
            // line 209
            yield "            <a href=\"/\" class=\"ibew-footer__brand-logo\">
               <img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"Local 90\">
               <span>Local 90</span>
            </a>
            <p>Serving our community with excellence in electrical work since 1892. Building tomorrow's infrastructure today.</p>
          ";
        }
        // line 215
        yield "        </div>

        <!-- Col 2: Quick Links -->
        <div>
          ";
        // line 219
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 220), "html", null, true);
            yield "
          ";
        } else {
            // line 222
            yield "            <h4>Quick Links</h4>
            <ul class=\"ibew-footer__links\">
              <li><a href=\"/about\">About Us</a></li>
              <li><a href=\"/training\">Training Programs</a></li>
              <li><a href=\"/join\">Become a Member</a></li>
              <li><a href=\"/contractors\">Find a Contractor</a></li>
            </ul>
          ";
        }
        // line 230
        yield "        </div>

        <!-- Col 3: Members -->
        <div>
          ";
        // line 234
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 234)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 235), "html", null, true);
            yield "
          ";
        } else {
            // line 237
            yield "            <h4>Members</h4>
            <ul class=\"ibew-footer__links\">
              <li><a href=\"/member-portal\" class=\"highlight\">Member Portal</a></li>
              <li><a href=\"/dues\">Pay Dues</a></li>
              <li><a href=\"/benefits\">Benefits Info</a></li>
              <li><a href=\"/jobs\">Job Board</a></li>
            </ul>
          ";
        }
        // line 245
        yield "        </div>

        <!-- Col 4: Contact -->
        <div>
          ";
        // line 249
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 250), "html", null, true);
            yield "
          ";
        } else {
            // line 252
            yield "            <h4>Contact</h4>
            <div class=\"ibew-footer__contact-item\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
              <span>(203) 265-9533</span>
            </div>
            <div class=\"ibew-footer__contact-item\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
              <a href=\"mailto:info@ibewlocal90.org\" class=\"text-gray-400 hover:text-white\">info@ibewlocal90.org</a>
            </div>
            <div class=\"ibew-footer__contact-item\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
              <span>2 N Plains Industrial Rd<br>Wallingford, CT 06492</span>
            </div>
          ";
        }
        // line 266
        yield "        </div>

      </div>

      <div class=\"ibew-footer__bottom\">
        ";
        // line 271
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 271)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 272
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 272), "html", null, true);
            yield "
        ";
        } else {
            // line 274
            yield "          &copy; ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " IBEW Local 90. All rights reserved.
        ";
        }
        // line 276
        yield "      </div>
    </div>
  </footer>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "node", "embedded_news_view", "embedded_events_view"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ibew_theme/templates/page/page--front.html.twig";
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
        return array (  447 => 276,  441 => 274,  435 => 272,  433 => 271,  426 => 266,  410 => 252,  404 => 250,  402 => 249,  396 => 245,  386 => 237,  380 => 235,  378 => 234,  372 => 230,  362 => 222,  356 => 220,  354 => 219,  348 => 215,  340 => 209,  334 => 207,  332 => 206,  324 => 200,  289 => 166,  286 => 164,  284 => 155,  281 => 153,  276 => 150,  273 => 148,  269 => 146,  266 => 145,  263 => 143,  260 => 142,  257 => 140,  232 => 132,  204 => 106,  196 => 99,  175 => 94,  167 => 88,  164 => 86,  162 => 85,  160 => 84,  157 => 82,  154 => 80,  151 => 79,  147 => 76,  140 => 72,  136 => 70,  133 => 69,  130 => 67,  127 => 65,  124 => 63,  121 => 61,  118 => 60,  113 => 56,  105 => 51,  100 => 48,  97 => 47,  91 => 42,  88 => 40,  82 => 38,  80 => 37,  77 => 36,  51 => 11,  49 => 10,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--front.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 10, "if" => 37, "set" => 60];
        static $filters = ["escape" => 38, "date" => 274];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'set'],
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
