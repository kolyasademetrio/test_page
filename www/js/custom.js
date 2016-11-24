$(document).ready(function(){
	/* функция для выпадающего меню */
	(function(){
		var $headerNavItem = $('.header-nav-item').children('a'),
			$headerNavSublist = $('.header-nav-sublist');

		$headerNavItem.on('click', function(e){
			e.preventDefault();
			$(this).next().slideToggle(400);
			$headerNavItem.next().not($(this).next()).slideUp();
		});
	})();
	/* функция для выпадающего меню Конец */


	/* функция для адаптивного меню */
	(function (menuBtn, menu, submenu, header) {
		var $menuBtn = menuBtn,
			$menu = menu,
			$submenu = submenu,
			$header = header,
			menuHeight;

		$menuBtn.on('click', function(){
			menuHeight = $header.height();
			$menu.css('top', menuHeight);
			$menu.slideToggle();
			if($submenu.is(':visible')){
				$submenu.hide();
			}
		});
	
		$(window).resize(function(){
			if (window.matchMedia('(min-width: 768px)').matches && $submenu.is(':visible')) {
				$submenu.hide();
			} else if (window.matchMedia('(min-width: 768px)').matches) {
				$menu.show();
			} else if (window.matchMedia('(max-width: 768px)').matches) {
				$menu.hide();
				$submenu.hide();
				$('.header').css({'height':''});
				$('.header-nav-item>a').css({'line-height':''});
			}
		});
	})($('.header .menu-hamburger'), $('.header-nav-list'), $('.header-nav-sublist'), $('.header'));
	/* функция для адаптивного меню Конец */


	/* функция для липкого меню(лучше изменять свойства добавляя/удаляя класы, но так как здесь надо
	изменить два свойства разных элементов на одинаковую величину для удобства меняю через .css()) */
	(function (elem, inner, height){
		var $elem = elem,
			$inner = inner,
			height = height;

	
		$(window).scroll(function() {
	        if($(this).scrollTop() > 0 && window.matchMedia('(min-width: 768px)').matches) {
	            $elem.css({
	            	'height': height
	            });
	            $inner.css({
	            	'line-height': height + 'px'
	            });
	        } else {
	            $elem.css({
	            	'height': ''
	            });
	            $inner.css({
	            	'line-height': ''
	            });
	        }
	    });
	})($('.header'), $('.header-nav-item>a'), 60);
    /* функция для липкого меню Конец */


    /* функция для анимации точек на лице main */
    (function (){
    	var $elHovered = $('.main-points'),
    		$elChanged = $('.main-points .tooltip');
	     
		$elHovered.hover(function(){
			$elChanged.slideDown(600);
		}, function(){
			$elChanged.slideUp(600);
		});

    })();
    /* функция для анимации точек на лице main Конец */
});