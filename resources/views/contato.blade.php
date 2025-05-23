@extends('layouts.app')

@section('content')

<div id="banner-area" class="banner-area dark-bg-overlay" style="background-image:url(images/gallery/Foto\ \(18\).jpeg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contato</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="/home">Início</a></li>
                      <li class="breadcrumb-item"><a href="/portfolio">Portfólio</a></li>
                      <li class="breadcrumb-item"><a href="/contato">Contato</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center mb-4">
        <div class="col-12">
        <h3 class="section-sub-title">Entre em contato conosco!</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
            </span>
            <div class="ts-service-box-content">
            <h4>Nosso Email</h4>
            <p>italotg.tg@gmail.com</p>
            </div>
        </div>
        </div><!-- Col 1 end -->

        <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
            </span>
            <div class="ts-service-box-content">
            <h4>Nosso Número</h4>
            <p>(031) 99502-7890</p>
            </div>
        </div>
        </div><!-- Col 2 end -->
    </div><!-- Row end -->


    <div class="gap-60"></div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Dúvidas, sugestões e elogios:</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        <form id="contact-form" action="#" method="post" role="form">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Assunto</label>
                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Mensagem</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
              required></textarea>
          </div>
          <div class="text-right"><br>
            <button class="btn btn-primary solid blank" type="submit">Enviar Mensagem</button>
          </div>
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection