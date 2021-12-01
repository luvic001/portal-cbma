<?php

if (!defined('PATH')) exit;

?>

<aside class="site-megamenu">

  <div class="megamenu-head">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      
      <div class="site-logo">
        <a href="<?= site_url() ?>" title="<?= get_bloginfo('name') ?> | <?= get_bloginfo('description') ?>">
          <h2>CBMA</h2>
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
                <li>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-md-4 col-lg-3 offset-md-2 offset-lg-3 mb-4 mb-lg-0 mt-md-4 mt-0 mt-lg-0">
              <a href="tel:+552122339974" class="btn-link megamenu-btn-link">
                <i class="fas fa-phone fa-rotate-90"></i>
                +55 (21) 2233-9974
              </a>
            </div>
            
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