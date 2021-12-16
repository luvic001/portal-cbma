<?php

if (!defined('PATH')) exit;

$ID = get_the_ID();

?>

<section class="site-sections section-single">

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-8">
        
        <?php if (has_post_thumbnail()): ?>
        <figure class="single-thumbnail">
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="mw-100">
        </figure>
        <?php endif; ?>

        <div class="section-title have-after">
          <h1><?= get_the_title() ?></h1>
        </div>
        
        <div class="post-info">
          <p>
            <a href="<?= site_url() ?>/<?= get_post_type() ?>" title="Cursos | <?= get_bloginfo('name') ?>"><span>Cursos</span></a>
            - Publicado em <time datetime="<?= get_the_date('Y-m-d H:i:s') ?>"><?= get_the_date() ?></time>
          </p>
        </div>

        <div class="editor-content editor-content-painel">
          <?= get_the_content() ?>
        </div>

      </div>

      <div class="col-md-5 col-lg-4">

        <div class="widget-single">
          <div class="widget-title">
            <h3>Busca</h3>
          </div>
          <div class="widget-content widget-search">
            <?php get_modules('Sidebar-search', 'archive', [
              'action' => 'cursos'
            ]) ?>
          </div>
        </div>
        
        <?php if (get_field('posts_relacionados')): ?>
        <div class="widget-single">
          <div class="widget-title">
            <h3>Cursos Relacionados</h3>
          </div>

          <?php 

          $related_query = new WP_Query([
            'post__in' => get_field('posts_relacionados'),
            'post_type' =>  'any',
            'orderby' => 'post__in'
          ]);
          if ($related_query->have_posts()):

          ?>
          <div class="widget-content related-posts">
            <ul>

              <?php 
                while ($related_query->have_posts()): 
                $related_query->the_post(); 
              ?>
                <li>
                  <a href="<?= get_the_permalink() ?>" title="<?= get_the_title() ?> | <?= get_bloginfo('name') ?>">
                    <span class="post-title"><?= get_the_title() ?></span>
                    <span class="post-date">
                      <?= get_the_date() ?>
                    </span>
                  </a>
                </li>
              <?php endwhile; ?>

            </ul>
          </div>
          <?php endif; ?>

        </div>
        <?php endif; ?>

      </div>

    </div>
  </div>

</section>