   <!-- フロートモーダル　 -->

   <div class="float_box">
          <i class="fa-brands fa-twitch"></i>
          </div>
          <div class="float_content">

            <button class="float_closebtn">
              <span></span>
              <span></span>
            </button><!-- /.float_closebtn -->
            <div class="tab_btn" >
              <div class="tab_icon" data-float_id="float1">
                <i class="fa-regular fa-envelope"></i>
                <p class="tab_icon_text">お問い合わせ</p><!-- /.tab_icon_text -->
              </div><!-- /.tab_icon -->
              <div class="tab_icon" data-float_id="float2">
                <i class="fa-regular fa-calendar"></i>
                <p class="tab_icon_text">制作依頼</p><!-- /.tab_icon_text -->
              </div><!-- /.tab_icon -->
              <div class="tab_icon" data-float_id="float3">
                <i class="fa-regular fa-circle-user"></i>
                <p class="tab_icon_text">プロフィール</p><!-- /.tab_icon_text -->
              </div><!-- /.tab_icon -->
            </div><!-- /.tab_btn -->
            <div class="tab_content tab_1" id="float1">
              <h2>ご質問などお気軽に <br>お問い合わせください</h2>
              <?php echo do_shortcode('[contact-form-7 id="ff5e1f8" title="お問い合わせ"]'); ?>

            </div><!-- /.tab_content -->

            <div class="tab_content tab_2" id="float2">
              <h2>制作依頼に関する質問など <br>お問い合わせください</h2>
        
              <?php echo do_shortcode('[contact-form-7 id="f7be3f9" title="制作依頼"]'); ?>
        </div>

        <div class="tab_content tab_3" id="float3">
          <h2 class="contents-subtitle">Profile <span>プロフィール</span></h2>
          <div class="profile">
            <div class="img"><img src=" <?php echo get_theme_file_uri(); ?>/src/img/about.jpg" loading="lazy"  alt="プロフィールの画像" width="720" height="480"></div>
            <div class="text">
              <div class="icon-image"><img src=" <?php echo get_theme_file_uri(); ?>/src/img/22226456.png" alt=""></div><!-- /.icon-image -->
              <p class="name-en">name</p>
              <p class="name-ja">Kanalogo</p>
              <p class="description">設計力と信頼されるコーダーを心がける</p><!-- /.description -->
              <p class="detail">プロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入りますプロフィール内容が入ります。</p>
            </div>
          </div>
  
          <h2 class="contents-subtitle">Plan <span>料金表</span></h2>
          <dl class="office-list">
            <div class="item">
              <dt>プラン</dt>
              <dd>お任せプラン</dd>
            </div>
            <div class="item">
              <dt>こんなお客様におすすめ</dt>
              <dd><ul>
                <li>CSS設計やコードの保守性を考えた設計をお願いしたい</li>
                <li>細かな調整や変更にも対応してもらいたい</li>
                <li>更新のことを考えた設計にしてほしい</li>
                <li>サイト全体だけでなく1Pからでもコーディングして欲しい</li>
                <li>デザイン通りに忠実にコーディングしてくれる人に任せたい</li>
              </ul></dd>
            </div>
            <div class="item">
              <dt>特徴</dt>
              <dd><p>デザインカンプを元に、 デザインに沿った丁寧な実装とアニメーションを取り入れたコーディングを行います。
                WordPress化にも対応可。</p></dd>
            </div>
            <div class="item">
              <dt>納期目安</dt>
              <dd>2~3週間　(お客様のご相談に応じて調整できます。)</dd>
            </div>
           
            <div class="item">
              <dt>料金目安</dt>
              <dd>5万円〜(税込)</dd>
            </div>
            
          </dl>
  
          <dl class="office-list">
            <div class="item">
              <dt>プラン</dt>
              <dd>サイト全体お任せプラン</dd>
            </div>
            <div class="item">
              <dt>こんなお客様におすすめ</dt>
              <dd><ul>
                <li>サイト制作を全部任せたい</li>
                <li>CMSの運用を任せたい</li>
                <li>更新のことを考えた設計にしてほしい</li>
                <li>実装・公開・保守を丸々お願いしたい。</li>
                <li>公開後の運用や更新の相談に乗ってほしい</li>
              </ul></dd>
            </div>
            <div class="item">
              <dt>特徴</dt>
              <dd><p>丁寧なヒアリングをもとご要望に沿ったをご提案し、目的に合わせてCMSの運用も含めてサイト全体を制作します。。</p></dd>
            </div>
            <div class="item">
              <dt>納期目安</dt>
              <dd>3~4週間　(お客様のご相談に応じて調整できます。)</dd>
            </div>
           
            <div class="item">
              <dt>料金目安</dt>
              <dd>15万円〜(税込)</dd>
            </div>
            
          </dl>
        </div>
      
            
          </div><!-- /.float_content -->

             <!-- フロートモーダル　 -->