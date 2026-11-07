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

/* macros/nav.html.twig */
class __TwigTemplate_f094fb178c9342dbe64f66299f10f152_sourced extends Template
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
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "tree" => new \Twig\TwigMacro("tree", function ($items = null, $depth = null, ...$varargs): string|Markup {
                // line 2
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "depth" => $depth,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 3
                    yield "<ul class=\"submenu__tree submenu__tree--d";
                    yield (string) $this->escaper->escape(($context["depth"] ?? null), "html", null, true);
                    yield "\">
  ";
                    // line 4
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 5
                        yield "    ";
                        $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "children", [], "any", false, false, false, 5), "visible", [], "any", false, false, false, 5);
                        // line 6
                        yield "    <li";
                        yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"has-children\"") : (""));
                        yield ">
      <a href=\"";
                        // line 7
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 7), "html", null, true);
                        yield "\"";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "active", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" aria-current=\"page\"") : (""));
                        yield ">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 7), "html", null, true);
                        yield "</a>
      ";
                        // line 8
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (string) $this->getMacroNamespace()->call("tree", [($context["kids"] ?? null), (($context["depth"] ?? null) + 1)], $context, 8, $this->source);
                        }
                        // line 9
                        yield "    </li>
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 11
                    yield "</ul>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "depth" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/nav.html.twig";
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
        return array (  103 => 11,  95 => 9,  91 => 8,  83 => 7,  78 => 6,  75 => 5,  71 => 4,  66 => 3,  55 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Recursive list of child pages for the dropdown menu #}
{% macro tree(items, depth) %}
<ul class=\"submenu__tree submenu__tree--d{{ depth }}\">
  {% for c in items %}
    {% set kids = c.children.visible %}
    <li{{ kids|length ? \x27 class=\"has-children\"\x27 : \x27\x27 }}>
      <a href=\"{{ c.url }}\"{{ c.active ? \x27 aria-current=\"page\"\x27 : \x27\x27 }}>{{ c.menu }}</a>
      {% if kids|length %}{{ _self.tree(kids, depth + 1) }}{% endif %}
    </li>
  {% endfor %}
</ul>
{% endmacro %}
", "macros/nav.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/macros/nav.html.twig");
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
