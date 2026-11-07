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

/* partials/form-messages.html.twig */
class __TwigTemplate_976607f5ad3b71f75b7698330722f784_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            $context["inline_errors"] = (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inline_errors", [], "any", false, false, false, 2)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2), "inline_errors", [false], "method", false, false, false, 2)));
            // line 3
            yield "  ";
            $context["message"] = ((((($tmp = ($context["inline_errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "messages", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("Please check the highlighted fields and try again.") : (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 3)));
            // line 4
            yield "  <div class=\"form-messages\" role=\"status\" aria-live=\"polite\">
    <div class=\"notice notice--";
            // line 5
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 5) == "error")) ? ("error") : ("success"));
            yield "\">";
            yield (string) ($context["message"] ?? null);
            yield "</div>
  </div>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/form-messages.html.twig";
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
        return array (  56 => 5,  53 => 4,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if form.message %}
  {% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}
  {% set message = (inline_errors and form.messages) ? \x27Please check the highlighted fields and try again.\x27 : form.message %}
  <div class=\"form-messages\" role=\"status\" aria-live=\"polite\">
    <div class=\"notice notice--{{ form.status == \x27error\x27 ? \x27error\x27 : \x27success\x27 }}\">{{ message|raw }}</div>
  </div>
{% endif %}
", "partials/form-messages.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/form-messages.html.twig");
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
