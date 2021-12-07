<?php

if (!defined('PATH')) exit;

$cards_base = 'componentes-cards-content';

if (have_rows($cards_base)):
  while (have_rows($cards_base)):
    the_row();

    $col = (object) [
      'xs' => get_sub_field(sprintf('%s-col', $cards_base)),
      'sm' => get_sub_field(sprintf('%s-col_sm', $cards_base)),
      'md' => get_sub_field(sprintf('%s-col_md', $cards_base)),
      'lg' => get_sub_field(sprintf('%s-col_lg', $cards_base)),
      'xl' => get_sub_field(sprintf('%s-col_xl', $cards_base)),
    ];

    $cards = (object) [
      'title' => get_sub_field(sprintf('%s-title', $cards_base)),
      'content' => get_sub_field(sprintf('%s-content', $cards_base)),
      'link' => get_sub_field(sprintf('%s-link', $cards_base)),
      'linktext' => get_sub_field(sprintf('%s-linktext', $cards_base)),
      'newblank' => get_sub_field(sprintf('%s-newblank', $cards_base)),
      'figure' => get_sub_field(sprintf('%s-figure', $cards_base)),
      'svg' => get_sub_field(sprintf('%s-svg', $cards_base)),
      'issvg' => get_sub_field(sprintf('%s-issvg', $cards_base)),
      'cssclass' => get_sub_field(sprintf('%s-cssclass', $cards_base)),
    ];
    
    ?>
    <div class="col-<?= $col->xs ?> col-sm-<?= $col->sm ?> col-md-<?= $col->md ?> col-lg-<?= $col->lg ?> col-xl-<?= $col->xl ?> <?= $cards->cssclass ?>">
    
      <?php if ($cards->link): ?>
        <a href="<?= $cards->link ?>" class="box-default-link mb-4 w-100" <?= $cards->newblank ? 'target="_blank"' : null ?>>
      <?php endif; ?>

        <div class="box-default <?= (bool) ($cards->link) ? null : 'mb-4' ?>">

          <?php if ($cards->issvg): ?>
            <div class="box-icon">
              <?= $cards->svg ?>
            </div>
          <?php else: ?>
            <?php if ($cards->figure): ?>
              <figure class="box-image">
                <img src="<?= wpfx_get_image($cards->figure) ?>" alt="<?= $cards->title ?>">
              </figure>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($cards->title): ?>
            <h3><?= $cards->title ?></h3>
            <hr class="line-separator">
          <?php endif; ?>
          
          <?php if ($cards->content): ?>
            <div class="editor-content mb-3">
              <p><?= $cards->content ?></p>
            </div>
          <?php endif; ?>
          
          <?php if ($cards->link): ?>
            <span class="btn-link btn-link-default mb-2">
              <?= (bool) ($cards->linktext) ? $cards->linktext : 'Ler mais' ?>
              <?= svg('arrow-btn-link') ?>
            </span>
          <?php endif; ?>

        </div>

      <?php if ($cards->link): ?>
        </a>
      <?php endif; ?>

    </div>
    <?php

  endwhile;
endif;