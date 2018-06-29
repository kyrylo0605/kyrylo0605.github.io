jQuery(document).ready(function(){
  $('#price-form button').on('click',function(event){

      event.preventDefault();

      var phone = $('#price-form input[name="phone"]').val();
      var link = $('#price-form input[name="link"]').val();

      if( phone.length < 10 ){
          $('#price-form input[name="phone"]').parent().addClass('error');
          return false;
      }

      if( link.length < 4 ){
        $('#price-form input[name="link"]').parent().addClass('error');
        return false;
      }

      $.ajax({
        type: 'POST',
        url: 'price-request.php',
          data: 'link=' + link + '&phone=' + phone,
          success: function () {
            $('#success-sent').click();
            setTimeout(function(){
                $('#successModal .close').click();
            }, 4000)
          }
      });
  });
  $('#consultation-form button').on('click',function(event){

      event.preventDefault();

      var name = $('#consultation-form input[name="name"]').val();
      var phone = $('#consultation-form input[name="phone"]').val();
      var question = $('#consultation-form input[name="question"]').val();

      if( name.length < 4 ){
          $('#consultation-form input[name="name"]').parent().addClass('error');
          return false;
      }

      if( phone.length < 10 ){
          $('#consultation-form input[name="phone"]').parent().addClass('error');
          return false;
      }

      /*if( question.length < 4 ){
        $('#consultation-form input[name="question"]').parent().addClass('error');
        return false;
      }*/

      $.ajax({
        type: 'POST',
        url: 'consultation-request.php',
          data: 'name=' + name + '&phone=' + phone + '&question=' + question,
          success: function () {
            $('#success-sent').click();
            setTimeout(function(){
                $('#successModal .close').click();
            }, 4000)
          }
      });
  });

  $('#ad-form button').on('click',function(event){

      event.preventDefault();

      var name = $('#ad-form input[name="name"]').val();
      var phone = $('#ad-form input[name="phone"]').val();
      var question = $('#ad-form input[name="question"]').val();

      if( name.length < 4 ){
          $('#ad-form input[name="name"]').parent().addClass('error');
          return false;
      }

      if( phone.length < 10 ){
          $('#ad-form input[name="phone"]').parent().addClass('error');
          return false;
      }

      /*if( question.length < 4 ){
        $('#ad-form input[name="question"]').parent().addClass('error');
        return false;
      }*/

      $.ajax({
        type: 'POST',
        url: 'ad-request.php',
          data: 'name=' + name + '&phone=' + phone + '&question=' + question,
          success: function () {
            $('#success-sent').click();
            setTimeout(function(){
                $('#successModal .close').click();
            }, 4000)
          }
      });
  });

  $('#email-form button').on('click',function(event){

      event.preventDefault();

      var name = $('#email-form input[name="name"]').val();
      var phone = $('#email-form input[name="phone"]').val();
      var question = $('#email-form textarea[name="question"]').val();

      if( name.length < 4 ){
          $('#email-form input[name="name"]').parent().addClass('error');
          return false;
      }

      if( phone.length < 10 ){
          $('#email-form input[name="phone"]').parent().addClass('error');
          return false;
      }

      /*if( question.length < 4 ){
        $('#email-form textarea[name="question"]').parent().addClass('error');
        return false;
      }*/

      $.ajax({
        type: 'POST',
        url: 'email-request.php',
          data: 'name=' + name + '&phone=' + phone + '&question=' + question,
          success: function () {
            $('#emailModal .close').click();
            $('#success-sent').click();
            setTimeout(function(){
                $('#successModal .close').click();
            }, 4000)            
          }
      });
  });

  $('#call-form button').on('click',function(event){

      event.preventDefault();

      var name = $('#call-form input[name="name"]').val();
      var phone = $('#call-form input[name="phone"]').val();

      if( name.length < 4 ){
          $('#call-form input[name="name"]').parent().addClass('error');
          return false;
      }

      if( phone.length < 10 ){
          $('#call-form input[name="phone"]').parent().addClass('error');
          return false;
      }


      $.ajax({
        type: 'POST',
        url: 'call-request.php',
          data: 'name=' + name + '&phone=' + phone,
          success: function () {
            $('#callModal .close').click();
            $('#success-sent').click();            
            setTimeout(function(){
                $('#successModal .close').click();
            }, 4000)
          }
      });
  });

});
