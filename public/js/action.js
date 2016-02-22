$(document).on('click', '.js_submitRequest', function(e) {
  e.preventDefault();

  btn = $('.js_submitRequest');

  $.ajax({
    type: "POST",
    url: 'check.php',
    data: {
      code: $('.js_inputCode').val()
    },
    success: function(data) {
      btn.html(data.message);

      if (data.disabled === true) {
        btn.prop('disabled', true);
      };

      if (data.success === true) {
        btn.removeClass('btn-warning btn-default').addClass('btn-success');
        $('.js_response').html(data.longtext);
      } else {
        btn.addClass('btn-warning');
      }
    },
    dataType: 'json'
  });
});
