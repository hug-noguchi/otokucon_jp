<?php get_header(); ?>

  <style>
    @font-face {
      font-family: 'TirantiSolid';
      src: url('https://www.otokucon.jp/wp-content/themes/otokucon/assets/font/tiranti-solid-plain-webfont.woff2') format('woff2'),
          url('https://www.otokucon.jp/wp-content/themes/otokucon/assets/font/tiranti-solid-plain-webfont.woff') format('woff');
      font-weight: normal;
      font-style: normal;
    }
    .p-mainview_box:after {
      content: '';
      background-image: url(https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/fv_lead_yokkaichi.png);
      display: inline-block;
      width: 10%;
      height: 100%;
      background-size: contain;
      background-repeat: no-repeat;
      vertical-align: middle;
      position: absolute;
      top: 5%;
      right: 14%;
    }
    .reason {
      padding: 2.1875rem 0 3.75rem;
    }
    .reason_lead .dots {
      background-image: radial-gradient(circle at center, #CC4D65 20%, transparent 20%);
      background-position: top right;
      background-repeat: repeat-x;
      background-size: 1em 0.3em;
      padding-top: 0.2em;
    }
    .reason_lead_pink {
      color: #CC4D65;
    }
    .reason_lead_emphasis {
      font-family: 'TirantiSolid', "Noto Serif JP", serif;
    }
    .p-contact__title.application_details_en {
      width: 19.3125rem;
    }
    .application_details_present {
      margin-top: 2.1875rem;
    }
    .application_details_qualification li {
      padding-left: 1em;
      text-indent: -1em;
    }
    .application_details_qualification li:not(:last-child) {
      margin-bottom: 15px;
    }
    .reason_list {
      max-width: 955px;
      padding-right: 25px;
      padding-left: 25px;
      margin: 0 auto;
    }
    .reason_list ul li {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .reason_list ul li:not(:last-child) {
      margin-bottom: 30px;
    }
    .reason_list ul li .reason_list_image {
      position: relative;
    }
    .reason_list ul li .reason_list_image div:after {
      display: inline-block;
      width: 120px;
      height: 134px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      position: absolute;
      top: -10%;
      right: -28%;
    }
    .reason_list ul li:nth-child(1) .reason_list_image div:after {
      content: '';
      background-image: url('https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/reason_no1.png');
    }
    .reason_list ul li:nth-child(2) .reason_list_image div:after {
      content: '';
      background-image: url('https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/reason_no2.png');
    }
    .reason_list ul li:nth-child(3) .reason_list_image div:after {
      content: '';
      background-image: url('https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/reason_no3.png');
    }
    .reason_list ul li .reason_list_image {
      width: 40%;
    }
    .reason_list ul li .reason_list_text {
      width: 48%;
    }
    .reason_list ul li .reason_list_text .reason_list_lead {
      font-size: 24px;
      font-weight: 500;
      color: #CC4D65;
      margin-bottom: 22px;
      letter-spacing: 2.4px;
    }
    .reason_list ul li .reason_list_text .reason_list_note {
      letter-spacing: 1.6px;
      line-height: 1.6;
    }

    @media screen and (min-width: 768px) {
      .reason {
        padding: 3.8125rem 0 4.0625rem;
      }
      .reason_title {
        width: 12.125rem;
      }
      .reason_lead_emphasis {
        font-size: 6.175rem;
      }
      .application_details_present {
        margin-top: 3rem;
      }
    }
    @media screen and (max-width: 767px) {
      #lp-box {
        height: 88px;
      }
      #lp-box .p-target {
        bottom: -30px;
      }
      .p-footer {
        padding: 0px 0 5.5125rem 0;
      }
      .reason {
        font-size: 1.25rem;
      }
      .reason_lead {
        margin-bottom: 30px;
        letter-spacing: -0.06em;
      }
      .reason_list ul li {
        display: block;
      }
      .reason_list ul li .reason_list_image {
        width: 100%;
      }
      .reason_list ul li .reason_list_text {
        width: 100%;
      }
      .reason_list ul li .reason_list_image div:after {
        width: 90px;
        height: 101px;
        top: -8%;
        right: unset;
        left: -3%;
      }
      .reason_lead_emphasis {
        font-size: 70px;
      }
      .reason_list ul li .reason_list_text .reason_list_lead {
        font-size: 20px;
        margin-top: 26px;
        letter-spacing: unset;
      }
      .application_details_present .p-contact-radio__block {
        letter-spacing: -1.8px;
      }
    }
    @media screen and (max-width: 480px) {
      .p-mainview_box:after {
        content: '';
        background-image: url(https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/fv_lead_yokkaichi_sp.png);
        display: inline-block;
        width: 20%;
        height: 100%;
        background-size: contain;
        background-repeat: no-repeat;
        vertical-align: middle;
        position: absolute;
        top: 15%;
        right: 1%;
      }
    }
  </style>

  <div class="countdown-box" id="lp-box">
    <?php get_template_part('template/target'); ?>
  </div>

  <main>
    <div class="header_sp sp">
      <h1 id="logo">
        <img src="https://www.otokucon.jp/wp-content/themes/otokucon/assets/images/logo.png">
      </h1>
      <div class="fat-nav sp">
        <nav class="header-nav fat-nav__wrapper" id="js-nav">
            <ul class="nav__items nav-items nav-list" id="menu">
                <li class="nav-items__item"><a href="#special_favor">10大無料特典！</a></li>
                <li class="nav-item nav-items__item"><a href="#reason">選ばれる3つの理由</a></li>
                <li class="nav-item nav-items__item"><a href="#case_stady">こんな方におすすめです</a></li>
                <li class="nav-item nav-items__item"><a href="#flow">ご応募の流れ</a></li>
                <li class="nav-item nav-items__item"><a href="#qa">Q&A</a></li>
                <li class="nav-item nav-items__item"><a href="#contact">応募フォーム</a></li>
                <li class="nav-item nav-items__item">
                  <p class="p-target_fukidashi nav_fukidashi">たった<span>1分</span>で応募完了</p>
                  <a href="#contact" class="p-target">
                    <div class="p-target__inner">
                      <p class="p-target__head">
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/present-icon.png" alt="キャンペーンに応募する"></span> キャンペーンに<br class="u-desktop">応募する
                      </p>
                      <p class="p-target__foot">
                        期間限定<br class="u-desktop"><span>：</span>
                        <?php get_template_part('template/target_sp'); ?>
                      </p>
                    </div>
                  </a>
                </li>
            </ul>
        </nav>
        </div>
    </div>

    <div class="p-mainview l-mainview">
        <div class="p-mainview_box">
            <picture class="p-mainview__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/mainview3_pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mainview3_sp.png" alt="抽選で5組様に！">
            </picture>
            <p class="chanpaign_date_box">
                <span class="date">
                    <?php get_template_part('template/chanpaign_date'); ?>
                </span>
                <span>まで</span>
            </p>
        </div>
        <div class="p-mainview__btn__box btn_1minute">
          <div class="shiny-btn">
            <a href="#contact">
              <picture class="p-mainview__btn btn_campaign">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_sp.png" alt="たった1分で完了！キャンペーンに応募する">
              </picture>
            </a>
          </div>
        </div>
        <div class="p-mainview__copy"><span class="p-mainview__color">挙式をする夢</span><span class="p-mainview__small">を</span><span class="p-mainview__color">叶えたい</span>、<br>すべてのカップルに贈る</div>
        <div class="p-mainview__text">※30名以上の披露宴またはパーティーをされる方に限ります。<br class="u-mobile"><span>※披露宴、または、パーティー費用は含まれておりません。</span></div>
      </div>
      <section id="special_favor" class="p-special l-special">
        <div class="p-special__inner l-inner">
        <h2 class="p-special__title c-section-title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-favor-title.png" alt="Specialfavor">
        </h2>
        <p class="p-special__copy">結婚式キャンペーンに含まれる</p>
        <p class="p-special__benefit">10大特典</p>
        <div class="p-special__ribon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon.png" alt="<?php bloginfo('title'); ?>">
        </div>
        <div class="p-special__items">
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="1.チャペルでの挙式料">
            </div>
            <h3 class="p-special-card__title">1.チャペルでの挙式料</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img01.png" alt="<?php bloginfo('title'); ?>">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">2.ウェディングドレス</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img02.png" alt="2.ウェディングドレス">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">3.タキシード</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img03.png" alt="3.タキシード">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">4.新婦様美容着付け</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img04.jpg" alt="4.新婦様美容着付け">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">５.新郎様着付け</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img05.jpg" alt="５.新郎様着付け">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">6.新婦様介添え料</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img06.jpg" alt="6.新婦様介添え料">
            </div>
          </div>
          <div class="p-special__item p-special-card">
            <div class="p-special-card__ribon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <h3 class="p-special-card__title">7.ブーケ</h3>
            <div class="p-special-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img07.jpg" alt="7.ブーケ">
            </div>
          </div>
          <div class="p-special__item p-special-card">
              <div class="p-special-card__ribon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
              </div>
              <h3 class="p-special-card__title">8.記念写真</h3>
              <div class="p-special-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img08.png" alt="8.記念写真">
              </div>
          </div>
          <div class="p-special__item p-special-card">
              <div class="p-special-card__ribon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
              </div>
              <h3 class="p-special-card__title">9.アテンダー</h3>
              <div class="p-special-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img09.jpg" alt="9.アテンダー">
              </div>
          </div>
          <div class="p-special__item p-special-card">
              <div class="p-special-card__ribon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
              </div>
              <h3 class="p-special-card__title">10.誓約書</h3>
              <div class="p-special-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-card-img10.jpg" alt="10.誓約書">
              </div>
          </div>
        </div>
        <div class="p-special__text">最大70万円相当<span>が</span>無料<span>になります。</span></div>
        <p class="p-special__subtext">このチャンス、絶対に見逃せない。ぜひご応募を！</p>
        <p class="p-special__foot">
          ※30名以上の披露宴またはパーティーをされる方に限ります。<br class="u-mobile">
          ※披露宴、また、パーティー費用は含まれておりません。<br>
          ※一部地域によって特典の内容・割引金額が異なります。
        </p>
        <div class="btn_1minute_02">
          <div class="shiny-btn">
            <a href="#contact">
              <picture class="p-mainview__btn btn_campaign">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_sp.png" alt="たった1分で完了！キャンペーンに応募する">
              </picture>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="reason" class="reason">
      <div>
        <h2 class="p-case__title reason_title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reason-title.png" alt="reason">
        </h2>
        <p class="p-case__copy reason_lead">アール・ベル・アンジェ四日市が<br class="sp"><span class="dots">選</span><span class="dots">ば</span><span class="dots">れ</span><span class="dots">る</span><span class="reason_lead_pink"><span class="reason_lead_emphasis">3</span>つの理由</span></p>
      </div>
      <div class="reason_list">
        <ul>
          <li>
            <div class="reason_list_image">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reason01_yokkaichi.jpg" alt="理由1イメージ画像">
              </div>
            </div>
            <div class="reason_list_text">
              <p class="reason_list_lead">コンセプトは<br>｢自然を感じるウェディング｣</p>
              <p class="reason_list_note">
                宝石のように水面きらめくアクアテラスが貸切邸宅の中央に。<br>
                国道沿いにありながら、一歩足を踏み入れると緑豊かなリゾート感溢れる上質な空間が広がります。大小2つの披露宴会場が魅力的。
              </p>
            </div>
          </li>
          <li>
            <div class="reason_list_image">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reason02_yokkaichi.jpg" alt="理由2イメージ画像">
              </div>
            </div>
            <di class="reason_list_text">
              <p class="reason_list_lead">駅から徒歩3分<br>好立地でゲストも安心</p>
              <p class="reason_list_note">
                最寄り駅近鉄川原町駅より徒歩3分と、アクセス良好。<br>
                お年寄りやお身体の不自由な方にもご安心いただけます。<br class="pc">また同エリアの中心的駅である近鉄四日市駅からはお車で5分。遠方からお越しのゲストにも大変好評です。
              </p>
            </di>
          </li>
          <li>
            <div class="reason_list_image">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reason03_yokkaichi.jpg" alt="理由3イメージ画像">
              </div>
            </div>
            <div class="reason_list_text">
              <p class="reason_list_lead">2020年3月Newオープン！<br>憧れの大聖堂ウェディングが叶う</p>
              <p class="reason_list_note">
                25mのバージンロードは圧巻。一歩一歩進むと、感動が少しずつ高まっていきます。<br>
                自然光がたっぷり降り注ぐ独立型大聖堂で、光のシャワーに包まれながら、ゲストの記憶に残る誓いを交わして。おふたりらしいウェディングを叶えます。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section id="case_stady" class="p-case l-case">
        <div class="p-case__inner l-inner">
            <h2 class="p-case__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-stady-title.png" alt="Case stady">
            </h2>
            <p class="p-case__copy">こんなカップルにおすすめ</p>
            <div class="p-case__items">
                <div class="p-case__item p-case-media">
                    <div class="p-case-media__bagge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-bagge01.png" alt="Case1">
                    </div>
                    <div class="p-case-media__text">
                        時期が読めず、<span>結婚式をあきらめよう</span>かと悩んでいる
                    </div>
                </div>
                <div class="p-case__item p-case-media">
                    <div class="p-case-media__bagge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-bagge02.png" alt="Case2">
                    </div>
                    <div class="p-case-media__text">
                        <span>育児が落ちついてきた</span>ので、結婚式を挙げたい
                    </div>
                </div>
                <div class="p-case__item p-case-media">
                    <div class="p-case-media__bagge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-bagge03.png" alt="Case3">
                    </div>
                    <div class="p-case-media__text">
                        <span>金銭的な理由</span>であきらめている
                    </div>
                </div>
                <div class="p-case__item p-case-media">
                    <div class="p-case-media__bagge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-bagge04.png" alt="Case4">
                    </div>
                    <div class="p-case-media__text">
                        <span>再婚のため</span>、結婚式をしていなかった
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="flow" class="p-flow l-flow">
        <div class="p-flow__inner l-inner">
            <h2 class="p-flow__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-title.png" alt="Flow">
            </h2>
            <p class="p-flow__copy">ご応募後の流れ</p>
            <div class="p-flow__items">
                <div class="p-flow__item p-flow-card">
                    <div class="p-flow-card__inner">
                        <div class="p-flow-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step1.jpg" alt="Step1">
                        </div>
                        <div class="p-flow-card__body">
                            <div class="p-flow-card__copy"><span class="p-flow-card__img--pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/step1.jpg" alt="Step1"></span>ご応募</div>
                            <p class="p-flow-card__text">スタッフよりお電話またはメールにてご連絡をさせていただきます。</p>
                        </div>
                    </div>
                </div>
                <div class="p-flow__item p-flow-card">
                    <div class="p-flow-card__inner">
                        <div class="p-flow-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step2.jpg" alt="Step2">
                        </div>
                        <div class="p-flow-card__body">
                            <div class="p-flow-card__copy"><span class="p-flow-card__img--pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/step2.jpg" alt="Step2"></span>抽選結果のご連絡</div>
                            <p class="p-flow-card__text">当選者の方へは今後のスケジュールをご案内させていただきます。</p>
                        </div>
                    </div>
                </div>
                <div class="p-flow__item p-flow-card">
                    <div class="p-flow-card__inner">
                        <div class="p-flow-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step3.jpg" alt="Step3">
                        </div>
                        <div class="p-flow-card__body">
                            <div class="p-flow-card__copy"><span class="p-flow-card__img--pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/step3.jpg" alt="Step3"></span>ご見学・お打ち合わせ</div>
                            <p class="p-flow-card__text">最幸の1日になるよう、何度かお打ち合わせをさせていただきます。</p>
                        </div>
                    </div>
                </div>
                <div class="p-flow__item p-flow-card">
                    <div class="p-flow-card__inner">
                        <div class="p-flow-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/step4.jpg" alt="Step4">
                        </div>
                        <div class="p-flow-card__body">
                            <div class="p-flow-card__copy"><span class="p-flow-card__img--pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/step4.jpg" alt="Step4"></span>挙式当日</div>
                            <p class="p-flow-card__text">いよいよ結婚式当日！<br class="u-mobile">特別な思いでをたくさん作ってください！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="qa" class="p-qa l-qa">
        <div class="p-qa__inner l-inner">
            <h2 class="p-qa__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qa-title.png" alt="Q&A">
            </h2>
            <div class="p-qa__copy">よくある質問</div>
            <div class="p-qa__items">
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger q01" data-id="tab01">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                追加で費用はかかりますか?
                            </div>
                            <span class="p-qa-media__btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab01" style="display: block;">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-a.jpg" alt="A">
                                </div>
                                <div class="p-qa-media__content">
                                    <div class="p-qa-media__answer">わずかに費用がかかる場合もございますが、<br>ご祝儀で賄うことが可能です。</div>
                                </div>
                            </div>
                            <p class="p-qa-media__dtail">
                            本キャンペーンのご当選者様において、衣裳1点ずつ・挙式・お食事会中心で40名様のご披露宴の場合、概算見積りは130万円前後でご提案しております。<br>
                            ご披露宴の費用はお客様ご負担となりますが、ご祝儀でまかなうことが可能です。<br>わずかに費用が発生する場合もございますが、自己負担０円での結婚式が可能です。
                            </p>
                            <p class="p-qa-media__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/answer_01.gif" alt="ゲスト40名の場合"  class="pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/answer_01_sp.gif" alt="ゲスト40名の場合" class="sp">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger" data-id="tab02">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                会場見学後に当選の権利を辞退することは可能ですか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab02">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-a.jpg" alt="A">
                                </div>
                                <div class="p-qa-media__answer">辞退は可能です。</div>
                            </div>
                            <p class="p-qa-media__dtail">
                                会場をお下見いただいた後、お見積りを含むご提案を充分にご検討していただいてからのご返答をお願いしております。まずはお気軽にご来館ください。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger" data-id="tab03">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                妊娠中でも、結婚式を挙げることは出来るのでしょうか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab03">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-a.jpg" alt="A">
                                </div>
                                <div class="p-qa-media__answer">はい、可能です。</div>
                            </div>
                            <p class="p-qa-media__dtail">
                                当式場はマタニティウェディングを知り尽くしたスタッフが親身になって担当いたします。
                                ドレスは様々な種類を取りそろえており、ご希望にあわせてご提案いたします。サイズの変化にも柔軟に対応いたします。
                                また、テーブルレイアウトも妊婦様に合わせて高砂を中心にゆとりを第一に考え配置をいたします。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger" data-id="tab04">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                結婚式までに何回くらい打ち合わせが必要ですか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab04">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/q-media-a.jpg" alt="A">
                                </div>
                                <div class="p-qa-media__answer">3～5回程度となります。</div>
                            </div>
                            <p class="p-qa-media__dtail">
                                お客様のご事情に応じて、お打ち合わせ回数をご提案いたします。
                                小さいお子様がいらっしゃる方や、仕事でお忙しい方は、お気軽にご相談ください。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn_1minute_02">
              <div class="shiny-btn">
                <a href="#contact">
                  <picture class="p-mainview__btn btn_campaign">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn_campaign_sp.png" alt="たった1分で完了！キャンペーンに応募する">
                  </picture>
                </a>
              </div>
            </div>
        </div>
    </section>
    <section class="p-contents l-contents">
        <div class="p-contents__inner">
            <div class="p-contents__items">
                <div class="p-contents__item p-contents-card">
                    <picture class="p-contents-card__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contents-img01-pc.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contents-img01.png" alt="WEDDING DRESS">
                    </picture>
                    <div class="p-contents-card__body">
                        <h2 class="p-contents-card__title p-contents-card__title--first"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contents-title01.png" alt="Otokucon Oroduce"></h2>
                        <p class="p-contents-card__text">
                            デザイン・素材・シルエット…<br>
                            すべてにこだわった<br class="u-mobile">
                            ウェディングドレスたち。<br>
                            必ずお気に入りの一着が見つかるはず。
                        </p>
                    </div>
                    <picture class="p-contents-card__point">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/point_dress.png" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/point_dress_sp.png" alt="おすすめのポイント">
                    </picture>
                </div>
                <div class="p-contents__item p-contents-card">
                    <picture class="p-contents-card__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contents-img02-pc.jpg" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contents-img02.png" alt="CEREMONY">
                    </picture>
                    <div class="p-contents-card__body p-contents-card__body--reverse">
                        <h2 class="p-contents-card__title p-contents-card__title--second"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/contents-title02.png" alt="Benguet Corde"></h2>
                        <p class="p-contents-card__text">
                            多彩な会場演出で、<br class="u-mobile">
                            おふたりだけの<br class="u-desk-top">世界を再現する<br class="u-mobile">
                            空間づくり。<br>
                            ウェディングフェアへの<br class="u-mobile">
                            ご参加もおすすめ。
                        </p>
                    </div>
                    <picture class="p-contents-card__point">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/point_ceremony.png" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/point_ceremony_sp.png" alt="おすすめのポイント">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="p-contact l-contact" id="contact">
      <div class="p-contact__inner l-inner">
        <h2 class="p-contact__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/application-title.png" alt=" Application">
        </h2>
        <div class="p-contact__copy">応募フォーム</div>
        <div class="p-contact__block">
          <?php echo do_shortcode('[mwform_formkey key="873"]'); ?>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fatNav.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        (function() {
            $.fatNav();
        }());
    </script>
  </main>

<?php get_footer('yokkaichi'); ?>
