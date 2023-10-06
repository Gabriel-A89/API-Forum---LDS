@extends('common.mdb-pagewithmenu')

@section('content')

@include('parts.public-navbar')

<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Forum FLASH</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('bootstrap/bootstrap.min.css.map')}}" rel="stylesheet"> 

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/forumflash.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

  </head>

<body>


  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>


  <header>




  </header>
  
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Participe do Fórum</h2>
                    <p>Nossa Plataforma, vai te conectar com pessoas do mundo inteiro.<br>
                    Você pode sanar suas duvidas de diversos temas.<br>
                    Participe da forum flash</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="#">COMEÇAR</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/slider-dec.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>Compartilhe suas ideias</h4>
            <img src="{{asset('assets/images/heading-line-dec.png')}}" alt="">
            <p> Neste fórum, vamos explorar como a tecnologia está mudando a forma como aprendemos. Hoje, podemos aprender quase qualquer coisa online, graças a cursos, tutoriais em vídeo e aplicativos educacionais. Como a tecnologia está impactando sua jornada de aprendizado? Compartilhe suas experiências e dicas sobre como aproveitar ao máximo as oportunidades de aprendizado tecnológico. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Fórum</h4>
            <p>O fórum está cheio de temas e posts para você interagir</p>
            <div class="text-button">
              <a href="#">Ler mais <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Blog</h4>
            <p>Com seu perfil, você pode fazer posts, sobre um tema, dia a dia ou algo mais técnico.</p>
            <div class="text-button">
              <a href="#">Ler mais <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Notícias</h4>
            <p>A fórum flash está cheio de noticias para você se manter informado no mundo da tecnologia e da informação</p>
            <div class="text-button">
              <a href="#">Ler mais <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>Quiz</h4>
            <p>Aqui você também poderá aprender com nosso sistema de perguntas.</p>
            <div class="text-button">
              <a href="#">Ler mais <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Scripts -->
  <script src=" {{ asset('jquery/jquery.js') }}"></script>
  <script src=" {{ asset('jquery/jquery.min.js') }}"></script>
  <script src=" {{ asset('jquery/jquery.slim.js') }}"></script>
  <script src=" {{ asset('jquery/jquery.slim.min.js') }}"></script>
  <script src=" {{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/animation.js') }}"></script>
  <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('assets/js/popup.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
@include('parts.public-footer')

@endsection