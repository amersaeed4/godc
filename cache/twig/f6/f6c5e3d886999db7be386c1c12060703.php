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

/* home.html.twig */
class __TwigTemplate_e3dad6428c446e9a3829f8f77febae03_sourced extends Template
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
        $context["hero"] = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "hero", [], "any", false, false, false, 5);
        // line 6
        $context["first_stat"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 6), "items", [], "any", false, false, false, 6));
        // line 7
        yield "<section class=\"hero\">
  ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "video_url", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<video class=\"hero__video\" src=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "video_url", [], "any", false, false, false, 8), "html", null, true);
            yield "\" autoplay muted loop playsinline aria-hidden=\"true\"></video>";
        }
        // line 9
        yield "  <div class=\"container hero__inner\">
    <div class=\"hero__copy\">
      ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow eyebrow--light\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "eyebrow", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>";
        }
        // line 12
        yield "      <h1>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</h1>
      <p class=\"hero__lead\">";
        // line 13
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "text", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
      <div class=\"hero__text\">";
        // line 14
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "text2", [], "any", false, false, false, 14));
        yield "</div>
      <div class=\"btn-row\">
        ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "primary_label", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-accent btn-lg\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "primary_link", [], "any", false, false, false, 16)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "primary_label", [], "any", false, false, false, 16), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(16))->call("icon", ["arrow-right"], $context, 16, $this->source);
            yield "</a>";
        }
        // line 17
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "secondary_label", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a class=\"btn btn-ghost btn-lg\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "secondary_link", [], "any", false, false, false, 17)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "secondary_label", [], "any", false, false, false, 17), "html", null, true);
            yield "</a>";
        }
        // line 18
        yield "      </div>
    </div>
    <div class=\"hero__media\">
      <div class=\"hero__photo\">
        <div class=\"hero__frame\">";
        // line 22
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "image", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, ($context["hero"] ?? null), "title", [], "any", false, false, false, 22), "", true], $context, 22, $this->source);
        yield "</div>
        ";
        // line 23
        if ((($tmp = ($context["first_stat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "        <div class=\"hero__badge\">
          <span class=\"hero__badge-value\">";
            // line 25
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["first_stat"] ?? null), "value", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
          <span class=\"hero__badge-label\">";
            // line 26
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["first_stat"] ?? null), "label", [], "any", false, false, false, 26), "html", null, true);
            yield "</span>
        </div>
        ";
        }
        // line 29
        yield "      </div>
      ";
        // line 30
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 30), "items", [], "any", false, false, false, 30))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "      <div class=\"hero__team\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 32), "items", [], "any", false, false, false, 32));
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
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 33
                yield "          ";
                $context["dp"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [CoreExtension::getAttribute($this->env, $this->source, $context["it"], "page", [], "any", false, false, false, 33)], "method", false, false, false, 33);
                // line 34
                yield "          ";
                if ((($tmp = ($context["dp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 35
                    yield "          <a class=\"hero__doc";
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hero__doc--lead") : (""));
                    yield "\" href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "url", [], "any", false, false, false, 35), "html", null, true);
                    yield "\">
            <span class=\"hero__doc-photo\">";
                    // line 36
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(36))->call("img", [($context["dp"] ?? null), (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 36), "profile", [], "any", false, false, false, 36), "card_image", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 36), "profile", [], "any", false, false, false, 36), "card_image", [], "any", false, false, false, 36)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 36), "profile", [], "any", false, false, false, 36), "image", [], "any", false, false, false, 36))), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 36), "profile", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36)], $context, 36, $this->source);
                    yield "</span>
            <span class=\"hero__doc-info\">
              <span class=\"hero__doc-tag\">";
                    // line 38
                    yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Lead surgeon") : ("Clinical nutrition"));
                    yield "</span>
              <strong>";
                    // line 39
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 39), "profile", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
                    yield "</strong>
              <small>";
                    // line 40
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 40), "profile", [], "any", false, false, false, 40), "role", [], "any", false, false, false, 40), "html", null, true);
                    yield "</small>
              <span class=\"hero__doc-more\">View profile ";
                    // line 41
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(41))->call("icon", ["arrow-right"], $context, 41, $this->source);
                    yield "</span>
            </span>
          </a>
          ";
                }
                // line 45
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 46
            yield "      </div>
      ";
        }
        // line 48
        yield "    </div>
  </div>
</section>

";
        // line 52
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "highlights", [], "any", false, false, false, 52))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "<section class=\"highlights\">
  <div class=\"container\">
    <ul class=\"highlights__grid\">
      ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "highlights", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 57
                yield "      <li class=\"highlight\">
        <span class=\"icon-badge\">";
                // line 58
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(58))->call("icon", [CoreExtension::getAttribute($this->env, $this->source, $context["it"], "icon", [], "any", false, false, false, 58)], $context, 58, $this->source);
                yield "</span>
        <h3>";
                // line 59
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 59), "html", null, true);
                yield "</h3>
        <p>";
                // line 60
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "text", [], "any", false, false, false, 60), "html", null, true);
                yield "</p>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 63
            yield "    </ul>
  </div>
</section>
";
        }
        // line 67
        yield "
";
        // line 68
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 68), "items", [], "any", false, false, false, 68))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "<section class=\"section section--doctors\" id=\"doctors\">
  <div class=\"container\">
    ";
            // line 71
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(71))->call("head", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 71), "eyebrow", [], "any", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 71), "text", [], "any", false, false, false, 71)], $context, 71, $this->source);
            yield "
    <div class=\"doctor-list\">
      ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "doctors", [], "any", false, false, false, 73), "items", [], "any", false, false, false, 73));
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
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 74
                yield "        ";
                $context["dp"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [CoreExtension::getAttribute($this->env, $this->source, $context["it"], "page", [], "any", false, false, false, 74)], "method", false, false, false, 74);
                // line 75
                yield "        ";
                if ((($tmp = ($context["dp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield from $this->load("partials/doctor-feature.html.twig", 75)->unwrap()->yield(CoreExtension::merge($context, ["dp" => ($context["dp"] ?? null), "featured" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 75)]));
                }
                // line 76
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
            unset($context['_seq'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 77
            yield "    </div>
  </div>
</section>
";
        }
        // line 81
        yield "
";
        // line 82
        $context["sp"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 82), "page", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 82), "page", [], "any", false, false, false, 82)], "method", false, false, false, 82)) : (null));
        // line 83
        if ((($tmp = ($context["sp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "<section class=\"section spotlight\">
  <div class=\"container\">
    <div class=\"spotlight__head\">
      <div class=\"spotlight__copy\">
        ";
            // line 88
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 88), "eyebrow", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"eyebrow eyebrow--light\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 88), "eyebrow", [], "any", false, false, false, 88), "html", null, true);
                yield "</p>";
            }
            // line 89
            yield "        <h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 89), "title", [], "any", false, false, false, 89), "html", null, true);
            yield "</h2>
        <div class=\"spotlight__text\">";
            // line 90
            yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 90), "text", [], "any", false, false, false, 90));
            yield "</div>
        ";
            // line 91
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 91), "button_label", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p><a class=\"btn btn-accent\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 91), "button_link", [], "any", false, false, false, 91)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "spotlight", [], "any", false, false, false, 91), "button_label", [], "any", false, false, false, 91), "html", null, true);
                yield " ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(91))->call("icon", ["arrow-right"], $context, 91, $this->source);
                yield "</a></p>";
            }
            // line 92
            yield "      </div>
      ";
            // line 93
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sp"] ?? null), "header", [], "any", false, false, false, 93), "stats", [], "any", false, false, false, 93))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "      <ul class=\"spotlight__stats\">
        ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sp"] ?? null), "header", [], "any", false, false, false, 95), "stats", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                    yield "<li><span class=\"spotlight__value\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["st"], "value", [], "any", false, false, false, 95), "html", null, true);
                    yield "</span><span class=\"spotlight__label\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["st"], "label", [], "any", false, false, false, 95), "html", null, true);
                    yield "</span></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['st'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 96
                yield "      </ul>
      ";
            }
            // line 98
            yield "    </div>
    ";
            // line 99
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sp"] ?? null), "header", [], "any", false, false, false, 99), "specialisations", [], "any", false, false, false, 99), "items", [], "any", false, false, false, 99))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "    <div class=\"card-grid card-grid--3 spotlight__cards\">
      ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["sp"] ?? null), "header", [], "any", false, false, false, 101), "specialisations", [], "any", false, false, false, 101), "items", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                    // line 102
                    yield "      <a class=\"page-card\" href=\"";
                    yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "link", [], "any", false, false, false, 102)), "html", null, true);
                    yield "\">
        <span class=\"page-card__media\">";
                    // line 103
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(103))->call("img", [($context["sp"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["it"], "image", [], "any", false, false, false, 103), CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 103)], $context, 103, $this->source);
                    yield "</span>
        <span class=\"page-card__body\">
          <span class=\"page-card__title\">";
                    // line 105
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 105), "html", null, true);
                    yield "</span>
          <span class=\"page-card__text\">";
                    // line 106
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "text", [], "any", false, false, false, 106), "html", null, true);
                    yield "</span>
          <span class=\"page-card__more\">See more ";
                    // line 107
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(107))->call("icon", ["arrow-right"], $context, 107, $this->source);
                    yield "</span>
        </span>
      </a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 111
                yield "    </div>
    ";
            }
            // line 113
            yield "  </div>
</section>
";
        }
        // line 116
        yield "
";
        // line 117
        $context["services_root"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/our-services"], "method", false, false, false, 117);
        // line 118
        if (((($tmp = ($context["services_root"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "surgical", [], "any", false, false, false, 118), "group", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 119
            $context["surgical_pages"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["services_root"] ?? null), "children", [], "any", false, false, false, 119), "published", [], "any", false, false, false, 119), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 119), "nav_group", [], "any", false, false, true, 119), 119, $this->source) == $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "surgical", [], "any", false, false, true, 119), "group", [], "any", false, false, true, 119), 119, $this->source)); });
            // line 120
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["surgical_pages"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "<section class=\"section section--cream\">
  <div class=\"container\">
    ";
                // line 123
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(123))->call("head", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "surgical", [], "any", false, false, false, 123), "eyebrow", [], "any", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "surgical", [], "any", false, false, false, 123), "title", [], "any", false, false, false, 123), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "surgical", [], "any", false, false, false, 123), "text", [], "any", false, false, false, 123)], $context, 123, $this->source);
                yield "
    <div class=\"card-grid card-grid--4\">
      ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["surgical_pages"] ?? null));
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
                    yield from $this->load("partials/page-card.html.twig", 125)->unwrap()->yield(CoreExtension::merge($context, ["card" => $context["c"]]));
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
                // line 126
                yield "    </div>
  </div>
</section>
";
            }
        }
        // line 131
        yield "
";
        // line 132
        $context["why"] = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "why", [], "any", false, false, false, 132);
        // line 133
        yield "<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__media\">
      <div class=\"media-frame\">";
        // line 136
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(136))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "image", [], "any", false, false, false, 136), CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "title", [], "any", false, false, false, 136)], $context, 136, $this->source);
        yield "</div>
    </div>
    <div class=\"split__copy\">
      ";
        // line 139
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "eyebrow", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "eyebrow", [], "any", false, false, false, 139), "html", null, true);
            yield "</p>";
        }
        // line 140
        yield "      <h2>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "title", [], "any", false, false, false, 140), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 141
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["why"] ?? null), "text", [], "any", false, false, false, 141));
        yield "</div>
    </div>
  </div>
</section>

";
        // line 146
        $context["services_page"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/our-services"], "method", false, false, false, 146);
        // line 147
        if ((($tmp = ($context["services_page"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "<section class=\"section section--mint\">
  <div class=\"container\">
    ";
            // line 150
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(150))->call("head", ["Dr Arooj Fatima Gillani · Clinical nutrition", "Clinical nutrition services built around your condition", "Every nutrition protocol is part of your wider medical treatment plan and tailored to your diagnosis."], $context, 150, $this->source);
            yield "
    <div class=\"card-grid card-grid--4\">
      ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["services_page"] ?? null), "children", [], "any", false, false, false, 152), "published", [], "any", false, false, false, 152), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 152), "nav_group", [], "any", false, false, true, 152), 152, $this->source) == "Clinical Nutrition Services"); }));
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
                // line 153
                yield "        ";
                yield from $this->load("partials/page-card.html.twig", 153)->unwrap()->yield(CoreExtension::merge($context, ["card" => $context["c"]]));
                // line 154
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
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 155
            yield "    </div>
    <p class=\"center mt\"><a class=\"btn btn-outline\" href=\"";
            // line 156
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["services_page"] ?? null), "url", [], "any", false, false, false, 156), "html", null, true);
            yield "\">View all services ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(156))->call("icon", ["arrow-right"], $context, 156, $this->source);
            yield "</a></p>
  </div>
</section>
";
        }
        // line 160
        yield "
";
        // line 161
        $context["con"] = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "consultations", [], "any", false, false, false, 161);
        // line 162
        yield "<section class=\"section\">
  <div class=\"container split split--reverse\">
    <div class=\"split__media\">
      <div class=\"media-frame\">";
        // line 165
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(165))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "image", [], "any", false, false, false, 165), CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "title", [], "any", false, false, false, 165)], $context, 165, $this->source);
        yield "</div>
    </div>
    <div class=\"split__copy\">
      ";
        // line 168
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "eyebrow", [], "any", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "eyebrow", [], "any", false, false, false, 168), "html", null, true);
            yield "</p>";
        }
        // line 169
        yield "      <h2>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "title", [], "any", false, false, false, 169), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 170
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "text", [], "any", false, false, false, 170));
        yield "</div>
      ";
        // line 171
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "items", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 172
            yield "        <p class=\"list-title\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "list_title", [], "any", false, false, false, 172), "html", null, true);
            yield "</p>
        ";
            // line 173
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(173))->call("checklist", [$this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "items", [], "any", false, false, false, 173))], $context, 173, $this->source);
            yield "
      ";
        }
        // line 175
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "button_label", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p><a class=\"btn btn-primary\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "button_link", [], "any", false, false, false, 175)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["con"] ?? null), "button_label", [], "any", false, false, false, 175), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(175))->call("icon", ["arrow-right"], $context, 175, $this->source);
            yield "</a></p>";
        }
        // line 176
        yield "    </div>
  </div>
</section>

";
        // line 180
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 180), "items", [], "any", false, false, false, 180))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "<section class=\"stats-band\">
  <div class=\"container\">
    <h2 class=\"stats-band__title\">";
            // line 183
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 183), "title", [], "any", false, false, false, 183), "html", null, true);
            yield "</h2>
    <ul class=\"stats-grid\">
      ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 185), "items", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 186
                yield "      <li><span class=\"stat-value\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "value", [], "any", false, false, false, 186), "html", null, true);
                yield "</span><span class=\"stat-label\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "label", [], "any", false, false, false, 186), "html", null, true);
                yield "</span></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 188
            yield "    </ul>
    ";
            // line 189
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 189), "link", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"center\"><a class=\"link-arrow link-arrow--light\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 189), "link", [], "any", false, false, false, 189)), "html", null, true);
                yield "\">";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 189), "link_label", [], "any", false, false, false, 189)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "stats", [], "any", false, false, false, 189), "link_label", [], "any", false, false, false, 189), "html", null, true)) : ("Learn more"));
                yield " ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(189))->call("icon", ["arrow-right"], $context, 189, $this->source);
                yield "</a></p>";
            }
            // line 190
            yield "  </div>
</section>
";
        }
        // line 193
        yield "
";
        // line 194
        $context["org"] = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "organisations", [], "any", false, false, false, 194);
        // line 195
        yield "<section class=\"section section--cream\">
  <div class=\"container split\">
    <div class=\"split__media\">
      <div class=\"media-frame\">";
        // line 198
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(198))->call("img", [($context["page"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "image", [], "any", false, false, false, 198), CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "title", [], "any", false, false, false, 198)], $context, 198, $this->source);
        yield "</div>
    </div>
    <div class=\"split__copy\">
      ";
        // line 201
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "eyebrow", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"eyebrow\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "eyebrow", [], "any", false, false, false, 201), "html", null, true);
            yield "</p>";
        }
        // line 202
        yield "      <h2>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "title", [], "any", false, false, false, 202), "html", null, true);
        yield "</h2>
      <div class=\"prose\">";
        // line 203
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "text", [], "any", false, false, false, 203));
        yield "</div>
      ";
        // line 204
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "button_label", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p><a class=\"btn btn-primary\" href=\"";
            yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "button_link", [], "any", false, false, false, 204)), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["org"] ?? null), "button_label", [], "any", false, false, false, 204), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(204))->call("icon", ["arrow-right"], $context, 204, $this->source);
            yield "</a></p>";
        }
        // line 205
        yield "    </div>
  </div>
</section>

";
        // line 209
        $context["blog"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", ["/blog"], "method", false, false, false, 209);
        // line 210
        if ((($tmp = ($context["blog"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            $context["posts"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blog"] ?? null), "children", [], "any", false, false, false, 211), "published", [], "any", false, false, false, 211), "order", ["date", "desc"], "method", false, false, false, 211), "slice", [0, 3], "method", false, false, false, 211);
            // line 212
            yield "<section class=\"section\">
  <div class=\"container\">
    ";
            // line 214
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(214))->call("head", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 214), "eyebrow", [], "any", false, false, false, 214), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 214), "title", [], "any", false, false, false, 214), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 214), "text", [], "any", false, false, false, 214)], $context, 214, $this->source);
            yield "
    <div class=\"card-grid card-grid--3\">
      ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                yield from $this->load("partials/post-card.html.twig", 216)->unwrap()->yield($context);
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
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 217
            yield "    </div>
    ";
            // line 218
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 218), "button_label", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<p class=\"center mt\"><a class=\"btn btn-outline\" href=\"";
                yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 218), "button_link", [], "any", false, false, false, 218)), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "education", [], "any", false, false, false, 218), "button_label", [], "any", false, false, false, 218), "html", null, true);
                yield " ";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(218))->call("icon", ["arrow-right"], $context, 218, $this->source);
                yield "</a></p>";
            }
            // line 219
            yield "  </div>
</section>
";
        }
        // line 222
        yield "
";
        // line 223
        yield from $this->load("partials/cta-band.html.twig", 223)->unwrap()->yield(CoreExtension::merge($context, ["cta" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "cta", [], "any", false, false, false, 223)]));
        // line 224
        yield "
";
        // line 225
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 225), "form", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "<section class=\"section section--mint\" id=\"book\">
  <div class=\"container container--narrow\">
    ";
            // line 228
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(228))->call("head", ["Book online", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 228), "title", [], "any", false, false, false, 228), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 228), "text", [], "any", false, false, false, 228)], $context, 228, $this->source);
            yield "
    <div class=\"form-card\">";
            // line 229
            yield from $this->load("partials/form.html.twig", 229)->unwrap()->yield(CoreExtension::merge($context, ["form_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "booking", [], "any", false, false, false, 229), "form", [], "any", false, false, false, 229)]));
            yield "</div>
  </div>
</section>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home.html.twig";
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
        return array (  836 => 229,  832 => 228,  828 => 226,  826 => 225,  823 => 224,  821 => 223,  818 => 222,  813 => 219,  803 => 218,  800 => 217,  769 => 216,  764 => 214,  760 => 212,  758 => 211,  756 => 210,  754 => 209,  748 => 205,  738 => 204,  734 => 203,  729 => 202,  723 => 201,  717 => 198,  712 => 195,  710 => 194,  707 => 193,  702 => 190,  692 => 189,  689 => 188,  677 => 186,  673 => 185,  668 => 183,  664 => 181,  662 => 180,  656 => 176,  645 => 175,  640 => 173,  635 => 172,  633 => 171,  629 => 170,  624 => 169,  618 => 168,  612 => 165,  607 => 162,  605 => 161,  602 => 160,  593 => 156,  590 => 155,  575 => 154,  572 => 153,  555 => 152,  550 => 150,  546 => 148,  544 => 147,  542 => 146,  534 => 141,  529 => 140,  523 => 139,  517 => 136,  512 => 133,  510 => 132,  507 => 131,  500 => 126,  469 => 125,  464 => 123,  460 => 121,  458 => 120,  456 => 119,  454 => 118,  452 => 117,  449 => 116,  444 => 113,  440 => 111,  429 => 107,  425 => 106,  421 => 105,  416 => 103,  411 => 102,  407 => 101,  404 => 100,  402 => 99,  399 => 98,  395 => 96,  381 => 95,  378 => 94,  376 => 93,  373 => 92,  363 => 91,  359 => 90,  354 => 89,  348 => 88,  342 => 84,  340 => 83,  338 => 82,  335 => 81,  329 => 77,  314 => 76,  309 => 75,  306 => 74,  289 => 73,  284 => 71,  280 => 69,  278 => 68,  275 => 67,  269 => 63,  259 => 60,  255 => 59,  251 => 58,  248 => 57,  244 => 56,  239 => 53,  237 => 52,  231 => 48,  227 => 46,  212 => 45,  205 => 41,  201 => 40,  197 => 39,  193 => 38,  188 => 36,  181 => 35,  178 => 34,  175 => 33,  158 => 32,  155 => 31,  153 => 30,  150 => 29,  144 => 26,  140 => 25,  137 => 24,  135 => 23,  131 => 22,  125 => 18,  116 => 17,  106 => 16,  101 => 14,  97 => 13,  92 => 12,  86 => 11,  82 => 9,  76 => 8,  73 => 7,  71 => 6,  69 => 5,  67 => 4,  60 => 3,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% block content %}
{% set h = page.header %}
{% set hero = h.hero %}
{% set first_stat = h.stats.items|first %}
<section class=\"hero\">
  {% if hero.video_url %}<video class=\"hero__video\" src=\"{{ hero.video_url }}\" autoplay muted loop playsinline aria-hidden=\"true\"></video>{% endif %}
  <div class=\"container hero__inner\">
    <div class=\"hero__copy\">
      {% if hero.eyebrow %}<p class=\"eyebrow eyebrow--light\">{{ hero.eyebrow }}</p>{% endif %}
      <h1>{{ hero.title }}</h1>
      <p class=\"hero__lead\">{{ hero.text }}</p>
      <div class=\"hero__text\">{{ hero.text2|markdown }}</div>
      <div class=\"btn-row\">
        {% if hero.primary_label %}<a class=\"btn btn-accent btn-lg\" href=\"{{ hero.primary_link|href }}\">{{ hero.primary_label }} {{ ui.icon(\x27arrow-right\x27) }}</a>{% endif %}
        {% if hero.secondary_label %}<a class=\"btn btn-ghost btn-lg\" href=\"{{ hero.secondary_link|href }}\">{{ hero.secondary_label }}</a>{% endif %}
      </div>
    </div>
    <div class=\"hero__media\">
      <div class=\"hero__photo\">
        <div class=\"hero__frame\">{{ ui.img(page, hero.image, hero.title, \x27\x27, true) }}</div>
        {% if first_stat %}
        <div class=\"hero__badge\">
          <span class=\"hero__badge-value\">{{ first_stat.value }}</span>
          <span class=\"hero__badge-label\">{{ first_stat.label }}</span>
        </div>
        {% endif %}
      </div>
      {% if h.doctors.items|length %}
      <div class=\"hero__team\">
        {% for it in h.doctors.items %}
          {% set dp = page.find(it.page) %}
          {% if dp %}
          <a class=\"hero__doc{{ loop.first ? \x27 hero__doc--lead\x27 : \x27\x27 }}\" href=\"{{ dp.url }}\">
            <span class=\"hero__doc-photo\">{{ ui.img(dp, dp.header.profile.card_image ?: dp.header.profile.image, dp.header.profile.name) }}</span>
            <span class=\"hero__doc-info\">
              <span class=\"hero__doc-tag\">{{ loop.first ? \x27Lead surgeon\x27 : \x27Clinical nutrition\x27 }}</span>
              <strong>{{ dp.header.profile.name }}</strong>
              <small>{{ dp.header.profile.role }}</small>
              <span class=\"hero__doc-more\">View profile {{ ui.icon(\x27arrow-right\x27) }}</span>
            </span>
          </a>
          {% endif %}
        {% endfor %}
      </div>
      {% endif %}
    </div>
  </div>
</section>

{% if h.highlights|length %}
<section class=\"highlights\">
  <div class=\"container\">
    <ul class=\"highlights__grid\">
      {% for it in h.highlights %}
      <li class=\"highlight\">
        <span class=\"icon-badge\">{{ ui.icon(it.icon) }}</span>
        <h3>{{ it.title }}</h3>
        <p>{{ it.text }}</p>
      </li>
      {% endfor %}
    </ul>
  </div>
</section>
{% endif %}

{% if h.doctors.items|length %}
<section class=\"section section--doctors\" id=\"doctors\">
  <div class=\"container\">
    {{ ui.head(h.doctors.eyebrow, h.doctors.title, h.doctors.text) }}
    <div class=\"doctor-list\">
      {% for it in h.doctors.items %}
        {% set dp = page.find(it.page) %}
        {% if dp %}{% include \x27partials/doctor-feature.html.twig\x27 with {\x27dp\x27: dp, \x27featured\x27: loop.first} %}{% endif %}
      {% endfor %}
    </div>
  </div>
</section>
{% endif %}

{% set sp = h.spotlight.page ? page.find(h.spotlight.page) : null %}
{% if sp %}
<section class=\"section spotlight\">
  <div class=\"container\">
    <div class=\"spotlight__head\">
      <div class=\"spotlight__copy\">
        {% if h.spotlight.eyebrow %}<p class=\"eyebrow eyebrow--light\">{{ h.spotlight.eyebrow }}</p>{% endif %}
        <h2>{{ h.spotlight.title }}</h2>
        <div class=\"spotlight__text\">{{ h.spotlight.text|markdown }}</div>
        {% if h.spotlight.button_label %}<p><a class=\"btn btn-accent\" href=\"{{ h.spotlight.button_link|href }}\">{{ h.spotlight.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>{% endif %}
      </div>
      {% if sp.header.stats|length %}
      <ul class=\"spotlight__stats\">
        {% for st in sp.header.stats %}<li><span class=\"spotlight__value\">{{ st.value }}</span><span class=\"spotlight__label\">{{ st.label }}</span></li>{% endfor %}
      </ul>
      {% endif %}
    </div>
    {% if sp.header.specialisations.items|length %}
    <div class=\"card-grid card-grid--3 spotlight__cards\">
      {% for it in sp.header.specialisations.items %}
      <a class=\"page-card\" href=\"{{ it.link|href }}\">
        <span class=\"page-card__media\">{{ ui.img(sp, it.image, it.title) }}</span>
        <span class=\"page-card__body\">
          <span class=\"page-card__title\">{{ it.title }}</span>
          <span class=\"page-card__text\">{{ it.text }}</span>
          <span class=\"page-card__more\">See more {{ ui.icon(\x27arrow-right\x27) }}</span>
        </span>
      </a>
      {% endfor %}
    </div>
    {% endif %}
  </div>
</section>
{% endif %}

{% set services_root = page.find(\x27/our-services\x27) %}
{% if services_root and h.surgical.group %}
{% set surgical_pages = services_root.children.published|filter(c => c.header.nav_group == h.surgical.group) %}
{% if surgical_pages|length %}
<section class=\"section section--cream\">
  <div class=\"container\">
    {{ ui.head(h.surgical.eyebrow, h.surgical.title, h.surgical.text) }}
    <div class=\"card-grid card-grid--4\">
      {% for c in surgical_pages %}{% include \x27partials/page-card.html.twig\x27 with {\x27card\x27: c} %}{% endfor %}
    </div>
  </div>
</section>
{% endif %}
{% endif %}

{% set why = h.why %}
<section class=\"section\">
  <div class=\"container split\">
    <div class=\"split__media\">
      <div class=\"media-frame\">{{ ui.img(page, why.image, why.title) }}</div>
    </div>
    <div class=\"split__copy\">
      {% if why.eyebrow %}<p class=\"eyebrow\">{{ why.eyebrow }}</p>{% endif %}
      <h2>{{ why.title }}</h2>
      <div class=\"prose\">{{ why.text|markdown }}</div>
    </div>
  </div>
</section>

{% set services_page = page.find(\x27/our-services\x27) %}
{% if services_page %}
<section class=\"section section--mint\">
  <div class=\"container\">
    {{ ui.head(\x27Dr Arooj Fatima Gillani · Clinical nutrition\x27, \x27Clinical nutrition services built around your condition\x27, \x27Every nutrition protocol is part of your wider medical treatment plan and tailored to your diagnosis.\x27) }}
    <div class=\"card-grid card-grid--4\">
      {% for c in (services_page.children.published)|filter(c => c.header.nav_group == \x27Clinical Nutrition Services\x27) %}
        {% include \x27partials/page-card.html.twig\x27 with {\x27card\x27: c} %}
      {% endfor %}
    </div>
    <p class=\"center mt\"><a class=\"btn btn-outline\" href=\"{{ services_page.url }}\">View all services {{ ui.icon(\x27arrow-right\x27) }}</a></p>
  </div>
</section>
{% endif %}

{% set con = h.consultations %}
<section class=\"section\">
  <div class=\"container split split--reverse\">
    <div class=\"split__media\">
      <div class=\"media-frame\">{{ ui.img(page, con.image, con.title) }}</div>
    </div>
    <div class=\"split__copy\">
      {% if con.eyebrow %}<p class=\"eyebrow\">{{ con.eyebrow }}</p>{% endif %}
      <h2>{{ con.title }}</h2>
      <div class=\"prose\">{{ con.text|markdown }}</div>
      {% if con.items %}
        <p class=\"list-title\">{{ con.list_title }}</p>
        {{ ui.checklist(con.items|lines) }}
      {% endif %}
      {% if con.button_label %}<p><a class=\"btn btn-primary\" href=\"{{ con.button_link|href }}\">{{ con.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>{% endif %}
    </div>
  </div>
</section>

{% if h.stats.items|length %}
<section class=\"stats-band\">
  <div class=\"container\">
    <h2 class=\"stats-band__title\">{{ h.stats.title }}</h2>
    <ul class=\"stats-grid\">
      {% for s in h.stats.items %}
      <li><span class=\"stat-value\">{{ s.value }}</span><span class=\"stat-label\">{{ s.label }}</span></li>
      {% endfor %}
    </ul>
    {% if h.stats.link %}<p class=\"center\"><a class=\"link-arrow link-arrow--light\" href=\"{{ h.stats.link|href }}\">{{ h.stats.link_label ?: \x27Learn more\x27 }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>{% endif %}
  </div>
</section>
{% endif %}

{% set org = h.organisations %}
<section class=\"section section--cream\">
  <div class=\"container split\">
    <div class=\"split__media\">
      <div class=\"media-frame\">{{ ui.img(page, org.image, org.title) }}</div>
    </div>
    <div class=\"split__copy\">
      {% if org.eyebrow %}<p class=\"eyebrow\">{{ org.eyebrow }}</p>{% endif %}
      <h2>{{ org.title }}</h2>
      <div class=\"prose\">{{ org.text|markdown }}</div>
      {% if org.button_label %}<p><a class=\"btn btn-primary\" href=\"{{ org.button_link|href }}\">{{ org.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>{% endif %}
    </div>
  </div>
</section>

{% set blog = page.find(\x27/blog\x27) %}
{% if blog %}
{% set posts = blog.children.published.order(\x27date\x27, \x27desc\x27).slice(0, 3) %}
<section class=\"section\">
  <div class=\"container\">
    {{ ui.head(h.education.eyebrow, h.education.title, h.education.text) }}
    <div class=\"card-grid card-grid--3\">
      {% for post in posts %}{% include \x27partials/post-card.html.twig\x27 %}{% endfor %}
    </div>
    {% if h.education.button_label %}<p class=\"center mt\"><a class=\"btn btn-outline\" href=\"{{ h.education.button_link|href }}\">{{ h.education.button_label }} {{ ui.icon(\x27arrow-right\x27) }}</a></p>{% endif %}
  </div>
</section>
{% endif %}

{% include \x27partials/cta-band.html.twig\x27 with {\x27cta\x27: h.cta} %}

{% if h.booking.form %}
<section class=\"section section--mint\" id=\"book\">
  <div class=\"container container--narrow\">
    {{ ui.head(\x27Book online\x27, h.booking.title, h.booking.text) }}
    <div class=\"form-card\">{% include \x27partials/form.html.twig\x27 with {\x27form_name\x27: h.booking.form} %}</div>
  </div>
</section>
{% endif %}
{% endblock %}
", "home.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/home.html.twig");
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
