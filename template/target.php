<!-- sp -->
<p class="p-target_fukidashi pc">たった<span>1分</span>で応募完了</p>
  <div class="p-target_fukidashi_sp sp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fukidashi_sp.png" alt="たった1分で完了">
  </div>
  <a href="#contact" class="p-target">
    <div class="p-target__inner">
      <p class="p-target__head"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/present-icon.png" alt="キャンペーンに応募する"></span> キャンペーンに<br class="u-desktop">応募する</p>
      <p class="p-target__foot">期間限定<br class="u-desktop"><span>：</span>
        <?php if (strtotime(date('Y-m-d H:i')) < strtotime('2025-8-15 15:00')) { ?>
          2025.8.15
        <?php } else { ?>
          2025.8.31
        <?php } ?></p>
    </div>
  </a>
