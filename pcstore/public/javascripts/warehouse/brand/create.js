/**
 * Created by romelhc on 09/09/16.
 */
$("#create").click(function(){
    var dato = $("#brand").val();
    var route = "/admin/almacen/brand";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{description: dato},

        success: function () {
                Carga();
                $("#btn-create").modal('toggle');
                $("#msj-success").fadeIn();
        },
        error: function (msj) {
            $("#msj").html(msj.responseJSON.description);
            $("#msj-error").fadeIn();
        }
    });
});