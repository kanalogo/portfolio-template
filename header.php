<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>KANALOGO | ポートフォリオサイト</title>
    <meta name="description" content="クリエイターKANALOGOの作品を紹介するページです。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./src/img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <meta property="og:url" content="ページのURL"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="KANALOGO | ポートフォリオサイト"/>
    <meta property="og:description" content="クリエイターKANALOGOの作品を紹介するページです。"/>
    <meta property="og:site_name" content="KANALOGO | ポートフォリオサイト"/>
    <meta property="og:image" content="./images/"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Yomogi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./src/css/base_style.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <script src="https://kit.fontawesome.com/91f1142cd5.js" crossorigin="anonymous" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="./src/js/script.js" defer></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VXGN6HCN9Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VXGN6HCN9Y');
</script>
<?php wp_head(); ?>
  </head>
  

  <body class="<?php body_class(); ?>">
    <?php wp_body_open(); ?>
  <?php remove_filter('the_content', 'wpautop'); ?>


    <?php if(is_front_page()): ?>
     <div class="loading">
        <div class="loading_bg">
            <span class="loader"></span>
        </div>
     </div>  
    <?php endif; ?>



    <header id="header" <?php if(!is_front_page()): ?> class="childHeader  <?php elseif('is_single()'): ?>header_underLine<?php endif; ?>"> 
      <h1 class="logo <?php if(is_front_page()): ?>  fadeItem _delay7" data-scroll-animation="fadein<?php endif; ?>">
        <a href="<?php echo esc_url( home_url('home')); ?>">
          <img src=" <?php echo get_theme_file_uri(); ?>/src/img/header_logo.png" loading="lazy" alt="WEB CREATE" width="239" height="72">
        </a>
      </h1>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navi <?php if(is_front_page()): ?>fadeItem _delay8" data-scroll-animation="fadein<?php endif; ?>">
            <!-- ナビメニュー -->
             <?php if(is_front_page()): ?>
            <ul class="menu">
            <li class="link1"><a class="hover-line" href="#top">TOP <span> トップ</span></a></li>
            <li class="link2"><a class="hover-line" href="#works">WORKS <span> 制作物</span></a></li>
            <li class="link3"><a class="hover-line" href="#about">ABOUT <span>私について</span></a></li>
            <li class="link4"><a class="hover-line" href="#contact-area">CONTACT <span>お問い合わせ</span></a></li>
             </ul>
            <?php else: ?>

        <?php $args = [
                        'container' => false,
                       'menu_class' => 'menu',
                       'menu' => 'ヘッダーメニュー',
                       'link_class' => 'hover-line', // ← aタグにclassを付与
                     ];
                        wp_nav_menu($args);
                        ?>
            <!-- ナビメニュー -->
             <?php endif; ?>
      </nav>
    
    </header>

    <main class="<?php if(is_single()): ?>mt10<?php endif; ?>"> 

    <!-- ページ毎のWrapperおよびパンクズリスト -->

        <?php if(is_page('about')): ?>
      <div class="about">
        <div class="child_mv about_bg">
        <h1 class="contents-title">
          <span class="en">ABOUT</span>
          <span class="ja">私について</span>
        </h1>
        </div>
        <?php elseif(is_page('contact-create')): ?>
           
        <div class="child_mv contact_bg">
        <h1 class="contents-title">
          <span class="en">CONTACT</span>
          <span class="ja">制作依頼</span>
        </h1>
      </div><!-- /.child_mv -->

    
      </div>
      <?php elseif(is_page('contact')): ?>
        <div class="contact">
        <div class="child_mv contact_bg">
        <h1 class="contents-title">
          <span class="en">CONTACT</span>
          <span class="ja">お問い合わせ</span>
        </h1>
      </div><!-- /.child_mv -->

         </div>
        <?php elseif(is_archive()): ?>
            <div class="works ">
        <div class="child_mv works_bg">
        <h1 class="contents-title">
          <span class="en">WORKS</span>
          <span class="ja">制作物</span>
        </h1>
        </div>

        <?php endif; ?>

        <?php if(!is_front_page()): ?>
        <div class="wrapper">

        <!-- パンクズリスト -->
        <ul class="breadCrumb">
        <?php
         if (function_exists('bcn_display')) { 
            bcn_display();
         } ?>
        </ul><!-- /.breadCrumb -->
        <!-- パンクズリスト -->

        <?php endif; ?>

         <!-- ページ毎のWrapperおよびパンクズリスト -->