<?php


// -----------
// Add Signika from Google web fonts
// -----------
drupal_add_css('http://fonts.googleapis.com/css?family=Signika:400,700,600,300');


// -----------
// Remove wrapping div on taxonomy header
// -----------
function bohmansjulrim_preprocess_page(&$vars) {
  if (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    //print '<pre>' . print_r($vars['page']['content']['system_main']['term_heading']['term']['description'], 1) . '</pre>';
    unset($vars['page']['content']['system_main']['term_heading']['term']['description']['#prefix']);
    unset($vars['page']['content']['system_main']['term_heading']['term']['description']['#suffix']);
  }
}