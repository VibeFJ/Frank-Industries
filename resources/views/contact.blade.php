@extends('template.fondo')
@section('Barra')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index') }}">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('acerca') }}">Acerca De Nosotros</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('contacto') }}">Contacto
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesi&oacute;n</a>
    </li>
@endsection
@section('Contenido')

    <!-- Barra de titulo -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>React-Laravel</h4>
                <h2>¡Env&iacute;ame tu opini&oacute;n, y gracias por visitar mi sitio!</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Contenido de Pagina -->
    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="down-contact">
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
