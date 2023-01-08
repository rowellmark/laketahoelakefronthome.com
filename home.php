<?php get_header(); ?>

<section class="hero relative">
	<div class="slideshow relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slideshow") ) : ?><?php endif ?>
	</div><!-- end of slideshow -->
	<div class="social-media-banner absolute top-0 left-0 h-100 flex items-center" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Social Media") ) : ?><?php endif ?>
	</div>
</section><!-- end of hero -->
<section class="hp-quick-search relative">
	<div class="container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Quick Search") ) : ?><?php endif ?>
	</div>
</section>
<section class="hp-cta">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Call to Action") ) : ?><?php endif ?>
</section><!-- end of cta -->
<section class="hp-about">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: About") ) : ?><?php endif ?>
</section><!-- end of about -->
<section class="featured-listings">
	<div class="featured-listings-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Listings") ) : ?><?php endif ?>
	</div>
</section><!-- end of featured listings -->

<section class="search-by-map relative">
	<!-- Map -->
<div id="interactive-map">
	<div class="aoe-map-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Search Areas by Map") ) : ?><?php endif ?>
	</div>
</div>
<!-- End of Map -->
</section>

<section class="hp-work-with-us relative">
	<div class="hp-work-with-us-container w-100">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Why Work With Us") ) : ?><?php endif ?>
	</div>
</section>
<section class="hp-testimonials">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: What our Client Say About Us") ) : ?><?php endif ?>
</section><!-- end of testimonials -->

<section class="section-9">
	<div class="section-9-container flex w-100">

		<div class="hp-in-the-media" data-aos="fade-right" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: In The Media") ) : ?><?php endif ?>
		</div><!-- end of hp in the media -->

		<div class="hp-find-us-on-social" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Find us on Social") ) : ?><?php endif ?>
		</div><!-- end of hp find us on social -->
	</div>
</section><!-- end of section 9 -->

<?php get_footer(); ?>
