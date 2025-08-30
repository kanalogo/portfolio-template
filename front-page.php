

  <?php get_header(); ?>

 

      <div class="first-visual" id="top">
        <div class="contents-visual">
          <p class="visual-title-ja"><span>K</span><span>A</span><span>N</span><span>A</span><span>L</span><span>O</span><span>G</span><span>O</span> </p><!-- /.visual-title -->
          <p class="visual-title-en"><span>P</span><span>O</span><span>R</span><span>T</span><span>F</span><span>O</span><span>L</span><span>I</span><span>O</span></p><!-- /.visual-title-en -->
          <p class="visual-description fadeItem _delay9 " data-scroll-animation="fadein">目的は、信頼できるコーダーとして長く人と関わるご縁をつくって生きたい。<br>
            そんな思いで活動していけたらいいと思っています。<br>
            サイト制作を通じて人との縁を結びつけていけたら最高です。</p><!-- /.visual-description -->
        </div><!-- /.contents-visual -->
        <div class="scroll_down fadeItem _delay10 " data-scroll-animation="fadein">scroll</div><!-- /.scroll_down -->
      </div><!-- /.first-visual -->
      
        <div class="fv"> 
          
            <div class="fv_slide-image"><img src=" <?php echo get_theme_file_uri(); ?>/src/img/domenico-loia-hGV2TfOh0ns-unsplash.jpg" loading="lazy"  alt="スライドのメイン画像" width="640" height="427"></div>
            <div class="fv_slide-image"><img src=" <?php echo get_theme_file_uri(); ?>/src/img/carl-heyerdahl-KE0nC8-58MQ-unsplash.jpg" loading="lazy"  alt="スライドのメイン画像" width="640" height="427"></div>
            <div class="fv_slide-image"><img src=" <?php echo get_theme_file_uri(); ?>/src/img/carlos-muza-hpjSkU2UYSU-unsplash.jpg" loading="lazy"  alt="スライドのメイン画像" width="640" height="456"></div>
    
         <div class="fv_title"><!-- /.fv_title --> <h1 class="site-title"> <span>KANALOGO</span> <span>PORTFOLIO SITE</span></h1>
          <p class="site-subtitle">Freelance Engineer</p>
        </div>
        </div>

       
       
    
  
        <section class="works" id="works">
          <div class="wrapper">
            <div class="content_center">
          <h2 class="contents-title" >
            <span class="en fadeItem _delay1 " data-scroll-animation="fadein">WORKS</span>
            <span class="ja fadeItem _delay1 " data-scroll-animation="fadein">制作物</span>
          </h2>
        </div><!-- /.content_center -->
        
         <?php $args = [
         'post_type' => 'post',
         'tag' => 'picup',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'rand' ];
          $the_query = new WP_Query($args) ;
         ?>
          <?php if( $the_query->have_posts() ): ?>
         <ul class="works-list">
         <?php while( $the_query->have_posts()): $the_query->the_post(); ?>
         <li class="fadeItem" data-scroll-animation="fadeup">
            <a href="<?php the_permalink( ); ?>"> 
              <div class="img">
              <?php  if( has_post_thumbnail()){
                    the_post_thumbnail();
                } ?>
              </div> </a>
              <div class="text">
                <div class="cat_list"> 
                <?php the_category(); ?>
                </div><!-- /.cac_list -->
                <p class="works-title"><?php the_title(); ?></p>
                <p class="works-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink( ); ?>"> <button class="see-detail"><span class="hover-line">詳細を見る <i class="fa-sharp fa-solid fa-arrow-right"></i></span></button></a>
              </div>
           
          
            <?php  endwhile; ?>
          </ul>
          
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

          <button class="main_btn fadeItem _delay2" data-scroll-animation="fadeleft"><a href="<?php echo esc_url( home_url('works')); ?>">制作物一覧</a></button><!-- /.main_btn -->
        </div>
        </section>
    

        <div class="about" id="about">
          <div class="wrapper">

            <div class="content_center">
          <h1 class="contents-title">
            <span class="en fadeItem _delay1" data-scroll-animation="fadein">ABOUT</span>
            <span class="ja fadeItem _delay1" data-scroll-animation="fadein">私について</span>
          </h1>
        </div>
  
        <?php get_template_part('templates/profile', 'part'); ?>

          <?php get_footer(); ?>

     


        