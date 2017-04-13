$( function () {

  $('.btn-show-provider').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.tabla-show').find('.nit').text(data[0]);
        $('.tabla-show').find('.business_name').text(data[1]);
        $('.tabla-show').find('.address').text(data[2]);
        $('.tabla-show').find('.phone').text(data[3]);
        $('.tabla-show').find('.email').text(data[4]);
        $('.tabla-show').find('.date').text(data[5]);
  });

});
