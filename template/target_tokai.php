<!-- sp -->
<p class="p-target_fukidashi pc">たった<span>1分</span>で応募完了</p>
  <div class="p-target_fukidashi_sp sp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fukidashi_tokai_sp.png" alt="たった1分で完了">
  </div>
  <a href="#contact" class="p-target">
    <div class="p-target__inner">
      <p class="p-target__head"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/present-icon.png" alt="キャンペーンに応募する"></span> キャンペーンに<br class="u-desktop">応募する</p>
      <p class="p-target__foot">期間限定<br class="u-desktop aa"><span>：</span>
      <?php
      // 1. 日本時間で現在日時を取得
      $tz  = new DateTimeZone('Asia/Tokyo');
      $now = new DateTime('now', $tz);

      // 2. 「今月の15日 23:59:59」を判定基準にする
      $border_15th = clone $now;
      $border_15th->modify('first day of this month')->setDate((int)$now->format('Y'), (int)$now->format('n'), 15)->setTime(23, 59, 59);

      // 3. 判定してターゲットを決める
      if ($now <= $border_15th) {
          // 15日までなら今月の15日
          $target_date = $border_15th;
      } else {
          // 15日を過ぎたら今月の末日
          $target_date = new DateTime('last day of this month', $tz);
      }

      // 4. 「Y.n.j」形式で出力（例: 2026.2.28 や 2026.3.15）
      echo $target_date->format('Y.n.j');
      ?>
    </div>
  </a>
