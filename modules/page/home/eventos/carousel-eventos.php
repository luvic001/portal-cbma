<?php

if (!defined('PATH')) exit;

$eventos = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 4,
  'tax_query' => [
    [
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'eventos'
    ]
  ]
]);

if ($eventos->have_posts()):
  $ind = 0;

?>

  <div class="splide splide-2 default-slider">
    <div class="splide__track">
      <ul class="splide__list">
        <?php while ($eventos->have_posts()): $eventos->the_post(); ?>
          <?php $event_date = get_field('event-date'); ?>
          <li class="splide__slide">
            <a 
              class="box-default-link w-100" 
              title="<?= get_the_title() ?>"
              href="<?= get_the_permalink() ?>">
              <div class="box-default box-default-date">
                <div class="box-date">
                  <p class="date-day"><?= ttime($event_date, '%d') ?></p>
                  <p class="date-month"><?= ttime($event_date, '%b') ?></p>
                  <p class="date-year"><?= ttime($event_date, '%Y') ?></p>
                  <p class="date-time"><?= ttime($event_date, '%H') ?>h<?= ttime($event_date, '%M') ?></p>
                </div>
                <div class="box-content">
                  <h3><?= get_the_title() ?></h3>
                  <hr class="line-separator" />
                  <div class="editor-content">
                    <p><?= strip_tags(get_the_excerpt()) ?></p>
                  </div>
                </div>
              </div>
            </a>
          </li>

        <?php $ind++; endwhile; ?>

      </ul>
    </div>
  </div>

  <?php if ($ind < 2): ?>
    <style>
      .section-eventos .splide__arrows {
        display: none !important;
      }
    </style>
  <?php endif; ?>

<?php 

endif;

wp_reset_query();
