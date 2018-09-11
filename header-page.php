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
  <div id="cabecalho">
    <div class="container">
      <nav id="menu">
        <ul>
          <li><a href="<?php echo home_url( '' ); ?>" title="">SERVIÇOS</a></li>
          <li><a href="<?php echo home_url( '' ); ?>" title="">PORTIFÓLIO</a></li>
          <li><a href="<?php echo home_url( '' ); ?>" title="">CONTATO</a></li>
        </ul>
      </nav>
      <div class="bx row">
        <div class="col-6 esq">
          <a href="<?php echo home_url( '' ); ?>" title="">
            <img class="wow animated fadeInUp" id="logo" src="<?php echo dirname( get_bloginfo('stylesheet_url')); ?>/assets/img/mundo.png" alt="">
          </a>
        </div>
        <div class="col-6 dir">
          <h1 class="wow animated fadeInUp">Bem-vindo ao fantástico universo das empresas que se comunicam</h1>
          <br><br><br><br>
        </div>
      </div>
    </div>
  </div>

