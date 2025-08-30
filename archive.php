<?php get_header(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>

        <?php $args = [
        'tag' => 'picup',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'rand', ];
          $the_query = new WP_Query($args) ;
        ?>
      
        <?php if ( $the_query->have_posts() ): ?>
   
         <ul class="works-list">
        <?php while( $the_query->have_posts()): $the_query->the_post(); ?> 
          <li>
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
           
          </li>
         
          <?php  endwhile; ?>
        </ul>

      
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <h2 class="contents-subtitle">Other Works</h2>
      </div>
    </div><!-- /.inner -->

      <?php get_template_part('templates/swiper', 'part'); ?>
      
    <?php get_footer(); ?>
      
        
  