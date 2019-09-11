<?php 
/*
* Template Name:  Salon Page Template
*
* DEI CurativaBay Child Theme - Index
*/
get_header();
?>

<main id="main-content" class="flex-grow child-theme">
 <div class="container">
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
 </div><!--  .container -->
<?php get_template_part('inc/salon-section' ); ?>
</main>
<?php get_footer(); ?>