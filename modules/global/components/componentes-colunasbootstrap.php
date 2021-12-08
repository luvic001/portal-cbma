<?php

if (!defined('PATH')) exit;

$section_base = 'componentes-colunasbootstrap-section';

$section = (object) [
  'title' => get_sub_field(sprintf('%s-title', $section_base)),
  'subtitle' => get_sub_field(sprintf('%s-subtitle', $section_base)),
  'content' => get_sub_field(sprintf('%s-content', $section_base)),
  'cssclass' => get_sub_field(sprintf('%s-cssclass', $section_base)),
  'bgcolor' => get_sub_field(sprintf('%s-bgcolor', $section_base)),
  'bgimage_desktop' => get_sub_field(sprintf('%s-bgimage_desktop', $section_base)),
  'bgimage_mobile' => get_sub_field(sprintf('%s-bgimage_mobile', $section_base)),
];

$section_id = do_hash(rand(1, 1000));

$column_settings = (object) [
  'justify_content' => get_sub_field('componentes-colunasbootstrap-justifycontent'),
  'align_items' => get_sub_field('componentes-colunasbootstrap-alignitems')
];

?>

<section class="site-sections section-<?= $section_id ?> <?= $section->cssclass ?? null ?>">

  <div class="container">

    <?php if ($section->title): ?>
    <div class="section-title">
      <h2><?= $section->title ?></h2>
      <?php if ($section->subtitle): ?>
        <p><?= $section->subtitle ?></p>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php if ($section->content): ?>
      <div class="editor-content editor-content-painel">
        <?= $section->content ?>
      </div>
    <?php endif; ?>
    
    <div class="row <?= $column_settings->justify_content ?> <?= $column_settings->align_items ?>">
      <?php get_modules('components/colunasbootstrap/Content') ?>
    </div>

  </div>

</section>

<style>
  <?php if ($section->bgcolor): ?>
    .section-<?= $section_id ?> {
      background-color: <?= $section->bgcolor ?>;
    }
  <?php endif; ?>
  
  <?php if ($section->bgimage_mobile): ?>
    .section-<?= $section_id ?> {
      background-image: url('<?= wpfx_get_image($section->bgimage_mobile) ?>');
    }
  <?php endif; ?>

  <?php if ($section->bgimage_desktop): ?>
    @media (min-width: 768px) {
      .section-<?= $section_id ?> {
        background-image: url('<?= wpfx_get_image($section->bgimage_desktop) ?>');
      }
    }
  <?php endif; ?>

</style>