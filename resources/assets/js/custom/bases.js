$('body').on('click','.cargar_bases', function(e){
  event.preventDefault();

  var $num = $('#contador').val();
  $num = parseInt($num);
  $num = $num + 2;

  var route = site_url+'cargar-mas-bases';
    $.ajax({
      url: route,
      data : {num:$num},
      type : 'GET',
      dataType: 'json',
      success : function(data){
        $("#cargar_mas_bases").html(data);
      }
    });
});
