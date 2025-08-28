jQuery(function(){
  /*-------------------------------
  ハンバーガーメニュー
  ---------------------------------*/
  jQuery(".hamburger").click(function () {
    jQuery(this).toggleClass("active");
    jQuery("#header .navi").toggleClass("is_active");
    jQuery("#header .logo").toggleClass("is_active");
  });
  
  jQuery(".navi a").click(function () {
    jQuery(".hamburger").removeClass("is__active");
    jQuery("#header .navi").removeClass("is_active");
    jQuery("#header .logo").removeClass("is_active");
  });
}); 


 /*-------------------------------
  ヘッダーアニメーション
  ---------------------------------*/
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery("#header").addClass("header_active");
      jQuery(".menu li").addClass("linkText_active");
    } else {
      jQuery("#header").removeClass("header_active");
      jQuery(".menu li").removeClass("linkText_active");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 200) {
      jQuery(".first-visual").addClass("trans_active");
    
    } else {
      jQuery(".first-visual").removeClass("trans_active");
      
    }
  });

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
      jQuery(".float_box").fadeIn();
    
    } else {
      jQuery(".float_box").fadeOut();
      
    }
  });

  



   /*-------------------------------
  トップボタン
  ---------------------------------*/
  // jQuery(window).scroll(function () {
  //   if (jQuery(this).scrollTop() > 100) {
  //     jQuery("#top_btn").fadeIn();
  //   } else {
  //     jQuery("#top_btn").fadeOut();
  //   }
  // });
setTimeout(function() {
  document.addEventListener("DOMContentLoaded", () => {
    const letters = document.querySelectorAll('.visual-title-en > span');
    letters.forEach((letter, index) => {
      letter.style.animationDelay = `jQuery{index * 0.1}s`;
    });
  });
  
  document.addEventListener("DOMContentLoaded", () => {
    const letters2 = document.querySelectorAll('.visual-title-ja > span');
    letters2.forEach((letter2, index) => {
      letter2.style.animationDelay = `jQuery{index * 0.1}s`;
    });
  });
}
, 2000);


  jQuery(function(){
    /*-------------------------------
    フロートモーダル
    ---------------------------------*/
    jQuery(".float_box").click(function () {
      if(jQuery(".float_content").hasClass("float_active")) {
        jQuery(".float_content").removeClass("float_active");
        
        return false; // ここで処理を終了
      }
      jQuery(".float_content").addClass("float_active");
  
      
      
    });

    jQuery(".float_closebtn").click(function () {
      if(jQuery(".float_content").hasClass("float_active")) {
        jQuery(".float_content").removeClass("float_active");
        
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

  if(jQuery("#header .navi").hasClass(!'is_active')) {

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
    jQuery('.loading').delay(1000).hide(1000);
    
    // セッションストレージにフラグを保存
    sessionStorage.setItem('isFirstLoad', true);
  } else {
    // 2回目以降のアクセス時の処理を記述
    jQuery('.loading').hide(0);
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






