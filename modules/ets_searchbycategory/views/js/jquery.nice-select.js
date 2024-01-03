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

(function($) {

  $.fn.niceSelect = function() {

    // Create custom markup
    this.each(function() {
      var select = $(this);
      
      if (!select.next().hasClass('nice-select')) {
        select.after('<div class="nice-select ' + (select.attr('class') || '') + (select.attr('disabled') ? 'disabled' : '" tabindex="0') + 
          '"><span class="current" data-title="&#62;"></span><ul class="list"></ul></div>');
        
        var dropdown = select.next();
        var options = select.find('option');
        var selected = select.find('option:selected');
        
        dropdown.find('.current').html(selected.data('display') || selected.text());
        
        options.each(function() {
          var display = $(this).data('display');
          dropdown.find('ul').append('<li class="option ' + ($(this).is(':selected') ? 'selected' : '') + 
            '" data-value="' + $(this).val() + (display ? '" data-display="' + display : '') + '">' + 
            $(this).text() + '</li>');
        });
      }
    });
    
    /* Event listeners */
    
    // Unbind existing events in case that the plugin has been initialized before
    $(document).off('.nice_select');
    
    // Open/close
    $(document).on('click.nice_select', '.nice-select', function(event) {
      var dropdown = $(this);
      
      $('.nice-select').not(dropdown).removeClass('open');
      dropdown.toggleClass('open');
      
      if (dropdown.hasClass('open')) {
        dropdown.find('.option');  
        dropdown.find('.focus').removeClass('focus');
        dropdown.find('.selected').addClass('focus');
      } else {
        dropdown.focus();
      }
    });
    
    // Close when clicking outside
    $(document).on('click.nice_select', function(event) {
      if ($(event.target).closest('.nice-select').length === 0) {
        $('.nice-select').removeClass('open').find('.option');  
      }
    });
    
    // Option click
    $(document).on('click.nice_select', '.nice-select .option', function(event) {
      var option = $(this);
      var dropdown = option.closest('.nice-select');
      
      dropdown.find('.selected').removeClass('selected');
      option.addClass('selected');
      
      var text = option.data('display') || option.text();
      dropdown.find('.current').text(text);
      
      dropdown.prev('select').val(option.data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown.nice_select', '.nice-select', function(event) {    
      var dropdown = $(this);
      var focused_option = $(dropdown.find('.focus') || dropdown.find('.list .option.selected'));
      
      // Space or Enter
      if (event.keyCode == 32 || event.keyCode == 13) {
        if (dropdown.hasClass('open')) {
          focused_option.trigger('click');
        } else {
          dropdown.trigger('click');
        }
        return false;
      // Down
      } else if (event.keyCode == 40) {
        if (!dropdown.hasClass('open')) {
          dropdown.trigger('click');
        } else {
          if (focused_option.next().length > 0) {
            dropdown.find('.focus').removeClass('focus');
            focused_option.next().addClass('focus');
          }
        }
        return false;
      // Up
      } else if (event.keyCode == 38) {
        if (!dropdown.hasClass('open')) {
          dropdown.trigger('click');
        } else {
          if (focused_option.prev().length > 0) {
            dropdown.find('.focus').removeClass('focus');
            focused_option.prev().addClass('focus');
          }
        }
        return false;
      // Esc
      } else if (event.keyCode == 27) {
        if (dropdown.hasClass('open')) {
          dropdown.trigger('click');
        }
      // Tab
      } else if (event.keyCode == 9) {
        if (dropdown.hasClass('open')) {
          return false;
        }
      }
    });

  };

}(jQuery));

jQuery(document).ready(function() {
  jQuery('#search_block_top select.searched_category').niceSelect();
});