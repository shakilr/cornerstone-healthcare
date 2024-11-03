"use strict";

$(document).ready(function () {
  var headerHeight = $('header').outerHeight();
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= headerHeight) {
      $('main').css('padding-top', headerHeight);
      $('header').addClass('sticky');
    } else {
      $('main').css('padding-top', 0);
      $('header').removeClass('sticky');
    }
  });

  // $('body').autoPadding({
  //   source: $('.js-header'),
  // });
  //removeIf(production)
  console.log("document ready");
  //endRemoveIf(production)

  $('.popup-youtube').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
  $('.main-stage').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
    prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
    asNavFor: '.thumbnail'
  });
  $('.thumbnail').slick({
    slidesToShow: 3,
    asNavFor: '.main-stage',
    dots: false,
    arrows: false,
    center: true,
    focusOnSelect: true,
    
  });
  var accordionItems = document.querySelectorAll('.accordion-item');
  accordionItems.forEach(function (item) {
    var header = item.querySelector('.accordion-header');
    var content = item.querySelector('.accordion-content');
    header.addEventListener('click', function () {
      $('.accordion-item').removeClass('active');
      item.classList.toggle('active');
    });
  });
});