jQuery(document).ready(function(e) {
	
	/* DIV高度自動延展100% (載入、平板翻轉、視窗縮放) */
  var $win = jQuery(window), $body = jQuery('body');
  $win.bind('load resize', function(e) {
    var $autoDiv = jQuery('.autoOn');
    if ($autoDiv.length > 0) {
      var $none = jQuery('.autoFix'),
        autoDivHeight = $autoDiv.outerHeight(true),
        autoDivBorder = autoDivHeight - $autoDiv.height(),
        delBodyMargin = parseInt($body.css('marginTop')) + parseInt($body.css('marginBottom')),
        none = $none.outerHeight(true) - $none.height(),
        delHeight = 0;
    
      if ($autoDiv.data('rawHeight') === undefined) {
        $autoDiv.data('rawHeight', $autoDiv.height());
      }
      var _rawHeight = $autoDiv.data('rawHeight');
    
      jQuery('.autoOff').each(function() {
        delHeight += jQuery(this).outerHeight(true);
      });
    
      var _height = $win.height() - delHeight - delBodyMargin - autoDivBorder - none;
    
      if (_height < _rawHeight) {
        $autoDiv.height('auto');
      } else {
        $autoDiv.height(_height);
      }
    }
  });
	
	// 主選單從中間上下打開
  jQuery('.gMenu li').hover(function() {
    
    jQuery('.bg', this).css({left: '65px', width: 0, opacity: 0}).animate({left: 0, width: '130px', opacity: 1}, {queue: false, duration: 1200, easing: 'easeOutQuart'});
  }, function() {
    
    jQuery('.bg', this).animate({left: '65px', width: 0, opacity: 0}, {queue: false, duration: 1200, easing: 'easeOutQuart'});
  });

});