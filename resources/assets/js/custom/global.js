$(document).ready(function() {

  $('.redes a:last-child').click(function(){
    $('.redes a').not(':last-child').toggleClass('hidden show') ;
    // alert("gola");
  });

  $('.owl-novedades').owlCarousel({
      loop:false,
      margin:30,
      nav:false,
      dots:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          800:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });

  $('.owl__slider').owlCarousel({
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:7000,
    // smartSpeed:450,
    responsive:{
        0:{
            items:1,
            dots:false
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
            dots:true
        }
    }
  });


  $('.owl__banner').owlCarousel({
    // animateOut: 'fadeOut',
    // animateIn: 'fadeIn',
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:7000,
    // smartSpeed:450,
    responsive:{
        0:{
            items:1,
            dots:false
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
            dots:true
        }
    }
  });

  $("#scroll").click(function(){
    var x=  $('#recurso').offset().top + -56;
    $('html, body').animate({
      scrollTop: x
    }, 1500);
  });

  $("#exampleModal").modal("show");

  //
  // var $nav= $(".buscador__filtro");
  // var $navTop= $nav.offset().top + -190;
  //
  // var pegarFiltro= function(){
  //   var $scrollTop= $(window).scrollTop();
  //   if($scrollTop >= $navTop){
  //     $nav.addClass("stiky");
  //   }
  //   else{
  //     $nav.removeClass("stiky");
  //   }
  // }

  // $(window).on("scroll",pegarFiltro);

  // var $boton= $(".buscador__boton");
  // var $top= $boton.offset().top;
  //
  // var pegarBoton= function(){
  //   var $scroll= $(window).scrollTop();
  //   if($scroll >= $top){
  //     $boton.addClass("stiky-boton");
  //   }
  //   else{
  //     $boton.removeClass("stiky-boton");
  //   }
  // }
  //
  // $(window).on("scroll",pegarBoton);

  if( $('#select-anio-biblioteca').length )
  {
    $('#select-anio-biblioteca').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        if(a == 0 || a == 'hide')
          $styledSelect.text($this.children('option').eq(0).text());
        else
          $styledSelect.text(a);


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

            var anio1 = $this.val();
            if(mes != 0)
              var mes1 = mes;
            else
              var mes1 =  $('#select-mes-biblioteca').val();

            location.href = site_url+"biblioteca-en-un-minuto-f/"+anio1+'/'+mes1;

        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
  }
  if( $('#select-mes-biblioteca').length )
  {
    $('#select-mes-biblioteca').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        if(m == 0 || m == 'hide')
          $styledSelect.text($this.children('option').eq(0).text());
        else
          $styledSelect.text(m);


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

            var mes1 = $this.val();
            if(a != 0)
              var anio1  = a;
            else
              var anio1  =  $('#select-anio-biblioteca').val();

            location.href = site_url+"biblioteca-en-un-minuto-f/"+anio1+'/'+mes1;


        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
  }
  if( $('#select-anio-boletin').length )
  {
    $('#select-anio-boletin').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        if(a == 0 || a == 'hide')
          $styledSelect.text($this.children('option').eq(0).text());
        else
          $styledSelect.text(a);

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

            var anio1 = $this.val();
            if(mes != 0)
              var mes1 = mes;
            else
              var mes1 =  $('#select-mes-boletin').val();

            // console.log(anio, mes)
            location.href = site_url+"boletines-f/"+anio1+'/'+mes1;


        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
  }
  if( $('#select-mes-boletin').length )
  {
    $('#select-mes-boletin').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden');
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        if(m == 0 || m == 'hide')
          $styledSelect.text($this.children('option').eq(0).text());
        else
          $styledSelect.text(m);

          console.log(m)

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


            var mes1 = $this.val();
            if(a != 0)
              var anio1  = a;
            else
              var anio1  =  $('#select-anio-boletin').val();

            location.href = site_url+"boletines-f/"+anio1+'/'+mes1;

        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
  }




  //Active Menu
  var  pestana = $('#pestana_vista').attr('valor');
  $('#'+pestana).addClass('activo');
  //Active Menu
  var  pestana = $('#pestana_responsive').attr('valor');
  $('#'+pestana).addClass('activo');

});

//menu responsive

$(document).ready(menu);
  function menu() {
  $('#menu-icon-shape').on('click', function() {
    $('#menu-icon-shape').toggleClass('active');
    $('#top, #middle, #bottom').toggleClass('active');
    $('#overlay-nav').toggleClass('active');
  });
}
