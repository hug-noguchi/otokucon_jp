<?php
// 日本時間で現在日時
$tz  = new DateTimeZone('Asia/Tokyo');
$now = new DateTime('now', $tz);

// 今月の15日 23:59:59
$mid = new DateTime('first day of this month', $tz);
$mid->setDate((int)$now->format('Y'), (int)$now->format('n'), 15)->setTime(23,59,59);

// 今月の月末 23:59:59
$end = new DateTime('last day of this month', $tz);
$end->setTime(23,59,59);

// 表示する締切（前半＝15日／後半＝月末）
$deadline = ($now <= $mid) ? $mid : $end;

// 月日と曜日
$month = $deadline->format('n');
$day   = $deadline->format('j');
$week  = ['日','月','火','水','木','金','土'];
$w     = $week[(int)$deadline->format('w')];
?>
<span class="date">
  <?php echo $month; ?><span class="date_slash">/</span><?php echo $day; ?>
</span>
<span class="day_circle"><?php echo $w; ?></span>
