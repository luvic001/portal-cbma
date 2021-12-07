<?php

if (!defined('PATH')) exit;

$colunasbootstrap_base = 'componentes-colunasbootstrap-content';

if (have_rows($colunasbootstrap_base)):
  while (have_rows($colunasbootstrap_base)):
    the_row();

    $col = (object) [
      'xs' => get_sub_field(sprintf('%s-col', $colunasbootstrap_base)),
      'sm' => get_sub_field(sprintf('%s-col_sm', $colunasbootstrap_base)),
      'md' => get_sub_field(sprintf('%s-col_md', $colunasbootstrap_base)),
      'lg' => get_sub_field(sprintf('%s-col_lg', $colunasbootstrap_base)),
      'xl' => get_sub_field(sprintf('%s-col_xl', $colunasbootstrap_base)),
    ];

    $colunasbootstrap = (object) [
      'title' => get_sub_field(sprintf('%s-title', $colunasbootstrap_base)),
      'subtitle' => get_sub_field(sprintf('%s-subtitle', $colunasbootstrap_base)),
      'content' => get_sub_field(sprintf('%s-content', $colunasbootstrap_base)),
      'cssclass' => get_sub_field(sprintf('%s-cssclass', $colunasbootstrap_base)),
    ];
    
    ?>
    <div class="col-<?= $col->xs ?> col-sm-<?= $col->sm ?> col-md-<?= $col->md ?> col-lg-<?= $col->lg ?> col-xl-<?= $col->xl ?> <?= $colunasbootstrap->cssclass ?>">
    
      <div class="editor-content editor-content-painel">
        <?php if ($colunasbootstrap->title): ?>
          <div class="section-title have-after">
            <h2><?= $colunasbootstrap->title ?></h2>
            <?php if ($colunasbootstrap->subtitle): ?>
              <p><?= $colunasbootstrap->subtitle ?></p>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <?= $colunasbootstrap->content ?>
      </div>

    </div>
    <?php

  endwhile;
endif;