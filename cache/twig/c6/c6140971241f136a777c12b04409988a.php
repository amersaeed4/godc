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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/02.gastric-banding */
class __TwigTemplate_ed9ad0782b56d174d337e0ff773da6de_sandboxed extends Template
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
        yield "<p>The adjustable gastric band (sometimes known as lap banding) is a purely restrictive procedure. A silicone band is placed around the upper part of the stomach, creating a small pouch above the band, about the size of a golf ball and a large pouch below the band.</p>
<p>This creates an hourglass appearance and it functions by limiting the amount of food you can eat to feel full and by controlling the rate food is allowed to empty out of the pouch into the rest of the stomach. This is at a slower rate than normal and therefore you should feel saturated on smaller amounts of food.</p>
<p>The gastric band can be tightened or loosened and will need adjustment from time to time. An adjustment reduces the size of the opening into the rest of the stomach below the band. This is done via the port (button like) which is connected to the band by a small thin tube and positioned under the skin and fat. This is invisible.</p>
<p>Gastric band adjustments are fairly painless and must be carried out by the surgeon or a specialist nurse until the right restriction for you is established. This can be different for every patient. First fill only can be considered after 6 weeks after surgery at earliest, and most of the times several fills are necessary before the band really is fine-tuned so to yield optimal results. As a band that is tightened too much will cause you a lot of discomfort (vomiting), and when not filled sufficiently, the restriction will not work and the band will yield only poor results in terms of sustainability of the longer term.</p>
<p>The operation takes approximately 45 minutes, will require an overnight stay in hospital and is reversible. Overeating and poor eating habits can cause nausea and vomiting. This may confine your potential to maximize weight loss and may result in band slippage.</p>
<h2>Average weight loss</h2>
<p>50%-60% of excess weight within 2 years (British Medical Journal).</p>
<h2>Risks and Complications</h2>
<ul>
<li>Haemorrhage</li>
<li>Infection</li>
<li>Anaesthetic reactions</li>
<li>Port/tubing problems</li>
<li>Band Slippage</li>
<li>Band Erosion</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/02.gastric-banding";
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
        return new Source("<p>The adjustable gastric band (sometimes known as lap banding) is a purely restrictive procedure. A silicone band is placed around the upper part of the stomach, creating a small pouch above the band, about the size of a golf ball and a large pouch below the band.</p>
<p>This creates an hourglass appearance and it functions by limiting the amount of food you can eat to feel full and by controlling the rate food is allowed to empty out of the pouch into the rest of the stomach. This is at a slower rate than normal and therefore you should feel saturated on smaller amounts of food.</p>
<p>The gastric band can be tightened or loosened and will need adjustment from time to time. An adjustment reduces the size of the opening into the rest of the stomach below the band. This is done via the port (button like) which is connected to the band by a small thin tube and positioned under the skin and fat. This is invisible.</p>
<p>Gastric band adjustments are fairly painless and must be carried out by the surgeon or a specialist nurse until the right restriction for you is established. This can be different for every patient. First fill only can be considered after 6 weeks after surgery at earliest, and most of the times several fills are necessary before the band really is fine-tuned so to yield optimal results. As a band that is tightened too much will cause you a lot of discomfort (vomiting), and when not filled sufficiently, the restriction will not work and the band will yield only poor results in terms of sustainability of the longer term.</p>
<p>The operation takes approximately 45 minutes, will require an overnight stay in hospital and is reversible. Overeating and poor eating habits can cause nausea and vomiting. This may confine your potential to maximize weight loss and may result in band slippage.</p>
<h2>Average weight loss</h2>
<p>50%-60% of excess weight within 2 years (British Medical Journal).</p>
<h2>Risks and Complications</h2>
<ul>
<li>Haemorrhage</li>
<li>Infection</li>
<li>Anaesthetic reactions</li>
<li>Port/tubing problems</li>
<li>Band Slippage</li>
<li>Band Erosion</li>
</ul>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/02.gastric-banding", "");
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
