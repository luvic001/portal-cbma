<?php

if (!defined('PATH')) exit;

$elem = is_single() ? 'h2' : 'h1';

?>

<section class="header-interna">

  <div class="container">
    <<?=$elem?>>
      <?= titleName() ?>
    </<?=$elem?>>

    <div class="header-breadcrumb">
      <?php
      if (function_exists('yoast_breadcrumb'))
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      ?>
    </div>

  </div>

</section>