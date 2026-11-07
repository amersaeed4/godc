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

/* partials/page-card.html.twig */
class __TwigTemplate_ea35ee3675e9322039b14b08dcdd8466_sourced extends Template
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
        $context["img_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "header", [], "any", false, false, false, 3), "card_image", [], "any", false, false, false, 3);
        // line 4
        yield "<a class=\"page-card\" href=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "url", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
  ";
        // line 5
        if (((($tmp = ($context["img_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "media", [], "any", false, false, false, 5)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["img_name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "<span class=\"page-card__media\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(5))->call("img", [($context["card"] ?? null), ($context["img_name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "title", [], "any", false, false, false, 5)], $context, 5, $this->source);
            yield "</span>";
        }
        // line 6
        yield "  <span class=\"page-card__body\">
    <span class=\"page-card__title\">";
        // line 7
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "menu", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "menu", [], "any", false, false, false, 7), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true)));
        yield "</span>
    ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "header", [], "any", false, false, false, 8), "summary", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"page-card__text\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["card"] ?? null), "header", [], "any", false, false, false, 8), "summary", [], "any", false, false, false, 8), "html", null, true);
            yield "</span>";
        }
        // line 9
        yield "    <span class=\"page-card__more\">Learn more ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(9))->call("icon", ["arrow-right"], $context, 9, $this->source);
        yield "</span>
  </span>
</a>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/page-card.html.twig";
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
        return array (  76 => 9,  70 => 8,  66 => 7,  63 => 6,  57 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# A card linking to another page. Param: card (page) #}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% set img_name = card.header.card_image %}
<a class=\"page-card\" href=\"{{ card.url }}\">
  {% if img_name and card.media[img_name] %}<span class=\"page-card__media\">{{ ui.img(card, img_name, card.title) }}</span>{% endif %}
  <span class=\"page-card__body\">
    <span class=\"page-card__title\">{{ card.menu ?: card.title }}</span>
    {% if card.header.summary %}<span class=\"page-card__text\">{{ card.header.summary }}</span>{% endif %}
    <span class=\"page-card__more\">Learn more {{ ui.icon(\x27arrow-right\x27) }}</span>
  </span>
</a>
", "partials/page-card.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/page-card.html.twig");
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
