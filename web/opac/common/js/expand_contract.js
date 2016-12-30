jQuery.noConflict();
jQuery(document).ready(function(){
jQuery(function () {
    jQuery('nav').on('click', 'li', function () {
        jQuery(this).children('ul').slideToggle(function() {
            jQuery(this).toggleClass('in out');
        return false;
        });

        jQuery(this).siblings().find('ul').slideUp(function() {
            jQuery(this).removeClass('in').addClass('out');
        return false;
        });
    return false;
    });
return false;
});
return false;
});
