jQuery(function ($) {
  // クリック時の共通ハンドラ
  $(document).on("click", 'a.p-wedding-card__modalForm, a[class*="js-net"]', function () {
    const cls = Array.from(this.classList).find((c) => /^js-net\d+$/.test(c));
    if (!cls) return;

    // ① 自動変換（js-netNN → js-pareNN）
    let value = cls.replace("js-net", "js-pare");

    const $scope = $("#contact").closest("section");
    const $group = $scope.find('input.p-contact-radio__item[name="radio-name"]');

    // 対応するラジオを探す
    let $target = $group.filter(`[value="${value}"]`);

    // ② なければ、ページ側が用意した上書きマップを使う（任意）
    if ($target.length === 0 && window.OTOKUCON_MAP?.NET_TO_PARE?.[cls]) {
      value = window.OTOKUCON_MAP.NET_TO_PARE[cls];
      $target = $group.filter(`[value="${value}"]`);
    }

    if ($target.length === 0) {
      console.warn("対応するラジオが見つかりません:", { clicked: cls, tried: value });
      return;
    }

    $group.prop("checked", false);
    $target.prop("checked", true).trigger("change");
  });

  // ↓スムーススクロールは残す（ラジオを触る処理は削除済み）
  $(document).on("click", 'a[href*="#"]', function () {
    const $t = $(this.hash);
    if (!$t.length) return;
    const y = $t.offset().top - $("header").innerHeight();
    $("html,body").delay(300).animate({ scrollTop: y }, 1000, "linear");
    return false;
  });

  // お知らせタブ
  $(".js-tab-trigger").on("click", function () {
    $(this).toggleClass("is-active");
    //data属性を取得する
    let id = $(this).data("id");
    $("#" + id).slideToggle(500);
  });

  $(function () {
    if ($(".error")[0]) {
      $(".mw_wp_form").addClass("mw_wp_form_error");
      var errorEl = $(".mw_wp_form").eq(0);
      var position = errorEl.parent().offset().top + 0;
      $("body,html").delay(200).animate({ scrollTop: position }, 600, "swing");
    }
  });

  var pagelink = $(".js-pagelink");
  pagelink.click(function () {
    $(".js_modalWrap").addClass("active2");
    setTimeout(function () {
      $(".js_modalWrap").removeClass("active");
      $(".js_modalWrap").removeClass("active2");
      $("body").removeClass("noscroll");
    }, 500);
  });
}); //jQuery

// モーダル（ポップアップ）
const modalBtn = document.querySelectorAll(".js_modalBtnCont");
const modalWindow = document.querySelectorAll(".js_modalWrap");
const modalClose = document.querySelectorAll(".js_modalContInner");
const modalBG = document.querySelectorAll(".js_modalBG");

window.addEventListener("DOMContentLoaded", function () {
  for (let i = 0; i < modalBtn.length; i++) {
    modalBtn[i].addEventListener("click", function (e) {
      e.preventDefault();
      let dataModalBtn = modalBtn[i].getAttribute("data-modal-btn");
      for (let j = 0; j < modalWindow.length; j++) {
        if (modalWindow[j].getAttribute("data-modal-cont") === dataModalBtn) {
          modalWindow[j].classList.add("active");
          document.body.classList.add("noscroll");
        }
      }
    });
    modalBG[i].addEventListener("click", function () {
      modalWindow[i].classList.add("active2");
      setTimeout(function () {
        modalWindow[i].classList.remove("active");
        modalWindow[i].classList.remove("active2");
        document.body.classList.remove("noscroll");
      }, 300);
    });
    modalClose[i].addEventListener("click", function () {
      modalWindow[i].classList.add("active2");
      setTimeout(function () {
        modalWindow[i].classList.remove("active");
        modalWindow[i].classList.remove("active2");
        document.body.classList.remove("noscroll");
      }, 300);
    });
  }
});

const mySwiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  slidesPerView: 1, // コンテナ内に表示させるスライド数（CSSでサイズ指定する場合は 'auto'）
  breakpoints: {
    768: {
      slidesPerView: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
});

//日時指定　要素の非表示・表示切替
$(document).ready(function () {
  $(".view_timer").each(function (index, target) {
    var startDate = $(this).attr("data-start-date");
    var endDate = $(this).attr("data-end-date");
    var nowDate = new Date();

    if (startDate) {
      startDate = new Date(startDate);
    } else {
      startDate = nowDate;
    }
    if (endDate) {
      endDate = new Date(endDate);
    }

    if (startDate <= nowDate && (!endDate || nowDate <= endDate)) {
      $(this).show();
    } else {
      $(this).hide();
    }
  });
});

//スマホ用　キャンペーンボタンの動き
jQuery(function ($) {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".countdown-box").fadeIn(400);
    } else {
      $(".countdown-box").fadeOut(400);
    }
  });
});

jQuery(function ($) {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      $(".countdown-box", "header").fadeIn(400);
    } else {
      $(".countdown-box", "header").fadeOut(400);
    }
  });
});

// カウントダウンタイマー
let countdown = setInterval(function () {
  const now = new Date(); //今の日時
  const target = new Date("2025/12/31 23:59:59"); //ターゲット日時を取得
  let remainTime = target - now; //差分を取る（ミリ秒で返ってくる）

  //指定の日時を過ぎていたら処理をしない
  if (remainTime < 0) return false;

  // 差分の日・時・分・秒・ミリ秒を取得
  const difDay = Math.floor(remainTime / (1000 * 60 * 60 * 24));
  remainTime %= 1000 * 60 * 60 * 24;
  const difHour = Math.floor(remainTime / (1000 * 60 * 60));
  remainTime %= 1000 * 60 * 60;
  const difMin = Math.floor(remainTime / (1000 * 60));
  remainTime %= 1000 * 60;
  const difSec = Math.floor(remainTime / 1000);
  const difMillisec = remainTime % 1000;

  //残りの日時を上書き
  document.getElementById("countdown-day").textContent = difDay;
  document.getElementById("countdown-hour").textContent = difHour;
  document.getElementById("countdown-min").textContent = difMin;
  document.getElementById("countdown-sec").textContent = difSec;
  document.getElementById("countdown-millisec").textContent = difMillisec;

  //指定の日時になればカウントを止める
  if (remainTime < 0) clearInterval(countdown);
}, 1); //1ミリ秒ごとに処理

// カウントダウンタイマー
let countdown02 = setInterval(function () {
  const now = new Date(); // 今の日時
  const target = new Date("2026/1/31 23:59:59"); // ターゲット日時を取得
  let remainTime = target - now; // 差分を取る（ミリ秒で返ってくる）

  // 指定の日時を過ぎていたら処理をしない
  if (remainTime < 0) return false;

  // 差分の日・時・分・秒・ミリ秒を取得
  const difDay = Math.floor(remainTime / (1000 * 60 * 60 * 24));
  remainTime %= 1000 * 60 * 60 * 24;
  const difHour = Math.floor(remainTime / (1000 * 60 * 60));
  remainTime %= 1000 * 60 * 60;
  const difMin = Math.floor(remainTime / (1000 * 60));
  remainTime %= 1000 * 60;
  const difSec = Math.floor(remainTime / 1000);
  const difMillisec = Math.floor(remainTime % 1000); // 修正点

  // 残りの日時を上書き
  document.getElementById("countdown02-day").textContent = difDay;
  document.getElementById("countdown02-hour").textContent = difHour;
  document.getElementById("countdown02-min").textContent = difMin;
  document.getElementById("countdown02-sec").textContent = difSec;
  document.getElementById("countdown02-millisec").textContent = difMillisec; // 追加

  // 指定の日時になればカウントを止める
  if (remainTime < 0) clearInterval(countdown02);
}, 1); // 1ミリ秒ごとに処理

// カウントダウンの要素を取得
const countdownDigits = document.querySelectorAll("#countdownArea .countdown-digit");

// 仮の値で表示を行う関数（実際にはカウントダウンの値を反映させる）
function updateCountdown() {
  // 仮のカウントダウン値
  const countdownValues = [1, 12, 345, 6789];

  // 各桁の要素に値を設定
  countdownDigits.forEach((digit, index) => {
    digit.textContent = countdownValues[index].toString().padStart(2, "0"); // 2桁表示でゼロパディング
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // 数値リスト（例: 3, 4, 5）
  const numbers = [3, 4, 5];

  // 現在の日付を取得
  const today = new Date();

  // 今日の日付の数値 (0から始まるため mod 演算でリストの長さに収める)
  const numberIndex = today.getDate() % numbers.length;

  // 数値を設定
  const numberDisplay = document.getElementById("numberDisplay");
  if (numberDisplay) {
    numberDisplay.textContent = numbers[numberIndex];
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // 5秒後に非表示にする処理
  setTimeout(function () {
    const numberApply = document.querySelector(".number_apply");
    if (numberApply) {
      numberApply.style.display = "none";
    }
  }, 5000); // 5000ミリ秒 = 5秒
});
