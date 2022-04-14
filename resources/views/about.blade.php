@extends('template.fondo')
@section('Barra')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('index') }}">Inicio</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('acerca') }}">Acerca De Nosotros
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
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

        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/profile.php?id=100064101466027"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://github.com/VibeFJ"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

@endsection
