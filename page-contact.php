<?php get_header(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>

  
      <?php if ( have_posts() ): ?>
       <?php while( have_posts()): the_post(); ?> 
     
  

      <div class="contact_base_block c-wrapper">

        <h2>ご質問などお気軽に<br class="sp-only">お問い合わせください</h2>
       
      
      <?php the_content(); ?>
      
      </div>
      <?php  endwhile; ?>
      <?php endif; ?>
      </div>

    
      <?php get_footer(); ?>
