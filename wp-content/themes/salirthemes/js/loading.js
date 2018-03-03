$(function() {
  var loader_h = $('#loader').height();
  $('body').css('display','none');
  $('#loader-bg ,#loader').css('display','block');
  $('#loader').css({
    'height' : loader_h + 'px',
    'margin-top' : '-' + loader_h + 'px'
  });
});
             
$(window).load(function () { 
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('body').css('display', 'block');
});

$(function(){
  setTimeout('stopload()',10000);
});
             
function stopload(){
  $('body').css('display','block');
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
}