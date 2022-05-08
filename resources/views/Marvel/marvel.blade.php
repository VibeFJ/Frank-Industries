@extends('template.fondo')
@section('Barra')
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('index') }}">Inicio
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('acerca') }}">Personajes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contacto') }}">Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar Sesi&oacute;n</a>
    </li>
@endsection
@section('Contenido')

    <!-- Contenido de Pagina -->
    <!-- Carrusel -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            <img src="assets/images/banner-item-01.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 12, 2020</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-02.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="post-details.html"><h4>Donec porttitor augue at velit</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 14, 2020</a></li>
                  <li><a href="#">24 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-03.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="post-details.html"><h4>Best HTML Templates on TemplateMo</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 16, 2020</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-04.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>
                <a href="post-details.html"><h4>Responsive and Mobile Ready Layouts</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 18, 2020</a></li>
                  <li><a href="#">48 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-05.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>
                <a href="post-details.html"><h4>Cras congue sed augue id ullamcorper</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 24, 2020</a></li>
                  <li><a href="#">64 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-06.jpg" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="post-details.html"><h4>Suspendisse nec aliquet ligula</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 26, 2020</a></li>
                  <li><a href="#">72 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Seccion de Descarga -->
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Seccion de Contenido -->
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/Image1.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Conceptos</span>
                      <a href="1_sistemas"><h4>Sistemas de Informaci&oacute;n</h4></a>
                      <p>Un sistema de informaci&oacute;n es un conjunto de datos que interact&uacute;an entre s&iacute; con un fin com&uacute;n.
                          La importancia de un sistema de informaci&oacute;n radica en la eficiencia en la correlaci&oacute;n de una gran cantidad
                          de datos ingresados a trav&eacute;s de procesos diseñados para cada área con el objetivo de producir informaci&oacute;n
                          válida para la posterior toma de decisiones.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a>UPT</a>,</li>
                              <li><a>Tec&aacute;mac</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a></li>
                              <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog">Ver m&aacute;s Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>&Uacute;ltimos Comentarios</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a>
                          <h5>Interesante tu blog como portafolio de Evidencias, muy bueno y muy interesante</h5>
                          <span>Ene 28, 2022</span>
                        </a></li>
                        <li><a>
                          <h5>Buena informaci&oacute;n y un gran blog el que hiciste, mucha suerte y gracias por la informaci&oacute;n</h5>
                          <span>Ene 18, 2022</span>
                        </a></li>
                        <li><a>
                          <h5>Me gusto el diseño de tu blog, es muy bueno y muy interesante excelente trabajo</h5>
                          <span>Ene 10, 2022</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Trabajos Realizados</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Hobbies/F</a></li>
                        <li><a href="#">- Uso Orientado a Objetos</a></li>
                        <li><a href="#">- Juego Cl&aacute;sicos</a></li>
                        <li><a href="#">- QSMN/F</a></li>
                        <li><a href="#">- Batalla Naval</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Lenguajes & Frameworks</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Php</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">C#</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">C</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
