<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo isset($d->title) ? $d->title : 'Académicas Sin Fronteras'  ?></title>

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="Educación, economía, salud, medio ambiente, ciencia y tecnología, social, político , psicológico,  university, universidad, SOCIEDAD LÍQUIDA: DESAFÍOS Y ESTRATEGIAS PARA LOS NUEVOS TIEMPOS, VIII Encuentro Internacional de Académicas Sin Fronteras, Universidad Nacional Jorge Basadre Grohmann, Universidad Santo Tomás – Chile, Universidad Privada de Tacna - Perú, Universidad Mayor de San Simón - Bolivia">
  <meta name="description" content="VIII Encuentro Internacional de Académicas Sin Fronteras.">
  <meta property="og:image" content='<?php echo IMAGES."imagen20.jpg" ?>'>

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

    .text-align-justify {
      text-align: justify
    }

    .color-primary {
      color: #FFB000 !important;
    }

    .background-black {
      background-color: #52504B !important;
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Nice Select CSS -->
<link rel="stylesheet" href="<?php echo CSS.'niceselect.css' ?>">
<!-- Fancy Box CSS -->
<link rel="stylesheet" href="<?php echo CSS.'jquery.fancybox.min.css' ?>">
<!-- Font Awesome CSS -->
<script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>
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

<!-- Header -->
<header class="header" style="position: fixed; top: 0; width: 100%;z-index: 999;">
  <!-- Header Inner -->
  <div class="header-inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-12">
        <!-- Logo -->
        <div class="logo">
          <a href="<?php echo URL ?>"><img src="<?php echo IMAGES.'logo02.png'?>" style="width: 200px !important; margin: 10px 10px;" alt="ENCUENTRO INTERNACIONAL"></a>
        </div>
        <!--/ End Logo -->
        <div class="mobile-menu"></div>
      </div>
      <div class="col-lg-10  col-12 ">
        <div class="menu-bar">
          <nav class="navbar navbar-default">
            <div class="navbar-collapse">
              <!-- Main Menu -->
              <ul id="nav" class="nav menu navbar-nav" style="letter-spacing:-0.5px">
                <li class=" active"><a href="<?php echo URL ?>"><i class="fa fa-home"></i>INICIO</a></li>
                <li>
                  <a href="#"><i class="fa fa-suitcase"></i>COMITES</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo URL.'comite/internacional' ?>">COMITE INTERNACIONAL</a></li>
                    <li><a href="<?php echo URL.'comite' ?>">COMITE ORGANIZADOR</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-clone"></i>INFORMACIÓN</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo URL.'inscripcion' ?>">INSCRIPCIONES</a></li>
                    <li><a href="#">PONENCIAS</a></li>
                    <li><a href="#">ENSAYOS</a></li>
                    <li><a href="#">INVESTIGACIÓN</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo URL.'antecedente' ?>"><i class="fa fa-bullhorn"></i>ANTECEDENTES</a></li>
                <li><a href="#"><i class="fas fa-images"></i>VIDEOS Y FOTOS</a></li>
              </ul>
              <!-- End Main Menu -->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div> 
  <!--/ End Header Inner -->
</header>
<!-- End Header -->