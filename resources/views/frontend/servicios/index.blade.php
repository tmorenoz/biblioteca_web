@extends('frontend.layout.layout')
@section('title')
Servicios | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='servicios'></span>
<span id='pestana_responsive' valor='servicioss'></span>

<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Servicios</h2>
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

<section class="nosotros">
  <div class="container">
    <div class="row">
      @foreach ($servicios as $key => $value)
        @php
          $resultado = str_replace("\\", "/", $value->imagen);
        @endphp
        <div class="col-md-4 col-12">
          <figure class="d-none d-sm-block">
            <img src="{{ url('storage') }}/{{ $value->imagen }}" class="img-fluid" alt="">
            <h3 class="d-flex align-items-center justify-content-center">
              <div class="">
                {{ $value->titulo }}
              </div>
            </h3>
            <div class="img-hover bg_clinicalKey d-flex justify-content-center align-items-center">
              <div class="">
                {!! $value->descripcion !!}
              </div>
            </div>
          </figure>
          <div class="card__responsive d-block d-sm-none">
            <div class="background" style="background-image:url( {{ url('storage/'.$resultado) }} );">
            </div>
            <div class="card__responsive__content d-flex align-items-center justify-content-center">
              <div class="">
                <h3>
                    {{ $value->titulo }}
                </h3>
                <div class="card__responsive__content__parrafo">
                  {!! $value->descripcion !!}
                </div>

              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
