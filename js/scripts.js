(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		function __construct() {
			intro();
			burgerMenu();
			onScrollFixed();
			initNavigation();
			properties();
			initCounter();
			testimonials();
			map();
			AOS.init({ disable: 'mobile' });
		}

		function intro() {
			const $introBody = $('.intro-video');
			const $introLogo = $('.intro-video img');



			setTimeout(function () {
				$introLogo.fadeOut();
				$introBody.delay(500).animate({
					top: '-100%',
					opacity: 0
				});
			}, 4000)
		}
		function burgerMenu() {

			const $burgerButton = $('.expanded-menu-bttn');
			const $burgerBody = $('.expanded-menu-wrapper');
			const $menuContainer = $('.expanded-menu-container');
			const $burgerClose = $('.expanded-close');
			const $menu = $('#expanded-menu');


			let mouse_is_inside = false;

			$menuContainer.hover(function () {
				mouse_is_inside = true;
				console.log('inside');
			}, function () {
				mouse_is_inside = false;
				console.log('outside');
			});


			$(w).on("load", function () {
				$menuContainer.mCustomScrollbar();
			});


			$menu.splitNav({
				splitCount: 4
			});
			

			$burgerButton.on('click', function () {

				$(b).addClass('burger-nav-open');
				$(this).addClass('open');
				$burgerBody.addClass('open');

			});


			$burgerClose.on('click', function () {
				$(b).removeClass('burger-nav-open');
				$(this).removeClass('open');
				$burgerBody.removeClass('open');
			});

			$burgerBody.on('click', function () {
				if (mouse_is_inside == false) {
					$burgerBody.removeClass('open');
				}
			});

		}
		function onScrollFixed() {

			this.onScrollFixed = function () {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('fh-show');
						}
						else {
							$header.removeClass('fh-show');
						}
					}
					else {
						$header.removeClass('fh-show');
					}

				});
			}
			this.onScrollFixed();
		}

		function initNavigation() {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}




		function properties() {

			let properties = new Splide('.prop-lists', {
				arrows: false,
				pagination: false
			});
			properties.mount();


			$('.properties-pagination button').on('click', function (e) {
				e.preventDefault();
				var $this = $(this);
				var type = $this.attr('data-arrow');

				console.log(type);
				// for prev
				if (type == 'prev') {
					properties.go('<');
				}
				if (type == 'next') {
					properties.go('>');
				}
			});
		}


		function commaSeparateNumber(val) {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		function initCounter() {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hp-work-with-us-container");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".hp-work-lists em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}


		function testimonials() {

			let testimonials = new Splide('.testi-lists', {
				arrows: false,
				pagination: false
			});
			testimonials.mount();

			$('.testi-custom-arrow button').on('click', function (e) {
				e.preventDefault();
				var $this = $(this);
				var type = $this.attr('data-arrow');

				console.log(type);
				// for prev
				if (type == 'prev') {
					testimonials.go('<');
				}
				if (type == 'next') {
					testimonials.go('>');
				}
			});
		}

		function mapresponsiveness() {
			var map = jQuery(".aoe-map-main");
			var mapOrigWidth = 660;
			var mapOrigHeight = 817;
			var container = jQuery(".aoe-map-outer");
			var containerWidth = container.width();
			var scale = containerWidth / mapOrigWidth;
			scale = scale > 1 ? scale : scale;
			map.css({
				transform: 'scale(' + scale + ')',
				transformOrigin: '0 0'
			});
			container.css({
				height: (mapOrigHeight * scale)
			});
		}

		function map() {

			const $mapAreaTarget = $('area[data-map-target]');
			const $mapMenuTarget = $('.aoe-comm-areas ul li');


			$mapAreaTarget.hover(function () {
				$('.aoe-map-hovers .' + $(this).data('map-target')).addClass('active');
				$('.aoe-comm-areas ul li[data-map-target="' + $(this).data('map-target') + '"]').addClass('active');
			}, function () {
				$('.aoe-map-hovers .' + $(this).data('map-target')).removeClass('active');
				$('.aoe-comm-areas ul li[data-map-target="' + $(this).data('map-target') + '"]').removeClass('active');
			});

			$mapMenuTarget.hover(function () {
				$('.aoe-map-hovers .' + $(this).data('map-target')).addClass('active');
			}, function () {
				$('.aoe-map-hovers .' + $(this).data('map-target')).removeClass('active');
			});


			mapresponsiveness();
			jQuery(window).resize(mapresponsiveness);

		}

		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');