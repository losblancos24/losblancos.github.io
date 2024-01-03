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

var instantSearchQueries = [];

$(document).ready(function()
{
	if (typeof result_desc != 'undefined') {
		if ($('#js-product-list-top').length) {
			$('#js-product-list-top div').eq(0).html(`<p>${result_desc}</p>`);
		}
	}
	var selected_text = $('.searched_category').find('option:selected').text();
            $('.results_select').text('').text(selected_text);
    $(window).load(function(){
        var selected_text = $('.searched_category').find('option:selected').text();
            $('.results_select').text('').text(selected_text);
    });
    $(document).on('click','.searched_category',function(){
            var selected_text = $('.searched_category').find('option:selected').text();
            $('.results_select').text('').text(selected_text);
			$(this).find('option').removeClass('selected');
			$(this).find('option:selected').addClass('selected');
    });

	if (typeof blocksearch_type == 'undefined')
		return;
    
	var $input = $("#search_query_" + blocksearch_type);
    
	var width_ac_results = 	$input.parent('form').width();
	if (typeof ajaxsearch != 'undefined' && ajaxsearch) {
		$input.autocompletesearch(
			search_url,
            {			   
				minChars: 3,
				max: 10,
				width: (width_ac_results > 0 ? width_ac_results : 500),
				selectFirst: false,
				scroll: false,
				dataType: "json",
				formatItem: function(data, i, max, value, term) {				    
					return value;
				},				                   
				parse: function(data) {
				    var mytab = [];
					for (var i = 0; i < data.length; i++)
						mytab[mytab.length] = { data: data[i], value: (data[i].img_url != '' ? '<img width="40" height="40" src="'+data[i].img_url+'"/>' : '') + data[i].cname + ' > ' + data[i].pname };
					return mytab;
				},
				extraParams: {
					ajaxSearch: 1,
					id_lang: id_lang, 
                },               
			}
		)
		.result(function(event, data, formatted) {
			$input.val(data.pname);
			document.location.href = data.product_link;
		});
	}

	if (typeof instantsearch != 'undefined' && instantsearch) {
		$input.on('keyup', function(){
			if($(this).val().length > 4)
			{
				stopInstantSearchQueries();
				instantSearchQuery = $.ajax({
					url: search_url + '?rand=' + new Date().getTime(),
					data: {
						instantSearch: 1,
						id_lang: id_lang,
						q: $(this).val(),
                        searched_category : $('select[name="searched_category"]').length > 0 ? $('select[name="searched_category"]').val() : 0
					},
					dataType: 'html',
					type: 'POST',
					headers: { "cache-control": "no-cache" },
					async: true,
					cache: false,
					success: function(data){
						if ($input.val().length > 0) {
							tryToCloseInstantSearch();
							$('#center_column').attr('id', 'old_center_column');
							$('#old_center_column').after('<div id="center_column" class="' + $('#old_center_column').attr('class') + '">' + data + '</div>').hide();
							// Button override
							ajaxCart.overrideButtonsInThePage();
							$("#instant_search_results a.close").on('click', function() {
								$input.val('');
								return tryToCloseInstantSearch();
							});
							return false;
						}
						else
							tryToCloseInstantSearch();
					}
				});
				instantSearchQueries.push(instantSearchQuery);
			}
			else
				tryToCloseInstantSearch();
		});
	}
});

function tryToCloseInstantSearch()
{
	var $oldCenterColumn = $('#old_center_column');
	if ($oldCenterColumn.length > 0)
	{
		$('#center_column').remove();
		$oldCenterColumn.attr('id', 'center_column').show();
		return false;
	}
}

function stopInstantSearchQueries()
{
	for(var i=0; i<instantSearchQueries.length; i++)
		instantSearchQueries[i].abort();
	instantSearchQueries = [];
}