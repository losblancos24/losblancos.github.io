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

{if isset($product) && $product}
    <div class="sbc-item-wrapper">
        <img src="{if isset($image_url) && $image_url}{$image_url|escape:'quotes':'UTF-8'}{/if}" alt="" {if isset($display_image) && !$display_image}style="display:none"{/if} width="70" height="70">
        <div class="sbc-content">
            <span class="sbc_name_path">sbcNamePath</span>
            <div class="sbc-product-infor">
                <div class="sbc-product-price"><strong>{if isset($price)}{$price|escape:'html':'UTF-8'}{/if}</strong></div>
                {if isset($html) && $html}
                    {$html nofilter}
                {else}
                {/if}
            </div>
        </div>
    </div>
{/if}