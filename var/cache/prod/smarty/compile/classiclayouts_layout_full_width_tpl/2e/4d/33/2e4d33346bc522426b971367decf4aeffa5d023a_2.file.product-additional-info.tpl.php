<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:08:10
  from 'C:\xampp\htdocs\losblancos\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659515ea38a1e9_12182267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4d33346bc522426b971367decf4aeffa5d023a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659515ea38a1e9_12182267 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
