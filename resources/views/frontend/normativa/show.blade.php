@extends('frontend.layout.layout')
@section('title')
Novedades | EsSalud Biblioteca
@endsection
@section('content')


<div class="migasPan  m-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}/normativa">Normativa </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $normativa->nombre }}</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="">
  <img src="{{ url('storage') }}/{{ $banner->imagen }}" class="img-fluid" alt="">
</div>
<section class="detalles">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 col-sm-12 text-center">
        <a href="{{ url('/') }}/normativa" class="volver"><i class="fas fa-chevron-left"></i> Volver</a>
        <h1 class="detalles__titulo detalles__titulo--margin">{{ $normativa->nombre }}</h1>
      </div>
      <div class="col-md-10 m-auto">
        <div class="detalles__parrafo">
        
         {!! $normativa->descripcion !!}
        </div>
         <div class="detalles__descargar text-center">
           <?php
              $enlace = json_decode($normativa->enlace, true);
           ?>
          @if($enlace)
            <a href="{{url('storage')}}/{{ $enlace[0]["download_link"] }}" target="_blank"><div class="fa fa--pdf"></div> <span>{{ $normativa->titulo }}</span> </a>
          @else
            <a href="{{asset('storage')}}/{{ $normativa->enlace }}" target="_blank"><div class="fa fa--pdf"></div> <span>{{ $normativa->titulo }}</span> </a>
          @endif
        </div>
      </div>
      @php
        $host= $_SERVER["HTTP_HOST"];
        $url= $_SERVER["REQUEST_URI"];
      @endphp
      <div class="col-md-10 m-auto">
        <hr class="hr">
        <div class="row">
          <div class="col-lg-4 col-md-4 mb-3 col-12 text-center">
            <a href="https://twitter.com/home?status=http%3A//{{ $host.$url }}" target="_blank" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              <i class="fab fa-twitter"></i>
              Compartir en Twitter
            </a>
          </div>
          <div class="col-lg-4 col-md-4 mb-3 col-12 text-center">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//{{ $host.$url }}" target="_blank" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              <i class="fab fa-facebook-f"></i>
              Compartir en Facebook
            </a>
          </div>
          <div class="col-lg-4 col-md-4 mb-3 col-12 text-center">
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//{{ $host.$url }}&title=&summary=&source=" target="_blank" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              <i class="fab fa-linkedin-in"></i>
              Compartir en linkedin
            </a>
          </div>
          <div class="col-12 text-center d-block d-sm-none">
            <a href="whatsapp://send?text=http://{{ $host.$url }}" data-action="share/whatsapp/share" target="_blank" class="btn__link">
              <svg>
                <rect></rect>
              </svg>
              <i class="fab fa-whatsapp"></i>
              Compartir en Whatsapp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
