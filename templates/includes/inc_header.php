<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo isset($d->title) ? $d->title .' - '.get_sitename() : 'Bienvenido - '.get_sitename()  ?></title>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

  <style>
    .button-container {
      display: inline-block;
      position: relative;
    }

    .button-container a {
      position: absolute;
      bottom: 7em;
      right: 4em;
      background-color: #8F0005;
      border-radius: 1.5em;
      color: white;
      text-transform: uppercase;
      padding: 1em 1.5em;
    }

    @media (max-width: 1000px) {
      .button-container a {
        bottom: 4em;
      }
    }

    @media (max-width: 720px) {
      .button-container a {
        bottom: -2em;
      }
      
      .button-container {
        text-align: center;
        margin: auto;
      }
    }
</style>
<!-- ----------Styles------ -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo CSS.'bootstrap.min.css' ?>">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="<?php echo CSS.'niceselect.css' ?>">
<!-- Fancy Box CSS -->
<link rel="stylesheet" href="<?php echo CSS.'jquery.fancybox.min.css' ?>">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="<?php echo CSS.'font-awesome.min.css' ?>">
<!-- Fancy Box CSS -->
<link rel="stylesheet" href="<?php echo CSS.'cube-portfolio.min.css' ?>">
<!-- Animate CSS -->
<link rel="stylesheet" href="<?php echo CSS.'animate.min.css' ?>">
<!-- Slick Nav CSS -->
<link rel="stylesheet" href="<?php echo CSS.'slicknav.min.css' ?>">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo CSS.'magnific-popup.css' ?>">
<!-- owl carousel min css -->
<link rel="stylesheet" href="<?php echo CSS.'owl.carousel.min.css' ?>">
<!-- Eduland Stylesheet -->
<link rel="stylesheet" href="<?php echo CSS.'normalize.css' ?>">
<link rel="stylesheet" href="<?php echo CSS.'style.css' ?>">
<link rel="stylesheet" href="<?php echo CSS.'responsive.css' ?>">
<!-- Eduland Colors -->
<link rel="stylesheet" href="<?php echo CSS.'colors/color1.css' ?>">

</head>

<body style="overflow-x: hidden !important;">
<!-- ends inc_header.php -->

<!-- Header -->
<header class="header" style="position: fixed; top: 0; width: 100%;z-index: 999;">
  <!-- Header Inner -->
  <div class="header-inner overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-12">
        <!-- Logo -->
        <div class="logo">
          <a href="/"><img src="<?php echo IMAGES.'logo_ciis.svg'?>" style="width: 120px !important; margin: 10px 10px;" alt="CIIS XXI"></a>
        </div>
        <!--/ End Logo -->
        <div class="mobile-menu"></div>
      </div>
      <div class="col-lg-10  col-12">
        <div class="menu-bar">
          <nav class="navbar navbar-default">
            <div class="navbar-collapse">
              <!-- Main Menu -->
              <ul id="nav" class="nav menu navbar-nav" style="letter-spacing:-0.5px">
                <li class=" active"><a href="/"><i class="fa fa-home"></i>INICIO</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div> 
</header>
<!-- End Header -->