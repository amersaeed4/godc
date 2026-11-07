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

/* macros/ui.html.twig */
class __TwigTemplate_db0150d0a910b48f2fd28bbbb069f358_sourced extends Template
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
        yield "
";
        // line 6
        yield "
";
        // line 14
        yield "
";
        // line 23
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "icon" => new \Twig\TwigMacro("icon", function ($name = null, $cls = null, ...$varargs): string|Markup {
                // line 3
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "cls" => $cls,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 4
                    yield "<svg class=\"icon";
                    yield (string) (((($tmp = ($context["cls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((" " . ($context["cls"] ?? null)), "html", null, true)) : (""));
                    yield "\" aria-hidden=\"true\" focusable=\"false\"><use href=\"#i-";
                    yield (string) $this->escaper->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default(($context["name"] ?? null), "check")) : ("check")), "html", null, true);
                    yield "\"/></svg>";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "cls" => false], false),
            "img" => new \Twig\TwigMacro("img", function ($pg = null, $name = null, $alt = null, $cls = null, $eager = null, ...$varargs): string|Markup {
                // line 8
                $macros = $this->macros;
                $context = [
                    "pg" => $pg,
                    "name" => $name,
                    "alt" => $alt,
                    "cls" => $cls,
                    "eager" => $eager,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 9
                    $context["m"] = (((($tmp = ($context["name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["pg"] ?? null), "media", [], "any", false, false, false, 9)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
                    // line 10
                    if ((($tmp = ($context["m"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 11
                        yield "<img src=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "url", [], "any", false, false, false, 11), "html", null, true);
                        yield "\" alt=\"";
                        yield (string) $this->escaper->escape((((array_key_exists("alt", $context) &&  !(null === $context["alt"]))) ? ($context["alt"]) : ("")), "html_attr");
                        yield "\"";
                        if ((($tmp = ($context["cls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " class=\"";
                            yield (string) $this->escaper->escape(($context["cls"] ?? null), "html", null, true);
                            yield "\"";
                        }
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "width", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " width=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "width", [], "any", false, false, false, 11), "html", null, true);
                            yield "\" height=\"";
                            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["m"] ?? null), "height", [], "any", false, false, false, 11), "html", null, true);
                            yield "\"";
                        }
                        yield " loading=\"";
                        yield (string) (((($tmp = ($context["eager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("eager") : ("lazy"));
                        yield "\" decoding=\"async\"";
                        if ((($tmp = ($context["eager"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " fetchpriority=\"high\"";
                        }
                        yield ">";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["pg" => false, "name" => false, "alt" => false, "cls" => false, "eager" => false], false),
            "head" => new \Twig\TwigMacro("head", function ($eyebrow = null, $title = null, $lead = null, $tone = null, $align = null, ...$varargs): string|Markup {
                // line 16
                $macros = $this->macros;
                $context = [
                    "eyebrow" => $eyebrow,
                    "title" => $title,
                    "lead" => $lead,
                    "tone" => $tone,
                    "align" => $align,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 17
                    yield "<header class=\"sec-head";
                    yield (string) (((($tmp = ($context["tone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((" sec-head--" . ($context["tone"] ?? null)), "html", null, true)) : (""));
                    yield (string) (((($context["align"] ?? null) == "left")) ? (" sec-head--left") : (""));
                    yield "\">
  ";
                    // line 18
                    if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<p class=\"eyebrow\">";
                        yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
                        yield "</p>";
                    }
                    // line 19
                    yield "  ";
                    if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<h2>";
                        yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
                        yield "</h2>";
                    }
                    // line 20
                    yield "  ";
                    if ((($tmp = ($context["lead"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<div class=\"lead\">";
                        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, ($context["lead"] ?? null), false);
                        yield "</div>";
                    }
                    // line 21
                    yield "</header>";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["eyebrow" => false, "title" => false, "lead" => false, "tone" => false, "align" => false], false),
            "checklist" => new \Twig\TwigMacro("checklist", function ($items = null, $cls = null, ...$varargs): string|Markup {
                // line 25
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "cls" => $cls,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 26
                    if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 27
                        yield "<ul class=\"checklist";
                        yield (string) (((($tmp = ($context["cls"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape((" " . ($context["cls"] ?? null)), "html", null, true)) : (""));
                        yield "\">";
                        // line 28
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                            yield "<li><svg class=\"icon\" aria-hidden=\"true\"><use href=\"#i-check\"/></svg><span>";
                            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, $context["it"], false);
                            yield "</span></li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 29
                        yield "</ul>";
                    }
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "cls" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/ui.html.twig";
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
        return array (  211 => 29,  199 => 28,  195 => 27,  193 => 26,  182 => 25,  176 => 21,  169 => 20,  162 => 19,  156 => 18,  150 => 17,  136 => 16,  106 => 11,  104 => 10,  102 => 9,  88 => 8,  78 => 4,  67 => 3,  57 => 23,  54 => 14,  51 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Shared UI macros. Import with: {% import \x27macros/ui.html.twig\x27 as ui %} #}

{% macro icon(name, cls) -%}
<svg class=\"icon{{ cls ? \x27 \x27 ~ cls : \x27\x27 }}\" aria-hidden=\"true\" focusable=\"false\"><use href=\"#i-{{ name|default(\x27check\x27) }}\"/></svg>
{%- endmacro %}

{# Responsive image from a page\x27s own media. Prints nothing when the file is missing. #}
{% macro img(pg, name, alt, cls, eager) -%}
{%- set m = name ? pg.media[name] : null -%}
{%- if m -%}
<img src=\"{{ m.url }}\" alt=\"{{ (alt ?? \x27\x27)|e(\x27html_attr\x27) }}\"{% if cls %} class=\"{{ cls }}\"{% endif %}{% if m.width %} width=\"{{ m.width }}\" height=\"{{ m.height }}\"{% endif %} loading=\"{{ eager ? \x27eager\x27 : \x27lazy\x27 }}\" decoding=\"async\"{% if eager %} fetchpriority=\"high\"{% endif %}>
{%- endif -%}
{%- endmacro %}

{# Section heading: eyebrow + title + optional lead. \$tone = \x27\x27 | \x27light\x27 (for dark backgrounds) #}
{% macro head(eyebrow, title, lead, tone, align) -%}
<header class=\"sec-head{{ tone ? \x27 sec-head--\x27 ~ tone : \x27\x27 }}{{ align == \x27left\x27 ? \x27 sec-head--left\x27 : \x27\x27 }}\">
  {% if eyebrow %}<p class=\"eyebrow\">{{ eyebrow }}</p>{% endif %}
  {% if title %}<h2>{{ title }}</h2>{% endif %}
  {% if lead %}<div class=\"lead\">{{ lead|markdown(false) }}</div>{% endif %}
</header>
{%- endmacro %}

{# Check list from \"one item per line\" text #}
{% macro checklist(items, cls) -%}
{%- if items|length -%}
<ul class=\"checklist{{ cls ? \x27 \x27 ~ cls : \x27\x27 }}\">
  {%- for it in items %}<li><svg class=\"icon\" aria-hidden=\"true\"><use href=\"#i-check\"/></svg><span>{{ it|markdown(false) }}</span></li>{% endfor -%}
</ul>
{%- endif -%}
{%- endmacro %}
", "macros/ui.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/macros/ui.html.twig");
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
