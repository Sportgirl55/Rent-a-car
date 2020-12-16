<?php include('header.php') ?>
<body>
  <main class="front-page">
    <div class="hero">
      <div class="inner">
        <h1 class="title-section">Аренда автомобилей в Улан-Удэ</h1>
        <ul class="list list_features">
          <li>Надежные автомобили различных марок и комплектации</li>
          <li>Выгодные условия аренды</li>
          <li>Быстрый и удобный сервис без проволочек</li>
        </ul>
        <button class="btn hero__btn" type="button">Найти автомобиль</button>
      </div>
      <div class="image">
        <img src="img/main-img.png" alt="">
      </div>
    </div>

    <section class="rent">
      <h2 class="title-section">Как арендовать автомобиль</h2>
      <ul class="list container list_rent">

        <li class="item">
          <div class="icon">
            <span class="visually-hidden">иконка Выберите подходящий для вас автомобиль и нажмите кнопку
              “арендовать”</span>
          </div>
          <h3>Выберите авто</h3>
          <p>Выберите подходящий для вас автомобиль и нажмите кнопку “арендовать”</p>
        </li>

        <li class="item">
          <div class="icon">
            <span class="visually-hidden">иконка Выберите подходящий для вас автомобиль и нажмите кнопку
              “арендовать”</span>
          </div>
          <h3>Заполните форму</h3>
          <p>Оставьте заявку на сайте, заполнив поля формы (ваше имя, дата аренды)</p>
        </li>

        <li class="item">
          <div class="icon">
            <span class="visually-hidden">иконка Выберите подходящий для вас автомобиль и нажмите кнопку
              “арендовать”</span>
          </div>
          <h3>Дождитесь звонка</h3>
          <p>С вами свяжется менеджер для уточнения деталей</p>
        </li>

        <li class="item">
          <div class="icon">
            <span class="visually-hidden">иконка Выберите подходящий для вас автомобиль и нажмите кнопку
              “арендовать”</span>
          </div>
          <h3>Заберите авто</h3>
          <p>Заберите арендованный вами автомобиль из автопарка и наслаждайтесь поездкой</p>
        </li>

      </ul>

    </section>

    <section class="cars">

      <h2 class="title-section">Автомобили</h2>

      <ul class="list container list_cars">
        <li class="card">
          <div class="card__image">
            <img src="img/hyundai.jpg" alt="auto">
          </div>
          <div class="card__data">
            <ul class="card__tags">
              <li>
                <span class="tag-icon"></span>
                <span class="tag-text">текст иконки</span>
              </li>
              <li>
                <span class="tag-icon"></span>
                <span class="tag-text">текст иконки</span>
              </li>
              <li>
                <span class="tag-icon"></span>
                <span class="tag-text">текст иконки</span>
              </li>
              <li>
                <span class="tag-icon"></span>
                <span class="tag-text">текст иконки</span>
              </li>
            </ul>
            <div class="card__info">
              <div>
                <span class="card__info-name">Hyundai Solaris</span>
                <span class="card__info-price">От 1500 руб / сутки</span>
              </div>
              <a class="btn card__info-btn" href="single.php">Арендовать</a>
            </div>
          </div>
        </li><!-- card -->
      </ul>

    </section>

  </main>
  <?php include('footer.php') ?>