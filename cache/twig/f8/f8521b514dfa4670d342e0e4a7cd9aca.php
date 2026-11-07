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

/* partials/header.html.twig */
class __TwigTemplate_ee7b7f092a6d63635a06de40a39f38d7_sourced extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $macros["nav"] = $this->macros["nav"] = $this->load("macros/nav.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 3
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 3), "iham", [], "any", false, false, false, 3);
        // line 4
        $context["contact"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "contact", [], "any", false, false, false, 4);
        // line 5
        $context["hours"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "hours", [], "any", false, false, false, 5));
        // line 6
        yield "<header class=\"site-header\" id=\"top\">
  ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 7), "show_topbar", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "  <div class=\"topbar\">
    <div class=\"container topbar__inner\">
      <div class=\"topbar__left\">
        ";
            // line 11
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "          ";
                $context["l0"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 12));
                // line 13
                yield "          <a class=\"topbar__item topbar__addr\" href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["l0"] ?? null), "map_link", [], "any", false, false, false, 13), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["map-pin"], $context, 13, $this->source);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["l0"] ?? null), "address", [], "any", false, false, false, 13), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 15
                yield "          ";
                if ((($tmp = ($context["hours"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"topbar__item topbar__hours\">";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["clock"], $context, 15, $this->source);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hours"] ?? null), "days", [], "any", false, false, false, 15), "html", null, true);
                    yield ": ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hours"] ?? null), "time", [], "any", false, false, false, 15), "html", null, true);
                    yield "</span>";
                }
                // line 16
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a class=\"topbar__item topbar__addr\" href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "map_link", [], "any", false, false, false, 16), "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noopener\">";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(16))->call("icon", ["map-pin"], $context, 16, $this->source);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "address", [], "any", false, false, false, 16), "html", null, true);
                    yield "</a>";
                }
                // line 17
                yield "        ";
            }
            // line 18
            yield "      </div>
      <div class=\"topbar__right\">
        ";
            // line 20
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 20), "topbar_label", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span class=\"topbar__label\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 20), "topbar_label", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>";
            }
            // line 21
            yield "        ";
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 22
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "locations", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
                    yield "<a class=\"topbar__item topbar__phone\" href=\"tel:";
                    yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 22)), "html", null, true);
                    yield "\">";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["phone"], $context, 22, $this->source);
                    yield " ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "phone", [], "any", false, false, false, 22), "html", null, true);
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "short", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<small>";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "short", [], "any", false, false, false, 22), "html", null, true);
                        yield "</small>";
                    }
                    yield "</a>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 23
                yield "        ";
            } else {
                // line 24
                yield "          <a class=\"topbar__item topbar__phone\" href=\"tel:";
                yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 24)), "html", null, true);
                yield "\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["phone"], $context, 24, $this->source);
                yield " ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "phone", [], "any", false, false, false, 24), "html", null, true);
                yield "</a>
        ";
            }
            // line 26
            yield "      </div>
    </div>
  </div>
  ";
        }
        // line 30
        yield "
  <div class=\"navbar\">
    <div class=\"container navbar__inner\">
      <a class=\"brand\" href=\"";
        // line 33
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        yield " – home\">
        <img src=\"";
        // line 34
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/logo-header.png"), "html", null, true);
        yield "\" alt=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "brand", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "\" width=\"603\" height=\"494\">
      </a>

      <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"primary-nav\" aria-label=\"Open menu\">
        ";
        // line 38
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(38))->call("icon", ["menu", "nav-toggle__open"], $context, 38, $this->source);
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(38))->call("icon", ["x", "nav-toggle__close"], $context, 38, $this->source);
        yield "
      </button>

      <nav class=\"primary-nav\" id=\"primary-nav\" aria-label=\"Primary\">
        <ul class=\"menu\">
          <li class=\"menu__item";
        // line 43
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\"><a class=\"menu__link\" href=\"";
        yield (string) (((($tmp = ($context["base_url_relative"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["base_url_relative"], "html", null, true)) : ("/"));
        yield "\"";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" aria-current=\"page\"") : (""));
        yield ">Home</a></li>

          ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 45), "visible", [], "any", false, false, false, 45), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "home", [], "any", false, false, true, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp); }));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 46
            yield "            ";
            $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 46), "visible", [], "any", false, false, false, 46);
            // line 47
            yield "            ";
            $context["is_active"] = ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 48
            yield "            ";
            $context["group_count"] = 0;
            // line 49
            yield "            ";
            $context["seen_groups"] = [];
            // line 50
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["kids"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                $context["g"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 50), "nav_group", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 50), "nav_group", [], "any", false, false, false, 50)) : (""));
                if (!CoreExtension::inFilter(($context["g"] ?? null), ($context["seen_groups"] ?? null))) {
                    $context["seen_groups"] = Twig\Extension\CoreExtension::merge(($context["seen_groups"] ?? null), [($context["g"] ?? null)]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 51
            yield "            <li class=\"menu__item";
            yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-sub") : (""));
            yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["seen_groups"] ?? null)) > 1)) ? (" has-mega") : (""));
            yield (string) (((($tmp = ($context["is_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
            yield "\">
              <a class=\"menu__link\" href=\"";
            // line 52
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 52), "html", null, true);
            yield "\"";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" aria-current=\"page\"") : (""));
            yield ">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 52), "html", null, true);
            yield "</a>
              ";
            // line 53
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                <button class=\"submenu-toggle\" type=\"button\" aria-expanded=\"false\" aria-label=\"Show ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 54), "html", null, true);
                yield " pages\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(54))->call("icon", ["chevron-down"], $context, 54, $this->source);
                yield "</button>
                ";
                // line 55
                $context["group_names"] = [];
                // line 56
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["kids"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    $context["g"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 56), "nav_group", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 56), "nav_group", [], "any", false, false, false, 56)) : (""));
                    if (!CoreExtension::inFilter(($context["g"] ?? null), ($context["group_names"] ?? null))) {
                        $context["group_names"] = Twig\Extension\CoreExtension::merge(($context["group_names"] ?? null), [($context["g"] ?? null)]);
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 57
                yield "                <div class=\"submenu";
                yield (string) (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["group_names"] ?? null)) > 1)) ? (" submenu--mega") : (""));
                yield "\">
                  <div class=\"submenu__inner\">
                  ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["group_names"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                    // line 60
                    yield "                    ";
                    $context["wide"] = false;
                    // line 61
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["kids"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 61), "nav_group", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 61), "nav_group", [], "any", false, false, true, 61), 61, $this->source)) : ("")) == $this->sandbox->ensureToStringAllowed($context["g"], 61, $this->source)) && (($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "children", [], "any", false, false, true, 61), "visible", [], "any", false, false, true, 61), 61, $this->source))) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        $context["wide"] = true;
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 62
                    yield "                    <div class=\"submenu__col";
                    yield (string) (((($tmp = ($context["wide"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" submenu__col--wide") : (""));
                    yield "\">
                      ";
                    // line 63
                    if ((($tmp = $context["g"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<p class=\"submenu__title\">";
                        yield (string) $this->escaper->escape($context["g"], "html", null, true);
                        yield "</p>";
                    }
                    // line 64
                    yield "                      <ul class=\"";
                    yield (string) (((($tmp = ($context["wide"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("submenu__list--cols") : (""));
                    yield "\">
                      ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["kids"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 65), "nav_group", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "header", [], "any", false, false, true, 65), "nav_group", [], "any", false, false, true, 65), 65, $this->source)) : ("")) == $this->sandbox->ensureToStringAllowed($context["g"], 65, $this->source)); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 66
                        yield "                        <li";
                        yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "children", [], "any", false, false, false, 66), "visible", [], "any", false, false, false, 66))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"has-children\"") : (""));
                        yield ">
                          <a href=\"";
                        // line 67
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 67), "html", null, true);
                        yield "\"";
                        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "active", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" aria-current=\"page\"") : (""));
                        yield ">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 67), "html", null, true);
                        yield "</a>
                          ";
                        // line 68
                        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "children", [], "any", false, false, false, 68), "visible", [], "any", false, false, false, 68))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (string) ($macros["nav"] ?? $this->throwUninitializedMacroNamespace(68))->call("tree", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "children", [], "any", false, false, false, 68), "visible", [], "any", false, false, false, 68), 1], $context, 68, $this->source);
                        }
                        // line 69
                        yield "                        </li>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 71
                    yield "                      </ul>
                    </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['g'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 74
                yield "                  </div>
                  ";
                // line 75
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["group_names"] ?? null)) > 1)) {
                    yield "<a class=\"submenu__all\" href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 75), "html", null, true);
                    yield "\">View all ";
                    yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 75)), "html", null, true);
                    yield " ";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(75))->call("icon", ["arrow-right"], $context, 75, $this->source);
                    yield "</a>";
                }
                // line 76
                yield "                </div>
              ";
            }
            // line 78
            yield "            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 80
        yield "        </ul>
        <a class=\"btn btn-accent nav-cta\" href=\"";
        // line 81
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 81), "cta_link", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 81), "cta_link", [], "any", false, false, false, 81)) : ("/book-a-consultation"))), "html", null, true);
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(81))->call("icon", ["calendar"], $context, 81, $this->source);
        yield " ";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 81), "cta_label", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 81), "cta_label", [], "any", false, false, false, 81), "html", null, true)) : ("Book an Appointment"));
        yield "</a>
      </nav>
    </div>
  </div>
</header>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  376 => 81,  373 => 80,  365 => 78,  361 => 76,  351 => 75,  348 => 74,  339 => 71,  331 => 69,  327 => 68,  319 => 67,  314 => 66,  310 => 65,  305 => 64,  299 => 63,  294 => 62,  283 => 61,  280 => 60,  276 => 59,  270 => 57,  256 => 56,  254 => 55,  247 => 54,  245 => 53,  237 => 52,  230 => 51,  216 => 50,  213 => 49,  210 => 48,  207 => 47,  204 => 46,  200 => 45,  191 => 43,  182 => 38,  173 => 34,  167 => 33,  162 => 30,  156 => 26,  146 => 24,  143 => 23,  121 => 22,  118 => 21,  112 => 20,  108 => 18,  105 => 17,  94 => 16,  83 => 15,  73 => 13,  70 => 12,  68 => 11,  63 => 8,  61 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% import \x27macros/nav.html.twig\x27 as nav %}
{% set theme = config.themes.iham %}
{% set contact = theme.contact %}
{% set hours = theme.hours|first %}
<header class=\"site-header\" id=\"top\">
  {% if theme.header.show_topbar %}
  <div class=\"topbar\">
    <div class=\"container topbar__inner\">
      <div class=\"topbar__left\">
        {% if theme.locations|length %}
          {% set l0 = theme.locations|first %}
          <a class=\"topbar__item topbar__addr\" href=\"{{ l0.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ ui.icon(\x27map-pin\x27) }} {{ l0.address }}</a>
        {% else %}
          {% if hours %}<span class=\"topbar__item topbar__hours\">{{ ui.icon(\x27clock\x27) }} {{ hours.days }}: {{ hours.time }}</span>{% endif %}
          {% if contact.address %}<a class=\"topbar__item topbar__addr\" href=\"{{ contact.map_link }}\" target=\"_blank\" rel=\"noopener\">{{ ui.icon(\x27map-pin\x27) }} {{ contact.address }}</a>{% endif %}
        {% endif %}
      </div>
      <div class=\"topbar__right\">
        {% if theme.header.topbar_label %}<span class=\"topbar__label\">{{ theme.header.topbar_label }}</span>{% endif %}
        {% if theme.locations|length %}
          {% for loc in theme.locations %}<a class=\"topbar__item topbar__phone\" href=\"tel:{{ loc.phone|tel }}\">{{ ui.icon(\x27phone\x27) }} {{ loc.phone }}{% if loc.short %}<small>{{ loc.short }}</small>{% endif %}</a>{% endfor %}
        {% else %}
          <a class=\"topbar__item topbar__phone\" href=\"tel:{{ contact.phone|tel }}\">{{ ui.icon(\x27phone\x27) }} {{ contact.phone }}</a>
        {% endif %}
      </div>
    </div>
  </div>
  {% endif %}

  <div class=\"navbar\">
    <div class=\"container navbar__inner\">
      <a class=\"brand\" href=\"{{ base_url_relative ?: \x27/\x27 }}\" aria-label=\"{{ theme.brand.name }} – home\">
        <img src=\"{{ url(\x27theme://images/logo-header.png\x27) }}\" alt=\"{{ theme.brand.name }}\" width=\"603\" height=\"494\">
      </a>

      <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"primary-nav\" aria-label=\"Open menu\">
        {{ ui.icon(\x27menu\x27, \x27nav-toggle__open\x27) }}{{ ui.icon(\x27x\x27, \x27nav-toggle__close\x27) }}
      </button>

      <nav class=\"primary-nav\" id=\"primary-nav\" aria-label=\"Primary\">
        <ul class=\"menu\">
          <li class=\"menu__item{{ page.home ? \x27 is-active\x27 : \x27\x27 }}\"><a class=\"menu__link\" href=\"{{ base_url_relative ?: \x27/\x27 }}\"{{ page.home ? \x27 aria-current=\"page\"\x27 : \x27\x27 }}>Home</a></li>

          {% for p in (pages.children.visible)|filter(p => not p.home) %}
            {% set kids = p.children.visible %}
            {% set is_active = p.active or p.activeChild %}
            {% set group_count = 0 %}
            {% set seen_groups = [] %}
            {% for c in kids %}{% set g = c.header.nav_group ?: \x27\x27 %}{% if g not in seen_groups %}{% set seen_groups = seen_groups|merge([g]) %}{% endif %}{% endfor %}
            <li class=\"menu__item{{ kids|length ? \x27 has-sub\x27 : \x27\x27 }}{{ seen_groups|length > 1 ? \x27 has-mega\x27 : \x27\x27 }}{{ is_active ? \x27 is-active\x27 : \x27\x27 }}\">
              <a class=\"menu__link\" href=\"{{ p.url }}\"{{ p.active ? \x27 aria-current=\"page\"\x27 : \x27\x27 }}>{{ p.menu }}</a>
              {% if kids|length %}
                <button class=\"submenu-toggle\" type=\"button\" aria-expanded=\"false\" aria-label=\"Show {{ p.menu }} pages\">{{ ui.icon(\x27chevron-down\x27) }}</button>
                {% set group_names = [] %}
                {% for c in kids %}{% set g = c.header.nav_group ?: \x27\x27 %}{% if g not in group_names %}{% set group_names = group_names|merge([g]) %}{% endif %}{% endfor %}
                <div class=\"submenu{{ group_names|length > 1 ? \x27 submenu--mega\x27 : \x27\x27 }}\">
                  <div class=\"submenu__inner\">
                  {% for g in group_names %}
                    {% set wide = false %}
                    {% for c in (kids)|filter(c => (c.header.nav_group ?: \x27\x27) == g and c.children.visible|length) %}{% set wide = true %}{% endfor %}
                    <div class=\"submenu__col{{ wide ? \x27 submenu__col--wide\x27 : \x27\x27 }}\">
                      {% if g %}<p class=\"submenu__title\">{{ g }}</p>{% endif %}
                      <ul class=\"{{ wide ? \x27submenu__list--cols\x27 : \x27\x27 }}\">
                      {% for c in (kids)|filter(c => (c.header.nav_group ?: \x27\x27) == g) %}
                        <li{{ c.children.visible|length ? \x27 class=\"has-children\"\x27 : \x27\x27 }}>
                          <a href=\"{{ c.url }}\"{{ c.active ? \x27 aria-current=\"page\"\x27 : \x27\x27 }}>{{ c.menu }}</a>
                          {% if c.children.visible|length %}{{ nav.tree(c.children.visible, 1) }}{% endif %}
                        </li>
                      {% endfor %}
                      </ul>
                    </div>
                  {% endfor %}
                  </div>
                  {% if group_names|length > 1 %}<a class=\"submenu__all\" href=\"{{ p.url }}\">View all {{ p.menu|lower }} {{ ui.icon(\x27arrow-right\x27) }}</a>{% endif %}
                </div>
              {% endif %}
            </li>
          {% endfor %}
        </ul>
        <a class=\"btn btn-accent nav-cta\" href=\"{{ (theme.header.cta_link ?: \x27/book-a-consultation\x27)|href }}\">{{ ui.icon(\x27calendar\x27) }} {{ theme.header.cta_label ?: \x27Book an Appointment\x27 }}</a>
      </nav>
    </div>
  </div>
</header>
", "partials/header.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/header.html.twig");
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
