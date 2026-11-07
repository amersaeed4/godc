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

/* doctor.html.twig */
class __TwigTemplate_6f23b863e6d76b2d46a447ada51dbcf8_sourced extends Template
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
        $context["pr"] = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "profile", [], "any", false, false, false, 5);
        // line 6
        yield "<section class=\"page-hero page-hero--profile\">
  <div class=\"container page-hero__inner\">
    <div class=\"page-hero__copy\">
      ";
        // line 9
        yield from $this->load("partials/breadcrumbs.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "      <p class=\"eyebrow eyebrow--light\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "tagline", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
      <h1>";
        // line 11
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "</h1>
      <p class=\"page-hero__role\">";
        // line 12
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "role", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
      ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "bio", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"page-hero__lead\"><p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "bio", [], "any", false, false, false, 13), "html", null, true);
            yield "</p></div>";
        }
        // line 14
        yield "      <div class=\"btn-row\">
        <a class=\"btn btn-accent\" href=\"";
        // line 15
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 15), "button_link", [], "any", false, false, false, 15)), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 15), "button_label", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["arrow-right"], $context, 15, $this->source);
        yield "</a>
        ";
        // line 16
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "specialisations", [], "any", false, false, false, 16), "items", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-ghost\" href=\"#specialisations\">Specialisations</a>";
        }
        // line 17
        yield "      </div>
    </div>
    <div class=\"page-hero__portrait\">";
        // line 19
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "image", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 19), "", true], $context, 19, $this->source);
        yield "</div>
  </div>
</section>

";
        // line 23
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 23))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "<section class=\"proof-strip\">
  <div class=\"container\">
    <ul class=\"proof-strip__grid\">
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                yield "<li><span class=\"proof-strip__value\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "value", [], "any", false, false, false, 27), "html", null, true);
                yield "</span><span class=\"proof-strip__label\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "label", [], "any", false, false, false, 27), "html", null, true);
                yield "</span></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 28
            yield "    </ul>
  </div>
</section>
";
        }
        // line 32
        yield "
";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "quote", [], "any", false, false, false, 33), "text", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "<section class=\"section section--cream\">
  <div class=\"container container--narrow\">
    <blockquote class=\"pull-quote\">
      <span class=\"pull-quote__mark\">";
            // line 37
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(37))->call("icon", ["quote"], $context, 37, $this->source);
            yield "</span>
      <p>";
            // line 38
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "quote", [], "any", false, false, false, 38), "text", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
      ";
            // line 39
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "quote", [], "any", false, false, false, 39), "author", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<footer>— ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "quote", [], "any", false, false, false, 39), "author", [], "any", false, false, false, 39), "html", null, true);
                yield "</footer>";
            }
            // line 40
            yield "    </blockquote>
  </div>
</section>
";
        }
        // line 44
        yield "
";
        // line 45
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "specialisations", [], "any", false, false, false, 45), "items", [], "any", false, false, false, 45))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "<section class=\"section\" id=\"specialisations\">
  <div class=\"container\">
    ";
            // line 48
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(48))->call("head", ["Services", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "specialisations", [], "any", false, false, false, 48), "title", [], "any", false, false, false, 48), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "specialisations", [], "any", false, false, false, 48), "text", [], "any", false, false, false, 48)], $context, 48, $this->source);
            yield "
    <div class=\"card-grid card-grid--3\">
      ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "specialisations", [], "any", false, false, false, 50), "items", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 51
                yield "      <a class=\"page-card\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "link", [], "any", false, false, false, 51)), "html", null, true);
                yield "\">
        <span class=\"page-card__media\">";
                // line 52
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(52))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["it"], "image", [], "any", false, false, false, 52), CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 52)], $context, 52, $this->source);
                yield "</span>
        <span class=\"page-card__body\">
          <span class=\"page-card__title\">";
                // line 54
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 54), "html", null, true);
                yield "</span>
          <span class=\"page-card__text\">";
                // line 55
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "text", [], "any", false, false, false, 55), "html", null, true);
                yield "</span>
          <span class=\"page-card__more\">See more ";
                // line 56
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(56))->call("icon", ["arrow-right"], $context, 56, $this->source);
                yield "</span>
        </span>
      </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 60
            yield "    </div>
  </div>
</section>
";
        }
        // line 64
        yield "
";
        // line 65
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "why", [], "any", false, false, false, 65), "items", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "<section class=\"section section--mint\">
  <div class=\"container container--narrow\">
    ";
            // line 68
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(68))->call("head", ["Why choose", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "why", [], "any", false, false, false, 68), "title", [], "any", false, false, false, 68)], $context, 68, $this->source);
            yield "
    ";
            // line 69
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(69))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "why", [], "any", false, false, false, 69), "items", [], "any", false, false, false, 69)), "checklist--cards"], $context, 69, $this->source);
            yield "
  </div>
</section>
";
        }
        // line 73
        yield "
";
        // line 74
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 74), "items", [], "any", false, false, false, 74))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "<section class=\"section\">
  <div class=\"container\">
    ";
            // line 77
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(77))->call("head", ["Credentials", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 77), "title", [], "any", false, false, false, 77)], $context, 77, $this->source);
            yield "
    <div class=\"edu-grid\">
      ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 79), "items", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 80
                yield "      <div class=\"edu-card\">
        <div class=\"edu-card__logo\">";
                // line 81
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(81))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["e"], "logo", [], "any", false, false, false, 81), CoreExtension::getAttribute($this->env, $this->source, $context["e"], "institution", [], "any", false, false, false, 81)], $context, 81, $this->source);
                yield "</div>
        <h3>";
                // line 82
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "degree", [], "any", false, false, false, 82), "html", null, true);
                yield "</h3>
        <p>";
                // line 83
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "institution", [], "any", false, false, false, 83), "html", null, true);
                yield "</p>
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 86
            yield "    </div>
  </div>
</section>
";
        }
        // line 90
        yield "
";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "intro", [], "any", false, false, false, 91), "text", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "<section class=\"section";
            yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 92), "items", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" section--mint") : (""));
            yield "\">
  <div class=\"container split split--top\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">About</p>
      <h2>";
            // line 96
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "intro", [], "any", false, false, false, 96), "title", [], "any", false, false, false, 96), "html", null, true);
            yield "</h2>
      <div class=\"prose\">";
            // line 97
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "intro", [], "any", false, false, false, 97), "text", [], "any", false, false, false, 97));
            yield "</div>
    </div>
    <div class=\"split__aside\">
      ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "intro", [], "any", false, false, false, 100), "points", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["pt"]) {
                // line 101
                yield "      <div class=\"point-card\"><span class=\"icon-badge\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(101))->call("icon", ["check"], $context, 101, $this->source);
                yield "</span><div><h3>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pt"], "title", [], "any", false, false, false, 101), "html", null, true);
                yield "</h3><p>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pt"], "text", [], "any", false, false, false, 101), "html", null, true);
                yield "</p></div></div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['pt'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 103
            yield "    </div>
  </div>
</section>
";
        }
        // line 107
        yield "
";
        // line 108
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "services", [], "any", false, false, false, 108), "items", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "<section class=\"section\">
  <div class=\"container split split--top\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Areas of care</p>
      <h2>";
            // line 113
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "services", [], "any", false, false, false, 113), "title", [], "any", false, false, false, 113), "html", null, true);
            yield "</h2>
      <div class=\"prose\">";
            // line 114
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "services", [], "any", false, false, false, 114), "text", [], "any", false, false, false, 114));
            yield "</div>
    </div>
    <div class=\"split__aside\">";
            // line 116
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(116))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "services", [], "any", false, false, false, 116), "items", [], "any", false, false, false, 116)), "checklist--cards"], $context, 116, $this->source);
            yield "</div>
  </div>
</section>
";
        }
        // line 120
        yield "
";
        // line 121
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "commitment", [], "any", false, false, false, 121), "text", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 122
            yield "<section class=\"section section--cream\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">";
            // line 124
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(124))->call("icon", ["heart-pulse"], $context, 124, $this->source);
            yield "</span>
    <h2>";
            // line 125
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "commitment", [], "any", false, false, false, 125), "title", [], "any", false, false, false, 125), "html", null, true);
            yield "</h2>
    <div class=\"prose\">";
            // line 126
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "commitment", [], "any", false, false, false, 126), "text", [], "any", false, false, false, 126));
            yield "</div>
  </div>
</section>
";
        }
        // line 130
        yield "
";
        // line 131
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "experience", [], "any", false, false, false, 131), "rows", [], "any", false, false, false, 131))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "<section class=\"section section--cream\">
  <div class=\"container\">
    ";
            // line 134
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(134))->call("head", ["Career", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "experience", [], "any", false, false, false, 134), "title", [], "any", false, false, false, 134), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "experience", [], "any", false, false, false, 134), "text", [], "any", false, false, false, 134)], $context, 134, $this->source);
            yield "
    <div class=\"table-wrap\">
      <table class=\"data-table\">
        <thead><tr><th scope=\"col\">Year</th><th scope=\"col\">Department</th><th scope=\"col\">Position</th><th scope=\"col\">Hospital</th></tr></thead>
        <tbody>
          ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "experience", [], "any", false, false, false, 139), "rows", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 140
                yield "          <tr><td data-label=\"Year\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "years", [], "any", false, false, false, 140), "html", null, true);
                yield "</td><td data-label=\"Department\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "department", [], "any", false, false, false, 140), "html", null, true);
                yield "</td><td data-label=\"Position\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "position", [], "any", false, false, false, 140), "html", null, true);
                yield "</td><td data-label=\"Hospital\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "hospital", [], "any", false, false, false, 140), "html", null, true);
                yield "</td></tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 142
            yield "        </tbody>
      </table>
    </div>
  </div>
</section>
";
        }
        // line 148
        yield "
";
        // line 149
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 149), "address", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 150
            yield "<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__media\"><div class=\"media-frame\">";
            // line 152
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(152))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 152), "image", [], "any", false, false, false, 152), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 152), "title", [], "any", false, false, false, 152)], $context, 152, $this->source);
            yield "</div></div>
    <div class=\"split__copy\">
      <p class=\"eyebrow\">";
            // line 154
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 154), "eyebrow", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 154), "eyebrow", [], "any", false, false, false, 154), "html", null, true)) : ("Our clinic"));
            yield "</p>
      <h2>";
            // line 155
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 155), "title", [], "any", false, false, false, 155), "html", null, true);
            yield "</h2>
      <ul class=\"contact-list contact-list--dark\">
        <li>";
            // line 157
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(157))->call("icon", ["map-pin"], $context, 157, $this->source);
            yield "<span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 157), "address", [], "any", false, false, false, 157), "html", null, true);
            yield "</span></li>
        ";
            // line 158
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 158), "hours", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(158))->call("icon", ["clock"], $context, 158, $this->source);
                yield "<span>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 158), "hours", [], "any", false, false, false, 158), "html", null, true);
                yield "</span></li>";
            }
            // line 159
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 159), "phone", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(159))->call("icon", ["phone"], $context, 159, $this->source);
                yield "<a href=\"tel:";
                yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 159), "phone", [], "any", false, false, false, 159)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 159), "phone", [], "any", false, false, false, 159), "html", null, true);
                yield "</a></li>";
            }
            // line 160
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 160), "email", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(160))->call("icon", ["mail"], $context, 160, $this->source);
                yield "<a href=\"mailto:";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 160), "email", [], "any", false, false, false, 160), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 160), "email", [], "any", false, false, false, 160), "html", null, true);
                yield "</a></li>";
            }
            // line 161
            yield "      </ul>
      <div class=\"btn-row\">
        <a class=\"btn btn-primary\" href=\"";
            // line 163
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
            yield "\">Book an Appointment</a>
        ";
            // line 164
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 164), "map_link", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<a class=\"btn btn-outline\" href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "clinic", [], "any", false, false, false, 164), "map_link", [], "any", false, false, false, 164), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">Get directions ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(164))->call("icon", ["external"], $context, 164, $this->source);
                yield "</a>";
            }
            // line 165
            yield "      </div>
    </div>
  </div>
</section>
";
        }
        // line 170
        yield "
";
        // line 171
        yield from $this->load("partials/cta-band.html.twig", 171)->unwrap()->yield(CoreExtension::merge($context, ["cta" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 171)]));
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "doctor.html.twig";
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
        return array (  526 => 171,  523 => 170,  516 => 165,  508 => 164,  504 => 163,  500 => 161,  489 => 160,  478 => 159,  470 => 158,  464 => 157,  459 => 155,  455 => 154,  450 => 152,  446 => 150,  444 => 149,  441 => 148,  433 => 142,  417 => 140,  413 => 139,  405 => 134,  401 => 132,  399 => 131,  396 => 130,  389 => 126,  385 => 125,  381 => 124,  377 => 122,  375 => 121,  372 => 120,  365 => 116,  360 => 114,  356 => 113,  350 => 109,  348 => 108,  345 => 107,  339 => 103,  325 => 101,  321 => 100,  315 => 97,  311 => 96,  303 => 92,  301 => 91,  298 => 90,  292 => 86,  282 => 83,  278 => 82,  274 => 81,  271 => 80,  267 => 79,  262 => 77,  258 => 75,  256 => 74,  253 => 73,  246 => 69,  242 => 68,  238 => 66,  236 => 65,  233 => 64,  227 => 60,  216 => 56,  212 => 55,  208 => 54,  203 => 52,  198 => 51,  194 => 50,  189 => 48,  185 => 46,  183 => 45,  180 => 44,  174 => 40,  168 => 39,  164 => 38,  160 => 37,  155 => 34,  153 => 33,  150 => 32,  144 => 28,  130 => 27,  125 => 24,  123 => 23,  116 => 19,  112 => 17,  108 => 16,  100 => 15,  97 => 14,  91 => 13,  87 => 12,  83 => 11,  78 => 10,  76 => 9,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% set pr = h.profile %}
<section class=\"page-hero page-hero--profile\">
  <div class=\"container page-hero__inner\">
    <div class=\"page-hero__copy\">
      {% include \x27partials/breadcrumbs.html.twig\x27 %}
      <p class=\"eyebrow eyebrow--light\">{{ pr.tagline }}</p>
      <h1>{{ pr.name }}</h1>
      <p class=\"page-hero__role\">{{ pr.role }}</p>
      {% if pr.bio %}<div class=\"page-hero__lead\"><p>{{ pr.bio }}</p></div>{% endif %}
      <div class=\"btn-row\">
        <a class=\"btn btn-accent\" href=\"{{ h.cta.button_link|href }}\">{{ h.cta.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a>
        {% if h.specialisations.items|length %}<a class=\"btn btn-ghost\" href=\"#specialisations\">Specialisations</a>{% endif %}
      </div>
    </div>
    <div class=\"page-hero__portrait\">{{ ui.img(page, pr.image, pr.name, \x27\x27, true) }}</div>
  </div>
</section>

{% if h.stats|length %}
<section class=\"proof-strip\">
  <div class=\"container\">
    <ul class=\"proof-strip__grid\">
      {% for s in h.stats %}<li><span class=\"proof-strip__value\">{{ s.value }}</span><span class=\"proof-strip__label\">{{ s.label }}</span></li>{% endfor %}
    </ul>
  </div>
</section>
{% endif %}

{% if h.quote.text %}
<section class=\"section section--cream\">
  <div class=\"container container--narrow\">
    <blockquote class=\"pull-quote\">
      <span class=\"pull-quote__mark\">{{ ui.icon(\x27quote\x27) }}</span>
      <p>{{ h.quote.text }}</p>
      {% if h.quote.author %}<footer>— {{ h.quote.author }}</footer>{% endif %}
    </blockquote>
  </div>
</section>
{% endif %}

{% if h.specialisations.items|length %}
<section class=\"section\" id=\"specialisations\">
  <div class=\"container\">
    {{ ui.head(\x27Services\x27, h.specialisations.title, h.specialisations.text) }}
    <div class=\"card-grid card-grid--3\">
      {% for it in h.specialisations.items %}
      <a class=\"page-card\" href=\"{{ it.link|href }}\">
        <span class=\"page-card__media\">{{ ui.img(page, it.image, it.title) }}</span>
        <span class=\"page-card__body\">
          <span class=\"page-card__title\">{{ it.title }}</span>
          <span class=\"page-card__text\">{{ it.text }}</span>
          <span class=\"page-card__more\">See more {{ ui.icon(\x27arrow-right\x27) }}</span>
        </span>
      </a>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% if h.why.items %}
<section class=\"section section--mint\">
  <div class=\"container container--narrow\">
    {{ ui.head(\x27Why choose\x27, h.why.title) }}
    {{ ui.checklist(h.why.items|lines, \x27checklist--cards\x27) }}
  </div>
</section>
{% endif %}

{% if h.education.items|length %}
<section class=\"section\">
  <div class=\"container\">
    {{ ui.head(\x27Credentials\x27, h.education.title) }}
    <div class=\"edu-grid\">
      {% for e in h.education.items %}
      <div class=\"edu-card\">
        <div class=\"edu-card__logo\">{{ ui.img(page, e.logo, e.institution) }}</div>
        <h3>{{ e.degree }}</h3>
        <p>{{ e.institution }}</p>
      </div>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% if h.intro.text %}
<section class=\"section{{ h.education.items|length ? \x27 section--mint\x27 : \x27\x27 }}\">
  <div class=\"container split split--top\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">About</p>
      <h2>{{ h.intro.title }}</h2>
      <div class=\"prose\">{{ h.intro.text|markdown }}</div>
    </div>
    <div class=\"split__aside\">
      {% for pt in h.intro.points %}
      <div class=\"point-card\"><span class=\"icon-badge\">{{ ui.icon(\x27check\x27) }}</span><div><h3>{{ pt.title }}</h3><p>{{ pt.text }}</p></div></div>
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% if h.services.items %}
<section class=\"section\">
  <div class=\"container split split--top\">
    <div class=\"split__copy\">
      <p class=\"eyebrow\">Areas of care</p>
      <h2>{{ h.services.title }}</h2>
      <div class=\"prose\">{{ h.services.text|markdown }}</div>
    </div>
    <div class=\"split__aside\">{{ ui.checklist(h.services.items|lines, \x27checklist--cards\x27) }}</div>
  </div>
</section>
{% endif %}

{% if h.commitment.text %}
<section class=\"section section--cream\">
  <div class=\"container container--narrow center\">
    <span class=\"icon-badge icon-badge--lg\">{{ ui.icon(\x27heart-pulse\x27) }}</span>
    <h2>{{ h.commitment.title }}</h2>
    <div class=\"prose\">{{ h.commitment.text|markdown }}</div>
  </div>
</section>
{% endif %}

{% if h.experience.rows|length %}
<section class=\"section section--cream\">
  <div class=\"container\">
    {{ ui.head(\x27Career\x27, h.experience.title, h.experience.text) }}
    <div class=\"table-wrap\">
      <table class=\"data-table\">
        <thead><tr><th scope=\"col\">Year</th><th scope=\"col\">Department</th><th scope=\"col\">Position</th><th scope=\"col\">Hospital</th></tr></thead>
        <tbody>
          {% for r in h.experience.rows %}
          <tr><td data-label=\"Year\">{{ r.years }}</td><td data-label=\"Department\">{{ r.department }}</td><td data-label=\"Position\">{{ r.position }}</td><td data-label=\"Hospital\">{{ r.hospital }}</td></tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
</section>
{% endif %}

{% if h.clinic.address %}
<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__media\"><div class=\"media-frame\">{{ ui.img(page, h.clinic.image, h.clinic.title) }}</div></div>
    <div class=\"split__copy\">
      <p class=\"eyebrow\">{{ h.clinic.eyebrow ?: \x27Our clinic\x27 }}</p>
      <h2>{{ h.clinic.title }}</h2>
      <ul class=\"contact-list contact-list--dark\">
        <li>{{ ui.icon(\x27map-pin\x27) }}<span>{{ h.clinic.address }}</span></li>
        {% if h.clinic.hours %}<li>{{ ui.icon(\x27clock\x27) }}<span>{{ h.clinic.hours }}</span></li>{% endif %}
        {% if h.clinic.phone %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ h.clinic.phone|tel }}\">{{ h.clinic.phone }}</a></li>{% endif %}
        {% if h.clinic.email %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ h.clinic.email }}\">{{ h.clinic.email }}</a></li>{% endif %}
      </ul>
      <div class=\"btn-row\">
        <a class=\"btn btn-primary\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book an Appointment</a>
        {% if h.clinic.map_link %}<a class=\"btn btn-outline\" href=\"{{ h.clinic.map_link }}\" target=\"_blank\" rel=\"noopener\">Get directions {{ ui.icon(\x27external\x27) }}</a>{% endif %}
      </div>
    </div>
  </div>
</section>
{% endif %}

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta} %}
{% endblock %}
", "doctor.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/doctor.html.twig");
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
