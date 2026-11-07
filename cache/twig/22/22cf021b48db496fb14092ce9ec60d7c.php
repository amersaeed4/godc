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

/* @Page:/Users/amer/Sites/godc/user/pages/03.about-us/02.our-team */
class __TwigTemplate_882958c5178764ba731c2c8c05535d4f_sandboxed extends Template
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
        yield "<h2>Management</h2>
<ul>
<li><strong>Ayeza Akhtar Randhawa</strong> — President</li>
<li><strong>Prof Dr. Muhammad Mohsin Gillani</strong> — CEO</li>
<li><strong>Naleem Mohsin</strong> — Director</li>
<li><strong>Batool Fatima</strong> — Director</li>
<li><strong>Nafeesa Akhtar</strong> — Director</li>
<li><strong>Amer Saeed</strong> — Marketing Head</li>
</ul>
<h2>Medical &amp; support team</h2>
<ul>
<li><strong>Prof. Dr. Muhammad Mohsin Gillani</strong> — Advanced Laparoscopic / Bariatric Surgeon</li>
<li><strong>Dr. Salman Akhtar</strong> — Advanced Laparoscopic / Bariatric Surgeon</li>
<li><strong>Dr. Ghias Ul Hassan</strong> — Gastroenterologist</li>
<li><strong>Dr. Sana Ullah</strong> — Urologist</li>
<li><strong>Prof. Dr. Yahya Saeed</strong> — Anesthetist / Intensivist</li>
<li><strong>Fatima</strong> — Dietitian / Nutritionist</li>
<li><strong>Dr Javed Iqbal</strong> — Endocrinologist</li>
<li><strong>Fatima Batool</strong> — Medical Assistant / Coordinator</li>
<li><strong>Naleem Mohsin</strong> — H&amp;T</li>
<li><strong>Ayeza Randawa</strong> — Medical Tourism</li>
<li><strong>Prof. Mohsin Gillani</strong> — Medical Tourism</li>
<li><strong>Fatima Batool</strong> — Medical Tourism</li>
<li><strong>Dr. Ahsan Riaz</strong> — Beauty &amp; Body Reshaping</li>
<li><strong>Arezo Kanani</strong> — Gastrosurgery &amp; Urological Surgeon</li>
<li><strong>Mona Khan</strong> — General Medicine</li>
<li><strong>Nafeesa Akhtar</strong> — Neurosurgery</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/godc/user/pages/03.about-us/02.our-team";
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
        return new Source("<h2>Management</h2>
<ul>
<li><strong>Ayeza Akhtar Randhawa</strong> — President</li>
<li><strong>Prof Dr. Muhammad Mohsin Gillani</strong> — CEO</li>
<li><strong>Naleem Mohsin</strong> — Director</li>
<li><strong>Batool Fatima</strong> — Director</li>
<li><strong>Nafeesa Akhtar</strong> — Director</li>
<li><strong>Amer Saeed</strong> — Marketing Head</li>
</ul>
<h2>Medical &amp; support team</h2>
<ul>
<li><strong>Prof. Dr. Muhammad Mohsin Gillani</strong> — Advanced Laparoscopic / Bariatric Surgeon</li>
<li><strong>Dr. Salman Akhtar</strong> — Advanced Laparoscopic / Bariatric Surgeon</li>
<li><strong>Dr. Ghias Ul Hassan</strong> — Gastroenterologist</li>
<li><strong>Dr. Sana Ullah</strong> — Urologist</li>
<li><strong>Prof. Dr. Yahya Saeed</strong> — Anesthetist / Intensivist</li>
<li><strong>Fatima</strong> — Dietitian / Nutritionist</li>
<li><strong>Dr Javed Iqbal</strong> — Endocrinologist</li>
<li><strong>Fatima Batool</strong> — Medical Assistant / Coordinator</li>
<li><strong>Naleem Mohsin</strong> — H&amp;T</li>
<li><strong>Ayeza Randawa</strong> — Medical Tourism</li>
<li><strong>Prof. Mohsin Gillani</strong> — Medical Tourism</li>
<li><strong>Fatima Batool</strong> — Medical Tourism</li>
<li><strong>Dr. Ahsan Riaz</strong> — Beauty &amp; Body Reshaping</li>
<li><strong>Arezo Kanani</strong> — Gastrosurgery &amp; Urological Surgeon</li>
<li><strong>Mona Khan</strong> — General Medicine</li>
<li><strong>Nafeesa Akhtar</strong> — Neurosurgery</li>
</ul>", "@Page:/Users/amer/Sites/godc/user/pages/03.about-us/02.our-team", "");
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
