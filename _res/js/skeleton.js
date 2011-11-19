/*jslint maxerr: 50, indent: 2 */
/*global jQuery:true */
/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, curly:true, browser:true, jquery:true, indent:2, maxerr:50 */
(function () {
  "use strict";

  var Skeleton = this.Skeleton || {};

  Skeleton.config = {
    animspeed : 500,
    messagingCloserLink : '<span class="closer">x<\/span>'
  };

  Skeleton.f = {
    messagingCloser : function (domElement) {
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

  Skeleton.init = function () {
    (function ($) {
      $('html.no-js').removeClass('no-js').addClass('with-js');
      $('div.messages').each(function () {
        Skeleton.f.messagingCloser(this);
      });
    }(jQuery));
  };

  jQuery(function () {
    Skeleton.init();
  });
}());