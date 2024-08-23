<?php

add_filter('Municipio/Admin/Acf/PrefillIconChoice', function($field_names) {
  $field_names[] = 'mod_contactbanner_cta_icon';
  return $field_names;
});
