<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:50:28
  from 'C:\xampp\htdocs\losblancos\modules\ets_searchbycategory\views\templates\hook\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e794b32ba1_50283465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0509dc6c2f397c246fc7a336c6c51afede36e1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\modules\\ets_searchbycategory\\views\\templates\\hook\\head.tpl',
      1 => 1690533844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6594e794b32ba1_50283465 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>

    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_DISPLAY_PRICE']->value)) && (isset($_smarty_tpl->tpl_vars['ETS_DISPLAY_RATING']->value))) {?>
    .sbc-product-price {
        display:<?php if ($_smarty_tpl->tpl_vars['ETS_DISPLAY_PRICE']->value) {
} else { ?>none !important<?php }?>;
    }
    .sbc-item-wrapper .product-list-reviews{
    display:<?php if ($_smarty_tpl->tpl_vars['ETS_DISPLAY_RATING']->value) {
} else { ?>none !important<?php }?>;
    }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_COLOR']->value))) {?>
    #search_block_top .button-search, .sbc_show_more.ac_over,
    .searched_category option:hover
    {
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR']->value))) {?>
    #search_block_top .button-search:hover,.sbc_show_more:hover {
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    <?php }?>
</style><?php }
}
