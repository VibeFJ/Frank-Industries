@extends('template.fondo')
@section('Barra')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index') }}">Inicio</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('acerca') }}">Acerca De Mi
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesi&oacute;n</a>
    </li>
@endsection
@section('Contenido')

    <!-- Contenido de Pagina -->
    <!-- Barra de titulo -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>React-Laravel</h4>
                <h2>Acerca de Nosotros!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Banner Ends Here -->
    <section class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <img src="assets/images/about-us.jpg" alt="">
            <p>
              Bienvenido a este sitio web de prueba, donde podr&aacute;s encontrar informaci&oacute;n sobre mi trabajo
              y mi experiencia como estudiante de la Universidad Politecnica de Tecamac. Este sitio web est&aacute; realizado
              con el principio de plasmar mis conocimientos adquiridos y proximos en adquirir en el mundo de la
              programaci&oacute;n.
              <br><br>
              Este sitio web fue desarrollado con en el Framework <a rel="nofollow" href="https://laravel.com/" target="_parent">Laravel</a>
              en el cual cuenta con conocimientos principales de uso, como por ejemplo el uso de la base de datos,
              sintaxis de Laravel, php, html, css, etc. Así como el uso de livewire para la creaci&oacute;n de vistas,
              el uso de Bootstrap, jQuery y el consumo de APIs.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h4>¿Quien soy?</h4>
          	<p>
              Mi nombre es Francisco Javier Rosales Sánchez actualmente soy estudiante de la Universidad Politecnica
              de Tecamac actualmente cursando la carrera de Ingenieria en Software.
              <br><br>
              Los lenguajes y Frameworks de mi actual conocimieto son C, C++, C#, JavaScript, PHP, VisualBasic.Net,
              Laravel, actualmente aprendiendo React y Node.js.
            </p>
          </div>
          <div class="col-lg-6">
            <h4>¿Por que lo hago?</h4>
          	<p>
              Es un proyecto personal de conocimientos generales iniciado en laravel con la unica meta de aprender,
              repasar y adquirir nuevas habilidades en el mundo de la programación. Un repaso de conocimienntos actuales
              iniciado desde 0 y una adquisición de nuevas habilidades con lo que el proyecto crecera conforme esas
              habilidades sean adquiridas.
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <h4>Rick & Morty</h4>
          	<p>
              La API de Rick and Morty es una API REST(ish) y GraphQL basada en el programa de televisión Rick and Morty.
              Tendrás acceso a cientos de personajes, imágenes, lugares y episodios. La API de Rick and Morty está llena
              de información canónica como se ve en el programa de televisión.
            </p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h4>Marvel</h4>
          	<p>
              La API de Marvel Comics permite a los desarrolladores de todo el mundo acceder a información
              sobre la amplia biblioteca de cómics de Marvel, desde lo que está por venir hasta hace 70 años.
            </p>
          </div>
          <div class="col-lg-4">
            <h4>API Rest</h4>
          	<p>
              Una API Personal realizada con el punto de aprender como funciona una API y el consumo de su información
              para el desarrollo de una aplicación web, una API de citas sencilla con el unico proposito de aprender.
            </p>
          </div>
        </div>

      </div>
    </section>

    <!-- Contenido de Pagina -->
    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="down-contact" style="margin-top: 0px;">
              <div class="row">
                <div class="col-lg-8">
                  <div class="sidebar-item contact-form">
                    <div class="sidebar-heading">
                      <h2>Env&iacute;a un mensaje</h2>
                    </div>
                    <div class="content">
                      <div class="row">
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea type="text" name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-3">
                          <fieldset>
                            <button onclick="correoenviado()" type="submit" class="main-button btn btn-primary btn-block mb-4" id="form-submit" disabled="false">
                              Enviar Mensaje
                            </button>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="sidebar-item contact-information">
                    <div class="sidebar-heading">
                      <h2>Informaci&oacute;n de Contacto</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <h5>+52 558 477 6476</h5>
                          <span>N&Uacute;MERO TELEF&Oacute;NICO</span>
                        </li>
                        <li>
                          <h5>frank.pruebas.0402@gmail.com</h5>
                          <span>CORREO PERSONAL</span>
                        </li>
                        <li>
                          <h5>Mi Direcció&oacute;n,
                            <br>Av.La Esquina #139</h5>
                          <span>DIRECCI&Oacute;N</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.9643050922386!2d-98.98036838508888!3d19.71414378672505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ed2fa5d3a6c1%3A0x1f383377175dc58a!2sUniversidad%20Politecnica%20de%20Tecamac!5e0!3m2!1ses-419!2smx!4v1643115676597!5m2!1ses-419!2smx" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
@section('Js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    //Envio de correo con ajax
    function correoenviado(){
      document.getElementById("form-submit").disabled = true;
      //ajax por metodo post
      $.ajax({
        url: "{{ route('mail') }}",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          message: $('#message').val()
        },
        success: function(data){
          var data = JSON.parse(data);
          console.log(data);
          if(data == "enviado"){
            Swal.fire({
              title: 'Mensaje Enviado',
              text: 'Gracias por contactarnos, pronto nos comunicaremos con usted.',
              icon: 'success',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.value) {
                $('#message').val("");
              }
            })
          }
        }
      });
    }

    //Validar textarea
    $('#message').keyup(function(){
      if($('#message').val() != ""){
        $('#form-submit').removeAttr('disabled');
      }else{
        $('#form-submit').attr('disabled', 'true');
      }
    });

</script>
@endsection
