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

/* forms/fields/checkbox/checkbox.html.twig */
class __TwigTemplate_79446dbf0541bfbb4223024ede912fb3_sourced extends Template
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
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("forms/field.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/field.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "    ";
        $context["id"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "id", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 7))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 7))));
        // line 8
        yield "    <div class=\"";
        yield (string) (((($tmp = ($context["form_field_wrapper_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_field_wrapper_classes"], "html", null, true)) : ("form-input-wrapper"));
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "size", [], "any", false, false, false, 8), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "wrapper_classes", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('prepend', $context, $blocks);
        // line 10
        yield "        <input
            ";
        // line 12
        yield "            name=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->fieldNameFilter((($context["scope"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 12))), "html", null, true);
        yield "\"
            value=\"";
        // line 13
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", true, true, false, 13) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 13)))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 13), "html", null, true)) : ("1"));
        yield "\"
            type=\"checkbox\"
            ";
        // line 15
        if ((($context["value"] ?? null) == (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 15)) : ("1")))) {
            yield " checked=\"checked\" ";
        }
        // line 16
        yield "
            ";
        // line 18
        yield "            ";
        yield from $this->unwrap()->yieldBlock('input_attributes', $context, $blocks);
        // line 37
        yield "            />
        <label style=\"display:inline;\" class=\"inline\" for=\"";
        // line 38
        yield (string) $this->escaper->escape(($context["id"] ?? null));
        yield "\">
            ";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "markdown", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                ";
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 40)), false);
            yield "
            ";
        } else {
            // line 42
            yield "                ";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 42)));
            yield "
            ";
        }
        // line 44
        yield "            ";
        yield (string) ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "validate", [], "any", false, false, false, 44), "required", [], "any", false, false, false, 44), ["on", "true", 1])) ? ("<span class=\"required\">*</span>") : (""));
        yield "
        </label>
        ";
        // line 46
        yield from $this->unwrap()->yieldBlock('append', $context, $blocks);
        // line 47
        yield "    </div>
";
        return; yield;
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_input_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "                id=\"";
        yield (string) $this->escaper->escape(($context["id"] ?? null));
        yield "\"
                class=\"";
        // line 20
        yield (string) $this->escaper->escape(($context["form_field_checkbox_classes"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "classes", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", true, true, false, 21)) {
            yield "style=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "style", [], "any", false, false, false, 21));
            yield "\" ";
        }
        // line 22
        yield "                ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "disabled", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["isDisabledToggleable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "disabled=\"disabled\"";
        }
        // line 23
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "autofocus", [], "any", false, false, false, 23), ["on", "true", 1])) {
            yield "autofocus=\"autofocus\"";
        }
        // line 24
        yield "                ";
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "novalidate", [], "any", false, false, false, 24), ["on", "true", 1])) {
            yield "novalidate=\"novalidate\"";
        }
        // line 25
        yield "                ";
        if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required=\"required\"";
        }
        // line 26
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "tabindex=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "tabindex", [], "any", false, false, false, 26), "html", null, true);
            yield "\"";
        }
        // line 27
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", true, true, false, 27)) {
            // line 28
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 29
                yield "                    ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 30
                    yield "                      ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 30), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 30), "html_attr");
                    yield "\"
                    ";
                } else {
                    // line 32
                    yield "                      ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
                    ";
                }
                // line 34
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 35
            yield "                ";
        }
        // line 36
        yield "            ";
        return; yield;
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_append(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/fields/checkbox/checkbox.html.twig";
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
        return array (  253 => 46,  248 => 36,  245 => 35,  238 => 34,  230 => 32,  222 => 30,  219 => 29,  214 => 28,  211 => 27,  204 => 26,  199 => 25,  194 => 24,  189 => 23,  184 => 22,  178 => 21,  172 => 20,  167 => 19,  160 => 18,  150 => 9,  144 => 47,  142 => 46,  136 => 44,  130 => 42,  124 => 40,  122 => 39,  118 => 38,  115 => 37,  112 => 18,  109 => 16,  105 => 15,  100 => 13,  95 => 12,  92 => 10,  90 => 9,  81 => 8,  78 => 7,  71 => 6,  61 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block label %}
{% endblock %}

{% block input %}
    {% set id = field.id|default(field.name)|hyphenize %}
    <div class=\"{{ form_field_wrapper_classes ?: \x27form-input-wrapper\x27 }} {{ field.size }} {{ field.wrapper_classes }}\">
        {% block prepend %}{% endblock prepend %}
        <input
            {# required attribute structures #}
            name=\"{{ (scope ~ field.name)|fieldName }}\"
            value=\"{{ field.value ?? \x271\x27 }}\"
            type=\"checkbox\"
            {% if value == (field.value ?? \x271\x27) %} checked=\"checked\" {% endif %}

            {# input attribute structures #}
            {% block input_attributes %}
                id=\"{{ id|e }}\"
                class=\"{{ form_field_checkbox_classes }} {{ field.classes }}\"
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in [\x27on\x27, \x27true\x27, 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in [\x27on\x27, \x27true\x27, 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if field.attributes is defined %}
                  {% for key,attribute in field.attributes %}
                    {% if attribute|of_type(\x27array\x27) %}
                      {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                    {% else %}
                      {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                    {% endif %}
                  {% endfor %}
                {% endif %}
            {% endblock %}
            />
        <label style=\"display:inline;\" class=\"inline\" for=\"{{ id|e }}\">
            {% if field.markdown %}
                {{ field.label|t|markdown(false) }}
            {% else %}
                {{ field.label|t|e }}
            {% endif %}
            {{ field.validate.required in [\x27on\x27, \x27true\x27, 1] ? \x27<span class=\"required\">*</span>\x27 }}
        </label>
        {% block append %}{% endblock append %}
    </div>
{% endblock %}
", "forms/fields/checkbox/checkbox.html.twig", "/Users/amer/Sites/godc/user/plugins/form/templates/forms/fields/checkbox/checkbox.html.twig");
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
