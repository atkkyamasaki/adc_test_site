$(function () {

  $('#api_button_click').on('click', function (event) {
    $.ajax({
      type: 'get',
      url: '/api/get',
      success: function (data, status, xhr) {
        console.log(data);
      },
      complete: function () {
      }
    });
  });

  $('#api_button_mouseover').on('mouseover', function (event) {
    $.ajax({
      type: 'get',
      url: '/api/get',
      success: function (data, status, xhr) {
        console.log(data);
      },
      complete: function () {
      }
    });
  });
  
});