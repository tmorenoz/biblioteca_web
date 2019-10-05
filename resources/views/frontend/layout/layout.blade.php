<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Nuestra biblioteca virtual pone a tu alcance un amplio catálogo de libros, revistas, material audiovisual con diversos temas.">
<title>Biblioteca Central-EsSalud</title>
{{-- <title>@yield('title')</title> --}}
<link rel="icon" href="{{ asset('images/favicon.ico') }}"  type="image/x-icon"/>
<!-- <link rel="icon" href="favicon.ico" /> -->
<link rel="stylesheet" href="{{ url('css/app.css?v=3.8') }}">
<meta name="theme-color" content="#007AC9" />
@yield('stylesheet')
</head>
<body>
  <div class="redes__sociales d-none d-sm-block">
    <ul>
      @foreach ($redes as $key => $value)
        <li><a href="{{ $value->enlace }}" target="_blank" class="ease-all {{ $value->nombre }}"><i class="fab fa-{{ $value->nombre }}"></i></a></li>
      @endforeach
    </ul>
  </div>
  <div class="redes d-block d-sm-none">
    @foreach ($redes as $key => $value)
      <a href="{{ $value->enlace }}" class="fab fa-{{ $value->nombre }} fa-inverse f-fw hidden" @if( $value->enlace != '#' ) target="_blank" @endif></a>
    @endforeach
    <a class="fas fa-ellipsis-v fa-2x fa-inverse f-fw"></a>
  </div>

@include('frontend.partials.header')

@yield('content')

@include('frontend.partials.modal')
@include('frontend.partials.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{ url('js/app.js?v=3.7') }}"></script>
<script> const site_url = '{{ url('/') }}/'; </script>

@yield('scripts')
</body>
</html>
