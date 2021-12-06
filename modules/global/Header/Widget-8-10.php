<?php

if (!defined('PATH')) exit;

?>

<nav class="menu-widget">
  <ul>
    <li class="title">
      <a href="#">Dispute Board</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
  </ul>
</nav>

<nav class="menu-widget">
  <ul>
    <li class="title">
      <a href="#">Contato</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
    <li>
      <a href="#">Ítem title</a>
    </li>
  </ul>
</nav>

<?php if (get_theme_mod('setting_endereco')): ?>
<nav class="menu-widget">
  <address>
    <?= get_theme_mod('setting_endereco') ?>
  </address>
</nav>
<?php endif;