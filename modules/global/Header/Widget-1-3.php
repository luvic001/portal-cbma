<?php

if (!defined('PATH')) exit;

foreach ([1, 2, 3] as $label) {
  dynamic_sidebar(
    sprintf(
      'widget_header_%d',
      $label
    )
  );
}