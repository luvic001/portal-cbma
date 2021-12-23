<?php

if (!defined('PATH')) exit;

$cursos = new WP_Query([
  'post_type' => 'cursos',
  'posts_per_page' => 3
]);

if ($cursos->have_posts()):

?>

<div class="splide splide-1 default-slider">
  <div class="splide__track">
    <ul class="splide__list">

      <?php while ($cursos->have_posts()): $cursos->the_post(); ?>

      <li class="splide__slide">
        <a href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?>" class="cursos-link">
          <div class="cursos-content">
            <div class="cursos-box">
              <div class="cursos-date">
                <p class="date-day"><?= get_the_date('d') ?></p>
                <p class="date-month"><?= get_the_date('M') ?></p>
                <p class="date-year"><?= get_the_date('Y') ?></p>
                <p class="date-time"><?= get_the_date('H') ?>h<?= get_the_date('i') ?></p>
              </div>
              <div class="cursos-content-text">
                <div class="editor-content">
                  <h3><?= get_the_title() ?></h3>
                  <hr class="line-separator">
                  <p><?= strip_tags(get_the_excerpt()) ?></p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </li>

      <?php endwhile; ?>

    </ul>
  </div>
</div>

<?php

endif;

wp_reset_query();