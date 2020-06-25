$(function() {

//-------------------------скорость якоря---------------------------------------
  $(".click").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({scrollTop: top - 90}, 'slow', 'swing');
  });


//-------------------------------slider---------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000-00-00');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
  }, "Введите Ваш телефон");


//-------------------------------slider---------------------------------------
  var swiper = new Swiper('.services__slider', {
    slidesPerView: 3,
    spaceBetween: 15,
    pagination: {
      el: '.services__pagination',
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    loop: true,
    breakpoints: {
      992: {
        slidesPerView: 2,
      },
      480: {
        slidesPerView: 1,
      }
    }
  });

});
