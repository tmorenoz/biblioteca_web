@extends('frontend.layout.layout')
@section('title')
Novedades | EsSalud Biblioteca
@endsection
@php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];


  $slug = str_slug($biblioteca->titulo, '-');

@endphp

<meta property="og:url"                content="{{url('biblioteca-en-un-minuto')}}/{{$biblioteca->id}}/{{$slug}}" />
<meta property="og:title"              content=" {{ $biblioteca->titulo }} " />
<meta property="og:description"        content=" {{ $biblioteca->descripcion }}" />
<meta property="og:image"              content="{{url('storage')}}/{{ $biblioteca->imagen }}" />
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
            <li class="breadcrumb-item"><a href="{{ url('biblioteca-en-un-minuto') }}">Biblioteca en un minuto</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ substr( $biblioteca->titulo, 0, 51)  }}</li>
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
        <a href="{{ url('biblioteca-en-un-minuto') }}" class="volver"><i class="fas fa-chevron-left"></i> Volver</a>
        <h1 class="detalles__titulo detalles__titulo--margin">{{ $biblioteca->titulo }}</h1>
        <ul>
          @if($m)
            <li>{{ $dia }} {{ $m }} {{ $anio }}</li>
          @endif
        </ul>
      </div>
      @if(!$biblioteca->banner)
      <div class="col-md-8 m-auto">
        <div class="text-center">
          <img src="{{ url('storage/'.$biblioteca->imagen) }}" class="img-fluid" alt="">
        </div>
      </div>
      @endif
      <div class="col-md-8 m-auto">
        <div class="detalles__parrafo">
          {!! $biblioteca->descripcion !!}
        </div>
      <div >

      </div>
    </div>
  </div>
</section>
@if($biblioteca->banner)
  @php
    $resultado = str_replace("\\", "/", $biblioteca->banner);
  @endphp
<section class="parallax" style="background-image:url({{ url('storage/'.$resultado) }});"></section>
@endif
<section class="detalles">
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto">

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
@endsection
