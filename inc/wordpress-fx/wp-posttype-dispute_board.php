<?php

if (!defined('PATH')) exit;

function posttype_dispute_board() 
{
	$labels = [
		'name' => 'Membros Dispute Board',
		'singular_name' => 'Membro Dispute Board',
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
      'slug' => 'dispute-board',
      'with_front' => true
    ]
	];

	register_post_type( 'dispute_board', $args );
}
add_action( 'init', 'posttype_dispute_board' );