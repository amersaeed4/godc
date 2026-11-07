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

/* lifestyle.html.twig */
class __TwigTemplate_5e5b2e8de910d69e7771b5830f3db15f_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "eyebrow", [], "any", false, false, false, 5), "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "text", [], "any", false, false, false, 5), "hero_form" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "form", [], "any", false, false, false, 5), "hero_form_title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "form_title", [], "any", false, false, false, 5)]));
        // line 6
        yield "
<nav class=\"pillar-nav\" aria-label=\"The six pillars\">
  <div class=\"container\">
    <ul>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "pillars", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            yield "<li><a href=\"#";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "anchor", [], "any", false, false, false, 10), "html", null, true);
            yield "\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["p"], "icon", [], "any", false, false, false, 10)], $context, 10, $this->source);
            yield " ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 10), "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 11
        yield "    </ul>
  </div>
</nav>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "pillars", [], "any", false, false, false, 15));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            yield "<section class=\"section pillar";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16) % 2 == 0)) ? (" section--mint") : (""));
            yield "\" id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "anchor", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
  <div class=\"container split";
            // line 17
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17) % 2 == 0)) ? (" split--reverse") : (""));
            yield "\">
    <div class=\"split__copy\">
      <p class=\"pillar__ord\"><span class=\"icon-badge\">";
            // line 19
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["p"], "icon", [], "any", false, false, false, 19)], $context, 19, $this->source);
            yield "</span> ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "ordinal", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
      <h2>";
            // line 20
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</h2>
      ";
            // line 21
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "lead", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"pillar__lead\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "lead", [], "any", false, false, false, 21), "html", null, true);
                yield "</p>";
            }
            // line 22
            yield "      <div class=\"prose\">";
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "text", [], "any", false, false, false, 22));
            yield "</div>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">";
            // line 24
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 24)], $context, 24, $this->source);
            yield "</div></div>
  </div>
</section>
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
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 28
        yield "
<section class=\"section section--cream\">
  <div class=\"container container--narrow center\">
    ";
        // line 31
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("head", ["An interconnected system", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "summary_block", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "summary_block", [], "any", false, false, false, 31), "text", [], "any", false, false, false, 31)], $context, 31, $this->source);
        yield "
    ";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "summary_block", [], "any", false, false, false, 32), "button_label", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-primary btn-lg\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "summary_block", [], "any", false, false, false, 32), "button_link", [], "any", false, false, false, 32)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "summary_block", [], "any", false, false, false, 32), "button_label", [], "any", false, false, false, 32), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(32))->call("icon", ["arrow-right"], $context, 32, $this->source);
            yield "</a>";
        }
        // line 33
        yield "  </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lifestyle.html.twig";
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
        return array (  188 => 33,  178 => 32,  174 => 31,  169 => 28,  150 => 24,  144 => 22,  138 => 21,  134 => 20,  128 => 19,  123 => 17,  116 => 16,  99 => 15,  93 => 11,  77 => 10,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title, \x27lead\x27: h.hero.text, \x27hero_form\x27: h.hero.form, \x27hero_form_title\x27: h.hero.form_title} %}

<nav class=\"pillar-nav\" aria-label=\"The six pillars\">
  <div class=\"container\">
    <ul>
      {% for p in h.pillars %}<li><a href=\"#{{ p.anchor }}\">{{ ui.icon(p.icon) }} {{ p.title }}</a></li>{% endfor %}
    </ul>
  </div>
</nav>

{% for p in h.pillars %}
<section class=\"section pillar{{ loop.index is even ? \x27 section--mint\x27 : \x27\x27 }}\" id=\"{{ p.anchor }}\">
  <div class=\"container split{{ loop.index is even ? \x27 split--reverse\x27 : \x27\x27 }}\">
    <div class=\"split__copy\">
      <p class=\"pillar__ord\"><span class=\"icon-badge\">{{ ui.icon(p.icon) }}</span> {{ p.ordinal }}</p>
      <h2>{{ p.title }}</h2>
      {% if p.lead %}<p class=\"pillar__lead\">{{ p.lead }}</p>{% endif %}
      <div class=\"prose\">{{ p.text|markdown }}</div>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">{{ ui.img(page, p.image, p.title) }}</div></div>
  </div>
</section>
{% endfor %}

<section class=\"section section--cream\">
  <div class=\"container container--narrow center\">
    {{ ui.head(\x27An interconnected system\x27, h.summary_block.title, h.summary_block.text) }}
    {% if h.summary_block.button_label %}<a class=\"btn btn-primary btn-lg\" href=\"{{ h.summary_block.button_link|href }}\">{{ h.summary_block.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a>{% endif %}
  </div>
</section>
{% endblock %}
", "lifestyle.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/lifestyle.html.twig");
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
