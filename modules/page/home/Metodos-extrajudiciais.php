<?php

if (!defined('PATH')) exit;

$base = 'section-me';
$title = get_field($base.'-title');
$description = get_field($base.'-description');
$acordeon = get_field($base.'-acordeon');

?>

<section class="site-sections section-metodos-extrajudiciais background-fixed background-parallax" style="background-image: url('<?= get_image('textura-losangos.png') ?>');">

  <div class="container">
    <div class="row">
      
      <div class="col-md-6 col-lg-5 mb-4">
        <?php if ($title): ?>
          <div class="section-title">
            <h2><?= $title ?></h2>
          </div>
        <?php endif; ?>
        <?php if ($description): ?>
        <div class="editor-content">
          <?= $description ?>
        </div>
        <?php endif; ?>
      </div>

      <div class="col-md-6 col-lg-7">
        
        <?php if ($acordeon): $ind = 0; ?>
          <div id="accordion" class="accordeon-cbma">
            <?php foreach ($acordeon as $item): ?>
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#accordeon-<?= $ind ?>" <?= ($ind == 0) ? 'aria-expanded="true"' : null ?> aria-controls="accordeon-<?= $ind ?>">
                      <?= $item[$base.'-title'] ?>
                      <i class="fas fa-angle-down"></i>
                    </button>
                  </h5>
                </div>

                <div id="accordeon-<?= $ind ?>" class="collapse <?= ($ind == 0) ? 'show' : null ?>" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <?= $item[$base.'-description'] ?>
                  </div>
                </div>
              </div>
            <?php $ind++; endforeach; ?>

          </div><!-- .accordeon-cbma -->
        <?php endif; ?>

      </div>
      
    </div>
  </div>

</section>