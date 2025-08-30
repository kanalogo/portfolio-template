   <?php $args = [
  //  'tag__not_in' => [9],
  'posts_per_page' => -1,
  'post_status' => 'publish',
   ];
    $the_query = new WP_Query($args) ;
   ?>
    <?php if( $the_query->have_posts() ): ?>
   
<div class="swiper mySwiper">
        <div class="swiper-wrapper works_slide">
        <?php while( $the_query->have_posts()): $the_query->the_post(); ?> 
          <div class="swiper-slide works_item"><a href="<?php the_permalink( ); ?>"><div class="work_image"> <?php  if( has_post_thumbnail()){the_post_thumbnail();} ?></div><p class="work_text"><?php the_field( 'slide_text'); ?></p></a></div>

          <?php  endwhile; ?>
        </div>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="swiper-pagination"></div>
    </div>