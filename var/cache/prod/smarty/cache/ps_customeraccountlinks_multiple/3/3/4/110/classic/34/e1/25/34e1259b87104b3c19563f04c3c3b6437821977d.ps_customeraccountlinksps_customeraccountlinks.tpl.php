<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:58:51
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e98bbbf4e2_99610472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1678742294,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6594e98bbbf4e2_99610472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\losblancos\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\aa\\a2\\29\\aaa2297ee30970d81e0810908fc622e681678c2d_2.file.helpers.tpl.php',
    'uid' => 'aaa2297ee30970d81e0810908fc622e681678c2d',
    'call_name' => 'smarty_template_function_renderLogo_8116307166594e84de6c1e2_66558703',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8080/losblancos/en/my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost:8080/losblancos/en/identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="http://localhost:8080/losblancos/en/addresses" title="Addresses" rel="nofollow">Addresses</a></li>
                          <li><a href="http://localhost:8080/losblancos/en/order-history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="http://localhost:8080/losblancos/en/credit-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                          <li><a href="http://localhost:8080/losblancos/en/discount" title="Vouchers" rel="nofollow">Vouchers</a></li>
                          <li>
    <a href="http://localhost:8080/losblancos/en/module/blockwishlist/lists" title="Wishlist saya" rel="nofollow">
      Wishlist
    </a>
  </li>

        <li><a href="http://localhost:8080/losblancos/en/?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<?php }
}
