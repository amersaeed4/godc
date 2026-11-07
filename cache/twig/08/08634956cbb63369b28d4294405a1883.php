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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_f0afc61b2fc468801b55efc9226136c4_sourced extends Template
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
        // line 1
        $context["crumbs"] = [];
        // line 2
        $context["cp"] = ($context["page"] ?? null);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((($tmp = ($context["cp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "parent", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                $context["crumbs"] = Twig\Extension\CoreExtension::merge([["title" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "menu", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "menu", [], "any", false, false, false, 3)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "title", [], "any", false, false, false, 3))), "url" => CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "url", [], "any", false, false, false, 3), "current" => (($context["cp"] ?? null) == ($context["page"] ?? null))]], ($context["crumbs"] ?? null));
                $context["cp"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "parent", [], "any", false, false, false, 3);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 4
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "<nav class=\"breadcrumbs\" aria-label=\"Breadcrumb\">
  <ol>
    <li><a href=\"";
            // line 7
            yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
            yield "\">Home</a></li>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["crumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 9
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "current", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li aria-current=\"page\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 9), "html", null, true);
                    yield "</li>";
                } else {
                    yield "<li><a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 9), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 9), "html", null, true);
                    yield "</a></li>";
                }
                // line 10
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 11
            yield "  </ol>
</nav>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/breadcrumbs.html.twig";
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
        return array (  99 => 11,  92 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 5,  65 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set crumbs = [] %}
{% set cp = page %}
{% for i in 1..6 %}{% if cp and cp.parent %}{% set crumbs = [{\x27title\x27: cp.menu ?: cp.title, \x27url\x27: cp.url, \x27current\x27: (cp == page)}]|merge(crumbs) %}{% set cp = cp.parent %}{% endif %}{% endfor %}
{% if not page.home %}
<nav class=\"breadcrumbs\" aria-label=\"Breadcrumb\">
  <ol>
    <li><a href=\"{{ base_url_relative ?: \x27/\x27 }}\">Home</a></li>
    {% for c in crumbs %}
      {% if c.current %}<li aria-current=\"page\">{{ c.title }}</li>{% else %}<li><a href=\"{{ c.url }}\">{{ c.title }}</a></li>{% endif %}
    {% endfor %}
  </ol>
</nav>
{% endif %}
", "partials/breadcrumbs.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/breadcrumbs.html.twig");
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
