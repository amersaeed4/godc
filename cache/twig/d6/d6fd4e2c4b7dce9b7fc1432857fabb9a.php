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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/01.endoscopic-ballooning */
class __TwigTemplate_c18e2d444f2dd435529ec13eae2bbbbe_sandboxed extends Template
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
        yield "<p>A <strong>gastric balloon</strong>, also known as <strong>stomach balloon</strong>, is an inflatable <a href=\"https://en.wikipedia.org/wiki/Medical_device\">medical device</a> that is temporarily placed into the <a href=\"https://en.wikipedia.org/wiki/Stomach\">stomach</a> to <a href=\"https://en.wikipedia.org/wiki/Weight_reduction\">reduce weight</a>. It is marketed to provide weight loss when diet and exercise have failed and surgery is not wanted or not recommended.</p>
<p>The balloon limits the amount of food the stomach can hold and creates thereby an early feeling of fullness and satiety. Less intake of food will result in weight loss. After up to six months (or up to twelve months with some newer devices), the device is removed using endoscopy again. Longer stay of a balloon is not advised because of the danger of damage to the tissue wall and degradation of the balloon. The use of the balloon is complemented with counseling and nutritional support or advice.</p>
<p>Endoscopic placement of the balloon is temporary and reversible without surgical incisions. The (intra)gastric balloon for weight loss differs from the <a href=\"https://en.wikipedia.org/wiki/Sengstaken-Blakemore\">Sengstaken-Blakemore</a> balloon used to stop esophageal and gastric bleeding.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/01.endoscopic-ballooning";
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
        return new Source("<p>A <strong>gastric balloon</strong>, also known as <strong>stomach balloon</strong>, is an inflatable <a href=\"https://en.wikipedia.org/wiki/Medical_device\">medical device</a> that is temporarily placed into the <a href=\"https://en.wikipedia.org/wiki/Stomach\">stomach</a> to <a href=\"https://en.wikipedia.org/wiki/Weight_reduction\">reduce weight</a>. It is marketed to provide weight loss when diet and exercise have failed and surgery is not wanted or not recommended.</p>
<p>The balloon limits the amount of food the stomach can hold and creates thereby an early feeling of fullness and satiety. Less intake of food will result in weight loss. After up to six months (or up to twelve months with some newer devices), the device is removed using endoscopy again. Longer stay of a balloon is not advised because of the danger of damage to the tissue wall and degradation of the balloon. The use of the balloon is complemented with counseling and nutritional support or advice.</p>
<p>Endoscopic placement of the balloon is temporary and reversible without surgical incisions. The (intra)gastric balloon for weight loss differs from the <a href=\"https://en.wikipedia.org/wiki/Sengstaken-Blakemore\">Sengstaken-Blakemore</a> balloon used to stop esophageal and gastric bleeding.</p>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/01.endoscopic-ballooning", "");
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
