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

/* partials/footer.html.twig */
class __TwigTemplate_f15d97e357a4fc286dd324a1154059d5_sourced extends Template
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
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 2), "iham", [], "any", false, false, false, 2);
        // line 3
        $context["contact"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "contact", [], "any", false, false, false, 3);
        // line 4
        $context["social"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "social", [], "any", false, false, false, 4);
        // line 5
        $context["root_pages"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 5), "visible", [], "any", false, false, false, 5);
        // line 6
        yield "<footer class=\"site-footer\">
  <div class=\"container footer-grid\">
    <div class=\"footer-col footer-col--brand\">
      <a class=\"footer-logo\" href=\"";
        // line 9
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "\"><img src=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/logo-stacked.png"), "html", null, true);
        yield "\" alt=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "\" width=\"603\" height=\"553\" loading=\"lazy\"></a>
      ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 10), "about", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 10), "about", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>";
        }
        // line 11
        yield "      <ul class=\"social\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["facebook" => "Facebook", "instagram" => "Instagram", "linkedin" => "LinkedIn", "youtube" => "YouTube", "x" => "X"]);
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 13
            yield "          ";
            if ((($tmp = (($_v0 = ($context["social"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = $context["key"]) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape((($_v2 = ($context["social"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = $context["key"]) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\" aria-label=\"";
                yield (string) $this->escaper->escape($context["label"], "html", null, true);
                yield "\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", [((($context["key"] == "x")) ? ("x-twitter") : ($context["key"]))], $context, 13, $this->source);
                yield "</a></li>";
            }
            // line 14
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 15
        yield "      </ul>
    </div>

    ";
        // line 18
        $context["small_groups"] = [];
        // line 19
        yield "    ";
        $context["big_groups"] = [];
        // line 20
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["root_pages"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "children", [], "any", false, false, true, 20), "visible", [], "any", false, false, true, 20), 20, $this->source)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 21
            yield "      ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 21), "visible", [], "any", false, false, false, 21)) > 6)) {
                $context["big_groups"] = Twig\Extension\CoreExtension::merge(($context["big_groups"] ?? null), [$context["p"]]);
            } else {
                $context["small_groups"] = Twig\Extension\CoreExtension::merge(($context["small_groups"] ?? null), [$context["p"]]);
            }
            // line 22
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 23
        yield "
    ";
        // line 24
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["small_groups"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "    <div class=\"footer-col footer-col--stack\">
      ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["small_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 27
                yield "      <div class=\"footer-block\">
        <h3 class=\"footer-title\">";
                // line 28
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 28), "html", null, true);
                yield "</h3>
        <ul class=\"footer-links\">
          ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 30), "visible", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    yield "<li><a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 30), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 30), "html", null, true);
                    yield "</a></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 31
                yield "        </ul>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 34
            yield "    </div>
    ";
        }
        // line 36
        yield "
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["big_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 38
            yield "    <div class=\"footer-col footer-col--wide\">
      <h3 class=\"footer-title\">";
            // line 39
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 39), "html", null, true);
            yield "</h3>
      <ul class=\"footer-links footer-links--cols\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 41), "visible", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 41), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 41), "html", null, true);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 42
            yield "      </ul>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 45
        yield "
    <div class=\"footer-col footer-col--contact\">
      <h3 class=\"footer-title\">Our Clinics</h3>
      ";
        // line 48
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 48))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 50
                yield "      <div class=\"footer-clinic\">
        <p class=\"footer-clinic__name\">";
                // line 51
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "name", [], "any", false, false, false, 51), "html", null, true);
                yield "</p>
        <ul class=\"footer-contact\">
          ";
                // line 53
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "address", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(53))->call("icon", ["map-pin"], $context, 53, $this->source);
                    yield "<a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "map_link", [], "any", false, false, false, 53), "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noopener\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "address", [], "any", false, false, false, 53), "html", null, true);
                    yield "</a></li>";
                }
                // line 54
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(54))->call("icon", ["phone"], $context, 54, $this->source);
                    yield "<a href=\"tel:";
                    yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 54)), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 54), "html", null, true);
                    yield "</a></li>";
                }
                // line 55
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(55))->call("icon", ["mail"], $context, 55, $this->source);
                    yield "<a href=\"mailto:";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 55), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 55), "html", null, true);
                    yield "</a></li>";
                }
                // line 56
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "hours", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(56))->call("icon", ["clock"], $context, 56, $this->source);
                    yield "<span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "hours", [], "any", false, false, false, 56), "html", null, true);
                    yield "</span></li>";
                }
                // line 57
                yield "        </ul>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 60
            yield "      ";
        } else {
            // line 61
            yield "      <ul class=\"footer-contact\">
        ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(62))->call("icon", ["phone"], $context, 62, $this->source);
                yield "<a href=\"tel:";
                yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 62)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 62), "html", null, true);
                yield "</a></li>";
            }
            // line 63
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(63))->call("icon", ["mail"], $context, 63, $this->source);
                yield "<a href=\"mailto:";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
                yield "</a></li>";
            }
            // line 64
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(64))->call("icon", ["map-pin"], $context, 64, $this->source);
                yield "<a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_link", [], "any", false, false, false, 64), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 64), "html", null, true);
                yield "</a></li>";
            }
            // line 65
            yield "      </ul>
      ";
        }
        // line 67
        yield "    </div>
  </div>

  <div class=\"footer-bottom\">
    <div class=\"container footer-bottom__inner\">
      <p>© ";
        // line 72
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 72), "copyright", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 72), "copyright", [], "any", false, false, false, 72), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true)));
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 72), "credit", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " · ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 72), "credit", [], "any", false, false, false, 72), "html", null, true);
        }
        yield "</p>
      <ul class=\"footer-legal\">
        <li><a href=\"";
        // line 74
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/privacy-policy"), "html", null, true);
        yield "\">Privacy Policy</a></li>
        <li><a href=\"";
        // line 75
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/sitemap"), "html", null, true);
        yield ".xml\">Sitemap</a></li>
      </ul>
    </div>
    ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 78), "disclaimer", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"container\"><p class=\"footer-disclaimer\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 78), "disclaimer", [], "any", false, false, false, 78), "html", null, true);
            yield "</p></div>";
        }
        // line 79
        yield "  </div>
</footer>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  364 => 79,  358 => 78,  352 => 75,  348 => 74,  337 => 72,  330 => 67,  326 => 65,  315 => 64,  304 => 63,  294 => 62,  291 => 61,  288 => 60,  279 => 57,  270 => 56,  259 => 55,  248 => 54,  238 => 53,  233 => 51,  230 => 50,  225 => 49,  223 => 48,  218 => 45,  209 => 42,  195 => 41,  190 => 39,  187 => 38,  183 => 37,  180 => 36,  176 => 34,  167 => 31,  153 => 30,  148 => 28,  145 => 27,  141 => 26,  138 => 25,  136 => 24,  133 => 23,  126 => 22,  119 => 21,  114 => 20,  111 => 19,  109 => 18,  104 => 15,  97 => 14,  86 => 13,  82 => 12,  79 => 11,  73 => 10,  63 => 9,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set theme = config.themes.iham %}
{% set contact = theme.contact %}
{% set social = theme.social %}
{% set root_pages = pages.children.visible %}
<footer class=\"site-footer\">
  <div class=\"container footer-grid\">
    <div class=\"footer-col footer-col--brand\">
      <a class=\"footer-logo\" href=\"{{ base_url_relative ?: \x27/\x27 }}\" aria-label=\"{{ theme.brand.name }}\"><img src=\"{{ url(\x27theme://images/logo-stacked.png\x27) }}\" alt=\"{{ theme.brand.name }}\" width=\"603\" height=\"553\" loading=\"lazy\"></a>
      {% if theme.footer.about %}<p>{{ theme.footer.about }}</p>{% endif %}
      <ul class=\"social\">
        {% for key, label in {\x27facebook\x27: \x27Facebook\x27, \x27instagram\x27: \x27Instagram\x27, \x27linkedin\x27: \x27LinkedIn\x27, \x27youtube\x27: \x27YouTube\x27, \x27x\x27: \x27X\x27} %}
          {% if social[key] %}<li><a href=\"{{ social[key] }}\" target=\"_blank\" rel=\"noopener\" aria-label=\"{{ label }}\">{{ ui.icon(key == \x27x\x27 ? \x27x-twitter\x27 : key) }}</a></li>{% endif %}
        {% endfor %}
      </ul>
    </div>

    {% set small_groups = [] %}
    {% set big_groups = [] %}
    {% for p in (root_pages)|filter(p => p.children.visible|length) %}
      {% if p.children.visible|length > 6 %}{% set big_groups = big_groups|merge([p]) %}{% else %}{% set small_groups = small_groups|merge([p]) %}{% endif %}
    {% endfor %}

    {% if small_groups|length %}
    <div class=\"footer-col footer-col--stack\">
      {% for p in small_groups %}
      <div class=\"footer-block\">
        <h3 class=\"footer-title\">{{ p.menu }}</h3>
        <ul class=\"footer-links\">
          {% for c in p.children.visible %}<li><a href=\"{{ c.url }}\">{{ c.menu }}</a></li>{% endfor %}
        </ul>
      </div>
      {% endfor %}
    </div>
    {% endif %}

    {% for p in big_groups %}
    <div class=\"footer-col footer-col--wide\">
      <h3 class=\"footer-title\">{{ p.menu }}</h3>
      <ul class=\"footer-links footer-links--cols\">
        {% for c in p.children.visible %}<li><a href=\"{{ c.url }}\">{{ c.menu }}</a></li>{% endfor %}
      </ul>
    </div>
    {% endfor %}

    <div class=\"footer-col footer-col--contact\">
      <h3 class=\"footer-title\">Our Clinics</h3>
      {% if theme.locations|length %}
      {% for loc in theme.locations %}
      <div class=\"footer-clinic\">
        <p class=\"footer-clinic__name\">{{ loc.name }}</p>
        <ul class=\"footer-contact\">
          {% if loc.address %}<li>{{ ui.icon(\x27map-pin\x27) }}<a href=\"{{ loc.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ loc.address }}</a></li>{% endif %}
          {% if loc.phone %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ loc.phone|tel }}\">{{ loc.phone }}</a></li>{% endif %}
          {% if loc.email %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ loc.email }}\">{{ loc.email }}</a></li>{% endif %}
          {% if loc.hours %}<li>{{ ui.icon(\x27clock\x27) }}<span>{{ loc.hours }}</span></li>{% endif %}
        </ul>
      </div>
      {% endfor %}
      {% else %}
      <ul class=\"footer-contact\">
        {% if contact.phone %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ contact.phone|tel }}\">{{ contact.phone }}</a></li>{% endif %}
        {% if contact.email %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ contact.email }}\">{{ contact.email }}</a></li>{% endif %}
        {% if contact.address %}<li>{{ ui.icon(\x27map-pin\x27) }}<a href=\"{{ contact.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ contact.address }}</a></li>{% endif %}
      </ul>
      {% endif %}
    </div>
  </div>

  <div class=\"footer-bottom\">
    <div class=\"container footer-bottom__inner\">
      <p>© {{ \x27now\x27|date(\x27Y\x27) }} {{ theme.footer.copyright ?: theme.brand.name }}{% if theme.footer.credit %} · {{ theme.footer.credit }}{% endif %}</p>
      <ul class=\"footer-legal\">
        <li><a href=\"{{ \x27/privacy-policy\x27|href }}\">Privacy Policy</a></li>
        <li><a href=\"{{ \x27/sitemap\x27|href }}.xml\">Sitemap</a></li>
      </ul>
    </div>
    {% if theme.footer.disclaimer %}<div class=\"container\"><p class=\"footer-disclaimer\">{{ theme.footer.disclaimer }}</p></div>{% endif %}
  </div>
</footer>
", "partials/footer.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/footer.html.twig");
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
