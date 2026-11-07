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

/* partials/post-card.html.twig */
class __TwigTemplate_919f22df89c4781f0b2753c67383b3d8_sourced extends Template
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
        yield "<article class=\"post-card\">
  <a class=\"post-card__media\" href=\"";
        // line 3
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 3), "html", null, true);
        yield "\" tabindex=\"-1\" aria-hidden=\"true\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(3))->call("img", [($context["post"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "header", [], "any", false, false, false, 3), "image", [], "any", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 3)], $context, 3, $this->source);
        yield "</a>
  <div class=\"post-card__body\">
    <p class=\"post-card__meta\"><time datetime=\"";
        // line 5
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "date", [], "any", false, false, false, 5), "Y-m-d"), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "date", [], "any", false, false, false, 5), "F j, Y"), "html", null, true);
        yield "</time></p>
    <h3 class=\"post-card__title\"><a href=\"";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 6), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield "</a></h3>
    <p class=\"post-card__text\">";
        // line 7
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "header", [], "any", false, false, false, 7), "summary", [], "any", false, false, false, 7), "html", null, true);
        yield "</p>
    <a class=\"link-arrow\" href=\"";
        // line 8
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 8), "html", null, true);
        yield "\">Read more ";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(8))->call("icon", ["arrow-right"], $context, 8, $this->source);
        yield "</a>
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
        return "partials/post-card.html.twig";
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
        return array (  76 => 8,  72 => 7,  66 => 6,  60 => 5,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
<article class=\"post-card\">
  <a class=\"post-card__media\" href=\"{{ post.url }}\" tabindex=\"-1\" aria-hidden=\"true\">{{ ui.img(post, post.header.image, post.title) }}</a>
  <div class=\"post-card__body\">
    <p class=\"post-card__meta\"><time datetime=\"{{ post.date|date(\x27Y-m-d\x27) }}\">{{ post.date|date(\x27F j, Y\x27) }}</time></p>
    <h3 class=\"post-card__title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
    <p class=\"post-card__text\">{{ post.header.summary }}</p>
    <a class=\"link-arrow\" href=\"{{ post.url }}\">Read more {{ ui.icon(\x27arrow-right\x27) }}</a>
  </div>
</article>
", "partials/post-card.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/post-card.html.twig");
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
