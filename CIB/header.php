<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?=get_template_directory_uri()?>/assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/bootstrap.min.css">

  <!-- Icon Font CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/icons.min.css">

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/plugins.css">

  <!-- Main Style CSS -->
  <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">

  <!-- Modernizer JS -->
  <script src="<?=get_template_directory_uri()?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>

  <!-- google fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Source+Sans+Pro&display=swap" rel="stylesheet">

  <?php wp_head(); // faz os scripts funcionar e os plugins do wordpress ?>

</head>

<body <?php body_class(); // retorna um conjuto de class do wp, estilo um mapa, para customização no tema ?>>
