<?php

if (!defined('PATH')) exit;

?>
<div class="widget-single">
  <div class="widget-title">
    <h3>Busca</h3>
  </div>
  <div class="widget-content widget-search">
    <?php get_modules('Sidebar-search', 'archive') ?>
  </div>
</div>

<?php if (is_single()): ?>

  <?php if (get_field('posts_relacionados')): ?>
    <div class="widget-single">
      <div class="widget-title">
        <h3>Artigos Relacionados</h3>
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

<?php endif; ?>

<div class="widget-single">
  <div class="widget-title">
    <h3>Navegue</h3>
  </div>
  <div class="widget-content list-categories">
    <?php wp_list_categories('title_li=') ?>
  </div>
</div>