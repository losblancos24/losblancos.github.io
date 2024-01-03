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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_33e5135961c7ab174608b289b54e864a extends Template
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
        echo "
";
        // line 20
        $context["class"] = "btn tooltip-link js-link-row-action";
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 22)) {
            // line 23
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 23));
        }
        // line 25
        echo "
  ";
        // line 26
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 26), "route_param_name", [], "any", false, false, false, 26) => (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 26), "route_param_field", [], "any", false, false, false, 26)] ?? null) : null)];
        // line 27
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 27), "extra_route_params", [], "any", true, true, false, 27)) {
            // line 28
            echo "      ";
            $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 28), "extra_route_params", [], "any", false, false, false, 28);
            // line 29
            echo "    
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["field"]) {
                // line 31
                echo "        ";
                $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 31) &&  !(null === (($__internal_compile_1 = ($context["record"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["field"]] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["record"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["field"]] ?? null) : null)) : ($context["field"]))]);
                // line 32
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  ";
        }
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 34), "route", [], "any", false, false, false, 34) == "admin_orders_edit")) {
            // line 35
            echo "    ";
            $context["url_link"] = "#";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["action"] ?? null), "options", [], "any", false, false, false, 36), "route", [], "any", false, false, false, 36) == "admin_orders_delete")) {
            // line 37
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_delete"] ?? null) . "&id_order=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 37));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["action"] ?? null), "options", [], "any", false, false, false, 38), "route", [], "any", false, false, false, 38) == "admin_orders_duplicate")) {
            // line 39
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_duplicate"] ?? null) . "&id_order=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 39));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["action"] ?? null), "options", [], "any", false, false, false, 40), "route", [], "any", false, false, false, 40) == "admin_orders_restore")) {
            // line 41
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_restoreorder"] ?? null) . "&id_order=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 41));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["action"] ?? null), "options", [], "any", false, false, false, 42), "route", [], "any", false, false, false, 42) == "admin_orders_print_label_delivery")) {
            // line 43
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_print_label_delivery"] ?? null) . "&id_order=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 43));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["action"] ?? null), "options", [], "any", false, false, false, 44), "route", [], "any", false, false, false, 44) == "admin_orders_login_as_customer")) {
            // line 45
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_login_as_customer"] ?? null) . "&id_order=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 45));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["action"] ?? null), "options", [], "any", false, false, false, 46), "route", [], "any", false, false, false, 46) == "admin_customers_login_as_customer")) {
            // line 47
            echo "    ";
            $context["url_link"] = ((($context["ets_odm_link_order_login_as_customer"] ?? null) . "&id_customer=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "customerId", [], "any", false, false, false, 47));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["action"] ?? null), "options", [], "any", false, false, false, 48), "route", [], "any", false, false, false, 48) == "admin_customers_activities")) {
            // line 49
            echo "    ";
            $context["url_link"] = ((($context["ets_tc_link_customer_session"] ?? null) . "&id_customer=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "customerId", [], "any", false, false, false, 49));
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["action"] ?? null), "options", [], "any", false, false, false, 50), "route", [], "any", false, false, false, 50) == "admin_customers_create_ticket_as_customer")) {
            // line 51
            echo "    ";
            $context["url_link"] = ((($context["ets_lc_link_customer_create_ticket"] ?? null) . "&id_customer=") . twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "customerId", [], "any", false, false, false, 51));
        } else {
            // line 53
            echo "    ";
            $context["url_link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 53), "route", [], "any", false, false, false, 53), ($context["route_params"] ?? null));
        }
        // line 55
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 55), "route", [], "any", false, false, false, 55) != "admin_orders_print_label_delivery") || (twig_get_attribute($this->env, $this->source, ($context["module_ets_ordermanager"] ?? null), "checkOrderIsVirtual", [0 => twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 55)], "method", false, false, false, 55) != true)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 55), "route", [], "any", false, false, false, 55) != "admin_orders_login_as_customer") || (twig_get_attribute($this->env, $this->source, ($context["module_ets_ordermanager"] ?? null), "checkOrderIsCustomer", [0 => twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "orderId", [], "any", false, false, false, 55), 1 => 0], "method", false, false, false, 55) == true))) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 55), "route", [], "any", false, false, false, 55) != "admin_customers_login_as_customer") || (twig_get_attribute($this->env, $this->source, ($context["module_ets_ordermanager"] ?? null), "checkOrderIsCustomer", [0 => 0, 1 => twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "customerId", [], "any", false, false, false, 55)], "method", false, false, false, 55) == true)))) {
            // line 56
            echo "    <a";
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_orders_login_as_customer") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_customers_login_as_customer")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_customers_activities"))) {
                echo " target=\"_blank\"";
            }
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_orders_edit")) {
                echo " edit edit_order_inline";
            }
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_orders_duplicate")) {
                echo " duplicate_order_list";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 56), "route", [], "any", false, false, false, 56) == "admin_customers_create_ticket_as_customer")) {
                echo " ets_lc_create_ticket";
            }
            echo "\"
       href=\"";
            // line 57
            echo twig_escape_filter($this->env, ($context["url_link"] ?? null), "html", null, true);
            echo "\"
       data-confirm-message=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 58), "confirm_message", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
      ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 59)) {
                // line 60
                echo "        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        data-original-title=\"";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 62), "html", null, true);
                echo "\"
      ";
            }
            // line 64
            echo "      data-clickable-row=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 64), "clickable_row", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 64), "clickable_row", [], "any", false, false, false, 64), false)) : (false)), "html", null, true);
            echo "\"
      ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 65), "route", [], "any", false, false, false, 65) == "admin_customers_create_ticket_as_customer")) {
                echo " data-id_customer=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["route_params"] ?? null), "customerId", [], "any", false, false, false, 65), "html", null, true);
                echo "\"";
            }
            // line 66
            echo "    >
      ";
            // line 67
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 67))) {
                // line 68
                echo "        <i class=\"material-icons ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 68), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 68), "html", null, true);
                echo "</i>
      ";
            }
            // line 70
            echo "      ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 70)) {
                // line 71
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 71), "html", null, true);
                echo "
      ";
            }
            // line 73
            echo "    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  198 => 71,  195 => 70,  187 => 68,  185 => 67,  182 => 66,  176 => 65,  171 => 64,  166 => 62,  162 => 60,  160 => 59,  156 => 58,  152 => 57,  133 => 56,  131 => 55,  127 => 53,  123 => 51,  121 => 50,  118 => 49,  116 => 48,  113 => 47,  111 => 46,  108 => 45,  106 => 44,  103 => 43,  101 => 42,  98 => 41,  96 => 40,  93 => 39,  91 => 38,  88 => 37,  86 => 36,  83 => 35,  81 => 34,  78 => 33,  72 => 32,  69 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  54 => 26,  51 => 25,  47 => 23,  45 => 22,  42 => 21,  40 => 20,  37 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "C:\\xampp\\htdocs\\losblancos\\modules\\ets_delete_order\\views\\PrestaShop\\Admin\\Common\\Grid\\Actions\\Row\\link.html.twig");
    }
}
