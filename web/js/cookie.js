$(function () {
    var cookie_name = $('.cookie_name').text();
    var cookie_value = $('.cookie_value').text();
    console.log(cookie_name);
    $.cookie(cookie_name, cookie_value, { expires: 7 });
});