(function($){"use strict";$('body').append("<a href='https://themeforest.net/checkout/from_item/36585205?license=regular&support=bundle_6month&_ga=2.233378013.2131256700.1648234835-1425290503.1590986634' class='buy-now-btn' target='_blank'><img src='assets/img/envato.png' alt='envato'/>Buy Now</a>");$(window).on('load',function(event){$('.js-preloader').delay(500).fadeOut(500);});$('.mobile-sidebar').on('click',function(){$('.header-top').toggleClass('open');});$('.close-sidebar').on('click',function(){$('.header-top').removeClass('open');});$('.searchbtn').on('click',function(){$('.search-area').toggleClass('open');});$('.close-searchbox').on('click',function(){$('.search-area').removeClass('open');});$(".odometer").appear(function(e){var odo=$(".odometer");odo.each(function(){var countNumber=$(this).attr("data-count");$(this).html(countNumber);});});$(".language-option").each(function(){var each=$(this)
each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());var allOptions=$(".language-dropdown-menu").children('a');each.find(".language-dropdown-menu").on("click","a",function(){allOptions.removeClass('selected');$(this).addClass('selected');$(this).closest(".language-option").find(".lang-name").html($(this).text());});})
$('.hero-wrap.style3').mousemove(function(e){var wx=$(window).width();var wy=$(window).height();var x=e.pageX-this.offsetLeft;var y=e.pageY-this.offsetTop;var newx=x-wx/2;var newy=y-wy/2;$('.hero-content').each(function(){var speed=$(this).attr('data-speed');if($(this).attr('data-revert'))speed*=-.4;TweenMax.to($(this),1,{x:(1-newx*speed),y:(1-newy*speed)});});});$(".hero-slider-one").owlCarousel({nav:true,dots:false,loop:true,margin:20,items:1,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,});$(".hero-img-slider").owlCarousel({nav:true,dots:false,loop:true,margin:15,items:1.15,rtl:true,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,});$(".testimonial-slider-one").owlCarousel({nav:false,dots:true,loop:true,margin:25,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,});$(".testimonial-slider-two").owlCarousel({nav:false,dots:true,loop:true,margin:25,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,margin:0,},768:{margin:0,items:1,},992:{items:2,}}});$(".testimonial-slider-three").owlCarousel({nav:true,dots:false,loop:true,margin:25,items:1,thumbs:false,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,},768:{items:2,},1200:{items:2,}}});$(".popular-post-slider").owlCarousel({nav:false,dots:true,loop:true,margin:20,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,});$(".team-slider-one").owlCarousel({nav:true,dots:false,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],loop:true,margin:25,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,},768:{items:2,},1200:{items:3,}}});$(".course-slider-one").owlCarousel({nav:true,dots:false,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],loop:true,margin:25,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,},768:{items:2,},1200:{items:3,}}});$(".vehicle-slider-one").owlCarousel({nav:true,dots:false,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],loop:true,margin:25,items:1,thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,},768:{items:2,},1200:{items:3,}}});$(".blog-slider-one").owlCarousel({nav:true,dots:false,loop:true,margin:20,items:1,navText:['<i class="flaticon-left-arrow"></i>','<i class="flaticon-right-arrow"></i>'],thumbs:false,smartSpeed:1300,autoplay:false,autoplayTimeout:4000,autoplayHoverPause:false,responsiveClass:true,autoHeight:true,responsive:{0:{items:1,},768:{items:2,},1200:{items:3,}}});var wind=$(window);var sticky=$('.header-wrap');wind.on('scroll',function(){var scroll=wind.scrollTop();if(scroll<100){sticky.removeClass('sticky');}else{sticky.addClass('sticky');}});$(window).on('resize',function(){if($(window).width()<=1199){$('.collapse.navbar-collapse').removeClass('collapse');}else{$('.navbar-collapse').addClass('collapse');}});$('.mobile-menu a').on('click',function(){$('.main-menu-wrap').addClass('open');$('.collapse.navbar-collapse').removeClass('collapse');});$('.mobile_menu a').on('click',function(){$(this).parent().toggleClass('open');$('.main-menu-wrap').toggleClass('open');});$('.menu-close').on('click',function(){$('.main-menu-wrap').removeClass('open')});$('.mobile-top-bar').on('click',function(){$('.header-top').addClass('open')});$('.close-header-top button').on('click',function(){$('.header-top').removeClass('open')});var $offcanvasNav=$('.navbar-nav'),$offcanvasNavSubMenu=$offcanvasNav.find('.dropdown-menu');$offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="ri-arrow-down-s-line"></i></span>');$offcanvasNavSubMenu.slideUp();$offcanvasNav.on('click','li a, li .menu-expand',function(e){var $this=$(this);if(($this.attr('href')==='#'||$this.hasClass('menu-expand'))){e.preventDefault();if($this.siblings('ul:visible').length){$this.siblings('ul').slideUp('slow');}else{$this.closest('li').siblings('li').find('ul:visible').slideUp('slow');$this.siblings('ul').slideDown('slow');}}
if($this.is('a')||$this.is('span')||$this.attr('class').match(/\b(menu-expand)\b/)){$this.parent().toggleClass('menu-open');}else if($this.is('li')&&$this.attr('class').match(/\b('dropdown-menu')\b/)){$this.toggleClass('menu-open');}});AOS.init();function BackToTop(){$('.back-to-top').on('click',function(){$('html, body').animate({scrollTop:0},100);return false;});$(document).scroll(function(){var y=$(this).scrollTop();if(y>600){$('.back-to-top').fadeIn();$('.back-to-top').addClass('open');}else{$('.back-to-top').fadeOut();$('.back-to-top').removeClass('open');}});}
BackToTop();})(jQuery);function setTheme(themeName){localStorage.setItem('dizu_theme',themeName);document.documentElement.className=themeName;}
function toggleTheme(){if(localStorage.getItem('dizu_theme')==='theme-dark'){setTheme('theme-light');}else{setTheme('theme-dark');}}
(function(){if(localStorage.getItem('dizu_theme')==='theme-dark'){setTheme('theme-dark');document.getElementById('slider').checked=false;}else{setTheme('theme-light');document.getElementById('slider').checked=true;}})();