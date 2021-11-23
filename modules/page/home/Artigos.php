<?php

if (!defined('PATH')) exit;

?>

<section class="site-sections section-artigos">
  <div class="container">
    <div class="section-title d-md-flex align-items-center justify-content-between">
      <div>
        <h2 class="to-upper">Artigos, Conteúdos e Notícias</h2>
        <p>Fique por dentro do CBMA</p>
      </div>
      <div class="mt-4 mt-md-0">
        <a href="#" class="btn-link btn-link-default">
          Acessar todos
          <?= svg('arrow-btn-link') ?>
        </a>
      </div>
    </div>

    <?php get_modules('artigos/carousel-artigos', 'page/home') ?>

  </div>
</section>