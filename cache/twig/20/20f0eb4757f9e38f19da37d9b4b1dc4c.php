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

/* partials/cta-band.html.twig */
class __TwigTemplate_028c69b312d7f1d4476d957db04c2be7_sourced extends Template
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
        if (((($tmp = ($context["cta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "title", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 4
            yield "<section class=\"cta-band\">
  <div class=\"container cta-band__inner\">
    <div class=\"cta-band__copy\">
      ";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "eyebrow", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow eyebrow--light\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "eyebrow", [], "any", false, false, false, 7), "html", null, true);
                yield "</p>";
            }
            // line 8
            yield "      <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            yield "</h2>
      ";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "text", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"cta-band__text\">";
                yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "text", [], "any", false, false, false, 9));
                yield "</div>";
            }
            // line 10
            yield "    </div>
    <div class=\"cta-band__actions\">
      <a class=\"btn btn-accent btn-lg\" href=\"";
            // line 12
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "button_link", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "button_link", [], "any", false, false, false, 12)) : ("/book-a-consultation"))), "html", null, true);
            yield "\">";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "button_label", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["cta"] ?? null), "button_label", [], "any", false, false, false, 12), "html", null, true)) : ("Book an Appointment"));
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(12))->call("icon", ["arrow-right"], $context, 12, $this->source);
            yield "</a>
      <a class=\"cta-band__phone\" href=\"tel:";
            // line 13
            yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 13), "iham", [], "any", false, false, false, 13), "contact", [], "any", false, false, false, 13), "phone", [], "any", false, false, false, 13)), "html", null, true);
            yield "\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["phone"], $context, 13, $this->source);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 13), "iham", [], "any", false, false, false, 13), "contact", [], "any", false, false, false, 13), "phone", [], "any", false, false, false, 13), "html", null, true);
            yield "</a>
    </div>
  </div>
</section>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/cta-band.html.twig";
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
        return array (  86 => 13,  78 => 12,  74 => 10,  68 => 9,  63 => 8,  57 => 7,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Params: cta (object with eyebrow,title,text,button_label,button_link) #}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% if cta and cta.title %}
<section class=\"cta-band\">
  <div class=\"container cta-band__inner\">
    <div class=\"cta-band__copy\">
      {% if cta.eyebrow %}<p class=\"eyebrow eyebrow--light\">{{ cta.eyebrow }}</p>{% endif %}
      <h2>{{ cta.title }}</h2>
      {% if cta.text %}<div class=\"cta-band__text\">{{ cta.text|markdown }}</div>{% endif %}
    </div>
    <div class=\"cta-band__actions\">
      <a class=\"btn btn-accent btn-lg\" href=\"{{ (cta.button_link ?: \x27/book-a-consultation\x27)|href }}\">{{ cta.button_label ?: \x27Book an Appointment\x27 }} {{ ui.icon(\x27arrow-right\x27) }}</a>
      <a class=\"cta-band__phone\" href=\"tel:{{ config.themes.iham.contact.phone|tel }}\">{{ ui.icon(\x27phone\x27) }} {{ config.themes.iham.contact.phone }}</a>
    </div>
  </div>
</section>
{% endif %}
", "partials/cta-band.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/cta-band.html.twig");
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
