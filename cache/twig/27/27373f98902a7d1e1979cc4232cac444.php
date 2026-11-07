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

/* partials/doctor-card.html.twig */
class __TwigTemplate_856ee4c99ca14d368c7188bc9555fd10_sourced extends Template
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
        $context["dp"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [($context["doc"] ?? null)], "method", false, false, false, 3);
        // line 4
        if ((($tmp = ($context["dp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            $context["pr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 5), "profile", [], "any", false, false, false, 5);
            // line 6
            yield "<div class=\"side-card side-doctor\">
  <p class=\"side-doctor__label\">Your doctor</p>
  <div class=\"side-doctor__row\">
    <span class=\"side-doctor__photo\">";
            // line 9
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(9))->call("img", [($context["dp"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "image", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 9)], $context, 9, $this->source);
            yield "</span>
    <span><strong class=\"side-doctor__name\">";
            // line 10
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            yield "</strong><span class=\"side-doctor__role\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "role", [], "any", false, false, false, 10), "html", null, true);
            yield "</span></span>
  </div>
  <a class=\"btn btn-primary btn-block\" href=\"";
            // line 12
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">Book an Appointment</a>
  <a class=\"link-arrow side-doctor__more\" href=\"";
            // line 13
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\">View profile ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["arrow-right"], $context, 13, $this->source);
            yield "</a>
</div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/doctor-card.html.twig";
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
        return array (  76 => 13,  72 => 12,  65 => 10,  61 => 9,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Compact doctor card. Param: doc (route of a doctor page) #}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% set dp = page.find(doc) %}
{% if dp %}
{% set pr = dp.header.profile %}
<div class=\"side-card side-doctor\">
  <p class=\"side-doctor__label\">Your doctor</p>
  <div class=\"side-doctor__row\">
    <span class=\"side-doctor__photo\">{{ ui.img(dp, pr.image, pr.name) }}</span>
    <span><strong class=\"side-doctor__name\">{{ pr.name }}</strong><span class=\"side-doctor__role\">{{ pr.role }}</span></span>
  </div>
  <a class=\"btn btn-primary btn-block\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book an Appointment</a>
  <a class=\"link-arrow side-doctor__more\" href=\"{{ dp.url }}\">View profile {{ ui.icon(\x27arrow-right\x27) }}</a>
</div>
{% endif %}
", "partials/doctor-card.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/doctor-card.html.twig");
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
