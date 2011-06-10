/* BEGIN header interactions */

$(function () {
    $('.icon').hover(function () {
        $(this).stop(true, true).children('.inset').fadeIn('100');
    }, function () {
        $(this).stop(true, true).children('.inset').fadeOut('100');
    });
});

/* END header interactions */