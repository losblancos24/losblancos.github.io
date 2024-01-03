<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:50:31
  from 'C:\xampp\htdocs\losblancos\modules\ets_searchbycategory\views\templates\hook\blocksearch-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e797563f70_07765661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e72b9fc2ada7e14323faa930d034fe2874920a11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\modules\\ets_searchbycategory\\views\\templates\\hook\\blocksearch-top.tpl',
      1 => 1690533844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6594e797563f70_07765661 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<?php echo '<script'; ?>
 type="text/javascript">
var blocksearch_type ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blocksearch_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
var ajaxsearch ='<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajaxsearch']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
var id_lang =<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value )), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<div id="search_block_top" class=" clearfix <?php if ($_smarty_tpl->tpl_vars['searched_categories']->value) {?>has-categories-dropdown<?php } else { ?>no-categories-dropdown<?php }?>">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<?php if ($_smarty_tpl->tpl_vars['searched_categories']->value) {?>
            <div class="table">
                <div class="table-cell searched_categories">
                    <span class="results_select"></span>
                    <?php echo $_smarty_tpl->tpl_vars['searched_categories']->value;?>

                </div>
                <div class="table-cell">
        <?php }?>
        <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php if ((isset($_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_PLACEHOLDER']->value)) && $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_PLACEHOLDER']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOCKSEARCH_PLACEHOLDER']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter product name ...','mod'=>'ets_searchbycategory'),$_smarty_tpl ) );
}?>" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' )) )), ENT_QUOTES, 'UTF-8');?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
            <span><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg></span>
		</button>
        <?php if ($_smarty_tpl->tpl_vars['searched_categories']->value) {?>
                </div>
            </div>
        <?php }?>
	</form>
</div>
<!-- /Block search module TOP --><?php }
}
