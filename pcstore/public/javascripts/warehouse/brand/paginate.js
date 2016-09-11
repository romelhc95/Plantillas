/**
 * Created by romelhc on 11/09/16.
 */
$(document).on('click', '.pagination a', function (e) {
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    route = "http://pcstore.app/admin/almacen/brand";

    $.ajax({
        url: route,
        data: {page: page},
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            $(".brand").html(data);
        }
    });
});