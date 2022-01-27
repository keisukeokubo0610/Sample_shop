/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/topbom.js ***!
  \********************************/
$(function () {
  //ボタンを非表示にする
  $('#topBtn').hide(); //画面をスクロールしたとき

  $(window).scroll(function () {
    //200pxより多くスクロールした場合
    if ($(this).scrollTop() > 200) {
      //ボタンをフェードインさせる
      $('#topBtn').fadeIn(); //それ以外の場合
    } else {
      //ボタンをフェードアウトさせる
      $('#topBtn').fadeOut();
    }
  }); //id属性がtopBtnの要素をクリックすると

  $('#topBtn').click(function () {
    //画面の上から0pxの所まで500ミリ秒（0.5秒）かけてアニメーションしながらスクロールする
    $('html, body').animate({
      scrollTop: 0
    }, 500);
  });
});
/******/ })()
;