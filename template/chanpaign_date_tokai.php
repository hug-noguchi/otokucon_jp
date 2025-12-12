<?php
// 日付切替条件
if (strtotime(date('Y-m-d H:i')) < strtotime('2025-12-15 15:00')) {
    $month = 12;
    $day   = 15;
} else {
    $month = 12;
    $day   = 31;
}

// 曜日計算
$week = ['日','月','火','水','木','金','土'];
$w = $week[ date('w', strtotime("2025-$month-$day")) ];
?>

<span class="date">
  <?php echo $month; ?><span class="date_slash">/</span><?php echo $day; ?>
</span>
<span class="day_circle"><?php echo $w; ?></span>
