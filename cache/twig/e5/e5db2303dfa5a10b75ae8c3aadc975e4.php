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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/04.mini-gastric-bypass */
class __TwigTemplate_eca340a43cb2d0f2f31103b14156c3fc_sandboxed extends Template
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
        yield "<p>Mini-Gastric Bypass or The Omega Loop Gastric Bypass or Single Anastomose Gastric Bypass is a combination of restriction and malabsorption and therefore has a two-way weight reducing effect. This variation of a classic gastric bypass (Roux-en-y) has a different site of connection between the small bowel and the stomach with a single anastomosis, and features a longer gastric pouch.</p>
<p>The Omega Loop Gastric Bypass works by decreasing food intake, limiting the amount of food the stomach can hold by closing off a significant portion of the stomach and delaying the emptying of the stomach (gastric pouch). This results in a longer fullness feeling. Contrasting the classic gastric bypass there is also a more pronounced malabsorption, mainly from fats.</p>
<p><strong>The procedure is fully reversible</strong></p>
<p>The Omega Loop Gastric Bypass achieves its effects by creating a small elongated stomach pouch from which the rest of the stomach is permanently divided and separated. Below the staple line the stomach keeps obtained but no food will enter here. The stomach will still produce gastric juices and enzymes essential for digestion and absorption of nutrients. The small intestine with these enzymes is connected with a single anastomosis after about 6,5 foot as an outlet to the stomach pouch.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/04.mini-gastric-bypass";
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
        return new Source("<p>Mini-Gastric Bypass or The Omega Loop Gastric Bypass or Single Anastomose Gastric Bypass is a combination of restriction and malabsorption and therefore has a two-way weight reducing effect. This variation of a classic gastric bypass (Roux-en-y) has a different site of connection between the small bowel and the stomach with a single anastomosis, and features a longer gastric pouch.</p>
<p>The Omega Loop Gastric Bypass works by decreasing food intake, limiting the amount of food the stomach can hold by closing off a significant portion of the stomach and delaying the emptying of the stomach (gastric pouch). This results in a longer fullness feeling. Contrasting the classic gastric bypass there is also a more pronounced malabsorption, mainly from fats.</p>
<p><strong>The procedure is fully reversible</strong></p>
<p>The Omega Loop Gastric Bypass achieves its effects by creating a small elongated stomach pouch from which the rest of the stomach is permanently divided and separated. Below the staple line the stomach keeps obtained but no food will enter here. The stomach will still produce gastric juices and enzymes essential for digestion and absorption of nutrients. The small intestine with these enzymes is connected with a single anastomosis after about 6,5 foot as an outlet to the stomach pouch.</p>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/04.mini-gastric-bypass", "");
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
