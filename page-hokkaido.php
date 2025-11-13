<?php get_header(); ?>

  <style>
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

  <div class="countdown-box" id="lp-box">
    <?php get_template_part('template/target'); ?>
  </div>

  <main>
    <div class="header_sp sp">
      <h1 id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
      </h1>
      <div class="fat-nav sp">
        <nav class="header-nav fat-nav__wrapper" id="js-nav">
            <ul class="nav__items nav-items nav-list" id="menu">
                <li class="nav-items__item"><a href="#special_favor">10大無料特典！</a></li>
                <li class="nav-item nav-items__item"><a href="#wedding_hall">会場を選ぶ</a></li>
                <li class="nav-item nav-items__item"><a href="#case_stady">こんな方におすすめです</a></li>
                <li class="nav-item nav-items__item"><a href="#flow">ご応募の流れ</a></li>
                <li class="nav-item nav-items__item"><a href="#qa">Q&A</a></li>
                <li class="nav-item nav-items__item"><a href="#voice">ウェディングレポート</a></li>
                <li class="nav-item nav-items__item"><a href="#application">応募資格</a></li>
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
        <section id="wedding_hall" class="p-wedding l-wedding">
          <div class="p-wedding__inner l-inner">
            <h2 class="p-wedding__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wedding-hall-title.png" alt="Wedding Hall">
            </h2>
            <p class="p-wedding__copy">ご希望の式場をお選びいただけます</p>
            <div class="p-wedding__items">
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal01">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporo01.jpg" alt="アールベルアンジェ札幌">
                        </a>
                        <p class="area">北海道札幌市</p>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ札幌</h3>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporo01.jpg" alt="アールベルアンジェ札幌">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporo02.jpg" alt="アールベルアンジェ札幌">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sapporo03.jpg" alt="アールベルアンジェ札幌">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ札幌</h3>
                                        <p class="p-wedding-card__modaltext">
                                          16mにもなるバージンロードに大スケールの礼拝堂ではあたたかなキャンドルが灯り、パイプオルガンの音色が響き渡ります。また、ガーデンパーティではサプライズ入場や花火など多彩な演出を楽しめます！おふたりの幸せを分かち合う、ぴったりの空間です。
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muroran01.jpg" alt="アール・ベル・アンジェ室蘭">
                        </a>
                        <p class="area">北海道室蘭市</p>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アール・ベル・アンジェ室蘭</h3>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muroran01.jpg" alt="アール・ベル・アンジェ室蘭">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muroran02.jpg" alt="アール・ベル・アンジェ室蘭">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muroran03.jpg" alt="アール・ベル・アンジェ室蘭">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アール・ベル・アンジェ室蘭</h3>
                                        <p class="p-wedding-card__modaltext">
                                          (収容人数：10～180名)<br>
                                          開放的なプール付きガーデンも備えるオシャレな一軒家が、ウエディング当日はおふたりとゲストの貸し切りに。感動的なセレモニーとなる【セイント・ニコラス教会】は収容人数104名。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare02" class="p-wedding-card__modalForm js-pagelink js-net02" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal03">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hakodate01.jpg" alt="ベルクラシック函館">
                        </a>
                        <p class="area">北海道函館市</p>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">ベルクラシック函館</h3>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hakodate01.jpg" alt="ベルクラシック函館">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hakodate02.jpg" alt="ベルクラシック函館">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hakodate03.jpg" alt="ベルクラシック函館">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">ベルクラシック函館</h3>
                                        <p class="p-wedding-card__modaltext">
                                          (収容人数：10～200名)<br>
                                          函館の中心地にあるためアクセスが便利。異国情緒あふれるヨーロッパ様式の重厚な建物にくわえ、館内には噴水付きの中庭とイタリアンレストランがあり、非現実的な空間が人気です。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare03" class="p-wedding-card__modalForm js-pagelink js-net03" href="#contact">この式場に応募する</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-wedding__item p-wedding-card">
                    <div class="js_modalBtnCont" data-modal-btn="modal04">
                        <a class="p-wedding-card__ribon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tomakomai01.jpg" alt="アールベルアンジェ苫小牧">
                        </a>
                        <p class="area">北海道苫小牧市</p>
                        <div class="p-wedding-card__body">
                            <h3 class="p-wedding-card__title">アールベルアンジェ苫小牧</h3>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tomakomai01.jpg" alt="アールベルアンジェ苫小牧">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tomakomai02.jpg" alt="アールベルアンジェ苫小牧">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tomakomai03.jpg" alt="アールベルアンジェ苫小牧">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-slide"><span></span></div>
                                    <div class="swiper-button-prev swiper-slide"><span></span></div>
                                </div>
                                <div class="p-wedding-card__block">
                                    <div class="p-wedding-card__modalbody">
                                        <h3 class="p-wedding-card__modaltitle">アールベルアンジェ苫小牧</h3>
                                        <p class="p-wedding-card__modaltext">
                                          (収容人数：10～180名)<br>
                                          光・水・木・緑と自然観を取り込み、両サイドは木のユニークな流線型のデザインチャペル！遊び心と居心地の上質空間を創造したバンケットホール！自然光が溢れる全天候型ガーデンテラス。
                                        </p>
                                    </div>
                                    <div class="p-wedding-card__other">
                                        <a id="js-pare04" class="p-wedding-card__modalForm js-pagelink js-net04" href="#contact">この式場に応募する</a>
                                    </div>
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
    <section id="voice" class="p-voice l-voice">
        <div class="p-voice__inner l-inner">
            <h2 class="p-voice__title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice_title.png" alt="Wedding Report">
            </h2>
            <div class="p-voice__copy">ウェディングレポート</div>
						<p class="p-voice__sublead">
							先輩たちのウェディングや心に残る演出をご紹介。<br>
							理想のウェディングのご参考にしてはいかがでしょうか。
						</p>
						<ul class="p-voice__list">
							<li class="p-voice__items">
									<div class="p-voice__item p-voice-card">
											<div class="p-voice-card__body">
													<h3 class="p-voice-card__title">
														アットホームウェディング♪<br>～ゲストの皆様へ感謝を込めて～
													</h3>
													<p class="p-voice-card__subtitle">K.S様♡K.M様<br>2024.3.2</p>
													<div class="p-voice-card__img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice_img01.jpg" alt="アットホームウェディング♪～ゲストの皆様へ感謝を込めて～">
													</div>
                          <div class="p-voice-card__qbox">
                            <div class="p-voice-card__image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_q.jpg" alt="Q">
                            </div>
                            <p class="p-voice-card__q">
                              結婚式が終わってご感想をお聞かせ下さい。
                            </p>
                          </div>
													<p class="p-voice-card__text">
														大好きな人たちにが私たちのために予定を開けて集まってくれて、喜んでくれたり涙してくれたり、そんな日は人生に一度だけなんだと思うと<br>
														やはり結婚式を挙げてよかったなあと何度振り返っても思います。<br>
														家族や友人にも喜んでもらえたのでよかったです。<br>
														また準備期間を経て、夫婦2人の絆も深まった気がします！
													</p>
											</div>
									</div>
							</li>
							<li class="p-voice__items">
									<div class="p-voice__item p-voice-card">
											<div class="p-voice-card__body">
													<h3 class="p-voice-card__title">
														Autumn Wedding
													</h3>
													<p class="p-voice-card__subtitle">T.J様♡K.D様<br>2023.11.23</p>
													<div class="p-voice-card__img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice_img02.jpg" alt="Autumn Wedding">
													</div>
                          <div class="p-voice-card__qbox">
                            <div class="p-voice-card__image">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_q.jpg" alt="Q">
                            </div>
                            <p class="p-voice-card__q">
                              結婚式が終わってご感想をお聞かせ下さい。
                            </p>
                          </div>
													<p class="p-voice-card__text">
														携わっていただいたすべての人が良い人で終始気持ち良く<br>
														打ち合わせから式当日まで進行できました。<br>
														一生に一度の記憶に残る結婚式になりました！<br>
														本当にありがとうございました。
													</p>
											</div>
									</div>
							</li>
							<li class="p-voice__items">
									<div class="p-voice__item p-voice-card">
											<div class="p-voice-card__body">
													<h3 class="p-voice-card__title">
														「おめでとう！」のお言葉が<br>
														溢れかえった笑顔満載の1日
													</h3>
													<p class="p-voice-card__subtitle">Rさん＆Rさん<br>2021.2.1</p>
													<div class="p-voice-card__img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice_img03.jpg" alt="「おめでとう！」のお言葉が溢れかえった笑顔満載の1日">
													</div>
													<p class="p-voice-card__text">
														今まで一緒に過ごしてきたご家族様。<br>
														新婦様の素直なお気持ちをお手紙で届けていただいて<br>
														親御様へ感謝のお気持ちを込めて花束贈呈をしていただきました。<br>
														家族が増え、新郎新婦様は親御様とではなくおふたりでこれからの人生を歩まれます。<br>
														きっと親御様には「おめでとう」という祝福のお気持ちと<br>
														「さみしい」というお気持ちが混ざった感情だったのではないでしょうか。<br>
														親御様の涙はきっと新婦様にも届いたはずでございます。<br>
														結婚式では普段なかなか伝えられない想いを伝えられる大切なお時間でございます。<br>
														そして、新郎新婦様にとってもご家族様にとっても大きな節目となる1日だったかと思います。<br>
														親御様とおふたりが抱きあうお姿は会場の涙を誘いました。
													</p>
											</div>
									</div>
							</li>
							<li class="p-voice__items">
									<div class="p-voice__item p-voice-card">
											<div class="p-voice-card__body">
													<h3 class="p-voice-card__title">
														やっと迎えた結婚式当日！<br>
														あたたかなお気持ちを祝福を！
													</h3>
													<p class="p-voice-card__subtitle">Sさん＆Sさん<br>2021.1.9</p>
													<div class="p-voice-card__img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/voice_img04.jpg" alt="やっと迎えた結婚式当日！あたたかなお気持ちを祝福を！">
													</div>
													<p class="p-voice-card__text">
														ガーデンセレモニーではトス演出やお菓子まきとゲストの皆様に楽しんでいただける
														演出をお考えになられていたおふたり！<br>
														ゲスト皆様のご参加がご親族様中心となりお菓子まきではなく<br>
														ぬいぐるみトスを行いました！<br>
														ご友人様からご親族様そしてお子様皆様に向けて<br>
														幸せのお裾分けをしていただきました！<br>
														見事キャッチしたのは挙式でお手伝いをしてくれたお子様2人がキャッチをしました！
													</p>
											</div>
									</div>
							</li>
						</ul>
        </div>
    </section>

    <section class="p-contact l-contact" id="contact">
      <div class="p-contact__inner l-inner">
        <h2 class="p-contact__title">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/application-title.png" alt=" Application">
        </h2>
        <div class="p-contact__copy">応募フォーム</div>
        <div class="p-contact__block">
          <?php echo do_shortcode('[mwform_formkey key="944"]'); ?>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fatNav.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        (function() {
            $.fatNav();
        }());
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js?ver=1.0.13"></script>
    <script async src="//www.instagram.com/embed.js"></script>
  </main>

<?php get_footer("hokkaido"); ?>
