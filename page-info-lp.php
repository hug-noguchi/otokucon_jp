<?php get_header(); ?>

<style>
  body {
    color: #000!important;
    font-family: "Noto Serif JP", serif!important;
  }

  header.l-header
   {
    display: none;
  }

  @media screen and (max-width: 768px) {
    .header_logo {
      display: none;
    }
  }

  .fat-nav {
    top: 50px!important;
  }

  a {
    color: inherit!important;
  }

  @media screen and (min-width: 769px) {
    main {
      padding-top: 0!important;
    }
  }

  img:not([alt]) {
    filter: none!important;
  }

  .header_logo {
    width: 10vw;
    margin-bottom: 100px;
  }

  .nav-items {
    width: 70%!important;
  }

  .nav-items__item a {
    font-size: 15px!important;
  }

  @media screen and (max-width: 768px) {
    li.nav-items__item:last-child .p-target__inner {
      top: -17vw!important;
    }
  }

  .info dl dd a {
    color: #da0029!important;
  }

  .p-footer {
    padding: 0;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>

<div class="header_sp sp">
    <h1 id="logo">
      <a href="https://otokucon.net/">
        <img src="https://otokucon.net/wp-content/themes/otokukon/assets/images/logo.png" alt="logo">
      </a>
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
                <p class="p-target__head"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/present-icon.png" alt="キャンペーンに応募する"></span> キャンペーンに<br class="u-desktop">応募する</p>
                <p class="p-target__foot">期間限定<br class="u-desktop"><span>：</span>
                  <?php if (strtotime(date('Y-m-d H:i')) < strtotime('2024-10-15 15:00')) { ?>
                    2024.10.15
                  <?php } else { ?>
                    2024.10.31
                  <?php } ?></p>
              </div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <?php
    $page_id = get_page_by_path('lp/info-lp');
    $page = get_post( $page_id );
      echo $page -> post_content;
  ?>

  <?php endwhile; endif;?>

  <script type="text/javascript" src="/common/js/lib-min.js"></script>
  <script type="text/javascript" src="/common/js/main-min.js"></script>
  <link rel="stylesheet" href="https://use.typekit.net/hqa5mhi.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="https://otokucon.net/wp-content/themes/otokukon/assets/js/jquery.fatNav.min.js" type="text/javascript"></script>

  <script>
    (function() {
      $.fatNav();
    }());

    $(function () {
      $('.hamburger').on('click', function () {
        $('.hamburger').toggleClass('active');
        $('.fat-nav').toggleClass('active');
        return false;
      });
    });

    $(function() {
      var topBtn = $('.flow_bnr');
      topBtn.hide();
      //スクロールが300に達したらボタン表示
      $(window).scroll(function () {
          if ($(this).scrollTop() > 300) {
              topBtn.fadeIn();
          } else {
              topBtn.fadeOut();
          }
      });
      // スクロールしてトップ
      topBtn.click(function () {
          $('body,html,').animate({
              scrollTop: 0
          }, 500);
          return false;
      });
    });
  </script>

<?php get_footer("lp");?>
