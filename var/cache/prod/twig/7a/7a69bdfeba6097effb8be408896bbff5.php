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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig */
class __TwigTemplate_747406a475582fce8cb2e81cd57edb57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 19), "submit_route", [], "any", false, false, false, 19) == "admin_order_bulk_delete")) {
            // line 20
            echo "    ";
            if (($context["ets_omd_is_viewtrash"] ?? null)) {
                // line 21
                echo "        ";
                if (($context["ets_odm_can_delete_order"] ?? null)) {
                    // line 22
                    echo "            <button id=\"order_grid_bulk_action_delete_selected\" class=\"dropdown-item js-bulk-action-submit-btn\" type=\"button\" data-form-url=\"";
                    echo twig_escape_filter($this->env, ($context["ets_odm_link_list_orders"] ?? null), "html", null, true);
                    echo "&delete_all_order=1&viewtrash=1\" data-form-method=\"POST\" data-confirm-message=\"\"> ";
                    echo twig_escape_filter($this->env, ($context["Delete_selected_orders_text"] ?? null), "html", null, true);
                    echo " </button>
        ";
                }
                // line 24
                echo "        <button id=\"order_grid_bulk_action_restore_selected\" class=\"dropdown-item js-bulk-action-submit-btn\" type=\"button\" data-form-url=\"";
                echo twig_escape_filter($this->env, ($context["ets_odm_link_list_orders"] ?? null), "html", null, true);
                echo "&restore_all_order=1&viewtrash=1\" data-form-method=\"POST\" data-confirm-message=\"\"> ";
                echo twig_escape_filter($this->env, ($context["Restore_selected_orders_text"] ?? null), "html", null, true);
                echo " </button>
    ";
            } else {
                // line 26
                echo "        ";
                if (($context["ets_odm_can_delete_order"] ?? null)) {
                    // line 27
                    echo "            <button id=\"order_grid_bulk_action_delete_selected\" class=\"dropdown-item js-bulk-action-submit-btn\" type=\"button\" data-form-url=\"";
                    echo twig_escape_filter($this->env, ($context["ets_odm_link_list_orders"] ?? null), "html", null, true);
                    echo "&delete_all_order\" data-form-method=\"POST\" data-confirm-message=\"\"> ";
                    echo twig_escape_filter($this->env, ($context["Delete_selected_orders_text"] ?? null), "html", null, true);
                    echo " </button>
        ";
                }
                // line 29
                echo "    ";
            }
        } else {
            // line 31
            echo "    ";
            $this->loadTemplate((((twig_number_format_filter($this->env, twig_constant("_PS_VERSION_")) >= 8)) ? ("@!PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig") : ("PrestaShopBundle:Admin/Common/Grid/Actions/Bulk:submit.html.twig")), "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", 31)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  72 => 29,  64 => 27,  61 => 26,  53 => 24,  45 => 22,  42 => 21,  39 => 20,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", "C:\\xampp\\htdocs\\losblancos\\modules\\ets_delete_order\\views\\PrestaShop\\Admin\\Common\\Grid\\Actions\\Bulk\\submit.html.twig");
    }
}
