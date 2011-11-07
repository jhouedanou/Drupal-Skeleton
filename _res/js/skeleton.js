var Skeleton = this.Skeleton || {};

Skeleton.config = {};

Skeleton.f = {};

Skeleton.init = function(){
  (function($){
    $('html.no-js').removeClass('no-js');
  }(jQuery));
};

jQuery(function(){ Skeleton.init(); });