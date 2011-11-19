/**
 * @file
 * Scripts used by the Skeleton base theme. 
 * 
 * @author MRaichelson <mraichelson@navigationarts.com>
 */
/*jslint maxerr: 50, indent: 2 */
/*global jQuery:true */
/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, curly:true, browser:true, jquery:true, indent:2, maxerr:50 */
(function () {
  "use strict";

  var Skeleton = this.Skeleton || {};

  // Skeleton configuration and reused settings.
  Skeleton.config = {
    animspeed : 500,
    messagingCloserLink : '<span class="closer">x<\/span>'
  };

  // Skeleton reusable functions.
  Skeleton.f = {
    messagingCloser : function (domElement) {
      // This function adds a close element to Drupal's system messaging
      // elements so that they can be collapsed out of the way.
      (function ($) {
        var $jqElement;
        $jqElement = $(domElement);
        $jqElement.append(Skeleton.config.messagingCloserLink);
        $jqElement.find('span.closer').click(function () {
          $jqElement.slideUp(Skeleton.config.animspeed);
        });
      }(jQuery));
    }
  };

  // Page initialization tasks.
  Skeleton.init = function () {
    (function ($) {
      // Apply a close button to all messaging containers.
      $('div.messages').each(function () {
        Skeleton.f.messagingCloser(this);
      });
    }(jQuery));
  };

  // Use jQuery's $(doc).ready() to call the Skeleton page initialization tasks.
  jQuery(function () {
    Skeleton.init();
  });
}());