@extends('template.fondo')
@section('Barra')
@yield('Barra2')
@endsection
@section('Contenido')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            @yield('Descript')
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="text-center">
  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          @yield('Form')
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
@section('Js')
@yield('Js2')
@endsection
