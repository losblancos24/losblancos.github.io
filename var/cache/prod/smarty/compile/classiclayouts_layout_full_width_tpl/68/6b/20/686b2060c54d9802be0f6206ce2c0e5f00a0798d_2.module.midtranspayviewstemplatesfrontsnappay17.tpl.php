<?php
/* Smarty version 4.3.1, created on 2024-01-03 15:09:37
  from 'module:midtranspayviewstemplatesfrontsnappay17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65951641796274_68932252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686b2060c54d9802be0f6206ce2c0e5f00a0798d' => 
    array (
      0 => 'module:midtranspayviewstemplatesfrontsnappay17.tpl',
      1 => 1637656660,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65951641796274_68932252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688792355659516417795b9_38991230', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layout']->value));
}
/* {block "content"} */
class Block_688792355659516417795b9_38991230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_688792355659516417795b9_38991230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 data-cfasync="false" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snap_script_url']->value, ENT_QUOTES, 'UTF-8');?>
" data-client-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['client_key']->value, ENT_QUOTES, 'UTF-8');?>
" id="snap_script"><?php echo '</script'; ?>
>
<section id="main">
	<header class="page-header">
		<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Step','mod'=>'midtranspay'),$_smarty_tpl ) );?>
</h1>
	</header>
	<section id="content" class="page-content page-cms">
		<h3 class="page-subheading">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment via Midtrans.','mod'=>'midtranspay'),$_smarty_tpl ) );?>

			<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['this_path']->value, ENT_QUOTES, 'UTF-8');?>
Midtrans.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'midtrans','mod'=>'midtranspay'),$_smarty_tpl ) );?>
" width="120" height="21" style=" float:left; margin: 0px 10px 5px 0px;" />
		</h3><br/>

		<div class="text-xs-center" id="payment-notice">
		<?php if ($_smarty_tpl->tpl_vars['status']->value == 'token_exist') {?>
			<p>
				<h3 class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please complete your payment ...','mod'=>'midtranspay'),$_smarty_tpl ) );?>
</h3>
			</p>

			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue payment via payment popup window.','mod'=>'midtranspay'),$_smarty_tpl ) );?>
 <br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or click button below:','mod'=>'midtranspay'),$_smarty_tpl ) );?>
 <br/><br/>
				
				<a href="#" id='pay-button' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do Payment!'),$_smarty_tpl ) );?>
" class="btn btn-success"> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loading Payment..'),$_smarty_tpl ) );?>
 </a> 			<br/><br/>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have questions, comments or concerns, please contact our','mod'=>'midtranspay'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer support team','mod'=>'midtranspay'),$_smarty_tpl ) );?>
</a><br/><br/>
			</p>

		<?php } else { ?>
			<p>
				<h3 class="alert alert-danger"> <i class="material-icons">warning</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Error!','mod'=>'midtranspay'),$_smarty_tpl ) );?>
</h3>
			</p>

			<p class="warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. Please do re-checkout.
				If you think this is an error, feel free to contact our','mod'=>'midtranspay'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team','mod'=>'midtranspay'),$_smarty_tpl ) );?>
</a> <br/><br/>
			</p>
			<a class="btn btn-primary" href='<?php ob_start();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['order_id']->value )), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink("order",true,NULL,"submitReorder&id_order=".$_prefixVariable1),"html","UTF-8" )), ENT_QUOTES, 'UTF-8');?>
' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Re-Checkout'),$_smarty_tpl ) );?>
"> 
			<i class="material-icons">refresh</i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Re-Checkout'),$_smarty_tpl ) );?>
</a>
		<?php }?>

		</div>
		
		<div class="text-xs-center" id="pending-notice" style="display:none;">
			<p>
				<h3 class="alert alert-info"> <i class="material-icons">schedule</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Complete your payment ... '),$_smarty_tpl ) );?>
</h3>
			</p>
			<p class="warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please complete your payment as instructed before, your order status will be updated on our system once payment is complete. Once you have completed your payment check your email or "Order History" menu. You can also check your email for instruction.'),$_smarty_tpl ) );?>

			</p>

			<a  target="_blank" href="#" id='instruction-button' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Payment Instruction'),$_smarty_tpl ) );?>
" class="button-exclusive btn btn-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Payment Instruction'),$_smarty_tpl ) );?>
 <i class="icon-chevron-right right"></i></a>
			<p>
				<br>
				<a href="<?php echo html_entity_decode(mb_convert_encoding($_smarty_tpl->tpl_vars['moduleSuccessUrl']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');?>
">I have completed my payment</a>
			</p>
		</div> <br/><br/><br/>

	</section>

</section>

 
<!-- start Mixpanel -->
<?php echo '<script'; ?>
 data-cfasync="false" type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);mixpanel.init("<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mixpanel_key']->value, ENT_QUOTES, 'UTF-8');?>
");<?php echo '</script'; ?>
>
<!-- end Mixpanel -->


<?php echo '<script'; ?>
 data-cfasync="false" type="text/javascript">
var mixpanel = mixpanel ? mixpanel : { init : function(){}, track : function(){} };

var mainMidtransScriptRan = false;
var mainMidtransScript = function(event) { 
	if(mainMidtransScriptRan){ return false};
	mainMidtransScriptRan = true;
	var payButton = document.getElementById('pay-button');
	function MixpanelTrackResult(token, merchant_id, cms_name, cms_version, plugin_name, plugin_version, status, result) {
		var eventNames = {
			pay: 'pg-pay',
			success: 'pg-success',
			pending: 'pg-pending',
			error: 'pg-error',
			close: 'pg-close'
		};
		mixpanel.track(
			eventNames[status], 
			{
				merchant_id: merchant_id,
				cms_name: cms_name,
				cms_version: cms_version,
				plugin_name: plugin_name,
				plugin_version: plugin_version,
				snap_token: token,
				payment_type: result ? result.payment_type: null,
				order_id: result ? result.order_id: null,
				status_code: result ? result.status_code: null,
				gross_amount: result && result.gross_amount ? Number(result.gross_amount) : null,
			}
		);
	}

	var SNAP_TOKEN = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['snap_token']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
";
	var MERCHANT_ID = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchant_id']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
";
	var CMS_NAME = "prestashop";
	var CMS_VERSION = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms_version']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
";
	var PLUGIN_NAME = "prestashop_main";
	var PLUGIN_VERSION = "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin_version']->value,'htmlall' )), ENT_QUOTES, 'UTF-8');?>
";

	// Continously retry to execute SNAP popup if fail, with 1000ms delay between retry
	var execCount = 0;
	var snapExecuted = false;
	var intervalFunction = 0;

	function execSnapCont(){
		var baseRedirectUrl = "<?php echo html_entity_decode(mb_convert_encoding($_smarty_tpl->tpl_vars['moduleSuccessUrl']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');?>
";
		var baseFailureRedirectUrl = "<?php echo html_entity_decode(mb_convert_encoding($_smarty_tpl->tpl_vars['moduleFailureUrl']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');?>
";
		try{
			var locationUrl = document.createElement("a");
			locationUrl.href = baseRedirectUrl;
			var isContainsQueryString = locationUrl.search.length > 0;
			if(!isContainsQueryString){
				baseRedirectUrl = baseRedirectUrl+'?';
				baseFailureRedirectUrl = baseFailureRedirectUrl+'?';
			}
		} catch(e){}

		intervalFunction = setInterval(function() {
			try{
				console.log('Popup attempt:',++execCount);
				snap.pay(SNAP_TOKEN , 
				{
					skipOrderSummary: true,
					onSuccess: function(result){
						MixpanelTrackResult(SNAP_TOKEN, MERCHANT_ID, CMS_NAME, CMS_VERSION, PLUGIN_NAME, PLUGIN_VERSION, 'success', result);
						console.log(result?result:'no result');
						payButton.innerHTML = 'Loading...';
<?php if ($_smarty_tpl->tpl_vars['isUsingMAPFinishUrl']->value) {?>
						window.location = result.finish_redirect_url;
<?php } else { ?>
						
						window.location = baseRedirectUrl+"&order_id="+result.order_id+"&status_code="+result.status_code+"&transaction_status="+result.transaction_status; //literal
						 
<?php }?>
					},
			        onPending: function(result){
			        	MixpanelTrackResult(SNAP_TOKEN, MERCHANT_ID, CMS_NAME, CMS_VERSION, PLUGIN_NAME, PLUGIN_VERSION, 'pending', result);
						console.log(result?result:'no result');
			        	if (result.fraud_status == 'challenge'){ // if challenge redirect to finish
			        		payButton.innerHTML = 'Loading...';
			        		
							window.location = baseRedirectUrl+"&order_id="+result.order_id+"&status_code="+result.status_code+"&transaction_status="+result.transaction_status;
							
						}
						if (typeof result.pdf_url == 'undefined'){ // if no link, hide btn
							document.getElementById('instruction-button').style.display = "none";
						} else {
			        		document.getElementById('instruction-button').href = result.pdf_url;
						}
			        	document.getElementById('payment-notice').style.display = "none";
			        	document.getElementById('pending-notice').style.display = "block";
			        },
					onError: function(result){
						MixpanelTrackResult(SNAP_TOKEN, MERCHANT_ID, CMS_NAME, CMS_VERSION, PLUGIN_NAME, PLUGIN_VERSION, 'error', result);
						console.log(result?result:'no result');
						payButton.innerHTML = 'Loading...';
						 
						window.location = baseFailureRedirectUrl+"&order_id="+result.order_id+"&status_code="+result.status_code+"&transaction_status="+result.transaction_status;
						 
					},
					onClose: function(){
						MixpanelTrackResult(SNAP_TOKEN, MERCHANT_ID, CMS_NAME, CMS_VERSION, PLUGIN_NAME, PLUGIN_VERSION, 'close', null);
					}

				});
				snapExecuted = true; // if SNAP popup executed, change flag to stop the retry.
			} catch (e){ 
				if(execCount >= 20){
					location.reload(); payButton.innerHTML = "Loading..."; return;
				}
				console.log(e);
				console.log('Snap s.goHome not ready yet... Retrying in 1000ms!');
			} finally {
				if (snapExecuted) {
					// record 'pay' event to Mixpanel
					MixpanelTrackResult(SNAP_TOKEN, MERCHANT_ID, CMS_NAME, CMS_VERSION, PLUGIN_NAME, PLUGIN_VERSION, 'pay', null);
					clearInterval(intervalFunction);
				}
			}
		}, 1000);
	};
	var clickCount = 0;
	payButton.innerHTML = '<i class="material-icons">payment</i> &nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Proceed to Payment"),$_smarty_tpl ) );?>
 <i class="material-icons">chevron_right</i>';
	payButton.onclick = function(){
		if(clickCount >= 2){
			location.reload();
			payButton.innerHTML = 'Loading...';
			return;
		}
		execSnapCont();
		clickCount++;
	};
	
	// Call execSnapCont() 
	execSnapCont();
};

document.addEventListener("DOMContentLoaded", mainMidtransScript);
setTimeout(function(){ console.log('calling'); mainMidtransScript(null); }, 30000);  // failover, run main script if it never ran
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
