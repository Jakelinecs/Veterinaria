<!DOCTYPE html>
<html class="wide wow-animation desktop landscape html-modal-open translated-ltr rd-navbar-static-linked" lang="es">

<head>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->

  <!--
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
-->


  <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.css')  }}">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/fonts.css')  }}">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/style.css')  }}">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="{{ asset('assets/web/css/demo.css')  }}">
  <link rel="stylesheet" href="css/demo.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    element.style {
}
img {
    vertical-align: middle;
    border-style: none;
}
*, ::after, ::before {
    box-sizing: border-box;
}
img[Estilo de atributos] {
    width: 65px;
}
hoja de estilo de user-agent
img {
    overflow-clip-margin: content-box;
    overflow: clip;
}
    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }


    .header-top .header-top-logo {
    transition: all .2s ease-in-out;
    float: left;
    margin-top: 5px
}

.header-top .header-top-logo:hover {
    opacity: .7;
    cursor: pointer
}

  </style>

  <!--
<link rel="stylesheet"
    href="data:text/css;charset=utf-8;base64,Y2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gewogIGRpc3BsYXk6IGJsb2NrOwogIGJhY2tncm91bmQ6ICM0NTQ4NGQ7CiAgY29sb3I6ICNmZmY7CiAgbGluZS1oZWlnaHQ6IDEuNDU7CiAgcG9zaXRpb246IGZpeGVkOwogIHotaW5kZXg6IDkwMDAwMDAwOwogIHRvcDogMDsKICBsZWZ0OiAwOwogIHJpZ2h0OiAwOwogIHBhZGRpbmc6IC41ZW0gMWVtOwogIHRleHQtYWxpZ246IGNlbnRlcjsKICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lOwogICAgIC1tb3otdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgIC1tcy11c2VyLXNlbGVjdDogbm9uZTsKICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXVtkYXRhLXZpc2liaWxpdHk9ImhpZGRlbiJdIHsKICBkaXNwbGF5OiBub25lOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1tZXNzYWdlIHsKICBkaXNwbGF5OiBibG9jazsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gYSB7CiAgdGV4dC1kZWNvcmF0aW9uOiB1bmRlcmxpbmU7CiAgY29sb3I6ICNlYmViZjQ7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6aG92ZXIsCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGE6YWN0aXZlIHsKICBjb2xvcjogI2RiZGJlYjsKfQoKY2xvdWRmbGFyZS1hcHBbYXBwLWlkPSJhLWJldHRlci1icm93c2VyIl0gY2xvdWRmbGFyZS1hcHAtY2xvc2UgewogIGRpc3BsYXk6IGJsb2NrOwogIGN1cnNvcjogcG9pbnRlcjsKICBmb250LXNpemU6IDEuNWVtOwogIHBvc2l0aW9uOiBhYnNvbHV0ZTsKICByaWdodDogLjRlbTsKICB0b3A6IC4zNWVtOwogIGhlaWdodDogMWVtOwogIHdpZHRoOiAxZW07CiAgbGluZS1oZWlnaHQ6IDE7Cn0KCmNsb3VkZmxhcmUtYXBwW2FwcC1pZD0iYS1iZXR0ZXItYnJvd3NlciJdIGNsb3VkZmxhcmUtYXBwLWNsb3NlOmFjdGl2ZSB7CiAgLXdlYmtpdC10cmFuc2Zvcm06IHRyYW5zbGF0ZVkoMXB4KTsKICAgICAgICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgxcHgpOwp9CgpjbG91ZGZsYXJlLWFwcFthcHAtaWQ9ImEtYmV0dGVyLWJyb3dzZXIiXSBjbG91ZGZsYXJlLWFwcC1jbG9zZTpob3ZlciB7CiAgb3BhY2l0eTogLjllbTsKICBjb2xvcjogI2ZmZjsKfQo=">
  <link type="text/css" rel="stylesheet" charset="UTF-8"
    href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
-->



</head>


<body class="" style="">
  <div class="ie-panel"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img
        src="{{ asset('assets/web/images/ie8-panel/warning_bar_0000_us.jpg')  }}" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader loaded">
    <div class="preloader-body">
      <div class="cssload-container"><span></span><span></span><span></span><span></span>
      </div>
    </div>
  </div>


  <div class="page animated" style="animation-duration: 500ms;">
    <div id="home">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap " style="height: 106px;">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-original rd-navbar-static rd-navbar--is-stuck"
            data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
            data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle toggle-original"
                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html">
                  <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo.png') }}" width="50%" alt="Infyom Logo">
                </a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap toggle-original-elements">
                    <!-- RD Navbar Share-->

                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Hogar</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#news">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Noticias</font>
                          </font>
                        </a></li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Contactos</font>
                          </font>
                        </a></li>
                    </ul>



                  </div>
                </div>

                <div class=" ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @endauth
                </div>
            @endif

        </div>

              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-classic swiper-container-vertical"
        data-loop="true" data-autoplay="4859" data-simulate-touch="true" data-direction="vertical" data-nav="false">
        <div class="swiper-wrapper text-center"
          style="transform: translate3d(0px, -2968px, 0px); transition-duration: 0ms;">
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
            data-slide-bg="images/slider-1-slide-6-1770x742.jpg" data-swiper-slide-index="2"
            style="background-image: url(&quot;images/slider-1-slide-6-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Veterinaria C & B
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cuidando a tus mascotas con amor y dedicación.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>


          <div class="swiper-slide swiper-slide-duplicate-active" data-slide-bg="images/slider-1-slide-2-1770x742.jpg"
            data-swiper-slide-index="0"
            style="background-image: url(&quot;images/slider-1-slide-2-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Atenicon Clinica Veterinaria
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Desde nuestro establecimiento, hemos estado ofreciendo servicios de control y atencion clinica para nuestros amigos peludos.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/slider-1-slide-4-1770x742.jpg" data-swiper-slide-index="1"
            style="background-image: url(&quot;images/slider-1-slide-4-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">equipo experimentado</font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">nos comprometemos a brindar la mejor atención médica y cariño
                    a tus adorables compañeros peludos, buscando mejorar su calidad de vida y fomentar el
                    bienestar animal en nuestra comunidad.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
            data-slide-bg="images/slider-1-slide-6-1770x742.jpg" data-swiper-slide-index="2"
            style="background-image: url(&quot;images/slider-1-slide-6-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="not-animated">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Veterinaria C & B
                    </font>
                  </font>
                </h1>
                <p class="text-width-large not-animated" data-caption-animate="fadeInRight" data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cuidando a tus mascotas con amor y dedicación.</font>
                  </font>
                </p>
              </div>
            </div>
          </div>


          <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
            data-slide-bg="images/slider-1-slide-2-1770x742.jpg" data-swiper-slide-index="0"
            style="background-image: url(&quot;images/slider-1-slide-2-1770x742.jpg&quot;); background-size: cover; height: 742px;">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <h1 data-caption-animate="fadeInLeft" data-caption-delay="0" class="fadeInLeft animated">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Desarrollo de aplicaciones móviles
                    </font>
                  </font>
                </h1>
                <p class="text-width-large fadeInRight animated" data-caption-animate="fadeInRight"
                  data-caption-delay="100">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      Desde nuestro establecimiento, hemos estado entregando soluciones de software sostenibles y de
                      alta calidad para propósitos corporativos de negocios en todo el mundo.</font>
                  </font>
                </p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination__module">
          <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">01</span><span
              class="swiper-pagination__fraction-divider">/</span><span
              class="swiper-pagination__fraction-count">03</span></div>
          <div class="swiper-pagination__divider"></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
              class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
              class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        </div>
      </section>

    </div>






    <!-- Latest blog posts-->
    <section class="section section-sm bg-default" id="news">
      <div class="container">
        <h2>Últimas Entradas De Blog</h2>
        <div class="row row-45">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-10-370x307.jpg')  }}" alt="" width="370" height="307">
              </a>
              <h4 class="post-modern-title"><a href="#">Se busca </a></h4>
              <p class="post-modern-text">Responde al nombre de Tobby se lo bio por ultima ves por el mercado santa cruz.</p>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-11-370x307.jpg')  }}" alt="" width="370" height="307">
              </a>
              <h4 class="post-modern-title"><a href="#">Perritos en adopcion</a></h4>
              <p class="post-modern-text">Perritos mestisos con vacunas al dia y mucho amor por ofreser.</p>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
            <!-- Post Modern-->
            <article class="post post-modern"><a class="post-modern-figure" href="#"><img
                  src="{{ asset('assets/web/images/post-12-370x307.jpg')  }}" alt="" width="370" height="307">
              </a>
              <h4 class="post-modern-title"><a href="#">Gatitos en adopcion</a></h4>
              <p class="post-modern-text">son tranquilos y educados, tienen todas sus vacunas al dia,
                estan en busca de un hogar en donde brindar mucho amor</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact information-->
    <section class="section section-sm bg-default" id="contacts">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="tel:#">+591 7097909</a></p>
                <p class="box-contacts-link"><a href="tel:#">+591 63548171</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="#">Plan 3mil zona el recreo al frente del mercado el recreo</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="mailto:#">Patriciacondorifernandez936@gmail.com</a></p>
                <p class="box-contacts-link"><a href="mailto:#">info@vetc&b.org</a></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>


  </div>
  <!-- Javascript-->



  <!--

  <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-P9FT69"></script>

  <script type="text/javascript" async="" src="https://www.google-analytics.com/ga.js"></script>
-->

  <script src = "{{ asset('assets/web/js/core.min.js')  }}"></script>
  <script src = "{{ asset('assets/web/js/script.js')  }}"></script>

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>


  <!-- coded by Himic-->

  <!--LIVEDEMO_00 -->

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function () {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>

</body>

</html>

