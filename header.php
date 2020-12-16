<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <title>Аренда авто</title>
</head>
<header class="header-page">
  <div class="container">
    <div class="header__base">
      <a href="index.php"><img src="img/icons/logo.png" alt="logo"></a>
      <address class="header__address">
        <span class="header__location"><?php include('./includes/address.php') ?></span>
        <?php include('./includes/phone.php') ?>
      </address>
    </div>
  </div>

  <nav class="nav">
    <div class="container nav-container">
      <ul class="main-menu list">
        <li><a href="./page-cars.php">Автомобили</a></li>
        <li><a href="./page-about.php">О нас</a></li>
        <li><a href="./page-rent.php">Условия аренды</a></li>
        <li><a href="./page-lawyers.php">Юридическим лицам</a></li>
        <li><a href="./page-contacts.php">Контакты</a></li>
      </ul>
    </div>
    <button class="hamb" type="button">
      <span class="hamb__line">
        <span class="visually-hidden">Открыть меню</span>
      </span>
    </button>
    <button class="close-menu" type="button">
      <span class="visually-hidden">Закрыть меню</span>
    </button>
  </nav>
</header>
