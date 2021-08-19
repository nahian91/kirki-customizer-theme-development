(function($){

    wp.customize('banner_heading', function(value){
        value.bind(function(newval){
            $('.welcome-content h4').html(newval)
        })
    });

    wp.customize('banner_desc', function(value){
        value.bind(function(newval){
            $('.welcome-content p').html(newval)
        })
    });

    wp.customize('banner_heading_color', function(value){
        value.bind(function(newval){
            $('.welcome-content h4').css('color', newval)
        })
    });

}) (jQuery);