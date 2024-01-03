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
<!-- Block search module TOP -->
<script type="text/javascript">
var blocksearch_type ='{$blocksearch_type|escape:'htmlall':'UTF-8'}';
var ajaxsearch ='{$ajaxsearch|escape:'htmlall':'UTF-8'}';
var id_lang ={$id_lang|intval};
</script>
<div id="search_block_top" class=" clearfix {if $searched_categories}has-categories-dropdown{else}no-categories-dropdown{/if}">
	<form id="searchbox" method="get" action="{$link->getPageLink('search', null, null, null, false, null, true)|escape:'html':'UTF-8'}" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		{if $searched_categories}
            <div class="table">
                <div class="table-cell searched_categories">
                    <span class="results_select"></span>
                    {$searched_categories nofilter}
                </div>
                <div class="table-cell">
        {/if}
        <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{if isset($ETS_BLOCKSEARCH_PLACEHOLDER) && $ETS_BLOCKSEARCH_PLACEHOLDER}{$ETS_BLOCKSEARCH_PLACEHOLDER|escape:'html':'UTF-8'}{else}{l s='Enter product name ...' mod='ets_searchbycategory'}{/if}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
            <span><svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/></svg></span>
		</button>
        {if $searched_categories}
                </div>
            </div>
        {/if}
	</form>
</div>
<!-- /Block search module TOP -->