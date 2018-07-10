/* Popovers in Head */
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

/* Main menu mobile close */
$(document).ready(function(){
    $('button.close-menu').on('click', function(){
    $('.navbar-toggle').click() 
	});
});


/* Catalog left menu mobile close */
$(document).ready(function(){
    $('button.close-search').on('click', function(){
    $('.catalog-list-filter').click() 
	});
});
