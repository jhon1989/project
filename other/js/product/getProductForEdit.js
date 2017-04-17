$( function () {

  $('.btn-edit-product').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.form-edit #code').val(data[0]);
        $('.form-edit #name').val(data[1]);
        $('.form-edit #type').val(data[2]);
        $('.form-edit #st_max').val(data[3]);
        $('.form-edit #st_min').val(data[4]);
        $('.form-edit #value').val(data[5]);
        $('.form-edit #quantity').val(data[6]);
        $('.form-edit #category').val(data[7]);
  });

});
