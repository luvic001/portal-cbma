<?php

if (!defined('PATH')) exit;

$data = unjson(undo_hash($_POST['arbitro_data']));

if (!$data->page_id) {
  fjson([
    'success' => false,
    'content' => 'Árbitro não encontrado'
  ], 400);
}

$page = new WP_Query([
  'post_type' => 'page',
  'post__in' => [$data->page_id]
]);

if ($page->have_posts()) {
  while ($page->have_posts()) {
    $page->the_post();

    foreach (get_field('arbitros-lista') as $value) {
      $content[$value['arbitros-title']] = [
        'title' => $value['arbitros-title'],
        'cargo' => $value['arbitros-cargo'],
        'content' => $value['arbitros-content'],
        'thumbnail' => $value['arbitros-thumbnail'],
        'link' => $value['arbitros-link'],
        'new_blank' => $value['arbitros-link-newblank'],
      ];
    }

  }
}

get_modules('ajax-arbitros-content', 'page/lista-de-arbitros', [
  'arbitro_data' => $content[$data->arbitro]
]);