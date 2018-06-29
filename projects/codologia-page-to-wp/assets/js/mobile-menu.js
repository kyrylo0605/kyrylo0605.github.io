$(function () {
    toggleMenu();
    window.onresize = function (ev) {
        if($('.nav-panel.-mobile.-header').hasClass('toggle-menu')) {
            $('.nav-panel.-mobile.-header').removeClass('toggle-menu');
        }
        toggleMenu();
    }
})

function toggleMenu() {

    if (window.innerWidth <= 1012) {


        $('.toggle-btn').css('display', 'block');
        // $('.nav-panel.-mobile.-header').addClass('toggle-menu');
        // $('.toggle-btn').on('click', function () {
        //     addToggle();
        // })

    } else {

        $('.toggle-btn').css('display', 'none');
        $('.nav-panel.-mobile.-header').removeClass('toggle-menu');

    }

}

function addToggle() {
    $('.nav-panel.-mobile.-header').toggleClass('toggle-menu');
}



