{*
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*}
<!-- Block search module -->
<script type="text/javascript">
var blocksearch_type ='{$blocksearch_type|escape:'htmlall':'UTF-8'}';
var ajaxsearch =true;
var id_lang ={$id_lang|intval};
</script>
<div id="search_block_left" class="exclusive {if $searched_categories}has-categories-dropdown{else}no-categories-dropdown{/if}">
	<h4 class="title_block text-uppercase h6 hidden-sm-down" style="text-transform: uppercase">{l s='Search product: ' mod='ets_searchbycategory'}</h4>
	<form method="get" action="{$link->getPageLink('search', true, null, null, false, null, true)|escape:'html':'UTF-8'}" id="searchbox">
		<div class="block_content clearfix">
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
            {if $searched_categories}
            <div class="sbc_input-wrapper">
                <div class="searched_categories">
                    <span class="results_select"></span>
                    {$searched_categories nofilter}
                </div>
                <div class="sbc_input-query">
                    {/if}
                    <input class="search_query form-control grey" type="text" id="search_query_block" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" placeholder="{if isset($ETS_BLOCKSEARCH_PLACEHOLDER) && $ETS_BLOCKSEARCH_PLACEHOLDER}{$ETS_BLOCKSEARCH_PLACEHOLDER|escape:'html':'UTF-8'}{else}{l s='Search ...' mod='ets_searchbycategory'}{/if}" />
                    <button type="submit" id="search_button" class="btn btn-default button button-small">
                        <span><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg></span>
                    </button>
                    {if $searched_categories}
                </div>
            </div>
            {/if}
        </div>
	</form>
</div>
<!-- /Block search module -->