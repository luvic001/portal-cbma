<?php

if (!defined('PATH')) exit;
global $sitename;

?>
<style>
  aside.site-megamenu {
    background-image: url('<?= get_image('textura-losangos.png') ?>');
    background-blend-mode: color-burn;
  }
</style>
<aside class="site-megamenu">

  <div class="megamenu-head">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      
      <div class="site-logo">
        <a href="<?= site_url() ?>" title="<?= $sitename ?>">
          <?= get_site_logo('logo_do_site_megamenu', $sitename) ?>
        </a>
      </div>

      <div class="menu-navigation">
        <a href="javascript:void(0);" title="Navegar" toggle-menu>
          <span class="text">
            Fechar
          </span>
          <span class="lines">
            <?= svg('close') ?>
          </span>
        </a>
      </div>

    </div>
  </div>

  <div class="megamenu-content">

    <div class="container">
      <div class="row">
        
        <div class="col-12">
          <div class="row">

            <div class="col-md-4 col-lg-3 offset-lg-3 mb-4 mt-4 mt-lg-0 mb-md-5">
              <ul class="megamenu-redes-sociais">
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
            
            <?php if (get_theme_mod('setting_telefone_principal')): ?>
            <div class="col-md-4 col-lg-3 offset-md-2 offset-lg-3 mb-4 mb-lg-0 mt-md-4 mt-0 mt-lg-0">
              <a href="tel:+<?= only_number(get_theme_mod('setting_telefone_principal')) ?>" class="btn-link megamenu-btn-link">
                <i class="fas fa-phone fa-rotate-90"></i>
                <?= get_theme_mod('setting_telefone_principal') ?>
              </a>
            </div>
            <?php endif; ?>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6"><?php get_modules('Header/Widget-1-3') ?></div>
        <div class="col-lg-3 col-md-6"><?php get_modules('Header/Widget-4-5') ?></div>
        <div class="col-lg-3 col-md-6"><?php get_modules('Header/Widget-6-7') ?></div>
        <div class="col-lg-3 col-md-6"><?php get_modules('Header/Widget-8-10') ?></div>

      </div>
    </div>

  </div>
    
</aside>