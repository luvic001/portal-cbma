<?php

if (!defined('PATH')) exit;

function posttype_cursos() 
{
	$labels = [
		'name' => 'Cursos',
		'singular_name' => 'Curso',
	];

	$args = [
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
		'can_export' => true,
		'has_archive' => true
	];

	register_post_type( 'cursos', $args );
}
add_action( 'init', 'posttype_cursos' );