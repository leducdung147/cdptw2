<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./6/scss/6.css" >
    <link rel="stylesheet" href="./7/scss/7.css" >
    <link rel="stylesheet" href="./8/scss/8.css" >
    <link rel="stylesheet" href="./9/scss/9.css" >
    <link rel="stylesheet" href="./10/scss/10.css" >
    <link rel="stylesheet" href="./11/scss/11.css" >
    <link rel="stylesheet" href="./12/scss/12.css" >
    <link rel="stylesheet" href="./13/scss/13.css" >
    <link rel="stylesheet" href="./14/scss/14.css" >
    
    <link href="./css/swiper.min.css" rel="stylesheet" type="text/css" />

</head>
  <body>

      <?php include "./6/6-content.php"; ?>
      <?php include "./7/7-content.php"; ?>
      <?php include "./8/8-content.php"; ?>
      <?php include "./9/9-content.php"; ?>
      <?php include "./10/10-content.php"; ?>
      <?php include "./11/11-content.php"; ?>
      <?php include "./12/12-content.php"; ?>
      <?php include "./13/13-content.php"; ?>
      <?php include "./14/14-content.php"; ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='./js/swiper.min.js'></script>
    <script src='./js/swiper.min.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script src="./js/script_13.js"></script>
<script>

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

</script>

<script>

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
</script>

<script>

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

</script>