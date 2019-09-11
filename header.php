<!DOCTYPE html>
<html lang="en">
<head>

  <!-- BASIC
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="icon" type="image/png" href="/wp-content/themes/portion.uk/favicon.png">
  <meta name="title" content="Portion">


  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/wp-content/themes/portion.uk/style.css?version=<?php echo round(microtime(true) * 1000) ?>">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/wp-content/themes/portion.uk/assets/js/base.js"></script>
  <script src="/wp-content/themes/portion.uk/assets/js/tilt.js"></script>
  <script src="/wp-content/themes/portion.uk/assets/js/mobile-nav.js"></script>
  <script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>

  <!-- Jarallax -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax.min.js"></script>

<!-- Include it if you want to use Video parallax -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-video.min.js"></script>

<!-- Include it if you want to parallax any element -->
<script src="https://unpkg.com/jarallax@1.10/dist/jarallax-element.min.js"></script>

  <script>
    new ClipboardJS('.copy-link');
  </script>


  <!-- AOS -->

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144714100-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-144714100-1');
  </script>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSDNL8S');</script>
<!-- End Google Tag Manager -->


  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

  <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>


  <?php wp_head(); ?>

  <style>
    body {
      margin-top: 0px!important;
    }
  </style>

</head>
<body style="width: auto;">

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSDNL8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="bottom-frame"></div>

  <!-- NAV
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <div class="nav">
    <div class="container">
      <a class="logo" href="/"><img class="nav-logo" alt="molino logo" title="molino logo" src="/wp-content/themes/portion.uk/assets/images/portion-logo-green.png" id="logo" width="300" height="auto" ></a>
      <ul class="navbar-list">
        <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </ul>
      <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </nav>
    </div>
    </div>
</div>

<!-- END HEADER -->
