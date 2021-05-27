$(function () {

  $('.submit').on('click', function (event) {
    
    var name = $('input[name="name"]').val();
    
    console.log(name)
    
    $.ajax({
      type: 'get',
      url: 'https://tayamasa-dev01.azurewebsites.net/api/HttpTrigger1?code=6rUErsdOV0cY1X4J5wq1R8G4dr1lARLNdq20b6QU7YHMXxb8dA0h1w==&name=' + name,
      success: function (data, status, xhr) {
        console.log(data);
        $('.result').text(data);
      },
      complete: function () {
      }
    });
  });
});
