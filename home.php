<?php get_header(); ?>

<section class="hero relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('
			[aios_slider id="Homepage Slideshow"]
		'); ?>
	</div><!-- end of slideshow -->
	<div class="social-media-banner absolute top-0 left-0 h-100 flex items-center">
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
		<div class="qc-title">
			<div class="default-title">
				<h2 class="inline-block">
					<span>quick</span>
					<em>search</em>
				</h2>
			</div><!-- end of default title -->
		</div><!-- end of qc title -->

		<div class="qc-form w-100">
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
						<input type="submit">
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

		<div class="cta-list">
			<a href="#" class="block w-100 relative">
				<span><i class="icon1"></i>Find my dream home</span>
			</a>
		</div>
		<div class="cta-list">
			<a href="#" class="block w-100 relative">
				<span><i class="icon2"></i>What’s my home worth?</span>
			</a>
		</div>
		
	</div>
</section><!-- end of cta -->
<section class="hp-about">
	<div class="hp-about-container flex expanded-container">
		<div class="hp-about-content">
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
		<div class="hp-about-image relative">
			<a href="#" class="block aios-video-popup relative">
				<canvas width="735" height="461" class="block w-100"></canvas>
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/about-photo.jpg" alt="Becky Arnold" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0">
			</a>
		</div><!-- end of about image -->
	</div>
</section><!-- end of about -->
<section class="featured-listings">
	<div class="featured-listings-container">

		<div class="default-title text-center">
			<h2 class="inline-block">
				<span>featured</span>
				<em>listings</em>
			</h2>
		</div><!-- end of default title -->


		<div class="prop-lists splide">
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


		<div class="properties-pagination flex justify-center items-center">
			<button data-arrow="prev"><i class="ai-font-arrow-g"></i></button>
			<div class="default-button">
				<a href="#" class="block relative w-100"><span>view all listings +</span></a>
			</div>
			<button data-arrow="next"><i class="ai-font-arrow-g"></i></button>
		</div>

	</div>
</section><!-- end of featured listings -->

<section class="search-by-map relative">
	<!-- Map -->
<div id="interactive-map">

	<div class="aoe-map-container">
		<div class="aoe-map-wrapper flex justify-between items-start">

			<!-- Comm List -->
			<div class="aoe-map-content">
				<div class="default-title">
					<h2 class="inline-block">
						<span>search areas by</span>
						<em>map</em>
					</h2>
				</div><!-- end of default title -->
				<div class="aoe-comm-areas">
					<ul>
					
						<li class="aoe-comm-title" data-map-target="carmel"><a href="#">Tahoe City</a></li>
						<li class="aoe-comm-title" data-map-target="fishers"><a href="#">Carnelian Bay</a></li>
						<li class="aoe-comm-title" data-map-target="zionsville"><a href="#">Homewood </a></li>
						<li class="aoe-comm-title" data-map-target="noblesville"><a href="#">Tahoe Vista</a></li>
						<li class="aoe-comm-title" data-map-target="plainfield"><a href="#">Tahoma</a></li>
						<li class="aoe-comm-title" data-map-target="greenwood"><a href="#">Kings Beach  </a></li>
						<li class="aoe-comm-title" data-map-target="brownsburg"><a href="#">Squaw Valley/Alpine Meadows</a></li>
						<li class="aoe-comm-title" data-map-target="brownsburg"><a href="#">Truckee</a></li>
					</ul>
				</div>

			</div>


			<!-- Desktop -->
			<div class="aoe-map-outer">
				<div class="aoe-map-main">
					<img class="aoe-map-transparent" src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/transparent.png" alt="Map Transparent" width="1600" height="1150" usemap="#map-area">
					<map name="map-area" id="map-area">

						<!-- Avon -->
						<area data-map-target="avon" alt="Map"  href="#" coords="655,734,675,734,677,743,681,753,696,761,706,772,711,792,725,785,729,775,722,765,715,753,720,744,725,734,758,736,770,725,784,719,789,707,787,695,785,684,754,683,768,672,778,669,770,660,777,648,759,641,756,631,744,626,708,629,706,652,701,664,694,672,684,671,674,660,650,660,656,677,650,686,629,660,615,662,615,677,607,693,612,703,626,696,641,707,648,713,648,724,639,746,650,751" shape="poly">

						<!-- Carmel -->
						<area data-map-target="carmel" alt="Map"  href="#" coords="924,224,1259,224,1250,233,1244,242,1247,254,1245,267,1237,274,1228,283,1220,295,1216,309,1204,314,1192,317,1194,338,1182,357,1178,369,928,372" shape="poly">

						<!-- Fishers -->
						<area data-map-target="fishers" alt="Map"  href="#" coords="1249,238,1257,225,1278,218,1292,237,1311,237,1312,218,1324,226,1328,237,1364,235,1371,244,1386,249,1400,251,1414,240,1510,242,1515,251,1518,292,1491,295,1486,304,1477,307,1479,317,1470,335,1484,335,1491,352,1501,362,1517,362,1515,369,1184,369,1192,341,1202,336,1196,321,1209,316,1218,309,1223,290,1233,280,1247,263" shape="poly">

						<!-- Zionsville -->
						<area data-map-target="zionsville" alt="Map"  href="#" coords="802,295,802,254,818,259,826,257,837,242,845,260,876,262,883,272,899,272,923,254,924,284,911,290,904,298,912,309,921,314,921,327,911,343,897,343,881,351,875,365,869,351,859,346,844,336,849,310,833,286,821,271,814,300" shape="poly">

						<!-- Noblesville -->
						<area data-map-target="noblesville" alt="Map"  href="#" coords="1160,44,1179,38,1179,25,1193,14,1206,33,1223,18,1235,20,1246,20,1247,40,1251,62,1258,71,1294,76,1352,69,1354,90,1338,102,1313,116,1323,133,1328,143,1340,148,1361,141,1393,143,1393,167,1388,183,1417,208,1447,224,1512,217,1514,239,1416,243,1400,251,1371,236,1326,234,1328,224,1302,219,1292,237,1272,208,1265,155,1246,153,1225,157,1222,177,1215,200,1244,203,1246,215,1234,215,1229,222,1172,222,1165,203,1192,168,1214,148,1220,122,1211,96,1199,110,1197,136,1182,148,1175,168,1156,163,1161,131,1161,103,1178,72,1182,59" shape="poly">

						<!-- Plainfield -->
						<area data-map-target="plainfield" alt="Map"  href="#" coords="629,824,615,829,612,813,622,798,636,803,639,813,660,805,670,805,681,788,698,786,720,794,732,791,741,764,765,764,770,776,775,748,790,752,790,767,780,786,775,808,782,829,790,848,787,868,784,887,766,887,754,889,753,904,772,909,749,918,730,915,717,904,706,909,691,911,696,885,675,880,658,882,636,873,624,866" shape="poly">

						<!-- GREENWOOD -->
						<area data-map-target="greenwood" alt="Map"  href="#" coords="1049,964,1209,961,1217,971,1224,980,1226,990,1238,993,1229,1007,1241,1017,1239,1029,1197,1031,1195,1045,1202,1066,1201,1083,1166,1083,1167,1096,1138,1098,1122,1084,1111,1095,1085,1092,1058,1056,1047,1033" shape="poly">

						<!-- Brownsburg -->
						<area data-map-target="brownsburg" alt="Map" href="#" coords="614,484,629,480,627,506,655,510,653,498,648,486,650,472,665,484,670,492,679,474,699,482,713,494,732,498,732,506,732,518,722,523,729,534,878,555,735,580,734,594,732,602,706,602,705,621,681,614,674,606,651,585,655,547,656,533,639,550,638,567,615,571,598,560,615,538,626,530,612,516" shape="poly">



					</map>
					<img class="aoe-map-base" src="<?= do_shortcode('[stylesheet_directory]')?>/images/map/map-with-label.png" alt="Map Base" width="660" height="817" usemap="#map-area">

					<!-- Hovers -->
					<div class="aoe-map-hovers">

						<div class="avon">
							<div class="aoe-map-pin">
								<span><i class="aoe-icon-center"></i>Avon</span>
							</div>
							<div class="aoe-map-img">
								<span class="flex items-center"><i></i>Avon</span>
								<img src="[stylesheet_directory]/images/map/avon.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="carmel">
							<div class="aoe-map-pin">
								<span><i class="aoe-icon-center"></i>carmel</span>
							</div>
							<div class="aoe-map-img">
								<span><i class="aoe-icon-center"></i>carmel</span>
								<img src="[stylesheet_directory]/images/map/carmel.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="fishers">
							<div class="aoe-map-pin">
								<span><i class="aoe-icon-center"></i>Fishers</span>
							</div>
							<div class="aoe-map-img">
								<span><i class="aoe-icon-center"></i>Fishers</span>
								<img src="[stylesheet_directory]/images/map/fisher.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="zionsville">
							<div class="aoe-map-pin">
								<span class="flex flex-col items-end"><i></i>ZIONSVILLE</span>
							</div>
							<div class="aoe-map-img">
								<span class="flex items-center">ZIONSVILLE<i></i></span>
								<img src="[stylesheet_directory]/images/map/zionsville.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="noblesville">
							<div class="aoe-map-pin">
								<span class="flex flex-col items-start"><i></i>Noblesville</span>
							</div>
							<div class="aoe-map-img">
								<span><i class="aoe-icon-center"></i>Noblesville</span>
								<img src="[stylesheet_directory]/images/map/noblesville.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="plainfield">
							<div class="aoe-map-pin">
								<span><i class="aoe-icon-center"></i>Plainfield</span>
							</div>
							<div class="aoe-map-img">
								<span class="flex items-center"><i></i>Plainfield</span>
								<img src="[stylesheet_directory]/images/map/plainfield.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="greenwood">
							<div class="aoe-map-pin">
								<span><i  class="aoe-icon-center"></i>GREENWOOD</span>
							</div>
							<div class="aoe-map-img">
								<span><i class="aoe-icon-center"></i>GREENWOOD</span>
								<img src="[stylesheet_directory]/images/map/greenwood.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->

						<div class="brownsburg">
							<div class="aoe-map-pin">
								<span><i></i>Brownsburg</span>
							</div>
							<div class="aoe-map-img">
								<span class="flex items-center"><i></i>Brownsburg</span>
								<img src="[stylesheet_directory]/images/map/brownsburg.png" alt="Map">
							</div>
						</div><!-- end of map hover child -->


						<div class="westfield">
							<div class="aoe-map-alternate">
								<i></i>
								<em>Westfield</em>
							</div>
						</div>
						<div class="whitestown">
							<div class="aoe-map-alternate">
								<i></i>
								<em>Whitestown</em>
							</div>
						</div>
						<div class="pittsboro">
							<div class="aoe-map-alternate">
								<i></i>
								<em>Pittsboro</em>
							</div>
						</div>
						<div class="danville">
							<div class="aoe-map-alternate">
								<i></i>
								<em>Danville</em>
							</div>
						</div>
						<div class="mooresville">
							<div class="aoe-map-alternate">
								<i></i>
								<em>Mooresville</em>
							</div>
						</div>

						<div class="indianapolis">
							<div class="aoe-map-alternate">
								<i></i>

							</div>
						</div>


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

		<div class="default-title text-center">
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

		<div class="testimonials-title">
			<div class="default-title">
				<h2 class="inline-block">
					<span>what our</span>
					<em>clients say<br>
					about us</em>
				</h2>
			</div>
		</div><!-- end of testimonials title -->

		<div class="hp-testi-container relative">

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
				<button data-arrow="prev"><i class="ai-font-arrow-g"></i></button>
				<div class="paginate-divider"></div>
				<button data-arrow="next"><i class="ai-font-arrow-g"></i></button>
			</div>

		</div><!-- end of testi container -->
	</div>
</section><!-- end of testimonials -->

<section class="section-9">
	<div class="section-9-container flex w-100">

		<div class="hp-in-the-media">
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

		<div class="hp-find-us-on-social">
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
