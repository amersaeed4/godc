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

/* about.html.twig */
class __TwigTemplate_48b4bb697602224b925c1844d7554560_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "eyebrow", [], "any", false, false, false, 5), "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "image" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "image", [], "any", false, false, false, 5)]));
        // line 6
        yield "
<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">";
        // line 10
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "who", [], "any", false, false, false, 10), "eyebrow", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
      <h2>";
        // line 11
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "who", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 12
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "who", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12));
        yield "</div>
    </div>
    <div class=\"split__aside\">
      <div class=\"mv-card\"><span class=\"icon-badge\">";
        // line 15
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["heart-pulse"], $context, 15, $this->source);
        yield "</span><h3>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "mission", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h3><p>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "mission", [], "any", false, false, false, 15), "text", [], "any", false, false, false, 15), "html", null, true);
        yield "</p></div>
      <div class=\"mv-card\"><span class=\"icon-badge\">";
        // line 16
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(16))->call("icon", ["globe"], $context, 16, $this->source);
        yield "</span><h3>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "vision", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</h3><p>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "vision", [], "any", false, false, false, 16), "text", [], "any", false, false, false, 16), "html", null, true);
        yield "</p></div>
    </div>
  </div>
</section>

<section class=\"section section--mint\">
  <div class=\"container\">
    ";
        // line 23
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(23))->call("head", ["What guides us", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "values", [], "any", false, false, false, 23), "title", [], "any", false, false, false, 23)], $context, 23, $this->source);
        yield "
    <div class=\"card-grid card-grid--3\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "values", [], "any", false, false, false, 25), "items", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 26
            yield "      <div class=\"value-card\"><span class=\"icon-badge\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(26))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["v"], "icon", [], "any", false, false, false, 26)], $context, 26, $this->source);
            yield "</span><h3>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</h3><p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["v"], "text", [], "any", false, false, false, 26), "html", null, true);
            yield "</p></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 28
        yield "    </div>
  </div>
</section>

<section class=\"section\">
  <div class=\"container\">
    ";
        // line 34
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(34))->call("head", ["Leadership", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "team", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "team", [], "any", false, false, false, 34), "text", [], "any", false, false, false, 34)], $context, 34, $this->source);
        yield "
    <div class=\"team-grid\">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "team", [], "any", false, false, false, 36), "members", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 37
            yield "      <article class=\"team-card\">
        <div class=\"team-card__photo\">";
            // line 38
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(38))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "image", [], "any", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 38)], $context, 38, $this->source);
            yield "</div>
        <div class=\"team-card__body\">
          <p class=\"team-card__role\">";
            // line 40
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "role", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
          <h3>";
            // line 41
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</h3>
          <p class=\"team-card__cred\">";
            // line 42
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "credentials", [], "any", false, false, false, 42), "html", null, true);
            yield "</p>
          ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["m"], "affiliations", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"team-card__aff\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "affiliations", [], "any", false, false, false, 43), "html", null, true);
                yield "</p>";
            }
            // line 44
            yield "        </div>
      </article>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 47
        yield "    </div>
  </div>
</section>

<section class=\"section section--cream\">
  <div class=\"container container--narrow\">
    ";
        // line 53
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(53))->call("head", ["Why GODC", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "reasons", [], "any", false, false, false, 53), "title", [], "any", false, false, false, 53), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "reasons", [], "any", false, false, false, 53), "text", [], "any", false, false, false, 53)], $context, 53, $this->source);
        yield "
    <ul class=\"reason-grid\">
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "reasons", [], "any", false, false, false, 55), "items", [], "any", false, false, false, 55)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            yield "<li><span class=\"reason-num\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
            yield "</span><span>";
            yield (string) $this->escaper->escape($context["r"], "html", null, true);
            yield "</span></li>";
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
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 56
        yield "    </ul>
  </div>
</section>

";
        // line 60
        yield from $this->load("partials/cta-band.html.twig", 60)->unwrap()->yield(CoreExtension::merge($context, ["cta" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 60)]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "about.html.twig";
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
        return array (  242 => 60,  236 => 56,  201 => 55,  196 => 53,  188 => 47,  179 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  156 => 38,  153 => 37,  149 => 36,  144 => 34,  136 => 28,  122 => 26,  118 => 25,  113 => 23,  99 => 16,  91 => 15,  85 => 12,  81 => 11,  77 => 10,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title, \x27image\x27: h.hero.image} %}

<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">{{ h.who.eyebrow }}</p>
      <h2>{{ h.who.title }}</h2>
      <div class=\"prose\">{{ h.who.text|markdown }}</div>
    </div>
    <div class=\"split__aside\">
      <div class=\"mv-card\"><span class=\"icon-badge\">{{ ui.icon(\x27heart-pulse\x27) }}</span><h3>{{ h.mission.title }}</h3><p>{{ h.mission.text }}</p></div>
      <div class=\"mv-card\"><span class=\"icon-badge\">{{ ui.icon(\x27globe\x27) }}</span><h3>{{ h.vision.title }}</h3><p>{{ h.vision.text }}</p></div>
    </div>
  </div>
</section>

<section class=\"section section--mint\">
  <div class=\"container\">
    {{ ui.head(\x27What guides us\x27, h.values.title) }}
    <div class=\"card-grid card-grid--3\">
      {% for v in h.values.items %}
      <div class=\"value-card\"><span class=\"icon-badge\">{{ ui.icon(v.icon) }}</span><h3>{{ v.title }}</h3><p>{{ v.text }}</p></div>
      {% endfor %}
    </div>
  </div>
</section>

<section class=\"section\">
  <div class=\"container\">
    {{ ui.head(\x27Leadership\x27, h.team.title, h.team.text) }}
    <div class=\"team-grid\">
      {% for m in h.team.members %}
      <article class=\"team-card\">
        <div class=\"team-card__photo\">{{ ui.img(page, m.image, m.name) }}</div>
        <div class=\"team-card__body\">
          <p class=\"team-card__role\">{{ m.role }}</p>
          <h3>{{ m.name }}</h3>
          <p class=\"team-card__cred\">{{ m.credentials }}</p>
          {% if m.affiliations %}<p class=\"team-card__aff\">{{ m.affiliations }}</p>{% endif %}
        </div>
      </article>
      {% endfor %}
    </div>
  </div>
</section>

<section class=\"section section--cream\">
  <div class=\"container container--narrow\">
    {{ ui.head(\x27Why GODC\x27, h.reasons.title, h.reasons.text) }}
    <ul class=\"reason-grid\">
      {% for r in h.reasons.items|lines %}<li><span class=\"reason-num\">{{ loop.index }}</span><span>{{ r }}</span></li>{% endfor %}
    </ul>
  </div>
</section>

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta} %}
{% endblock %}
", "about.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/about.html.twig");
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
