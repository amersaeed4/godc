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

/* forms/fields/number/number.html.twig */
class __TwigTemplate_1af7867d10c2641f8a6c6a8bf47ae1ed_sourced extends Template
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

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("forms/fields/text/text.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/fields/text/text.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    type=\"number\"
    ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 5), "min", [], "any", true, true, false, 5)) {
            yield "min=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 5), "min", [], "any", false, false, false, 5), "html", null, true);
            yield "\"";
        }
        // line 6
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 6), "max", [], "any", true, true, false, 6)) {
            yield "max=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 6), "max", [], "any", false, false, false, 6), "html", null, true);
            yield "\"";
        }
        // line 7
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, true, false, 7), "step", [], "any", true, true, false, 7)) {
            yield "step=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 7), "step", [], "any", false, false, false, 7), "html", null, true);
            yield "\"";
        }
        // line 8
        yield "    ";
        // line 9
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "size=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 9), "html", null, true);
            yield "\"";
        }
        // line 10
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", true, true, false, 10)) {
            yield "class=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 10), "html", null, true);
            yield "\" ";
        }
        // line 11
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 11)) {
            yield "id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
            yield "\" ";
        }
        // line 12
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 12)) {
            yield "style=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 12), "html", null, true);
            yield "\" ";
        }
        // line 13
        yield "    ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["isDisabledToggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "disabled=\"disabled\"";
        }
        // line 14
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 14))) {
            yield "placeholder=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, false, 14)), "html", null, true);
            yield "\"";
        }
        // line 15
        yield "    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 15), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 16
        yield "    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 16), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 17
        yield "    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "readonly", [], "any", false, false, false, 17), ["on", "true", 1])) {
            yield "readonly=\"readonly\"";
        }
        // line 18
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", true, true, false, 18)) {
            yield "autocomplete=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autocomplete", [], "any", false, false, false, 18), "html", null, true);
            yield "\"";
        }
        // line 19
        yield "    ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 19), "required", [], "any", false, false, false, 19), ["on", "true", 1])) {
            yield "required=\"required\"";
        }
        // line 20
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 20), "pattern", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "pattern=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 20), "pattern", [], "any", false, false, false, 20), "html", null, true);
            yield "\"";
        }
        // line 21
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 21), "message", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "title=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 21), "message", [], "any", false, false, false, 21)), "html", null, true);
            yield "\"
    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["field"] ?? null), "title", [], "any", true, true, false, 22)) {
            yield "title=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 22)), "html", null, true);
            yield "\" ";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/number/number.html.twig";
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
        return array (  170 => 22,  163 => 21,  156 => 20,  151 => 19,  144 => 18,  139 => 17,  134 => 16,  129 => 15,  122 => 14,  117 => 13,  110 => 12,  103 => 11,  96 => 10,  89 => 9,  87 => 8,  80 => 7,  73 => 6,  67 => 5,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"forms/fields/text/text.html.twig\" %}

{% block input_attributes %}
    type=\"number\"
    {% if field.validate.min is defined %}min=\"{{ field.validate.min }}\"{% endif %}
    {% if field.validate.max is defined %}max=\"{{ field.validate.max }}\"{% endif %}
    {% if field.validate.step is defined %}step=\"{{ field.validate.step }}\"{% endif %}
    {# Skip text.html.twig\x27s minlength/maxlength and go directly to field.html.twig #}
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
    {% if field.id is defined %}id=\"{{ field.id }}\" {% endif %}
    {% if field.style is defined %}style=\"{{ field.style }}\" {% endif %}
    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
    {% if field.placeholder is not empty %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
    {% if field.autofocus in [\x27on\x27, \x27true\x27, 1] %}autofocus=\"autofocus\"{% endif %}
    {% if field.novalidate in [\x27on\x27, \x27true\x27, 1] %}novalidate=\"novalidate\"{% endif %}
    {% if field.readonly in [\x27on\x27, \x27true\x27, 1] %}readonly=\"readonly\"{% endif %}
    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
    {% if field.validate.required in [\x27on\x27, \x27true\x27, 1] %}required=\"required\"{% endif %}
    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
    {% if field.validate.message %}title=\"{{ field.validate.message|t }}\"
    {% elseif field.title is defined %}title=\"{{ field.title|t }}\" {% endif %}
{% endblock %}", "forms/fields/number/number.html.twig", "/Users/amer/Sites/godc/user/plugins/form/templates/forms/fields/number/number.html.twig");
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
