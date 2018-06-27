  //			jQuery(function($){    
  //				$('.js-btn').click(function(){
  //					$('#popup_call').show();
  //					return false;
  //				});
  //				$('body').on('click','.popup_head_call i, .overlay', function(){
  //					$('#popup_call').hide();
  //				 });
  //				 $('.js-btn').click(function(){
  //					 $('body').append('<div class="overlay"></div>');
  //				 });
  //				 $('body').on('click','.popup_head i, .popup_head_call i, .overlay', function(){
  //					$('.overlay').remove();
  //				});
  //			});
  //			jQuery(document).ready(function() {
  //				jQuery('.d-carousel .carousel').jcarousel({
  //					scroll: 1
  //				});
  //			});


  $(document).ready(function () {
      function runCounter(el, min, max, time) {
          var i = min;
          var wait = 21,
              range = max - min,
              step = range * wait / time;
          var ivl = setInterval(function () {
              i += step;
              el.text(Math.round(i));
              if (i >= max) {
                  el.text(max);
                  clearInterval(ivl);
              }
          }, wait);
      }

      runCounter($("#dov_klient"), 0, 2500, 3000);
      runCounter($("#zam_koles"), 0, 3200, 3000);
      runCounter($("#raz_blyud"), 0, 40, 3000);
      runCounter($("#chashek_kofe"), 0, 20000, 3000);



      $('a[href*=#]').on("click", function (e) {
          var anchor = $(this);
          $('html, body').animate({
              scrollTop: $(anchor.attr('href')).offset().top
          }, 1000);
          e.preventDefault();
      });

      $(".wrapper .tab").click(function () {
          $(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
          $(".tab_item").hide().eq($(this).index()).fadeIn()
      }).eq(0).addClass("active");

      $('.box_2[data-type="background"], .box_5[data-type="background"]').each(function () {
          var $bgobj = $(this); // создаем объект
          $(window).scroll(function () {
              var yPos = -($(window).scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент 
              // Присваиваем значение background-position
              var coords = 'center ' + yPos + 'px';
              // Создаем эффект Parallax Scrolling
              $bgobj.css({
                  backgroundPosition: coords
              });
          });
      });
      $("#form").submit(function () { //устанавливаем событие отправки для формы с id=form
          var form_data = $(this).serialize(); //собераем все данные из формы
          $.ajax({
              type: "POST", //Метод отправки
              url: "post.php", //путь до php фаила отправителя
              data: form_data,
              success: function () {
                  //код в этом блоке выполняется при успешной отправке сообщения
                  alert("Ваше сообщение отпрвлено!");
                  $('#form').trigger('reset');

              }
          });
          return false;
      });
  });

  //				jQuery( document ).ready(function() {
  //			jQuery('#scrollup img').mouseover( function(){
  //				jQuery( this ).animate({opacity: 0.65},100);
  //			}).mouseout( function(){
  //				jQuery( this ).animate({opacity: 1},100);
  //			});
  //
  //			jQuery(window).scroll(function(){
  //				if ( jQuery(document).scrollTop() > 0 ) {
  //					jQuery('#scrollup').fadeIn('fast');
  //				} else {
  //					jQuery('#scrollup').fadeOut('fast');
  //				}
  //			});
  //		});