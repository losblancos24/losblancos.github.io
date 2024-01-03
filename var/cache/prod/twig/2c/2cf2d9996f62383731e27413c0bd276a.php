<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Translations/overview.html.twig */
class __TwigTemplate_2ade1cf7ace489b8ab1fed89407ec5e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Translations/overview.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div id=\"translations-app\"></div>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script>
    var data = {
      baseUrl: '";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "getBasePath", [], "method", false, false, false, 36), "html", null, true);
        echo "',
      locale: '";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", [0 => "locale"], "method", false, false, false, 37), "html", null, true);
        echo "',
      type: '";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", [0 => "type"], "method", false, false, false, 38), "html", null, true);
        echo "',
      currentTheme: ";
        // line 39
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, false, 39));
        echo ",
      selected: '";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "query", [], "any", false, false, false, 40), "get", [0 => "selected"], "method", false, false, false, 40), "html", null, true);
        echo "',
      domainsTreeUrl: '";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_translation_domains_tree", ["lang" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["app"] ?? null), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", [0 => "lang"], "method", false, false, false, 42), "type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["app"] ?? null), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "get", [0 => "type"], "method", false, false, false, 43), "selected" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["app"] ?? null), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", [0 => "selected"], "method", false, false, false, 44)]), "html", null, true);
        // line 45
        echo "',
      translationUrl: '";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("api_i18n_translations_list", ["page" => "international"]);
        echo "',
      internationalUrl: '";
        // line 47
        echo $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminLocalization");
        echo "',
      translationsUrl: '";
        // line 48
        echo $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminTranslations");
        echo "'
    }
  </script>

  ";
        // line 52
        if (($context["webpack_server"] ?? null)) {
            // line 53
            echo "    <script src=\"http://localhost:8080/translations.bundle.js\"></script>
  ";
        } else {
            // line 55
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/translations.bundle.js"), "html", null, true);
            echo "\"></script>
  ";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 57,  117 => 55,  113 => 53,  111 => 52,  104 => 48,  100 => 47,  96 => 46,  93 => 45,  91 => 44,  90 => 43,  89 => 42,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  72 => 37,  68 => 36,  60 => 32,  56 => 31,  51 => 28,  47 => 27,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Translations/overview.html.twig", "C:\\xampp\\htdocs\\losblancos\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Translations\\overview.html.twig");
    }
}
