<?php

if (!defined('PATH')) exit;
$lista = get_field('arbitros-lista');

if ($lista):

?>

<div class="arbitros-list">

  <ul class="row">
    <?php foreach ($lista as $li): ?>
      <li class="col-md-4 col-lg-3">
        <a 
          href="javascript:void(0);" 
          arbitros-link="<?= do_hash(json([
            'arbitro' => $li['arbitros-title'],
            'page_id' => get_the_ID()
            ])) ?>" 
          title="<?= $li['arbitros-title'] ?>"
          class="h-100">
          <span class="text"><?= $li['arbitros-title'] ?></span>
          <span class="yellow-bg"></span>
        </a>
      </li>
    <?php endforeach ?>
  </ul>

</div>

<?php

endif;