<?php

if (!defined('PATH')) exit;

$base = 'section-cursos';
$title = get_field($base.'-title');
$subtitle = get_field($base.'-subtitle');
$description = get_field($base.'-description');

$link = (object) [
  'url' => get_field($base.'-link'),
  'text' => get_field($base.'-link_text'),
  'newtab' => get_field($base.'-link_newtab'),
];

?>

<section class="site-sections section-cursos">

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        
        <div class="section-title">
          <?php if ($title): ?>
            <h2 class="to-upper"><?= $title ?></h2>
          <?php endif; ?>

          <?php if ($subtitle): ?>
            <p><?= $subtitle ?></p>
          <?php endif; ?>

        </div>

        <div class="editor-content">
          <?php if ($description): ?>
            <?= $description ?>
          <?php endif; ?>

          <?php if ($link->url): ?>
            <a 
              href="<?= $link->url ?>" 
              class="btn-link"
              <?= $link->newtab ? 'target="_blank"' : null ?>><?= $link->text ?> <?= svg('arrow-btn-link') ?></a>
          <?php endif; ?>

        </div>

      </div>
      <div class="col-lg-8">
        <?php get_modules('cursos/carousel-cursos', 'page/home') ?>
      </div>
    </div>
  </div>

</section>