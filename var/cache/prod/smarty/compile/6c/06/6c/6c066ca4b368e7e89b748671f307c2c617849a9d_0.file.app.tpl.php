<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:38:13
  from 'C:\xampp\htdocs\losblancos\modules\ps_facebook\views\templates\admin\app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65951cf58d9472_51821085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c066ca4b368e7e89b748671f307c2c617849a9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\modules\\ps_facebook\\views\\templates\\admin\\app.tpl',
      1 => 1703080631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_65951cf58d9472_51821085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>
<link href="https://unpkg.com/prestashop_accounts_vue_components@5" rel=preload as=script>
<link href="https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js" rel=preload as=script>

<div id="psFacebookApp"></div>

<?php echo '<script'; ?>
 src="https://unpkg.com/prestashop_accounts_vue_components@5"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://assets.prestashop3.com/ext/cloudsync-merchant-sync-consent/latest/cloudsync-cdc.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://unpkg.com/@prestashopcorp/billing-cdc/dist/bundle.js" rel=preload><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chunkVendor']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathApp']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
