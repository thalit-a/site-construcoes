<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Italo Construções Madeira - Casas de Madeira, Telhados e Forros</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Italo Construções Madeira: especialistas na construção de casas de madeira, forros, telhados, decks e estruturas personalizadas. Qualidade, durabilidade e beleza em madeira.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Italo Construções Madeira">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="casas de madeira, construção em madeira, forros de madeira, telhados de madeira, decks de madeira, estruturas de madeira, obras em madeira, arquitetura sustentável">
    <meta name="language" content="Portuguese">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Italo Construções Madeira - Casas de Madeira, Telhados e Forros">
    <meta property="og:description" content="Construímos casas de madeira, forros, telhados e estruturas personalizadas. Qualidade, durabilidade e beleza em madeira.">
    <meta property="og:url" content="https://www.seusite.com.br">
    <meta property="og:image" content="https://www.seusite.com.br/images/og-image.jpg">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Italo Construções Madeira">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Italo Construções Madeira - Casas de Madeira, Telhados e Forros">
    <meta name="twitter:description" content="Especialistas na construção de casas, forros e telhados em madeira, com qualidade e durabilidade.">
    <meta name="twitter:image" content="https://www.seusite.com.br/images/og-image.jpg">
    <meta name="twitter:site" content="@seuusuario">

    <link rel="canonical" href="https://www.seusite.com.br">
    <link rel="icon" type="icon" href="{{ asset('images/favicon.ico') }}">


    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        @include('layouts.navbar')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('layouts.footer')
    </footer>

    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <script src="plugins/shuffle/shuffle.min.js" defer></script>
    <script src="js/script.js"></script>

    <a href="https://wa.me/5531995027890?text=Olá%2C%20gostaria%20de%20solicitar%20um%20or%C3%A7amento!" target="_blank" class="whatsapp-btn">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
    @yield('script')
</body>
</html>