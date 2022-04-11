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

  <div class="dev-footer">
    <p>Desenvolvido por 
      <a href="https://agenciacampana.com.br" target="_blank" title="Agência Campana | Marketing Digital">
        <img src="<?= get_image('agencia-campana_logo_credit_white.png') ?>" alt="Agência Campana">
      </a>
    </p>
    <style>
      .dev-footer {
        margin-top: 1rem;
      }
      @media (min-width: 768px) {
        .dev-footer {
          margin-top: 0;
        }
      }
      .dev-footer p a img {
        margin-bottom: -5px;
      }
      .footer-credits {
        flex-wrap: wrap !important;
      }
      @media (min-width: 992px) {
        .footer-credits {
          flex-wrap: nowrap !important;
        }
      }
    </style>
  </div>
</div>