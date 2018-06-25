$(document).ready(function () {
    $('[order-call]').on('click', function (e) {
        if ($('.modal-window').css('display') === 'none') {
            $('.modal-window').css('display', 'block');
            $('body').css('overflow-y', 'hidden');
        }
        // e.preventDefault();
    })

    function removeMWindow() {
        $('#modal-window').css('display', 'none');
        $('body').css('overflow-y', 'auto');
    }


    function handleClicks() {
        window.onmousedown = function (ev) {
            if (ev.target.classList.contains('modal-window')) {
                removeMWindow();
            }
            if (ev.target.classList.contains('close-btn')) {
                removeMWindow();
            }
        }
    }

    window.onkeydown = function (ev) {
        if (ev.keyCode === 27) {
            removeMWindow();
        }

        if (isNaN(parseInt($('.input.-tel').val()))) {
            $('.btn.-order.-modal').attr('disabled', true);
        } else {
            $('.btn.-order.-modal').removeAttr('disabled');
        }
    }

    handleClicks();


    $('input[name="file"]').change(function () {
        var fileName = $(this).val();
        if (!fileName) {
            $('.mock-btn').val('Прикрепить документ');
        } else {
            $('.mock-btn').val(fileName);
        }
    });
});


window.onload = function () {
    var wrapper = document.querySelector('body'),
        layerOne = document.querySelectorAll('.decoration'),
        layerTwo = document.querySelector('.-lines');

    wrapper.addEventListener('mousemove', function (e) {
        var pageX = e.clientX,
            pageY = e.clientY;
        for(let i =0 ; i < layerOne.length; i++) {
            layerOne[i].style.webkitTransform = 'translateX(' + pageX / 100 + '%) translateY(' + pageY / 100 + '%)';
            layerOne[i].style.transform = 'translateX(' + pageX / 100 + '%) translateY(' + pageY / 100 + '%)';
        }
       wrapper.style = 'background-position:' + pageX / 200 + 'px center';
    });
}