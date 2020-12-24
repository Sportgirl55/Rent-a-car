<?php
/*
Template Name: Страница Аренда
*/
?><?php get_header(); ?>

<main class="page">
  <div class="container">
    <section class="section-rules">
      <h2 class="title-wrapper j-center"><span
          class="title-section"><?php the_field('zagolovok_usloviya_arendy'); ?></span></h2>
      <div class="rules-desc">
        <div class="rules-desc__text">
          <?php the_field('tekst_usloviya_arendy'); ?>
        </div>
        <div class="rules-desc__list-wrapper">
          <div class="title-wrapper wrapper_attention-title j-center">
            <p class="attention-title"><?php the_field('zagolovok_spiska_zapreshhaetsya'); ?></p>
          </div>
          <ul class="list list_attention">
            <?php

      // проверяем есть ли в повторителе данные
      if( have_rows('spisok_zapreshhaetsya_arendatoram') ):

      // перебираем данные
        while ( have_rows('spisok_zapreshhaetsya_arendatoram') ) : the_row(); ?>
            <li class="list-marker">
              <?php the_sub_field('punkt_spiska_arendatoram_zapreshhaetsya') ?>
            </li>
            <?php
          endwhile;
      else :
      endif;
      ?>
          </ul>
        </div>
      </div>
    </section>
    <div class="block-attention">
      <?php the_field('tekst_preduprezhdeniya'); ?>
    </div>
    <ul class="list list_rules container">
    <?php
    if( have_rows('spisok_pravil_arendy') ):
    while ( have_rows('spisok_pravil_arendy') ) : the_row(); ?>
      <li class="list-rules__item">
      <!-- <?php 
      $image = get_sub_field('ikonka_spiska_sotrudnichestvo');
      $content = get_sub_field('content');
      $link = get_sub_field('link');
    ?> -->
      <h3 class="title-wrapper j-center"><span class="title-section"><?php the_sub_field('zagolovok_punkta_pravil_arendy'); ?></span></h3>
        <p>
          <?php the_sub_field('punkt_pravil_arendy'); ?>
        </p>
      </li><!-- cooperation__item -->

      <?php
    endwhile;
      else :
      endif;
      ?>
    </ul>
  </div>
</main>
<?php get_footer(); ?>
