<?php
$contentsLang = file_get_contents("./data/languages.json");
$contentsLang = json_decode($contentsLang);

session_start();

$lang = 'pt';

$jsonFile = './data/menuData.json';
$data = json_decode(file_get_contents($jsonFile), true);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Markas Digital</title>
  <meta name="url" content="https://markasdigital.com.br" />
  <meta name="title" content="Markas Digital" />
  <meta name="image" content="https://markasdigital.com.br/assets/img/logoverde.png">
  <meta name="description" content="A Markas Digital é uma empresa com atuação nos mercados nacional e internacional, localizada em Santos/SP, especializada em soluções para as empresas do agronegócio." />
  <meta name="keywords" content="Markas Digital, profissional empresarial, Agronegócio" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="./assets/img/verde.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php

  $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
  switch ($file) {
    case "servicos":
    case "servicos.php":
      $video = "video1.mp4";
      $h1 = "";
      break;
    case "proposito":
    case "proposito.php":
      $video = "video5.mp4";
      $h1 = "";
      break;
    case "solucoes":
    case "solucoes.php":
      $video = "video4.mp4";
      $h1 = "";
      break;
    case "contato":
    case "contato.php":
      $video = "video3.mp4";
      $h1 = "";
      break;
    default:
      $video = "video2.mp4";
      $h1 = "";
      break;
  }

  ?>

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <a class="navbar-brand" href="index.php?v=1">
            <img src="./assets/img/logo1.png" width="12%" class="d-inline-block align-top" alt="Markas">
          </a>
          <nav id="navbar" class="navbar">
            <ul>
              <?php foreach ($data as $item) {
                echo '<li><a class="nav-link scrollto" href="' . $item['href'] . ' ">' . $item['title'] . '</a></li>';
              } ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </div>

    </div>
  </header>

  <div class="banner">
    <h1><?php echo $h1; ?></h1>
    <video id="videoAuto" muted autoplay controls playsinline style="width:100%; height: 100%;" src="./assets/img/<?php echo $video ?>">
    </video>
  </div>

  <script>
    $(document).ready(function() {
      $("#videoAuto").trigger('click');
    });
  </script>