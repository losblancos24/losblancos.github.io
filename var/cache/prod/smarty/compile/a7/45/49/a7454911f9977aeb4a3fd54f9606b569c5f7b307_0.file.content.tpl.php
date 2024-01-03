<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:54:31
  from 'C:\xampp\htdocs\losblancos\adminlos1902\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e887eac921_35469826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7454911f9977aeb4a3fd54f9606b569c5f7b307' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\adminlos1902\\themes\\new-theme\\template\\content.tpl',
      1 => 1703080631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6594e887eac921_35469826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
