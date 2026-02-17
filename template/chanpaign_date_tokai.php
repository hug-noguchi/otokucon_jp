<?php
$current_year = (int)date('Y');

if (strtotime(date('Y-m-d H:i')) < strtotime($current_year . '-2-15 15:00')) {
    $month = 2;
    $day   = 15;
    $target_year = $current_year;
} else {
    $month = 2;
    $day   = 28;
    $target_year = $current_year + 1;
}

$week = ['日','月','火','水','木','金','土'];
$w = $week[ date('w', strtotime("$target_year-$month-$day")) ];
?>

<span class="date">
  <?php echo $month; ?><span class="date_slash">/</span><?php echo $day; ?>
</span>
<span class="day_circle">土</span>
