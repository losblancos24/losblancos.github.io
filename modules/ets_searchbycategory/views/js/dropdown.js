/*
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
*/

$(document).ready(function(){
    if($('.nice-select.searched_category .list li').length > 0 && searched_category!=0)
    {
        $('select[name="searched_category"]').val(searched_category).trigger('change');
        $('.nice-select.searched_category .current').text($('.nice-select.searched_category .list li[data-value="'+searched_category+'"]').html());
        $('.nice-select.searched_category .list li').removeClass('selected').removeClass('focus');
        $('.nice-select.searched_category .list li[data-value="'+searched_category+'"]').addClass('selected');
    }            
});