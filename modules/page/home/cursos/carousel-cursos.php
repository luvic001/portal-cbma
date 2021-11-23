<?php

if (!defined('PATH')) exit;

?>

<div class="splide splide-1 default-slider">
  <div class="splide__track">
    <ul class="splide__list">

      <?php foreach ([1,2,3,4,5] as $item): ?>

      <li class="splide__slide">
        <div class="cursos-content">
          <div class="cursos-box">
            <div class="cursos-date">
              <p class="date-day">12</p>
              <p class="date-month">NOV</p>
              <p class="date-year">2021</p>
              <p class="date-time">20h30</p>
            </div>
            <div class="cursos-content-text">
              <div class="editor-content">
                <h3>Magna deserunt incididunt laborum ullamco sunt commodo dolore irure quis cupidatat minim quinim eu sit incididunt pariatur qui commodo et quis</h3>
                <hr class="line-separator">
                <p>Qui laborum velit ad sunt commodo id quis. Magna deserunt incididunt ullamco laborum laborum ullamco pariatur ex in laborum sint ad. Tempor quis culpa Lorem dolore irure quis cupidatat minim quinim eu sit incididunt pariatur qui commodo et quis.</p>
              </div>
            </div>
          </div>
        </div>
      </li>

      <?php endforeach ?>

    </ul>
  </div>
</div>