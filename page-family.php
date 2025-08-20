<?php get_header(); ?>
  <style>
    .mw_wp_form .horizontal-item {
      margin-left: 0 !important;
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
    }
  </style>
  <div class="countdown-box sp">
    <?php?>
    <?php get_template_part('template/target'); ?>
    <div class="number_apply add-control">
      <div class="action-close">
        <input type="checkbox" class="checkbox" id="close" name="close" /><label for="close" class="btn">×</label>
        <p class="box">本日、<span id="numberDisplay"></span>人のネット応募が入りました</p>
      </div>
    </div>
    <div id="countdownArea" class="countdown sp view_timer" data-end-date="2025/7/15 23:59:59">
      <span class="countdown-tx deadline">締め切りまであと</span>
      <span id="countdown-day" class="countdown-digit"></span><span class="txt">日</span>
      <span id="countdown-hour" class="countdown-digit"></span><span class="txt">時間</span>
      <span id="countdown-min" class="countdown-digit"></span><span class="txt">分</span>
      <span id="countdown-sec" class="countdown-digit"></span><span class="txt">.</span>
      <span id="countdown-millisec" class="countdown-digit millisecond"></span><span class="txt"> 秒</span>
    </div>
    <div id="countdownArea" class="countdown02 sp view_timer" data-start-date="2025/7/16 00:00:00">
      <span class="countdown-tx deadline">締め切りまであと</span>
      <span id="countdown02-day" class="countdown-digit"></span><span class="txt">日</span>
      <span id="countdown02-hour" class="countdown-digit"></span><span class="txt">時間</span>
      <span id="countdown02-min" class="countdown-digit"></span><span class="txt">分</span>
      <span id="countdown02-sec" class="countdown-digit"></span><span class="txt">.</span>
      <span id="countdown02-millisec" class="countdown-digit millisecond"></span><span class="txt"> 秒</span>
    </div>
  </div>
  <main id="family">
    <div class="header_sp sp">
      <h1 id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
      </h1>
      <div class="fat-nav sp">
        <nav class="header-nav fat-nav__wrapper" id="js-nav">
            <ul class="nav__items nav-items nav-list" id="menu">
                <li class="nav-items__item"><a href="#special_favor">15大無料特典！</a></li>
                <li class="nav-item nav-items__item"><a href="#wedding_hall">会場を選ぶ</a></li>
                <li class="nav-item nav-items__item"><a href="#case_stady">こんな方におすすめです</a></li>
                <li class="nav-item nav-items__item"><a href="#flow">ご応募の流れ</a></li>
                <li class="nav-item nav-items__item"><a href="#qa">Q&A</a></li>
                <li class="nav-item nav-items__item"><a href="#voice">Voice</a></li>
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
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/family/mainview_family_pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/mainview_family_sp.png" alt="抽選で5組様に！">
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
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_pc.png" media="(min-width: 768px)" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_sp.png" alt="たった1分で完了！キャンペーンに応募する">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-favor-title.png" alt="Specialfavor">
            </h2>
            <p class="p-special__copy">結婚式キャンペーンに含まれる</p>
            <p class="p-special__benefit">15大特典</p>
            <div class="p-special__ribon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon.png" alt="<?php bloginfo('title'); ?>">
            </div>
            <div class="p-special__text">最大50万円相当<span>が</span>無料<span>になります。</span></div>
            <div class="p-special__items">
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="1.チャペルでの挙式料">
                    </div>
                    <h3 class="p-special-card__title">1.チャペルでの挙式料</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img01.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">2.新郎新婦衣裳</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img02.png" alt="2.新郎新婦衣裳">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">3.お写真</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img03.png" alt="3.お写真">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">4.婚礼料理フルコース</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img04.png" alt="4.婚礼料理フルコース">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">５.フリードリンク</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img05.png" alt="５.フリードリンク">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">6.ブーケ</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img06.png" alt="6.ブーケ">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">7.会場装花</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img07.png" alt="7.会場装花">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">8.芳名帳</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img08.png" alt="8.芳名帳">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">9.テーブルセット</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img09.png" alt="9.テーブルセット">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">10.着付料</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img10.png" alt="10.着付料">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">11.音響照明</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img11.png" alt="11.音響照明">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">12.司会者</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img12.png" alt="12.司会者">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">13.会場料</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img13.png" alt="13.会場料">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">14.介添え料</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img14.png" alt="14.介添え料">
                    </div>
                </div>
                <div class="p-special__item p-special-card">
                    <div class="p-special-card__ribon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/special-ribon2.png" alt="<?php bloginfo('title'); ?>">
                    </div>
                    <h3 class="p-special-card__title">15.引き出物・引き菓子</h3>
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img15.png" alt="15.引き出物・引き菓子">
                    </div>
                </div>
                <div class="p-special__item p-special-card sp">
                    <div class="p-special-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img16_sp.png" alt="+お子様衣装1点 お子様用ランチ 1名様分をサービス">
                    </div>
                </div>
            </div>
            <div class="p-special-card__img_kids pc">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/special-card-img16.png" alt="+お子様衣装1点 お子様用ランチ 1名様分をサービス">
            </div>
            <p class="p-special__foot">
                ※30名以上の披露宴またはパーティーをされる方に限ります。　<br class="sp">※披露宴、または、パーティー費用は含まれておりません。
            </p>
            <div class="btn_1minute_02">
              <div class="shiny-btn">
                <a href="#contact">
                  <picture class="p-mainview__btn btn_campaign">
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_sp.png" alt="たった1分で完了！キャンペーンに応募する">
                  </picture>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section id="wedding_hall" class="p-wedding l-wedding">
          <div class="p-wedding__inner l-inner">
            <h2 class="p-wedding__title">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-hall-title.png" alt="Wedding Hall">
            </h2>
            <p class="p-wedding__copy">ご希望の式場をお選びいただけます</p>
            <div class="p-wedding__items">
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal01">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-img01.jpg" alt="ガーデンテラス東山">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ガーデンテラス東山</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal01">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/higashiyama01.jpg" alt="ガーデンテラス東山">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/higashiyama02.jpg" alt="ガーデンテラス東山">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/higashiyama03.jpg" alt="ガーデンテラス東山">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ガーデンテラス東山</h3>
                                        <p class="p-wedding-card__modaltext">
                                            緑を見渡しながら挙式を執り行うことができる真っ白なチャペル。披露宴会場は、壁三面を使ったプロジェクションマッピングなど、多彩な演出が可能です。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a  id="js-pare01" class="p-wedding-card__modalForm js-pagelink js-net01" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal02">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-img02.jpg" alt="アールベルアンジェ四日市">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ四日市</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal02">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yokkaichi01.jpg" alt="アールベルアンジェ四日市">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yokkaichi02.jpg" alt="アールベルアンジェ四日市">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yokkaichi03.jpg" alt="アールベルアンジェ四日市">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ四日市</h3>
                                        <p class="p-wedding-card__modaltext">
                                            2020年にリニューアルした大人気の貸切邸宅。自然光が降り注ぐ大聖堂に、25mものバージンロードが魅力的。フォトジェニックなプライベートガーデン付きの会場です。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare03" class="p-wedding-card__modalForm js-pagelink js-net02" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal03">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img03.jpg" alt="ベルクラシック神戸">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ベルクラシック神戸</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal03">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img03.jpg" alt="ベルクラシック神戸">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kobe02.jpg" alt="ベルクラシック神戸">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kobe03.jpg" alt="ベルクラシック神戸">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ベルクラシック神戸</h3>
                                        <p class="p-wedding-card__modaltext">
                                            好立地な都心の中にリゾートのような青い空と緑に囲まれたガーデンが大人気。光のチャペルは大きなクリスタルシャンデリアに、ガラスのバージンロードがとても幻想的です。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare04" class="p-wedding-card__modalForm js-pagelink js-net03" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal04">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-img04.jpg" alt="ベルクラシック姫路">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ベルクラシック姫路</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal04">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/himeji01.jpg" alt="ベルクラシック姫路">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/himeji02.jpg" alt="ベルクラシック姫路">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/himeji03.jpg" alt="ベルクラシック姫路">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ベルクラシック姫路</h3>
                                        <p class="p-wedding-card__modaltext">
                                            純白のドレスも輝きを増す、幻想的なガラスのバージンロードが魅力的。ナチュラルガーデンのある一軒家貸切ウエディングが可能です。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare05" class="p-wedding-card__modalForm js-pagelink js-net04" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal05">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img05.jpg" alt="ザ・ロイヤルクラシック姫路">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ザ・ロイヤルクラシック姫路</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal05">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img05.jpg" alt="ザ・ロイヤルクラシック姫路">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/royal_himeji02.jpg" alt="ザ・ロイヤルクラシック姫路">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/royal_himeji03.jpg" alt="ザ・ロイヤルクラシック姫路">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ザ・ロイヤルクラシック姫路</h3>
                                        <p class="p-wedding-card__modaltext">
                                            緑いっぱいのガーデンがあり、イメージに合わせたパーティー演出をお選びいただけます。 光と緑が降り注ぐ祝福のシャワーで、心あたたまる最高のひとときを。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare06" class="p-wedding-card__modalForm js-pagelink js-net05" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal06">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-img06.jpg" alt="アールベルアンジェ奈良">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ奈良</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal06">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nara01.jpg" alt="アールベルアンジェ奈良">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nara02.jpg" alt="アールベルアンジェ奈良">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nara03.jpg" alt="アールベルアンジェ奈良">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ奈良</h3>
                                        <p class="p-wedding-card__modaltext">
                                            最新演出「プロジェクションマッピング」を取り入れたゲストハウス！水と緑が溢れる広大な敷地には、開放感たっぷりの独立型ガラス張りチャペルがございます。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare07" class="p-wedding-card__modalForm js-pagelink js-net06" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal07">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-img07.jpg" alt="アールベルアンジェ チャペル嵯峨野">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ チャペル嵯峨野</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal07">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sagano01.jpg" alt="アールベルアンジェ チャペル嵯峨野">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sagano02.jpg" alt="アールベルアンジェ チャペル嵯峨野">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sagano03.jpg" alt="アールベルアンジェ チャペル嵯峨野">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ チャペル嵯峨野</h3>
                                        <p class="p-wedding-card__modaltext">
                                            観光地として人気の嵯峨嵐山にある、可愛い一軒家がWEDDINGの舞台。アンティークな建物と優しい木漏れ日に満ちたガーデンにほっこり。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare08" class="p-wedding-card__modalForm js-pagelink js-net07" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal08">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img08.jpg" alt="ベルクラシック空港">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ベルクラシック空港</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal08">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img08.jpg" alt="ベルクラシック空港">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kuko02.jpg" alt="ベルクラシック空港">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kuko03.jpg" alt="ベルクラシック空港">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ベルクラシック空港</h3>
                                        <p class="p-wedding-card__modaltext">
                                            2023年5月ル・リアン（le lien）グランドオープン。<br>
                                            ワンフロア貸し切りでアットホームにも盛大にも、個性豊かな会場でお二人らしいウェディングが叶います。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare09" class="p-wedding-card__modalForm js-pagelink js-net08" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal09">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img09.jpg" alt="アールベルアンジェ堺">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ堺</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal09">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sakai01.jpg" alt="アールベルアンジェ堺">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sakai02.jpg" alt="アールベルアンジェ堺">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sakai03.jpg" alt="アールベルアンジェ堺">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ堺</h3>
                                        <p class="p-wedding-card__modaltext">
                                            一歩足を踏み入れるとそこはもうドラマの１シーンのような別世界。開放感たっぷりの貸切邸宅に、天窓から優しい光が降り注ぐチャペルが神秘的。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare10" class="p-wedding-card__modalForm js-pagelink js-net09" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal10">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img10.jpg" alt="ベルクラシック大阪">
                        </a>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ベルクラシック大阪</h3>
                            <div class="p-wedding-card__btn">詳しくはこちら</div>
                        </div>
                    </div>
                    <!-- モーダル（ポップアップ）の内容 -->
                    <div class="p-wedding-card__popUp js_modalWrap" data-modal-cont="modal10">
                        <div class="p-wedding-card__bg js_modalBG"></div>
                        <div class="p-wedding-card__cotainer">
                            <span class="p-wedding-card__closebtn js_modalContInner"></span>
                            <div class="p-wedding-card__content">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/wedding-img10.jpg" alt="ベルクラシック大阪">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/osaka02.jpg" alt="ベルクラシック大阪">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/osaka03.jpg" alt="ベルクラシック大阪">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ベルクラシック大阪</h3>
                                        <p class="p-wedding-card__modaltext">
                                            広大な敷地内に、ステンドグラスが煌めく大聖堂やガーデンに、大階段など、憧れを叶える空間が揃っています。神聖な雰囲気の中に流れるかけがえのない時間をご体感ください。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare02" class="p-wedding-card__modalForm js-pagelink js-net10" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="case_stady" class="p-case l-case">
        <div class="p-case__inner l-inner">
            <h2 class="p-case__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/case-stady-title.png" alt="Case stady">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/flow-title.png" alt="Flow">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/qa-title.png" alt="Q&A">
            </h2>
            <div class="p-qa__copy">よくある質問</div>
            <div class="p-qa__items">
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger q01" data-id="tab01">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                追加で費用はかかりますか?
                            </div>
                            <span class="p-qa-media__btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab01" style="display: block;">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-a.jpg" alt="A">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/answer_01.png" alt="ゲスト40名の場合"  class="pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/answer_01_sp.png" alt="ゲスト40名の場合" class="sp">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-qa__item p-qa-media">
                    <div class="p-qa-media__inner js-tab-trigger" data-id="tab02">
                        <div class="p-qa-media__head">
                            <div class="p-qa-media__q">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                会場見学後に当選の権利を辞退することは可能ですか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab02">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-a.jpg" alt="A">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                妊娠中でも、結婚式を挙げることは出来るのでしょうか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab03">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-a.jpg" alt="A">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-q.jpg" alt="Q">
                            </div>
                            <div class="p-qa-media__copy">
                                結婚式までに何回くらい打ち合わせが必要ですか？
                            </div>
                            <span class="p-qa-media__btn js-btn"></span>
                        </div>
                        <div class="p-qa-media__foot js-tab-target" id="tab04">
                            <div class="p-qa-media__block">
                                <div class="p-qa-media__a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/q-media-a.jpg" alt="A">
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
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_pc.png" media="(min-width: 768px)" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/btn_family_sp.png" alt="たった1分で完了！キャンペーンに応募する">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/service.png" class="pc" alt="SERVICE">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/service_sp.png" class="sp" alt="SERVICE">
                    </picture>
                </div>
                <div class="p-contents__item p-contents-card">
                    <picture class="p-contents-card__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/ceremony.png" class="pc" alt="CEREMONY">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/ceremony_sp.png" class="sp" alt="CEREMONY">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="voice" class="p-voice l-voice">
        <div class="p-voice__inner l-inner">
            <h2 class="p-voice__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/voice-title.png" alt="Voice">
            </h2>
            <div class="p-voice__copy">挙式されたお客様からの喜びの声</div>
						<ul class="p-voice__list">
							<li class="p-voice__items">
                <div class="p-voice__item p-voice-card">
                  <h3 class="p-voice-card__title sp">子どもを連れての打ち合わせも安心！</h3>
                  <p class="p-voice-card__subtitle sp">新婦H様</p>
                  <div class="p-voice-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/voice_img01.png" alt="子どもを連れての打ち合わせも安心！">
                  </div>
                  <div class="p-voice-card__body">
                    <h3 class="p-voice-card__title pc">子どもを連れての打ち合わせも安心！</h3>
                    <p class="p-voice-card__subtitle pc">新婦H様</p>
                    <p class="p-voice-card__text">
                      <span>子どもを連れての打ち合わせ</span>だったのですが、 個室を用意してもらえたり、 授乳・オムツ替えの時間をとってもらえて、とても理解がありサポートも万全でした。<br>
                      アクアリウムをイメージした会場コーディネートでは、スタッフさんも協力のもと、<span>ゲストにも大好評の完成度</span>に仕上げることができ、 大満足でした!
                    </p>
                  </div>
                </div>
							</li>
							<li class="p-voice__items">
                <div class="p-voice__item p-voice-card">
                  <h3 class="p-voice-card__title sp">子供から大人まで楽しめる結婚式！</h3>
                  <p class="p-voice-card__subtitle sp">新婦M様</p>
                  <div class="p-voice-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/voice_img02.png" alt="子供から大人まで楽しめる結婚式！">
                  </div>
                  <div class="p-voice-card__body">
                    <h3 class="p-voice-card__title pc">子供から大人まで楽しめる結婚式！</h3>
                    <p class="p-voice-card__subtitle pc">新婦M様</p>
                    <p class="p-voice-card__text">
                      両親、兄の挙げた式場で私も挙式することが夢でした。<br>
                      子どもが多かったのでベールを持ってくれるトレーンガール、リングガール、 フラワーキッズなど<span>子ども達の出番もたくさん作り、 主役になれる挙式</span>にこだわりました。<br>
                      妊娠入院・出産とバタバタの中での計画でしたが、私たちの予定に合わせてくれて本当に助かりました。<span>沢山の笑顔が溢れ、子どもから大人まで楽しむ事の出来る結婚式</span>になりました。
                    </p>
                  </div>
                </div>
							</li>
							<li class="p-voice__items">
                <div class="p-voice__item p-voice-card">
                  <h3 class="p-voice-card__title sp">妊娠しても結婚式を挙げられた！</h3>
                  <p class="p-voice-card__subtitle sp">新婦O様</p>
                  <div class="p-voice-card__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/voice_img03.png" alt="妊娠しても結婚式を挙げられた！">
                  </div>
                  <div class="p-voice-card__body">
                    <h3 class="p-voice-card__title pc">妊娠しても結婚式を挙げられた！</h3>
                    <p class="p-voice-card__subtitle pc">新婦O様</p>
                    <p class="p-voice-card__text">
                      妊娠したとこで 「挙式は無理かな？」とも思いましたが、偶然こちらのキャンペーンを見つけました。<span>「当たったらラッキー」程度の気持ちで応募</span>したら、なんと本当に当選してしまいました!<br>
                      打ち合わせはシンプルで余計な時間もかからず、費用もご祝儀内で抑えられて本当によかったです。<br>
                      式当日までの間、<span>担当プランナーさんに体調をいつも気遣っていただいた</span>ので、安心して準備をすすめることが出来ました。本当に感謝しています。
                    </p>
                  </div>
                </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="p-application l-application">
      <div class="p-application__inner l-inner">
        <h2 class="p-application__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/applicationdetails-title.png" alt="Application Details">
        </h2>
        <div class="p-application__copy">応募資格</div>
        <div class="p-application__items">
          <div class="p-application__item p-application-card">
            <div class="p-application-card__body">
              <h3 class="p-application-card__title">プレゼント内容</h3>
              <p class="p-application-card__toptext">
                抽選で各式場にて5組様に結婚式をプレゼント！
              </p>
            </div>
          </div>
          <div class="p-application__item p-application-card">
            <div class="p-application-card__body">
              <h3 class="p-application-card__title">応募資格</h3>
              <ol class="p-application-card__box">
                <li class="p-application-card__text">1.30名様以上の披露宴･パーティーをされる方</li>
                <li class="p-application-card__text">2.プレゼントさせて頂く「結婚式」に関してお打合せ時から当日のシーンの撮影等にご協力いただける方</li>
                <li class="p-application-card__text">3.2にて撮影したお写真等をHPやFacebook等の販促物で使用させていただくことをご了承いただける方</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-contact l-contact" id="contact">
      <div class="p-contact__inner l-inner">
        <h2 class="p-contact__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/family/application-title.png" alt=" Application">
        </h2>
        <div class="p-contact__copy">応募フォーム</div>
        <div class="p-contact__block">
          <?php echo do_shortcode('[mwform_formkey key="1334"]'); ?>
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
    <script async src="//www.instagram.com/embed.js"></script>
  </main>
<?php get_footer("family"); ?>
