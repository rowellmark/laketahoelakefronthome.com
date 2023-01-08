			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>


	<section class="glob-contact-form relative">
		<div class="glob-contact-form-wrap relative">
			<div class="container">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Form") ) : ?><?php endif ?>
			</div>
		</div><!-- end of contact form wrap -->
	</section>


	<footer class="footer relative">
		<div class="footer-container container">

			<div class="footer-logo">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Logo") ) : ?><?php endif ?>
			</div>

			<div class="footer-info">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Contact informations") ) : ?><?php endif ?>
			</div>

			<div class="footer-disclaimer">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Disclaimer") ) : ?><?php endif ?>
			</div>


			<div class="footer-nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav flex justify-center items-center', 'theme_location' => 'primary-menu','depth'=>1) ); ?>
			</div>


			<div class="footer-copyright">
				<p>Copyright &copy; <?php echo date('Y') ?> Becky arnold. All Rights Reserved. <a href="#">Privacy Policy</a>. <a href="/sitemap">Sitemap</a>. <?=  do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
			</div>

			<div class="footer-copy-logos flex items-center justify-center">
				<i class="ai-font-realtor"></i>
				<i class="ai-font-mls"></i>
				<i class="ai-font-eho"></i>
			</div>


		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
	
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
