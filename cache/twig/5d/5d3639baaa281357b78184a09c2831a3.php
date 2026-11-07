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

/* post.html.twig */
class __TwigTemplate_2664fb13592f0f9552550d82f65d9add_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Blog & Newsroom", "title" => CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 5)]));
        // line 6
        yield "<section class=\"section\">
  <div class=\"container article-layout\">
    <article class=\"article-main\">
      <p class=\"post-meta\">By ";
        // line 9
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "author", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "author", [], "any", false, false, false, 9), "html", null, true)) : ("GODC Clinical Team"));
        yield " · <time datetime=\"";
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 9), "Y-m-d"), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 9), "F j, Y"), "html", null, true);
        yield "</time></p>
      ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "image", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"media-frame media-frame--wide\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "image", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10), "", true], $context, 10, $this->source);
            yield "</div>";
        }
        // line 11
        yield "      <div class=\"prose prose--lg\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 11);
        yield "</div>
      <p class=\"post-disclaimer\">";
        // line 12
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 12), "iham", [], "any", false, false, false, 12), "footer", [], "any", false, false, false, 12), "disclaimer", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
    </article>
    <aside class=\"article-side\">
      ";
        // line 15
        $context["more"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 15), "children", [], "any", false, false, false, 15), "published", [], "any", false, false, false, 15), "order", ["date", "desc"], "method", false, false, false, 15);
        // line 16
        yield "      <div class=\"side-card\">
        <h3>More articles</h3>
        <ul class=\"side-links\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["more"] ?? null), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return ($this->sandbox->ensureToStringAllowed(($context["s"] ?? null), 19, $this->source) != $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 19, $this->source)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            yield "<li><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "url", [], "any", false, false, false, 19), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 20
        yield "        </ul>
        <a class=\"link-arrow\" href=\"";
        // line 21
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 21), "url", [], "any", false, false, false, 21), "html", null, true);
        yield "\">All articles ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["arrow-right"], $context, 21, $this->source);
        yield "</a>
      </div>
      <div class=\"side-card side-card--contact\">
        <h3>Talk to a specialist</h3>
        <p>Get personalised, evidence-based guidance from our clinical team.</p>
        <a class=\"btn btn-primary btn-block\" href=\"";
        // line 26
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
        yield "\">Book an Appointment</a>
      </div>
    </aside>
  </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "post.html.twig";
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
        return array (  135 => 26,  125 => 21,  122 => 20,  108 => 19,  103 => 16,  101 => 15,  95 => 12,  90 => 11,  84 => 10,  76 => 9,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: \x27Blog & Newsroom\x27, \x27title\x27: page.title} %}
<section class=\"section\">
  <div class=\"container article-layout\">
    <article class=\"article-main\">
      <p class=\"post-meta\">By {{ h.author ?: \x27GODC Clinical Team\x27 }} · <time datetime=\"{{ page.date|date(\x27Y-m-d\x27) }}\">{{ page.date|date(\x27F j, Y\x27) }}</time></p>
      {% if h.image %}<div class=\"media-frame media-frame--wide\">{{ ui.img(page, h.image, page.title, \x27\x27, true) }}</div>{% endif %}
      <div class=\"prose prose--lg\">{{ page.content|raw }}</div>
      <p class=\"post-disclaimer\">{{ config.themes.iham.footer.disclaimer }}</p>
    </article>
    <aside class=\"article-side\">
      {% set more = page.parent.children.published.order(\x27date\x27, \x27desc\x27) %}
      <div class=\"side-card\">
        <h3>More articles</h3>
        <ul class=\"side-links\">
          {% for s in (more)|filter(s => s != page) %}<li><a href=\"{{ s.url }}\">{{ s.title }}</a></li>{% endfor %}
        </ul>
        <a class=\"link-arrow\" href=\"{{ page.parent.url }}\">All articles {{ ui.icon(\x27arrow-right\x27) }}</a>
      </div>
      <div class=\"side-card side-card--contact\">
        <h3>Talk to a specialist</h3>
        <p>Get personalised, evidence-based guidance from our clinical team.</p>
        <a class=\"btn btn-primary btn-block\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book an Appointment</a>
      </div>
    </aside>
  </div>
</section>
{% endblock %}
", "post.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/post.html.twig");
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
