$(function(){
  //var _window = $(window);
  if($('#top-nav ul li[class *= "active"]').length === 0) {
    console.log('empty');
    $('#top-nav ul li:first-child').addClass('active');
  } else {
    console.log($('#top-nav ul li[class *= "active"]')[0].textContent);
  }

  var headerBottom;
  var fixedNav = $('#fixed-nav');
  var fixedNavShowFlg = false;
  fixedNav.css('top',-fixedNav.height());

  $(window).on('scroll', function(e){
    headerBottom = $('#site-header').offset().top + $('#site-header').height();
    console.log('headerBottom: ' + headerBottom);
    console.log('window.scrollY: ' + window.scrollY);
    if(window.scrollY > headerBottom) {
      if(!fixedNavShowFlg){
        console.log('over');
        fixedNav.stop().animate({
          opacity:1,
          top: 0
        },200);
        fixedNavShowFlg = true;
      }
    } else {
      if(fixedNavShowFlg){
        console.log('under');
        fixedNav.stop().animate({opacity:0,
          top: -fixedNav.height()
        },200);
        fixedNavShowFlg = false;
      }
    }
  });


  $(window).trigger('scroll');

  // var intervalID = setInterval(function (){
  //   console.log('navbarFixed: ' + navbarFixed);
  // }, 1000);
});
