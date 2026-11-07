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

/* condition.html.twig */
class __TwigTemplate_f6e652be75eb8d8bcb8e0108fe852423_sourced extends Template
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
        yield from $this->load("partials/page-hero.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["eyebrow" => "Our Services", "title" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "lead" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5), "intro", [], "any", false, false, false, 5), "hero_form" => "quick-booking", "hero_form_title" => "Book an Appointment"]));
        // line 6
        yield "
";
        // line 7
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "conditions", [], "any", false, false, false, 7))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "<nav class=\"pillar-nav\" aria-label=\"On this page\">
  <div class=\"container\"><ul>
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "conditions", [], "any", false, false, false, 10));
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
                yield "<li><a href=\"#c-";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 10), "html", null, true);
                yield "</a></li>";
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
            // line 11
            yield "  </ul></div>
</nav>
";
        }
        // line 14
        yield "
";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Know the signs</p>
      <h2>";
            // line 20
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</h2>
      <div class=\"prose\">";
            // line 21
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 21), "text", [], "any", false, false, false, 21));
            yield "</div>
    </div>
    <div class=\"split__media\">
      <div class=\"media-stack media-stack--";
            // line 24
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 24), "images", [], "any", false, false, false, 24)), "html", null, true);
            yield "\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 25), "images", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
                yield "<div class=\"media-frame\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["im"], "image", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "signs", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25)], $context, 25, $this->source);
                yield "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['im'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 26
            yield "      </div>
    </div>
  </div>
</section>
";
        }
        // line 31
        yield "
";
        // line 32
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "<section class=\"banner\">
  <div class=\"container banner__inner\">
    <div>
      <h2>";
            // line 36
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            yield "</h2>
      <p>";
            // line 37
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 37), "text", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
    </div>
    <a class=\"btn btn-accent btn-lg\" href=\"";
            // line 39
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 39), "button_label", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 39), "button_label", [], "any", false, false, false, 39), "html", null, true)) : ("Book an Appointment"));
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(39))->call("icon", ["arrow-right"], $context, 39, $this->source);
            yield "</a>
  </div>
</section>
";
        }
        // line 43
        yield "
";
        // line 44
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "causes", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "<section class=\"section section--mint\">
  <div class=\"container\">
    ";
            // line 47
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(47))->call("head", ["Understanding the condition", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "causes", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "causes", [], "any", false, false, false, 47), "intro", [], "any", false, false, false, 47)], $context, 47, $this->source);
            yield "
    <div class=\"card-grid card-grid--3\">
      ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "causes", [], "any", false, false, false, 49), "items", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 50
                yield "      <div class=\"value-card\"><span class=\"icon-badge\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(50))->call("icon", ["clipboard"], $context, 50, $this->source);
                yield "</span><h3>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 50), "html", null, true);
                yield "</h3><p>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "text", [], "any", false, false, false, 50), "html", null, true);
                yield "</p></div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 52
            yield "    </div>
  </div>
</section>
";
        }
        // line 56
        yield "
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "conditions", [], "any", false, false, false, 57));
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
            // line 58
            yield "<section class=\"section condition";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58) % 2 == 0)) ? (" section--cream") : (""));
            yield "\" id=\"c-";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            yield "\">
  <div class=\"container split";
            // line 59
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59) % 2 == 0)) ? (" split--reverse") : (""));
            yield "\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Our care</p>
      <h2>";
            // line 62
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 62), "html", null, true);
            yield "</h2>
      <div class=\"prose\">";
            // line 63
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "text", [], "any", false, false, false, 63));
            yield "</div>
      <p><a class=\"link-arrow\" href=\"";
            // line 64
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">Book a consultation ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(64))->call("icon", ["arrow-right"], $context, 64, $this->source);
            yield "</a></p>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">";
            // line 66
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(66))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 66), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 66)], $context, 66, $this->source);
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
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 70
        yield "
";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "risks", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "<section class=\"section section--mint\">
  <div class=\"container\">
    ";
            // line 74
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(74))->call("head", ["Know your risk", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "risks", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "risks", [], "any", false, false, false, 74), "intro", [], "any", false, false, false, 74)], $context, 74, $this->source);
            yield "
    <div class=\"card-grid card-grid--2\">
      ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "risks", [], "any", false, false, false, 76), "items", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 77
                yield "      <article class=\"risk-card\">
        <h3>";
                // line 78
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 78), "html", null, true);
                yield "</h3>
        <p>";
                // line 79
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "text", [], "any", false, false, false, 79), "html", null, true);
                yield "</p>
        ";
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "why", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<div class=\"why-box\"><strong>Why GODC?</strong><p>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "why", [], "any", false, false, false, 80), "html", null, true);
                    yield "</p></div>";
                }
                // line 81
                yield "        <a class=\"btn btn-outline btn-sm\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
                yield "\">Book a Consultation</a>
      </article>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 84
            yield "    </div>
  </div>
</section>
";
        }
        // line 88
        yield "
";
        // line 89
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "when", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 90
            yield "<section class=\"section\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">";
            // line 92
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(92))->call("icon", ["stethoscope"], $context, 92, $this->source);
            yield "</span>
    <h2>";
            // line 93
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "when", [], "any", false, false, false, 93), "title", [], "any", false, false, false, 93), "html", null, true);
            yield "</h2>
    <div class=\"prose\">";
            // line 94
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "when", [], "any", false, false, false, 94), "text", [], "any", false, false, false, 94));
            yield "</div>
    <p><a class=\"btn btn-primary btn-lg\" href=\"";
            // line 95
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "when", [], "any", false, false, false, 95), "button_label", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "when", [], "any", false, false, false, 95), "button_label", [], "any", false, false, false, 95), "html", null, true)) : ("Book an Appointment"));
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(95))->call("icon", ["arrow-right"], $context, 95, $this->source);
            yield "</a></p>
  </div>
</section>
";
        }
        // line 99
        yield "
";
        // line 100
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "diagnosis", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "<section class=\"section section--cream\">
  <div class=\"container\">
    ";
            // line 103
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(103))->call("head", ["Diagnosis & care", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "diagnosis", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "diagnosis", [], "any", false, false, false, 103), "intro", [], "any", false, false, false, 103)], $context, 103, $this->source);
            yield "
    <div class=\"card-grid card-grid--3\">
      ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "diagnosis", [], "any", false, false, false, 105), "columns", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 106
                yield "      <div class=\"dx-card\">
        <h3>";
                // line 107
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "title", [], "any", false, false, false, 107), "html", null, true);
                yield "</h3>
        ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["col"], "intro", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "intro", [], "any", false, false, false, 108), "html", null, true);
                    yield "</p>";
                }
                // line 109
                yield "        ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(109))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "items", [], "any", false, false, false, 109))], $context, 109, $this->source);
                yield "
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 112
            yield "    </div>
  </div>
</section>
";
        }
        // line 116
        yield "
";
        // line 117
        $context["siblings"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 117), "children", [], "any", false, false, false, 117), "published", [], "any", false, false, false, 117), "nth", [0], "method", false, false, false, 117);
        // line 118
        yield "<section class=\"section\">
  <div class=\"container\">
    ";
        // line 120
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(120))->call("head", ["Explore more", "Related services"], $context, 120, $this->source);
        yield "
    <div class=\"card-grid card-grid--3\">
      ";
        // line 122
        $context["shown"] = 0;
        // line 123
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 123), "children", [], "any", false, false, false, 123), "published", [], "any", false, false, false, 123), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return ((($this->sandbox->ensureToStringAllowed(($context["s"] ?? null), 123, $this->source) != $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 123, $this->source)) && ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["s"] ?? null), "header", [], "any", false, false, true, 123), "nav_group", [], "any", false, false, true, 123), 123, $this->source) == "Clinical Nutrition Services")) && ($this->sandbox->ensureToStringAllowed(($context["shown"] ?? null), 123, $this->source) < 3)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 124
            yield "        ";
            $context["shown"] = (($context["shown"] ?? null) + 1);
            // line 125
            yield "        ";
            yield from $this->load("partials/page-card.html.twig", 125)->unwrap()->yield(CoreExtension::merge($context, ["card" => $context["s"]]));
            // line 126
            yield "      ";
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
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 127
        yield "    </div>
  </div>
</section>

";
        // line 131
        yield from $this->load("partials/cta-band.html.twig", 131)->unwrap()->yield(CoreExtension::merge($context, ["cta" => ["eyebrow" => "Take the next step", "title" => "Start your journey toward better health", "text" => "Speak with our nutrition specialists about a personalised plan for your condition.", "button_label" => "Book an Appointment"]]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "condition.html.twig";
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
        return array (  492 => 131,  486 => 127,  471 => 126,  468 => 125,  465 => 124,  447 => 123,  445 => 122,  440 => 120,  436 => 118,  434 => 117,  431 => 116,  425 => 112,  414 => 109,  408 => 108,  404 => 107,  401 => 106,  397 => 105,  392 => 103,  388 => 101,  386 => 100,  383 => 99,  372 => 95,  368 => 94,  364 => 93,  360 => 92,  356 => 90,  354 => 89,  351 => 88,  345 => 84,  334 => 81,  328 => 80,  324 => 79,  320 => 78,  317 => 77,  313 => 76,  308 => 74,  304 => 72,  302 => 71,  299 => 70,  280 => 66,  273 => 64,  269 => 63,  265 => 62,  259 => 59,  252 => 58,  235 => 57,  232 => 56,  226 => 52,  212 => 50,  208 => 49,  203 => 47,  199 => 45,  197 => 44,  194 => 43,  183 => 39,  178 => 37,  174 => 36,  169 => 33,  167 => 32,  164 => 31,  157 => 26,  145 => 25,  141 => 24,  135 => 21,  131 => 20,  125 => 16,  123 => 15,  120 => 14,  115 => 11,  80 => 10,  76 => 8,  74 => 7,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% include \x27partials/page-hero.html.twig\x27 with {\x27eyebrow\x27: \x27Our Services\x27, \x27title\x27: h.hero.title, \x27lead\x27: h.hero.intro, \x27hero_form\x27: \x27quick-booking\x27, \x27hero_form_title\x27: \x27Book an Appointment\x27} %}

{% if h.conditions|length %}
<nav class=\"pillar-nav\" aria-label=\"On this page\">
  <div class=\"container\"><ul>
    {% for c in h.conditions %}<li><a href=\"#c-{{ loop.index }}\">{{ c.title }}</a></li>{% endfor %}
  </ul></div>
</nav>
{% endif %}

{% if h.signs %}
<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Know the signs</p>
      <h2>{{ h.signs.title }}</h2>
      <div class=\"prose\">{{ h.signs.text|markdown }}</div>
    </div>
    <div class=\"split__media\">
      <div class=\"media-stack media-stack--{{ h.signs.images|length }}\">
        {% for im in h.signs.images %}<div class=\"media-frame\">{{ ui.img(page, im.image, h.signs.title) }}</div>{% endfor %}
      </div>
    </div>
  </div>
</section>
{% endif %}

{% if h.cta %}
<section class=\"banner\">
  <div class=\"container banner__inner\">
    <div>
      <h2>{{ h.cta.title }}</h2>
      <p>{{ h.cta.text }}</p>
    </div>
    <a class=\"btn btn-accent btn-lg\" href=\"{{ \x27/book-a-consultation\x27|href }}\">{{ h.cta.button_label ?: \x27Book an Appointment\x27 }} {{ ui.icon(\x27arrow-right\x27) }}</a>
  </div>
</section>
{% endif %}

{% if h.causes %}
<section class=\"section section--mint\">
  <div class=\"container\">
    {{ ui.head(\x27Understanding the condition\x27, h.causes.title, h.causes.intro) }}
    <div class=\"card-grid card-grid--3\">
      {% for c in h.causes.items %}
      <div class=\"value-card\"><span class=\"icon-badge\">{{ ui.icon(\x27clipboard\x27) }}</span><h3>{{ c.title }}</h3><p>{{ c.text }}</p></div>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% for c in h.conditions %}
<section class=\"section condition{{ loop.index is even ? \x27 section--cream\x27 : \x27\x27 }}\" id=\"c-{{ loop.index }}\">
  <div class=\"container split{{ loop.index is even ? \x27 split--reverse\x27 : \x27\x27 }}\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Our care</p>
      <h2>{{ c.title }}</h2>
      <div class=\"prose\">{{ c.text|markdown }}</div>
      <p><a class=\"link-arrow\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book a consultation {{ ui.icon(\x27arrow-right\x27) }}</a></p>
    </div>
    <div class=\"split__media\"><div class=\"media-frame\">{{ ui.img(page, c.image, c.title) }}</div></div>
  </div>
</section>
{% endfor %}

{% if h.risks %}
<section class=\"section section--mint\">
  <div class=\"container\">
    {{ ui.head(\x27Know your risk\x27, h.risks.title, h.risks.intro) }}
    <div class=\"card-grid card-grid--2\">
      {% for r in h.risks.items %}
      <article class=\"risk-card\">
        <h3>{{ r.title }}</h3>
        <p>{{ r.text }}</p>
        {% if r.why %}<div class=\"why-box\"><strong>Why GODC?</strong><p>{{ r.why }}</p></div>{% endif %}
        <a class=\"btn btn-outline btn-sm\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book a Consultation</a>
      </article>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% if h.when %}
<section class=\"section\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">{{ ui.icon(\x27stethoscope\x27) }}</span>
    <h2>{{ h.when.title }}</h2>
    <div class=\"prose\">{{ h.when.text|markdown }}</div>
    <p><a class=\"btn btn-primary btn-lg\" href=\"{{ \x27/book-a-consultation\x27|href }}\">{{ h.when.button_label ?: \x27Book an Appointment\x27 }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>
  </div>
</section>
{% endif %}

{% if h.diagnosis %}
<section class=\"section section--cream\">
  <div class=\"container\">
    {{ ui.head(\x27Diagnosis & care\x27, h.diagnosis.title, h.diagnosis.intro) }}
    <div class=\"card-grid card-grid--3\">
      {% for col in h.diagnosis.columns %}
      <div class=\"dx-card\">
        <h3>{{ col.title }}</h3>
        {% if col.intro %}<p>{{ col.intro }}</p>{% endif %}
        {{ ui.checklist(col.items|lines) }}
      </div>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% set siblings = page.parent.children.published.nth(0) %}
<section class=\"section\">
  <div class=\"container\">
    {{ ui.head(\x27Explore more\x27, \x27Related services\x27) }}
    <div class=\"card-grid card-grid--3\">
      {% set shown = 0 %}
      {% for s in (page.parent.children.published)|filter(s => s != page and s.header.nav_group == \x27Clinical Nutrition Services\x27 and shown < 3) %}
        {% set shown = shown + 1 %}
        {% include \x27partials/page-card.html.twig\x27 with {\x27card\x27: s} %}
      {% endfor %}
    </div>
  </div>
</section>

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: {\x27eyebrow\x27: \x27Take the next step\x27, \x27title\x27: \x27Start your journey toward better health\x27, \x27text\x27: \x27Speak with our nutrition specialists about a personalised plan for your condition.\x27, \x27button_label\x27: \x27Book an Appointment\x27}} %}
{% endblock %}
", "condition.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/condition.html.twig");
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
