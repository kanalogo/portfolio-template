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
    if ($(this).scrollTop() > 100) {
      $("#header").addClass("header_active");
      $(".menu li").addClass("linkText_active");
    } else {
      $("#header").removeClass("header_active");
      $(".menu li").removeClass("linkText_active");
    }
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".first-visual").addClass("trans_active");
    
    } else {
      $(".first-visual").removeClass("trans_active");
      
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

  document.addEventListener("DOMContentLoaded", () => {
    const letters = document.querySelectorAll('.visual-title-en > span');
    letters.forEach((letter, index) => {
      letter.style.animationDelay = `${index * 0.1}s`;
    });
  });
  
  document.addEventListener("DOMContentLoaded", () => {
    const letters2 = document.querySelectorAll('.visual-title-ja > span');
    letters2.forEach((letter2, index) => {
      letter2.style.animationDelay = `${index * 0.1}s`;
    });
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






