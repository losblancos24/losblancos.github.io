<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:07:29
  from 'module:midtranspayviewstemplatesfrontpayment_infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_659515c1c72569_94073796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9f59e06d43c51abd45d04b382603fc54841925a' => 
    array (
      0 => 'module:midtranspayviewstemplatesfrontpayment_infos.tpl',
      1 => 1637656660,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659515c1c72569_94073796 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value) {?>
<section>
  <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['MT_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8');?>
</p>
</section>
<?php }
}
}
