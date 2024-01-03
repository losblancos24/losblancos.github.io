<?php
/* Smarty version 4.3.1, created on 2024-01-03 11:50:30
  from 'C:\xampp\htdocs\losblancos\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6594e79649b4f4_55107595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa2297ee30970d81e0810908fc622e681678c2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\losblancos\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6594e79649b4f4_55107595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\losblancos\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\aa\\a2\\29\\aaa2297ee30970d81e0810908fc622e681678c2d_2.file.helpers.tpl.php',
    'uid' => 'aaa2297ee30970d81e0810908fc622e681678c2d',
    'call_name' => 'smarty_template_function_renderLogo_19804738996594e796495887_10440092',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_19804738996594e796495887_10440092 */
if (!function_exists('smarty_template_function_renderLogo_19804738996594e796495887_10440092')) {
function smarty_template_function_renderLogo_19804738996594e796495887_10440092(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_19804738996594e796495887_10440092 */
}
