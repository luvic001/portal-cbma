<?php

if (!defined('PATH')) exit;

?>

<div class="splide splide-3 default-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <?php for ($i=1; $i<=9; $i++): ?>

        <li class="splide__slide">
          <a class="box-default-link w-100">
            <div class="box-default">
              <h3>OAB estende sigilo profissional à mediação <?=$i?></h3>
              <hr class="line-separator" />
              <p class="post-info">
                <span>Artigo</span> - 20 de agosto de 2021
              </p>
              <div class="editor-content mb-3">
                <p>Qui laborum velit ad sunt commodo id quis. Magna deserunt incididunt ullamco laborum laborum aute ullamco pariatur ex in laborum sint ad. Tempor quis culpa Lorem dolore irure quis cupidatat aute.</p>
              </div>
              <span class="btn-link btn-link-default mb-2">
                Ler mais
                <?= svg('arrow-btn-link') ?>
              </span>
            </div>
          </a>
        </li>

      <?php endfor ?>

    </ul>
  </div>
</div>
