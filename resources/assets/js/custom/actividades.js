
$("#year_accionar").change(function() {

var data = $("#form_filtro_eventos").serialize();
    $.ajax({
        type: "GET",
        url: "cargar-eventos",
        data: data,
        dataType: "json",
        success: function(data) {
          $("#pintar-dias-en-calendario").html(data);
        },
        error: function() {
            alert('error handling here');
        }
    });
});
