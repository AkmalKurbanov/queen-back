"use strict";
$(document).ready(function () {
  new Swiper(".mainSlider-js", {
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: !0,
    loopFillGroupWithBlank: !0,
    autoHeight: !0,
    autoplay: {
      delay: 5e3,
      disableOnInteraction: !1
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: !0
    }
  }), new Swiper(".platformSlider-js", {
    slidesPerView: 5,
    slidesPerGroup: 1,
    loop: !0,
    loopFillGroupWithBlank: !0,
    autoHeight: !0,
    autoplay: {
      delay: 3e3,
      disableOnInteraction: !1
    },
    breakpoints: {
      991: {
        slidesPerView: 4
      },
      767: {
        slidesPerView: 3
      },
      575: {
        slidesPerView: 2
      },
      400: {
        slidesPerView: 1
      }
    }
  }), new Swiper(".reviewsSlider-js", {
    slidesPerView: 3,
    slidesPerGroup: 1,
    loop: !0,
    loopFillGroupWithBlank: !0,
    autoHeight: !0,
    autoplay: {
      delay: 2500,
      disableOnInteraction: !1
    },
    breakpoints: {
      991: {
        slidesPerView: 2
      },
      850: {
        slidesPerView: 1
      }
    }
  });
  $(".mmenu-js ul").clone().appendTo(".mmenu-nav");
  var e = $(".mmenu-nav").mmenu({
      pageScroll: true,
      navbar: {
        title: "<img src='images/svg/logoHeader.svg' alt='' />"
      },
      extensions: ["pagedim-black", "position-right", "theme-dark"],
      counters: !0,
      iconbar: {
        add: !0,
        top: ["<a class='fal fa-home' href='/'><i class=''></i></a>"],
        bottom: ["<a target='_blank' href='#'><i class='fas fa-sign-in-alt'></i></a>",

        ]
      },
      navbars: [{
        position: "bottom",
        content: ["<a target='_blank' href='#'><i class='fab fa-facebook-f'></i></a>",
          "<a target='_blank' href='#'><i class='fab fa-vk'></i></a>",
          "<a target='_blank' href='#'><i class='fab fa-instagram'></i></a>",
          "<a target='_blank' href='#'><i class='fab fa-twitter'></i></a>",
          "<a target='_blank' href='#'><i class='fab fa-google'></i></a>"
        ]
      }]

    }),
    a = $(".flabHamburger"),
    i = e.data("mmenu");
  a.on("click", function () {
      i.open()
    }), i.bind("open:start", function (e) {
      $(".flabHamburger").toggleClass("flabHamburger--open")
    }),
    i.bind("close:start", function (e) {
      $(".flabHamburger").toggleClass("flabHamburger--open")
    }),
    $(".accardion-js .flabFaq__acardionItem").children('span').on("click", function () {
      $(this).next().next().slideToggle(),
        $('.accardion-js .flabFaq__acardionItem span').not(this).next().next().slideUp(),
        $(this).parent().toggleClass("accItem"),
        $('.accardion-js .flabFaq__acardionItem span').not(this).parent().removeClass("accItem"),
        $(this).next(".fa-angle-down").toggleClass("positionIcon")
      $('.accardion-js .flabFaq__acardionItem span').not(this).next(".fa-angle-down").removeClass("positionIcon")
    }),
    $(document).mouseup(function (e) {
      var div = $('.flabFaq__acardionItem span, .flabFaq__desc');
      if (!div.is(e.target) &&
        div.has(e.target).length === 0) {
        $('.flabFaq__desc').slideUp();
        $('.flabFaq__acardionItem').removeClass('accItem');
        $('.flabFaq__acardionItem i').removeClass('positionIcon');
      }
    });
  $(".fa-angle-down").on("click", function () {
    $(this).next().slideToggle("accardion"),
      $(this).parent().toggleClass("accItem"),
      $(this).toggleClass("positionIcon")
  }), new WOW({
    boxClass: "wow",
    animateClass: "animated",
    offset: 0,
    mobile: !1,
    live: !0,
    callback: function (e) {},
    scrollContainer: null
  }).init(), $(".mmenu-js ul li a, .flabFooter__nav li a").click(function (e) {
    e.preventDefault();
    var a = $($(this).attr("href"));
    if (a.length) {
      var i = a.offset().top;
      $("body, html").animate({
        scrollTop: i + "px"
      }, 800)
    }
  })



  $('.password-control').on('click', function () {
    $(this).toggleClass('show-pass');
  });
  $('.fa-eye').on('click', function () {
    $(this).parent().prev().attr('type', 'text');
  });
  $('.fa-eye-slash').on('click', function () {
    $(this).parent().prev().attr('type', 'password');
  });




  $('#login').on('click', function () {
    event.preventDefault();
    $('.popup-wrap').css('display', 'flex');
    $('#log-in').fadeIn();
  });
  $('.popup-close').on('click', function () {
    $('.popup-wrap, .popup-window').hide();
  });
});