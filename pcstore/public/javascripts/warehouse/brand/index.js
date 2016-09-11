/**
 * Created by romelhc on 09/09/16.
 */

$(document).ready(function () {
    Carga();
});

function Carga() {
    var tablaDatos = $("#datos");
    var route = "/admin/almacen/brands";

    $("#datos").empty();
    $.get(route, function(res){
        $(res).each(function (key, value) {
            tablaDatos.append("" +
                "<tr>" +
                "<td>"+value.id+"</td>" +
                "<td>"+value.description+"</td>" +
                "<td>"+value.updated_at+"</td>" +
                "<td class='actions'>" +
                "<div class='action-buttons'>" +
                "<button data-toggle='modal' href='#btn-edit' OnClick='Mostrar(this);' value="+value.id+" ><i class='icon-pencil'></i></button>" +
                "<button data-toggle='modal' href='#' OnClick='Eliminar(this);' value="+value.id+" ><i class='icon-trash'></i></button>" +
                "</div>" +
                "</td>" +
                "</tr>");
        });
    });
}

/**
*TODO LO QUE CONSISTE A ELIMINAR
*/

function Eliminar(btn) {
    var route = "/admin/almacen/brand/"+btn.value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function () {
            Carga();
            $("#msj-danger").fadeIn();
        }
    });
}

/**
 *TODO LO QUE CONSISTE A EDITAR
 */
function Mostrar(btn) {
    var route = "/admin/almacen/brand/"+btn.value+"/edit";

    $.get(route, function(res){
        $("#description").val(res.description);
        $("#id").val(res.id);
    });
}

$("#update").click(function () {
    var value = $("#id").val();
    var dato = $("#description").val();
    var route = "/admin/almacen/brand/"+value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {description: dato},
        success: function () {
            Carga();
            $("#btn-edit").modal('toggle');
            $("#msj-update").fadeIn();
        }
    });
});