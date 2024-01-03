<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:42:21
  from 'C:\xampp\htdocs\losblancos\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65951ded4b3eb3_70627262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9de8a99864f902c4f59421cd65c28052a5bdc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1699437192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_65951ded4b3eb3_70627262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
