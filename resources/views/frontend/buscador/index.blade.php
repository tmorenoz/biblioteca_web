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
      visibility: hidden;
      overflow: hidden !important;
    }

    .noprint {
      display: none;
      /* visibility:hidden; */
    }

    #printSection,
    #printSection * {
      visibility: visible;
    }

    #printSection {
      position: absolute;
      left: 0;
      top: 0;
    }
  }
  .error { color: #dc2d1a; }
</style>

<span id='pestana_vista' valor='normativas'></span>
<span id='pestana_responsive' valor='normativa'></span>
<section class="buscador__titulo m-top">
  <div class="container">
    <!-- Campo búsqueda -->
    <div class="row">
      <div class="col-lg-4 col-md-4 buscador__titulo__nombre">
        <h2>Resultados de la búsqueda</h2>
      </div>
      <div class="col-lg-8 col-md-8">
        <div class="slider__buscador__formulario">
          <form class="" name="myform" id="myform" action="{{URL::to('buscador')}}" method="GET">
            <input type="hidden" id="reposelected" value="{{$_GET['repo']}}">
            <div class="slider__buscador__formulario__item">
              <input type="text" name="searchterm" class="" placeholder="Ingrese sus términos de búsqueda..."
                value="{{$_GET['searchterm']}}">
            </div>
            <div class="slider__buscador__formulario__item">
              <div class="seleccionado">
                <div class="seleccionar">
                  <span>Buscar en</span>
                  <select id="idioma" name="repo">
                    <option value="Todos" rel="icon-temperature">Todos</option>
                    @foreach($repos as $repo)
                    <option value="{{$repo->nombre}}" <?php if ($repo->nombre  == $_GET['repo']): ?> selected="selected"
                      <?php endif; ?>>{{$repo->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="slider__buscador__formulario__item">
              <button type="submit" id="btnBuscar"><i class="fas fa-search"></i></button>
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
      <!-- Filtro -->
      <input type="hidden" id="filt" value="{{ $filt }}">
      <div class="col-lg-3">
        <div class="buscador__filtro hidden-filtro">
          <h3 class="buscador__filtro__titulo">Filtros</h3>
          <div id="accordion" class="scrollFiltro">
            <div class="buscador__filtro__card box">
              <div class="card-header buscador__filtro__card__header" id="headingOne">
                <h5 class="mb-0">
                  <a href="#" class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Autor
                  </a>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_autores as $autor => $valor)
                  @if($autor!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="autores" valor="{{ $autor }}">
                      <span class="label-text">{{ $autor }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingTwo">
                <h5 class="mb-0">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    Editorial
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_editoriales as $editorial => $valor)
                  @if($editorial!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="editoriales" valor="{{ $editorial }}">
                      <span class="label-text">{{ $editorial }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingTwo">
                <h5 class="mb-0">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree" id="pais-ciudad">
                    País/Ciudad
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_paises as $pais => $valor)
                    @if($pais!='')
                    <div class="labels">
                      <label>
                        <input class="filter" type="checkbox" name="radio" fname="paises" valor="{{ $pais }}">
                        <span class="label-text">{{ $pais }}</span>
                      </label>
                      <small>({{ count($valor) }})</small>
                    </div>
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingThree">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                    aria-controls="collapseFour">
                    Tipo de material
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_tipos as $tipo => $valor)
                  @if($tipo!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="tipos" valor="{{ $tipo }}">
                      <span class="label-text">{{ $tipo }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingFour">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    Temas
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_temas as $tema => $valor)
                  @if($tema!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="temas" valor="{{ $tema }}">
                      <span class="label-text">{{ $tema }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingFive">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                    aria-controls="collapseSix">
                    Año
                  </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_anios as $anio => $valor)
                  @if($anio!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="anios" valor="{{ $anio }}">
                      <span class="label-text">{{ $anio }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- Botón Filtrar -->
          <div>
            <form id="form_filtros" method="GET" action="{{URL::to('buscador')}}">
              <div class="col s8 m8 inputs">
                <input type="hidden" name="repo" value="{{$_GET['repo']}}">
                <input type="hidden" name="searchterm" value="{{ $term }}">
                <input type="hidden" id="filters" name="filters">
              </div>
              <div class="col">
                <a class="btn-limpiar">Limpiar</a>
                <a class="btn-filtrar">Filtrar</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Resultados -->
      <div class="col-lg-9">
        <div class="buscador__content">
          <ul class="buscador__content__resultado">
            <li>Página: <span>{{$nro_pagina}}</span></li>
            <li>{{ ($cant_result>1) ? 'Resultados: ' : 'Reslutado: ' }} <span>{{ $cant_result }}</span></li>
          </ul>
          @foreach ($results as $result)
          <div class="buscador__content__item">
            <div class="buscador__content__item__contenido">
              <div class="buscador__content__item__contenido__col">
                <img src="{{ url('/') }}/images/icono/{{$result->icon}}" class="img-fluid" alt="">
              </div>
              <div class="buscador__content__item__contenido__col">
                <div class="">
                  <span>{{ $result->type }}</span>
                  <p>{{ $result->title }}</p>
                  <h4>Por: <strong>{{ $result->creator }}</strong> </h4>
                  <h4>Ubicación: <strong>{{ $result->sys_repository }}</strong> </h4>
                  <a href="#" class="link" id="open-modal" data-idrecurso="{{$result->id}}"><i class="fas fa-eye"></i>
                    Ver detalle</a>
                  @if(!is_null($result->url_recurso))
                  <a href="{{ $result->url_recurso }}" class="link" target="_blank"><i class="fas fa-link"></i> Ver en línea</a>
                  @endif
                  <div class="modalDetalle__card__bottom__input mt-3" id="email-to-{{$result->id}}">
                    <input type="email" id="emailto-{{$result->id}}" name="emailto-ad" placeholder="Para:">
                    <a href="" class="" id="btn-send-{{$result->id}}" recid="{{$result->id}}">
                      <i class="far fa-paper-plane"></i> Enviar
                    </a>
                    <div id="error-{{$result->id}}" class="mt-2"></div>
                  </div>
                  <div class="mt-3" id="permalink-{{$result->id}}"></div>
                </div>
              </div>
              <div class="buscador__content__item__contenido__col">
                <div class="">
                  <ul>
                    <li><a href="#"><i class="fas fa-paperclip" id="btn-permalink-{{$result->id}}"
                          recid="{{$result->id}}"></i></a></li>
                    <li><a href="#"><i class="far fa-envelope" id="btn-email-{{$result->id}}"
                          recid="{{$result->id}}"></i></a></li>
                    <li><a href="#"><i class="fas fa-print" id="Print-{{$result->id}}" recid="{{$result->id}}"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="modalDetalle__card__bottom__input" id="email-to-{{$result->id}}">
              <input type="email" id="emailto-{{$result->id}}" name="emailto-ad" placeholder="Para:">
              <a href="" class="" id="btn-send-{{$result->id}}" recid="{{$result->id}}">
                <i class="far fa-paper-plane"></i> Enviar
              </a>
              <span id="error-{{$result->id}}"></span>
            </div>
            <div class="modalDetalle__card__bottom__input" id="permalink-{{$result->id}}"></div>
          </div>
          @endforeach
        </div>
        <div class="buscador__paginacion">
          {{ $results->links() }}
        </div>
      </div>
      <a href="#" data-toggle="modal" data-target="#filtroModal" class="buscador__boton">Ver filtro</a>
    </div>
  </div>
</section>

<div class="modal fade modalPolitica" id="filtroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
          <img src="{{ url('/') }}/images/icono/close.png" class="img-fluid" alt="">
        </button>
        <div class="buscador__filtro">
          <h3 class="buscador__filtro__titulo">Filtros</h3>
          <div id="accordion" class="scrollFiltro">
            <div class="buscador__filtro__card box">
              <div class="card-header buscador__filtro__card__header" id="headingOne">
                <h5 class="mb-0">
                  <a href="#" class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Autor
                  </a>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_autores as $autor => $valor)
                  @if($autor!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="autores" valor="{{ $autor }}">
                      <span class="label-text">{{ $autor }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingTwo">
                <h5 class="mb-0">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo" id="paises" >
                    Editorial
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_editoriales as $editorial => $valor)
                  @if($editorial!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="editoriales" valor="{{ $editorial }}">
                      <span class="label-text">{{ $editorial }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingTwo">
                <h5 class="mb-0">
                  <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    País
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_paises as $pais => $valor)
                  @if($pais!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="editoriales" valor="{{ $editorial }}">
                      <span class="label-text">{{ $pais }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingThree">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                    aria-controls="collapseFour">
                    Tipo de material
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_tipos as $tipo => $valor)
                  @if($tipo!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="tipos" valor="{{ $tipo }}">
                      <span class="label-text">{{ $tipo }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingFour">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    Temas
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_temas as $tema => $valor)
                  @if($tema!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="temas" valor="{{ $tema }}">
                      <span class="label-text">{{ $tema }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
            <div class="buscador__filtro__card">
              <div class="card-header buscador__filtro__card__header" id="headingFive">
                <h5 class="mb-0">
                  <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                    aria-controls="collapseSix">
                    Año
                  </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body buscador__filtro__card__body">
                  @foreach ($f_anios as $anio => $valor)
                  @if($anio!='')
                  <div class="labels">
                    <label>
                      <input class="filter" type="checkbox" name="radio" fname="anios" valor="{{ $anio }}">
                      <span class="label-text">{{ $anio }}</span>
                    </label>
                    <small>({{ count($valor) }})</small>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <!-- Botón Filtrar -->
          <div>
            <form id="form_filtros" method="GET" action="{{URL::to('buscador')}}">
              <div class="col s8 m8 inputs">
                <input type="hidden" name="repo" value="{{$_GET['repo']}}">
                <input type="hidden" name="searchterm" value="{{ $term }}">
                <input type="hidden" id="filters" name="filters">
              </div>
              <div class="col">
                <a class="btn-limpiar">Limpiar</a>
                <a class="btn-filtrar">Filtrar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<input type="hidden" id="tok" value="{{csrf_token()}}">

@endsection

@section('scripts')
<script>
  $(function () {
    var f = $("#filt").val();
    var filtros = {};
    var reposelected = $("#reposelected").val();
    var csrf = $('#tok').val();
    var id_recurso = 0;
    var cur_url = window.location.protocol+'//'+window.location.hostname;

    $('.btn-limpiar').hide();
    $('.select-styled').html(reposelected);
    $('#email-to').hide();
    $('#error').hide();
    $('#permalink').hide();
    $('[id^="error-"]').hide();
    $('[id^="permalink-"]').hide();
    $('[id^="email-to-"]').hide();
    $('#pais-ciudad').hide();

    if (f != '') {
      filtros = JSON.parse(f);
      remarcar(filtros);
      checkFilters();
    }

    function checkFilters() {
      fi = 0;
      $('.filter').each(function (i, value) {
        nodo = this;
        if ($(nodo).prop('checked')) {
          fi++;
        }
      });

      if (fi == 0) {
        $('.btn-limpiar').hide();
      } else {
        $('.btn-limpiar').show();
      }
    }

    function remarcar($_filtro) {
      $.each($_filtro, function (i, val) {
        $.each(this, function (i, val) {
          text01 = val;
          $('.filter').each(function (i, value) {
            nodo = this;
            text02 = $(nodo).next().text();
            if (text01 == text02) {
              $(nodo).attr('checked', 'checked')
            }
          });
        });
      });
    }

    function addToFilter($_array, $_item) {
      var arr = filtros[$_array];
      if (!arr) {
        arr = [];
      }
      arr.push($_item);
      filtros[$_array] = arr;
      $('.btn-limpiar').show();
    }

    function delFromFilter($_array, $_item) {
      var arr = filtros[$_array];
      if (arr) {
        newarr = arr.filter(function (ele) {
          return ele != $_item;
        });
        filtros[$_array] = newarr;
      }
      checkFilters();
    }

    // Autor
    $('.filter').click(function () {
      arr = $(this).attr("fname");
      text = $(this).attr('valor');
      if (!$(this).prop('checked')) {
        delFromFilter(arr, text);
      } else {
        addToFilter(arr, text);
      }
    });

    // Filter Button
    $('.btn-filtrar').click(function () {
      $(filters).val(JSON.stringify(filtros));
      $("#form_filtros").submit();
    });

    // Filter Button
    $('.btn-limpiar').click(function () {
      $(filters).val('');
      filtros = {};
      $("#form_filtros").submit();
    });

    // Email Button ad
    $(document).on('click', '[id^="btn-email-"]', function () {
      event.preventDefault();
      id_recurso = $(this).attr('recid');
      if ($('#email-to-' + id_recurso).is(':hidden')) {
        $('#email-to-' + id_recurso).show(350);
      } else {
        $('#email-to-' + id_recurso).hide(350);
      }
      $('#error-' + id_recurso).html('');
    });

    // Email Button
    $(document).on('click', '#btn-email', function () {
      event.preventDefault();
      if ($('#email-to').is(':hidden')) {
        $('#email-to').show(350);
      } else {
        $('#email-to').hide(350);
      }
      $('#error').html('');
    });

    // Permalink Button ad
    $(document).on('click', '[id^="btn-permalink-"]', function () {
      event.preventDefault();
      id_recurso = $(this).attr('recid');
      if ($('#permalink-' + id_recurso).is(':hidden')) {
        // $('#permalink-' + id_recurso).html('<a href="'+cur_url+'/recurso/' + id_recurso + '" class="permalink truncate">Enlace: '+cur_url+'/recurso/' + id_recurso + '</a>');
        $('#permalink-' + id_recurso).html('<a href="https://t2.webtilia.com/clientes/in/essalud2/public/recurso/' + id_recurso + '" class="permalink truncate">Enlace: https://t2.webtilia.com/clientes/in/essalud2/public/recurso/' + id_recurso + '</a>');
        $('#permalink-' + id_recurso).show(350);
      } else {
        $('#permalink-' + id_recurso).hide(350);
        $('#permalink-' + id_recurso).html('');
      }
    });

    // Permalink Button
    $(document).on('click', '#btn-permalink', function () {
      event.preventDefault();
      if ($('#permalink').is(':hidden')) {
        // $('#permalink').html('<a href="'+cur_url+'/recurso/' + id_recurso + '" class="permalink truncate">Enlace: '+cur_url+'/recurso/' + id_recurso + '</a>');
        $('#permalink').html('<a href="https://t2.webtilia.com/clientes/in/essalud2/public/recurso/' + id_recurso + '" class="permalink truncate">Enlace: https://t2.webtilia.com/clientes/in/essalud2/public/recurso/' + id_recurso + '</a>');
        $('#permalink').show(350);
      } else {
        $('#permalink').hide(350);
        $('#permalink').html('');
      }
    });

    // Print Button ad
    $(document).on('click', '[id^="Print-"]', function () {
      event.preventDefault();
      id_recurso = $(this).attr('recid');
      $.post('buscador/recurso', {
          'idrecurso': id_recurso,
          '_token': csrf
        })
        .done(function (data) {
          var elem = document.getElementById("printThis");
          var domClone = elem.cloneNode(true);
          var $printSection = document.getElementById("printSection");
          if (!$printSection) {
            var $printSection = document.createElement("div");
            $printSection.id = "printSection";
            document.body.appendChild($printSection);
          }

          $printSection.innerHTML = "";
          $printSection.appendChild(domClone);
          $.each(data, function (i, val) {
            if (val == '' || val == null) {
              $('[id^="cont-' + i + '"]').hide();
            } else {
              $('[id^="cont-' + i + '"]').show();
            }
            $('[id^="rec-' + i + '"]').text(val);
          });
          $('#cont-note').hide(); // Eliminar
          window.print();
        });
    });

    // Email Button
    $(document).on('click', '#btn-send', function () {
      event.preventDefault();
      email = $('#emailto').val();
      $.post('buscador/send', {
          'idrecurso': id_recurso,
          'emailto': email,
          '_token': csrf
        })
        .done(function (data) {
          $('#error').addClass('alert alert-success');
          $('#error').html('Email enviado');
          $('#error').show(400);
          setTimeout(function () {
            $('#error').hide(350);
          }, 3000);
        })
        .fail(function (e) {
          $('#error').addClass('alert alert-danger');
          $('#error').html(e.responseJSON.emailto);
          $('#error').show(400);
          setTimeout(function () {
            $('#error').hide(350);
          }, 3000);
        });
    });

    // Email Button ad
    $(document).on('click', '[id^="btn-send-"]', function () {
      event.preventDefault();
      id_recurso = $(this).attr('recid');
      email = $('#emailto-' + id_recurso).val();
      $.post('buscador/send', {
          'idrecurso': id_recurso,
          'emailto': email,
          '_token': csrf
        })
        .done(function (data) {
          $('#error-' + id_recurso).removeClass('alert alert-danger');
          $('#error-' + id_recurso).removeClass('alert alert-success');
          $('#error-' + id_recurso).addClass('alert alert-success');
          $('#error-' + id_recurso).html('Email enviado');
          $('#error-' + id_recurso).show(400);
          setTimeout(function () {
            $('#error-' + id_recurso).hide(350);
          }, 3000);
        })
        .fail(function (e) {
          $('#error-' + id_recurso).removeClass('alert alert-danger');
          $('#error-' + id_recurso).removeClass('alert alert-success');
          $('#error-' + id_recurso).addClass('alert alert-danger');
          $('#error-' + id_recurso).html(e.responseJSON.emailto);
          $('#error-' + id_recurso).show(400);
          setTimeout(function () {
            $('#error-' + id_recurso).hide(350);
          }, 3000);
        });
    });

    // Show Detail
    $(document).on('click', '#open-modal', function (event) {
      event.preventDefault();
      id_recurso = $(this).attr('data-idrecurso');
      $.post('buscador/recurso', {
          'idrecurso': id_recurso,
          '_token': csrf
        })
        .done(function (data) {
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
          $("#cont-note").hide(); // Eliminar
          $("#detalleModal").modal('show');
        });
    });

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

                //Aqui asignamos el click al elemento <a>


     


</script>

@endsection
