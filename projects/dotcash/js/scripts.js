$(document).ready(function(){

	$('select').wSelect();

        $('#demo').change(function() {
          console.log($(this).val());
        });

        $('#demo').val('AU').change(); // should see in console
        $('#demo').val('PL').wSelect('change'); // should see the selected option change to three
        $('#demo').val('CA').change();
        // Testing append from one select to another.
        $('#demo option:last').appendTo('#demo-multi');
        $('#demo, #demo-multi').wSelect('reset');
		
	var accordion = $(".accordion");
    if(accordion.length){
      accordion.each(function(){
        var all_panels = $(this).find('.ac_inner').hide();
        var all_titles = $(this).find('.ac_title');
        $(this).find('.ac_inner.active').slideDown();

        all_titles.on("click", function() {
          var acc_title = $(this);
          var acc_inner =  acc_title.next();

          if(!acc_inner.hasClass('active')){
             all_panels.removeClass('active').slideUp();
             acc_inner.addClass('active').slideDown();
             all_titles.removeClass('active');
             acc_title.addClass('active');
          } else {
            all_panels.removeClass('active').slideUp();
            all_titles.removeClass('active');
          }
        });
      });
    }
	
	new WOW().init();
		
});


$(function(){
	$('input[placeholder], textarea[placeholder]').placeholder();
});