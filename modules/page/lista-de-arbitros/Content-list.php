<?php

if (!defined('PATH')) exit;
$lista = new WP_Query([
  'post_type' => 'arbitros',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
]);

if ($lista->have_posts()):

?>

<div class="arbitros-list">

  <ul class="row">
    <?php while ($lista->have_posts()): $lista->the_post(); ?>
      <li class="col-md-4 col-lg-3">
        <a 
          href="javascript:void(0);" 
          arbitros-link="<?= do_hash(json([
            'arbitro_id' => get_the_ID()
          ])); ?>" 
          title="<?= get_the_title() ?>"
          class="h-100">
          <span class="text"><?= get_the_title() ?></span>
          <span class="yellow-bg"></span>
        </a>
      </li>
    <?php endwhile; ?>
  </ul>

</div>

<?php

endif;