$( function () {

  $('.btn-show-product').click( function () {

    var row  = $(this).parents('tr'),
        data = row.data('id').split(',');

        $('.tabla-show .code').text(data[0]);
        $('.tabla-show .name').text(data[1]);
        $('.tabla-show .type').text(data[2]);
        $('.tabla-show .st_max').text(data[3]);
        $('.tabla-show .st_min').text(data[4]);
        $('.tabla-show .value').text(data[5]);
        $('.tabla-show .quantity').text(data[6]);
        $('.tabla-show .category').text(data[7]);
        $('.tabla-show .date_time').text(data[8]);
  });

});
