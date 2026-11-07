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

/* partials/doctor-feature.html.twig */
class __TwigTemplate_da2a227b1fc8826ffdd0154d13664495_sourced extends Template
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
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 3
        $context["pr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "header", [], "any", false, false, false, 3), "profile", [], "any", false, false, false, 3);
        // line 4
        yield "<article class=\"doctor-feature";
        yield (string) (((($tmp = ($context["featured"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" doctor-feature--lead") : (""));
        yield "\">
  <a class=\"doctor-feature__photo\" href=\"";
        // line 5
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "url", [], "any", false, false, false, 5), "html", null, true);
        yield "\" tabindex=\"-1\" aria-hidden=\"true\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(5))->call("img", [($context["dp"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "image", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 5), "", ($context["featured"] ?? null)], $context, 5, $this->source);
        yield "</a>
  <div class=\"doctor-feature__body\">
    <p class=\"doctor-feature__tag\">";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "tagline", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
    <h3><a href=\"";
        // line 8
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "url", [], "any", false, false, false, 8), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "</a></h3>
    <p class=\"doctor-feature__role\">";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "role", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
    ";
        // line 10
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "bio", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"doctor-feature__bio\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "bio", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>";
        }
        // line 11
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "chips", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<ul class=\"chip-list\">";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFilter('lines')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pr"] ?? null), "chips", [], "any", false, false, false, 11)));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                yield "<li>";
                yield (string) $this->escaper->escape($context["c"], "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            yield "</ul>";
        }
        // line 12
        yield "    <div class=\"btn-row\">
      <a class=\"btn btn-primary\" href=\"";
        // line 13
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["dp"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "\">View profile ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("icon", ["arrow-right"], $context, 13, $this->source);
        yield "</a>
      <a class=\"btn btn-outline\" href=\"";
        // line 14
        yield (string) $this->escaper->escape($this->env->getFilter('href')->getCallable()("/book-a-consultation"), "html", null, true);
        yield "\">Book an appointment</a>
    </div>
  </div>
</article>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/doctor-feature.html.twig";
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
        return array (  110 => 14,  104 => 13,  101 => 12,  84 => 11,  78 => 10,  74 => 9,  68 => 8,  64 => 7,  57 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Large doctor profile card. Params: dp (doctor page), featured (bool) #}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% set pr = dp.header.profile %}
<article class=\"doctor-feature{{ featured ? \x27 doctor-feature--lead\x27 : \x27\x27 }}\">
  <a class=\"doctor-feature__photo\" href=\"{{ dp.url }}\" tabindex=\"-1\" aria-hidden=\"true\">{{ ui.img(dp, pr.image, pr.name, \x27\x27, featured) }}</a>
  <div class=\"doctor-feature__body\">
    <p class=\"doctor-feature__tag\">{{ pr.tagline }}</p>
    <h3><a href=\"{{ dp.url }}\">{{ pr.name }}</a></h3>
    <p class=\"doctor-feature__role\">{{ pr.role }}</p>
    {% if pr.bio %}<p class=\"doctor-feature__bio\">{{ pr.bio }}</p>{% endif %}
    {% if pr.chips %}<ul class=\"chip-list\">{% for c in pr.chips|lines %}<li>{{ c }}</li>{% endfor %}</ul>{% endif %}
    <div class=\"btn-row\">
      <a class=\"btn btn-primary\" href=\"{{ dp.url }}\">View profile {{ ui.icon(\x27arrow-right\x27) }}</a>
      <a class=\"btn btn-outline\" href=\"{{ \x27/book-a-consultation\x27|href }}\">Book an appointment</a>
    </div>
  </div>
</article>
", "partials/doctor-feature.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/doctor-feature.html.twig");
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
