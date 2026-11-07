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

/* forms/default/form.html.twig */
class __TwigTemplate_ee907aaf1c9ee3979240b18f37a280d3_sourced extends Template
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
            'xhr' => [$this, 'block_xhr'],
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'field' => [$this, 'block_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
            'inner_markup_buttons' => [$this, 'block_inner_markup_buttons'],
            'inner_markup_button_open' => [$this, 'block_inner_markup_button_open'],
            'inner_markup_button_close' => [$this, 'block_inner_markup_button_close'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('xhr', $context, $blocks);
        // line 3
        $context["config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", true, true, false, 3) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 3)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, false, 3)) : (($context["config"] ?? null)));
        // line 4
        $context["form"] = (((array_key_exists("form", $context) &&  !(null === $context["form"]))) ? ($context["form"]) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "session", [], "any", false, false, false, 4), "getFlashObject", ["form"], "method", false, false, false, 4)));
        // line 5
        $context["layout"] = (((array_key_exists("layout", $context) &&  !(null === $context["layout"]))) ? ($context["layout"]) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "layout", [], "any", false, false, false, 5)) : ("default"))));
        // line 6
        $context["field_layout"] = (((array_key_exists("field_layout", $context) &&  !(null === $context["field_layout"]))) ? ($context["field_layout"]) : (($context["layout"] ?? null)));
        // line 7
        yield "
<div id=\"";
        // line 8
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "-wrapper\" class=\"form-wrapper\">
";
        // line 10
        yield from $this->load("partials/form-messages.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
";
        // line 12
        $context["scope"] = (((($tmp = (((($tmp = ($context["scope"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["scope"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", true, true, false, 12)))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "scope", [], "any", false, false, false, 12)) : ("data."));
        // line 13
        $context["multipart"] = "";
        // line 14
        $context["blueprints"] = (((array_key_exists("blueprints", $context) &&  !(null === $context["blueprints"]))) ? ($context["blueprints"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "blueprint", [], "method", false, false, false, 14)));
        // line 15
        $context["method"] = Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "method", [], "any", false, false, false, 15)), "POST");
        // line 16
        $context["client_side_validation"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 16))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_side_validation", [], "any", false, false, false, 16)) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->definedDefaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 16), "form", [], "any", false, false, false, 16), "client_side_validation", [], "any", false, false, false, 16), true)));
        // line 17
        $context["inline_errors"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 17))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 17)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 17), "form", [], "any", false, false, false, 17), "inline_errors", [false], "method", false, false, false, 17)));
        // line 18
        yield "
";
        // line 19
        $context["data"] = (((array_key_exists("data", $context) &&  !(null === $context["data"]))) ? ($context["data"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "data", [], "any", false, false, false, 19)));
        // line 20
        $context["context"] = (((array_key_exists("context", $context) &&  !(null === $context["context"]))) ? ($context["context"]) : (($context["data"] ?? null)));
        // line 21
        yield "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 23
            yield "    ";
            if (((($context["method"] ?? null) == "POST") && (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 23) == "file"))) {
                // line 24
                yield "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 25
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 27
        yield "
";
        // line 28
        $context["action"] = (((array_key_exists("action", $context) &&  !(null === $context["action"]))) ? ($context["action"]) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "action", [], "any", false, false, false, 28)) : ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, false, 28) . CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "params", [], "any", false, false, false, 28))))));
        // line 29
        $context["action"] = ((((is_string($_v0 = ($context["action"] ?? null)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = ($context["action"] ?? null)) && is_string($_v3 = "#") && str_starts_with($_v2, $_v3)))) ? (($context["action"] ?? null)) : ((($context["base_url"] ?? null) . ($context["action"] ?? null))));
        // line 30
        $context["action"] = Twig\Extension\CoreExtension::trim(($context["action"] ?? null), "/", "right");
        // line 31
        yield "
";
        // line 32
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 33
            yield "    ";
            $context["action"] = (($context["base_url_relative"] ?? null) . "/");
        }
        // line 35
        yield "
";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.vendor.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 37);
            // line 38
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["plugin://form/assets/form.min.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 38);
        }
        // line 40
        yield "
";
        // line 41
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addInlineJs", [(((((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: " . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 44
($context["grav"] ?? null), "route", [], "any", false, false, false, 44), "withoutParams", [], "method", false, false, false, 44), "toString", [true], "method", false, false, false, 44))) . ",
        current_params: ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["grav"] ?? null), "route", [], "any", false, false, false, 45), "params", [], "any", false, false, false, 45))) . ",
        param_sep: ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["config"] ?? null), "get", ["system.param_sep", ":"], "method", false, false, false, 46))) . ",
        base_url_relative: ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false,         // line 47
($context["base_url_relative"] ?? null))) . ",
        form_nonce: ") . $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["form"] ?? null), "getNonce", [], "method", false, false, false, 48))) . ",
        session_timeout: ") . (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["config"] ?? null), "get", ["system.session.timeout", 1800], "method", false, false, false, 49))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->intFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "get", ["system.session.timeout", 1800], "method", false, false, false, 49))) : (1800))) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), ["group" => "bottom", "position" => "before", "priority" => 100]], "method", false, false, false, 41);
        // line 53
        yield "
";
        // line 55
        $context["override_form_classes"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 56
            yield "  ";
            yield from $this->unwrap()->yieldBlock('form_classes', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 60
        yield "
";
        // line 61
        $context["override_inner_markup_fields_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 62
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_start', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 64
        yield "
";
        // line 65
        $context["override_inner_markup_fields_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 66
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields_end', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 68
        yield "
";
        // line 69
        $context["override_inner_markup_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 70
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_fields', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "
";
        // line 87
        $context["override_inner_markup_buttons_start"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 88
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_start', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 92
        yield "
";
        // line 93
        $context["override_inner_markup_buttons_end"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 94
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons_end', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        yield "
";
        // line 100
        $context["override_inner_markup_buttons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 101
            yield "  ";
            yield from $this->unwrap()->yieldBlock('inner_markup_buttons', $context, $blocks);
            return; yield;
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        yield "
";
        // line 163
        yield from $this->load("forms/default/form.html.twig", 163, 2)->unwrap()->yield($context);
        // line 217
        yield "
";
        // line 218
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "forms", [], "any", false, false, false, 218), "dropzone", [], "any", false, false, false, 218), "enabled", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 220
            yield from $this->load("forms/dropzone/template.html.twig", 220)->unwrap()->yield($context);
            // line 221
            yield "</div>
";
        }
        // line 223
        yield "</div>
";
        return; yield;
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_xhr(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield (string) $this->escaper->escape(($context["form_outer_classes"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "classes", [], "any", false, false, false, 57), "html", null, true);
        return; yield;
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 71));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 72
            yield "      ";
            $context["field"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->prepareFormField($context, $context["field"], $context["field_name"]);
            // line 73
            yield "      ";
            if ((($tmp = $context["field"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "        ";
                $context["value"] = (((($tmp = ($context["form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 74)], "method", false, false, false, 74)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "value", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 74)], "method", false, false, false, 74)));
                // line 75
                yield "        ";
                $context["field_templates"] = $this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 75), ($context["field_layout"] ?? null));
                // line 76
                yield "
        ";
                // line 77
                yield from $this->unwrap()->yieldBlock('inner_markup_field_open', $context, $blocks);
                // line 78
                yield "        ";
                yield from $this->unwrap()->yieldBlock('field', $context, $blocks);
                // line 81
                yield "        ";
                yield from $this->unwrap()->yieldBlock('inner_markup_field_close', $context, $blocks);
                // line 82
                yield "      ";
            }
            // line 83
            yield "    ";
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
        unset($context['_seq'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 84
        yield "  ";
        return; yield;
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "          ";
        try {
            $_v4 = $this->load(($context["field_templates"] ?? null), 79);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v4 = null;
        }
        if ($_v4) {
            yield from $_v4->unwrap()->yield($context);
        }
        // line 80
        yield "        ";
        return; yield;
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_field_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "  <div class=\"";
        yield (string) (((($tmp = ($context["form_button_outer_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_button_outer_classes"], "html", null, true)) : ("buttons"));
        yield "\">
  ";
        return; yield;
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons_end(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "  </div>
  ";
        return; yield;
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 102
        yield "    ";
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 102) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 102)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 102)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "buttons", [], "any", false, false, false, 103));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 104
                yield "        ";
                if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->authorize(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "access", [], "any", false, false, false, 104))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 105
                    yield "
          ";
                    // line 106
                    yield from $this->unwrap()->yieldBlock('inner_markup_button_open', $context, $blocks);
                    // line 109
                    yield "
          ";
                    // line 110
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 111
                        yield "            ";
                        $context["button_url"] = (((is_string($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 111)) && is_string($_v6 = "http") && str_starts_with($_v5, $_v6))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 111)) : ((($context["base_url"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 111))));
                        // line 112
                        yield "          ";
                    }
                    // line 113
                    yield "
          ";
                    // line 114
                    yield from $this->load("forms/default/form.html.twig", 114, 1)->unwrap()->yield($context);
                    // line 151
                    yield "
          ";
                    // line 152
                    yield from $this->unwrap()->yieldBlock('inner_markup_button_close', $context, $blocks);
                    // line 155
                    yield "
        ";
                }
                // line 157
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 158
            yield "    ";
        }
        // line 159
        yield "  ";
        return; yield;
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_button_open(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", true, true, false, 107)) {
            yield "<div class=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", false, false, false, 107), "html", null, true);
            yield "\">";
        }
        // line 108
        yield "          ";
        return; yield;
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_inner_markup_button_close(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 153
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "outerclasses", [], "any", true, true, false, 153)) {
            yield "</div>";
        }
        // line 154
        yield "          ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  571 => 154,  566 => 153,  559 => 152,  554 => 108,  547 => 107,  540 => 106,  535 => 159,  532 => 158,  517 => 157,  513 => 155,  511 => 152,  508 => 151,  506 => 114,  503 => 113,  500 => 112,  497 => 111,  495 => 110,  492 => 109,  490 => 106,  487 => 105,  484 => 104,  466 => 103,  463 => 102,  456 => 101,  450 => 95,  443 => 94,  435 => 89,  428 => 88,  418 => 81,  413 => 80,  402 => 79,  395 => 78,  385 => 77,  380 => 84,  365 => 83,  362 => 82,  359 => 81,  356 => 78,  354 => 77,  351 => 76,  348 => 75,  345 => 74,  342 => 73,  339 => 72,  321 => 71,  314 => 70,  304 => 66,  294 => 62,  287 => 57,  280 => 56,  270 => 1,  264 => 223,  260 => 221,  258 => 220,  255 => 219,  253 => 218,  250 => 217,  248 => 163,  245 => 161,  240 => 101,  238 => 100,  235 => 98,  230 => 94,  228 => 93,  225 => 92,  220 => 88,  218 => 87,  215 => 86,  210 => 70,  208 => 69,  205 => 68,  200 => 66,  198 => 65,  195 => 64,  190 => 62,  188 => 61,  185 => 60,  180 => 56,  178 => 55,  175 => 53,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  156 => 41,  153 => 40,  149 => 38,  146 => 37,  144 => 36,  141 => 35,  137 => 33,  135 => 32,  132 => 31,  130 => 30,  128 => 29,  126 => 28,  123 => 27,  115 => 25,  112 => 24,  109 => 23,  105 => 22,  102 => 21,  100 => 20,  98 => 19,  95 => 18,  93 => 17,  91 => 16,  89 => 15,  87 => 14,  85 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  71 => 7,  69 => 6,  67 => 5,  65 => 4,  63 => 3,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{# Page content Twig is sandboxed and hands down an empty `config`; this template and its fields are trusted, so read the real one. #}
{% set config = grav.config ?? config %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \" ~ grav.route.withoutParams().toString(true)|json_encode ~ \",
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \" ~ config.get(\x27system.param_sep\x27, \x27:\x27)|json_encode ~ \",
        base_url_relative: \" ~ base_url_relative|json_encode ~ \",
        form_nonce: \" ~ form.getNonce()|json_encode ~ \",
        session_timeout: \" ~ (config.get(\x27system.session.timeout\x27, 1800)|int ?: 1800) ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/godc/user/plugins/form/templates/forms/default/form.html.twig");
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


/* forms/default/form.html.twig */
class __TwigTemplate_ee907aaf1c9ee3979240b18f37a280d3_sourced___1 extends Template
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
            'embed_button_core' => [$this, 'block_embed_button_core'],
            'embed_button_classes' => [$this, 'block_embed_button_classes'],
            'button_classes' => [$this, 'block_button_classes'],
            'embed_button_content' => [$this, 'block_embed_button_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 114
        return $this->parent ??= $this->load("forms/layouts/button.html.twig", 114);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/button.html.twig", 114);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 116
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "id=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 116), "html", null, true);
            yield "\"";
        }
        // line 117
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "disabled", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "disabled=\"disabled\"";
        }
        // line 118
        yield "              ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 119
            yield "                name=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "\"
              ";
        } else {
            // line 121
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"task\" value=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "task", [], "any", false, false, false, 121), "html", null, true);
                yield "\"";
            }
            // line 122
            yield "              ";
        }
        // line 123
        yield "              type=\"";
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 123), "submit")) : ("submit")), "html", null, true);
        yield "\"
              ";
        // line 124
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", true, true, false, 124)) {
            // line 125
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "attributes", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 126
                yield "                  ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                    ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 127), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 127), "html_attr");
                    yield "\"
                  ";
                } else {
                    // line 129
                    yield "                    ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
                  ";
                }
                // line 131
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 132
            yield "              ";
        }
        // line 133
        yield "            ";
        return; yield;
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 136
        yield "              ";
        yield from $this->unwrap()->yieldBlock('button_classes', $context, $blocks);
        // line 139
        yield "            ";
        return; yield;
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 137
        yield "                class=\"";
        yield (string) (((($tmp = ($context["form_button_classes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($context["form_button_classes"], "html", null, true)) : ("button"));
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 137), "html", null, true);
        yield "\"
              ";
        return; yield;
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_button_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        $context["button_value"] = Twig\Extension\CoreExtension::default($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "value", [], "any", false, false, false, 142)), "Submit");
        // line 143
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "html", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            yield (string) Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null));
        } else {
            // line 146
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["button_value"] ?? null)));
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  1024 => 146,  1021 => 144,  1019 => 143,  1017 => 142,  1010 => 141,  1000 => 137,  993 => 136,  988 => 139,  985 => 136,  978 => 135,  973 => 133,  970 => 132,  963 => 131,  955 => 129,  947 => 127,  944 => 126,  939 => 125,  937 => 124,  932 => 123,  929 => 122,  922 => 121,  916 => 119,  913 => 118,  908 => 117,  901 => 116,  894 => 115,  883 => 114,  571 => 154,  566 => 153,  559 => 152,  554 => 108,  547 => 107,  540 => 106,  535 => 159,  532 => 158,  517 => 157,  513 => 155,  511 => 152,  508 => 151,  506 => 114,  503 => 113,  500 => 112,  497 => 111,  495 => 110,  492 => 109,  490 => 106,  487 => 105,  484 => 104,  466 => 103,  463 => 102,  456 => 101,  450 => 95,  443 => 94,  435 => 89,  428 => 88,  418 => 81,  413 => 80,  402 => 79,  395 => 78,  385 => 77,  380 => 84,  365 => 83,  362 => 82,  359 => 81,  356 => 78,  354 => 77,  351 => 76,  348 => 75,  345 => 74,  342 => 73,  339 => 72,  321 => 71,  314 => 70,  304 => 66,  294 => 62,  287 => 57,  280 => 56,  270 => 1,  264 => 223,  260 => 221,  258 => 220,  255 => 219,  253 => 218,  250 => 217,  248 => 163,  245 => 161,  240 => 101,  238 => 100,  235 => 98,  230 => 94,  228 => 93,  225 => 92,  220 => 88,  218 => 87,  215 => 86,  210 => 70,  208 => 69,  205 => 68,  200 => 66,  198 => 65,  195 => 64,  190 => 62,  188 => 61,  185 => 60,  180 => 56,  178 => 55,  175 => 53,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  156 => 41,  153 => 40,  149 => 38,  146 => 37,  144 => 36,  141 => 35,  137 => 33,  135 => 32,  132 => 31,  130 => 30,  128 => 29,  126 => 28,  123 => 27,  115 => 25,  112 => 24,  109 => 23,  105 => 22,  102 => 21,  100 => 20,  98 => 19,  95 => 18,  93 => 17,  91 => 16,  89 => 15,  87 => 14,  85 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  71 => 7,  69 => 6,  67 => 5,  65 => 4,  63 => 3,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{# Page content Twig is sandboxed and hands down an empty `config`; this template and its fields are trusted, so read the real one. #}
{% set config = grav.config ?? config %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \" ~ grav.route.withoutParams().toString(true)|json_encode ~ \",
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \" ~ config.get(\x27system.param_sep\x27, \x27:\x27)|json_encode ~ \",
        base_url_relative: \" ~ base_url_relative|json_encode ~ \",
        form_nonce: \" ~ form.getNonce()|json_encode ~ \",
        session_timeout: \" ~ (config.get(\x27system.session.timeout\x27, 1800)|int ?: 1800) ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/godc/user/plugins/form/templates/forms/default/form.html.twig");
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


/* forms/default/form.html.twig */
class __TwigTemplate_ee907aaf1c9ee3979240b18f37a280d3_sourced___2 extends Template
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
            'embed_form_core' => [$this, 'block_embed_form_core'],
            'embed_form_classes' => [$this, 'block_embed_form_classes'],
            'embed_form_custom_attributes' => [$this, 'block_embed_form_custom_attributes'],
            'embed_fields' => [$this, 'block_embed_fields'],
            'embed_buttons' => [$this, 'block_embed_buttons'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 163
        return $this->parent ??= $this->load("forms/layouts/form.html.twig", 163);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("forms/layouts/form.html.twig", 163);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_core(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 166
        yield "    name=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 166), "html", null, true);
        yield "\"
    action=\"";
        // line 167
        yield (string) $this->escaper->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
    method=\"";
        // line 168
        yield (string) $this->escaper->escape(($context["method"] ?? null), "html", null, true);
        yield "\"";
        yield (string) ($context["multipart"] ?? null);
        yield "
    id=\"";
        // line 169
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 169), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 169)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->inflectorFilter("hyphen", CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 169)))), "html", null, true);
        yield "\"
    ";
        // line 170
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "novalidate", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "novalidate";
        }
        // line 171
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "xhr_submit", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-xhr-enabled=\"true\"";
        }
        // line 172
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "keep_alive", [], "any", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-grav-keepalive=\"true\"";
        }
        // line 173
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", true, true, false, 173)) {
            // line 174
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attributes", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                // line 175
                yield "        ";
                if ((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->ofTypeFunc($context["attribute"], "array")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 176
                    yield "          ";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 176), "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "value", [], "any", false, false, false, 176), "html_attr");
                    yield "\"
        ";
                } else {
                    // line 178
                    yield "          ";
                    yield (string) $this->escaper->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield (string) $this->escaper->escape($context["attribute"], "html_attr");
                    yield "\"
        ";
                }
                // line 180
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 181
            yield "    ";
        }
        // line 182
        yield "  ";
        return; yield;
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 185
        yield "class=\"";
        yield from $this->yieldParentBlock("embed_form_classes", $context, $blocks);
        yield " ";
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::trim(($context["override_form_classes"] ?? null)), "html", null, true);
        yield "\"";
        return; yield;
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_form_custom_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["blueprints"] ?? null), "form", [], "any", false, false, false, 189), "attributes", [], "any", false, false, false, 189));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 190
            yield "      ";
            yield (string) $this->escaper->escape($context["k"], "html", null, true);
            yield "=\"";
            yield (string) $this->escaper->escape($context["v"]);
            yield "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 192
        yield "  ";
        return; yield;
    }

    // line 194
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 195
        yield "    ";
        yield (string) ($context["override_inner_markup_fields_start"] ?? null);
        yield "
    ";
        // line 196
        yield (string) ($context["override_inner_markup_fields"] ?? null);
        yield "

    ";
        // line 198
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", true, true, false, 198) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 198)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isEnabled", [], "method", false, false, false, 198)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 199
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formname", ($context["field_layout"] ?? null), "hidden"), 199)->unwrap()->yield($context);
            // line 200
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("formtask", ($context["field_layout"] ?? null), "hidden"), 200)->unwrap()->yield($context);
            // line 201
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("uniqueid", ($context["field_layout"] ?? null), "hidden"), 201)->unwrap()->yield($context);
            // line 202
            yield "    ";
            yield from $this->load($this->extensions['Grav\Plugin\Form\TwigExtension']->includeFormField("nonce", ($context["field_layout"] ?? null), "hidden"), 202)->unwrap()->yield($context);
            // line 203
            yield "    ";
        }
        // line 204
        yield "
    ";
        // line 205
        yield (string) ($context["override_inner_markup_fields_end"] ?? null);
        yield "
  ";
        return; yield;
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_embed_buttons(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 209
        yield "    ";
        yield (string) ($context["override_inner_markup_buttons_start"] ?? null);
        yield "

    ";
        // line 211
        yield (string) ($context["override_inner_markup_buttons"] ?? null);
        yield "

    ";
        // line 213
        yield (string) $this->escaper->escape(($context["override_inner_markup_buttons_end"] ?? null), "html", null, true);
        yield "
  ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forms/default/form.html.twig";
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
        return array (  1538 => 213,  1533 => 211,  1527 => 209,  1520 => 208,  1513 => 205,  1510 => 204,  1507 => 203,  1504 => 202,  1501 => 201,  1498 => 200,  1495 => 199,  1493 => 198,  1488 => 196,  1483 => 195,  1476 => 194,  1471 => 192,  1459 => 190,  1454 => 189,  1447 => 188,  1438 => 185,  1431 => 184,  1426 => 182,  1423 => 181,  1416 => 180,  1408 => 178,  1400 => 176,  1397 => 175,  1392 => 174,  1389 => 173,  1384 => 172,  1379 => 171,  1375 => 170,  1371 => 169,  1365 => 168,  1361 => 167,  1356 => 166,  1349 => 165,  1338 => 163,  1024 => 146,  1021 => 144,  1019 => 143,  1017 => 142,  1010 => 141,  1000 => 137,  993 => 136,  988 => 139,  985 => 136,  978 => 135,  973 => 133,  970 => 132,  963 => 131,  955 => 129,  947 => 127,  944 => 126,  939 => 125,  937 => 124,  932 => 123,  929 => 122,  922 => 121,  916 => 119,  913 => 118,  908 => 117,  901 => 116,  894 => 115,  883 => 114,  571 => 154,  566 => 153,  559 => 152,  554 => 108,  547 => 107,  540 => 106,  535 => 159,  532 => 158,  517 => 157,  513 => 155,  511 => 152,  508 => 151,  506 => 114,  503 => 113,  500 => 112,  497 => 111,  495 => 110,  492 => 109,  490 => 106,  487 => 105,  484 => 104,  466 => 103,  463 => 102,  456 => 101,  450 => 95,  443 => 94,  435 => 89,  428 => 88,  418 => 81,  413 => 80,  402 => 79,  395 => 78,  385 => 77,  380 => 84,  365 => 83,  362 => 82,  359 => 81,  356 => 78,  354 => 77,  351 => 76,  348 => 75,  345 => 74,  342 => 73,  339 => 72,  321 => 71,  314 => 70,  304 => 66,  294 => 62,  287 => 57,  280 => 56,  270 => 1,  264 => 223,  260 => 221,  258 => 220,  255 => 219,  253 => 218,  250 => 217,  248 => 163,  245 => 161,  240 => 101,  238 => 100,  235 => 98,  230 => 94,  228 => 93,  225 => 92,  220 => 88,  218 => 87,  215 => 86,  210 => 70,  208 => 69,  205 => 68,  200 => 66,  198 => 65,  195 => 64,  190 => 62,  188 => 61,  185 => 60,  180 => 56,  178 => 55,  175 => 53,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  156 => 41,  153 => 40,  149 => 38,  146 => 37,  144 => 36,  141 => 35,  137 => 33,  135 => 32,  132 => 31,  130 => 30,  128 => 29,  126 => 28,  123 => 27,  115 => 25,  112 => 24,  109 => 23,  105 => 22,  102 => 21,  100 => 20,  98 => 19,  95 => 18,  93 => 17,  91 => 16,  89 => 15,  87 => 14,  85 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  71 => 7,  69 => 6,  67 => 5,  65 => 4,  63 => 3,  61 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block xhr %}{% endblock %}
{# Page content Twig is sandboxed and hands down an empty `config`; this template and its fields are trusted, so read the real one. #}
{% set config = grav.config ?? config %}
{% set form = form ?? grav.session.getFlashObject(\x27form\x27) %}
{% set layout = layout ?? form.layout ?? \x27default\x27 %}
{% set field_layout = field_layout ?? layout %}

<div id=\"{{ form.id }}-wrapper\" class=\"form-wrapper\">
{# Keep here for Backwards Compatibility #}
{% include \x27partials/form-messages.html.twig\x27 %}

{% set scope = scope ?: form.scope is defined ? form.scope : \x27data.\x27 %}
{% set multipart = \x27\x27 %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default(\x27POST\x27) %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|defined(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% set data = data ?? form.data %}
{% set context = context ?? data %}

{% for field in form.fields %}
    {% if (method == \x27POST\x27 and field.type == \x27file\x27) %}
        {% set multipart = \x27 enctype=\"multipart/form-data\"\x27 %}
    {% endif %}
{% endfor %}

{% set action = action ?? (form.action ?: page.route ~ uri.params) %}
{% set action = (action starts with \x27http\x27) or (action starts with \x27#\x27) ? action : base_url ~ action %}
{% set action = action|trim(\x27/\x27, \x27right\x27) %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ \x27/\x27 %}
{% endif %}

{% if form.keep_alive %}
    {% do assets.addJs(\x27plugin://form/assets/form.vendor.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
    {% do assets.addJs(\x27plugin://form/assets/form.min.js\x27, { \x27group\x27: \x27bottom\x27, \x27loading\x27: \x27defer\x27 }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: \" ~ grav.route.withoutParams().toString(true)|json_encode ~ \",
        current_params: \" ~ grav.route.params|json_encode ~ \",
        param_sep: \" ~ config.get(\x27system.param_sep\x27, \x27:\x27)|json_encode ~ \",
        base_url_relative: \" ~ base_url_relative|json_encode ~ \",
        form_nonce: \" ~ form.getNonce()|json_encode ~ \",
        session_timeout: \" ~ (config.get(\x27system.session.timeout\x27, 1800)|int ?: 1800) ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {\x27group\x27: \x27bottom\x27, \x27position\x27: \x27before\x27, \x27priority\x27: 100}) %}

{# Backwards Compatibility for block overrides #}
{% set override_form_classes %}
  {% block form_classes -%}
    {{ form_outer_classes }} {{ form.classes }}
  {%- endblock %}
{% endset %}

{% set override_inner_markup_fields_start %}
  {% block inner_markup_fields_start %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields_end %}
  {% block inner_markup_fields_end %}{% endblock %}
{% endset %}

{% set override_inner_markup_fields %}
  {% block inner_markup_fields %}
    {% for field_name, field in form.fields %}
      {% set field = prepare_form_field(field, field_name) %}
      {% if field %}
        {% set value = form ? form.value(field.name) : data.value(field.name) %}
        {% set field_templates = include_form_field(field.type, field_layout) %}

        {% block inner_markup_field_open %}{% endblock %}
        {% block field %}
          {% include field_templates ignore missing %}
        {% endblock %}
        {% block inner_markup_field_close %}{% endblock %}
      {% endif %}
    {% endfor %}
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_start %}
  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: \x27buttons\x27}}\">
  {% endblock %}
{% endset %}

{% set override_inner_markup_buttons_end %}
  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}
{% endset %}

{# BC-friendly override point for the whole buttons loop, mirroring the fields pattern above #}
{% set override_inner_markup_buttons %}
  {% block inner_markup_buttons %}
    {% if form.isEnabled() ?? true %}
      {% for button in form.buttons %}
        {% if not button.access or authorize(button.access) %}

          {% block inner_markup_button_open %}
            {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
          {% endblock %}

          {% if button.url %}
            {% set button_url = button.url starts with \x27http\x27 ? button.url : base_url ~ button.url %}
          {% endif %}

          {% embed \x27forms/layouts/button.html.twig\x27 %}
            {% block embed_button_core %}
              {% if button.id %}id=\"{{ button.id }}\"{% endif %}
              {% if button.disabled %}disabled=\"disabled\"{% endif %}
              {% if button.name %}
                name=\"{{ button.name }}\"
              {% else %}
                {% if button.task %}name=\"task\" value=\"{{ button.task }}\"{% endif %}
              {% endif %}
              type=\"{{ button.type|default(\x27submit\x27) }}\"
              {% if button.attributes is defined %}
                {% for key,attribute in button.attributes %}
                  {% if attribute|of_type(\x27array\x27) %}
                    {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
                  {% else %}
                    {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endblock %}

            {% block embed_button_classes %}
              {% block button_classes %}
                class=\"{{ form_button_classes ?: \x27button\x27 }} {{ button.classes }}\"
              {% endblock %}
            {% endblock %}

            {% block embed_button_content -%}
              {%- set button_value = button.value|t|default(\x27Submit\x27) -%}
              {%- if button.html -%}
                {{- button_value|trim|raw -}}
              {%- else -%}
                {{- button_value|trim|e -}}
              {%- endif -%}
            {%- endblock %}

          {% endembed %}

          {% block inner_markup_button_close %}
            {% if button.outerclasses is defined %}</div>{% endif %}
          {% endblock %}

        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}
{% endset %}

{# Embed for HTML layout #}
{% embed \x27forms/layouts/form.html.twig\x27 %}

  {% block embed_form_core %}
    name=\"{{ form.name }}\"
    action=\"{{ action }}\"
    method=\"{{ method }}\"{{ multipart|raw }}
    id=\"{{ form.id|default(form.name|hyphenize) }}\"
    {% if form.novalidate %}novalidate{% endif %}
    {% if form.xhr_submit %}data-xhr-enabled=\"true\"{% endif %}
    {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
    {% if form.attributes is defined %}
      {% for key,attribute in form.attributes %}
        {% if attribute|of_type(\x27array\x27) %}
          {{ attribute.name }}=\"{{ attribute.value|e(\x27html_attr\x27) }}\"
        {% else %}
          {{ key }}=\"{{ attribute|e(\x27html_attr\x27) }}\"
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endblock %}

  {% block embed_form_classes -%}
    class=\"{{ parent() }} {{ override_form_classes|trim }}\"
  {%- endblock %}

  {% block embed_form_custom_attributes %}
    {% for k, v in blueprints.form.attributes %}
      {{ k }}=\"{{ v|e }}\"
    {% endfor %}
  {% endblock %}

  {% block embed_fields %}
    {{ override_inner_markup_fields_start|raw }}
    {{ override_inner_markup_fields|raw }}

    {% if form.isEnabled() ?? true %}
    {% include include_form_field(\x27formname\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27formtask\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27uniqueid\x27, field_layout, \x27hidden\x27) %}
    {% include include_form_field(\x27nonce\x27, field_layout, \x27hidden\x27) %}
    {% endif %}

    {{ override_inner_markup_fields_end|raw }}
  {% endblock %}

  {% block embed_buttons %}
    {{ override_inner_markup_buttons_start|raw }}

    {{ override_inner_markup_buttons|raw }}

    {{ override_inner_markup_buttons_end }}
  {% endblock %}

{% endembed %}

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include \x27forms/dropzone/template.html.twig\x27 %}
</div>
{% endif %}
</div>
", "forms/default/form.html.twig", "/Users/amer/Sites/godc/user/plugins/form/templates/forms/default/form.html.twig");
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
