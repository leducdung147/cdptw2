var mybutton = document.getElementsByClassName("show");
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

        $('.show').css('display', 'block');
    } else {
        $('.show').css('display', 'none');
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}