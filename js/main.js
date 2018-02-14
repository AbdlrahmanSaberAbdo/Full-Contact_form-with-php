
$(document).ready(function(){
    'use strict';



    var userEerror =true,
    emailEerror =true,
    msgEerror =true; 

    $('.username').blur(function () {

        if ($(this).val().length < 4) {
            $(this).css('border', '1px solid #f00').parent().find('.alert1').fadeIn(300).end().find('.asterisk').fadeIn(100)
        } else {      
            $(this).css('border', '1px solid green').parent().find('.alert1').fadeOut(200).end().find('.asterisk').fadeOut(100);
            userEerror =false;
           
        }

    });

        $('.email').blur(function () {

        if ($(this).val() == "") {
            $(this).css('border', '1px solid #f00').parent().find('.alert2').fadeIn(300).end().find('.asterisk').fadeIn(100);
        } else {
            
            $(this).css('border', '1px solid green').parent().find('.alert2').fadeOut(200).end().find('.asterisk').fadeOut(100);
            emailEerror =false;     
        }

    });

        $('.message').blur(function () {

        if ($(this).val().length < 11) {
            $(this).css('border', '1px solid #f00').parent().find('.alert3').fadeIn(300).end().find('.asterisk').fadeIn(100);          
        } else {
            $(this).css('border', '1px solid green').parent().find('.alert3').fadeOut(200).end().find('.asterisk').fadeOut(100);
            msgEerror = false;         
        }

    });

        $('.contact_form').submit(function(e) {
        	if(userEerror === true || emailEerror === true || msgEerror === true) {
        		e.preventDefault();
        		$('.username, .email, .message').blur();
        }
    });

});