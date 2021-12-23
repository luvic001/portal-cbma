<?php

if (!defined('PATH')) exit;

$artigos = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 6,
  'tax_query' => [
    [
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'artigos'
    ]
  ]
]);

if ($artigos->have_posts()):

?>

<div class="splide splide-3 default-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <?php while ($artigos->have_posts()): $artigos->the_post(); ?>

        <li class="splide__slide">
          <a class="box-default-link w-100" href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?>">
            <div class="box-default">
              <h3><?= get_the_title() ?></h3>
              <hr class="line-separator" />
              <p class="post-info">
                <span><?= get_the_category()[0]->name ?></span> - <?= get_the_date() ?>
              </p>
              <div class="editor-content mb-3">
                <p><?= strip_tags(get_the_excerpt()) ?></p>
              </div>
              <span class="btn-link btn-link-default mb-2">
                Ler mais
                <?= svg('arrow-btn-link') ?>
              </span>
            </div>
          </a>
        </li>

      <?php endwhile ?>

    </ul>
  </div>
</div>
<?php

endif;

wp_reset_query();