
function scrolltable()
{
    var tableheight = $('.bordered').innerHeight();
    $('html, body').animate({scrollTop: tableheight}, 'slow');
}