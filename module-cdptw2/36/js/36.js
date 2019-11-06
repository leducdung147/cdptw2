var mybutton = document.getElementsByClassName("show_back_to_top");
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ) {
      
        $(".scroll_to_top").addClass("show_back_to_top");
        
    } else{
        $(".scroll_to_top").removeClass("show_back_to_top");
    }
}

function topFunction() {
    $('body,html').animate({
        scrollTop: 0 ,
        }, 1000,
        );
}