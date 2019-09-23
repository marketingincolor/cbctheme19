<section class="review-section">
	<div class="container">
	<div class="row">
			<?php
			if( have_rows('testimonial') ):
				while ( have_rows('testimonial') ) : the_row();?>
			<div class="col-sm-6 col-lg-4">
						<div class="review">

							<p class="logo-circle"><img src="<?php echo get_stylesheet_directory_uri();; ?>/img/testimonial-icon.jpg" alt="Curativa" style="max-width:100px;"></p>
							<p class="quote"><?php echo the_sub_field('blurb');?></p>
							<p style="font-weight: bold;"><?php echo the_sub_field('customer_name');?></p>
							<!-- <p><a href="<?php echo the_sub_field('read_more_link');?>" target="_blank" >Read More</a></p> -->
							<a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#review-<?php echo get_row_index(); ?>">Read More</a>

							<!-- The modal -->
							<div class="modal fade" id="review-<?php echo get_row_index(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title" id="modalLabelLarge"><?php echo the_sub_field('blurb');?></h4>
										</div>
										<div class="modal-body">
											<?php echo the_sub_field('testimonial_content');?>
										</div>
									</div>
								</div>
							</div>

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