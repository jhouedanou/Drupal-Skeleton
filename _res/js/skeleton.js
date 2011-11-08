var Skeleton = this.Skeleton || {};

Skeleton.config = {
  animspeed : 500,
  messagingCloserLink : '<span class="closer">x<\/span>'
};

Skeleton.f = {
  messagingCloser : function (domElement) {
    (function($){
      var $jqElement;
      $jqElement = $(domElement);
      $jqElement.append(Skeleton.config.messagingCloserLink);
      $jqElement.find('span.closer').click(function(){
        $jqElement.slideUp(Skeleton.config.animspeed);
      });
    }(jQuery));
  }
};

Skeleton.init = function(){
  (function($){
    $('html.no-js').removeClass('no-js').addClass('with-js');
    $('div.messages').each(function(){ Skeleton.f.messagingCloser(this); });
  }(jQuery));
};

jQuery(function(){ Skeleton.init(); });