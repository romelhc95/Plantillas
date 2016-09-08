/*EnnmaScript 5*/
/*
$("#departamento").change(function(event){
    $.get("provinces/"+event.target.value+"",function(response,departamento){
        //console.log(response);
        $("#provincia").empty();
        for(i=0; i<response.length; i++){
            $('#provincia').append("<option value='"+response[i].department_id+"'> "+response[i].description+"</option>");
        }
    });
});*/

/*EnnmaScript Actual

$("#department_id").change(event => {
    $.get(`provinces/${event.target.value}`,function(response, department_id){
        $("#province_id").empty();
        response.forEach(element => {
           $("#province_id") .append(`<option value=${element.department_id}> ${element.description} </option>`);
        });
    });
});

$("#province_id").change(event => {
    $.get(`districts/${event.target.value}`,function(response, province_id){
        $("#district_id").empty();
        response.forEach(element => {
           $("#district_id") .append(`<option value=${element.province_id}> ${element.description} </option>`);
        });
    });
});
