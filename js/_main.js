(function($){$window=$(window);$slide=$('.homeSlide');$body=$('body');$body.imagesLoaded(function(){$('.portfolio-first').hide();setTimeout(function(){adjustWindow();},1);});function adjustWindow(){winH=$window.height();if(winH<=868){winH=868;}$slide.height(winH);}})(jQuery);