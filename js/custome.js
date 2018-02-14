
$(document).ready(function(){
    'use strict';
    $('.username').blur(function () {

        if ($(this).val().length < 4) {

            $(this).css('border', '1px solid #f00')
            
            $(this).parent().find('.alert1').fadeIn(300);
            
            $(this).parent(). find('.asterisk').fadeIn(100);
           
            
        } else {
            
            $(this).css('border', '1px solid green')
            
            $(this).parent().find('.alert1').hide(200);

            $(this).parent(). find('.asterisk').fadeOut(100);
            
           
        }
    });

        $('.email').blur(function () {

        if ($(this).val() == "") {

            $(this).css('border', '1px solid #f00')
            
            $(this).parent().find('.alert1').fadeIn(300);
            
            $(this).parent().find('.asterisk').fadeIn(100);
           
            
        } else {
            
            $(this).css('border', '1px solid green')
            
            $(this).parent().find('.alert1').fadeOut(200);

            $(this).parent(). find('.asterisk').fadeOut(100);
            
           
        }
    });

        $('.message').blur(function () {

        if ($(this).val().length < 11) {

            $(this).css('border', '1px solid #f00')
            
            $(this).parent().find('.alert1').fadeIn(300);
            
            $(this).parent(). find('.asterisk').fadeIn(100);
           
            
        } else {
            
            $(this).css('border', '1px solid green')
            
            $(this).parent().find('.alert1').fadeOut(200);

            $(this).parent(). find('.asterisk').fadeOut(100);
            
           
        }
    });
});