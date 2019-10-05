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
