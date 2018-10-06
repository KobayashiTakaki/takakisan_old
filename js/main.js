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
  var lastTop = 0;
  fixedNav.css('top',-fixedNav.height());

  function toggleFixedNav() {
    headerBottom = $('#site-header').offset().top + $('#site-header').height();

    var top = window.scrollY;
    // console.log('top ' + top);
    // console.log('lastTop: ' + lastTop);
    if(top > headerBottom) {
      if(lastTop <= top){
        hideFixedNav();
      } else {
        showFixedNav();
      }
    } else {
      hideFixedNav();
    }

    lastTop = top;
  }

  function showFixedNav() {
    //console.log('over');
    fixedNav.stop().animate({
      opacity:1,
      top: 0
    },100);
    fixedNavShowFlg = true;
  }

  function hideFixedNav() {
    //console.log('under');
    fixedNav.stop().animate({
      opacity:0,
      top: -fixedNav.height()
    },100);
    fixedNavShowFlg = false;
  }

  var throttledtoggleFixedNav = _.throttle(toggleFixedNav, 100);

  $(window).on('scroll', function(){
    throttledtoggleFixedNav();
  });
  $(window).trigger('scroll');

});
