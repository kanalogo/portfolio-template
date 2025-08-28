<?php get_header(); ?>
      

      <div class="contact_base_block c-wrapper">
        <?php if ( have_posts() ): ?>
         <?php while( have_posts()): the_post(); ?> 
        <?php the_content(); ?>
   

        <h2>制作依頼に関する質問など <br class="sp-only">お問い合わせください</h2>
        <form action="" method="post">
          <p class="form_box_item">
            <label>
              <span class="required">必須</span>お問い合わせ種別
              <select name="contact_title">
                <option value="" selected>選択してください</option>
                <option value="H.P制作を依頼したい">H.P制作を依頼したい</option>
                <option value="CMS化について相談したい">CMS化について相談したい</option>
                <option value="CMS化について相談したい">HPの保守・運用について相談したい</option>
                <option value="その他">その他</option>
              </select>
            </label>
          </p>
          <p class="form_box_item">
            <label>
              <span class="required">必須</span>お名前
              <input type="text" name="your_name" autocomplete="name" placeholder="山田 太郎">
            </label>
          </p>
          <p class="form_box_item">
            <label>
              <span>任意</span>お電話番号
              <input type="tel" name="tel" autocomplete="tel" placeholder="090-1234-5678">
            </label>
          </p>
          <p class="form_box_item">
            <label>
              <span class="required">必須</span>メールアドレス
              <input type="email" name="email" autocomplete="email" placeholder="example@gmail.com">
            </label>
          </p>
          <div class="form_box_item">
            <span>任意</span>ご返信方法
            <p class="radio_item">
              <label><input type="radio" name="reply" value="お電話">お電話</label>
              <label><input type="radio" name="reply" value="メール">メール</label>
            </p>
          </div>
          <p class="form_box_item">
            <label>
              <span class="required">必須</span>お問い合わせ内容
              <textarea name="message"></textarea>
            </label>
          </p>

          <p class="form_box_item"><button>送信する</button></p>
        </form>
      </div>
      <?php  endwhile; ?>
      <?php endif; ?>
      
      </div>

      <?php get_footer(); ?>