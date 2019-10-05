$(document).ready(function(){

    $("#myform").validate({
        rules: {
            searchterm: {
                required: true,
                minlength: 4
            },
        },
        messages: {
            searchterm: {
                required: "Por favor debe de ingresar sus términos de búsqueda",
                minlength: jQuery.validator.format("¡Se requieren al menos {0} caracteres!")
            }
        }
    });

    $("#btnSearch").click(function(event){

          var searchterm = $('#searchterm').val();
          //alert(searchterm);
          if(searchterm===''){
              $("#mensaje").text('Por favor debe de ingresar sus términos de búsqueda');
              return false;
              
          }else  if(searchterm.length<4){
              $("#mensaje").text('¡Se requieren al menos 4 caracteres!');
              return false;
          }

    });

    $("#searchterm").keyup(function(event){

        var searchterm = $('#searchterm').val();
        if(searchterm!=''){
            $("#mensaje").text('');
        }

    });

    $("#btnBuscar").click(function (){
        //alert("Presionaste un <a>");
        //$('#pais-ciudad').show();
        var searchterm=$('#searchterm').val();
        //alert(searchterm);
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: "POST",
          url: "buscador/paises",
          //data:{searchterm:searchterm},
          dataType: "json",
          success:function(response){
              //console.log(response);
              if(response!=''){
                $('#pais-ciudad').show();
              }else{
                alert('no hay registros');
              }
            
            }
          });
        
      });

});
