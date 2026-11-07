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

/* resources.html.twig */
class __TwigTemplate_79b22b267d2aa4fe232c77a4bbbf7082_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "eyebrow", [], "any", false, false, false, 5), "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "text", [], "any", false, false, false, 5), "image" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "image", [], "any", false, false, false, 5)]));
        // line 6
        yield "
<nav class=\"pillar-nav\" aria-label=\"On this page\">
  <div class=\"container\"><ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 9), "links", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            yield "<li><a href=\"#";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "target", [], "any", false, false, false, 9), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "label", [], "any", false, false, false, 9), "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 10
        yield "  </ul></div>
</nav>

<section class=\"section\" id=\"prep\">
  <div class=\"container card-grid card-grid--2 card-grid--stretch\">
    <div class=\"info-card\">
      <p class=\"eyebrow\">";
        // line 16
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "prep", [], "any", false, false, false, 16), "eyebrow", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
      <h2>";
        // line 17
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "prep", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 18
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "prep", [], "any", false, false, false, 18), "text", [], "any", false, false, false, 18));
        yield "</div>
      <p class=\"list-title\">";
        // line 19
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "prep", [], "any", false, false, false, 19), "list_title", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
      ";
        // line 20
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(20))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "prep", [], "any", false, false, false, 20), "items", [], "any", false, false, false, 20))], $context, 20, $this->source);
        yield "
    </div>
    <div class=\"info-card\" id=\"expect\">
      <p class=\"eyebrow\">";
        // line 23
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "expect", [], "any", false, false, false, 23), "eyebrow", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
      <h2>";
        // line 24
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "expect", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 25
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "expect", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25));
        yield "</div>
      <p class=\"list-title\">";
        // line 26
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "expect", [], "any", false, false, false, 26), "list_title", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
      ";
        // line 27
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(27))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "expect", [], "any", false, false, false, 27), "items", [], "any", false, false, false, 27))], $context, 27, $this->source);
        yield "
    </div>
  </div>
</section>

<section class=\"section section--mint\" id=\"followup\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">";
        // line 34
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(34))->call("icon", ["calendar"], $context, 34, $this->source);
        yield "</span>
    <p class=\"eyebrow\">";
        // line 35
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "followup", [], "any", false, false, false, 35), "eyebrow", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
    <h2>";
        // line 36
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "followup", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
        yield "</h2>
    <div class=\"prose\">";
        // line 37
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "followup", [], "any", false, false, false, 37), "text", [], "any", false, false, false, 37));
        yield "</div>
  </div>
</section>

<section class=\"section\" id=\"faqs\">
  <div class=\"container container--narrow\">
    ";
        // line 43
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(43))->call("head", ["Answers", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43)], $context, 43, $this->source);
        yield "
    <div class=\"accordion\">
      ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "faqs", [], "any", false, false, false, 45), "items", [], "any", false, false, false, 45));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 46
            yield "      <details class=\"accordion__item\"";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" open") : (""));
            yield ">
        <summary>";
            // line 47
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "question", [], "any", false, false, false, 47), "html", null, true);
            yield "<span class=\"accordion__icon\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(47))->call("icon", ["plus"], $context, 47, $this->source);
            yield "</span></summary>
        <div class=\"accordion__body prose\">";
            // line 48
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "answer", [], "any", false, false, false, 48));
            yield "</div>
      </details>
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
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 51
        yield "    </div>
  </div>
</section>

<section class=\"section section--cream\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">";
        // line 58
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 58), "eyebrow", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
      <h2>";
        // line 59
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 60
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 60), "text", [], "any", false, false, false, 60));
        yield "</div>
      <p><a class=\"btn btn-primary\" href=\"";
        // line 61
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 61), "button_link", [], "any", false, false, false, 61)), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 61), "button_label", [], "any", false, false, false, 61), "html", null, true);
        yield " ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(61))->call("icon", ["arrow-right"], $context, 61, $this->source);
        yield "</a></p>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">";
        // line 63
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(63))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 63), "image", [], "any", false, false, false, 63), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 63), "title", [], "any", false, false, false, 63)], $context, 63, $this->source);
        yield "</div></div>
  </div>
</section>

";
        // line 67
        yield from $this->load("partials/cta-band.html.twig", 67)->unwrap()->yield(CoreExtension::merge($context, ["cta" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 67), ["button_label" => "Book Your Consultation", "button_link" => "#book"])]));
        // line 68
        yield "
<section class=\"section section--mint\" id=\"book\">
  <div class=\"container container--narrow\">
    ";
        // line 71
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(71))->call("head", ["Book online", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71)], $context, 71, $this->source);
        yield "
    <div class=\"form-card\">";
        // line 72
        yield from $this->load("partials/form.html.twig", 72)->unwrap()->yield(CoreExtension::merge($context, ["form_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 72), "form", [], "any", false, false, false, 72)]));
        yield "</div>
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
        return "resources.html.twig";
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
        return array (  266 => 72,  262 => 71,  257 => 68,  255 => 67,  248 => 63,  239 => 61,  235 => 60,  231 => 59,  227 => 58,  218 => 51,  200 => 48,  194 => 47,  189 => 46,  172 => 45,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  90 => 10,  76 => 9,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: h.hero.eyebrow, \x27title\x27: h.hero.title, \x27lead\x27: h.hero.text, \x27image\x27: h.hero.image} %}

<nav class=\"pillar-nav\" aria-label=\"On this page\">
  <div class=\"container\"><ul>
    {% for l in h.hero.links %}<li><a href=\"#{{ l.target }}\">{{ l.label }}</a></li>{% endfor %}
  </ul></div>
</nav>

<section class=\"section\" id=\"prep\">
  <div class=\"container card-grid card-grid--2 card-grid--stretch\">
    <div class=\"info-card\">
      <p class=\"eyebrow\">{{ h.prep.eyebrow }}</p>
      <h2>{{ h.prep.title }}</h2>
      <div class=\"prose\">{{ h.prep.text|markdown }}</div>
      <p class=\"list-title\">{{ h.prep.list_title }}</p>
      {{ ui.checklist(h.prep.items|lines) }}
    </div>
    <div class=\"info-card\" id=\"expect\">
      <p class=\"eyebrow\">{{ h.expect.eyebrow }}</p>
      <h2>{{ h.expect.title }}</h2>
      <div class=\"prose\">{{ h.expect.text|markdown }}</div>
      <p class=\"list-title\">{{ h.expect.list_title }}</p>
      {{ ui.checklist(h.expect.items|lines) }}
    </div>
  </div>
</section>

<section class=\"section section--mint\" id=\"followup\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">{{ ui.icon(\x27calendar\x27) }}</span>
    <p class=\"eyebrow\">{{ h.followup.eyebrow }}</p>
    <h2>{{ h.followup.title }}</h2>
    <div class=\"prose\">{{ h.followup.text|markdown }}</div>
  </div>
</section>

<section class=\"section\" id=\"faqs\">
  <div class=\"container container--narrow\">
    {{ ui.head(\x27Answers\x27, h.faqs.title) }}
    <div class=\"accordion\">
      {% for f in h.faqs.items %}
      <details class=\"accordion__item\"{{ loop.first ? \x27 open\x27 : \x27\x27 }}>
        <summary>{{ f.question }}<span class=\"accordion__icon\">{{ ui.icon(\x27plus\x27) }}</span></summary>
        <div class=\"accordion__body prose\">{{ f.answer|markdown }}</div>
      </details>
      {% endfor %}
    </div>
  </div>
</section>

<section class=\"section section--cream\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">{{ h.education.eyebrow }}</p>
      <h2>{{ h.education.title }}</h2>
      <div class=\"prose\">{{ h.education.text|markdown }}</div>
      <p><a class=\"btn btn-primary\" href=\"{{ h.education.button_link|href }}\">{{ h.education.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">{{ ui.img(page, h.education.image, h.education.title) }}</div></div>
  </div>
</section>

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta|merge({\x27button_label\x27: \x27Book Your Consultation\x27, \x27button_link\x27: \x27#book\x27})} %}

<section class=\"section section--mint\" id=\"book\">
  <div class=\"container container--narrow\">
    {{ ui.head(\x27Book online\x27, h.booking.title) }}
    <div class=\"form-card\">{% include \x27partials/form.html.twig\x27 with {\x27form_name\x27: h.booking.form} %}</div>
  </div>
</section>
{% endblock %}
", "resources.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/resources.html.twig");
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
