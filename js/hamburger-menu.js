$(function() {

  $('#nav_toggle').on('click', function () {
    $('#nav_toggle, #nav_menu, #hamburger_menu-background, body').toggleClass('show');
  });

  // ハンバーガーメニューの作り方（参考URL：https://qiita.com/keitah/items/2b20c92ce28dc397e7b3）


  // 【為参考】タカシマさんのサイトのjsコード
  // $(".nav_toggle").click(function(){
  //   $(".nav").slideToggle(200);
  //   $(this).toggleClass("show");
  // });
  // $(".menu_content").click(function(){
  //   $(".nav").slideToggle(200);
  //   $(".nav_toggle").removeClass("show");
  // });
 
});