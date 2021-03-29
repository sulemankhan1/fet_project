<?php

function __($str) {
  $ci =& get_instance();
  return $ci->lang->line($str);
}

function __e($str) {
  $ci =& get_instance();
  $ci->load->language('Eng','Eng');
  return $ci->lang->line($str);
}
