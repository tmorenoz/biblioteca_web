@extends('frontend.layout.layout')

@section('title')
EsSalud Biblioteca
@endsection

@section('content')

<span id='pestana_vista' valor='inicio'></span>
<span id='pestana_responsive' valor='inicios'></span>

<section class="slider m-top">
  <a class="mouseBottom" id="scroll" href="#recurso">
    <img src="{{ url('/') }}/images/icono/arrow.png" class="img-fluid" alt="">
  </a>

  @foreach ($banners as $key => $value)
    @if ($loop->first)
      <div class="slider__buscador text-center">
        <div class="">
          <h1 class="titulo titulo--grande titulo--blanco">{{ $value->titulo }}</h1>
          <p class="slider__buscador__parrafo">
          {{ $value->subtitulo }}
          </p>
          <div class="slider__buscador__formulario">
            <form name="myform" class="" action="{{URL::to('buscador')}}" method="GET">
              <div class="slider__buscador__formulario__item">
                <input type="text" name="searchterm" class="" placeholder="Ingrese sus términos de búsqueda..." value="" required>
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
    @endif
  @endforeach

  <div class="owl-carousel owl__slider owl-loaded owl-drag"> 
    @foreach ($banners as $key => $value)
      @php
        $resultado = str_replace("\\", "/", $value->imagen);
      @endphp
      <div class="item">
        <div class="slider__content">
          <div class="single-slider zoom" style="background-image:url({{ url('storage/'.$resultado) }});"></div>
        </div>
      </div>
    @endforeach
  </div>
</section>

  <!-- STAR SECTION RECURSOS -->
  <section class="recursos" id="recurso">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-12 text-center">
          <h2 class="titulo titulo--azul titulo--mediano">Recursos</h2>
          <div class="parrafo mt-2 mb-6">
            <p>Nuestra biblioteca virtual pone a tu alcance un amplio catálogo de libros, revistas, material audiovisual con diversos temas.</p>
          </div>
        </div>
        @foreach ($recursos as $r)
          <div class="col-lg-4 col-md-4 col-12">
            @php
              // $resultado = strpos($r->enlace, 'http:');
              $resultado = strlen(strstr($r->enlace,'http:'));
              $resultado2 = str_replace("\\", "/", $r->imagen2);
            @endphp
            <a href="@if($resultado > 0) {{ $r->enlace }} @else {{ url('/') }}/{{ $r->enlace }} @endif" @if($resultado > 0) target="_blank" @endif>
              <figure class="d-none d-sm-block">
                <img src="{{ url('storage') }}/{{ $r->imagen2 }}" class="img-fluid" alt="">
              <div class="img-hover bg_clinicalKey d-flex justify-content-center align-items-center">
                <div class="">
                  {!! $r->descripcion !!}
                </div>
              </div>
              </figure>
              <div class="descrip d-none d-sm-block">
                  <h4 class="titulo--azul">{{ $r->titulo }}</h4>
              </div>
              <div class="recursos__card__responsive d-block d-sm-none">
                <div class="background" style="background-image:url( {{ url('storage/'.$resultado2) }} );">
                </div>
                <div class="card__responsive__content d-flex align-items-center justify-content-center">
                  <div class="">
                    <h3>{{ $r->titulo }}</h3>
                    <div class="card__responsive__content__parrafo">
                      {!! $r->descripcion !!}
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        @endforeach


      </div>
    </div>
  </section>
  <!-- END SECTION RECURSOS -->

  <!-- STAR SECTION PARALLAX -->
  <section class="parallaxHome">
  </section>
  <!-- END SECTION PARALLAX -->

  <!-- STAR SECTION NOVEDADES -->
  <section class="novedades">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-5 col-12">
          <h2 class="titulo titulo--mediano titulo--azul" data-aos="fade-right">Novedades</h2>
        </div>
        <div class="col-lg-6 col-md-7 col-12">
          <div class="novedades__boton d-none d-sm-block" data-aos="fade-left">
            <a href="{{ url('/') }}/novedades" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              Ver todas las novedades
            </a>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-novedades owl-theme">

            <div class="item">
              <a href="{{ url('biblioteca-en-un-minuto') }}" class="novedades__card">
                <div class="novedades__card__content">
                  <h3>Biblioteca en un minuto</h3>
                  <span>Ver listado</span>
                </div>
                <div class="novedades__card__img">
                    <img src="{{ url('storage/4.png') }}" class="img-fluid" alt="">
                </div>
              </a>
            </div>
            <div class="item">
              <a href="{{ url('boletines') }}" class="novedades__card">
                <div class="novedades__card__content">
                  <h3>Boletines</h3>
                  <span>Ver listado</span>
                </div>
                <div class="novedades__card__img">
                    <img src="{{ url('storage/2.jpg') }}" class="img-fluid" alt="">
                </div>
              </a>
            </div>
            @foreach($news as $key => $n)
              <?php
                  $slug = str_slug($n->nombre, '-');
               ?>
              <div class="item">
                <a href="{{ url('novedades') }}/{{ $n->id }}/{{ $slug }}" class="novedades__card">
                  <div class="novedades__card__content">
                    <h3>{{ substr( $n->nombre, 0, 51)  }}</h3>
                    @if($n->tipo == 'otro')
                      <span>Ver listado</span>
                    @else
                      <span>Leer más</span>
                    @endif

                  </div>
                  <div class="novedades__card__img">
                      <img src="{{ url('storage') }}/{{ $n->imagen }}" class="img-fluid" alt="">
                  </div>
                </a>
              </div>
            @endforeach
        </div>
        </div>
        <div class="col-md-12 col-12 text-center">
          <div class="novedades__boton novedades__boton--margin d-block d-sm-none">
            <a href="{{ url('/') }}/novedades" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              Ver todas las novedades
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION NOVEDADES -->

  <!-- Modal -->
  @if($popup)
    <div class="modal popupInicio modalPolitica fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <button type="button" class="close cerrar" data-dismiss="modal" aria-label="Close">
              <img src="{{ url('/') }}/images/icono/close.png" class="img-fluid" alt="">
            </button>
            <div class="popupInicio__img">
              <img class="img-fluid"  src="{{url('storage')}}/{{ $popup->backround }}">
            </div>
            <div class="popupInicio__texto">
              <div class="popupInicio__texto__img">
                  <img class="img-fluid" src="{{url('storage/'.$popup->popup1)}}">
              </div>
              <div class="popupInicio__texto__img">
                <p>{{ $popup->popup2 }}</p>
              </div>
            </div>
            <div class="popupInicio__bottom">
              <a href="{{ $popup->link }}" target="_blank" ><img class="img-fluid" src="{{url('/images/icono/mano.png')}}">Ingresar aquí</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection
