<?php

if (!defined('PATH')) exit;
global $sitename;

get_modules('Header/Content', "global");

?>

<header class="site-header">

  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="site-logo">
      <a href="<?= site_url() ?>" title="<?= $sitename ?>">
        <h1>
          <?= get_site_logo('logo_do_site', $sitename) ?>
        </h1>
        <h2>
          <?= get_site_logo('logo_do_site_scroll', $sitename) ?>
        </h2>
      </a>
    </div>

    <div class="menu-navigation d-flex align-items-center">
      <?php get_modules("translate/index") ?>
      <a href="javascript:void(0);" title="Navegar" toggle-menu>
        <span class="text d-none d-md-block">
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

<?php

if (!is_front_page()) 
  get_modules('Header-interna');