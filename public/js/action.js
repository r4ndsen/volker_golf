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
      btn.text(data.message);

      if (data.disabled === true) {
        btn.prop('disabled', true);
      };

      if (data.success === true) {
        btn.removeClass('btn-warning').addClass('btn-success');
      } else {
        btn.addClass('btn-warning');
      }
    },
    dataType: 'json'
  });
});
