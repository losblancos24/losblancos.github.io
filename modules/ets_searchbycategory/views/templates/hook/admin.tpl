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
<script type="text/javascript">
    var clearCacheTxt = '{$clearCacheTxt|escape:'quotes':'UTF-8'}';
    var clearCacheAlertTxt = '{$clearCacheAlertTxt|escape:'quotes':'UTF-8'}';
    var clearCacheLink = '{$clearCacheLink|escape:'quotes':'UTF-8'}';
    {literal}
        $(document).ready(function(){
            if($('input[name="ETS_BLOCKSEARCH_CACHE"]').parents('.col-lg-9').length > 0)
            {
                $('input[name="ETS_BLOCKSEARCH_CACHE"]').parents('.col-lg-9').eq(0).append('<br/><span style="display: none; color: #2eacce; font-style: italic; cursor: pointer;" id="ybc_search_clear_cache">'+clearCacheTxt+'</span><div id="ybc_search_clear_cache_alert" class="alert alert-success" style="display: none;">'+clearCacheAlertTxt+'</div>');
                if(parseInt($('input[name="ETS_BLOCKSEARCH_CACHE"]:checked').val()) == 1)
                    $('#ybc_search_clear_cache').show();
                else
                    $('#ybc_search_clear_cache').hide();
                $(document).on('change','input[name="ETS_BLOCKSEARCH_CACHE"]',function(){
                    if(parseInt($(this).val())==1)
                        $('#ybc_search_clear_cache').show();
                    else
                        $('#ybc_search_clear_cache').hide();
                });
                $(document).on('click','#ybc_search_clear_cache',function(){
                    if(!$(this).hasClass('active'))
                    {
                        $(this).addClass('active');
                        $(this).css('opacity','0.3');
                        $.ajax({
                            url: clearCacheLink,
                            type: 'post',
                            dataType: 'json',
                            success: function(json)
                            {
                                $('#ybc_search_clear_cache').removeClass('active');
                                $('#ybc_search_clear_cache').css('opacity','1');
                                $('#ybc_search_clear_cache_alert').fadeIn().delay(5000).fadeOut();
                            },
                            error: function(json)
                            {
                                $('#ybc_search_clear_cache').removeClass('active');
                                $('#ybc_search_clear_cache').css('opacity','1');
                            }
                        });
                    }
                    return false;
                });
            }            
        });
    {/literal}
</script>