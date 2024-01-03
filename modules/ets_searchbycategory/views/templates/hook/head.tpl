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

<style>

    {if isset($ETS_DISPLAY_PRICE) && isset($ETS_DISPLAY_RATING)}
    .sbc-product-price {
        display:{if $ETS_DISPLAY_PRICE}{else}none !important{/if};
    }
    .sbc-item-wrapper .product-list-reviews{
    display:{if $ETS_DISPLAY_RATING}{else}none !important{/if};
    }
    {/if}
    {if isset($ETS_BLOCKSEARCH_BUTTON_COLOR)}
    #search_block_top .button-search, .sbc_show_more.ac_over,
    .searched_category option:hover
    {
        background-color: {$ETS_BLOCKSEARCH_BUTTON_COLOR|escape:'html':'UTF-8'} !important;
    }
    {/if}
    {if isset($ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR)}
    #search_block_top .button-search:hover,.sbc_show_more:hover {
        background-color: {$ETS_BLOCKSEARCH_BUTTON_HOVER_COLOR|escape:'html':'UTF-8'} !important;
    }
    {/if}
</style>