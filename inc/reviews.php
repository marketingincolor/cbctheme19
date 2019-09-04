<style>
	 .review { min-height:300px; }
	 .review p { margin:0rem 2.4rem 1.4rem !important; line-height:1.4 !important; font-weight:500; font-size:16px; }
</style>

<section class="review-section">
	<div class="container">
	<div class="row">
			<?php
			if( have_rows('testimonial') ):
				while ( have_rows('testimonial') ) : the_row();?>
			<div class="col-sm-6 col-lg-4">
						<div class="review">
							<!-- <h4><?php echo the_sub_field('blurb');?></h4> -->
							<p class="logo-circle"><img src="<?php echo get_template_directory_uri(); ?>/img/curativa-circle.jpg" alt="Curativa"></p>
							<p><?php echo the_sub_field('testimonial_content');?></p>
							<p><?php echo the_sub_field('customer_name');?></p>
							<p><a href="<?php echo the_sub_field('read_more_link');?>" target="_blank" >Read More</a></p>
						</div>
					</div>
		<?php endwhile;
		else :
    // no rows found
			endif;
		?>	
	</div>
</div>
</section>