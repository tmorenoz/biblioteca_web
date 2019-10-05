@extends('frontend.layout.layout')
@section('title')
Novedades | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='novedades'></span>
<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--mediano--biblioteca titulo--blanco">Biblioteca en un minuto</h2>
  </div>
  @php
    $resultado = str_replace("\\", "/", $banner->imagen);
  @endphp
  <div class="owl-carousel owl__banner">
    <div class="item">
      <div class="banners__content">
        <div class="single-slider zoom" style="background-image:url({{ url('storage/'.$resultado) }});">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="novedades">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-9 col-12">
        <div class="novedades__biblioteca row">
          <div class="col-lg-2 col-md-3 p-0">
            <h4>Seleccionar años</h4>
            <div class="biblioteca">
              <select  class="selector" id="select-anio-biblioteca">
                @if($anio == 0)
                 <option value="hide">AÑO</option>
                @endif
                @foreach($years as $y)
                    <option value="{{ $y->anio }}" >{{ $y->anio }}</option>
                @endforeach
            </select>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 p-0">
            <h4>Seleccionar mes</h4>
            <div class="biblioteca">
              <select  class="selector" id="select-mes-biblioteca">
                @if($mes == 0)
                 <option value="hide">MES</option>
                @endif
                @foreach ($meses as $key => $value)
                    <option value="{{ $value }}" >{{ $meses2[$key] }}</option>
                @endforeach
              </select>
            </div>
          </div>
          @if($mes != 0 || $anio != 0)
            <div class="col-lg-2 col-md-3 p-0">
              <a  href="{{ url('biblioteca-en-un-minuto') }}" class="btn-todos"> <i class="fas fa-redo-alt"></i> </a>
            </div>
          @endif
        </div>
      </div>
    </div>

    @if($mensaje == null)
      <div class="row" >
        <div class="col-lg-6 offset-lg-6 col-md-12 col-12">
          <div class="base__vista" style="position: relative; top: -40px; padding: 0 !important;">
            <span><i class="fas fa-eye"></i> {{ $var }}</span>
            <span>de {{ $contador }}</span>
          </div>
        </div>
          @foreach($libros as $detalle)
            <?php
                $slug = str_slug($detalle->titulo, '-');
                $numero =  date('d', strtotime($detalle->fecha));
                switch (date('w', strtotime($detalle->fecha))){
                    case 0: $dia = "Domingo"; break; case 1: $dia = "Lunes"; break;
                    case 2: $dia = "Martes"; break; case 3: $dia = "Miercoles"; break;
                    case 4: $dia = "Jueves"; break; case 5: $dia = "Viernes"; break; case 6: $dia = "Sabado"; break;
                }
                $anio2 = substr($detalle->fecha, -10, 4);
                $mes2 = substr($detalle->fecha, -5, 2);

                switch ($mes2){
                    case 01: $m2 = "Enero"; break; case 02: $m2 = "Febrero"; break; case 03: $m2 = "Marzo"; break;
                    case 04: $m2 = "Abril"; break; case 05: $m2 = "Mayo"; break; case 06: $m2 = "Junio"; break;
                    case 07: $m2 = "Julio"; break; case '08': $m2 = "Agosto"; break; case '09': $m2 = "Septiembre"; break;
                    case 10: $m2 = "Octubre"; break; case 11: $m2 = "Noviembre"; break; case 12: $m2 = "Diciembre"; break;
                }
             ?>
            <div class="col-lg-3 col-md-6 col-12">
              <a href="{{url('biblioteca-en-un-minuto')}}/{{ $detalle->id }}/{{ $slug }}" class="novedades__card">
                <div class="novedades__card__content">
                  <h3>{{ $detalle->titulo }}</h3>
                  <p>{{ $dia }}, {{ $numero }} de {{ $m2 }}, {{ $anio2 }}</p>
                  <span>Leer más</span>
                </div>
                <div class="novedades__card__img">
                    <img src="{{url('/storage/'.$detalle->imagen )}}" class="img-fluid" alt="">
                </div>
              </a>
            </div>
          @endforeach
          <div class="col-md-12 col-12 col-sm-12">
            <div class="base__page text-center">
              <nav aria-label="Page navigation">
                {{ $libros->links('pagination') }}
              </nav>
            </div>
          </div>

        </div>
      @else
        <div class="row">
          <span>{{ $mensaje }}</span>
        </div>
      @endif

    </div>

</section>


@endsection
@section('scripts')
  <script type="text/javascript">

  var m = '@if($mes != 0 || $mes != 'hide') {{  $meses2[$mes-1] }} @else 0 @endif ';
  var mes = '{{ $mes }}';
  var a = '{{ $anio }}';

  </script>

@endsection
