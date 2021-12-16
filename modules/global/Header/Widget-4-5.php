<?php

if (!defined('PATH')) exit;

foreach ([4, 5] as $label) {
  dynamic_sidebar(
    sprintf(
      'widget_header_%d',
      $label
    )
  );
}