<?php

if (!defined('PATH')) exit;

$base = 'section-cj';
$title = get_field($base.'-title');
$description = get_field($base.'-description');

$cj = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 2,
  'tax_query' => [
    [
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => 'comites-jovens'
    ]
  ]
]);

if ($cj->have_posts()):

?>

<section 
  class="site-sections section-comites background-fixed background-parallax"
  style="background-image: url('<?= get_image('textura-losangos.png') ?>');">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 primary-section">
        <div class="content-section">
          <?php if ($title): ?>
            <div class="section-title">
              <h2><?= $title ?></h2>
            </div>
          <?php endif; ?>
          <div class="editor-content">
            <?= $description ?>
          </div>
        </div>
      </div>
      
      <?php while ($cj->have_posts()): $cj->the_post(); ?>
        <article class="col-lg-4 col-md-6">
          <div class="editor-content">
            <h3><?= get_the_title() ?></h3>
            <p><?= strip_tags(get_the_excerpt()) ?></p>
            <a href="<?= get_the_permalink() ?>" class="btn-link btn-link-default">Acessar blog <?= svg('arrow-btn-link') ?></a>
          </div>
        </article>
      <?php endwhile; ?>

    </div>
  </div>
</section>
<?php

endif;

wp_reset_query();