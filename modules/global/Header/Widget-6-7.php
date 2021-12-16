<?php

if (!defined('PATH')) exit;

foreach ([6, 7] as $label) {
  dynamic_sidebar(
    sprintf(
      'widget_header_%d',
      $label
    )
  );
}