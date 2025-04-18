jQuery(document).ready(function ($) {
  var scrollThreshold = 300; // ボタンを表示するスクロール量（ピクセル）
  var $campaignButton = $(".campaign-button"); // キャンペーンボタンのセレクターを適切なものに置き換えてください

  // 初期状態ではボタンを非表示
  $campaignButton.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() >= scrollThreshold) {
      $campaignButton.show();
    } else {
      $campaignButton.hide();
    }
  });
});
