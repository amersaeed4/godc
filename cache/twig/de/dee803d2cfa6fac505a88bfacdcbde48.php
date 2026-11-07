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

/* partials/seo.html.twig */
class __TwigTemplate_c7ed1817dd66f7ee964421deaf981dca_sourced extends Template
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
        // line 2
        $context["seo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 2), "iham", [], "any", false, false, false, 2), "seo", [], "any", false, false, false, 2);
        // line 3
        $context["contact"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 3), "iham", [], "any", false, false, false, 3), "contact", [], "any", false, false, false, 3);
        // line 4
        $context["brand"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 4), "iham", [], "any", false, false, false, 4), "brand", [], "any", false, false, false, 4);
        // line 5
        $context["site_name"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "site_name", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "site_name", [], "any", false, false, false, 5)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 5)));
        // line 6
        $context["sep"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "title_separator", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "title_separator", [], "any", false, false, false, 6)) : ("|"));
        // line 7
        $context["is_home"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 7);
        // line 8
        $context["page_title"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "seo_title", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 8), "seo_title", [], "any", false, false, false, 8)) : ((((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((($context["site_name"] ?? null) . " – ") . CoreExtension::getAttribute($this->env, $this->source, ($context["brand"] ?? null), "tagline", [], "any", false, false, false, 8))) : (((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 8) . " ") . ($context["sep"] ?? null)) . " ") . ($context["site_name"] ?? null))))));
        // line 9
        $context["desc_raw"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, true, false, 9), "description", [], "any", false, true, false, 9), "content", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "content", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9), "content", [], "any", false, false, false, 9)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 9), "metadata", [], "any", false, true, false, 9), "description", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "metadata", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "metadata", [], "any", false, false, false, 9), "description", [], "any", false, false, false, 9)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 9), "summary", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "summary", [], "any", false, false, false, 9)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "summary", [], "any", false, false, false, 9)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "default_description", [], "any", false, false, false, 9)))))));
        // line 10
        $context["desc"] = $this->env->getFilter('plain')->getCallable()((((($tmp = ($context["desc_raw"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["desc_raw"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "default_description", [], "any", false, false, false, 10))), 165);
        // line 11
        $context["canon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "canonical", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "canonical", [], "any", false, false, false, 11)) : ((((($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 11)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 11)))));
        // line 12
        $context["robots"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "robots", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "robots", [], "any", false, false, false, 12)) : ("index,follow"));
        // line 13
        $context["og_name"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "og_image", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "og_image", [], "any", false, false, false, 13)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "card_image", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "card_image", [], "any", false, false, false, 13)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "hero", [], "any", false, false, false, 13), "image", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "hero", [], "any", false, false, false, 13), "image", [], "any", false, false, false, 13)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 13), "image", [], "any", false, false, false, 13)))))));
        // line 14
        $context["og_media"] = (((($tmp = ($context["og_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["og_name"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 15
        if ((($tmp = ($context["og_media"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "  ";
            $context["og_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["og_media"] ?? null), "url", [], "any", false, false, false, 16);
        } elseif ((is_iterable(CoreExtension::getAttribute($this->env, $this->source,         // line 17
($context["seo"] ?? null), "og_image", [], "any", false, false, false, 17)) && (($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "og_image", [], "any", false, false, false, 17))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 18
            yield "  ";
            $context["og_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, ("theme://images/uploads/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "og_image", [], "any", false, false, false, 18)), "name", [], "any", false, false, false, 18)), true);
        } else {
            // line 20
            yield "  ";
            $context["og_url"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/logo-og.png", true);
        }
        // line 22
        if ((is_string($_v2 = ($context["og_url"] ?? null)) && is_string($_v3 = "/") && str_starts_with($_v2, $_v3))) {
            $context["og_url"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 22) . ($context["og_url"] ?? null));
        }
        // line 23
        yield "<title>";
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html");
        yield "</title>
<meta name=\"description\" content=\"";
        // line 24
        yield (string) $this->escaper->escape(($context["desc"] ?? null), "html_attr");
        yield "\">
";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "metadata", [], "any", false, false, false, 25), "keywords", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"keywords\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 25), "metadata", [], "any", false, false, false, 25), "keywords", [], "any", false, false, false, 25), "html_attr");
            yield "\">";
        }
        // line 26
        yield "<meta name=\"robots\" content=\"";
        yield (string) $this->escaper->escape(($context["robots"] ?? null), "html", null, true);
        yield (string) (((is_string($_v4 = ($context["robots"] ?? null)) && is_string($_v5 = "noindex") && str_starts_with($_v4, $_v5))) ? ("") : (",max-image-preview:large,max-snippet:-1"));
        yield "\">
<link rel=\"canonical\" href=\"";
        // line 27
        yield (string) $this->escaper->escape(($context["canon"] ?? null), "html", null, true);
        yield "\">
<meta name=\"author\" content=\"";
        // line 28
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "author", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "author", [], "any", false, false, false, 28), "html", null, true)) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["brand"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true)));
        yield "\">
";
        // line 29
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "google_site_verification", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"google-site-verification\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "google_site_verification", [], "any", false, false, false, 29), "html", null, true);
            yield "\">";
        }
        // line 30
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "bing_site_verification", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"msvalidate.01\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "bing_site_verification", [], "any", false, false, false, 30), "html", null, true);
            yield "\">";
        }
        // line 31
        yield "<meta name=\"theme-color\" content=\"#152822\">

<link rel=\"icon\" href=\"";
        // line 33
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/favicon.ico"), "html", null, true);
        yield "\" sizes=\"any\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 34
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/favicon-32.png"), "html", null, true);
        yield "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 35
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/favicon-192.png"), "html", null, true);
        yield "\">
<link rel=\"apple-touch-icon\" href=\"";
        // line 36
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/apple-touch-icon.png"), "html", null, true);
        yield "\">

<meta property=\"og:site_name\" content=\"";
        // line 38
        yield (string) $this->escaper->escape(($context["site_name"] ?? null), "html_attr");
        yield "\">
<meta property=\"og:locale\" content=\"en_US\">
<meta property=\"og:type\" content=\"";
        // line 40
        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 40) == "post")) ? ("article") : ("website"));
        yield "\">
<meta property=\"og:title\" content=\"";
        // line 41
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html_attr");
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 42
        yield (string) $this->escaper->escape(($context["desc"] ?? null), "html_attr");
        yield "\">
<meta property=\"og:url\" content=\"";
        // line 43
        yield (string) $this->escaper->escape(($context["canon"] ?? null), "html", null, true);
        yield "\">
<meta property=\"og:image\" content=\"";
        // line 44
        yield (string) $this->escaper->escape(($context["og_url"] ?? null), "html", null, true);
        yield "\">
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"";
        // line 46
        yield (string) $this->escaper->escape(($context["page_title"] ?? null), "html_attr");
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 47
        yield (string) $this->escaper->escape(($context["desc"] ?? null), "html_attr");
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 48
        yield (string) $this->escaper->escape(($context["og_url"] ?? null), "html", null, true);
        yield "\">
";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "twitter_handle", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<meta name=\"twitter:site\" content=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "twitter_handle", [], "any", false, false, false, 49), "html", null, true);
            yield "\">";
        }
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 50) == "post")) {
            // line 51
            yield "<meta property=\"article:published_time\" content=\"";
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 51), "c"), "html", null, true);
            yield "\">
<meta property=\"article:modified_time\" content=\"";
            // line 52
            yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modified", [], "any", false, false, false, 52), "c"), "html", null, true);
            yield "\">
";
        }
        // line 54
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 54) == "blog") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "any", false, false, false, 54), "params", [], "any", false, false, false, 54), "pagination", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
        }
        // line 55
        yield "
";
        // line 57
        $context["base"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "rootUrl", [true], "method", false, false, false, 57);
        // line 58
        $context["same_as"] = [];
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "themes", [], "any", false, false, false, 59), "iham", [], "any", false, false, false, 59), "social", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            if ((($tmp = $context["v"]) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["same_as"] = Twig\Extension\CoreExtension::merge(($context["same_as"] ?? null), [$context["v"]]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        $context["logo_abs"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlGuarded(false, "theme://images/logo-og.png", true);
        // line 61
        $context["org"] = ["@type" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["seo"] ?? null), "business_type", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "business_type", [], "any", false, false, false, 62)) : ("MedicalClinic")), "@id" => (        // line 63
($context["base"] ?? null) . "/#organization"), "name" => CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["brand"] ?? null), "name", [], "any", false, false, false, 64), "url" => (        // line 65
($context["base"] ?? null) . "/"), "logo" =>         // line 66
($context["logo_abs"] ?? null), "image" =>         // line 67
($context["og_url"] ?? null), "telephone" => CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["contact"] ?? null), "phone", [], "any", false, false, false, 68), "email" => CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["contact"] ?? null), "email", [], "any", false, false, false, 69), "description" => $this->env->getFilter('plain')->getCallable()(CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["seo"] ?? null), "default_description", [], "any", false, false, false, 70)), "address" => ["@type" => "PostalAddress", "streetAddress" => CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["contact"] ?? null), "address", [], "any", false, false, false, 71), "addressLocality" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "locality", [], "any", false, false, false, 71), "addressRegion" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "region", [], "any", false, false, false, 71), "addressCountry" => CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "country", [], "any", false, false, false, 71)], "medicalSpecialty" => ["Lifestyle Medicine", "Clinical Nutrition"], "sameAs" =>         // line 73
($context["same_as"] ?? null)];
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "price_range", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            $context["org"] = Twig\Extension\CoreExtension::merge(($context["org"] ?? null), ["priceRange" => CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "price_range", [], "any", false, false, false, 75)]);
        }
        // line 76
        $context["graph"] = [($context["org"] ?? null), ["@type" => "WebSite", "@id" => (($context["base"] ?? null) . "/#website"), "url" => (($context["base"] ?? null) . "/"), "name" => ($context["site_name"] ?? null), "publisher" => ["@id" => (($context["base"] ?? null) . "/#organization")], "inLanguage" => "en"]];
        // line 77
        yield "
";
        // line 79
        $context["crumbs"] = [];
        // line 80
        $context["cp"] = ($context["page"] ?? null);
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (((($tmp = ($context["cp"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "parent", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                $context["crumbs"] = Twig\Extension\CoreExtension::merge([["name" => CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "title", [], "any", false, false, false, 81), "url" => CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "url", [true, true], "method", false, false, false, 81)]], ($context["crumbs"] ?? null));
                $context["cp"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cp"] ?? null), "parent", [], "any", false, false, false, 81);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 82
        if ( !(($tmp = ($context["is_home"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "  ";
            $context["crumbs"] = Twig\Extension\CoreExtension::merge([["name" => "Home", "url" => (($context["base"] ?? null) . "/")]], ($context["crumbs"] ?? null));
            // line 84
            yield "  ";
            $context["items"] = [];
            // line 85
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["crumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                $context["items"] = Twig\Extension\CoreExtension::merge(($context["items"] ?? null), [["@type" => "ListItem", "position" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 85), "item" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 85)]]);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 86
            yield "  ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "BreadcrumbList", "itemListElement" => ($context["items"] ?? null)]]);
        }
        // line 88
        yield "
";
        // line 90
        $context["wp_type"] = "WebPage";
        // line 91
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 91) == "condition")) {
            $context["wp_type"] = "MedicalWebPage";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 91) == "contact")) {
            $context["wp_type"] = "ContactPage";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 91) == "about")) {
            $context["wp_type"] = "AboutPage";
        }
        // line 92
        $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => ($context["wp_type"] ?? null), "@id" => (($context["canon"] ?? null) . "#webpage"), "url" => ($context["canon"] ?? null), "name" => ($context["page_title"] ?? null), "description" => ($context["desc"] ?? null), "isPartOf" => ["@id" => (($context["base"] ?? null) . "/#website")], "about" => ["@id" => (($context["base"] ?? null) . "/#organization")], "inLanguage" => "en"]]);
        // line 93
        yield "
";
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 94) == "doctor")) {
            // line 95
            yield "  ";
            $context["p"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 95), "profile", [], "any", false, false, false, 95);
            // line 96
            yield "  ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "Physician", "@id" => (($context["base"] ?? null) . "/#physician"), "name" => CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "name", [], "any", false, false, false, 96), "jobTitle" => CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "role", [], "any", false, false, false, 96), "description" => ($context["desc"] ?? null), "url" => ($context["canon"] ?? null), "image" => (((($tmp = (($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["page"] ?? null), "media", [], "any", false, false, false, 97)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "image", [], "any", false, false, false, 97)) instanceof \Stringable && (is_array($_v6) || $_v6 instanceof \ArrayObject || $_v6 instanceof \ArrayIterator) ? (string) $_v7 : $_v7)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 97)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "image", [], "any", false, false, false, 97)) instanceof \Stringable && (is_array($_v8) || $_v8 instanceof \ArrayObject || $_v8 instanceof \ArrayIterator) ? (string) $_v9 : $_v9)] ?? null) : null), "url", [], "any", false, false, false, 97)) : ("")), "medicalSpecialty" => ["Anesthesia", "Clinical Nutrition", "Lifestyle Medicine"], "worksFor" => ["@id" => (            // line 98
($context["base"] ?? null) . "/#organization")]]]);
        }
        // line 100
        yield "
";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 101) == "post")) {
            // line 102
            yield "  ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "BlogPosting", "headline" => CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 102), "description" => ($context["desc"] ?? null), "datePublished" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 102), "c"), "dateModified" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "modified", [], "any", false, false, false, 102), "c"), "image" =>             // line 103
($context["og_url"] ?? null), "mainEntityOfPage" => ($context["canon"] ?? null), "author" => ["@type" => "Organization", "name" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 103), "author", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 103), "author", [], "any", false, false, false, 103)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["brand"] ?? null), "name", [], "any", false, false, false, 103)))], "publisher" => ["@id" => (($context["base"] ?? null) . "/#organization")]]]);
        }
        // line 105
        yield "
";
        // line 106
        $context["faq_items"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 106), "faqs", [], "any", false, false, false, 106), "items", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 106), "faqs", [], "any", false, false, false, 106), "items", [], "any", false, false, false, 106)) : ((((is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 106), "faqs", [], "any", false, false, false, 106)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 106), "faqs", [], "any", false, true, false, 106), 0, [], "array", true, true, false, 106))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 106), "faqs", [], "any", false, false, false, 106)) : ([]))));
        // line 107
        if (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["faq_items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["faq_items"] ?? null), 0, [], "array", false, true, false, 107), "question", [], "any", true, true, false, 107))) {
            // line 108
            yield "  ";
            $context["qa"] = [];
            // line 109
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["faq_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                $context["qa"] = Twig\Extension\CoreExtension::merge(($context["qa"] ?? null), [["@type" => "Question", "name" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "question", [], "any", false, false, false, 109), "acceptedAnswer" => ["@type" => "Answer", "text" => $this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownFunction($context, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "answer", [], "any", false, false, false, 109))]]]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['f'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 110
            yield "  ";
            $context["graph"] = Twig\Extension\CoreExtension::merge(($context["graph"] ?? null), [["@type" => "FAQPage", "mainEntity" => ($context["qa"] ?? null)]]);
        }
        // line 112
        yield "
<script type=\"application/ld+json\">";
        // line 113
        yield (string) $this->extensions['Grav\Common\Twig\Extension\GravExtension']->jsonEncodeGuarded($this->env, false, ["@context" => "https://schema.org", "@graph" => ($context["graph"] ?? null)], (Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")));
        yield "</script>

";
        // line 115
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "analytics_id", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 116
            yield "<script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "analytics_id", [], "any", false, false, false, 116), "html", null, true);
            yield "\"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag(\x27js\x27,new Date());gtag(\x27config\x27,\x27";
            // line 117
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["seo"] ?? null), "analytics_id", [], "any", false, false, false, 117), "html", null, true);
            yield "\x27);</script>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/seo.html.twig";
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
        return array (  397 => 117,  392 => 116,  390 => 115,  385 => 113,  382 => 112,  378 => 110,  367 => 109,  364 => 108,  362 => 107,  360 => 106,  357 => 105,  354 => 103,  352 => 102,  350 => 101,  347 => 100,  344 => 98,  343 => 97,  341 => 96,  338 => 95,  336 => 94,  333 => 93,  331 => 92,  323 => 91,  321 => 90,  318 => 88,  314 => 86,  282 => 85,  279 => 84,  276 => 83,  274 => 82,  261 => 81,  259 => 80,  257 => 79,  254 => 77,  252 => 76,  248 => 75,  246 => 73,  245 => 71,  244 => 70,  243 => 69,  242 => 68,  241 => 67,  240 => 66,  239 => 65,  238 => 64,  237 => 63,  236 => 62,  235 => 61,  233 => 60,  221 => 59,  219 => 58,  217 => 57,  214 => 55,  211 => 54,  206 => 52,  201 => 51,  199 => 50,  193 => 49,  189 => 48,  185 => 47,  181 => 46,  176 => 44,  172 => 43,  168 => 42,  164 => 41,  160 => 40,  155 => 38,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 31,  128 => 30,  122 => 29,  118 => 28,  114 => 27,  108 => 26,  102 => 25,  98 => 24,  93 => 23,  89 => 22,  85 => 20,  81 => 18,  79 => 17,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Title, meta, social cards, icons and structured data. Every value can be overridden per page (SEO & Sharing tab). #}
{% set seo = config.themes.iham.seo %}
{% set contact = config.themes.iham.contact %}
{% set brand = config.themes.iham.brand %}
{% set site_name = seo.site_name ?: site.title %}
{% set sep = seo.title_separator ?: \x27|\x27 %}
{% set is_home = page.home %}
{% set page_title = page.header.seo_title ?: (is_home ? (site_name ~ \x27 – \x27 ~ brand.tagline) : (page.title ~ \x27 \x27 ~ sep ~ \x27 \x27 ~ site_name)) %}
{% set desc_raw = page.metadata.description.content ?? page.header.metadata.description ?? page.header.summary ?? seo.default_description %}
{% set desc = (desc_raw ?: seo.default_description)|plain(165) %}
{% set canon = page.header.canonical ?: (is_home ? uri.rootUrl(true) : page.url(true, true)) %}
{% set robots = page.header.robots ?: \x27index,follow\x27 %}
{% set og_name = page.header.og_image ?: page.header.card_image ?: page.header.hero.image ?: page.header.image %}
{% set og_media = og_name ? page.media[og_name] : null %}
{% if og_media %}
  {% set og_url = og_media.url %}
{% elseif seo.og_image is iterable and seo.og_image|length %}
  {% set og_url = url(\x27theme://images/uploads/\x27 ~ (seo.og_image|first).name, true) %}
{% else %}
  {% set og_url = url(\x27theme://images/logo-og.png\x27, true) %}
{% endif %}
{% if og_url starts with \x27/\x27 %}{% set og_url = uri.rootUrl(true) ~ og_url %}{% endif %}
<title>{{ page_title|e(\x27html\x27) }}</title>
<meta name=\"description\" content=\"{{ desc|e(\x27html_attr\x27) }}\">
{% if page.header.metadata.keywords %}<meta name=\"keywords\" content=\"{{ page.header.metadata.keywords|e(\x27html_attr\x27) }}\">{% endif %}
<meta name=\"robots\" content=\"{{ robots }}{{ robots starts with \x27noindex\x27 ? \x27\x27 : \x27,max-image-preview:large,max-snippet:-1\x27 }}\">
<link rel=\"canonical\" href=\"{{ canon }}\">
<meta name=\"author\" content=\"{{ page.header.author ?: brand.name }}\">
{% if seo.google_site_verification %}<meta name=\"google-site-verification\" content=\"{{ seo.google_site_verification }}\">{% endif %}
{% if seo.bing_site_verification %}<meta name=\"msvalidate.01\" content=\"{{ seo.bing_site_verification }}\">{% endif %}
<meta name=\"theme-color\" content=\"#152822\">

<link rel=\"icon\" href=\"{{ url(\x27theme://images/favicon.ico\x27) }}\" sizes=\"any\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url(\x27theme://images/favicon-32.png\x27) }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ url(\x27theme://images/favicon-192.png\x27) }}\">
<link rel=\"apple-touch-icon\" href=\"{{ url(\x27theme://images/apple-touch-icon.png\x27) }}\">

<meta property=\"og:site_name\" content=\"{{ site_name|e(\x27html_attr\x27) }}\">
<meta property=\"og:locale\" content=\"en_US\">
<meta property=\"og:type\" content=\"{{ page.template == \x27post\x27 ? \x27article\x27 : \x27website\x27 }}\">
<meta property=\"og:title\" content=\"{{ page_title|e(\x27html_attr\x27) }}\">
<meta property=\"og:description\" content=\"{{ desc|e(\x27html_attr\x27) }}\">
<meta property=\"og:url\" content=\"{{ canon }}\">
<meta property=\"og:image\" content=\"{{ og_url }}\">
<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:title\" content=\"{{ page_title|e(\x27html_attr\x27) }}\">
<meta name=\"twitter:description\" content=\"{{ desc|e(\x27html_attr\x27) }}\">
<meta name=\"twitter:image\" content=\"{{ og_url }}\">
{% if seo.twitter_handle %}<meta name=\"twitter:site\" content=\"{{ seo.twitter_handle }}\">{% endif %}
{% if page.template == \x27post\x27 %}
<meta property=\"article:published_time\" content=\"{{ page.date|date(\x27c\x27) }}\">
<meta property=\"article:modified_time\" content=\"{{ page.modified|date(\x27c\x27) }}\">
{% endif %}
{% if page.template == \x27blog\x27 and page.collection.params.pagination %}{% endif %}

{# ---------- Structured data ---------- #}
{% set base = uri.rootUrl(true) %}
{% set same_as = [] %}
{% for k, v in config.themes.iham.social %}{% if v %}{% set same_as = same_as|merge([v]) %}{% endif %}{% endfor %}
{% set logo_abs = url(\x27theme://images/logo-og.png\x27, true) %}
{% set org = {
  \x27@type\x27: seo.business_type ?: \x27MedicalClinic\x27,
  \x27@id\x27: base ~ \x27/#organization\x27,
  \x27name\x27: brand.name,
  \x27url\x27: base ~ \x27/\x27,
  \x27logo\x27: logo_abs,
  \x27image\x27: og_url,
  \x27telephone\x27: contact.phone,
  \x27email\x27: contact.email,
  \x27description\x27: seo.default_description|plain,
  \x27address\x27: {\x27@type\x27: \x27PostalAddress\x27, \x27streetAddress\x27: contact.address, \x27addressLocality\x27: contact.locality, \x27addressRegion\x27: contact.region, \x27addressCountry\x27: contact.country},
  \x27medicalSpecialty\x27: [\x27Lifestyle Medicine\x27, \x27Clinical Nutrition\x27],
  \x27sameAs\x27: same_as
} %}
{% if seo.price_range %}{% set org = org|merge({\x27priceRange\x27: seo.price_range}) %}{% endif %}
{% set graph = [org, {\x27@type\x27: \x27WebSite\x27, \x27@id\x27: base ~ \x27/#website\x27, \x27url\x27: base ~ \x27/\x27, \x27name\x27: site_name, \x27publisher\x27: {\x27@id\x27: base ~ \x27/#organization\x27}, \x27inLanguage\x27: \x27en\x27}] %}

{# breadcrumbs #}
{% set crumbs = [] %}
{% set cp = page %}
{% for i in 1..6 %}{% if cp and cp.parent %}{% set crumbs = [{\x27name\x27: cp.title, \x27url\x27: cp.url(true, true)}]|merge(crumbs) %}{% set cp = cp.parent %}{% endif %}{% endfor %}
{% if not is_home %}
  {% set crumbs = [{\x27name\x27: \x27Home\x27, \x27url\x27: base ~ \x27/\x27}]|merge(crumbs) %}
  {% set items = [] %}
  {% for c in crumbs %}{% set items = items|merge([{\x27@type\x27: \x27ListItem\x27, \x27position\x27: loop.index, \x27name\x27: c.name, \x27item\x27: c.url}]) %}{% endfor %}
  {% set graph = graph|merge([{\x27@type\x27: \x27BreadcrumbList\x27, \x27itemListElement\x27: items}]) %}
{% endif %}

{# page-level entities #}
{% set wp_type = \x27WebPage\x27 %}
{% if page.template == \x27condition\x27 %}{% set wp_type = \x27MedicalWebPage\x27 %}{% elseif page.template == \x27contact\x27 %}{% set wp_type = \x27ContactPage\x27 %}{% elseif page.template == \x27about\x27 %}{% set wp_type = \x27AboutPage\x27 %}{% endif %}
{% set graph = graph|merge([{\x27@type\x27: wp_type, \x27@id\x27: canon ~ \x27#webpage\x27, \x27url\x27: canon, \x27name\x27: page_title, \x27description\x27: desc, \x27isPartOf\x27: {\x27@id\x27: base ~ \x27/#website\x27}, \x27about\x27: {\x27@id\x27: base ~ \x27/#organization\x27}, \x27inLanguage\x27: \x27en\x27}]) %}

{% if page.template == \x27doctor\x27 %}
  {% set p = page.header.profile %}
  {% set graph = graph|merge([{\x27@type\x27: \x27Physician\x27, \x27@id\x27: base ~ \x27/#physician\x27, \x27name\x27: p.name, \x27jobTitle\x27: p.role, \x27description\x27: desc, \x27url\x27: canon,
     \x27image\x27: page.media[p.image] ? page.media[p.image].url : \x27\x27, \x27medicalSpecialty\x27: [\x27Anesthesia\x27, \x27Clinical Nutrition\x27, \x27Lifestyle Medicine\x27],
     \x27worksFor\x27: {\x27@id\x27: base ~ \x27/#organization\x27}}]) %}
{% endif %}

{% if page.template == \x27post\x27 %}
  {% set graph = graph|merge([{\x27@type\x27: \x27BlogPosting\x27, \x27headline\x27: page.title, \x27description\x27: desc, \x27datePublished\x27: page.date|date(\x27c\x27), \x27dateModified\x27: page.modified|date(\x27c\x27),
     \x27image\x27: og_url, \x27mainEntityOfPage\x27: canon, \x27author\x27: {\x27@type\x27: \x27Organization\x27, \x27name\x27: page.header.author ?: brand.name}, \x27publisher\x27: {\x27@id\x27: base ~ \x27/#organization\x27}}]) %}
{% endif %}

{% set faq_items = page.header.faqs.items ?: (page.header.faqs is iterable and page.header.faqs[0] is defined ? page.header.faqs : []) %}
{% if faq_items|length and faq_items[0].question is defined %}
  {% set qa = [] %}
  {% for f in faq_items %}{% set qa = qa|merge([{\x27@type\x27: \x27Question\x27, \x27name\x27: f.question, \x27acceptedAnswer\x27: {\x27@type\x27: \x27Answer\x27, \x27text\x27: f.answer|markdown|raw}}]) %}{% endfor %}
  {% set graph = graph|merge([{\x27@type\x27: \x27FAQPage\x27, \x27mainEntity\x27: qa}]) %}
{% endif %}

<script type=\"application/ld+json\">{{ {\x27@context\x27: \x27https://schema.org\x27, \x27@graph\x27: graph}|json_encode(constant(\x27JSON_UNESCAPED_SLASHES\x27) b-or constant(\x27JSON_UNESCAPED_UNICODE\x27))|raw }}</script>

{% if seo.analytics_id %}
<script async src=\"https://www.googletagmanager.com/gtag/js?id={{ seo.analytics_id }}\"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag(\x27js\x27,new Date());gtag(\x27config\x27,\x27{{ seo.analytics_id }}\x27);</script>
{% endif %}
", "partials/seo.html.twig", "/Users/amer/Sites/godc/user/themes/iham/templates/partials/seo.html.twig");
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
