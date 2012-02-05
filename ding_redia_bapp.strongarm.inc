<?php

/**
 * Implementation of hook_strongarm().
 */
function ding_redia_bapp_strongarm() {
  $export = array();
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'date_format_unix_timestamp';
  $strongarm->value = 'U';

  $export['date_format_unix_timestamp'] = $strongarm;
  return $export;
}
