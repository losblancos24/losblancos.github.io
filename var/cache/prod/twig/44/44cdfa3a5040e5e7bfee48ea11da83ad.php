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

/* @PrestaShop/Admin/Common/Grid/grid_panel.html.twig */
class __TwigTemplate_c8abb10c62ae2f086e4793dc3419ffae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_header' => [$this, 'block_grid_panel_header'],
            'grid_actions_block' => [$this, 'block_grid_actions_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return $this->loadTemplate((((twig_number_format_filter($this->env, twig_constant("_PS_VERSION_")) >= 8)) ? ("@!PrestaShop/Admin/Common/Grid/grid_panel.html.twig") : ("PrestaShopBundle:Admin/Common/Grid:grid_panel.html.twig")), "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_grid_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div class=\"card-header js-grid-header\">
  <h3 class=\"d-inline-block card-header-title\">
    ";
        // line 23
        if ((array_key_exists("ets_omd_is_viewtrash", $context) && ($context["ets_omd_is_viewtrash"] ?? null))) {
            echo twig_escape_filter($this->env, ($context["Trash_orders_text"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        }
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "data", [], "any", false, false, false, 23), "records_total", [], "any", false, false, false, 23), "html", null, true);
        echo ")
  </h3>
  ";
        // line 25
        $this->displayBlock('grid_actions_block', $context, $blocks);
        // line 30
        echo "</div>
";
    }

    // line 25
    public function block_grid_actions_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"d-inline-block float-right\">
      ";
        // line 27
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  76 => 26,  72 => 25,  67 => 30,  65 => 25,  54 => 23,  50 => 21,  46 => 20,  36 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "C:\\xampp\\htdocs\\losblancos\\modules\\ets_delete_order\\views\\PrestaShop\\Admin\\Common\\Grid\\grid_panel.html.twig");
    }
}
