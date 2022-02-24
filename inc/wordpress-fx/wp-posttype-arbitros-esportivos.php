<?php

if (!defined('PATH')) exit;

function posttype_arbitros_esportivos() 
{
	$labels = [
		'name' => 'Árbitros Esportivos',
		'singular_name' => 'Árbitro Esportivo',
	];

	$args = [
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'menu_icon' => 'dashicons-groups',
		'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
		'can_export' => true,
		'has_archive' => false,
    'rewrite' => [
      'slug' => 'lista-de-arbitros-esportivos',
      'with_front' => true
    ]
	];

	register_post_type( 'arbitros_esportivos', $args );
}
add_action( 'init', 'posttype_arbitros_esportivos' );