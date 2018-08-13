$('.navbar-toggle').click(function(e) {
  e.preventDefault()
  var menu = $('#nav')
  if(menu.is(":hidden")){
    menu.slideDown(250)
  }
  else{
    menu.slideUp(250)
  }
});