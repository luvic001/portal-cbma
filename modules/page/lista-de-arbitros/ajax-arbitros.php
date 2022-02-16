<?php

if (!defined('PATH')) exit;

$data = unjson(undo_hash($_POST['arbitro_data']));

if (!$data->arbitro_id) {
  fjson([
    'success' => false,
    'content' => 'Árbitro não encontrado'
  ], 400);
}

$page = new WP_Query([
  'post_type' => 'arbitros',
  'post__in' => [$data->arbitro_id]
]);

if ($page->have_posts()) {
  while ($page->have_posts()) {
    $page->the_post();
    
      $content = [
        'title' => get_the_title(),
        'cargo' => get_field('arbitro-cargo'),
        'content' => wpautop(get_the_content()),
        'thumbnail' => get_the_post_thumbnail_url(get_the_ID()),
        'link' => get_field('arbitro-link'),
        'new_blank' => get_field('arbitro-link-newblank'),
      ];

  }
}

get_modules('ajax-arbitros-content', 'page/lista-de-arbitros', [
  'arbitro_data' => $content
]);