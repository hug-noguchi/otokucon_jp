<?php
// 1. 日本時間で現在日時を取得
$tz  = new DateTimeZone('Asia/Tokyo');
$now = new DateTime('now', $tz);

// 2. 「今月の15日 23:59:59」を作成
$border_15th = clone $now;
$border_15th->modify('first day of this month')->setDate((int)$now->format('Y'), (int)$now->format('n'), 15)->setTime(23, 59, 59);

// 3. 「今月の末日 23:59:59」を作成
$border_end = clone $now;
$border_end->modify('last day of this month')->setTime(23, 59, 59);

// --- 判定ロジック ---
if ($now <= $border_15th) {
    // 【ケースA】15日 23:59まで → 今月の15日を表示
    $target_date = $border_15th;
} elseif ($now <= $border_end) {
    // 【ケースB】15日を過ぎて、月末 23:59まで → 今月の末日を表示
    $target_date = $border_end;
} else {
    // 【ケースC】万が一月末を1秒でも過ぎた場合（基本は上の2つで回りますが念のため）
    // 翌月の15日に設定
    $target_date = clone $now;
    $target_date->modify('first day of next month')->modify('+14 days')->setTime(23, 59, 59);
}

// 4. 表示用のデータ作成
$month = $target_date->format('n');
$day   = $target_date->format('j');
$week  = ['日','月','火','水','木','金','土'];
$w     = $week[(int)$target_date->format('w')];
?>

<span class="date">
  <?php echo $month; ?><span class="date_slash">/</span><?php echo $day; ?>
</span>
<span class="day_circle"><?php echo $w; ?></span>
