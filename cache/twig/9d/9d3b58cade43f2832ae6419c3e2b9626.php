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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach */
class __TwigTemplate_c3f2dd8581b3b23a1c58b4b8be98f92a_sandboxed extends Template
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
        yield "<h2>Adjustment Diets</h2>
<p>To control the weight, patients need to reduce the <strong>caloric intake</strong> to a level lower than the caloric consumption. This asks for food adjustments without causing food shortage. Less calories does not always mean less quantities of food. The composition of the food is the most important thing. That is why patients need to see a dietician.</p>
<p><img alt=\"Non-Surgical Approach\" src=\"/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach/New-Project-19-2.webp\" /></p>
<h2>Physical Exercise</h2>
<p>Also the <strong>consumption of calories</strong> is very important. This can be stimulated by physical exercises. An exercise from minimum 30 minutes a day (on top of your daily activities) and a moderate intensity. For example, walking, swimming, running.</p>
<h2>Medication</h2>
<p>The medication reduces the absorption of fat. Different studies show that medication used for obesity, results in a very little weight loss.</p>
<p><img alt=\"Non-Surgical Approach\" src=\"/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach/New-Project-26.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach";
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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h2>Adjustment Diets</h2>
<p>To control the weight, patients need to reduce the <strong>caloric intake</strong> to a level lower than the caloric consumption. This asks for food adjustments without causing food shortage. Less calories does not always mean less quantities of food. The composition of the food is the most important thing. That is why patients need to see a dietician.</p>
<p><img alt=\"Non-Surgical Approach\" src=\"/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach/New-Project-19-2.webp\" /></p>
<h2>Physical Exercise</h2>
<p>Also the <strong>consumption of calories</strong> is very important. This can be stimulated by physical exercises. An exercise from minimum 30 minutes a day (on top of your daily activities) and a moderate intensity. For example, walking, swimming, running.</p>
<h2>Medication</h2>
<p>The medication reduces the absorption of fat. Different studies show that medication used for obesity, results in a very little weight loss.</p>
<p><img alt=\"Non-Surgical Approach\" src=\"/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach/New-Project-26.jpg\" /></p>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/01.non-surgical-approach", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
