<?php

/**
 * @author Lucas Victor
 * @uses format-only_number.php @version 1.0.0
 */

function is_phone($phone) {
  $phone = only_number($phone);
  $len = strlen($phone);
  return ( $len >= 8 and $len <= 11 );
}