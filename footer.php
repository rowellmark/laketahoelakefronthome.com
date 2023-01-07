			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>


	<section class="glob-contact-form relative">
		<div class="glob-contact-form-wrap relative">
			<div class="container">
				<div class="default-title text-center">
					<h2 class="inline-block">
						<span>contact us</span>
						<em>send a message</em>
					</h2>
				</div>

				<div class="glob-form">
					<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
				</div>

			</div>
		</div><!-- end of contact form wrap -->
	</section>


	<footer class="footer relative">
		<div class="footer-container container">

			<div class="footer-logo">
				<a href="<?= do_shortcode('[blogurl]')?>" class="block">
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo-colored.png" alt="Chase International" class="block w-100 top-0 left-0">
				</a>
			</div>

			<div class="footer-info">
				<ul class="flex justify-center item-center">
					<li>
						<i class="phone-icon"></i>
						<?=  do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
					</li>
					<li>
						<i class="mobile-icon"></i>
						<?=  do_shortcode('[ai_client_cell]{default-cell}[/ai_client_cell]')?>
					</li>
					<li>
						<i class="email-icon"></i>
						<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
					</li>
				</ul>
			</div>

			<div class="footer-disclaimer">
				<p>Becky Arnold is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at 530.581.0722 to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
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
