/* 
 * Main
 *
 */


// Initiate the wowjs
new WOW().init();

$('document').ready(function () {

    //smoothscroll
    $('.navbar-nav a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        var target = this.hash,
            menu = target;
        var target = $(this.hash);
        $('html, body').stop().animate({
            scrollTop: (target.offset().top) - 40
        }, 800, 'swing', function () {
            $(document).on("scroll", onScroll);
        });
    });

    // add & removing fonts
    $(".navbar-toggler").click(function () {
        $(this).find(".fa").toggleClass("fa fa-bars fa fa-times");
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return true;
    });


   /**
   * dark & light mode
   */
    var darkMode;
    if (localStorage.getItem('dark-mode')) {
        darkMode = localStorage.getItem('dark-mode');
    } else {
        darkMode = 'light';
    }

    localStorage.setItem('dark-mode', darkMode);

    if (localStorage.getItem('dark-mode') == 'th-dark') {
        $('body').addClass('th-dark');
        $('.dark-button').hide();
        $('.light-button').show();
    }


    $('.dark-button').on('click', function () {
        $('.dark-button').hide();
        $('.light-button').show();
        $('body').addClass('th-dark');
        localStorage.setItem('dark-mode', 'th-dark');
    });

    $('.light-button').on('click', function () {
        $('.light-button').hide();
        $('.dark-button').show();
        $('body').removeClass('th-dark');
        localStorage.setItem('dark-mode', 'light');
    });


    $('.dark-button-sm').on('click', function () {
        $('.dark-button-sm').hide();
        $('.light-button-sm').show();
        $('body').addClass('th-dark');
        localStorage.setItem('dark-mode', 'th-dark');
    });

    $('.light-button-sm').on('click', function () {
        $('.light-button-sm').hide();
        $('.dark-button-sm').show();
        $('body').removeClass('th-dark');
        localStorage.setItem('dark-mode', 'light');
    });


    
    if ($(window).width() < 992) {

        // navbar-collapse
        $('.collapse, .navbar-nav, .nav-link').click(function () {
            $('.navbar-collapse').collapse('toggle');
            $('.navbar-toggler').find(".fa").toggleClass("fa fa-bars fa fa-times");
        });

        $(".swiffy-slider").addClass("slider-nav-mousedrag");
        $(".swiffy-slider").removeClass("slider-nav-page");

    }
    

    if ($(window).width() > 992) {

        /*
         * img lightbox
         */

        // img
        $('.gallery img').on('click', function () {
            var src = $(this).attr("src");
            $(".lb-img").attr("src", src);
            $('.overley').fadeIn('slow');
            $('.overley-content').fadeIn('slow');
        });

        $('.nextButton').on('click', function (event) {
            $(".overley-content img").hide();
            var $currentImgSrc = $(".overley-content img").attr("src");
            var $currentImg = $('.gallery img[src="' + $currentImgSrc + '"]');
            var $nextImg = $($currentImg.closest(".img").next().find("img"));
            var $images = $(".gallery img");
            if ($nextImg.length > 0) {
                $(".overley-content img").attr("src", $nextImg.attr("src")).fadeIn(800);
            } else {
                $(".overley-content img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            }
            event.stopPropagation();
        });
        $('.prevButton').on('click', function (event) {
            $(".lb-img").hide();
            var $currentImgSrc = $(".lb-img").attr("src");
            var $currentImg = $('.gallery img[src="' + $currentImgSrc + '"]');
            var $nextImg = $($currentImg.closest(".img").prev().find("img"));
            $(".lb-img").attr("src", $nextImg.attr("src")).fadeIn(800);
            event.stopPropagation();
        });


        $('.exitButton').on('click', function () {
            $('.overley').fadeOut('slow');
            $('.overley-content').fadeOut('slow');
        });
        $('.overley-content').on('click', function () {
            $('.overley').fadeOut('slow');
            $('.overley-content').fadeOut('slow');
        });

    }
/*
  * video lightbox
  */

$('.vid-lb').on('click', function (event) {
    event.preventDefault();
    var src = $(this).attr("href");
    $(".vid-frame").attr("src", src);
    $('.vid-overley').fadeIn('slow');
    $('.video-content').fadeIn('slow');
  });

  // exit
  $('.exitBtn').on('click', function () {
    $('.vid-overley').fadeOut('slow');
    $('.video-content').fadeOut('slow');
    var src = $(this).attr("href");
    $(".vid-frame").attr("src", '');
  });
  // overley
  $('.video-content').on('click', function () {
    $('.vid-overley').fadeOut('slow');
    $('.video-content').fadeOut('slow');
    var src = $(this).attr("href");
    $(".vid-frame").attr("src", '');
  });

});




