@extends('frontend.layout.layout')
@section('title')
Novedades | EsSalud Biblioteca
@endsection

@php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];

  $slug = str_slug($novedad->nombre, '-');

@endphp

<meta property="og:url"                content="{{url('novedades')}}/{{$novedad->id}}/{{$slug}}" />
<meta property="og:title"              content=" {{ $novedad->nombre }} " />
<meta property="og:description"        content=" {{ $novedad->descripcion }}" />
<meta property="og:image"              content="{{url('storage')}}/{{ $novedad->imagen }}" />
<meta property="og:image:width"              content="{{ $ancho }}"  />
<meta property="og:image:height"              content="{{ $alto }}"  />

@section('content')

<span id='pestana_vista' valor='novedades'></span>
<div class="migasPan  m-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}/novedades">Novedades</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ substr( $novedad->nombre, 0, 51)  }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<section class="detalles">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12 text-center">
        <a href="{{ url('/') }}/novedades" class="volver"><i class="fas fa-chevron-left"></i> Volver</a>
        <h1 class="detalles__titulo detalles__titulo--margin">{{ $novedad->nombre }}</h1>
        <ul>
          @if($m)
            <li>{{ $dia }} {{ $m }} {{ $anio }}</li>
          @endif
          @if( $novedad->hora )
            <li>{{ $novedad->hora }}</li>
          @endif
        </ul>
      </div>
      @if(!$novedad->banner)
      <div class="col-md-8 m-auto">
        <div class="text-center">
          <img src="{{ url('storage/'.$novedad->imagen) }}" class="img-fluid" alt="">
        </div>
      </div>
      @endif
      <div class="col-md-8 m-auto">
        <div class="detalles__parrafo">
          {!! $novedad->descripcion !!}
        </div>
      <div >
        @foreach ($detalles as $key => $value)
          <div class="detalles__cards">
            <div class="img col-md-2">
               <img src="{{ url('storage') }}/{{ $value->imagen }}" class="img-fluid" alt="">
            </div>
            <div class="textos col-md-6">
              {!! $value->descripcion !!}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@if($novedad->banner)
  @php
    $resultado = str_replace("\\", "/", $novedad->banner);
  @endphp
<section class="parallax" style="background-image:url({{ url('storage/'.$resultado) }});"></section>
@endif
<section class="detalles">
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto">
        <div class="detalles__parrafo detalles__parrafo--bold">
          <p>{{ $novedad->titulo }}</p>
        </div>
        <div class="detalles__parrafo">
          {!! $novedad->descripcion2 !!}
        </div>
        <hr class="hr">
        @php
            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
        @endphp
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//{{ $host.$url }}" target="_blank" class="btn__link">
          <svg>
            <rect></rect>
          </svg>
          <i class="fab fa-facebook-f"></i>
          Compartir en Facebook
        </a>
      </div>
    </div>
  </div>
</section>

<section class="novedades">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="titulo titulo--azul titulo--mediano">Novedades relacionadas</h2>
      </div>

      @foreach ($novedades as $key => $value)
        <?php
            $slug = str_slug($value->nombre, '-');
         ?>
        <div class="col-lg-3 col-md-6 col-sm-4 col-12">
          <a href="{{ url('novedades') }}/{{ $value->id }}/{{ $slug }}" class="novedades__card cards">
            <div class="novedades__card__content">
              <h3>{{ substr( $value->nombre, 0, 51)  }}</h3>
              @if($value->tipo == 'otro')
                <span>Ver listado</span>
              @else
                <span>Leer más</span>
              @endif
            </div>
            <div class="novedades__card__img">
                <img src="{{ url('storage') }}/{{ $value->imagen }}" class="img-fluid" alt="">
            </div>
          </a>
        </div>
      @endforeach


    </div>
  </div>
</section>
@endsection
