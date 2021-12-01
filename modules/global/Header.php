<?php

if (!defined('PATH')) exit;

get_modules('Header/Content');

?>

<header class="site-header">

  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="site-logo">
      <a href="<?= site_url() ?>" title="<?= get_bloginfo('name') ?> | <?= get_bloginfo('description') ?>">
        <h1>CBMA</h1>
      </a>
    </div>

    <div class="menu-navigation">
      <a href="javascript:void(0);" title="Navegar" toggle-menu>
        <span class="text">
          Navegar
        </span>
        <span class="lines">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>
    </div>

  </div>

</header>