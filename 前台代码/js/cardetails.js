/*页头下拉菜单*/
    $(document).ready(function($) {
      $("li").hover(function() {
        $(this).children('#children').css('display', 'block');
      }, function() {
        $(this).children('#children').css('display', 'none');
      });
    });
      function showHide(){
       $("#showdiv").toggle();
     };