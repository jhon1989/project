$( function () {

  $('.btn-eliminar').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.form-edit #identification').val(data[0]);
        $('.form-edit #name').val(data[1]);
        $('.form-edit #last_name').val(data[2]);
        $('.form-edit #address').val(data[3]);
        $('.form-edit #phone').val(data[4]);
        $('.form-edit #email').val(data[5]);
  });

});
