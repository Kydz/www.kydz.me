$(document).ready(function () {
    $.each($('.article-body').children('p'), function (k, v) {
        if ($(v).children('img').size() > 0) {
            $(v).css('padding', '0px');
        }
    });
});