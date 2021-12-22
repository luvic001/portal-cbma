<?php

if (!defined('PATH')) exit;
global $arbitro_data;

getCurStyleSheet('style', 'page/lista-de-arbitros');

?>

<div class="arbitros-popup">
  
  <div class="arbitros-content">

    <div class="popup-title">

      <h3><?= $arbitro_data['title'] ?></h3>

      <?php if ($arbitro_data['cargo']): ?>
        <p class="cargo">
          <?= $arbitro_data['cargo'] ?>
        </p>
      <?php endif; ?>

    </div>

    <div class="editor-content">
      <?= $arbitro_data['content'] ?>
      <?php if ($arbitro_data['link']): ?>
        <p>
          <a 
            href="<?= $arbitro_data['link'] ?>" 
            title="Curriculum Vitae" 
            class="btn-link"
            <?= $arbitro_data['new_blank'] ? 'target="_blank"' : null ?>>Curriculum Vitae
            <?= svg('arrow-btn-link') ?>
          </a>
        </p>
      <?php endif; ?>
    </div>
    
  </div>
  <?php if ($arbitro_data['thumbnail']): ?>
  <div class="arbitros-thumbnail"></div>
  <style>.arbitros-thumbnail {background-image: url('<?= wpfx_get_image($arbitro_data['thumbnail']) ?>');}</style>
  <?php endif; ?>

</div>