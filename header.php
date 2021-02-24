<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="http://rent-a-car/wp-content/themes/rent-theme/js/jquery-3.5.1.min.js"></script>
  <link href="http://rent-a-car/wp-content/themes/rent-theme/css/lightbox.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title><?php wp_title("", true); ?></title>
  <?php wp_head();?>
</head>

<body>
  <header class="header-page">
    <div class="container">
      <div class="header__base">
        <a class="logo logo_header" href="/"><img src="<?php bloginfo('template_url') ?>/img/icons/logo.png"
            alt="logo"></a>
        <address class="header__address">
          <span class="header__location"><?php include('includes/address.php') ?></span>
          <span class="header__phone"><?php include('includes/phone.php') ?></span>
        </address>
      </div>
    </div>

    <nav class="nav">
      <div class="container nav-container">
        <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'main-menu list', 'theme_location' => 'header_menu' ) ); ?>
        <!-- <ul class="main-menu list">
        <li><a href="./page-about.php">О нас</a></li>
        <li><a href="./page-rent.php">Условия аренды</a></li>
        <li><a href="./page-lawyers.php">Юридическим лицам</a></li>
        <li><a href="./page-contacts.php">Контакты</a></li>
      </ul> -->
        <button class="hamb" type="button">
          <span class="hamb__line">
            <span class="visually-hidden">Открыть меню</span>
          </span>
        </button>
        <button class="close-menu" type="button">
          <span class="visually-hidden">Закрыть меню</span>
        </button>
      </div>
    </nav>
  </header>