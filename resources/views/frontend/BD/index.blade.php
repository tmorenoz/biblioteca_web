@extends('frontend.layout.layout')
@section('title')
Base de Datos | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='recursos'></span>
<span id='pestana_responsive' valor='recursoss'></span>

<section class="banner banner--mediano" style="background-image:url(../resources/assets/images/banners/banner-BD.jpg);">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Base de datos</h2>
  </div>
</section>
  <!-- STAR SECTION BD -->
  <section class="base">
    <div class="container">
      <div class="row" id="cargar_mas_bases">
        <div class="col-lg-12">
          <div class="base__vista">
            <span><i class="fas fa-eye"></i> {{ $var }}</span>
            <span>de {{ $contador }}</span>
          </div>
        </div>
        @foreach($datos as $key => $d)
          <input type="hidden" id="contador" value="{{ count($datos) }}">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="base__card">
              <div class="base__card__img d-flex align-items-center justify-content-center">
                <div class="">
                  <img src="{{ url('storage') }}/{{ $d->imagen }}" class="base__card__img__img-2" alt="" >
                </div>
              </div>
              <div class="base__card__content align-items-center justify-content-center">
                @if($d->estado == 1)
                  <div class="span span--azul">
                    <img src="{{ url('storage') }}/{{ $d->icono }}" class="img-fluid" alt="" >
                     <span>Acceso Libre</span>
                   </div>
                @else
                  <div class="span span--rojo">
                    <img src="{{ url('storage') }}/{{ $d->icono }}" class="img-fluid" alt="">
                    <span>Acceso por suscripción</span>
                  </div>
                @endif
                <h3>{{ $d->nombre }}</h3>

                @if($d->descripcion)
                  <p class="base__card__content__parrafo">{{ $d->descripcion }}</p>
                @endif
              </div>
              <div class="base__card__enlace">
                <a href="{{ $d->enlace }}" target="_blank" class="btn btn__activo">Acceder</a>
              </div>
            </div>
          </div>
        @endforeach

        <div class="col-md-12 col-12 col-sm-12">
          <div class="base__page text-center">
            <nav aria-label="Page navigation">
              {{ $datos->links('pagination') }}
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION BD -->

@endsection
@section('scripts')
<script type="text/javascript">
  const site_url = '{{ url('/') }}/';

</script>
@endsection
