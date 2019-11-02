$(".module-2__nav-item").hover(function() {
    const element = $(this);
    element.find(".module-2__nav-item-dropdown").dropdown("toggle");
})

$('.module-2__navbar-toggler').click(function() {
    $(".module-2__navbar-collapse").addClass("show");
})

$('.module-2__navbar-collapse-place-holder').on("click", (function() {
    $(".module-2__navbar-collapse").removeClass("show");
}))