//CATEGORIES DROPDOWN
$('.categories_current').click(function() {
  $('.categories_drop').slideToggle();
});

//MENU TOGGLE
$('.header_toggle').click(function() {
  $('.header_menu').slideToggle();
  $(this).toggleClass('--active');
});

$(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 120) {
            $('.header').addClass('skin');
        } else {
            $('.header').removeClass('skin');
        }
    });
});
//MATCH HEIGHT
$('.post-card').matchHeight();

//SEARCH
$('.search_toggle').click(function() {
  $('.search form, .search button').toggleClass('--active');
  $('.header_menu').toggleClass('--search-active');
});

//SCROLL TO TOP
$(".scroll-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

$('.services_card').click(function(){
    $(this).toggleClass('--flipped');
});

//PROGRESS BAR
if($('#single').length) {
    $('.pheader_progress').show();
    $('.header_progress').css('opacity', '1');
    jQuery(window).scroll(function() {
        var wheight = $(window).height();
        var width = $(window).width();
        var scrollTop = $(window).scrollTop();
        var totalHeight = $('#single').height();
        var offset = $('#single').offset().top;
        var percentage = (scrollTop+wheight-offset)/(totalHeight);
        var newWidth = width * percentage;
        $('.header_progress-line').width(newWidth);
    });
}