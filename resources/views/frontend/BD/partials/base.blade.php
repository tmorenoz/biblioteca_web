@foreach($datos as $key => $d)
  <input type="hidden" id="contador" value="{{ count($datos) }}">
  <div class="col-md-12 col-12 col-sm-12">
    <div class="base__card">
      <div class="row">
        <div class="col-md-4">
          <div class="base__card__img d-flex align-items-center justify-content-center">
            <div class="">
              <img src="{{ url('storage') }}/{{ $d->imagen }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="base__card__content">
            <h3>{{ $d->nombre }}</h3>
            @if($d->estado == 1)
              <div class="span span--azul">
                <img src="{{ url('storage') }}/{{ $d->icono }}" class="img-fluid" alt="">
                 <span>Acceso Libre</span>
               </div>
            @else
              <div class="span span--rojo">
                <img src="{{ url('storage') }}/{{ $d->icono }}" class="img-fluid" alt="">
                <span>Acceso por suscripción</span>
              </div>
            @endif
            @if($d->descripcion)
              <p class="base__card__content__parrafo">{{ $d->descripcion }}</p>
            @endif
            <a href="{{ $d->enlace }}" target="_blank" class="btn btn__activo">Acceder</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
