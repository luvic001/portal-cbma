<?php

if (!defined('PATH')) exit;

$base = 'section-eventos';
$title = get_field($base.'-title');
$subtitle = get_field($base.'-subtitle');
$link = (object) [
  'url' => get_field($base.'-link'),
  'text' => get_field($base.'-link_text'),
  'newblank' => get_field($base.'-link_newtab'),
];

?>

<section 
  class="site-sections section-eventos extra-padding background-fixed background-parallax" 
  style="background-image: url('<?= get_image('textura-losangos.png') ?>');">

  <div class="container">
    <div class="section-title section-title d-md-flex align-items-center justify-content-between">
      <div>
        <?php if ($title): ?>
          <h2><?= $title ?></h2>
        <?php endif; ?>

        <?php if ($subtitle): ?>
          <p><?= $subtitle ?></p>
        <?php endif; ?>

      </div>
      
      <?php if ($link->url): ?>
        <div class="mt-4 mt-md-0">
          <a 
            href="<?= $link->url ?>" 
            class="btn-link btn-link-default" 
            title="<?= $link->text ?>"
            <?= ($link->newblank) ? 'target="_blank"' : null ?>>
            <?= $link->text ?>
            <?= svg('arrow-btn-link') ?>
          </a>
        </div>
      <?php endif; ?>

    </div>

    <?php get_modules('eventos/carousel-eventos', 'page/home'); ?>

  </div>

</section>