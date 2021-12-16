<?php

if (!defined('PATH')) exit;

get_header();

get_modules('Content', 
  sprintf('archive/%s', get_post_type() ? get_post_type() : 'post')
);

get_footer();