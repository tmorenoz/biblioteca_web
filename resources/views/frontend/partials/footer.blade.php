<section class="suscribete" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <form id="envioCorreo" name="envioCorreo" action="{{url('/')}}/suscripcion" method="post" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
          <h2>Recibe nuestras novedades</h2>
          <div class="suscribete__formulario">
              <label for="email" generated="true" class="error suscribete__formulario__label"></label>
              <input type="hidden" name="_token" id="csrf_toKen" value="{{ csrf_token() }}">
              <input type="text" name="email" class="" placeholder="Correo" value="" required>
              <button type="submit" name="button">Suscríbete</button>
          </div>
          <div class="suscribete__politica">
            Al enviar mi correo acepto las <a href="#"  data-toggle="modal" data-target="#modalPolitica">políticas de privacidad</a> de este sitio.
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<section class="footer">
  <div class="footer__top">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12">
          <div class="footer__top__content">
            <h4 class="titulo titulo--pequenio titulo--azul">Enlaces de interés</h4>
            <div class="row">
              @foreach ($enlaces as $key => $value)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <a href="{{ $value->enlace }}" target="_blank"><img src="{{ url('storage') }}/{{ $value->imagen }}" class="img-fluid" alt=""></a>
                </div>
              @endforeach

            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="footer__top__content footer__top__content--border">
            <div class="footer__top__content__item footer__top__content__item--pad">
              <h4 class="titulo titulo--pequenio titulo--azul">Contacto</h4>
              <ul>
                <li><p><i class="fas fa-map-marker-alt"></i><span>{{ $contacto->direccion }}</span></p></li>
                <li><a href="tel:{{ $contacto->telefono2 }}"><i class="fas fa-phone" style="transform:rotate(90deg)"></i><span>{{ $contacto->telefono }}</span> </a> </li>
                <li><a href="mailto:{{ $contacto->correo }}"><i class="fas fa-envelope"></i><span>{{ $contacto->correo }}</span> </a> </li>
                <li><p><i class="fas fa-clock"></i><span>{{ $contacto->horario }}</span></p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h6 class="footer__bottom__link">© 2019 EsSalud. Todos los derechos reservados.<a href="https://webtilia.com/" target="_blank" class=""> By Webtilia</a></h6>
        </div>
      </div>
    </div>
  </div>
</section>
