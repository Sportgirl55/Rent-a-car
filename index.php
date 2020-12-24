<?php
/*
Template Name: Шаблон для главной
*/
?><?php get_header(); ?>
<main class="front-page">

  <div class="hero">
    <div class="container">
      <div class="inner">
        <h1 class="title-section hero__title-section">Аренда автомобилей в Улан-Удэ</h1>
        <ul class="list list_features">
          <li>Надежные автомобили различных марок и комплектации</li>
          <li>Выгодные условия аренды</li>
          <li>Быстрый и удобный сервис без проволочек</li>
        </ul>
        <a class="btn btn-scroll" href="#0"><span class="btn-text">Найти автомобиль</span></a>
      </div>
    </div>
  </div>

  <section class="rent">
    <div class="container">
      <h2 class="title-section">Как арендовать автомобиль</h2>
      <ul class="list list_rent">

        <li class="rent__item line-item  line-item_one">
          <div class="icon icon__car">
            <span class="visually-hidden">иконка Выберите подходящий для вас автомобиль и нажмите кнопку
              “арендовать”</span>
          </div>
          <h3>Выберите авто</h3>
          <p class="rent__item-text">Выберите подходящий для вас автомобиль и нажмите кнопку “арендовать”</p>
        </li>

        <li class="rent__item line-item line-item_two">
          <div class="icon icon__list">
            <span class="visually-hidden">иконка Оставьте заявку на сайте, заполнив поля формы (ваше имя, дата аренды)
            </span>
          </div>
          <h3>Заполните форму</h3>
          <p class="rent__item-text">Оставьте заявку на сайте, заполнив поля формы (ваше имя, дата аренды)</p>
        </li>

        <li class="rent__item line-item line-item_three">
          <div class="icon icon__man">
            <span class="visually-hidden">иконка С вами свяжется менеджер для уточнения деталей
            </span>
          </div>
          <h3>Дождитесь звонка</h3>
          <p class="rent__item-text">С вами свяжется менеджер для уточнения деталей</p>
        </li>

        <li class="rent__item">
          <div class="icon icon__key">
            <span class="visually-hidden">иконка Заберите арендованный вами автомобиль из автопарка и наслаждайтесь
              поездкой
            </span>
          </div>
          <h3>Заберите авто</h3>
          <p class="rent__item-text">Заберите арендованный вами автомобиль из автопарка и наслаждайтесь поездкой</p>
        </li>

      </ul>
    </div>
  </section>

  <section class="cars">
    <div class="container">
      <h2 class="title-section">Автомобили</h2>

      <ul class="list list_cars">
        <?php
              $args_news = array(
                  'showposts' => 150,
                  'offset' => 0,
              );
              $recent = new WP_Query($args_news);
              while($recent->have_posts()) : $recent->the_post();
            ?>
        <li class="card">
          <div class="card__image">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt=<?php the_title(); ?>>
          </div>
          <div class="card__data">
            <ul class="list card__tags">
              <li>
                <span class="tag-icon engine"></span>
                <span class="tag-text"><?php the_field('litry'); ?> л</span>
              </li>
              <li>
                <span class="tag-icon fuel"></span>
                <span class="tag-text"><?php the_field('tip_topliva'); ?></span>
              </li>
              <li>
                <span class="tag-icon transmission"></span>
                <span class="tag-text"><?php the_field('korobka_peredach'); ?></span>
              </li>
              <li>
                <span class="tag-icon canister"></span>
                <span class="tag-text"><?php the_field('rashod_topliva'); ?> л/100 км</span>
              </li>
            </ul>
            <div class="card__info">
              <div class="card__wrap">
                <span class="card__info-name"><?php the_title(); ?></span>
                <span class="card__info-price">От <?php the_field('czena'); ?> руб / сутки</span>
              </div>
              <a class="btn" href="<?php the_permalink() ?>">Арендовать</a>
            </div>
          </div>
        </li><!-- card -->
        <?php endwhile; wp_reset_query(); ?>

      </ul>
    </div>
  </section>

</main>
<?php get_footer(); ?>