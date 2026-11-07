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

/* @Page:/Users/amer/Sites/godc/user/pages/05.for-patients/05.patient-guide */
class __TwigTemplate_287cf83ceed3043b3cd3d099bfe9d8f8_sandboxed extends Template
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
        yield "<h2>Patient Guides</h2>
<p>Access helpful tools, educational resources, and expert guidance designed to help patients, families, and caregivers better understand their condition, treatment options, and what to expect throughout their healthcare journey. Our goal is to empower you with the knowledge and support needed to make informed health decisions.</p>
<h2>Preparing for Your Visit</h2>
<p>To help us provide the best care, please bring any relevant medical reports, laboratory results, medication lists, and previous dietary plans. Completing your patient forms before arrival can also help save time during check-in.</p>
<h3>What to Bring</h3>
<ul>
<li>Identification Card</li>
<li>Medical Reports</li>
<li>Recent Lab Results</li>
<li>Current Medications List</li>
<li>Insurance Information (if applicable)</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/05.for-patients/05.patient-guide";
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
        return new Source("<h2>Patient Guides</h2>
<p>Access helpful tools, educational resources, and expert guidance designed to help patients, families, and caregivers better understand their condition, treatment options, and what to expect throughout their healthcare journey. Our goal is to empower you with the knowledge and support needed to make informed health decisions.</p>
<h2>Preparing for Your Visit</h2>
<p>To help us provide the best care, please bring any relevant medical reports, laboratory results, medication lists, and previous dietary plans. Completing your patient forms before arrival can also help save time during check-in.</p>
<h3>What to Bring</h3>
<ul>
<li>Identification Card</li>
<li>Medical Reports</li>
<li>Recent Lab Results</li>
<li>Current Medications List</li>
<li>Insurance Information (if applicable)</li>
</ul>", "@Page:/Users/amer/Sites/godc/user/pages/05.for-patients/05.patient-guide", "");
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
