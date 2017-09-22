$(function () {
    $('.scroll-top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
    $('.scroll-bottom').click(function(){$('html,body').animate({scrollTop:$('.copyright').offset().top}, 800);});
});
