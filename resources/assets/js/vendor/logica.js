$(function () {

  var route = 'cargar-fechas';
  $.ajax({
      url: route,
      data: {},
      type : 'GET',
      dataType: 'json',
      success : function(response){
        // console.log(response)
        var d;
        var a;
        var date2;
        var dia = [];
        var meses2 = [];
        var anios = [];
        $.each(response.actividades, function(i, item) {
            d = item.fecha;
            a = d.split("-");
            var date2 = new Date(a[0], (a[1] - 1), a[2]) ;
            dia[i] = date2.getDate();
            meses2[i] = date2.getMonth()
            anios[i] = date2.getFullYear()
        });

        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'octubre', 'Noviembre', 'Diciembre'];

        var fecha2 = new Date();
        var dia_act = fecha2.getDate();
        var anio_act = fecha2.getFullYear();
        var mes_act = fecha2.getMonth();

        var anio_act2 = fecha2.getFullYear();
        var mes_act2 = fecha2.getMonth();

        $("#actividad_mes").empty();
        $('#actividad_mes').val(mes_act);

        var dias2 = $('#dias');
        var mes2 = $('#mes');
        var anio2 = $('#anio');
        var mess2 = $('#mes2');

        var atras2 = $('#atras');
        var siguiente2 = $('#siguiente');


        mess2.text(meses[mes_act]);
        mes2.text(meses[mes_act]);
        anio2.text(anio_act.toString());

        atras2.click(function(){
             // console.log($('#año').val());
             return mes_atras2();
        });

        siguiente2.click(function () {
          // console.log($('#año').val());
            return mes_siguiente2();
        });

        mes_dias2(mes_act);

        function mes_dias2(month) {

          $.ajax({
              type: "GET",
              url: "cargar-actividades",
              data: {mes:month, anio:$('#año').val()},
              dataType: "json",
              success: function(data) {

                $("#pintarActividades").html(data);
              },
              error: function() {
                  alert('error handling here');
              }
          });

            var html = '';
            var plomo = [''];

            for (var i = hoy2(); i > 0; i--) {
                html += ' <div class="calendar__date calendar__item calendar__last-days"></div>';
            }


            for (var _i = 1; _i <= total_dias2(month); _i++) {

                for(var _j=0; _j < meses2.length; _j++){

                  if(_i == dia[_j] && month == meses2[_j] && anio_act == anios[_j]){


                    if(dia[_j] < dia_act && meses2[_j] <= mes_act2 && anios[_j] <= anio_act2){

                       plomo[_i] = 'pasado';
                    }
                    else {
                       plomo[_i] = 'futuro';
                    }

                  }
                }

                 if(plomo[_i] === undefined){
                   plomo[_i] = '';
                 }

                if (_i == dia_act && mes_act2 == month &&  anio_act == anio_act2 )
                    html += ' <div class="calendar__date dia" select="ok" mes="'+(month+1)+'" dia="'+_i+'" anio="'+anio_act+'" onclick="select_f(this)"><div class="pintado">' + _i + '</div></div>';
                else
                    html += ' <div class="calendar__date dia  '+plomo[_i]+'" mes="'+(month+1)+'" dia="'+_i+'" anio="'+anio_act+'" onclick="select_f(this)">' + _i + '</div>';

            }

            dias2.html(html);

        }

        function total_dias2(month) {
            if (month === -1) month = 11;

            if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                return 31;
            } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                return 30;
            } else {

                return valida_anio2() ? 29 : 28;
            }
        }

        function valida_anio2() {
            return anio_act % 100 !== 0 && anio_act % 4 === 0 || anio_act % 400 === 0;
        }

        function hoy2() {
            var hoy__ = new Date(anio_act, mes_act, 1);
            return hoy__.getDay() - 1 === -1 ? 6 : hoy__.getDay() - 1;
        }

        function mes_atras2() {
          // event.stopPropagation();
          anio_act = $('#año').val();
            if (mes_act !== 0) {
                mes_act--;
            } else {
                mes_act = 11;
                anio_act--;
            }

            nueva_fecha2();

        }

        function mes_siguiente2() {
            anio_act = $('#año').val();
            if (mes_act !== 11) {
                mes_act++;
            } else {
                mes_act = 0;
                anio_act++;
            }

            nueva_fecha2();
        }

        function nueva_fecha2() {
            fecha2.setFullYear(anio_act, mes_act, dia_act);
            mes2.text(meses[mes_act]);
            mess2.text(meses[mes_act]);
            anio2.text(anio_act.toString());
            dias2.text('');

            mes_dias2(mes_act);
           $('#actividad_mes').val(mes_act);
        }


      }
  });

});

$('#idioma').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        // console.log($this.val());

        var anio_a = $this.val();
        anio_a = parseInt(anio_a);

        var mes = $('#actividad_mes').val();

        $("#año").empty();
        $('#año').val(anio_a);


        $.ajax({
            type: "GET",
            url: "cargar-actividades",
            data: {mes:mes, anio:anio_a},
            dataType: "json",
            success: function(data) {

              $("#pintarActividades").html(data);
            },
            error: function() {
                alert('error handling here');
            }
        });

        calendario(mes, anio_a);


    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
$('.selector').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        // console.log($this.val());

        var anio_a = $this.val();
        anio_a = parseInt(anio_a);

        var mes = $('#actividad_mes').val();

        $("#año").empty();
        $('#año').val(anio_a);


        $.ajax({
            type: "GET",
            url: "cargar-actividades",
            data: {mes:mes, anio:anio_a},
            dataType: "json",
            success: function(data) {

              $("#pintarActividades").html(data);
            },
            error: function() {
                alert('error handling here');
            }
        });

        calendario(mes, anio_a);


    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

function calendario(m, anio_a){


  var route = 'cargar-fechas';
  $.ajax({
      url: route,
      data: {},
      type : 'GET',
      dataType: 'json',
      success : function(response){
        // console.log(response)
        var d;
        var a;
        var date2;
        var dia = [];
        var meses2 = [];
        var anios = [];
        $.each(response.actividades, function(i, item) {

            d = item.fecha;
            a = d.split("-");
            var date2 = new Date(a[0], (a[1] - 1), a[2]) ;
            dia[i] = date2.getDate();
            meses2[i] = date2.getMonth()
            anios[i] = date2.getFullYear()
        });
        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'octubre', 'Noviembre', 'Diciembre'];

        var fecha = new Date();
        var dia_actual = fecha.getDate();
        var mes_actual = m;
        var anio_actual = anio_a;

        var anio_actual2 = fecha.getFullYear();
        var mes_actual2 = fecha.getMonth();

        var dias = $('#dias');
        var mes = $('#mes');
        var anio = $('#anio');
        var mess = $('#mes2');

        // var atras = $('#atras');
        // var siguiente = $('#siguiente');

        mess.text(meses[mes_actual]);
        mes.text(meses[mes_actual]);
        anio.text(anio_actual.toString());

        // atras.click(function(){
        //      return mes_atras();
        // });
        //
        // siguiente.click(function () {
        //     return mes_siguiente();
        // });

        mes_dias(mes_actual);

        function mes_dias(month) {

            var html = '';
            var plomo = [''];

            for (var i = hoy(); i > 0; i--) {
                html += ' <div class="calendar__date calendar__item calendar__last-days"></div>';
            }


            for (var _i = 1; _i <= total_dias(month); _i++) {

                for(var _j=0; _j < meses2.length; _j++){

                  if(_i == dia[_j] && month == meses2[_j] && anio_actual == anios[_j]){


                    if(dia[_j] < dia_actual && meses2[_j] <= mes_actual2 && anios[_j] <= anio_actual2){

                       plomo[_i] = 'pasado';
                    }
                    else {
                       plomo[_i] = 'futuro';
                    }

                  }
                }

                 if(plomo[_i] === undefined){
                   plomo[_i] = '';
                 }

                if (_i == dia_actual && mes_actual2 == month &&  anio_actual == anio_actual2 )
                    html += ' <div class="calendar__date dia" select="ok" mes="'+(month+1)+'" dia="'+_i+'" anio="'+anio_actual+'" onclick="select_f(this)"><div class="pintado">' + _i + '</div></div>';
                else
                    html += ' <div class="calendar__date dia  '+plomo[_i]+'" mes="'+(month+1)+'" dia="'+_i+'" anio="'+anio_actual+'" onclick="select_f(this)">' + _i + '</div>';

            }

            dias.html(html);

        }

        function total_dias(month) {
            if (month === -1) month = 11;

            if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
                return 31;
            } else if (month == 3 || month == 5 || month == 8 || month == 10) {
                return 30;
            } else {

                return valida_anio() ? 29 : 28;
            }
        }

        function valida_anio() {
            return anio_actual % 100 !== 0 && anio_actual % 4 === 0 || anio_actual % 400 === 0;
        }

        function hoy() {
            var hoy__ = new Date(anio_actual, mes_actual, 1);
            return hoy__.getDay() - 1 === -1 ? 6 : hoy__.getDay() - 1;
        }

        // function mes_atras() {
        //   // event.stopPropagation();
        //
        //     if (mes_actual !== 0) {
        //         mes_actual--;
        //     } else {
        //         mes_actual = 11;
        //         anio_actual--;
        //     }
        //
        //     nueva_fecha();
        //
        // }
        //
        // function mes_siguiente() {
        //   // event.stopPropagation();
        //     if (mes_actual !== 11) {
        //         mes_actual++;
        //     } else {
        //         mes_actual = 0;
        //         anio_actual++;
        //     }
        //
        //     nueva_fecha();
        // }
        //
        // function nueva_fecha() {
        //     fecha.setFullYear(anio_actual, mes_actual, dia_actual);
        //     mes.text(meses[mes_actual]);
        //     mess.text(meses[mes_actual]);
        //     anio.text(anio_actual.toString());
        //     dias.text('');
        //
        //     // console.log(mes_actual, anio_actual, anio_a)
        //
        //     mes_dias(mes_actual);
        //
        // }

      }
  });


}
