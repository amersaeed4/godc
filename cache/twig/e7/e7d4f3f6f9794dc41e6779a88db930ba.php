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

/* contact.html.twig */
class __TwigTemplate_2f0a4026a55553148a4265e452e7ce2d_sourced extends Template
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
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 5), "iham", [], "any", false, false, false, 5);
        // line 6
        $context["contact"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "contact", [], "any", false, false, false, 6);
        // line 7
        yield from $this->load("partials/page-hero.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 7), "eyebrow", [], "any", false, false, false, 7), "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 7), "text", [], "any", false, false, false, 7)]));
        // line 8
        yield "
<section class=\"section\" id=\"book\">
  <div class=\"container contact-layout\">
    <div class=\"form-card\">
      <h2 class=\"form-card__title\">Book a Consultation</h2>
      ";
        // line 13
        yield from $this->load("partials/form.html.twig", 13)->unwrap()->yield(CoreExtension::merge($context, ["form_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "form_ref", [], "any", false, false, false, 13)]));
        // line 14
        yield "    </div>
    <aside class=\"contact-side\">
      ";
        // line 16
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "      <div class=\"clinic-stack\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                // line 19
                yield "        <div class=\"side-card side-card--contact clinic-card\">
          <p class=\"clinic-card__doctor\">";
                // line 20
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "doctor", [], "any", false, false, false, 20), "html", null, true);
                yield "</p>
          <h3>";
                // line 21
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "name", [], "any", false, false, false, 21), "html", null, true);
                yield "</h3>
          <ul class=\"contact-list contact-list--lg\">
            <li>";
                // line 23
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(23))->call("icon", ["map-pin"], $context, 23, $this->source);
                yield "<div><span class=\"contact-list__label\">Address</span><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "map_link", [], "any", false, false, false, 23), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "address", [], "any", false, false, false, 23), "html", null, true);
                yield "</a></div></li>
            <li>";
                // line 24
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["phone"], $context, 24, $this->source);
                yield "<div><span class=\"contact-list__label\">Phone</span><a href=\"tel:";
                yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 24)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 24), "html", null, true);
                yield "</a></div></li>
            ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", ["mail"], $context, 25, $this->source);
                    yield "<div><span class=\"contact-list__label\">Email</span><a href=\"mailto:";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 25), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "email", [], "any", false, false, false, 25), "html", null, true);
                    yield "</a></div></li>";
                }
                // line 26
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "hours", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<li>";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(26))->call("icon", ["clock"], $context, 26, $this->source);
                    yield "<div><span class=\"contact-list__label\">Opening hours</span><span>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "hours", [], "any", false, false, false, 26), "html", null, true);
                    yield "</span></div></li>";
                }
                // line 27
                yield "          </ul>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "      </div>
      ";
        } else {
            // line 32
            yield "      <div class=\"side-card side-card--contact\">
        <h3>";
            // line 33
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "details", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
            yield "</h3>
        <p>";
            // line 34
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "details", [], "any", false, false, false, 34), "text", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
        <ul class=\"contact-list contact-list--lg\">
          <li>";
            // line 36
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(36))->call("icon", ["phone"], $context, 36, $this->source);
            yield "<div><span class=\"contact-list__label\">Phone</span><a href=\"tel:";
            yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 36)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 36), "html", null, true);
            yield "</a></div></li>
          <li>";
            // line 37
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(37))->call("icon", ["mail"], $context, 37, $this->source);
            yield "<div><span class=\"contact-list__label\">Email</span><a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 37), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 37), "html", null, true);
            yield "</a></div></li>
          <li>";
            // line 38
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(38))->call("icon", ["map-pin"], $context, 38, $this->source);
            yield "<div><span class=\"contact-list__label\">Address</span><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_link", [], "any", false, false, false, 38), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 38), "html", null, true);
            yield "</a></div></li>
        </ul>
        <h3 class=\"mt-sm\">";
            // line 40
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hours_title", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hours_title", [], "any", false, false, false, 40), "html", null, true)) : ("Opening Hours"));
            yield "</h3>
        <dl class=\"hours\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "hours", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                yield "<div><dt>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "days", [], "any", false, false, false, 42), "html", null, true);
                yield "</dt><dd>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "time", [], "any", false, false, false, 42), "html", null, true);
                yield "</dd></div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 43
            yield "        </dl>
      </div>
      ";
        }
        // line 46
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_embed", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "      <div class=\"map-frame\"><iframe src=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_embed", [], "any", false, false, false, 47), "html", null, true);
            yield "\" title=\"Map to ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" allowfullscreen></iframe></div>
      ";
        } else {
            // line 49
            yield "      <a class=\"map-link\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_link", [], "any", false, false, false, 49), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(49))->call("icon", ["map-pin"], $context, 49, $this->source);
            yield " Get directions ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(49))->call("icon", ["external"], $context, 49, $this->source);
            yield "</a>
      ";
        }
        // line 51
        yield "    </aside>
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
        return "contact.html.twig";
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
        return array (  239 => 51,  229 => 49,  221 => 47,  218 => 46,  213 => 43,  199 => 42,  194 => 40,  185 => 38,  177 => 37,  169 => 36,  164 => 34,  160 => 33,  157 => 32,  153 => 30,  144 => 27,  135 => 26,  125 => 25,  117 => 24,  109 => 23,  104 => 21,  100 => 20,  97 => 19,  93 => 18,  90 => 17,  88 => 16,  84 => 14,  82 => 13,  75 => 8,  73 => 7,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% set theme = config.themes.iham %}
{% set contact = theme.contact %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title, \x27lead\x27: h.hero.text} %}

<section class=\"section\" id=\"book\">
  <div class=\"container contact-layout\">
    <div class=\"form-card\">
      <h2 class=\"form-card__title\">Book a Consultation</h2>
      {% include \x27partials/form.html.twig\x27 with {\x27form_name\x27: h.form_ref} %}
    </div>
    <aside class=\"contact-side\">
      {% if theme.locations|length %}
      <div class=\"clinic-stack\">
        {% for loc in theme.locations %}
        <div class=\"side-card side-card--contact clinic-card\">
          <p class=\"clinic-card__doctor\">{{ loc.doctor }}</p>
          <h3>{{ loc.name }}</h3>
          <ul class=\"contact-list contact-list--lg\">
            <li>{{ ui.icon(\x27map-pin\x27) }}<div><span class=\"contact-list__label\">Address</span><a href=\"{{ loc.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ loc.address }}</a></div></li>
            <li>{{ ui.icon(\x27phone\x27) }}<div><span class=\"contact-list__label\">Phone</span><a href=\"tel:{{ loc.phone|tel }}\">{{ loc.phone }}</a></div></li>
            {% if loc.email %}<li>{{ ui.icon(\x27mail\x27) }}<div><span class=\"contact-list__label\">Email</span><a href=\"mailto:{{ loc.email }}\">{{ loc.email }}</a></div></li>{% endif %}
            {% if loc.hours %}<li>{{ ui.icon(\x27clock\x27) }}<div><span class=\"contact-list__label\">Opening hours</span><span>{{ loc.hours }}</span></div></li>{% endif %}
          </ul>
        </div>
        {% endfor %}
      </div>
      {% else %}
      <div class=\"side-card side-card--contact\">
        <h3>{{ h.details.title }}</h3>
        <p>{{ h.details.text }}</p>
        <ul class=\"contact-list contact-list--lg\">
          <li>{{ ui.icon(\x27phone\x27) }}<div><span class=\"contact-list__label\">Phone</span><a href=\"tel:{{ contact.phone|tel }}\">{{ contact.phone }}</a></div></li>
          <li>{{ ui.icon(\x27mail\x27) }}<div><span class=\"contact-list__label\">Email</span><a href=\"mailto:{{ contact.email }}\">{{ contact.email }}</a></div></li>
          <li>{{ ui.icon(\x27map-pin\x27) }}<div><span class=\"contact-list__label\">Address</span><a href=\"{{ contact.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ contact.address }}</a></div></li>
        </ul>
        <h3 class=\"mt-sm\">{{ h.hours_title ?: \x27Opening Hours\x27 }}</h3>
        <dl class=\"hours\">
          {% for r in theme.hours %}<div><dt>{{ r.days }}</dt><dd>{{ r.time }}</dd></div>{% endfor %}
        </dl>
      </div>
      {% endif %}
      {% if contact.map_embed %}
      <div class=\"map-frame\"><iframe src=\"{{ contact.map_embed }}\" title=\"Map to {{ theme.brand.name }}\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" allowfullscreen></iframe></div>
      {% else %}
      <a class=\"map-link\" href=\"{{ contact.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ ui.icon(\x27map-pin\x27) }} Get directions {{ ui.icon(\x27external\x27) }}</a>
      {% endif %}
    </aside>
  </div>
</section>
{% endblock %}
", "contact.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/contact.html.twig");
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
