<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row no-gutters">

        @foreach ($headers as $key => $value)
          @php
            if($value->orden == 2){
              $position = 'header__top__logo--center';
            }else if($value->orden == 3){
              $position = 'header__top__logo--right';
            }else{
              $position = null;
            }
          @endphp

          <div class="col-lg-4 col-md-5 col-12">
            <div class="header__top__logo {{ $position }}">
              <a ><img src="{{ url('storage') }}/{{ $value->imagen }}" alt=""></a>
            </div>
          </div>
        @endforeach

        {{-- <div class="col-lg-4 col-md-5 col-12">
          <div class="header__top__logo header__top__logo--left">
            <a ><img src="{{ url('/') }}/images/logo3.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-12">
          <div class="header__top__logo header__top__logo--center">
            <a ><img src="{{ url('/') }}/images/logo1.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-12">
          <div class="header__top__logo header__top__logo--right">
            <a ><img src="{{ url('/') }}/images/logo2.png" alt=""></a>
          </div>
        </div> --}}

        <!-- <div class="col-lg-6 col-md-7 col-12">
          <div class="header__top__buscador d-none d-sm-block">
            <form class="" action="index.html" method="post">
              <input type="text" name="" class="" placeholder=" Buscar..." value="">
              <button type="button" name="button"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div> -->
        <!-- <div class="col-lg-6 col-md-7 col-12 text-right">
          <a href="https://www.facebook.com/EsSaludPeruOficial/" target="_blank"  class="ease-all face"><i class="fab fa-facebook-f"></i></a></li>
        </div> -->
      </div>
    </div>
  </div>
  <div class="header__bottom">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav nav-menu mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" id="inicio" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="nosotros" href="{{ url('/') }}/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="normativas" href="{{ url('/') }}/normativa">Normativa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="recursos" href="{{ url('/') }}/recursos">RECURSOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="servicios" href="{{ url('/') }}/servicios">SERVICIOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="actividad" href="{{ url('/') }}/actividades">ACTIVIDADES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="novedades" href="{{ url('/') }}/novedades">Novedades</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="slider__top">
            <form class="" id="myform2" name="myform2" method="GET" action="{{URL::to('buscador')}}">
              <div class="slider__buscador__formulario__item input">
                <input type="text" name="searchterm" id="searchterm" class="" placeholder="Buscar..." value="{{ (isset($_GET['searchterm']))? $_GET['searchterm'] : '' }}">
              </div>
              <div class="slider__buscador__formulario__item input">
                <div class="seleccionado">
                  <div class="seleccionar">
                    <select class="selector" name="repo"> <!-- id="buscador" -->
                      <option value="Todos" rel="icon-temperature">Todos</option>
                      @foreach($repos as $repo)
                      <option value="{{$repo->nombre}}">{{$repo->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="slider__buscador__formulario__item input">
                <button type="submit" id="btnSearch"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p id="mensaje" style="margin-left: 70%;margin-top: 5px;color:#dc2d1a;"></p>
</header>
<!--menu responsive-->
<div class="menu__responsive">
  <div class="logo__responsive">
    <a href="{{ url('/') }}"><img src="{{ url('/') }}/images/logo.png" alt=""></a>
  </div>
  <div id="menu-icon-shape">
    <div id="menu-icon">
      <div id="top"></div>
      <div id="middle"></div>
      <div id="bottom"></div>
    </div>
  </div>
</div>
<!-- Overlay menu -->
<div id="overlay-nav">
  <div id="nav-content">
    <ul>
      <li><a class="navbar__link" id="inicios" href="{{ url('/') }}">Inicio</a></li>
      <li><a class="navbar__link" id="nosotro" href="{{ url('/') }}/nosotros">Nosotros</a></li>
      <li><a class="navbar__link" id="normativa" href="{{ url('/') }}/normativa">Normativa</a></li>
      <li><a class="navbar__link" id="recursoss" href="{{ url('/') }}/recursos">Recursos</a></li>
      <li><a class="navbar__link" id="servicioss" href="{{ url('/') }}/servicios">Servicios</a></li>
      <li><a class="navbar__link" id="actividades" href="{{ url('/') }}/actividades">Actividades</a></li>
      <li><a class="navbar__link" id="novedade" href="{{ url('/') }}/novedades">Novedades</a></li>
    </ul>
  </div>
</div>
