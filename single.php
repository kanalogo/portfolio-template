<?php get_header(); ?>
      
      <div class="project wrapper">
        <ul class="LinkButton">
          <li class="prev_button"><?php previous_post_link('%link' , 'PrevWorks'); ?></li>
          <li class="next_button"> <?php next_post_link('%link' , 'NextWorks'); ?></li>
          
        </ul><!-- /.LinkButton -->

        
       
        <?php if ( have_posts() ): ?>
         <?php while( have_posts()): the_post(); ?> 
        
        
        <h1 class="project-title"> <?php the_title(); ?></h1>
        <?php 
            $pc_image = get_field('pc_image');
            $pc_url = $pc_image['sizes']['large'];
             ?>
         <?php 
           $sp_image = get_field('sp_image');
          $sp_url = $sp_image['sizes']['large'];
           ?>
        
        <div class="web-img">
          <div class="img-pc"><a href="<?php echo get_field('main_link'); ?>"><img src="<?php echo $pc_url; ?>" loading="lazy"  alt="サイトのPC画像" ></a></div>
          <div class="img-sp"><a href="<?php echo get_field('main_link'); ?>"><img src="<?php echo $sp_url; ?>" loading="lazy"  alt="サイトのSP画像" ></a></div>
        </div>
        <p class="head-text"><?php the_excerpt() ;?></p>

        <?php if( have_rows( 'description')): ?>
          <?php while( have_rows( 'description')): the_row(); ?> 

        <dl class="detail-list">
          <div class="item">
            <dt>種類</dt>
            <dd><?php the_sub_field( 'site_type'); ?></dd>
          </div>
          <div class="item">
            <dt>業種・業界</dt>
            <dd><?php the_sub_field( 'sitte_name'); ?></dd>
          </div>
          <div class="item">
            <dt>仕様</dt>
            <dd><?php the_sub_field( 'function'); ?></dd>
          </div>
          <div class="item">
            <dt>ページ構成</dt>
            <dd><?php the_sub_field( 'site_page'); ?></dd>
          </div>
          <div class="item">
            <dt>担当</dt>
            <dd><?php the_sub_field( 'site_author'); ?></dd>
          </div>
          <div class="item">
            <dt>コーディング期間</dt>
            <dd><?php the_sub_field( 'site_data'); ?></dd>
          </div>
          <div class="item url">
            <dt>URL</dt>
          
            <dd><a href="<?php echo get_sub_field('site_url'); ?>"><?php echo get_sub_field('site_url'); ?></a></dd>
          </div>
        </dl>

        <?php  endwhile; ?>
        <?php endif; ?>
        <div class="web-img full">
         
        <?php 
            $main_image = get_field('main_image');
            $main_url = $main_image['url'];
             ?>
          <div class="img-pc"><a href="<?php echo get_field('main_link'); ?>"><img src=" <?php echo $main_url; ?>" loading="lazy"  alt="サイトのPC画像" ></a></div>
        
        </div>

        <div class="all-works"> 
          <a class="hover-line" href="<?php echo esc_url( home_url('works')); ?>">ALL WORKS</a>
        </div>
      </div>

      <?php  endwhile; ?>
        <?php endif; ?>
        </div>

    

      <?php get_footer(); ?>