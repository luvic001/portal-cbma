<?php

if (!defined('PATH')) exit;

foreach ([8, 9] as $label) {
  dynamic_sidebar(
    sprintf(
      'widget_header_%d',
      $label
    )
  );
}

?>

<?php if (get_theme_mod('setting_endereco')): ?>
<nav class="menu-widget">
  <address>
    <?= get_theme_mod('setting_endereco') ?>
  </address>
</nav>
<?php endif;