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

/* __string_template__04c7a080add725f630005b7f30f3d490 */
class __TwigTemplate_c5bd14aacbe4fc12ce4191ff519cb75c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/losblancos/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/losblancos/img/app_icon.png\" />

<title>Posisi • Los Blancos</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesPositions';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Baca pesan';
    var token = '3159aa95e0a330a5ee0fef738124278f';
    var currentIndex = 'index.php?controller=AdminModulesPositions';
    var employee_token = '7a85104ecba602ff226e043ca416f3ae';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/losblancos/adminlos1902/index.php/improve/modules/manage?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug';
    var admin_notification_get_link = '/losblancos/adminlos1902/index.php/common/notifications?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug';
    var admin_notification_push_link = adminNotificationPushLink = '/losblancos/adminlos1902/index.php/common/notifications/ack?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug';
    var tab_modules_list = '';
    var update_success_msg = 'update";
        // line 42
        echo " berhasil';
    var search_product_msg = 'Cari produk';
  </script>



<link
      rel=\"preload\"
      href=\"/losblancos/adminlos1902/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/losblancos/adminlos1902/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/adminlos1902/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/adminlos1902/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/losblancos/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/losblancos\\/adminlos1902\\/\";
var baseDir = \"\\/losblancos\\/\";
var changeFormLanguageUrl = \"\\/losblancos\\/adminlos1902\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u0";
        // line 70
        echo "0d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/adminlos1902/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/losblancos/adminlos1902/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/losblancos/adminlos1902/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/adminlos1902/themes/default/js/vendor/nv.d3.min.j";
        // line 89
        echo "s\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_mbo/views/js/recommended-modules.js?v=4.7.0\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/losblancos/modules/midtranspay/js/midtrans_admin.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/losblancos\\/adminlos1902\\/index.php?controller=AdminGamification&token=fbf60a46720994bf8361b25a0dfd4a61\";
            var current_id_tab = 48;
        </script>    <script>
        window.userLocale  = 'id';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/losblancos/adminlos1902/index.php/common/notifications?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 118
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-id adminmodulespositions\"
  data-base-url=\"/losblancos/adminlos1902/index.php\"  data-token=\"BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/losblancos/adminlos1902/index.php/modules/pseditionbasic/homepage?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminModules&amp;&amp;configure=classy_custom_js_cs&amp;token=c7c8ffbe04b1831e409294d967408452\"
                 data-item=\"ClassyDevs Custom CSS and JS\"
      >ClassyDevs Custom CSS and JS</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe9652cf2dd8c8b2531a8b9de0e07666\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/catalog/categories/new?token=f7b876ab047e14d9d63600d1de73394c\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php/improve/modules/manage?token=f7b876ab047e14d9d63600d1de73394";
        // line 152
        echo "c\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/orders?token=f7b876ab047e14d9d63600d1de73394c\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/catalog/products-v2/create?token=f7b876ab047e14d9d63600d1de73394c\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2dc321ab5565263bb1d2877474ef4c70\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"34\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/modules/positions\"
        data-post-link=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminQuickAccesses&token=366ec59e3c027205736d8d5a876b29c4\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Posisi - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminQuickAccesses&token=366ec59e3c027205736d8d5a876b29c4\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_se";
        // line 192
        echo "arch\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/losblancos/adminlos1902/index.php?controller=AdminSearch&amp;token=e166cf25fc6ca83fb2f20a8da6985fab\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=";
        // line 211
        echo "\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Batal</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Akses cepat</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminModules&amp;&amp;configure=classy_custom_js_cs&amp;token=c7c8ffbe04b1831e409294d967408452\"
             data-item=\"ClassyDevs Custom CSS and JS\"
    >ClassyDevs Custom CSS and JS</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe9652cf2dd8c8b2531a8b9de0e07666\"
             data-item=\"Katalog evaluasi\"
    >Katalog evaluasi</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/catalog/categories/new?token=f7b876ab047e14d9d63600d1de73394c\"
             data-item=\"Kategori baru\"
    >Kategori baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php/improve/modules/manage?token=f7b876ab0";
        // line 245
        echo "47e14d9d63600d1de73394c\"
             data-item=\"Modul terpasang\"
    >Modul terpasang</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/orders?token=f7b876ab047e14d9d63600d1de73394c\"
             data-item=\"Penjualan\"
    >Penjualan</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php/sell/catalog/products-v2/create?token=f7b876ab047e14d9d63600d1de73394c\"
             data-item=\"Produk baru\"
    >Produk baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2dc321ab5565263bb1d2877474ef4c70\"
             data-item=\"Voucher baru\"
    >Voucher baru</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"189\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/modules/positions\"
      data-post-link=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminQuickAccesses&token=366ec59e3c027205736d8d5a876b29c4\"
      data-prompt-text=\"Harap namai shortcut ini:\"
      data-link=\"Posisi - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminQuickAccesses&token=366ec59e3c027205736d8d5a876b29c4\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"psto";
        // line 289
        echo "oltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/losblancos/adminlos1902/index.php/configure/shop/maintenance/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/losblancos/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class";
        // line 331
        echo "=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e0dac8235e9430407996e86ddddd660c\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelangg";
        // line 381
        echo "an baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/losblancos/img/pr/default.jpg\" alt=\"anwar\" /></span>
        <span class=\"employee_pr";
        // line 431
        echo "ofile\">Welcome back anwar</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/losblancos/adminlos1902/index.php/configure/advanced/employees/1/edit?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\">
      <i class=\"material-icons\">edit</i>
      <span>Profile Anda</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost%3A8080&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/losblancos/adminlos1902/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-id&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.";
        // line 454
        echo "com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-id&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminLogin&amp;logout=1&amp;token=bde4c882779d84cf4b71bd57aee82643\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/losblancos/adminlos1902/index.php/configure/advanced/employees/toggle-navigation?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/losblancos/adminlos1902/index.php/modules/pseditionbasic/homepage?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"145\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"146\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/losblancos/adminlos1902/index.php/modules/pseditionbasic/homepage?";
        // line 496
        echo "_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminDashboard&amp;token=47d3e090fd905423f76ddd15980ec9a3\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a hr";
        // line 536
        echo "ef=\"/losblancos/adminlos1902/index.php/sell/orders/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/orders/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/orders/invoices/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Invoice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a";
        // line 566
        echo " href=\"/losblancos/adminlos1902/index.php/sell/orders/credit-slips/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/orders/delivery-slips/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCarts&amp;token=e0dac8235e9430407996e86ddddd660c\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/losblancos/adminlos1902/index.php/sell/catalog/products?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
  ";
        // line 597
        echo "                    </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/catalog/products?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/catalog/categories?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Kategori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/catalog/monitoring/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Monitoring
                                </a>
                              </li>

                              ";
        // line 627
        echo "                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminAttributesGroups&amp;token=9a5a460de2fa68e18d05c5a37cdf7760\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/catalog/brands/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/attachments/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCar";
        // line 655
        echo "tRules&amp;token=2dc321ab5565263bb1d2877474ef4c70\" class=\"link\"> Diskon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/stocks/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Stok
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/losblancos/adminlos1902/index.php/sell/customers/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustom";
        // line 687
        echo "ers\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/customers/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/addresses/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCustomerThreads&amp;token=69dc7872170e73fe8cb996ae2be7fd26\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
         ";
        // line 718
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCustomerThreads&amp;token=69dc7872170e73fe8cb996ae2be7fd26\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/losblancos/adminlos1902/index.php/sell/customer-service/order-messages/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminReturn&amp;token=a4f8ceffcadd766af1c3dcfbb59c5b9c\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/losblancos/adminlos1902/index.php/modules/metrics/leg";
        // line 748
        echo "acy/stats?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/losblancos/adminlos1902/index.php/modules/metrics/legacy/stats?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Statistik
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/losblancos/adminlos1902/index.php/modules/metrics?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"categor";
        // line 782
        echo "y-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkatan</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/losblancos/adminlos1902/index.php/modules/mbo/modules/catalog/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/losblancos/adminlos1902/index.php/modules/mbo/modules/catalog/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                     ";
        // line 813
        echo "           <a href=\"/losblancos/adminlos1902/index.php/improve/modules/manage?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/losblancos/adminlos1902/index.php/improve/design/themes/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/design/themes/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                   ";
        // line 842
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/losblancos/adminlos1902/index.php/modules/mbo/themes/catalog/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/design/mail_theme/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/design/cms-pages/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/design/modules/positions/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ";
        // line 870
        echo "6Z6SIcug\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminImages&amp;token=69aeaf63145bb69e8b3571e70da87a57\" class=\"link\"> Pengaturan Gambar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/losblancos/adminlos1902/index.php/modules/link-widget/list?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Daftar tautan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCarriers&amp;token=2e0b2b14b76221045d9ba23b599e703e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
 ";
        // line 903
        echo "                                                                   keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminCarriers&amp;token=2e0b2b14b76221045d9ba23b599e703e\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/shipping/preferences/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminMbeConfiguration&amp;token=048d82c0231c1f23fd145a111c5ac56e\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
            ";
        // line 932
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminMbeShipping&amp;token=8dd61e1d911cd8ed7b70b0191e15823c\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/losblancos/adminlos1902/index.php/improve/payment/payment_methods?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/payment/payment_methods?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV5";
        // line 960
        echo "8aNuJ6Z6SIcug\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/payment/preferences?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/losblancos/adminlos1902/index.php/improve/international/localization/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminP";
        // line 992
        echo "arentLocalization\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/international/localization/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pelokalan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/international/zones/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/international/taxes/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/losblancos/adminlos1902/index.php/improve/international/translations/settings?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                  ";
        // line 1022
        echo "                      </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"136\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e2c3a4ccd887a6c4dc03402c582d5158\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-136\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=e2c3a4ccd887a6c4dc03402c582d5158\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminPsfacebookModule&amp;token=4ca4f02e600b89f9c26b760793";
        // line 1050
        echo "372b1c\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"147\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/losblancos/adminlos1902/index.php/modules/pseditionbasic/settings?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/losblancos/adminlos1902/index.php/configure/shop/preferences/preferences?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
   ";
        // line 1090
        echo "                   </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/preferences/preferences?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/order-preferences/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/product-preferences/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Produk
                                </a>
  ";
        // line 1118
        echo "                            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/customer-preferences/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/contacts/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/shop/seo-urls/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://l";
        // line 1148
        echo "ocalhost:8080/losblancos/adminlos1902/index.php?controller=AdminSearchConf&amp;token=ac8e017a0dd879dda4acf12e9a6c162e\" class=\"link\"> Cari
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/system-information/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/system-information/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
              ";
        // line 1179
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/performance/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/administration/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/emails/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/import/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Impor
                                </a>
                              </li>";
        // line 1207
        echo "

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/employees/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/sql-requests/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/logs/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/webservice-keys/?_token=B";
        // line 1237
        echo "nelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/feature-flags/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/losblancos/adminlos1902/index.php/configure/advanced/security/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminKlaviyoPsConfig&amp;token=4bc09280b77d8ba3c6efe0bef9ddbfb4\" class=\"link\">
                      <i class=\"material-icons mi-tren";
        // line 1265
        echo "ding_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Lebih</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"182\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminSelfUpgrade&amp;token=c301fa75d3255bedb7e7637862bf71ee\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Desain</li>
          
                      <li class=\"breadcrumb-i";
        // line 1316
        echo "tem active\">
              <a href=\"/losblancos/adminlos1902/index.php/improve/design/modules/positions/?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" aria-current=\"page\">Posisi</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Posisi          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary transplant-module-button pointer\"                  id=\"page-header-desc-configuration-save\"
                  href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=3159aa95e0a330a5ee0fef738124278f\"                  title=\"Tambah modul\"                                  >
                                    Tambah modul
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/losblancos/adminlos1902/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminModulesPositions%253Fversion%253D8.1.2%2526country%253Did/Bantuan?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
";
        // line 1364
        echo "        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-save\"
              href=\"http://localhost:8080/losblancos/adminlos1902/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=3159aa95e0a330a5ee0fef738124278f\"              title=\"Tambah modul\"            >
              Tambah modul
                          </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Bantuan\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/losblancos/adminlos1902/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminModulesPositions%253Fversion%253D8.1.2%2526country%253Did/Bantuan?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"
            >
              Bantuan
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1396
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"/losblancos/adminlos1902/index.php/modules/pseditionbasic/homepage?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Connect to Addons marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don&#039;t have an account yet?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Sign up now</a>
                  </p>
                  <p>
                      If you created your account using Google, please follow the forgotten password procedure of Addons Marketplace to create your password : 
                      <a href=\"https://authv2.prestashop.com/pass";
        // line 1439
        echo "word/request \" target=\"_blank\">Reset your password</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/losblancos/adminlos1902/index.php/modules/mbo/addons/login?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Alamat email</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Password</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Remember me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Let&#039;s go!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Lupa password Anda?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal conte";
        // line 1477
        echo "nt-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirm logout</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    You are about to log out your Addons account. You might miss important updates of Addons you&#039;ve bought.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Batal\">
          <a class=\"btn btn-primary uppercase\" href=\"/losblancos/adminlos1902/index.php/modules/mbo/addons/logout?_token=BnelXhDDm4o5Qt0mepIbPXSmOTZpV58aNuJ6Z6SIcug\" id=\"module-modal-addons-logout-ack\">Yes, log out</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1508
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 118
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1396
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1508
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__04c7a080add725f630005b7f30f3d490";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1691 => 1508,  1670 => 1396,  1659 => 118,  1650 => 1508,  1617 => 1477,  1577 => 1439,  1528 => 1396,  1494 => 1364,  1444 => 1316,  1391 => 1265,  1361 => 1237,  1329 => 1207,  1299 => 1179,  1266 => 1148,  1234 => 1118,  1204 => 1090,  1162 => 1050,  1132 => 1022,  1100 => 992,  1066 => 960,  1036 => 932,  1005 => 903,  970 => 870,  940 => 842,  909 => 813,  876 => 782,  840 => 748,  808 => 718,  775 => 687,  741 => 655,  711 => 627,  679 => 597,  646 => 566,  614 => 536,  572 => 496,  528 => 454,  503 => 431,  451 => 381,  399 => 331,  355 => 289,  309 => 245,  273 => 211,  252 => 192,  210 => 152,  171 => 118,  140 => 89,  119 => 70,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__04c7a080add725f630005b7f30f3d490", "");
    }
}
