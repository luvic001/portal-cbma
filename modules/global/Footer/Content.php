<?php

if (!defined('PATH')) exit;
global $sitename;

?>

<footer 
  class="site-footer background-center background-cover" 
  style="background-image: url('<?= get_image('bg-footer.png') ?>');">
  <div class="container">

    <div class="row">
      <div class="col-md-6">

        <div class="footer-contents">
          <figure>
            <a href="<?= site_url() ?>" title="<?= $sitename ?>">
              <?= get_site_logo('logo_do_site_footer', $sitename) ?>
            </a>
          </figure>

          <?php if (get_theme_mod('setting_endereco')): ?>
            <address>
              <?= get_theme_mod('setting_endereco') ?>
            </address>
          <?php endif; ?>

          <?php if (get_theme_mod('setting_telefones')): ?>
            <?php $telefones = explode(',', get_theme_mod('setting_telefones')) ?>
            <p class="footer-phones">
              Telefones <br/>
              <?php foreach ($telefones as $telefone): ?>
                <a href="+<?= only_number($telefone) ?>" title="Ligar para CBMA">
                  <?= trim($telefone) ?>
                </a>
              <?php endforeach; ?>
            </p>
          <?php endif; ?>

          <?php if (get_theme_mod('setting_email')): ?>
          <p>
            E-mail<br/>
            <a href="mail:<?= get_theme_mod('setting_email') ?>" title="Enviar e-mail para CBMA">
              <?= get_theme_mod('setting_email') ?>
            </a>
          </p>
          <?php endif; ?>
          
          <?php if (get_theme_mod('setting_funcionamento')): ?>
            <p>
              Horário de Funcionamento <br/>
              <?= get_theme_mod('setting_funcionamento') ?>
            </p>
          <?php endif; ?>

        </div>

      </div>
    </div>

  </div>
</footer>