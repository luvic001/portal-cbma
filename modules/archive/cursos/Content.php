<?php

if (!defined('PATH')) exit;
$category_name = get_queried_object()->label;

?>

<section class="site-sections grey-sections">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <div class="section-title">
          <h2>Confira os <br/>nossos cursos</h2>
          <?php if (is_search()): ?>
            <p class="mt-4">Resultados da busca por: <?= strip_tags($_GET['s']) ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-9">

        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <div class="col-12 mb-4">
            <a class="box-default-link w-100" href="<?= get_the_permalink() ?>">
              <div class="box-default box-default-date">

                <div class="box-date">
                  <p class="date-day"><?= get_the_date('d') ?></p>
                  <p class="date-month"><?= get_the_date('M') ?></p>
                  <p class="date-year"><?= get_the_date('Y') ?></p>
                  <p class="date-time"><?= get_the_date('H:i') ?></p>
                </div>

                <div class="box-content">
                  <h3><?= get_the_title() ?></h3>
                  <hr class="line-separator">
                  <div class="editor-content mb-3">
                    <p><?= strip_tags(get_the_excerpt()) ?></p>
                  </div>
                </div>
                
              </div>
            </a>
          </div>
        <?php endwhile; else: ?>
        <div class="col-12">
          Nenhum curso encontrado
        </div>
        <?php endif; ?>
        <div class="col-12">
          <?php get_modules('Pagination'); ?>
        </div>

      </div>
    </div>
  </div>
</section>