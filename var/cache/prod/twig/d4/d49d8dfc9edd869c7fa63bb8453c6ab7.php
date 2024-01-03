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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_1866e35938adad1e3976377e23899504 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'shop_urls_configuration' => [$this, 'block_shop_urls_configuration'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_shop_urls_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "  ";
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAccountUpdateWarning");
        echo "
  ";
        // line 22
        $this->displayParentBlock("shop_urls_configuration", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  50 => 21,  46 => 20,  35 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "C:\\xampp\\htdocs\\losblancos\\modules\\ps_accounts\\views\\PrestaShop\\Admin\\Configure\\ShopParameters\\TrafficSeo\\Meta\\Blocks\\shop_urls_configuration.html.twig");
    }
}
