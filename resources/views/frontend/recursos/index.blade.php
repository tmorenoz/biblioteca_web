@extends('frontend.layout.layout')
@section('title')
Recursos | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='recursos'></span>
<span id='pestana_responsive' valor='recursoss'></span>

<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Recursos</h2>
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

      @foreach ($recursos as $key => $r)
        @php
          $resultado = strlen(strstr($r->enlace,'http:'));
          $resultado2 = str_replace("\\", "/", $r->imagen);
        @endphp
        <div class="col-md-4 col-12">
          <a href="@if($resultado > 0) {{ $r->enlace }} @else {{ url('/') }}/{{ $r->enlace }} @endif" @if($resultado > 0) target="_blank" @endif>
            <figure class="d-none d-sm-block">
              <img src="{{ url('storage') }}/{{ $r->imagen }}" class="img-fluid" alt="">
              <h3 class="d-flex align-items-center justify-content-center">
                <div class="">
                  {{ $r->titulo }}
                </div>
              </h3>
              <div class="img-hover bg_clinicalKey d-flex justify-content-center align-items-center">
                <div class="">
                  {!! $r->descripcion !!}
                </div>
              </div>
            </figure>
            <div class="card__responsive d-block d-sm-none">
              <div class="background" style="background-image:url( {{ url('storage/'.$resultado2) }}  );">
              </div>
              <div class="card__responsive__content d-flex align-items-center justify-content-center">
                <div class="">
                  <h3>{{ $r->titulo }}</h3>
                  {!! $r->descripcion !!}
                </div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
