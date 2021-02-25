<?php get_header(); ?>
<main class="single__page">

  <div class="container single__container">
    <div class="single__page-wrap">
      <div class="cars__photo">
        <ul class="cars__photo-list list">
          <li><a href="http://rent-a-car/wp-content/themes/rent-theme/img/chevrolet.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/chevrolet.jpg" alt=""></a></li>
          <li><a href="http://rent-a-car/wp-content/themes/rent-theme/img/hyundai1.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/hyundai1.jpg" alt=""></a></li>
          <li> <a href="http://rent-a-car/wp-content/themes/rent-theme/img/hyundai.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/hyundai.jpg" alt=""></a></li>
          <li><a href="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" alt=""></a></li>
          <li><a href="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" alt=""></a></li>
          <li><a href="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" data-lightbox="cars"><img
                src="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" alt=""></a></li>
        </ul><!-- cars__photo-list -->
      </div> <!--cars__photo -->


      <div class="car-data-box">
        <div class="car-data">
          <div class="card__info">
            <div class="card__wrap">
              <span class="card__info-name"><?php the_title(); ?></span>
              <span class="card__info-price">От <?php the_field('czena'); ?> руб / сутки</span>
              <!-- <div class="car__info"> -->
              <ul class="car__info-list">
                <li><span class="car-feature">Марка авто:</span><span class="car-value">Hyundai</span></li>
                <li><span class="car-feature">КПП:</span><span
                    class="car-value"><?php the_field('korobka_peredach'); ?></span></li>
                <li><span class="car-feature">Год выпуска:</span><span class="car-value">2015</span></li>
                <li><span class="car-feature">Двигатель:</span><span class="car-value"><?php the_field('litry'); ?>
                    л</span></li>
                <li><span class="car-feature">Расход топлива</span><span
                    class="car-value"><?php the_field('rashod_topliva'); ?> л/100 км</span></li>
                <li><span class="car-feature">Тип топлива:</span><span
                    class="car-value"><?php the_field('tip_topliva'); ?></span></li>
                <li><span class="car-feature">Пробег:</span><span class="car-value"><?php the_field('probeg'); ?>
                    тыс.км.</span></li>
                <li><span class="car-feature">Руль:</span><span class="car-value"><?php the_field('rul'); ?></span></li>
                <li><span class="car-feature">Цвет:</span><span class="car-value"><?php the_field('czvet'); ?></span>
                </li>
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
              <span class="input-title">Начало аренды:</span>
              <input type="date" name="start-date" placeholder="Начало аренды">
            </label>
            <label>
              <span class="input-title">Окончание аренды:</span>
              <input type="date" name="end-date" placeholder="Окончание аренды">
            </label>
            <label>
              <textarea name="comment" placeholder="Ваше сообщение"></textarea>
            </label>
            <button class="btn" type="submit"><span class="btn-text">Арендовать</span></button>
          </form>

        </div>
        <!--single__page-form -->
      </div><!-- car-data-box -->
    </div>
    <!--single__page-wrap -->

    <section class="similar-cars">
      <h2 class="title-section">Похожие авто</h2>
      <ul class="list list_similar">

        <li class="similar-item">
          <div class="similar-item__thumb">
            <img src="http://rent-a-car/wp-content/themes/rent-theme/img/kia.jpg" alt="">
          </div>
          <div class="similar-item__content">
            <h3 class="similar-item__title">Hyundai Solaris</h3>
            <span class="similar-item__price">От 1500 руб / сутки</span>
          </div>
        </li><!-- similar-item -->

        <li class="similar-item">
          <div class="similar-item__thumb">
            <img src="img/chevrolet.jpg" alt="">
          </div>
          <div class="similar-item__content">
            <h3 class="similar-item__title">Hyundai Solaris</h3>
            <span class="similar-item__price">От 1500 руб / сутки</span>
          </div>
        </li><!-- similar-item -->

        <li class="similar-item">
          <div class="similar-item__thumb">
            <img src="img/hyundai.jpg" alt="">
          </div>
          <div class="similar-item__content">
            <h3 class="similar-item__title">Hyundai Solaris</h3>
            <span class="similar-item__price">От 1500 руб / сутки</span>
          </div>
        </li><!-- similar-item -->

        <li class="similar-item">
          <div class="similar-item__thumb">
            <img src="img/kia.jpg" alt="">
          </div>
          <div class="similar-item__content">
            <h3 class="similar-item__title">Hyundai Solaris</h3>
            <span class="similar-item__price">От 1500 руб / сутки</span>
          </div>
        </li><!-- similar-item -->

      </ul><!-- list_similar -->
    </section>

  </div><!-- container -->

</main>
<?php get_footer(); ?>