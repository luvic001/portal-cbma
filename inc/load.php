<?php

if (!defined('PATH')) exit;

$files = glob(PATH . '/inc/**/*.php');

foreach ($files as $file)
  require($file);