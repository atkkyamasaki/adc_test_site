$(function () {

  $('.data-del').on('click', function (event) {
    
    var id = $(this).parent().parent().find(".data-id").text();
    
    console.log(id)
    
    
    $.ajax({
      type: 'post',
      url: '/db',
      data: {
        'id': id,
        '_method': 'DELETE',
      },
      success: function (data, status, xhr) {
        console.log(data);
      },
      complete: function () {
      }
    });
  });

});
