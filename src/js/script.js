$(function(){
  /*-------------------------------
  ハンバーガーメニュー
  ---------------------------------*/
  $(".hamburger").click(function () {
    $(this).toggleClass("active");
    $("#header .navi").toggleClass("is_active");
    $("#header .logo").toggleClass("is_active");
  });
  
  $(".navi a").click(function () {
    $(".hamburger").removeClass("is__active");
    $("#header .navi").removeClass("is_active");
    $("#header .logo").removeClass("is_active");
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

  $(window).scroll(function () {
    if ($(this).scrollTop() > 1000) {
      $(".float_box").fadeIn();
    
    } else {
      $(".float_box").fadeOut();
      
    }
  });

  



   /*-------------------------------
  トップボタン
  ---------------------------------*/
  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 100) {
  //     $("#top_btn").fadeIn();
  //   } else {
  //     $("#top_btn").fadeOut();
  //   }
  // });

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


  $(function(){
    /*-------------------------------
    フロートモーダル
    ---------------------------------*/
    $(".float_box").click(function () {
      if($(".float_content").hasClass("float_active")) {
        $(".float_content").removeClass("float_active");
        
        return false; // ここで処理を終了
      }
      $(".float_content").addClass("float_active");
  
      
      
    });

    $(".float_closebtn").click(function () {
      if($(".float_content").hasClass("float_active")) {
        $(".float_content").removeClass("float_active");
        
        return false; // ここで処理を終了
      }
      
  
      
      
    });
    
    
  }); 



  document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll(".tab_icon");
    const tabContents = document.querySelectorAll(".tab_content");
    
    tabContents[0].classList.add("float_active"); // 最初のコンテンツを表示
    tabButtons[0].classList.add("active"); // 最初のボタンをアクティブに
  
    tabButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const target = button.dataset.float_id;
  
        // ボタンのactive切り替え
        tabButtons.forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
       
  
        // コンテンツのactive切り替え
        tabContents.forEach((content) => {
          content.classList.remove("float_active");
          if (content.id === target) {
            content.classList.add("float_active");
          }
        });
      });
    });
  });

   /*-------------------------------
  ナビメニュー
  ---------------------------------*/


  jQuery(window).scroll(function() {
  
      let subject_1 = jQuery('#top').offset().top - jQuery(window).scrollTop();
      let subject_2 = jQuery('#works').offset().top - jQuery(window).scrollTop();
      let subject_3 = jQuery('#about').offset().top - jQuery(window).scrollTop();
      let subject_4 = jQuery('#contact-area').offset().top - jQuery(window).scrollTop();

  if($("#header .navi").hasClass(!'is_active')) {

    return false; // ここで処理を終了
  } else {
      if(subject_1 < 200) {
        jQuery('.menu li').removeClass('marker');
        jQuery('.menu .link1').addClass('marker');
      }
      if(subject_2 < 200) {
        jQuery('.menu li').removeClass('marker');
        jQuery('.menu .link2').addClass('marker');
      }
      if(subject_3 < 200) {
        jQuery('.menu li').removeClass('marker');
        jQuery('.menu .link3').addClass('marker');
      }
      if(subject_4 < 900) {
        jQuery('.menu li').removeClass('marker');
        jQuery('.menu .link4').addClass('marker');
      }
    }
     
 
  });

     /*-------------------------------
  スクロールアロー
  ---------------------------------*/


  jQuery(window).scroll(function() {
  

    let subject_2 = jQuery('#works').offset().top - jQuery(window).scrollTop();
    if(subject_2 < 1300) {
      jQuery('.scroll_down').fadeOut();
    } else {
      jQuery('.scroll_down').fadeIn();
    }

   

});

document.addEventListener("DOMContentLoaded", function () {

const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
    }
  });
});

const elements = document.querySelectorAll('.fadeItem');

elements.forEach(function (el) {
  // data属性の値を取得
  const animation = el.getAttribute('data-scroll-animation');
  console.log(animation); // 必要ならここで使う

  // IntersectionObserverで監視
  intersectionObserver.observe(el);
});

});

document.addEventListener("DOMContentLoaded", function () {

const intersectionObserver2 = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-animation");
    }
  });
});

const Title_elements = document.querySelectorAll('.contents-title');

Title_elements.forEach(function (el) {
  // data属性の値を取得

  

  // IntersectionObserverで監視
  intersectionObserver2.observe(el);
});

});
  

// セッションストレージからフラグを取得
const isFirstLoad = sessionStorage.getItem('isFirstLoad');

// ページの読み込みが完了したときに実行される関数
window.addEventListener('load', function() {
  // フラグがない場合（初回アクセス時）
  if (!isFirstLoad) {
    // 初回アクセス時の処理を記述
    // 例: ローディング画面の表示、セッションストレージへのフラグの保存など
    $('.loading').delay(1000).hide(1000);
    
    // セッションストレージにフラグを保存
    sessionStorage.setItem('isFirstLoad', true);
  } else {
    // 2回目以降のアクセス時の処理を記述
    $('.loading').hide(0);
  }
});




 /*-------------------------------
  スワイパー
  ---------------------------------*/

var swiper = new Swiper(".mySwiper", {
  direction: 'horizontal',
  slidesPerView: 3,
      spaceBetween: 40,
      centeredSlides: true,
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
      spaceBetween: 30,
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






