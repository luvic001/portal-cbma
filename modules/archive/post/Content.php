<?php

if (!defined('PATH')) exit;
$queried_object = get_queried_object();

?>

<section class="site-sections">
  <div class="container">
    <div class="row">

      <div class="col-md-7 col-lg-8 posts-list">
        <div class="row">
          <?php if ($queried_object->description): ?>
          <div class="col-12">
            <div class="editor-content editor-content-painel">
              <?= wpautop($queried_object->description) ?>
            </div>
          </div>
          <?php endif; ?>

          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-lg-6 mb-4">
              <a class="box-default-link w-100" href="<?= get_the_permalink() ?>">
                <div class="box-default">

                  <?php if (has_post_thumbnail()): ?>
                    <figure class="box-image">
                      <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= get_the_title() ?>">
                    </figure>
                  <?php endif; ?>

                  <h3><?= get_the_title() ?></h3>
                  <hr class="line-separator">
                  <p class="post-info">
                    <span><?= get_the_category()[0]->name ?></span>
                    - <?= get_the_date() ?>
                  </p>
                  <div class="editor-content mb-3">
                    <p><?= strip_tags(get_the_excerpt()) ?></p>
                  </div>
                  <span class="btn-link btn-link-default mb-2">
                    Ler mais
                    <?= svg('arrow-btn-link') ?>
                  </span>
                </div>
              </a>
            </div>
          <?php endwhile; else: ?>
            <div class="col-12">
              <p>Nenhum artigo encontrado</p>
            </div>
          <?php endif; ?>
          <div class="col-12">
            <?php paginacao() ?>
          </div>
        </div>
      </div>

      <aside class="col-md-5 col-lg-4">
        <?php get_modules('Sidebar-blog', 'archive') ?>
      </aside>

    </div>
  </div>
</section>