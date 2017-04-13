$( function () {

  $('.btn-edit-provider').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.form-edit #nit').val(data[0]);
        $('.form-edit #business_name').val(data[1]);
        $('.form-edit #address').val(data[2]);
        $('.form-edit #phone').val(data[3]);
        $('.form-edit #email').val(data[4]);
  });

});
