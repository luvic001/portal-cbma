<?php

if (!defined('PATH')) exit;

?>

<div class="footer-credits">
  <p>© <?= date('Y') ?> - CBMA - Todos os direitos reservados.</p>
  <ul class="redes-sociais">
    <?php foreach (get_redes_sociais() as $key => $label): ?>
      <?php $setting = get_theme_mod(sprintf('setting_%s', $key)); if ($setting): ?>
        <li>
          <a href="<?= $setting ?>" title="<?= $label ?>" target="_blank">
            <i class="fab fa-<?= $key ?>"></i>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>