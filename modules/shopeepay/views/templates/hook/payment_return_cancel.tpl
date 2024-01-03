{extends file='page.tpl'}

{assign var='current_step' value='payment'}
{*{include file="$tpl_dir./order-steps.tpl"}*}

	{block name='page_content'}
	
	<div class="box cheque-box">
        <h3 class="page-subheading">
            SHOPEEPAY
        </h3>
        <p class="cheque-indent">
            <strong class="dark">
                Your Payment is canceled.
            </strong>
        </p>
       <br/>{l s='If you have questions, comments or concerns, please contact our' mod='shopeepay'} <a
	href="{$link->getPageLink('contact', true)|escape:'html'}">{l s='expert customer support team' mod='shopeepay'}</a>.
    </div>
{/block}