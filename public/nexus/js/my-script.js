/*--================Scroll Animate=================*/
jQuery(document).ready(function($) { 
    $(".scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
   });
});
/*--================End Scroll Animate=================*/


/*--================Back to Top =================*/
$(function () {
    $('.back-to-top').hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });
});
/*--================Back to Top =================*/