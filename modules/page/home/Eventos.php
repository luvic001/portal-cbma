<?php

if (!defined('PATH')) exit;

?>

<section 
  class="site-sections section-eventos extra-padding background-fixed background-parallax" 
  style="background-image: url('<?= get_image('textura-losangos.png') ?>');">

  <div class="container">
    <div class="section-title section-title d-md-flex align-items-center justify-content-between">
      <div>
        <h2 class="to-upper">Eventos</h2>
        <p>Acompanhe aos eventos que serão realizados</p>
      </div>
      <div class="mt-4 mt-md-0">
        <a href="#" class="btn-link btn-link-default">
          Acessar todos
          <?= svg('arrow-btn-link') ?>
        </a>
      </div>
    </div>

    <?php get_modules('eventos/carousel-eventos', 'page/home'); ?>

  </div>

</section>