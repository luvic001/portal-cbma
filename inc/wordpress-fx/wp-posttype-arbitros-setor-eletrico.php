<?php

if (!defined('PATH')) exit;

function posttype_arbitros_setor_eletrico() 
{
	$labels = [
		'name' => 'Árbitros Setor Elétrico',
		'singular_name' => 'Árbitro Setor Elétrico',
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
      'slug' => 'lista-de-arbitros-setor-eletrico',
      'with_front' => true
    ]
	];

	register_post_type( 'arbitros_eletrico', $args );
}
add_action( 'init', 'posttype_arbitros_setor_eletrico' );