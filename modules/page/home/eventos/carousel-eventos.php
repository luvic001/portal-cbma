<?php

if (!defined('PATH')) exit;

?>


<div class="splide splide-2 default-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <?php for ($i=1; $i<=9; $i++): ?>

        <li class="splide__slide">
          <a class="box-default-link w-100">
            <div class="box-default box-default-date">
              <div class="box-date">
                <p class="date-day">12</p>
                <p class="date-month">NOV</p>
                <p class="date-year">2021</p>
                <p class="date-time">20h30</p>
              </div>
              <div class="box-content">
                <h3>Evento de mediação <?=$i?></h3>
                <hr class="line-separator" />
                <div class="editor-content">
                  <p>Qui laborum velit ad sunt commodo id quis. Magna deserunt incididunt ullamco laborum laborum aute ullamco pariatur ex in laborum sint ad. Tempor quis culpa Lorem dolore irure quis cupidatat aute.</p>
                </div>
              </div>
            </div>
          </a>
        </li>

      <?php endfor ?>

    </ul>
  </div>
</div>
