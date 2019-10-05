@extends('frontend.layout.layout')
@section('title')
Novedades | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='novedades'></span>
<span id='pestana_responsive' valor='novedade'></span>


<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Novedades</h2>
  </div>
  <div class="owl-carousel owl__banner">
    @foreach ($banners as $key => $value)
      @php
        $resultado = str_replace("\\", "/", $value->imagen);
      @endphp
      <div class="item">
        <div class="banners__content">
          <div class="single-slider zoom" style="background-image:url({{ url('storage/'.$resultado) }});">
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

  <section class="novedades">
    <div class="container">
      <div class="row">
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

            @foreach ($news as $key => $n)
              <?php
                  $slug = str_slug($n->nombre, '-');
               ?>
              <div class="item">
                <a href="{{ url('novedades') }}/{{ $n->id }}/{{ $slug }}" class="novedades__card">
                  <div class="novedades__card__content">
                    <h3>{{ substr( $n->nombre, 0, 51) }}</h3>
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

      </div>
    </div>
  </section>


@endsection
