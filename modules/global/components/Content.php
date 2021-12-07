<?php

if (!defined('PATH')) exit;

if (have_rows('componentes')):
  while (have_rows('componentes')):
    the_row();

    get_modules(get_row_layout(), 'global/components');

  endwhile;
endif;