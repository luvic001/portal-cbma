<?php

if (!defined('PATH')) exit;

get_header();

get_modules('Content', 
  sprintf('single/%s', get_post_type())
);

get_footer();