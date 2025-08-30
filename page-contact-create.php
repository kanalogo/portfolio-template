<?php get_header(); ?>
<?php remove_filter('the_content', 'wpautop'); ?>

      <div class="contact_base_block c-wrapper">
        <?php if ( have_posts() ): ?>
         <?php while( have_posts()): the_post(); ?> 
       
       <h2>制作依頼に関する質問など <br class="sp-only">お問い合わせください</h2>
        <?php the_content(); ?>
      </div>
      <?php  endwhile; ?>
      <?php endif; ?>
      
      </div>

      <?php get_footer(); ?>