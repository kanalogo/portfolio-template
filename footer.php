
<div id="contact-area" <?php if(is_front_page()): ?> class="fadeItem _delay2"  data-scroll-animation="fadein"  <?php endif; ?>>
          <p class="title">CONTACT</p>
          <p class="text">ご質問などお気軽にお問い合わせください</p>
          <div class="contact-btn_list">
          <a class="contact-btn" href="<?php echo esc_url( home_url( 'contact-area')); ?>">
            お問い合わせはこちら
            <img src=" <?php echo get_theme_file_uri(); ?>/src/img/icon-arrow-topright.svg" alt="お問い合わせのアイコン" loading="lazy" width="12" height="12">
          </a>
          <a class="contact-btn" href="<?php echo esc_url( home_url( 'contact-create')); ?>"> 
            制作依頼はこちら
            <img src=" <?php echo get_theme_file_uri(); ?>/src/img/icon-arrow-topright.svg" alt="お問い合わせのアイコン" loading="lazy" width="12" height="12">
          </a>
        </div><!-- /.contact-btn_list -->
        </div>

        <?php if(!is_single()): ?>
        <?php get_template_part('templates/float', 'modal'); ?>
        <?php endif; ?>
        
    </main>

    <footer id="footer"<?php if(is_front_page()): ?> class="fadeItem _delay3" data-scroll-animation="fadein" <?php endif; ?>>
      <p class="copyright">© 2025 WEB CREATE KANALOGO</p>
      <div class="footer-link">

      <!-- ナビメニュー -->
        <ul class="menu">
          <li><a href="#works">WORKS</a></li>
          <li><a href="#skills">SKILLS</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact-area">CONTACT</a></li>
        </ul>
     <!-- ナビメニュー -->

        <ul class="sns">
          <li>
            <a href="" target="_blank">
              <img src=" <?php echo get_theme_file_uri(); ?>/src/img/icon-sns-x.png" loading="lazy" alt="X" >
            </a>
          </li>
          <li>
            <a href="" target="_blank">
              <img src=" <?php echo get_theme_file_uri(); ?>/src/img/icon-sns-instagram.png" loading="lazy" alt="instagram"  >
            </a>
          </li>
        </ul>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>