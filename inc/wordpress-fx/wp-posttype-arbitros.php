<?php

if (!defined('PATH')) exit;

function posttype_arbitros() 
{
	$labels = [
		'name' => 'Árbitros',
		'singular_name' => 'Árbitro',
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
      'slug' => 'lista-de-arbitros',
      'with_front' => true
    ]
	];

	register_post_type( 'arbitros', $args );
}
add_action( 'init', 'posttype_arbitros' );