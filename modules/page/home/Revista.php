<?php

if (!defined('PATH')) exit;

$base = 'section-revista';
$title = get_field($base.'-title');
$description = get_field($base.'-description');
$link = (object) [
  'url' => get_field($base.'-link'),
  'text' => get_field($base.'-link_text'),
  'newblank' => get_field($base.'-link_newtab'),
];

$revista = get_field($base.'-image');

?>

<section class="site-sections section-revista background-cover background-center"
  style="background-image: url('<?= get_image('bg-revista.png') ?>')">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">

        <?php if ($title): ?>
          <div class="section-title have-after">
            <h2><?= $title ?></h2>
          </div>
        <?php endif; ?>
      
        <div class="editor-content">
          <?= $description ?>
          <?php if ($link->url): ?>
            <a 
              href="<?= $link->url ?>" 
              class="btn-link"
              title="<?= $link->text ?>"
              <?= ($link->newblank) ? 'target="_blank"' : null ?>>
              <?= $link->text ?> <?= svg('arrow-btn-link') ?></a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-7">
        <?php if ($revista): ?>
          <figure class="revista-thumbnail">
            <a 
              href="<?= $link->url ?>" 
              title="<?= $link->text ?>"
              class="d-block align-center align-md-right"
              <?= ($link->newblank) ? 'target="_blank"' : null ?>>
              <img src="<?= wpfx_get_image($revista) ?>" alt="<?= $title ?>" class="mw-100">
            </a>
          </figure>
        <?php endif; ?>
      </div>

    </div>

  </div>


</section>