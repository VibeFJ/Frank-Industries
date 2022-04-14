@extends('template.sesion')
@section('Barra2')
<li class="nav-item">
  <a class="nav-link" href="{{ route('login') }}">Iniciar Sesi&oacute;n</a>
</li>
@endsection
@section('Descript')
<h4>React-Laravel</h4>
<h2>¡Bienvenido!</h2>
@endsection
@section('Form')
  <h2 class="fw-bold mb-5">Registro</h2>

    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input class="form-control" name="name" type="text" id="name" placeholder="Nombre(s)" required=""/>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input class="form-control" name="last-name" type="text" id="last-name" placeholder="Apellidos" required=""/>
        </div>
      </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
      <input class="form-control" name="email" type="email" id="email" placeholder="Correo" required=""/>
    </div>

    <!-- Password input -->
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input class="form-control" name="password" type="password" id="password" placeholder="Contraseña" required=""/>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="form-outline">
          <input class="form-control" name="password_confirmed" type="password" id="password_confirmed" placeholder="Confirmar Contraseña" required=""/>
        </div>
      </div>
    </div>

    <!-- Checkbox -->
    <div class="form-check d-flex mb-4">
      <input class="form-check-input me-4" type="checkbox" value="" id="mostrar"/>
      <label class="form-check-label" for="form2Example33">
        Mostrar Contraseña
      </label>
    </div>

    <!-- Submit button -->
    <button onclick="registrarse()" type="submit" class="btn btn-primary btn-block mb-4" id="form-submit" disabled="false">
      Registrarse
    </button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Iniciar sesión con:</p>
      <button type="button" class="btn btn-link btn-floating mx-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
          <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
        </svg>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
      </button>
    </div>

@endsection
@section('Js2')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    //Mostrar-Ocultar contraseña
    $(document).ready(function () {
      $('#mostrar').click(function () {
        if ($('#mostrar').is(':checked')) {
          $('#password').attr('type', 'text');
          $('#password_confirmed').attr('type', 'text');
        }
        else {
          $('#password').attr('type', 'password');
          $('#password_confirmed').attr('type', 'password');
        }
      });
    });

    //Validar contraseñas
    $(document).ready(function () {
      $('#password_confirmed').on('input change', function () {
        if ($(this).val() != $('#password').val()) {
          $('#form-submit').prop('disabled', true);
        }
        else if($(this).val() == ""){
          $('#form-submit').prop('disabled', true);
        }
        else {
          $('#form-submit').prop('disabled', false);
        }
      });

      $('#password').on('input change', function () {
        if ($(this).val() != $('#password_confirmed').val()) {
          $('#form-submit').prop('disabled', true);
        }
        else if($(this).val() == ""){
          $('#form-submit').prop('disabled', true);
        }
        else {
          $('#form-submit').prop('disabled', false);
        }
      });
    });

    //Validar campos nulos
    $('#form-submit').click(function () {
      if ($('#name').val() == '') {
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El campo nombre es obligatorio',
        })
        return false;
      }
      if ($('#lastname').val() == '') {
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El campo apellido es obligatorio',
        })
        return false;
      }
      if ($('#email').val() == '') {
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El campo email es obligatorio',
        })
        return false;
      }
      if ($('#password').val() == '') {
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El campo contraseña es obligatorio',
        })
        return false;
      }
      if ($('#password_confirmed').val() == '') {
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El campo confirmar contraseña es obligatorio',
        })
        return false;
      }
    });

    //Validar correo y Registro
    function registrarse(){
      document.getElementById("form-submit").disabled = true;
      //ajax por metodo post
      $.ajax({
        url: "{{ route('registro.guardar') }}",
        type: "POST",
        data: {
          _token: "{{ csrf_token() }}",
          name: $('#name').val(),
          'last-name': $('#last-name').val(),
          email: $('#email').val(),
          password: $('#password').val(),
        },
        success: function(data){
          console.log(data);
          var data = JSON.parse(data);
          if(data == "existe"){
            Swal.fire({
              icon: 'error',
              type: 'error',
              title: 'Oops...',
              text: 'El correo ya existe',
            }).then((result) => {
              if (result.value) {
                document.getElementById("form-submit").disabled = false;
              }
            })
          }
          else if(data == "registrado"){
            //enviar a ruta Login
            window.location.href = "{{ route('login') }}";
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Usuario registrado correctamente',
              showConfirmButton: false,
              timer: 1500
            })
          }
        }
      });
    }

</script>
@endsection
