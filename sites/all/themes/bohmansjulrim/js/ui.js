/*
  Wondering about them behaviors and related oddities?
  Begin here: http://drupal.org/node/756722
*/

(function ($) {
  Drupal.behaviors.bohmansjulrim = {
    attach: function (context, settings) {


      // Initialize selectBox
      $('select').selectBox();


    }
  };
}(jQuery));