<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:57:23
  from 'C:\xampp\htdocs\losblancos\adminlos1902\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e933f23617_00495629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f337ee5ba0122c308207fb75efd35354e3ffe9fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\adminlos1902\\themes\\default\\template\\content.tpl',
      1 => 1703080631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6594e933f23617_00495629 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
