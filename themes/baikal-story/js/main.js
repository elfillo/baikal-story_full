"use strict";

window.App = {
  W: $(window),
  D: $(document),
  H: $('html'),
  B: $('body'),
  ie: false,
  edge: false,
  firefox: false,
  mainpage: false
};

document.addEventListener('DOMContentLoaded', function() {
  var scrollFadeIn = document.querySelectorAll('.js-scroll-fade-in')

  var options = {
    threshold: 0.3
  }

  // if (isMobile()) {
  //   options.threshold = 0.1
  // }

  var observer = new IntersectionObserver(function(entries) {

    for (var i = 0; i < entries.length; i++) {
      var entry = entries[i];
      
      var lazyBlock = entry.target;
      if (entry.isIntersecting) {
        
        lazyBlock.classList.add('visible');
        observer.unobserve(lazyBlock);
      }
      
    }
    
  }, options);

  for (var i = 0; i < scrollFadeIn.length; i++) {
    var element = scrollFadeIn[i];
    
    observer.observe(element);
  }

});


$(function () {
  var burger = $('.burger-menu');
  var mobileMenu = $('.mobile-menu');
  var appartamentPopup = $('.appartament-popup');

  burger.on('click', function () {
    $(this).stop().toggleClass('is-active');
    mobileMenu.stop().toggleClass('show');
    appartamentPopup.fadeOut();
    $('.appartament-menu').removeClass('is-active');
  });

  function openModalApartamentsOnMobile() {
    var that = $(this);

    $('.appartament-menu').toggleClass('is-active');

    if ($('.appartament-menu').hasClass('is-active')) {
      appartamentPopup.fadeIn();
    } else {
      appartamentPopup.fadeOut();
    }

    mobileMenu.removeClass('show');
    burger.removeClass('is-active');
  }

  $('.appartament-menu').on('click', openModalApartamentsOnMobile);
  $('.mobile-menu__btn').on('click', openModalApartamentsOnMobile);
  $('.nav-menu__btn').on('click', openModalApartamentsOnMobile);

  $('.js-open-appartaments-modal').on('click', function (e) {
    e.preventDefault();
    $('.appartament-menu').toggleClass('is-active');
    $('.appartament-popup').fadeIn();
  });

  $('.js-appartament-popup-close').on('click', function (e) {
    e.preventDefault();

    $('.appartament-popup').fadeOut();
  });


  $('.js-show-order-modal').on('click', function (e) {
    e.preventDefault();
    $('.order-modal').addClass('show');
  });

  $('.js-close-order-modal').on('click', function (e) {
    e.preventDefault();
    $('.order-modal').removeClass('show');
  });

  $('.js-open-zoom-map').on('click', function (e) {
    e.preventDefault();
    $('.js-zoom-map').fadeIn('fast');
  });

  $('.js-close-zoom-map').on('click', function (e) {
    e.preventDefault();
    $('.js-zoom-map').fadeOut('fast');
  });

  $('.page').on('click', function (e) {
    var target = e.target;
    if ($(target).hasClass('language') && !$(target).hasClass('is-active') || $(target).parents().hasClass('language') && !$(target).parents().hasClass('is-active')) {
      $('.language').addClass('is-active');
      $('.language__list').addClass('show');
    } else {
      $('.language').removeClass('is-active');
      $('.language__list').removeClass('show');
    }
  });

  // Position arrow
  $('.prew-appartaments-slider__control').mousemove(function (e) {
    var arrow = $(this).find('.prew-appartaments-slider__icon')[0];

    $(arrow).css({
      left: e.pageX - $(this).offset().left + 'px',
      top: e.pageY - $(this).offset().top + 'px'
    });
  });

  // Tabs
  $('[data-language]').on('click', function () {
    var lang = $(this).data('language');

    $('.is-active[data-language]').removeClass('is-active');
    $(this).addClass('is-active');

    $('[data-tab-body]').fadeOut('fast', function () {
      setTimeout(function () {
        $('.' + lang).fadeIn('fast');
      })
    });

  });

  var scrollPrev = 0 // Предыдущее значение скролла
  var header = $('.head-page')

  if ($(window).width() < 1001) {
    $(window).scroll(function () {

      var scrolled = $(window).scrollTop(); // Высота скролла в px
      var firstScrollUp = false; // Параметр начала сколла вверх
      var firstScrollDown = false; // Параметр начала сколла вниз

      // Если скроллим
      if (scrolled > 500) {

        // Если текущее значение скролла > предыдущего, т.е. скроллим вниз
        if (scrolled > scrollPrev) {
          firstScrollUp = false; // Обнуляем параметр начала скролла вверх
          // Если меню видно
          if (scrolled < header.height() + header.offset().top) {
            // Если только начали скроллить вниз
            if (firstScrollDown === false) {
              header.css({
                opacity: 0,
                pointerEvents: "none"
              });
              firstScrollDown = true;
            }
            // Если меню НЕ видно
          } else {
            header.css({
              opacity: 1,
              pointerEvents: "auto"
            });
          }

          // Если текущее значение скролла < предыдущего, т.е. скроллим вверх
        } else {
          firstScrollDown = false; // Обнуляем параметр начала скролла вниз
          // Если меню не видно
          if (scrolled > header.offset().top) {

            // Если только начали скроллить вверх
            if (firstScrollUp === false) {

              header.css({
                opacity: 0,
                pointerEvents: "none"
              });
              firstScrollUp = true;
            }
          } else {
            header.css({
              opacity: 1,
              pointerEvents: "auto"
            });
          }
        }
        // Присваеваем текущее значение скролла предыдущему
        scrollPrev = scrolled;

      } else {
        header.css({
          opacity: 1,
          pointerEvents: "auto"
        });
      }

    });
  }


  $.fn.hasAttr = function (name) {
    return this.attr(name) !== undefined;
  };

  // Go to 
  $('.js-go-to').on('click', function (e) {
    e.preventDefault();
    var hash = $(this).data('go');
    $('html, body').stop().animate({
      'scrollTop': $(hash).offset().top - 50
    }, 500, 'swing');
  });

  // Counter
  $('.js-counter').on('click', function (e) {
    e.preventDefault();

    var target = $(e.target);
    var counterValue = $(this).find('[data-value]');
    var carrentValue = parseInt(counterValue.stop().html());
    var input = $(this).find('.js-count-input');

    if (target.hasAttr('data-minus')) {
      var newValue = carrentValue - 1;
      counterValue.stop().html(newValue);
      input.val(newValue);
    }

    if (carrentValue <= 0) {
      var newValue = 0;
      counterValue.html(newValue);
      input.val(newValue);
    }

    if (target.hasAttr('data-plus')) {
      var newValue = carrentValue + 1;
      counterValue.stop().html(newValue);
      input.val(newValue);
    }

  });

  // Next/prev step
  $('.js-next-step').on('click', function (e) {
    e.preventDefault();

    $('.order-modal__step_first').fadeOut(function () {
      $('.order-modal__step_second').fadeIn();
    });
  });

  $('.js-prev-step').on('click', function (e) {
    e.preventDefault();

    $('.order-modal__step_second').fadeOut(function () {
      $('.order-modal__step_first').fadeIn();
    });
  });

  // calendar
  $('.datepicker-here').datepicker({
    language: 'en',
    onSelect: function (formattedDate, date) {
      var startDateWrapper = $('.js-date-start');
      var startDayWrapper = startDateWrapper.find('[data-day]')[0];
      var startOtherWrapper = startDateWrapper.find('[data-other]')[0];

      var endDateWrapper = $('.js-date-end');
      var endDayWrapper = endDateWrapper.find('[data-day]')[0];
      var endOtherWrapper = endDateWrapper.find('[data-other]')[0];

      var dates = String(formattedDate).split(',');
      var inputDate = $('.order-modal__date');

      if (dates.length === 1) {
        var startDate = dates[0].split('/');
        var startDay = startDate[0];
        var startMonth = startDate[1];
        var startYear = startDate[2];

        setStartDate(startDay, startMonth, startYear);
        setEndDate(0, 'Месяц', 'Год');

        $('[data-count-night]').html('0 ночей');
        $('[data-total-price]').html('0 ₽');
      }

      if (dates.length > 1) {
        var endDate = dates[1].split('/');
        var endDay = endDate[0];
        var endMonth = endDate[1];
        var endYear = endDate[2];

        setEndDate(endDay, endMonth, endYear);

        var totalNight = (date[1] - date[0]) / 864e5;
        var price = parseInt($('[data-price]').data('price'));
        var postfix = 'ночей';

        switch (totalNight) {
          case 1:
            postfix = 'ночь'
          case 2, 3, 4:
            postfix = 'ночи'
          default:
            postfix = 'ночей';
        }

        $('[data-count-night]').html(totalNight + ' ' + postfix);
        $('[data-total-price]').html(price * totalNight + ' ₽');
      }

      if (!dates[0].length) {
        setStartDate(0, 'Месяц', 'Год');
      }

      inputDate.val(formattedDate);

      function setStartDate(day, month, year) {
        $(startDayWrapper).html(day);
        $(startOtherWrapper).html(month + ', ' + year);
      }

      function setEndDate(day, month, year) {
        $(endDayWrapper).html(day);
        $(endOtherWrapper).html(month + ', ' + year);
      }
    }
  })

  var prewAppartamentsSlide = new Swiper('.prew-appartaments-slider', {
    slidesPerView: 1,
    speed: 700,
    // autoplay: {
    //   delay: 5000,
    // },
    // loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: '.prew-appartaments-slider__pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.prew-appartaments-slider__control_next',
      prevEl: '.prew-appartaments-slider__control_prev',
    },
  });

  var formValidator = function (form, eventType) {
    var $formSubmit = $(form);
    var $required = $formSubmit.find('[data-required]');

    switch (eventType) {
      case 'change':
        handleRequiredField();
        break;
      case 'submit':
        $required.each(function (index, item) {
          validateRequiredField.call(this);
        });
        break;
      default:
        break;
    }

    $('[data-phone]').bind("change keyup input click", function () {
      if (this.value.match(/[^0-9]/g)) {
        this.value = this.value.replace(/[^0-9]/g, '');
      }
    });

    function handleRequiredField() {
      $required.each(function (index, item) {
        var $input = $(item);

        $input.focus(function () {
          var $that = $(this);
          var $parent = $that.parents('.form__group');

          $parent.removeClass('_error');

        });

        $input.focusout(validateRequiredField);

      });
    }

    function validateRequiredField() {
      var $that = $(this);
      var $parent = $that.parents('.form__group');
      var $value = $that.val();
      var $valueLanght = $value.length;

      if ($valueLanght === 0) {
        $parent.addClass('_error');
      } else {
        $parent.removeClass('_error');
      }

    }

  }

  function resetForm(_form) {
    _form.find('[data-required]').each(function (index, item) {
      $(item).val('').parents('.form__group').removeClass('_error');
      $(item).focusout();
    });
  }

  function initForm() {
    $('.js-validate-form').each(function () {

      var $form = $(this);

      formValidator(this, 'change');

      $form.on('submit', function (e) {
        e.preventDefault();

        formValidator(this, 'submit');

        if ($form.find('._error').length > 0) {
          return false;
        }
        console.log($form.serialize(), '$form.serialize()');
        $.ajax({
          url: '/wp-admin/admin-ajax.php',
          data: {
            data: $form.serialize(),
            action: 'booking',
          },
          type: $form.attr('method') || 'POST',
          context: this,
          success: function (response) {
            // Сообщение об успешной отправке
            console.log('Успешная отправка');
            //window.location.href = './thanks.php';
          },
          error: function () {
            // Ошибка отправки
            console.log('Ошибка отправки формы');

          }
        });

      });

      // Отключаем автозаполнение полей в хроме
      $form.find('[type="text"], [type="email"], [type="tel"], [type="password"]').attr('autocomplete', 'new-password');
    });


    // Фикс autocomplete="off" для IE и Edge
    if (App.ie || App.edge) {
      window.onbeforeunload = function () {
        $('form[autocomplete="off"]').each(function () {
          this.reset();
        });
      };
    }

  }

  if ($('.js-validate-form').length) {
    initForm();
  }
});


// Map
$(function () {

  var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?apikey=dd600716-0205-4c6b-92b6-fff59b74a8ab&lang=ru_RU');

  $.when(mapScript)
    .done(function () {
      ymaps.ready(init);

      function init() {
        var center = [52.26668, 104.31239270000003];

        var myMap = new ymaps.Map("map", {
          center: center,
          zoom: 14,
          controls: []
        });

        myMap.behaviors.disable('scrollZoom');

        var myPlacemark = new ymaps.Placemark(center, {}, {
          iconLayout: 'default#image',
          iconImageHref: '/wp-content/themes/baikal-story/img/logo.svg',
          iconImageSize: [38, 37],
          iconImageOffset: [-3, -42]
        });

        myMap.geoObjects.add(myPlacemark);
      }
    })

});