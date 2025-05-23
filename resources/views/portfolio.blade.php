@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">

<div id="banner-area" class="banner-area dark-bg-overlay" style="background-image:url(images/gallery/Foto\ \(29\).jpeg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Portfólio</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="/home">Início</a></li>
                      <li class="breadcrumb-item"><a href="/contato">Contato</a></li>
                      <li class="breadcrumb-item"><a href="/portfolio">Portfólio</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box2">
      <div class="text-center">
        <h1 class="action-title">Galeria de Imagens</h1>
      </div>
    </div>
  </div>
</section>

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row gx-3 gy-3">
      <?php
      for ($i = 1; $i <= 29; $i++) {
        echo '
          <div class="col-lg-4 col-md-6">
            <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <a href="images/gallery/Foto (' . $i . ').jpeg" data-lightbox="galeria" data-title="Foto ' . $i . '">
                  <img loading="lazy" class="w-100" src="images/gallery/Foto (' . $i . ').jpeg" alt="Imagem da galeria" style="height: 300px; object-fit: cover; border-radius: 3px;">
                </a>
              </div>
            </div>
          </div>
        ';
      }
      ?>
    </div>
  </div>
</section>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>   
@endsection