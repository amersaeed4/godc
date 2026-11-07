<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/page-hero.html.twig */
class __TwigTemplate_02d8125e861d80225cff10320427a406_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 3
        yield "<section class=\"page-hero";
        yield (string) (((($tmp = ($context["hero_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" page-hero--form") : (""));
        yield (string) (((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" page-hero--image") : (""));
        yield "\">
  <div class=\"container page-hero__inner\">
    <div class=\"page-hero__copy\">
      ";
        // line 6
        yield from $this->load("partials/breadcrumbs.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "      ";
        if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow eyebrow--light\">";
            yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 8
        yield "      <h1>";
        yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
      ";
        // line 9
        if ((($tmp = ($context["lead"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"page-hero__lead\">";
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, ($context["lead"] ?? null));
            yield "</div>";
        }
        // line 10
        yield "      ";
        if ((($tmp = ($context["button_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"btn-row\"><a class=\"btn btn-accent\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(($context["button_link"] ?? null)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(($context["button_label"] ?? null), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", ["arrow-right"], $context, 10, $this->source);
            yield "</a></div>";
        }
        // line 11
        yield "    </div>
    ";
        // line 12
        if ((($tmp = ($context["hero_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <aside class=\"page-hero__form\" id=\"hero-form\">
        <div class=\"form-card\">
          <h2 class=\"form-card__title\">";
            // line 15
            yield (string) (((($tmp = ($context["hero_form_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["hero_form_title"], "html", null, true)) : ("Book an Appointment"));
            yield "</h2>
          ";
            // line 16
            yield from $this->load("partials/form.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["form_name" => ($context["hero_form"] ?? null)]));
            // line 17
            yield "        </div>
      </aside>
    ";
        } elseif ((($tmp =         // line 19
($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "      <div class=\"page-hero__media\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(20))->call("img", [($context["page"] ?? null), ($context["image"] ?? null), (((($tmp = ($context["alt"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["alt"]) : (($context["title"] ?? null))), "", true], $context, 20, $this->source);
            yield "</div>
    ";
        }
        // line 22
        yield "  </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-hero.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  116 => 22,  110 => 20,  108 => 19,  104 => 17,  102 => 16,  98 => 15,  94 => 13,  92 => 12,  89 => 11,  78 => 10,  72 => 9,  67 => 8,  60 => 7,  58 => 6,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Params: eyebrow, title, lead (markdown), image (media name), alt, hero_form, hero_form_title, button_label, button_link, meta (html-safe string) #}
{% import \x27macros/ui.html.twig\x27 as ui %}
<section class=\"page-hero{{ hero_form ? \x27 page-hero--form\x27 : \x27\x27 }}{{ image ? \x27 page-hero--image\x27 : \x27\x27 }}\">
  <div class=\"container page-hero__inner\">
    <div class=\"page-hero__copy\">
      {% include \x27partials/breadcrumbs.html.twig\x27 %}
      {% if eyebrow %}<p class=\"eyebrow eyebrow--light\">{{ eyebrow }}</p>{% endif %}
      <h1>{{ title }}</h1>
      {% if lead %}<div class=\"page-hero__lead\">{{ lead|markdown }}</div>{% endif %}
      {% if button_label %}<div class=\"btn-row\"><a class=\"btn btn-accent\" href=\"{{ button_link|href }}\">{{ button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></div>{% endif %}
    </div>
    {% if hero_form %}
      <aside class=\"page-hero__form\" id=\"hero-form\">
        <div class=\"form-card\">
          <h2 class=\"form-card__title\">{{ hero_form_title ?: \x27Book an Appointment\x27 }}</h2>
          {% include \x27partials/form.html.twig\x27 with {\x27form_name\x27: hero_form} %}
        </div>
      </aside>
    {% elseif image %}
      <div class=\"page-hero__media\">{{ ui.img(page, image, alt ?: title, \x27\x27, true) }}</div>
    {% endif %}
  </div>
</section>
", "partials/page-hero.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/page-hero.html.twig");
    }
    
    public function ensureSecurityCheckedOrHandOver(): ?\Twig\Template
    {
        if (!$this->sandbox->isSandboxed()) {
            return null;
        }

        return $this->loadSecurityCheckedTemplate() ?? throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed()) {
            throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
        }
    }
}
