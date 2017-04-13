$( function () {

  $('.btn-show').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.tabla-show').find('.id').text(data[0]);
        $('.tabla-show').find('.name').text(data[1]);
        $('.tabla-show').find('.last_name').text(data[2]);
        $('.tabla-show').find('.address').text(data[3]);
        $('.tabla-show').find('.phone').text(data[4]);
        $('.tabla-show').find('.email').text(data[5]);
        $('.tabla-show').find('.date').text(data[6]);
  });

});
