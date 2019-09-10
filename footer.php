<?php
/**
 * DEI CurativaBay Child Theme - Footer
 *
 * Contains closing divs page layout and all footer content
 *
 * Duplicated from from original theme to include customizations as well as required components
 */
 ?>
<footer id="site-footer" class="">
	<div class="container-fluid">
		<?php if ( is_active_sidebar( 'aside-footer' ) ) : ?>
			<div class="row">
				<?php dynamic_sidebar( 'aside-footer' );?>
			</div><!-- row -->	        
		<?php endif; ?>
	</div>

	<div class="mobile-icons teal-bg text-center">
		<div class="container-fluid">
			<div class="row">
			<div class="col-sm-12">
						<?php wp_nav_menu( array(
							'theme_location'	=> 'terms',
							'menu_class'		=>	'list-inline',
							'container'       => '',
							'depth'			=>	0,
							'fallback_cb'	=>	false,
							'walker'			=>	new dei_Nav_Walker
         )); // generates the ul
         ?>
         </div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'mobile',
						'menu_class'		=>	'icon-nav list-inline divided-menu',
						'container'       => 'nav',
						'container_class' => 'social-media col-xs-12',
						'depth'			=>	0,
						'fallback_cb'	=>	false,
						'walker'			=>	new icon_Nav_Walker
						)); 
		     // see 'inc/nav-walker.php' to alter output.  Default uses the title as the font-awesome icon class, the fa- is already added
						?>
         </div>
			</div>
			<div class="row">
				<div class="col-sm-12">
										<p class="text-center">
					©	<?php // automatically hyphenates the correct year at the end
					$fromYear = 2019; 
					$thisYear = (int)date('Y'); 
					echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '').' ';
					esc_html_e(get_theme_mod( 'dei_copyright_textbox' )); 
	         	 // user can enter the rest in wp-admin/customize.php screen
					?>
				</p>
				</div>
			</div>
		</div>
	</div>

	<div class="top-footer teal-bg">
		<div class="container-fluid">
			<div class="row social">	
				<div class="col-sm-3 col-sm-offset-3">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'contact',
						'menu_class'		=>	'list-inline',
						'container'       => 'nav',
						'container_class' => 'col-xs-12 text-center',
						'depth'			=>	0,
						'fallback_cb'	=>	false,
						'walker'			=>	new dei_Nav_Walker
						)); 
			     // see 'inc/nav-walker.php' to alter output.  Default uses the title as the font-awesome icon class, the fa- is already added
						?>
				</div>
				<div class="col-sm-3">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'icons',
						'menu_class'		=>	'icon-nav list-inline',
						'container'       => 'nav',
						'container_class' => 'social-media col-xs-12 text-right',
						'depth'			=>	0,
						'fallback_cb'	=>	false,
						'walker'			=>	new icon_Nav_Walker
						)); 
			     // see 'inc/nav-walker.php' to alter output.  Default uses the title as the font-awesome icon class, the fa- is already added
						?>
				</div>
			</div>

			<div class="row logo">
				<div class="col-sm-12 text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cb-footer-logo.png" />
				</div>
				<div class="col-sm-12 text-center">
					<h5>Proudly Made in Clearwater Florida USA</h5>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-sm-12 text-center">
				©	<?php // automatically hyphenates the correct year at the end
					$fromYear = 2019; 
					$thisYear = (int)date('Y'); 
					echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '').' ';
					esc_html_e(get_theme_mod( 'dei_copyright_textbox' )); 
	         	 // user can enter the rest in wp-admin/customize.php screen
					?>
				</div>

				<div class="col-sm-12 text-center">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'terms',
						'menu_class'		=>	'list-inline',
						'container'       => '',
						'depth'			=>	0,
						'fallback_cb'	=>	false,
						'walker'			=>	new dei_Nav_Walker
				         )); // generates the ul
				         ?>
	     		</div>
 			</div><!-- row -->
</div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>