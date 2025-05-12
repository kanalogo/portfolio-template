$(function(){
  /*-------------------------------
  ハンバーガーメニュー
  ---------------------------------*/
  $(".hamburger").click(function () {
    $(this).toggleClass("active");
    $("#header .navi").toggleClass("active");
    $("#header .logo").toggleClass("active");
  });
  
  $(".navi a").click(function () {
    $(".hamburger").removeClass("active");
    $("#header .navi").removeClass("active");
    $("#header .logo").removeClass("active");
  });
}); 


 /*-------------------------------
  ヘッダーアニメーション
  ---------------------------------*/
  $(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
      $("#header").addClass("header_active");
      $(".menu li").addClass("linkText_active");
    } else {
      $("#header").removeClass("header_active");
      $(".menu li").removeClass("linkText_active");
    }
  });


   /*-------------------------------
  トップボタン
  ---------------------------------*/
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#top_btn").fadeIn();
    } else {
      $("#top_btn").fadeOut();
    }
  });






 /*-------------------------------
  スワイパー
  ---------------------------------*/

var swiper = new Swiper(".mySwiper", {
  direction: 'horizontal',
  slidesPerView: 1,
      spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    390: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 5,
      spaceBetween: 40,
    },
  },
});



