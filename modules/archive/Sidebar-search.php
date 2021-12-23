<?php

if (!defined('PATH')) exit;
global $action;

?>

<form action="<?= site_url() ?>/<?= $action ?>">
  <div class="input-text">
    
    <label>
      <input type="text" name="s">
      <span class="text">Pesquisar</span>
    </label>
    <button type="submit">
      <i class="fas fa-search"></i>
    </button>

  </div>
</form>