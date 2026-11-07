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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/05.sleeve-gastrectomy */
class __TwigTemplate_d07fc6000e705e4b7b20558f380199cf_sandboxed extends Template
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
        yield "<p><strong>Laparoscopic Sleeve Gastrectomy</strong></p>
<p>This surgery is the most common surgery performed. The Vertical Sleeve gastrectomy (VSG) is a restrictive and hormonal procedure. During the procedure approximately 60-85% of the stomach is removed, creating a “sleeve” or tubular stomach and will hold approximately 100ml of food or drink. This surgery not only physically makes your stomach smaller; it also removes 75-85% of the hunger hormones produced in your stomach from circulation. The procedure is done by laparoscopy. Because part of the stomach is removed, this procedure is not reversible.</p>
<p><strong>Procedure:</strong> During Sleeve gastrectomy, the right side of the stomach is completely removed. This leaves a sleeve or tubular shaped stomach. The remaining volume is about 60-110 cc. No reconnection needs to be made with the intestines. No foreign object is implanted in the body.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/05.sleeve-gastrectomy";
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
        return new Source("<p><strong>Laparoscopic Sleeve Gastrectomy</strong></p>
<p>This surgery is the most common surgery performed. The Vertical Sleeve gastrectomy (VSG) is a restrictive and hormonal procedure. During the procedure approximately 60-85% of the stomach is removed, creating a “sleeve” or tubular stomach and will hold approximately 100ml of food or drink. This surgery not only physically makes your stomach smaller; it also removes 75-85% of the hunger hormones produced in your stomach from circulation. The procedure is done by laparoscopy. Because part of the stomach is removed, this procedure is not reversible.</p>
<p><strong>Procedure:</strong> During Sleeve gastrectomy, the right side of the stomach is completely removed. This leaves a sleeve or tubular shaped stomach. The remaining volume is about 60-110 cc. No reconnection needs to be made with the intestines. No foreign object is implanted in the body.</p>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/05.sleeve-gastrectomy", "");
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
