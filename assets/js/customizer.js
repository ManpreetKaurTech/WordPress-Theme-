(function($){
    wp.customize('blogname', function(value) {
        value.bind(function(newVal) {
            $('header h1, h1').text(newVal);
        });
    });

    wp.customize('blogdescription', function(value) {
        value.bind(function(newVal) {
            $('p').text(newVal);
        });
    });

    wp.customize('header_color', function(value) {
        value.bind(function(newVal) {
            $('header h1').css('color', newVal);
        });
    });
})(jQuery);
