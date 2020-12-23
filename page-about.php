<?php
/*
Template Name: Страница о нас
*/
?><?php get_header(); ?>

<main class="page">


  <div class="about">
    <div class="container">
      <div class="about-inner">
        <h2 class="title-wrapper j-center"><span class="title-section"><?php the_field('zagolovok_o_nas'); ?></span>
        </h2>
        <div class="about-inner__text">
          <?php the_field('tekst_bloka_o_nas'); ?>
        </div><!-- about-inner__text -->
      </div><!-- about-inner -->
    </div><!-- container -->

  </div><!-- about -->

  <div class="about-feature">
    <div class="container">
      <div class="about-feature-inner">
        <h2 class="title-wrapper j-center"><span class="title-section"><?php the_field('zagolovok_osobennosti'); ?></span></h2>
        <div class="about-feature-inner__text">
        <?php the_field('tekst_bloka_osobennosti'); ?>
          <ul>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
            <li>
              Lorem ipsum dolor sit amet consectetu
            </li>
          </ul>
        </div><!-- about-feature-inner__text -->
      </div><!-- about-feature-inner -->
    </div><!-- container -->
  </div><!-- about-feature -->

  <section class="documents">
    <div class="container">
      <h2 class="title-wrapper j-center"><span class="title-section"><?php the_field('zagolovok_otchetnye_dokumenty'); ?></span></h2>
      <div class="documents__desc">
      <?php the_field('tekst_otchyotnye_dokumenty'); ?>
      </div>
      <ul class="documents__list">
        <li>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus explicabo magnam
        </li>
        <li>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus explicabo magnam
        </li>
        <li>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus explicabo magnam
        </li>
        <li>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus explicabo magnam
        </li>
        <li>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus explicabo magnam
        </li>
      </ul>
      <a href="#">Скачать образец</a>

    </div>

  </section><!-- documents -->

  <section class="cooperation">
    <h2 class="title-wrapper j-center"><span class="title-section"><?php the_field('zagolovok_sotrudnichestvo'); ?></span></h2>
    <!-- <p class="cooperation-desc"> -->
    <?php the_field('tekst_bloka_sotrudnichestvo'); ?>
    <!-- </p> -->
    <p class="cooperation-wy-we">
      Почему выгодно арендовать автомобиль у нас?
    </p>
    <ul class="cooperation-list container">
      <?php

// проверяем есть ли в повторителе данные
if( have_rows('spisok_bloka_sotrudnichestvo') ):

 	// перебираем данные
    while ( have_rows('spisok_bloka_sotrudnichestvo') ) : the_row(); ?>
    <li class="cooperation__item">
    <?php 
      $image = get_sub_field('ikonka_spiska_sotrudnichestvo');
      $content = get_sub_field('content');
      $link = get_sub_field('link');

    ?>
    <div class="cooperation-list__icon"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
    <span class="cooperation-list__title"><?php the_sub_field('zagolovok_punkta_spiska') ?></span>
    <p class="cooperation-list__desc">
    <?php the_sub_field('opisanie_punkta_spiska'); ?>
    </p>
  </li><!-- cooperation__item -->
   
<?php
    endwhile;

else :

    // вложенных полей не найдено

endif;

?>


    </ul>
  </section><!-- cooperation -->

  <section class="guarantee">
    <h2 class="title-wrapper j-center"><span class="title-section"><?php the_field('zagolovok_my_garantiruem'); ?></span></h2>
    <ul class="list_guarantee">
      <li class="list_guarantee-marker">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
      </li>
      <li class="list_guarantee-marker">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
      </li>
      <li class="list_guarantee-marker">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
      </li>
      <li class="list_guarantee-marker">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
      </li>
      <li class="list_guarantee-marker">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
      </li>
    </ul>
  </section><!-- guarantee -->

</main>

<?php get_footer(); ?>