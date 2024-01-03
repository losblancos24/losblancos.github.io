<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:15:19
  from 'C:\xampp\htdocs\losblancos\mails\_partials\order_conf_cart_rules.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65951797a2bc18_60814077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5225ad1dd6e797b15db7cd3270bd8b5e0cde374' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\mails\\_partials\\order_conf_cart_rules.txt',
      1 => 1703080631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65951797a2bc18_60814077 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'cart_rule');
$_smarty_tpl->tpl_vars['cart_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->do_else = false;
?>
	<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_name'], ENT_QUOTES, 'UTF-8');?>
  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_reduction'], ENT_QUOTES, 'UTF-8');?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
