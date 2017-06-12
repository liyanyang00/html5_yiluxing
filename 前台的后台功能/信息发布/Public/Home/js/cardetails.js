/*页头下拉菜单*/
    $(document).ready(function($) {
      $("li").hover(function() {
        $(this).children('#children').css('display', 'block');
      }, function() {
        $(this).children('#children').css('display', 'none');
      });
    });
/*window.onload=function(){
        var small=document.getElementById('smallpic');
        var img=document.getElementsByTagName('img');
        for(var i=0;i<img.length;i++){
          img[i].onclick=function(){
            for(var j=0;j<img.length;j++){
              img[j].className='';
            }
            //this.className='pb';
            var big=document.getElementById('bigpic');
            big.src=this.src;
            }
        }
      };*/
      function showHide(){
       $("#showdiv").toggle();
     };