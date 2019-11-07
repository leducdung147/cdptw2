$(document).ready(function() {

  var swiper1 = new Swiper('.swiper1', {
    speed: 700,

    initialSlide: 0,

    autoHeight: false,

    direction: 'horizontal',
    loop: true,

    autoplay: 1000,
    autoplayStopOnLast: false,
    navigation: {
        nextEl: '.button-next',
    prevEl: '.button-prev',
},
   


    effect: 'slide',

    
    //
    slidesPerView: 4,
    //
    spaceBetween: 20,
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
    //
    grabCursor: true,
    breakpoints: {
    // when window width is >= 320px
    320: {
    slidesPerView: 1,
    spaceBetween: 0
    },
    // when window width is >= 480px
    480: {
    slidesPerView: 1,
    spaceBetween: 0
    },
    // when window width is >= 640px
    640: {
    slidesPerView: 1,
    spaceBetween: 20
    },
    1200: {
    slidesPerView: 4,
    spaceBetween: 20
    }
}
});
var swiper2 = new Swiper('.swiper2', {
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  speed: 700,
  initialSlide: 0,
  autoHeight: false,
  direction: 'horizontal',
  loop: true,
  autoplay: 1000,
  autoplayStopOnLast: false,
  effect: 'slide',
  //
  slidesPerView: 2,
  //
  spaceBetween: 20,
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,
  //
  grabCursor: true,
  breakpoints: {
      // when window width is >= 320px
      320: {
          slidesPerView: 1,
          spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
          slidesPerView: 1,
          spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
          slidesPerView: 1,
          spaceBetween: 20
      },
      1200: {
  slidesPerView: 2,
  spaceBetween: 20
  }
  }
});
var swiper3 = new Swiper('.swiper3', {
  speed: 700,

  initialSlide: 0,

  autoHeight: false,

  direction: 'horizontal',
  loop: true,

  autoplay: 1000,
  autoplayStopOnLast: false,
  navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
  },



  effect: 'slide',


  //
  slidesPerView: 3,
  //
  spaceBetween: 20,
  //
  centeredSlides: false,
  //
  slidesOffsetBefore: 0,
  //
  grabCursor: true,
  breakpoints: {
      // when window width is >= 320px
      320: {
          slidesPerView: 1,
          spaceBetween: 0
      },
      // when window width is >= 480px
      480: {
          slidesPerView: 1,
          spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
          slidesPerView: 1,
          spaceBetween: 0
      },
      768: {
          slidesPerView: 1,
          spaceBetween: 20
      },
      1200: {
  slidesPerView: 3,
  spaceBetween: 20
  }
  }
});

$grid = $('.grid');
$grid.isotope();

$('#food-button,#staff-button, #all-button').click(function() {

  var id = $(this).attr('id');
  var className = id.replace("-button", "");
  $('#food-button,#staff-button, #all-button').removeClass("color");
    $(this).addClass("color");
  if (className == 'all') {
    $grid.isotope({
      filter: '*'
    });
    return false;
  }
  $grid.isotope({
    filter: '.' + className
  });
});
$grid1 = $('.grid1');
$grid1.isotope();
$('#food-button2,#staff-button2, #all-button2').click(function() {

  var id = $(this).attr('id');
  var className = id.replace("-button2", "");
  $('#food-button2,#staff-button2, #all-button2').removeClass("color");
    $(this).addClass("color");
  if (className == 'all') {
    $grid1.isotope({
      filter: '*'
    });
    return false;
  }
  $grid1.isotope({
    filter: '.' + className
  });
});
$grid2 = $('.grid2');
$grid2.isotope();
$('#food-button3,#staff-button3, #all-button3').click(function() {

  var id = $(this).attr('id');
  var className = id.replace("-button3", "");
  $('#food-button3,#staff-button3, #all-button3').removeClass("color");
    $(this).addClass("color");
  if (className == 'all') {
    $grid2.isotope({
      filter: '*'
    });
    return false;
  }
  $grid2.isotope({
    filter: '.' + className
  });
});

});
