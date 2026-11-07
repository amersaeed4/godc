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

/* article.html.twig */
class __TwigTemplate_97289b08f08b9f8bc9bfba9182ccbf69_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "eyebrow", [], "any", false, false, false, 5), "title" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 5))), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "lead", [], "any", false, false, false, 5), "image" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "image", [], "any", false, false, false, 5)]));
        // line 6
        yield "
<section class=\"section\">
  <div class=\"container article-layout";
        // line 8
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "sidebar", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" article-layout--wide"));
        yield "\">
    <div class=\"article-main\">
      ";
        // line 10
        if ((($tmp = Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"prose prose--lg\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10);
            yield "</div>";
        }
        // line 11
        yield "
      ";
        // line 12
        $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 12), "visible", [], "any", false, false, false, 12);
        // line 13
        yield "      ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "      <div class=\"article-block\">
        <h2>";
            // line 15
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "children_title", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "children_title", [], "any", false, false, false, 15), "html", null, true)) : ("Explore this section"));
            yield "</h2>
        <div class=\"card-grid card-grid--2\">
          ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["kids"] ?? null));
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
                yield from $this->load("partials/page-card.html.twig", 17)->unwrap()->yield(CoreExtension::merge($context, ["card" => $context["c"]]));
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
            // line 18
            yield "        </div>
      </div>
      ";
        }
        // line 21
        yield "
      ";
        // line 22
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cards", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "      <div class=\"article-block\">
        <h2>";
            // line 24
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cards_title", [], "any", false, false, false, 24), "html", null, true);
            yield "</h2>
        <div class=\"card-grid card-grid--2\">
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cards", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 27
                yield "          <div class=\"value-card\"><span class=\"icon-badge\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(27))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["c"], "icon", [], "any", false, false, false, 27)], $context, 27, $this->source);
                yield "</span><h3>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 27), "html", null, true);
                yield "</h3><p>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "text", [], "any", false, false, false, 27), "html", null, true);
                yield "</p></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 29
            yield "        </div>
      </div>
      ";
        }
        // line 32
        yield "
      ";
        // line 33
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "links", [], "any", false, false, false, 33))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "      <div class=\"article-block\">
        <h2>";
            // line 35
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "links_title", [], "any", false, false, false, 35), "html", null, true);
            yield "</h2>
        <ul class=\"link-list\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "links", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "link", [], "any", false, false, false, 37)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "title", [], "any", false, false, false, 37), "html", null, true);
                yield " ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(37))->call("icon", ["arrow-right"], $context, 37, $this->source);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 38
            yield "        </ul>
      </div>
      ";
        }
        // line 41
        yield "
      ";
        // line 42
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs", [], "any", false, false, false, 42))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <div class=\"article-block\">
        <h2>";
            // line 44
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs_title", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs_title", [], "any", false, false, false, 44), "html", null, true)) : ("Frequently Asked Questions"));
            yield "</h2>
        <div class=\"accordion\">
          ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 47
                yield "          <details class=\"accordion__item\"><summary>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "question", [], "any", false, false, false, 47), "html", null, true);
                yield "<span class=\"accordion__icon\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(47))->call("icon", ["plus"], $context, 47, $this->source);
                yield "</span></summary><div class=\"accordion__body prose\">";
                yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "answer", [], "any", false, false, false, 47));
                yield "</div></details>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 49
            yield "        </div>
      </div>
      ";
        }
        // line 52
        yield "    </div>

    ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "sidebar", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "    <aside class=\"article-side\">
      ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctor", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield from $this->load("partials/doctor-card.html.twig", 56)->unwrap()->yield(CoreExtension::merge($context, ["doc" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctor", [], "any", false, false, false, 56)]));
            }
            // line 57
            yield "      ";
            $context["kids_nav"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 57), "visible", [], "any", false, false, false, 57);
            // line 58
            yield "      ";
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids_nav"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "        ";
                $context["nav_title"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, false, 59);
                $context["nav_items"] = ($context["kids_nav"] ?? null);
                // line 60
                yield "      ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 60), "parent", [], "any", false, false, false, 60), "parent", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "        ";
                $context["nav_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 61), "menu", [], "any", false, false, false, 61);
                $context["nav_items"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 61), "children", [], "any", false, false, false, 61), "visible", [], "any", false, false, false, 61);
                // line 62
                yield "      ";
            } else {
                // line 63
                yield "        ";
                $context["nav_title"] = "Further information";
                $context["nav_items"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 63), "children", [], "any", false, false, false, 63), "visible", [], "any", false, false, false, 63);
                // line 64
                yield "      ";
            }
            // line 65
            yield "      ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["nav_items"] ?? null)) > 1) || (($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids_nav"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 66
                yield "      <div class=\"side-card\">
        <h3>";
                // line 67
                yield (string) $this->escaper->escape(($context["nav_title"] ?? null), "html", null, true);
                yield "</h3>
        <ul class=\"side-links\">
          ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["nav_items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    yield "<li><a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "url", [], "any", false, false, false, 69), "html", null, true);
                    yield "\"";
                    yield (string) ((($context["s"] == ($context["page"] ?? null))) ? (" class=\"is-current\" aria-current=\"page\"") : (""));
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "menu", [], "any", false, false, false, 69), "html", null, true);
                    yield "</a></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 70
                yield "        </ul>
      </div>
      ";
            }
            // line 73
            yield "      <div class=\"side-card side-card--contact\">
        <h3>Need help?</h3>
        <p>Our friendly team is here to answer your questions.</p>
        <ul class=\"contact-list\">
          <li>";
            // line 77
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(77))->call("icon", ["phone"], $context, 77, $this->source);
            yield "<a href=\"tel:";
            yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 77), "iham", [], "any", false, false, false, 77), "contact", [], "any", false, false, false, 77), "phone", [], "any", false, false, false, 77)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 77), "iham", [], "any", false, false, false, 77), "contact", [], "any", false, false, false, 77), "phone", [], "any", false, false, false, 77), "html", null, true);
            yield "</a></li>
          <li>";
            // line 78
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(78))->call("icon", ["mail"], $context, 78, $this->source);
            yield "<a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 78), "iham", [], "any", false, false, false, 78), "contact", [], "any", false, false, false, 78), "email", [], "any", false, false, false, 78), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 78), "iham", [], "any", false, false, false, 78), "contact", [], "any", false, false, false, 78), "email", [], "any", false, false, false, 78), "html", null, true);
            yield "</a></li>
          <li>";
            // line 79
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(79))->call("icon", ["map-pin"], $context, 79, $this->source);
            yield "<span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 79), "iham", [], "any", false, false, false, 79), "contact", [], "any", false, false, false, 79), "address", [], "any", false, false, false, 79), "html", null, true);
            yield "</span></li>
        </ul>
        <a class=\"btn btn-primary btn-block\" href=\"";
            // line 81
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">Book an Appointment</a>
      </div>
    </aside>
    ";
        }
        // line 85
        yield "  </div>
</section>

";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield from $this->load("partials/cta-band.html.twig", 88)->unwrap()->yield(CoreExtension::merge($context, ["cta" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 88)]));
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article.html.twig";
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
        return array (  357 => 88,  352 => 85,  345 => 81,  338 => 79,  330 => 78,  322 => 77,  316 => 73,  311 => 70,  295 => 69,  290 => 67,  287 => 66,  284 => 65,  281 => 64,  277 => 63,  274 => 62,  270 => 61,  267 => 60,  263 => 59,  260 => 58,  257 => 57,  253 => 56,  250 => 55,  248 => 54,  244 => 52,  239 => 49,  225 => 47,  221 => 46,  216 => 44,  213 => 43,  211 => 42,  208 => 41,  203 => 38,  187 => 37,  182 => 35,  179 => 34,  177 => 33,  174 => 32,  169 => 29,  155 => 27,  151 => 26,  146 => 24,  143 => 23,  141 => 22,  138 => 21,  133 => 18,  102 => 17,  97 => 15,  94 => 14,  91 => 13,  89 => 12,  86 => 11,  80 => 10,  75 => 8,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title ?: page.title, \x27lead\x27: h.hero.lead, \x27image\x27: h.hero.image} %}

<section class=\"section\">
  <div class=\"container article-layout{{ h.sidebar ? \x27\x27 : \x27 article-layout--wide\x27 }}\">
    <div class=\"article-main\">
      {% if page.content|trim %}<div class=\"prose prose--lg\">{{ page.content|raw }}</div>{% endif %}

      {% set kids = page.children.visible %}
      {% if kids|length %}
      <div class=\"article-block\">
        <h2>{{ h.children_title ?: \x27Explore this section\x27 }}</h2>
        <div class=\"card-grid card-grid--2\">
          {% for c in kids %}{% include \x27partials/page-card.html.twig\x27 with {\x27card\x27: c} %}{% endfor %}
        </div>
      </div>
      {% endif %}

      {% if h.cards|length %}
      <div class=\"article-block\">
        <h2>{{ h.cards_title }}</h2>
        <div class=\"card-grid card-grid--2\">
          {% for c in h.cards %}
          <div class=\"value-card\"><span class=\"icon-badge\">{{ ui.icon(c.icon) }}</span><h3>{{ c.title }}</h3><p>{{ c.text }}</p></div>
          {% endfor %}
        </div>
      </div>
      {% endif %}

      {% if h.links|length %}
      <div class=\"article-block\">
        <h2>{{ h.links_title }}</h2>
        <ul class=\"link-list\">
          {% for l in h.links %}<li><a href=\"{{ l.link|href }}\">{{ l.title }} {{ ui.icon(\x27arrow-right\x27) }}</a></li>{% endfor %}
        </ul>
      </div>
      {% endif %}

      {% if h.faqs|length %}
      <div class=\"article-block\">
        <h2>{{ h.faqs_title ?: \x27Frequently Asked Questions\x27 }}</h2>
        <div class=\"accordion\">
          {% for f in h.faqs %}
          <details class=\"accordion__item\"><summary>{{ f.question }}<span class=\"accordion__icon\">{{ ui.icon(\x27plus\x27) }}</span></summary><div class=\"accordion__body prose\">{{ f.answer|markdown }}</div></details>
          {% endfor %}
        </div>
      </div>
      {% endif %}
    </div>

    {% if h.sidebar %}
    <aside class=\"article-side\">
      {% if h.doctor %}{% include \x27partials/doctor-card.html.twig\x27 with {\x27doc\x27: h.doctor} %}{% endif %}
      {% set kids_nav = page.children.visible %}
      {% if kids_nav|length %}
        {% set nav_title = page.menu %}{% set nav_items = kids_nav %}
      {% elseif page.parent.parent.parent %}
        {% set nav_title = page.parent.menu %}{% set nav_items = page.parent.children.visible %}
      {% else %}
        {% set nav_title = \x27Further information\x27 %}{% set nav_items = page.parent.children.visible %}
      {% endif %}
      {% if nav_items|length > 1 or kids_nav|length %}
      <div class=\"side-card\">
        <h3>{{ nav_title }}</h3>
        <ul class=\"side-links\">
          {% for s in nav_items %}<li><a href=\"{{ s.url }}\"{{ s == page ? \x27 class=\"is-current\" aria-current=\"page\"\x27 : \x27\x27 }}>{{ s.menu }}</a></li>{% endfor %}
        </ul>
      </div>
      {% endif %}
      <div class=\"side-card side-card--contact\">
        <h3>Need help?</h3>
        <p>Our friendly team is here to answer your questions.</p>
        <ul class=\"contact-list\">
          <li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ config.themes.iham.contact.phone|tel }}\">{{ config.themes.iham.contact.phone }}</a></li>
          <li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ config.themes.iham.contact.email }}\">{{ config.themes.iham.contact.email }}</a></li>
          <li>{{ ui.icon(\x27map-pin\x27) }}<span>{{ config.themes.iham.contact.address }}</span></li>
        </ul>
        <a class=\"btn btn-primary btn-block\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book an Appointment</a>
      </div>
    </aside>
    {% endif %}
  </div>
</section>

{% if h.cta %}{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta} %}{% endif %}
{% endblock %}
", "article.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/article.html.twig");
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
