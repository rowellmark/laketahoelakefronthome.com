<?php get_header(); ?>

<section class="hero relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('
			[aios_slider id="Homepage Slideshow"]
		'); ?>
	</div><!-- end of slideshow -->
	<div class="social-media-banner absolute top-0 left-0 h-100 flex items-center" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
		<ul class="flex flex-col items-center">
			<li>
				<a href="#" target="_blank"><i class="ai-font-instagram"></i>Instagram</a>
			</li>
			<li>
				<a href="#" target="_blank"><i class="ai-font-youtube"></i>Youtube</a>
			</li>
			<li>
				<div class="sm-divider"></div>
			</li>
			<li>
				<h4>connect</h4>
			</li>
		</ul>
	</div>
</section><!-- end of hero -->
<section class="hp-quick-search relative">
	<div class="container">
		<div class="qc-title" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title">
				<h2 class="inline-block">
					<span>quick</span>
					<em>search</em>
				</h2>
			</div><!-- end of default title -->
		</div><!-- end of qc title -->

		<div class="qc-form w-100" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<form action="#" method="get" class="flex">

				<div class="qc-form-col">
					<label for="qc-property-type"></label>
					<select name="property-type" id="qc-property-type">
						<option value="#">property type</option>
					</select>
				</div><!-- end of qc form col -->
				<div class="qc-form-col">
					<label for="qc-city-zip"></label>
					<select name="city-zip" id="qc-city-zip">
						<option value="#">city or zip</option>
					</select>
				</div><!-- end of qc form col -->
				<div class="qc-form-col">
					<label for="qc-beds"></label>
					<select name="beds" id="qc-beds">
						<option value="#">Beds</option>
					</select>
				</div><!-- end of qc form col -->
				<div class="qc-form-col">
					<label for="qc-baths"></label>
					<select name="baths" id="qc-baths">
						<option value="#">Baths</option>
					</select>
				</div><!-- end of qc form col -->

				<div class="qc-form-col">
					<label for="qc-min-price"></label>
					<select name="min-price" id="qc-min-price">
						<option value="#">min. $</option>
					</select>
				</div><!-- end of qc form col -->

				<div class="qc-form-col">
					<label for="qc-max-price"></label>
					<select name="max-price" id="qc-max-price">
						<option value="#">max. $</option>
					</select>
				</div><!-- end of qc form col -->

				<div class="qc-bttn relative">
					<div class="qc-bttn-wrap relative">
						<input type="submit" value="submit">
						<i></i>
					</div>
					
				</div>				

			</form>
		</div>

		<p class="text-right">Real Estate IDX Powered by iHomefinder</p>

	</div>
</section>
<section class="hp-cta">
	<div class="container flex justify-between">

		<div class="cta-list" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="[blogurl]/find-my-dream-home/" class="block w-100 relative">
				<span><i class="icon1"></i>Find my dream home</span>
			</a>
		</div>
		<div class="cta-list" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<a href="[blogurl]/what-is-my-home-worth/" class="block w-100 relative">
				<span><i class="icon2"></i>What’s my home worth?</span>
			</a>
		</div>
		
	</div>
</section><!-- end of cta -->
<section class="hp-about">
	<div class="hp-about-container flex expanded-container">
		<div class="hp-about-content" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title">
				<h2 class="inline-block">
					<span>about</span>
					<em>Becky <br> Arnold</em>
				</h2>
			</div><!-- end of default title -->
			<p>It is with great pleasure that Becky welcomes you to Lake Tahoe, and to her website. With years of experience in the market, she knows how crucial it is for you to find relevant, up-to- date information. The search is over. Her website is designed to be your one-stop shop for real estate in Lake Tahoe.</p>
			<div class="default-button">
				<a href="#"><span>read more +</span></a>
			</div>

		</div><!-- end of about content -->
		<div class="hp-about-image relative" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="900">
			<a href="#" class="block aios-video-popup relative">
				<canvas width="735" height="461" class="block w-100"></canvas>
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/about-photo.jpg" alt="Becky Arnold" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
			</a>
		</div><!-- end of about image -->
	</div>
</section><!-- end of about -->
<section class="featured-listings">
	<div class="featured-listings-container">

		<div class="default-title text-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<h2 class="inline-block">
				<span>featured</span>
				<em>listings</em>
			</h2>
		</div><!-- end of default title -->


		<div class="prop-lists splide" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="splide__track">
				<div class="splide__list">

					<div class="prop-list-set flex splide__slide">
						<div class="prop-list-left">

							<div class="prop-list ">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop1.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							
						</div><!-- end of property left -->

						<div class="prop-list-right flex flex-wrap-wrap">
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop2.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop3.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop4.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop5.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>
							</div><!-- end of property -->
						</div><!-- end of property right -->
					</div><!-- end of property set -->

					
					<div class="prop-list-set flex splide__slide">
						<div class="prop-list-left">

							<div class="prop-list ">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop1.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							
						</div><!-- end of property left -->

						<div class="prop-list-right flex flex-wrap-wrap">
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop2.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop3.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop4.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>

							</div><!-- end of property -->
							<div class="prop-list">
								<a href="#" class="block relative w-100">
									<div class="prop-image relative">
										<canvas width="373" height="343" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/prop5.jpg" alt="1234 Pine Drop dr 54" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
									</div>

									<div class="prop-content flex justify-between">
										<div class="prop-text">
											<h2>1234 Pine Drop dr 54 <span>lake tahoe, ca</span></h2>
										</div>
										<div class="default-button">
											<em><span>view details +</span></em>
										</div>
									</div>
								</a>
							</div><!-- end of property -->
						</div><!-- end of property right -->
					</div><!-- end of property set -->

				</div>
			</div>
		</div><!-- end of properties -->


		<div class="properties-pagination flex justify-center items-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<button data-arrow="prev" aria-label="Prev"><i class="ai-font-arrow-g"></i></button>
			<div class="default-button">
				<a href="#" class="block relative w-100"><span>view all listings +</span></a>
			</div>
			<button data-arrow="next" aria-label="Next"><i class="ai-font-arrow-g"></i></button>
		</div>

	</div>
</section><!-- end of featured listings -->

<section class="search-by-map relative">
	<!-- Map -->
<div id="interactive-map">

	<div class="aoe-map-container">
		<div class="aoe-map-wrapper flex justify-between items-start">

			<!-- Comm List -->
			<div class="aoe-map-content relative" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="aoe-map-wrap relative">
					<div class="default-title">
						<h2 class="inline-block">
							<span>search areas by</span>
							<em>map</em>
						</h2>
					</div><!-- end of default title -->
					<div class="aoe-comm-areas">
						<ul class="flex flex-wrap-wrap items-start">
						
							<li class="aoe-comm-title" data-map-target="tahoe-city"><a href="#">Tahoe City</a></li>
							<li class="aoe-comm-title" data-map-target="carnelian-bay"><a href="#">Carnelian Bay</a></li>
							<li class="aoe-comm-title" data-map-target="homewood"><a href="#">Homewood </a></li>
							<li class="aoe-comm-title" data-map-target="noblesville"><a href="#">Tahoe Vista</a></li>
							<li class="aoe-comm-title" data-map-target="tahoma"><a href="#">Tahoma</a></li>
							<li class="aoe-comm-title" data-map-target="kings-beach"><a href="#">Kings Beach  </a></li>
							<li class="aoe-comm-title" data-map-target="squaw-valley"><a href="#">Squaw Valley/<br>Alpine Meadows</a></li>
							<li class="aoe-comm-title" data-map-target="truckee"><a href="#">Truckee</a></li>
						</ul>
					</div>

					<div class="default-button">
						<a href="#" class="block relative w-100"><span>learn more +</span></a>
					</div>
				</div>
			
			</div>


			<!-- Desktop -->
			<div class="aoe-map-outer" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
				<div class="aoe-map-main">
					<img class="aoe-map-transparent" src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/transparent.png" alt="Map Transparent" width="1600" height="1150" usemap="#map-area">
					<map name="map-area" id="map-area">

						<!-- Tahoe City -->
						<area data-map-target="tahoe-city" alt="Tahoe City" href="#" coords="424,392,439,392,440,403,450,404,454,409,456,417,455,424,446,424,439,426,431,429,419,430,411,435,404,443,397,447,400,455,399,463,397,472,395,479,386,486,388,499,385,504,370,507,363,508,364,516,368,533,370,538,362,538,355,538,348,537,345,560,332,577,330,586,329,594,329,603,330,610,323,615,311,617,296,613,291,604,292,596,298,594,301,585,307,583,311,576,312,568,300,561,316,562,326,548,341,541,347,531,352,525,365,508,340,492,343,482,354,479,378,480,386,471,388,457,386,433,389,426,379,415,390,415,401,412,407,412,420,421,423,407,428,400" shape="poly">
						<area data-map-target="tahoe-city" alt="Tahoe City" href="#" coords="370,359,378,357,379,350,384,348,379,341,387,341,392,353,400,355,396,370,385,374,377,374,391,365,397,357,385,358" shape="poly">

						<!-- Homewood -->
						<area data-map-target="homewood" alt="Homewood" href="#" coords="363,510,375,510,381,511,377,520,377,527,380,538,380,545,377,553,374,561,377,570,381,581,381,586,384,591,384,598,374,598,370,605,369,611,378,618,380,624,371,635,374,639,384,628,384,640,371,648,359,652,347,654,343,644,333,639,329,624,332,608,329,597,332,591,334,575,345,562,348,543,362,541,372,542" shape="poly">

						<!-- Tahoma -->
						<area data-map-target="tahoma" alt="Tahoma" href="#" coords="383,590,389,591,394,595,407,601,421,606,433,613,435,626,435,636,427,644,420,651,412,658,406,665,400,676,391,681,385,681,389,669,387,641,390,627,374,637,383,624,380,615,372,613,374,600,387,601" shape="poly">

						<area data-map-target="tahoma" alt="Tahoma" href="#" coords="442,721,450,726,452,732,451,739,450,745,443,738,439,729" shape="poly">

						<!-- Squaw Valley/ Alpine Meadows  -->
						<area data-map-target="squaw-valley" alt="Squaw Valley/Alpine Meadows" href="#" coords="231,363,240,363,243,353,252,351,260,359,265,362,275,351,281,346,292,350,302,348,305,353,311,351,318,350,324,354,325,360,331,364,349,363,389,362,380,370,366,373,368,382,369,388,374,395,368,404,374,411,380,415,386,423,386,431,385,456,385,469,382,477,372,475,364,475,355,479,345,481,339,489,358,503,364,515,346,529,348,537,331,547,315,561,301,560,303,567,312,569,312,578,303,584,298,589,294,597,260,594,259,440,248,437,238,419,239,409,214,405,221,392,229,388,232,379" shape="poly">

						<!-- Carnelian Bay -->
						<area data-map-target="carnelian-bay" alt="Carnelian Bay" href="#" coords="480,311,469,312,461,322,464,326,454,329,443,332,446,337,438,351,443,361,445,367,428,359,414,362,419,367,421,376,421,383,427,388,444,389,443,399,455,404,461,392,466,387,466,367,472,364,480,362,486,356,489,347,489,337,472,320" shape="poly">


						<!-- Tahoe Vista -->
						<area data-map-target="tahoe-vista" alt="Tahoe Vista" href="#" coords="483,299,493,299,499,293,510,289,524,294,537,297,532,304,529,315,526,332,529,345,501,343,492,346,487,329,474,322,479,312,483,304" shape="poly">

						<!-- Kings Beach -->
						<area data-map-target="kings-beach" alt="Kings Beach" href="#" coords="542,276,548,275,553,278,561,278,561,369,554,364,546,351,534,346,530,338,529,324,531,313,534,305,538,300,542,291" shape="poly">


						<!-- TRUCKEE -->
						<area data-map-target="truckee" alt="Truckee" href="#" coords="245,39,315,42,332,60,348,43,339,39,354,25,365,28,390,16,396,7,401,11,404,4,420,8,425,3,434,8,445,3,451,2,448,10,449,24,449,32,453,39,483,41,478,54,475,60,475,70,482,81,489,84,492,90,500,93,510,97,497,109,482,100,480,94,471,97,466,102,466,113,461,118,482,121,489,130,488,139,496,140,491,145,497,150,503,149,516,152,532,142,536,160,536,168,549,174,561,180,562,276,552,275,544,274,542,282,536,267,529,270,519,273,504,286,500,292,490,299,484,299,481,310,472,310,461,316,459,323,447,328,441,324,445,334,439,349,442,361,429,359,420,360,415,366,419,369,422,375,425,384,425,392,425,400,420,409,419,418,404,402,406,410,397,412,390,413,377,409,376,396,379,391,371,381,374,373,391,374,401,371,404,359,398,351,392,342,382,340,385,350,375,358,334,362,329,347,315,350,310,347,287,344,271,357,260,349,251,349,245,353,245,361,228,360,206,346,191,332,184,325,175,331,168,336,150,331,147,339,157,343,162,351,119,341,126,349,144,351,141,359,146,363,155,361,159,367,145,369,129,367,127,373,108,379,105,387,84,407,81,419,67,424,52,420,60,402,59,381,51,368,62,358,58,343,84,334,88,337,97,328,121,323,136,318,142,294,153,287,151,273,121,272,125,255,120,243,127,234,140,239,170,237,179,234,165,229,159,224,163,220,178,214,191,210,211,197,193,185,197,165,210,157,216,162,225,141,233,132,261,130,226,112,232,101,251,110,263,118,270,126,281,125,280,113,275,104,275,90,265,87,264,100,246,92,233,84,238,48" shape="poly">

						<area data-map-target="truckee" alt="Truckee" href="#" coords="34,178,33,163,44,157,49,162,58,153,61,167,71,165,75,173,86,175,90,182,90,195,89,202,91,207,81,212,88,218,106,215,88,230,87,238,89,248,87,256,88,264,88,272,44,274,45,259,35,253,23,239,4,231,24,206,29,194,19,191,14,196,6,198,9,182,20,175,28,177" shape="poly">




					</map>
					<img class="aoe-map-base" src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/map.png" alt="Map Base" width="660" height="817" usemap="#map-area">

					<!-- Hovers -->
					<div class="aoe-map-hovers">

						<div class="tahoe-city">
							<div class="aoe-map-pin">
								<span>Tahoe City</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/tahoe-city.png" alt="Tahoe City">
							</div>
						</div><!-- end of map hover child -->


						<div class="homewood">
							<div class="aoe-map-pin">
								<span>Homewood</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/homewood.png" alt="Homewood">
							</div>
						</div><!-- end of map hover child -->


						<div class="tahoma">
							<div class="aoe-map-pin">
								<span>Tahoma</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/tahoma.png" alt="Tahoma">
							</div>
						</div><!-- end of map hover child -->

						
						<div class="squaw-valley">
							<div class="aoe-map-pin">
								<span>Squaw Valley/<br>Alpine Meadows </span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/squaw-valley.png" alt="Squaw Valley/Alpine Meadows">
							</div>
						</div><!-- end of map hover child -->

						<div class="carnelian-bay">
							<div class="aoe-map-pin text-center">
								<span>Carnelian Bay</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/carnelian-bay.png" alt="Carnelian Bay">
							</div>
						</div><!-- end of map hover child -->

						<div class="tahoe-vista">
							<div class="aoe-map-pin text-center">
								<span>Tahoe Vista</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/tahoe-vista.png" alt="Carnelian Bay">
							</div>
						</div><!-- end of map hover child -->

						<div class="kings-beach">
							<div class="aoe-map-pin text-center">
								<span>Kings Beach</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/kings-beach.png" alt="Kings Beach">
							</div>
						</div><!-- end of map hover child -->

						<div class="truckee">
							<div class="aoe-map-pin text-center">
								<span>Truckee</span>
							</div>
							<div class="aoe-map-img">
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/truckee.png" alt="Truckee">
							</div>
						</div><!-- end of map hover child -->
					</div>
				</div>
			</div><!-- end of aoe outer -->

		</div>
	</div>
</div>
<!-- End of Map -->
</section>

<section class="hp-work-with-us relative">
	<div class="hp-work-with-us-container w-100">

		<div class="default-title text-center" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<h2 class="inline-block">
				<span>why work</span>
				<em>with us</em>
			</h2>
		</div><!-- end of default title -->

		<ul class="hp-work-lists flex items-start justify-center flex-wrap-wrap">

			<li>
				<span>#<em data-number="1"></em></span>
				<p>Team in  <br> lake tahoe, ca</p>
			</li>
			<li>
				<span><em data-number="5"></em>B+</span>
				<p>homes sold <br> in 2021</p>
			</li>
			<li>
				<span><em data-number="167"></em>K</span>
				<p>total <br> transactions</p>
			</li>
			<li>
				<span><em data-number="98"></em>k</span>
				<p>total email <br> subscribers</p>
			</li>
			<li>
				<span><em data-number="20"></em></span>
				<p>years of <br> expereience</p>
			</li>


		</ul>
	</div>
</section>
<section class="hp-testimonials">
	<div class="container flex">

		<div class="testimonials-title" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title">
				<h2 class="inline-block">
					<span>what our</span>
					<em>clients say<br>
					about us</em>
				</h2>
			</div>
		</div><!-- end of testimonials title -->

		<div class="hp-testi-container relative" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">

			<div class="testi-lists splide">
				<div class="splide__track">
					<div class="splide__list">

						<div class="testi-list splide__slide">
							<i>“</i>
							<p>“Becky’s local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable. Thank you so much, Becky!”</p>
							<h5>-Jane Doe</h5>
							<div class="default-button">
								<a href="#" class="inline-block relative w-100"><span>read more +</span></a>
							</div>
						</div><!-- end of testi list -->
						<div class="testi-list splide__slide">
							<i>“</i>
							<p>“Becky’s local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable. Thank you so much, Becky!”</p>
							<h5>-Jane Doe</h5>
							<div class="default-button">
								<a href="#" class="inline-block relative w-100"><span>read more +</span></a>
							</div>
						</div><!-- end of testi list -->
						<div class="testi-list splide__slide">
							<i>“</i>
							<p>“Becky’s local market knowledge, expertise, and amazing dedication made the whole buying process truly enjoyable. Thank you so much, Becky!”</p>
							<h5>-Jane Doe</h5>
							<div class="default-button">
								<a href="#" class="inline-block relative w-100"><span>read more +</span></a>
							</div>
						</div><!-- end of testi list -->

					</div>
				</div>
			</div><!-- end of testi lists -->

			<div class="testi-custom-arrow absolute flex items-center">
				<button data-arrow="prev" aria-label="Prev"><i class="ai-font-arrow-g"></i></button>
				<div class="paginate-divider"></div>
				<button data-arrow="next" aria-label="Next"><i class="ai-font-arrow-g"></i></button>
			</div>

		</div><!-- end of testi container -->
	</div>
</section><!-- end of testimonials -->

<section class="section-9">
	<div class="section-9-container flex w-100">

		<div class="hp-in-the-media" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title">
				<h2 class="inline-block">
					<span>in the</span>
					<em>media</em>
				</h2>
			</div>

			<div class="hp-blog-posts">
				<div class="hp-blog-post">

					<div class="blog-post-img relative">
						<a href="#" class="aios-video-popup relative">
							<canvas width="627" height="323" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/media-photo-1.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						</a>
					</div>
					<div class="blog-post-content">
						<h4>What sets Lake Tahoe properties apart from others?</h4>
						<p>Most homebuyers start the process anxious, excited, nervous, and some are downright terrified. It’s natural. A home is the largest and most expensive purchase that most people will make in a lifetime.</p>

						<div class="default-button">
							<a href="#" class="inline-block relative w-100"><span>view more +</span></a>
						</div>
					</div>
				</div><!-- end of blog post -->
			</div>

		</div><!-- end of hp in the media -->

		<div class="hp-find-us-on-social" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<div class="default-title">
				<h2 class="inline-block">
					<span>find us on</span>
					<em>social</em>
				</h2>
			</div>

			<div class="hp-social-posts flex flex-wrap-wrap">

				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-1.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-youtube"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-2.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-youtube"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-3.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-youtube"></i>
					</a>
				</div><!-- end of social post -->

				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-4.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-facebook"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-5.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-facebook"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-6.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-facebook"></i>
					</a>
				</div><!-- end of social post -->

				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-7.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-instagram"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-8.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-instagram"></i>
					</a>
				</div><!-- end of social post -->
				<div class="hp-social-post">
					<a href="#" target="_blank" class="block relative w-100">
						<canvas width="201" height="199" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/social-9.jpg" alt="What sets Lake Tahoe properties apart from others" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
						<i class="ai-font-instagram"></i>
					</a>
				</div><!-- end of social post -->
				

			</div><!-- end of social posts -->
		</div><!-- end of hp find us on social -->
	</div>
</section><!-- end of section 9 -->

<?php get_footer(); ?>
