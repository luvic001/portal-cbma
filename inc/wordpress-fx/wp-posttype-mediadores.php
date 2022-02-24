<?php

if (!defined('PATH')) exit;

function posttype_mediadores() 
{
	$labels = [
		'name' => 'Mediadores',
		'singular_name' => 'Mediador',
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
      'slug' => 'lista-de-mediadores',
      'with_front' => true
    ]
	];

	register_post_type( 'mediadores', $args );
}
add_action( 'init', 'posttype_mediadores' );