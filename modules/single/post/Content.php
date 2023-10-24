<?php

if (!defined('PATH')) exit;

$ID = get_the_ID();
$category = get_the_category();

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
            <a 
              href="<?= get_term_link($category[0]->term_id) ?>" 
              title="<?= $category[0]->name ?> | <?= get_bloginfo('name') ?>">
              <span><?= $category[0]->name ?></span>
            </a>
            - Publicado em <time datetime="<?= get_the_date('Y-m-d H:i:s') ?>"><?= get_the_date() ?></time>
          </p>
        </div>

        <?php 
          // Condição para categoria EVENTOS
          if ($category[0]->name == 'Eventos'): 
            $event_date = get_field('event-date');
            $event_address = get_field('event-address');
            $event_link = get_field('event-link');
          ?>
          <div class="eventos-info">
            
            <ul>
              <?php if ($event_date): ?>
                <li class="event-date">
                  <span class="featured-number"><?= ttime($event_date, '%d') ?></span><br/>
                  <span><?= ttime($event_date, '%B') ?></span><br/>
                  <span><?= ttime($event_date, '%Y') ?></span>
                </li>
                <li class="event-time">
                  <span class="featured-number"><?= ttime($event_date, '%H') ?></span><br/>
                  <span>Horas e </span><br/>
                  <span><?= ttime($event_date, '%M') ?> minutos</span>
                </li>
              <?php endif; ?>
              <?php if ($event_address): ?>
                <li class="event-address">
                  <address>
                    <?= $event_address ?>
                  </address>
                </li>
              <?php endif; ?>
              <?php if ($event_link): ?>
                <li class="event-link">
                  <a href="<?= $event_link ?>" title="Faça sua inscrição">Faça sua <br/> inscrição</a>
                </li>
              <?php endif; ?>
            </ul>

          </div>
        <?php endif; ?>

        <div class="editor-content editor-content-painel">
          <?= wpautop(get_the_content()) ?>
        </div>

      </div>

      <div class="col-md-5 col-lg-4">
        <?php get_modules('Sidebar-blog', 'archive') ?>
      </div>

    </div>
  </div>

</section>