@extends('frontend.layout.layout')
@section('title')
Actividades | EsSalud Biblioteca
@endsection

@php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];


  $slug = str_slug($actividad->nombre, '-');

@endphp

<meta property="og:url"                content="{{url('/')}}/{{ trans('route.novedades') }}/{{$actividad->id}}/{{$slug}}" />
<meta property="og:title"              content=" {{ $actividad->nombre }} " />
<meta property="og:description"        content=" {{ $actividad->descripcion }}" />
<meta property="og:image"              content="{{url('storage')}}/{{ $actividad->banner }}" />
<meta property="og:image:width"              content="{{ $ancho }}"  />
<meta property="og:image:height"              content="{{ $alto }}"  />

@section('content')

<div class="migasPan m-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}/actividades">Actividades </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $actividad->nombre }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<section class="detalles detalles--padding detalles--plomo">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12">
        <a href="{{ url('/') }}/actividades" class="volver"><i class="fas fa-chevron-left"></i> Volver</a>
        <h1 class="detalles__titulo detalles__titulo--azul">{{ $actividad->nombre }}</h1>
      </div>
    </div>
  </div>
</section>


<section class="detalles detalles--padding detalles--plomo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 offset-lg-1 col-md-6">
        <div class="detalles__card">
          <div class="detalles__card__titulo">
            <h3><img src="{{ url('/') }}/images/icono/description.png" class="img-fluid" alt="">Descripción</h3>
          </div>
          <div class="detalles__card__content">
            <p>{{ $actividad->descripcion2 }}</p>
          </div>
        </div>
        <div class="detalles__card">
          <div class="detalles__card__titulo">
            <h3><img src="{{ url('/') }}/images/icono/clock.png" class="img-fluid" alt="">Fecha</h3>
          </div>
          <div class="detalles__card__content">
            <p>{{ $actividad->hora }} - {{ $dia }} {{ $numero }}</p>
          </div>
        </div>
        <div class="detalles__card">
          <div class="detalles__card__titulo">
            <h3><img src="{{ url('/') }}/images/icono/lugar.png" class="img-fluid" alt="">Lugar</h3>
          </div>
          <div class="detalles__card__content">
            <p>{{ $actividad->lugar }}</p>
          </div>
        </div>
      </div>
      @if($actividad->banner)
      <div class="col-lg-6 col-md-6 p-0">
        <div class="detalles__img">
          <div class="detalles__img__imagen">
            <img src="{{ url('storage') }}/{{ $actividad->banner }}" class="img-fluid" alt="">
          </div>
          <div class="detalles__img__redes">
            <div class="detalles__img__redes__titulo">
              <h3>Compartir</h3>
            </div>
            <div class="detalles__img__redes__icon">
              <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//{{ $host.$url }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/home?status=http%3A//{{ $host.$url }}" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
<section class="actividades actividades--padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="titulo titulo--azul titulo--mediano mb-6">Próximos eventos</h2>
      </div>
      @foreach ($prox_event as $key => $value)
        <?php
            $slug = str_slug($value->nombre, '-');

            $numero =  date('d', strtotime($value->fecha));

            switch (date('w', strtotime($value->fecha))){
              case 1: $dia = "Domingo"; break;
              case 2: $dia = "Lunes"; break;
              case 3: $dia = "Martes"; break;
              case 4: $dia = "Miercoles"; break;
              case 5: $dia = "Jueves"; break;
              case 6: $dia = "Viernes"; break;
              case 7: $dia = "Sabado"; break;
            }

         ?>
        <div class="col-lg-3 col-md-6 col-12">
          <a href="{{url('actividades')}}/{{ $value->id }}/{{ $slug }}"  class="actividades__content__item mb-3">
            <h3>{{ $value->nombre }}</h3>
            <p><i class="far fa-clock"></i> {{ $actividad->hora }} - {{ $dia }} {{ $numero }}</p>
            <p><img src="{{ url('/') }}/images/icono/location.png" class="img-fluid" alt=""> {{ $actividad->lugar }}</p>
            <span>Ver más</span>
          </a>
        </div>
      @endforeach

    </div>
  </div>
</section>
@endsection
