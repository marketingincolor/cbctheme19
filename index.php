<?php
/**
 * DEI CurativaBay Child Theme - Index
 *
 * Contains primary layout methodology for all content
 *
 * Duplicated from from original theme to include customizations as well as required components
 */

get_header();
$sidebarActive =  is_active_sidebar( 'aside-sidebar' ) ? true : false;
$mainWidth = $sidebarActive ? 8 : 12;
// if a widget sidebar or custom sidebar exists, the col size is set to 8, or 12 if neither is true
?>
<main id="main-content" class="flex-grow">
 <div class="container NOT-fluid">
	<div class="row">
		<section class="col-md-<?php echo $mainWidth; ?>">
				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							/*
							 * the layout of the content from the WYSIWYG editor on either pages or posts is edited in
							 * inc/content.php
							 */
							get_template_part('inc/content', get_post_type() ); 
		
						endwhile;
						// Previous/next post navigation.
							if ($wp_query->max_num_pages > 1) :
								get_template_part('inc/pagination');
							endif;
						else : 
							get_template_part('inc/content', 'none' ); // 404 message
						endif; ?>
		</section>
		<?php if ( $sidebarActive ) { get_sidebar(); } ?>
	</div><!--  .row -->
 </div><!--  .container -->
</main>

<?php if ( is_page( array( 'faqs' ) ) ) : ?>
	<?php get_template_part('inc/faq', 'list'); ?>
<?php endif; ?>

<?php if ( is_page( array( 'testimonials', 'faqs' ) ) ) : ?>
<section class="products-display">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php echo do_shortcode('[products limit="3" columns="3" class="custom-product-1"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer(); ?>