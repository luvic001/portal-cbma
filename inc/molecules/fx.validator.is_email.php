<?php

/**
 * @author Lucas Victor
 */

if (!function_exists('is_email')) {
  function is_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
}