<?php

if (!defined('PATH')) exit;

function arbitros_data() {
  hjson();

  ob_start();
  get_modules('ajax-arbitros', 'page/lista-de-arbitros');
  $content = ob_get_contents();
  ob_end_clean();

  fjson([
    'success' => true,
    'content' => $content
  ]);
}

add_action('wp_ajax_arbitros_data', 'arbitros_data');
add_action('wp_ajax_nopriv_arbitros_data', 'arbitros_data');