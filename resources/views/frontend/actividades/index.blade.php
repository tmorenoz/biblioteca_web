@extends('frontend.layout.layout')
@section('title')
Actividades | EsSalud Biblioteca
@endsection
@section('content')

<span id='pestana_vista' valor='actividad'></span>
<span id='pestana_responsive' valor='actividades'></span>

<section class="banners banner m-top">
  <div class="banner__titulo">
    <h2 class="titulo titulo--mediano titulo--blanco">Actividades</h2>
  </div>
  <div class="owl-carousel owl__banner">
    @foreach ($banners as $key => $value)
      @php
        $resultado = str_replace("\\", "/", $value->imagen);
      @endphp
      <div class="item">
        <div class="banners__content">
          <div class="single-slider zoom" style="background-image:url({{ url('storage/'. $resultado) }});">
          </div>
        </div>
      </div>
    @endforeach

  </div>
</section>

  <!-- STAR SECTION NOVEDADES -->
  <section class="actividades">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
          <div class="row">
            <div class="col-lg-8 col-md-9 col-12">
              <!-- <h2 class="titulo titulo--mediano titulo--azul"> Actividades de <span id="mes"></span></h2> -->
              <h2 class="titulo titulo--mediano titulo--azul"> Calendario</h2>
            </div>
            <div class="col-lg-4 col-md-3 col-12">

            </div>
            <input type="hidden" id="año" value="{{ $anioactual }}">
            <div class="col-md-12">
              <div class="calendario">
                  <div class="calendario_cabecera">
                      <div class="flechas">
                        <div class="atras" id="atras"><img src="{{ url('/') }}/images/icono/flecha__calendario.png" class="img-fluid" alt=""></div>
                        <span class="mes" id="mes2"></span>
                        <div class="siguiente" id="siguiente"><img src="{{ url('/') }}/images/icono/flecha__calendario.png" class="img-fluid" alt=""></div>
                        <!-- <span class="anio"  id="anio"></span> -->
                      </div>
                      <div class="seleccionar">
                        <select id="idioma" class="idioma">
                          <option value="hide">AÑO</option>
                          @foreach ($anios as $key => $value)
                            <option value="{{ $value->anio }}" @if($anioactual == $value->anio) selected @endif  >{{ $value->anio }}</option>
                          @endforeach

                        </select>
                      </div>
                  </div>
                  <div class="calendario_body">
                    <input type="hidden" id="actividad_mes" value="">
                    <div class="semana">
                        <div class="calendar__day dia">Lunes</div>
                        <div class="calendar__day dia">Martes</div>
                        <div class="calendar__day dia">Miércoles</div>
                        <div class="calendar__day dia">Jueves</div>
                        <div class="calendar__day dia">Viernes</div>
                        <div class="calendar__day dia">Sábado</div>
                        <div class="calendar__day dia">Domingo</div>
                    </div>

                    <div class="dias" id="dias"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">

          <div class="actividades__content">
            <div class="actividades__content__cabeza">
              Eventos del mes
            </div>
            <div class="" id="pintarActividades">
              @foreach ($actividades as $key => $value)
                <?php
                    $slug = str_slug($value->nombre, '-');
                    $numero =  date('d', strtotime($value->fecha));
                    switch (date('w', strtotime($value->fecha))){
                        case 0: $dia = "Domingo"; break;
                        case 1: $dia = "Lunes"; break;
                        case 2: $dia = "Martes"; break;
                        case 3: $dia = "Miercoles"; break;
                        case 4: $dia = "Jueves"; break;
                        case 5: $dia = "Viernes"; break;
                        case 6: $dia = "Sabado"; break;
                    }
                 ?>
                <!-- <a @if($value->descripcion2) href="{{url('actividades')}}/{{ $value->id }}/{{ $slug }}" @else href="" @endif class="actividades__content__item"> -->
                <a href="{{url('actividades')}}/{{ $value->id }}/{{ $slug }}" class="actividades__content__item">
                  <h3>{{ $value->nombre }}</h3>
                  <p><i class="far fa-clock"></i> {{ $value->hora }} - {{ $dia }} {{ $numero }}</p>
                  <p><img src="{{ url('/') }}/images/icono/location.png" class="img-fluid" alt=""> {{ $value->lugar }} </p>
                  <span>Ver más</span>
                </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECTION NOVEDADES -->

@endsection
@section('scripts')
<script type="text/javascript">
  const site_url = '{{ url('/') }}/';
</script>
@endsection
