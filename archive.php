<?php get_header(); ?>
      
        <?php if ( have_posts() ): ?>
   
         <ul class="works-list">
        <?php while( have_posts()): the_post(); ?> 
          <li>
            <a href="<?php the_permalink( ); ?>"> 
              <div class="img">
              <?php  if( has_post_thumbnail()){
                    the_post_thumbnail();
                } ?>
              </div>
              <div class="text">
                <ul class="cat_list"> 
                <?php the_category(); ?>
                </ul><!-- /.cac_list -->
                <p class="works-title"><?php the_title(); ?></p>
                <p class="works-text"><?php the_excerpt(); ?>。</p>
                <button class="see-detail"><span class="hover-line">詳細を見る <i class="fa-sharp fa-solid fa-arrow-right"></i></span></button>
              </div>
            </a>
          </li>
        
          <?php  endwhile; ?>
        </ul>

      
        <?php endif; ?>

        <h2 class="contents-subtitle">Other Works</h2>
      </div>
    </div><!-- /.inner -->

      <?php get_template_part('templates/swiper', 'part'); ?>
      
    <?php get_footer(); ?>
      
        

  