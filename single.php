<?php include('header.php') ?>

<body>
  <main class="single__page">

    <div class="single__container">
      <div class="single__page-wrap">
        <div class="single__page-images">
          <div class="card__image">
            <img src="img/kia.jpg" alt="auto">
          </div>
        </div>

        <div class="car-data-box">
          <div class="car-data">
            <div class="card__info">
              <div class="card__wrap">
                <span class="card__info-name">Hyundai Solaris</span>
                <span class="card__info-price">От 1500 руб / сутки</span>
                <!-- <div class="car__info"> -->
                  <ul class="list car__info-list">
                    <li><span class="car-feature">Марка авто:</span><span class="car-value">Hyundai</span></li>
                    <li><span class="car-feature">КПП:</span><span class="car-value">Механика</span></li>
                    <li><span class="car-feature">Год выпуска:</span><span class="car-value">2015</span></li>
                    <li><span class="car-feature">Двигатель:</span><span class="car-value">1.6</span></li>
                    <li><span class="car-feature">Тип топлива:</span><span class="car-value">Бензин</span></li>
                    <li><span class="car-feature">Пробег:</span><span class="car-value">150 тыс.км.</span></li>
                    <li><span class="car-feature">Руль:</span><span class="car-value">Левый</span></li>
                    <li><span class="car-feature">Цвет:</span><span class="car-value">Белый</span></li>
                  </ul>
                <!-- </div> -->
              </div>

            </div>
          </div>

          <div class="single__page-form">
          
            <form class="form" action="send.php" method="post">
            <h3>Арендовать автомобиль</h3>
              <label>
                <input type="text" name="name" placeholder="Ваше имя">
              </label>
              <label>
                <input type="tel" name="phone" placeholder="Телефон">
              </label>
              <label>
                <input type="date" name="start-date" placeholder="Начало аренды">
              </label>
              <label>
                <input type="date" name="end-date" placeholder="Окончание аренды">
              </label>
              <label>
                <textarea name="comment" placeholder="Ваше сообщение"></textarea>
              </label>
              <button class="btn" type="submit"><span class="btn-text">Арендовать</span></button>
            </form>
          </div>
          <!--single__page-form -->

        </div>

      </div>
      <!--single__page-wrap -->

      <div class="single__page-slider">
        слайдер
      </div>

    </div>

  </main>
  <?php include('footer.php') ?>