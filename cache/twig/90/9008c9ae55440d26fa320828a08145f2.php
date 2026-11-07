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

/* services.html.twig */
class __TwigTemplate_826624bbb4c05f8c796ea98d90480334_sourced extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        $context["h"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 4);
        // line 5
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "eyebrow", [], "any", false, false, false, 5), "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "text", [], "any", false, false, false, 5), "button_label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "button_label", [], "any", false, false, false, 5), "button_link" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "button_link", [], "any", false, false, false, 5)]));
        // line 6
        yield "
";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "featured", [], "any", false, false, false, 7), "group", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            $context["featured_pages"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 8), "published", [], "any", false, false, false, 8), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 8), "nav_group", [], "any", false, false, true, 8), 8, $this->source) == $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "featured", [], "any", false, false, true, 8), "group", [], "any", false, false, true, 8), 8, $this->source)); });
            // line 9
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["featured_pages"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "<section class=\"section section--cream\">
  <div class=\"container\">
    ";
                // line 12
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(12))->call("head", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "featured", [], "any", false, false, false, 12), "eyebrow", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "featured", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "featured", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12)], $context, 12, $this->source);
                yield "
    <div class=\"card-grid card-grid--4\">
      ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_pages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    yield from $this->load("partials/page-card.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["card" => $context["c"]]));
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 15
                yield "    </div>
  </div>
</section>
";
            }
        }
        // line 20
        yield "
";
        // line 21
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "categories", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "<section class=\"section\" data-tabs>
  <div class=\"container\">
    <div class=\"tabs\" role=\"tablist\" aria-label=\"Service categories\">
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "categories", [], "any", false, false, false, 25));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 26
                yield "        <button class=\"tab";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
                yield "\" role=\"tab\" id=\"tab-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
                yield "\" aria-controls=\"panel-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
                yield "\" aria-selected=\"";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\" type=\"button\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 26), "html", null, true);
                yield "</button>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 28
            yield "    </div>

    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "categories", [], "any", false, false, false, 30));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 31
                yield "    <div class=\"tab-panel";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
                yield "\" role=\"tabpanel\" id=\"panel-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31), "html", null, true);
                yield "\" aria-labelledby=\"tab-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31), "html", null, true);
                yield "\" tabindex=\"0\">
      <div class=\"panel-head\">
        <div>
          <h2>";
                // line 34
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 34), "html", null, true);
                yield "</h2>
          <p>";
                // line 35
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "text", [], "any", false, false, false, 35), "html", null, true);
                yield "</p>
        </div>
        ";
                // line 37
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a class=\"btn btn-primary\" href=\"";
                    yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link", [], "any", false, false, false, 37)), "html", null, true);
                    yield "\">";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link_label", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link_label", [], "any", false, false, false, 37), "html", null, true)) : ("View the full service"));
                    yield " ";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(37))->call("icon", ["arrow-right"], $context, 37, $this->source);
                    yield "</a>";
                }
                // line 38
                yield "      </div>
      <div class=\"card-grid card-grid--3\">
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "service_items", [], "any", false, false, false, 40), function ($__it__) use ($context, $macros) { $context["it"] = $__it__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["it"] ?? null), "category", [], "any", false, false, true, 40), 40, $this->source) == $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, true, 40), 40, $this->source)); }));
                foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                    // line 41
                    yield "        <article class=\"service-card\">
          <h3>";
                    // line 42
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 42), "html", null, true);
                    yield "</h3>
          <p>";
                    // line 43
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "text", [], "any", false, false, false, 43), "html", null, true);
                    yield "</p>
          ";
                    // line 44
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["it"], "why", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<div class=\"why-box\"><strong>Why choose GODC?</strong><p>";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "why", [], "any", false, false, false, 44), "html", null, true);
                        yield "</p></div>";
                    }
                    // line 45
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<a class=\"link-arrow\" href=\"";
                        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "link", [], "any", false, false, false, 45)), "html", null, true);
                        yield "\">Explore this service ";
                        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(45))->call("icon", ["arrow-right"], $context, 45, $this->source);
                        yield "</a>";
                    }
                    // line 46
                    yield "        </article>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 48
                yield "      </div>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 51
            yield "  </div>
</section>
";
        }
        // line 54
        yield "
";
        // line 55
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "more", [], "any", false, false, false, 55), "items", [], "any", false, false, false, 55))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "<section class=\"section section--mint\">
  <div class=\"container\">
    ";
            // line 58
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(58))->call("head", ["Beyond the clinic", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "more", [], "any", false, false, false, 58), "title", [], "any", false, false, false, 58)], $context, 58, $this->source);
            yield "
    <div class=\"card-grid card-grid--3\">
      ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "more", [], "any", false, false, false, 60), "items", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 61
                yield "      <a class=\"feature-card\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "link", [], "any", false, false, false, 61)), "html", null, true);
                yield "\">
        <span class=\"icon-badge icon-badge--lg\">";
                // line 62
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(62))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["m"], "icon", [], "any", false, false, false, 62)], $context, 62, $this->source);
                yield "</span>
        <h3>";
                // line 63
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "title", [], "any", false, false, false, 63), "html", null, true);
                yield "</h3>
        <p>";
                // line 64
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "text", [], "any", false, false, false, 64), "html", null, true);
                yield "</p>
        <span class=\"link-arrow\">Learn more ";
                // line 65
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(65))->call("icon", ["arrow-right"], $context, 65, $this->source);
                yield "</span>
      </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 68
            yield "    </div>
  </div>
</section>
";
        }
        // line 72
        yield "
";
        // line 73
        yield from $this->load("partials/cta-band.html.twig", 73)->unwrap()->yield(CoreExtension::merge($context, ["cta" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 73)]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "services.html.twig";
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
        return array (  349 => 73,  346 => 72,  340 => 68,  330 => 65,  326 => 64,  322 => 63,  318 => 62,  313 => 61,  309 => 60,  304 => 58,  300 => 56,  298 => 55,  295 => 54,  290 => 51,  273 => 48,  265 => 46,  256 => 45,  250 => 44,  246 => 43,  242 => 42,  239 => 41,  235 => 40,  231 => 38,  221 => 37,  216 => 35,  212 => 34,  201 => 31,  184 => 30,  180 => 28,  154 => 26,  137 => 25,  132 => 22,  130 => 21,  127 => 20,  120 => 15,  89 => 14,  84 => 12,  80 => 10,  78 => 9,  76 => 8,  74 => 7,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title, \x27lead\x27: h.hero.text, \x27button_label\x27: h.hero.button_label, \x27button_link\x27: h.hero.button_link} %}

{% if h.featured.group %}
{% set featured_pages = page.children.published|filter(c => c.header.nav_group == h.featured.group) %}
{% if featured_pages|length %}
<section class=\"section section--cream\">
  <div class=\"container\">
    {{ ui.head(h.featured.eyebrow, h.featured.title, h.featured.text) }}
    <div class=\"card-grid card-grid--4\">
      {% for c in featured_pages %}{% include \x27partials/page-card.html.twig\x27 with {\x27card\x27: c} %}{% endfor %}
    </div>
  </div>
</section>
{% endif %}
{% endif %}

{% if h.categories|length %}
<section class=\"section\" data-tabs>
  <div class=\"container\">
    <div class=\"tabs\" role=\"tablist\" aria-label=\"Service categories\">
      {% for cat in h.categories %}
        <button class=\"tab{{ loop.first ? \x27 is-active\x27 : \x27\x27 }}\" role=\"tab\" id=\"tab-{{ loop.index }}\" aria-controls=\"panel-{{ loop.index }}\" aria-selected=\"{{ loop.first ? \x27true\x27 : \x27false\x27 }}\" type=\"button\">{{ cat.title }}</button>
      {% endfor %}
    </div>

    {% for cat in h.categories %}
    <div class=\"tab-panel{{ loop.first ? \x27 is-active\x27 : \x27\x27 }}\" role=\"tabpanel\" id=\"panel-{{ loop.index }}\" aria-labelledby=\"tab-{{ loop.index }}\" tabindex=\"0\">
      <div class=\"panel-head\">
        <div>
          <h2>{{ cat.title }}</h2>
          <p>{{ cat.text }}</p>
        </div>
        {% if cat.link %}<a class=\"btn btn-primary\" href=\"{{ cat.link|href }}\">{{ cat.link_label ?: \x27View the full service\x27 }} {{ ui.icon(\x27arrow-right\x27) }}</a>{% endif %}
      </div>
      <div class=\"card-grid card-grid--3\">
        {% for it in (h.service_items)|filter(it => it.category == cat.title) %}
        <article class=\"service-card\">
          <h3>{{ it.title }}</h3>
          <p>{{ it.text }}</p>
          {% if it.why %}<div class=\"why-box\"><strong>Why choose GODC?</strong><p>{{ it.why }}</p></div>{% endif %}
          {% if cat.link %}<a class=\"link-arrow\" href=\"{{ cat.link|href }}\">Explore this service {{ ui.icon(\x27arrow-right\x27) }}</a>{% endif %}
        </article>
        {% endfor %}
      </div>
    </div>
    {% endfor %}
  </div>
</section>
{% endif %}

{% if h.more.items|length %}
<section class=\"section section--mint\">
  <div class=\"container\">
    {{ ui.head(\x27Beyond the clinic\x27, h.more.title) }}
    <div class=\"card-grid card-grid--3\">
      {% for m in h.more.items %}
      <a class=\"feature-card\" href=\"{{ m.link|href }}\">
        <span class=\"icon-badge icon-badge--lg\">{{ ui.icon(m.icon) }}</span>
        <h3>{{ m.title }}</h3>
        <p>{{ m.text }}</p>
        <span class=\"link-arrow\">Learn more {{ ui.icon(\x27arrow-right\x27) }}</span>
      </a>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta} %}
{% endblock %}
", "services.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/services.html.twig");
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
