<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <div id="header">
    <div id="nav-top">
      <div class="container">
        <ul>
          <li class="link"><a href="#" title="">Quem somos</a></li>
          <li class="link"><a href="#" title="">Leis e normas para leigos</a></li>
          <li class="link"><a href="#" title="">Ajude a prevenir acidentes de elevadores</a></li>
          <li class="redes rfirst"><a href="#" title=""><i class="fas fa-play"></i></a></li>
          <li class="redes"><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
          <li class="redes"><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
        </ul>
      </div>
    </div>
    <div id="logo-top">
      <div class="container">
        <div class="row">
          <div class="col-md-5 logo-boxa">
            <a href="" title="">
              <img class="img-fluid logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>"/>
            </a>
          </div>
          <div class="col-md-7 logo-boxb">
            <div class="logo-desc">
              <h1>Elevador clandestino - Perigo invisível!</h1>
              <h5>Para que o mal triunfe, basta que os bons não façam nada.</h5>
            </div>
            <a class="btn-nav" href="#" title="">
              <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-auto"><a href="#" title="">Página inicial</a></div>
          <div class="col-auto"><a href="#" title="">Mapa dos Acidentes</a></div>
          <div class="col-auto"><a href="#" title="">Notícias</a></div>
          <div class="col-auto"><a href="#" title="">Jurídico</a></div>
          <div class="col-auto"><a href="#" title="">Relatos das vítimas</a></div>
          <div class="col-auto"><a href="#" title="">Orientação</a></div>
          <div class="col-auto"><a href="#" title="">TV Elevador Legal</a></div>
          <div class="col-auto"><a href="#" title="">Fale Conosco</a></div>
          <div class="lupa"><a href="#" title=""><i class="fas fa-search"></i></a></div>
        </div>
      </div>
    </nav>
    <div id="myNav" class="overlay">
      <!-- Overlay content -->
      <div class="overlay-content">
        <a href="<?php echo esc_url( home_url( '' ) ); ?>" title="">Home</a>
        <a href="<?php echo esc_url( home_url( 'o-shinzushi' ) ); ?>" title="aboutus">About Us</a>
        <a href="<?php echo esc_url( home_url( 'equipe' ) ); ?>" title="team">Team</a>
        <a href="<?php echo esc_url( home_url( 'menu' ) ); ?>" title="menu">Menu</a>
        <a href="<?php echo esc_url( home_url( 'fotos' ) ); ?>" title="gallery">Gallery</a>
        <a href="<?php echo esc_url( home_url( 'imprensa' ) ); ?>" title="press">Press</a>
        <a href="<?php echo esc_url( home_url( 'contato' ) ); ?>" title="contactus">Contact Us</a>
      </div>
    </div>
  </div>

