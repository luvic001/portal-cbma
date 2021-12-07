<?php

if (!defined('PATH')) exit;

$section_base = 'componentes-cards-section';

$section = (object) [
  'title' => get_sub_field(sprintf('%s-title', $section_base)),
  'content' => get_sub_field(sprintf('%s-content', $section_base)),
  'cssclass' => get_sub_field(sprintf('%s-cssclass', $section_base)),
  'bgcolor' => get_sub_field(sprintf('%s-bgcolor', $section_base)),
  'bgimage_desktop' => get_sub_field(sprintf('%s-bgimage_desktop', $section_base)),
  'bgimage_mobile' => get_sub_field(sprintf('%s-bgimage_mobile', $section_base)),
];

$section_id = do_hash(rand(1, 1000));

?>

<section class="site-sections section-<?= $section_id ?> <?= $section->cssclass ?? null ?>">

  <div class="container">

    <?php if ($section->title): ?>
    <div class="section-title">
      <h2><?= $section->title ?></h2>
    </div>
    <?php endif; ?>

    <?php if ($section->content): ?>
      <div class="editor-content">
        <?= $section->content ?>
      </div>
    <?php endif; ?>
    
    <div class="row mt-4 mt-md-5">
      <?php get_modules('components/cards/Content') ?>
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