<?php

if (!defined('PATH')) exit;

?>

<section class="site-sections section-cursos">

  <div class="container">
    <div class="row">
      <div class="col-lg-4">

        <div class="section-title">
          <h2 class="to-upper">Cursos</h2>
          <p>Inscreva-se nos cursos do CBMA</p>
        </div>

        <div class="editor-content">
          <p class="mb-4">Qui laborum velit ad sunt commodo id quis. Magna deserunt incididunt ullamco laborum laborum ullamco pariatur ex in laborum sint ad. Tempor quis culpa Lorem dolore irure quis cupidatat minim quinim eu sit incididunt pariatur qui commodo et.</p>
          <a href="#" class="btn-link">Acessar todos <?= svg('arrow-btn-link') ?></a>
        </div>

      </div>
      <div class="col-lg-8">
        <?php get_modules('cursos/carousel-cursos', 'page/home') ?>
      </div>
    </div>
  </div>

</section>