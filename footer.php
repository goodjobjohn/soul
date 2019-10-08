			<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">								

				<div id="inner-footer" class="inner-footer">

					<div id="logo" class="logo" itemprop="logo">
						<a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
							<img src="<?php echo get_theme_file_uri(); ?>/library/images/logo-footer.svg" itemprop="logo" alt="site logo" />
						</a>
					</div>
					
					<nav role="navigation">

					<?php

						wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'platetheme' ),   // nav name
    					'menu_class' => 'nav footer-nav',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'plate_footer_links_fallback'  // fallback function
						));

					?>

					</nav> 
					
					<div class="details">
					
						<?php dynamic_sidebar( 'footerwidget' ); ?>
									
					</div>
					
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> Pty Ltd - <a href="http://flowforest.com">Grown by Flow Florest</a></p>

			</footer>

		<!-- </div> // Container  -->

		<?php // all js scripts are loaded in library/functions.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- This is the end. My only friend. -->
