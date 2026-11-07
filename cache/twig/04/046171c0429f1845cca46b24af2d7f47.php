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

/* @Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/03.roux-en-y-gastric-bypass */
class __TwigTemplate_500a07a68e45c109da741ac48d8aa783_sandboxed extends Template
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
        yield "<h2>Restrictive &amp; Mal-absorptive</h2>
<p><strong>Roux-En-Y Gastric Bypass</strong></p>
<p>The Roux-En-Y Gastric Bypass, is considered the \"gold standard\" of modern obesity surgery</p>
<p>The Roux-En-Y Gastric Bypass is a restrictive procedure combined with a modified gastric bypass that moderately limits calorie and nutrient absorption and may lead to altered food choices. The Roux-En-Y works by decreasing food intake, limiting the amount of food the stomach can hold by closing off a significant portion of the stomach and delaying the emptying of the stomach (gastric pouch).</p>
<p>This procedure is a combination of <strong>restriction and malabsorption</strong> and therefore has a two-way weight reducing effect.</p>
<p>We perform the surgery <strong>laparoscopically</strong>. This means that instead of making a large incision (cut) in your abdomen (belly area) and exposing your organs, your surgeon will make five small incisions around the belly area and insert “ports” to access your digestive system. This method of surgery gives minimal scarring and allows you to heal faster. During the surgery, we do not remove any part of the stomach or intestines from your body, but we do change your digestive system significantly.</p>
<h2>What Happens During ROUX-EN-Y Surgery</h2>
<p>The surgeon will insert a camera into one port and use the other ports to insert the tools he needs to complete the surgery.</p>
<p><strong>During ROUX-EN-Y Surgery:</strong></p>
<ul>
<li>Your surgeon cuts and staples the stomach into 2 sections. The small section at the top will be your new stomach pouch. The larger stomach section stays in place.</li>
<li>Your surgeon cuts the small intestine, where the duodenum meets the jejunum.</li>
<li>Your surgeon moves the open jejunum end up to join the new smaller stomach pouch. The other end of the jejunum is still attached to the rest of intestine.</li>
<li>Finally, your surgeon reconnects the open duodenum end to a new opening made lower down in the small intestine. The other end of the duodenum is still attached to the</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/03.roux-en-y-gastric-bypass";
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
        return new Source("<h2>Restrictive &amp; Mal-absorptive</h2>
<p><strong>Roux-En-Y Gastric Bypass</strong></p>
<p>The Roux-En-Y Gastric Bypass, is considered the \"gold standard\" of modern obesity surgery</p>
<p>The Roux-En-Y Gastric Bypass is a restrictive procedure combined with a modified gastric bypass that moderately limits calorie and nutrient absorption and may lead to altered food choices. The Roux-En-Y works by decreasing food intake, limiting the amount of food the stomach can hold by closing off a significant portion of the stomach and delaying the emptying of the stomach (gastric pouch).</p>
<p>This procedure is a combination of <strong>restriction and malabsorption</strong> and therefore has a two-way weight reducing effect.</p>
<p>We perform the surgery <strong>laparoscopically</strong>. This means that instead of making a large incision (cut) in your abdomen (belly area) and exposing your organs, your surgeon will make five small incisions around the belly area and insert “ports” to access your digestive system. This method of surgery gives minimal scarring and allows you to heal faster. During the surgery, we do not remove any part of the stomach or intestines from your body, but we do change your digestive system significantly.</p>
<h2>What Happens During ROUX-EN-Y Surgery</h2>
<p>The surgeon will insert a camera into one port and use the other ports to insert the tools he needs to complete the surgery.</p>
<p><strong>During ROUX-EN-Y Surgery:</strong></p>
<ul>
<li>Your surgeon cuts and staples the stomach into 2 sections. The small section at the top will be your new stomach pouch. The larger stomach section stays in place.</li>
<li>Your surgeon cuts the small intestine, where the duodenum meets the jejunum.</li>
<li>Your surgeon moves the open jejunum end up to join the new smaller stomach pouch. The other end of the jejunum is still attached to the rest of intestine.</li>
<li>Finally, your surgeon reconnects the open duodenum end to a new opening made lower down in the small intestine. The other end of the duodenum is still attached to the</li>
</ul>", "@Page:/Users/amer/Sites/godc/user/pages/04.our-services/01.obesity-surgery/03.obesity-treatment/02.surgical-approach/03.roux-en-y-gastric-bypass", "");
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
