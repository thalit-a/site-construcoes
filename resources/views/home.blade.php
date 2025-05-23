@extends('layouts.app')

@section('content')
  <div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item dark-bg-overlay" style="background-image:url(images/gallery/Foto\ \(28\).jpeg)">
        <div class="slider-content">
            <div class="container h-100">
              <div class="row align-items-center h-100">
                  <div class="col-md-12 text-center">
                    <h2 class="slide-title" data-animation-in="slideInLeft">12 anos de excelência em </h2>
                    <h3 class="slide-sub-title" data-animation-in="slideInRight">Construções em Madeira</h3>
                    <p data-animation-in="slideInLeft" data-duration-in="1.2">
                        <a href="/portfolio" class="slider btn btn-primary">Nossos Serviços</a>
                        <a href="/contato" class="slider btn btn-primary border">Entre em Contato</a>
                    </p>
                  </div>
              </div>
            </div>
        </div>
    </div>

    <div class="banner-carousel-item dark-bg-overlay" style="background-image:url(images/gallery/Foto\ \(19\).jpeg)">
      <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h3 class="slide-title" data-animation-in="fadeIn">Quando o serviço é importante</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft">Sua escolha é simples</h3>
                  <p data-animation-in="slideInRight">
                      <a href="/portfolio" class="slider btn btn-primary border">Nossos Serviços</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>

    <div class="banner-carousel-item dark-bg-overlay" style="background-image:url(images/gallery/Foto\ \(2\).jpeg)">
      <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">Da estrutura ao acabamento:</h3>
                  <h2 class="slide-title" data-animation-in="slideInDown">Montamos sua casa de madeira com cuidado e tradição.</h2>
                  <div data-animation-in="slideInLeft">
                      <a href="/contato" class="slider btn btn-primary" aria-label="contact-with-us">Faça já sua cotação!</a>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <section class="call-to-action-box no-padding">
    <div class="container">
      <div class="action-style-box1">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title1">Nós entendemos suas necessidades em construção</h3>
                </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-dark" href="/contato">Solicitar orçamento</a>
                </div>
            </div><!-- col end -->
          </div><!-- row end -->
      </div><!-- Action style box -->
    </div><!-- Container end -->
  </section><!-- Action end -->

  <section id="ts-features" class="ts-features">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
                <h3 class="into-sub-title">Foco em qualidade e confiança</h3>
                <p>A Ítalo Construções é uma empresa familiar especializada em madeira, unindo tradição e experiência para transformar projetos em ambientes acolhedores,
                  feitos com qualidade, cuidado e atenção aos detalhes.</p>
            </div><!-- Intro box end -->

            <div class="gap-20"></div>

            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-trophy"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Comprometimento com a Qualidade</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-sliders-h"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Execução detalhista</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->

            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-thumbs-up"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Pontualidade e Responsabilidade</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->

                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-users"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Experiência e Especialização</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->

          <div class="col-lg-6 mt-4 mt-lg-0">
              <img loading="lazy" src="images/gallery/Foto (27).jpeg" class="dark-bg-overlay" height="400" width="auto">
          </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->

  <section id="facts" class="facts-area dark-bg">
    <div class="container">
      <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-4 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                  <h3 class="ts-facts-title">Projetos executados</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="31200">0</span></h2>
                  <h3 class="ts-facts-title">Horas trabalhadas</h3>
                </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="37">0</span></h2>
                  <h3 class="ts-facts-title">Regiões atendidas</h3>
                </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->

  <section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h3 class="section-sub-title">Somos especialistas em:</h3>
          </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Montagem de casas em madeira com tradição e precisão.</p>
                </div>
            </div><!-- Service 1 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Corrimãos de madeira alinhados com segurança e estilo.</p>
                </div>
            </div><!-- Service 2 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Acabamentos em madeira que valorizam cada detalhe do seu espaço.</p>
                </div>
            </div><!-- Service 3 end -->

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="images/gallery/Carpinteiro.png" alt="service-avater-image">
          </div><!-- Col end -->

          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Telhados em madeira feitos para durar e impressionar.</p>
                </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Portas assentadas com cuidado e ajuste perfeito.</p>
                </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <p>Forros em madeira instalados com capricho e acabamento impecável.</p>
                </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end -->
      </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
  </section><!-- Service end -->

  <section class="subscribe no-padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
            <div class="subscribe-call-to-acton">
                <h3>Podemos ajudar?</h3>
                <h4>(031) 99502-7890</h4>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-8">
            <div class="ts-newsletter row align-items-center">
                <div class="col-md-5 newsletter-introtext">
                  <h4 class="text-white mb-0">Cadastre seu email</h4>
                  <p class="text-white">Entraremos em contato</p>
                </div>

                <div class="col-md-7 newsletter-form">
                  <form action="#" method="post">
                      <div class="form-group">
                        <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                        <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Digite seu email e pressione Enter" autocomplete="off">
                      </div>
                  </form>
                </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->

      </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
  </section>
@endsection
