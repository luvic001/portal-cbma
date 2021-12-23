<?php

if (!defined('PATH')) exit;
$base = 'section-pq';
$title = get_field($base.'-title');
$description = get_field($base.'-description');
?>

<section 
  class="site-sections section-por-que-cbma background-fixed background-parallax"
  style="background-image: url('<?= get_image('textura-losangos.png') ?>');">

  <div class="container">
    <div class="row align-items-center">
      <?php if ($title): ?>
      <div class="col-lg-4">
        <div class="section-title">
          <h2>Por que o CBMA?</h2>
        </div>
      </div>
      <?php endif; ?>
      <div class="col-lg-<?= $title ? '8' : '12' ?>">
        <div class="editor-content">
          <?= $description ?>
        </div>
      </div>
    </div>
  </div>

</section>