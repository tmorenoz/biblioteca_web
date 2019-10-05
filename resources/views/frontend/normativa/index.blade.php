@extends('frontend.layout.layout')
@section('title')
Normativa | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='normativas'></span>
<span id='pestana_responsive' valor='normativa'></span>

<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Normativa</h2>
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
      @foreach ($normativas as $key => $value)
        <?php
            $slug = str_slug($value->nombre, '-');
         ?>
        <div class="col-lg-3 col-md-3 col-12">
          <a @if($value->descripcion && $key > 1) href="{{ url('normativa', $value->id) }}/{{ $slug }}" @endif>
            <figure class="d-none d-sm-block">
              <img src="{{ url('storage') }}/{{ $value->imagen }}" class="img-fluid" alt="">
              <h3 class="d-flex align-items-center justify-content-center">
                <div class="">
                  {{ $value->nombre }}
                </div>
              </h3>
              <div class="img-hover bg_clinicalKey d-flex justify-content-center align-items-center">
                <div class="">
                  @if ($loop->first)
                    <p>{{ $value->statu }}</p>
                  @else
                    <h4>{{ $value->statu }}</h4>
                  @endif
                  @if ($key == 0 || $key == 1)
                      <?php
                         $enlace = json_decode($value->enlace, true);
                      ?>
                     @if($enlace)
                       <a href="{{url('storage')}}/{{ $enlace[0]["download_link"] }}" target="_blank" class="btn__link btn__link--blanco">
                         <svg>
                           <rect></rect>
                         </svg>
                         <i class="far fa-file-pdf"></i>
                         Descargar
                       </a>
                     @else
                       <a href="{{asset('storage')}}/{{ $value->enlace }}" target="_blank" class="btn__link btn__link--blanco">
                         <svg>
                           <rect></rect>
                         </svg>
                         <i class="far fa-file-pdf"></i>
                         Descargar
                       </a>
                     @endif

                      <a href="{{ url('normativa', $value->id) }}/{{ $slug }}" class="btn__link btn__link--blanco">
                        <svg>
                          <rect></rect>
                        </svg>
                        ver más
                      </a>
                  @endif
                </div>
              </div>
            </figure>
            <div class="card__responsive d-block d-sm-none"> 
              @php
                $resultado = str_replace("\\", "/", $value->imagen);
              @endphp
              <div class="background" style="background-image:url({{ url('storage/'.$resultado) }});">
              </div>
              <div class="card__responsive__content d-flex align-items-center justify-content-center">
                <div class="">
                  @if ($loop->first)
                    <p class="card__responsive__content__parrafo">{{ $value->statu }}</p>
                  @else
                    <h3>{{ $value->nombre }}</h3>
                  @endif
                  @if ($key == 0 || $key == 1)
                      <?php
                         $enlace = json_decode($value->enlace, true);
                      ?>
                     @if($enlace)
                       <a href="{{url('storage')}}/{{ $enlace[0]["download_link"] }}" target="_blank" class="btn-blanco">
                         <i class="far fa-file-pdf"></i>
                         Descargar
                       </a>
                     @else
                       <a href="{{asset('storage')}}/{{ $value->enlace }}" target="_blank" class="btn-blanco">
                         <i class="far fa-file-pdf"></i>
                         Descargar
                       </a>
                     @endif
                      <a href="{{ url('normativa', $value->id) }}/{{ $slug }}" class="btn-blanco">
                        ver más
                      </a>
                  @endif

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
