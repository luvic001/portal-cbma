<?php

if (!defined('PATH')) exit;

get_header();

// Homepage Content
get_modules('Content', 'page/home');

get_footer();