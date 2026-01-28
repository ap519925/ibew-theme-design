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
  <!-- ANTI-GRAVITY-DEBUG: PAGE-FRONT-ACTIVE -->
  <div class=\"ibew-header-wrapper\">
    ";
        // line 13
        yield "    <div class=\"ibew-top-bar\" style=\"background-color: #1f2937; color: white;\">
      <div class=\"ibew-shell d-flex justify-content-between align-items-center\" style=\"display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 2rem;\">
        <div class=\"d-flex align-items-center gap-4\" style=\"display: flex; gap: 1rem;\">
          <span class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; font-size: 0.85rem;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z\"/></svg>
            2 N Plains Industrial Rd, Wallingford, CT 06492
          </span>
          <a href=\"tel:1-800-562-2590\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z\"/></svg>
            1-800-562-2590
          </a>
          <a href=\"mailto:info@ibewlocal90.org\" class=\"d-flex align-items-center gap-2\" style=\"display: flex; align-items: center; gap: 0.5rem; color: white; text-decoration: none; font-size: 0.85rem;\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z\"/></svg>
            info@ibewlocal90.org
          </a>
        </div>
        <div class=\"d-flex align-items-center gap-3\" style=\"display: flex; gap: 1rem; align-items: center;\">
          <a href=\"https://JoinIBEWCT.org\" style=\"color: white; text-decoration: none; font-weight: bold; font-size: 0.9rem;\">JoinIBEWCT.org</a>
          <div style=\"display: flex; gap: 0.75rem;\">
             <a href=\"#\" aria-label=\"Twitter\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.99-.052A9.341 9.341 0 0 0 5.026 15z\"/></svg></a>
             <a href=\"#\" aria-label=\"LinkedIn\" style=\"color: white;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z\"/></svg></a>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 40
        yield "    <nav class=\"ibew-nav sticky-top\">
      <div class=\"ibew-shell ibew-nav__inner\">
        <a href=\"/\" class=\"ibew-brand\">
          <img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"IBEW Local 90\" class=\"ibew-brand__logo\">
          <div class=\"ibew-brand__text\">
            <span class=\"ibew-brand__title\">";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IBEW LOCAL 90"));
        yield "</span>
            <span class=\"ibew-eyebrow\">";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("International Brotherhood of Electrical Workers"));
        yield "</span>
          </div>
        </a>

        ";
        // line 51
        yield "        <div class=\"flex-grow-1 d-flex justify-content-center\">
            ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 53), "html", null, true);
            yield "
            ";
        } else {
            // line 55
            yield "                <nav class=\"ibew-nav__links\">
                  <a href=\"/about\">";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
            yield "</a>
                  <a href=\"/events\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Events"));
            yield "</a>
                  <a href=\"/training\">";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Training"));
            yield "</a>
                  <a href=\"/contractors\">";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contractors"));
            yield "</a>
                  <a href=\"/members\">";
            // line 60
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Members"));
            yield "</a>
                  <a href=\"/resources\">";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Resources"));
            yield "</a>
                </nav>
            ";
        }
        // line 64
        yield "        </div>

        <div class=\"d-none d-lg-block\">
            <div class=\"d-flex align-items-center gap-3\">
               <a class=\"ibew-cta ibew-cta--nav\" href=\"/civicrm/user\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/></svg>
                  ";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Member Sign-In"));
        yield "
               </a>
               <button class=\"js-theme-toggle btn btn-link p-2 text-decoration-none rounded-circle text-secondary\" aria-label=\"Toggle Theme\" style=\"min-width: 44px; min-height: 44px;\">
                  <svg class=\"icon-sun text-warning\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                   <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z\" />
                  </svg>
                  <svg class=\"icon-moon text-secondary d-none\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
                   <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z\" />
                  </svg>
               </button>
            </div>
        </div>
        
          <!-- Mobile Menu Toggle -->
        <button class=\"ibew-mobile-toggle d-lg-none\" aria-label=\"Toggle Menu\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path fill-rule=\"evenodd\" d=\"M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"/></svg>
        </button>
      </div>
    </nav>
  </div>

  <section class=\"ibew-hero p-0 relative h-screen\">
    ";
        // line 93
        yield "    <div class=\"absolute inset-0 w-full h-full z-0\">
      ";
        // line 94
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero", [], "any", false, false, true, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero", [], "any", false, false, true, 95), "html", null, true);
            yield "
      ";
        } else {
            // line 97
            yield "        ";
            // line 98
            yield "        <div id=\"ibewHeroSplide\" class=\"splide h-full w-full\">
          <div class=\"splide__track h-full w-full\">
            <ul class=\"splide__list h-full w-full\">
              <li class=\"splide__slide h-full w-full relative\">
                <div class=\"absolute inset-0 bg-cover bg-center\" style=\"background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=2070&auto=format&fit=crop');\">
                </div>
              </li>
              <li class=\"splide__slide h-full w-full relative\">
                <div class=\"absolute inset-0 bg-cover bg-center\" style=\"background-image: url('https://images.unsplash.com/photo-1498084393753-b411b2d26b34?q=80&w=1932&auto=format&fit=crop');\">
                </div>
              </li>
            </ul>
          </div>
        </div>
      ";
        }
        // line 113
        yield "    </div>

    ";
        // line 116
        yield "    <div class=\"absolute inset-0 z-10 bg-black/40 pointer-events-none\"></div>

    ";
        // line 119
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero_content", [], "any", false, false, true, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "      <div class=\"ibew-hero__content absolute inset-0 z-20 flex flex-col justify-center items-center text-center px-4 pointer-events-none\">
        <div class=\"pointer-events-auto max-w-4xl mx-auto w-full\"> 
            ";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_hero_content", [], "any", false, false, true, 122), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 126
        yield "  </section>

  <main>
    ";
        // line 130
        yield "    ";
        $context["has_canvas"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 130) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_content_canvas", [], "any", false, false, true, 130), "isEmpty", [], "method", false, false, true, 130));
        // line 131
        yield "
      ";
        // line 133
        yield "
      ";
        // line 135
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_about", [], "any", false, false, true, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "        <section id=\"about\" class=\"ibew-section py-20 bg-white text-gray-900 w-100\">
          <div class=\"ibew-region ibew-region--about w-100\">
            ";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_about", [], "any", false, false, true, 138), "html", null, true);
            yield "
          </div>
        </section>
      ";
        }
        // line 142
        yield "
      ";
        // line 144
        yield "      ";
        if ((($context["embedded_news_view"] ?? null) || ($context["embedded_events_view"] ?? null))) {
            // line 145
            yield "        <section id=\"news-events\" class=\"ibew-section py-20 bg-gray-50\">
          ";
            // line 147
            yield "          <div class=\"container\">
            <div class=\"row g-5\">
              
               ";
            // line 151
            yield "              <div class=\"col-lg-8\">
                <div class=\"d-flex justify-content-between align-items-end mb-4\">
                   <h2 class=\"display-6 fw-bold font-oswald text-uppercase text-dark mb-0\">Latest News</h2>
                   <a href=\"/news\" class=\"text-decoration-none fw-bold small text-primary\">View All &rarr;</a>
                </div>
                
                <div class=\"ibew-region ibew-region--news\">
                  ";
            // line 158
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
            // line 163
            yield "              <div class=\"col-lg-4\">
                 <div class=\"d-flex justify-content-between align-items-end mb-4\">
                   <h2 class=\"display-6 fw-bold font-oswald text-uppercase text-dark mb-0\">Events & Training</h2>
                   <a href=\"/events\" class=\"text-decoration-none fw-bold small text-primary\">Calendar &rarr;</a>
                </div>

                ";
            // line 170
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
            // line 196
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
        // line 204
        yield "
      ";
        // line 206
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_stats", [], "any", false, false, true, 206) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_members", [], "any", false, false, true, 206))) {
            // line 207
            yield "        <section id=\"stats\" class=\"ibew-section py-20 bg-gray-900 text-white relative overflow-hidden w-100\">
           ";
            // line 209
            yield "            <div class=\"ibew-region ibew-region--stats w-100\">
               ";
            // line 210
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_stats", [], "any", false, false, true, 210), "html", null, true);
            yield "
               ";
            // line 211
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_members", [], "any", false, false, true, 211), "html", null, true);
            yield "
            </div>
          ";
            // line 214
            yield "          <div class=\"absolute inset-0 bg-blue-900/20 pointer-events-none\"></div>
        </section>
      ";
        }
        // line 217
        yield "
      ";
        // line 219
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_contact", [], "any", false, false, true, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "        <section id=\"contact\" class=\"ibew-section py-16 bg-gray-50 w-100\">
           <div class=\"ibew-region ibew-region--contact w-100\">
              ";
            // line 222
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "homepage_contact", [], "any", false, false, true, 222), "html", null, true);
            yield "
           </div>
        </section>
      ";
        }
        // line 226
        yield "
      ";
        // line 228
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
        // line 262
        yield "  <footer class=\"ibew-footer\">
    <div class=\"ibew-shell max-w-7xl mx-auto px-6\">
      
      <div class=\"ibew-footer__container\">
        <!-- Col 1: Brand -->
        <div class=\"ibew-footer__brand-col\">
          ";
        // line 268
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_1", [], "any", false, false, true, 269), "html", null, true);
            yield "
          ";
        } else {
            // line 271
            yield "            <a href=\"/\" class=\"ibew-footer__brand-logo\">
               <img src=\"/themes/custom/ibew_theme/logo.png\" alt=\"Local 90\">
               <span>Local 90</span>
            </a>
            <p>Serving our community with excellence in electrical work since 1892. Building tomorrow's infrastructure today.</p>
          ";
        }
        // line 277
        yield "        </div>

        <!-- Col 2: Quick Links -->
        <div>
          ";
        // line 281
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 281)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 282
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_2", [], "any", false, false, true, 282), "html", null, true);
            yield "
          ";
        } else {
            // line 284
            yield "            <h4>Quick Links</h4>
            <ul class=\"ibew-footer__links\">
              <li><a href=\"/about\">About Us</a></li>
              <li><a href=\"/training\">Training Programs</a></li>
              <li><a href=\"/join\">Become a Member</a></li>
              <li><a href=\"/contractors\">Find a Contractor</a></li>
            </ul>
          ";
        }
        // line 292
        yield "        </div>

        <!-- Col 3: Members -->
        <div>
          ";
        // line 296
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 297
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_3", [], "any", false, false, true, 297), "html", null, true);
            yield "
          ";
        } else {
            // line 299
            yield "            <h4>Members</h4>
            <ul class=\"ibew-footer__links\">
              <li><a href=\"/member-portal\" class=\"highlight\">Member Portal</a></li>
              <li><a href=\"/dues\">Pay Dues</a></li>
              <li><a href=\"/benefits\">Benefits Info</a></li>
              <li><a href=\"/jobs\">Job Board</a></li>
            </ul>
          ";
        }
        // line 307
        yield "        </div>

        <!-- Col 4: Contact -->
        <div>
          ";
        // line 311
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 312
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_col_4", [], "any", false, false, true, 312), "html", null, true);
            yield "
          ";
        } else {
            // line 314
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
        // line 328
        yield "        </div>

      </div>

      <div class=\"ibew-footer__bottom\">
        ";
        // line 333
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 334
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 334), "html", null, true);
            yield "
        ";
        } else {
            // line 336
            yield "          &copy; ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield " IBEW Local 90. All rights reserved.
        ";
        }
        // line 338
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
        return array (  559 => 338,  553 => 336,  547 => 334,  545 => 333,  538 => 328,  522 => 314,  516 => 312,  514 => 311,  508 => 307,  498 => 299,  492 => 297,  490 => 296,  484 => 292,  474 => 284,  468 => 282,  466 => 281,  460 => 277,  452 => 271,  446 => 269,  444 => 268,  436 => 262,  401 => 228,  398 => 226,  391 => 222,  387 => 220,  384 => 219,  381 => 217,  376 => 214,  371 => 211,  367 => 210,  364 => 209,  361 => 207,  358 => 206,  355 => 204,  330 => 196,  302 => 170,  294 => 163,  273 => 158,  264 => 151,  259 => 147,  256 => 145,  253 => 144,  250 => 142,  243 => 138,  239 => 136,  236 => 135,  233 => 133,  230 => 131,  227 => 130,  222 => 126,  215 => 122,  211 => 120,  208 => 119,  204 => 116,  200 => 113,  183 => 98,  181 => 97,  175 => 95,  173 => 94,  170 => 93,  145 => 70,  137 => 64,  131 => 61,  127 => 60,  123 => 59,  119 => 58,  115 => 57,  111 => 56,  108 => 55,  102 => 53,  100 => 52,  97 => 51,  90 => 46,  86 => 45,  79 => 40,  51 => 13,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ibew_theme/templates/page/page--front.html.twig", "/var/www/html/web/themes/custom/ibew_theme/templates/page/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 52, "set" => 130];
        static $filters = ["t" => 45, "escape" => 53, "date" => 336];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['t', 'escape', 'date'],
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
