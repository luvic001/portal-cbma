<?php

if (!defined('PATH')) exit;
$base = 'section-ef';
$title = get_field($base.'-title');
$images = get_field($base.'-images');

?>

<section class="site-sections section-entidades">
  <div class="container">
    <div class="row align-items-center">

      <?php if ($title): ?>
        <div class="col-lg-3">
          <div class="primary-section">
            <div class="content-section">
              <div class="section-title">
                <h2><?= $title ?></h2>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      
      <?php if ($images): foreach ($images as $image): ?>
        <div class="col-4 col-lg-3">
          <div class="editor-content">
            <p><img src="<?= wpfx_get_image($image[$base.'-image']) ?>" alt=""></p>
          </div>
        </div>
      <?php endforeach; endif; ?>

    </div>
  </div>
</section>