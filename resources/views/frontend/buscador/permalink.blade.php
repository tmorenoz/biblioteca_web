@extends('frontend.layout.layout')
@section('title')
Buscador | EsSalud Biblioteca
@endsection
@section('content')
<style>
  @media screen {
    #printSection {
        display: none;
    }
  }

  @media print {
    body * {
      visibility:hidden;
      overflow: hidden!important;
    }
    .noprint{
      display:none;
      visibility:hidden;
    }
    #printSection, #printSection * {
      visibility:visible;
    }
    #printSection {
      position:absolute;
      left:0;
      top:0;
    }
}
</style>

<!-- <input type="hidden" id="idrecurso" value="{{$idrecurso}}"> -->
<section class="buscador__titulo m-top">
  <div class="container">
    <!-- Campo búsqueda -->
    <div class="row">
      <div class="col-lg-4 col-md-4 buscador__titulo__nombre">
        <h2>Resultados de la búsqueda</h2>
      </div>
      <div class="col-lg-8 col-md-8">
        <div class="slider__buscador__formulario">
          <form class="" action="{{URL::to('buscador')}}" method="GET">
            <input type="hidden" id="reposelected" value="Todos">
            <div class="slider__buscador__formulario__item">
              <input type="text" name="searchterm" class="" placeholder="Ingrese sus términos de búsqueda..." value="">
            </div>
            <div class="slider__buscador__formulario__item">
              <div class="seleccionado">
                <div class="seleccionar">
                  <span>Buscar en</span>
                  <select id="idioma" name="repo">
                    <option value="Todos" rel="icon-temperature">Todos</option>
                    @foreach($repos as $repo)
                      <option value="{{$repo->nombre}}">{{$repo->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="slider__buscador__formulario__item">
              <button type="submit"><i class="fas fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="buscador">
      <div class="container">
        <div class="row">
          <div class="col-md-10 m-auto">
            <div class="modal-body">
              <div class="modalDetalle__card p-4">
                <div class="content">
                  <div class="modalDetalle__card__img">
                    <img src="{{ url('/') }}/images/icono/libro.png" class="img-fluid" alt="">
                  </div>
                  <input type="hidden" id="rec-id">
                  <div class="modalDetalle__card__contenido">
                    <div class="">
                      <span id="rec-type"></span>
                      <p id="rec-title">Title</p>
                      <h3>Por: <span id="rec-creator"></span></h3>
                      <h3>Ubicación: <span id="rec-sys_repository"></span></h3>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Botones -->
              <div class="modalDetalle__card noprint">
                <div class="content">
                  <div class="content__ancho">
                    <div class="modalDetalle__card__top p-4">
                      <h4>Enviar a</h4>
                    </div>
                    <div class="modalDetalle__card__bottom p-4">
                      <div class="">
                        <a href="" class="btn__link" id="btn-email">
                          <svg>
                            <rect></rect>
                          </svg>
                          <i class="far fa-envelope"></i> Correo electrónico
                        </a>
                        <a href="" class="btn__link" id="Print">
                          <svg>
                            <rect></rect>
                          </svg>
                          <i class="fas fa-print"></i> Imprimir
                        </a>
                        <div class="modalDetalle__card__bottom__input" id="email-to">
                          <input type="email" id="emailto" name="emailto" placeholder="Para:">
                          <a href="" class="" id="btn-send">
                            <i class="far fa-paper-plane"></i> Enviar
                          </a>
                          <div id="error" class="mt-2"></div>
                        </div>
                        <div class="modalDetalle__card__bottom__input" id="permalink">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modalDetalle__card">
                <div class="modalDetalle__card__top p-4">
                  <h4>Detalles</h4>
                </div>
                <!-- OCULTAR RESPONSIVE -->
                <div class="modalDetalle__card__bottom hidden-xs p-4">
                  <table>
                    <tr>
                      <td><h3>Título</h3></td>
                      <td><p id="rec-title"></p></td>
                    </tr>
                    <tr>
                      <td><h3>Temas</h3></td>
                      <td>
                        <ul>
                          <li id="rec-subject">Subject</li>
                        </ul>
                      </td>
                    </tr>
                    <tr id="cont-relation">
                      <td><h3>Títulos relacionados</h3></td>
                      <td><p id="rec-relation">Relation</p></td>
                    </tr>
                    <tr id="cont-publisher">
                      <td><h3>Lugar y editorial</h3></td>
                      <td><p id="rec-publisher">Publisher</p></td>
                    </tr>
                    <tr id="cont-date">
                      <td><h3>Fecha de publicación</h3></td>
                      <td><p id="rec-date">Date</p></td>
                    </tr>
                    <tr id="cont-languaje">
                      <td><h3>Idioma</h3></td>
                      <td><p id="rec-languaje">Languaje</p></td>
                    </tr>
                    <tr id="cont-identifier">
                      <td><h3>ISBN</h3></td>
                      <td><p id="rec-identifier">Identifier</p></td>
                    </tr>
                    <tr id="cont-cat_source">
                      <td><h3>Ubicación</h3></td>
                      <td><p id="rec-sys_repository">Contributor</p></td>
                    </tr>
                    <tr id="cont-note">
                      <td><h3>Nota General</h3></td>
                      <td><p id="rec-note"></p></td>
                    </tr>
                    <tr id="cont-dcn_dewey">
                      <td><h3>Número de Clasificación</h3></td>
                      <td><p id="rec-dcn_dewey"></p></td>
                    </tr>
                    <tr id="cont-edition">
                      <td><h3>Edición</h3></td>
                      <td><p id="rec-edition"></p></td>
                    </tr>
                    <tr id="cont-series">
                      <td><h3>Serie</h3></td>
                      <td><p id="rec-series"></p></td>
                    </tr>
                  </table>
                </div>
                <!-- OCULTAR DESKTOP -->
                <div class="modalDetalle__card__bottom hidden-desktop p-4">
                  <div class="">
                    <h3>Título</h3>
                    <p id="rec-title"></p>
                  </div>
                  <div class="">
                    <h3>Temas</h3>
                    <ul>
                      <li id="rec-subject">Subject</li>
                    </ul>
                  </div>
                  <div class="">
                    <h3>Títulos relacionados</h3>
                    <p id="rec-relation">Relation</p>
                  </div>
                  <div class="">
                    <h3>Lugar y editorial</h3>
                    <p id="rec-publisher">Publisher</p>
                  </div>
                  <div class="">
                    <h3>Fecha de publicación</h3>
                    <p id="rec-date">Date</p>
                  </div>
                  <div class="">
                    <h3>Idioma</h3>
                    <p id="rec-languaje">Languaje</p>
                  </div>
                  <div class="">
                    <h3>ISBN</h3>
                    <p id="rec-identifier">Identifier</p>
                  </div>
                  <div class="">
                    <h3>Ubicación</h3>
                    <p id="rec-sys_repository">Contributor</p>
                  </div>
                  <div class="">
                    <h3>Nota General</h3>
                    <p id="rec-note"></p>
                  </div>
                  <div class="">
                    <h3>Número de Clasificación</h3>
                    <p id="rec-dcn_dewey"></p>
                  </div>
                  <div class="">
                    <h3>Edición</h3>
                    <p id="rec-edition"></p>
                  </div>
                  <div class="">
                    <h3>Serie</h3>
                    <p id="rec-series"></p>
                  </div>
                </div>
              </div>
              <div class="modalDetalle__card noprint">
                <div class="content" id="btn-url_recurso">
                  <div class="content__ancho">
                    <div class="modalDetalle__card__top p-4">
                      <h4>Enlaces</h4>
                    </div>
                    <div class="modalDetalle__card__bottom p-4">
                      <div class="">
                        <a href="" class="btn__link">
                          <svg>
                            <rect></rect>
                          </svg>
                          Ver artículo en biblioteca
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<input type="hidden" id="tok" value="{{csrf_token()}}">

@endsection

@section('scripts')
<script>

  $(function() {
    var reposelected = $("#reposelected").val();
    var csrf = $('#tok').val();
    var id_recurso = 0;
    var cur_url = window.location.hostname+'/recurso/';
    data = <?php echo $recurso ?>

    $('.btn-limpiar').hide();
    $('#email-to').hide();
    $('.select-styled').html(reposelected);
    $('#error').hide();
    $('#permalink').hide();

    function checkFilters(){
      fi=0;
      $('.filter').each(function(i, value){
        nodo = this;
        if ($(nodo).prop('checked')){
          fi++;
        }
      });

      if (fi==0){
        $('.btn-limpiar').hide();
      }else{
        $('.btn-limpiar').show();
      }
    }

    // Email Button
    $(document).on('click', '#btn-email', function(){
      event.preventDefault();
      if($('#email-to').is(':hidden')){
        $('#email-to').show(350);
      }else{
        $('#email-to').hide(350);
      }
      $('#error').html('');
    });

    // Email Button
    $(document).on('click', '#btn-send', function(){
      event.preventDefault();
      email = $('#emailto').val();
      $.post('buscador/send', {'idrecurso': id_recurso, 'emailto': email,'_token': csrf})
      .done(function(data){
          $('#error').addClass('alert alert-success');
          $('#error').html('Email enviado');
          $('#error').show(400);
          setTimeout(function(){
            $('#error').hide(350);
          }, 2000);
      })
      .fail(function(e){
        console.log(e);
        $('#error').addClass('alert alert-danger');
        $('#error').html(e.responseJSON.emailto);
        $('#error').show(400);
        setTimeout(function(){
            $('#error').hide(350);
          }, 2000);
      });
    });

    // Show Detail
    $.each(data, function (i, val) {
      if (val == '' || val == null) {
        $('[id^="cont-' + i + '"]').hide();
        if (i == 'url_recurso') {
          $('#btn-url_recurso').hide();
        }
      } else {
        $('[id^="cont-' + i + '"]').show();
        if (i == 'url_recurso') {
          $('#rec-urlrecurso').attr('href', val);
          $('#btn-url_recurso').show();
        }

        if (i == 'identifier') {
          if(validURL(val)){
            $('[id^="cont-identifier"]').hide();
          };
        }
      }
      $('[id^="rec-' + i + '"]').text(val);
      if (i == 'icon') {
        $('#rec-icon').attr('src', '{{ url('/') }}/images/icono/' + val);
      }
    });

    $('#cont-note').hide(); // Eliminar

    $('#detalleModal').on('hidden.bs.modal', function (e) {
      id_recurso = 0;
    });

  });

  document.getElementById("Print").onclick = function () {
      printElement(document.getElementById("printThis"));
  };

  function printElement(elem) {
    event.preventDefault();
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");
    if (!$printSection) {
      var $printSection = document.createElement("div");
      $printSection.id = "printSection";
      document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
  }

  function validURL(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
      '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
      '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
      '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
      '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
      '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return !!pattern.test(str);
  }

</script>
@endsection
