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

/* partials/base.html.twig */
class __TwigTemplate_db7291e88bbe2a97201a1301f432b8a3_sourced extends Template
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
            'head_extra' => [$this, 'block_head_extra'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 1), "iham", [], "any", false, false, false, 1);
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        yield from $this->load("partials/seo.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
    <link rel=\"preload\" href=\"";
        // line 9
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://fonts/Poppins-400.woff2"), "html", null, true);
        yield "\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" href=\"";
        // line 10
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://fonts/PlayfairDisplay-600.woff2"), "html", null, true);
        yield "\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://css/fonts.css"), "html", null, true);
        yield "?v=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://css/theme.css"), "html", null, true);
        yield "?v=";
        yield (string) (((array_key_exists("theme_version", $context) &&  !(null === $context["theme_version"]))) ? ($this->escaper->escape($context["theme_version"], "html", null, true)) : ("1"));
        yield "\">
    <script>document.documentElement.classList.replace(\x27no-js\x27,\x27js\x27)</script>
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('head_extra', $context, $blocks);
        // line 15
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 15);
        yield "
</head>
<body class=\"tpl-";
        // line 17
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 17), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-home";
        }
        yield "\">
<a class=\"skip-link\" href=\"#main\">Skip to main content</a>
";
        // line 19
        yield from $this->load("partials/icons.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield from $this->load("partials/header.html.twig", 20)->unwrap()->yield($context);
        // line 21
        yield "
<main id=\"main\">
    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 24
        yield "</main>

";
        // line 26
        yield from $this->load("partials/footer.html.twig", 26)->unwrap()->yield($context);
        // line 27
        yield "
";
        // line 28
        $context["cta_link"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 28), "cta_link", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 28), "cta_link", [], "any", false, false, false, 28)) : ("/book-a-consultation"));
        // line 29
        yield "<div class=\"mobile-bar\" role=\"navigation\" aria-label=\"Quick actions\">
    <a class=\"mobile-bar__call\" href=\"tel:";
        // line 30
        yield (string) $this->escaper->escape($this->env->getFilter('tel')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "contact", [], "any", false, false, false, 30), "phone", [], "any", false, false, false, 30)), "html", null, true);
        yield "\">";
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 30)->unwrap()->getMacroNamespace();
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(30))->call("icon", ["phone"], $context, 30, $this->source);
        yield " Call</a>
    <a class=\"mobile-bar__book\" href=\"";
        // line 31
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()(($context["cta_link"] ?? null)), "html", null, true);
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("icon", ["calendar"], $context, 31, $this->source);
        yield " ";
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 31), "cta_label", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "header", [], "any", false, false, false, 31), "cta_label", [], "any", false, false, false, 31), "html", null, true)) : ("Book an Appointment"));
        yield "</a>
</div>

<script src=\"";
        // line 34
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://js/theme.js"), "html", null, true);
        yield "?v=1\" defer></script>
";
        // line 35
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, false, 35);
        yield "
";
        // line 36
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 37
        yield "</body>
</html>
";
        return; yield;
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  178 => 36,  168 => 23,  158 => 14,  151 => 37,  149 => 36,  145 => 35,  141 => 34,  131 => 31,  124 => 30,  121 => 29,  119 => 28,  116 => 27,  114 => 26,  110 => 24,  108 => 23,  104 => 21,  102 => 20,  100 => 19,  92 => 17,  86 => 15,  84 => 14,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  53 => 2,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set theme = config.themes.iham %}
<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include \x27partials/seo.html.twig\x27 %}

    <link rel=\"preload\" href=\"{{ url(\x27theme://fonts/Poppins-400.woff2\x27) }}\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" href=\"{{ url(\x27theme://fonts/PlayfairDisplay-600.woff2\x27) }}\" as=\"font\" type=\"font/woff2\" crossorigin>
    <link rel=\"stylesheet\" href=\"{{ url(\x27theme://css/fonts.css\x27) }}?v=1\">
    <link rel=\"stylesheet\" href=\"{{ url(\x27theme://css/theme.css\x27) }}?v={{ theme_version ?? \x271\x27 }}\">
    <script>document.documentElement.classList.replace(\x27no-js\x27,\x27js\x27)</script>
    {% block head_extra %}{% endblock %}
    {{ assets.css()|raw }}
</head>
<body class=\"tpl-{{ page.template }}{% if page.home %} is-home{% endif %}\">
<a class=\"skip-link\" href=\"#main\">Skip to main content</a>
{% include \x27partials/icons.html.twig\x27 %}
{% include \x27partials/header.html.twig\x27 %}

<main id=\"main\">
    {% block content %}{% endblock %}
</main>

{% include \x27partials/footer.html.twig\x27 %}

{% set cta_link = theme.header.cta_link ?: \x27/book-a-consultation\x27 %}
<div class=\"mobile-bar\" role=\"navigation\" aria-label=\"Quick actions\">
    <a class=\"mobile-bar__call\" href=\"tel:{{ theme.contact.phone|tel }}\">{% import \x27macros/ui.html.twig\x27 as ui %}{{ ui.icon(\x27phone\x27) }} Call</a>
    <a class=\"mobile-bar__book\" href=\"{{ cta_link|href }}\">{{ ui.icon(\x27calendar\x27) }} {{ theme.header.cta_label ?: \x27Book an Appointment\x27 }}</a>
</div>

<script src=\"{{ url(\x27theme://js/theme.js\x27) }}?v=1\" defer></script>
{{ assets.js()|raw }}
{% block scripts %}{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/base.html.twig");
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
