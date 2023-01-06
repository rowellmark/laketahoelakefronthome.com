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
			initCounter();
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

			$(w).on("load", function () {
				$menuContainer.mCustomScrollbar();
			});


			$burgerButton.on('click', function () {

				$(b).addClass('burger-nav-open');
				$(this).addClass('open');
				$burgerBody.addClass('open');

			});

			$('.expanded-contact-info').appendTo('#expanded-menu');


			$burgerClose.on('click', function () {
				$(b).removeClass('burger-nav-open');
				$(this).removeClass('open');
				$burgerBody.removeClass('open');
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



			$nav.splitNav({
				logo: '.logo',
				splitCountEqual: true
			});

		}

		function properties() {


			let propertiesSlide = new Splide('.property-lists', {
				arrows: false
			});
			propertiesSlide.mount();
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
					var myelement = $(".hp-ratings-container");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".rating-lists em").each(function () {
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

		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');