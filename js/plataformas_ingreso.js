/*Efecto plataformas*/

/*jslint indent: 4 */
/*global document, $ */


$(document).ready(function () {
    
    // **** Pregrado ****
    'use strict';
    $('#pregrado-img').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-login').css('display', 'none');

        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'block');
//        $('#section-instructions').css('height', '5.5em');
    });
    
    $('#pregrado-head').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'block');
//        $('#section-instructions').css('height', '5.5em');
    });
        
    // **** Posgrado ****
    
    $('#posgrado-img').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'none');
        $('#instrucciones-posgrado').css('display', 'block');
//      $('#section-instructions').css('height', '4.5em');
    });
    $('#posgrado-head').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'none');
        $('#instrucciones-posgrado').css('display', 'block');
//        $('#section-instructions').css('height', '4.5em');
    });
    
    // **** iPred ****    
    
    $('#ipred-img').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'block');
//        $('#section-instructions').css('height', '5.5em');
    });
    $('#ipred-head').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'none');
        $('#instrucciones-generales').css('display', 'block');
//      $('#section-instructions').css('height', '5.5em');
    });
    
    // **** Instituto de Lenguas ****
    
    $('#lenguas-img').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-generales').css('display', 'none');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'block');
//        $('#section-instructions').css('height', '5.5em');        
    });
    $('#lenguas-head').click(function () {
//        $('#formulario-login').attr('action', '<?php echo $CFG->httpswwwroot; ?>/ava/login/index.php'); 
        $('#section-login').removeClass('active');
        $('#section-login').addClass('inactive');
        $('#section-form').removeClass('inactive');
        $('#section-form').addClass('active');
        $('#section-instructions').removeClass('inactive');
        $('#section-instructions').addClass('active');
        $('#instrucciones-generales').css('display', 'none');
        $('#instrucciones-posgrado').css('display', 'none');
        $('#instrucciones-ingles').css('display', 'block');
//        $('#section-instructions').css('height', '5.5em');
    });
    
     // **** Back ****
    
    $('#back-head').click(function () {
        $('#section-form').removeClass('active');
        $('#section-form').addClass('inactive');
        $('#section-login').removeClass('inactive');
        $('#section-login').addClass('active');
        $('#section-instructions').removeClass('active');
        $('#section-instructions').addClass('inactive');
    });
    
    $('#back-image').click(function () {
        $('#section-form').removeClass('active');
        $('#section-form').addClass('inactive');
        $('#section-login').removeClass('inactive');
        $('#section-login').addClass('active');
        $('#section-instructions').removeClass('active');
        $('#section-instructions').addClass('inactive');
    });
    
    // **** Mobile Navigation ****
    
    $('.js--nav-icon').click(function () {
        var nav = $('.js--text-mob-nav'),
            icon = $('.mobile-nav-icon i');
        
        nav.slideToggle(200);
        
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }
    });
    
});
