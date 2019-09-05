<section class="home-featured-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h2 class="section-blurb">This section is populated via the WooCommerce product_categories shortcode, and this text is hard coded on the page</h2>
			</div>
			<div class="col-sm-12">
<?php echo do_shortcode('[product_categories columns="3" number="0" parent="0"]'); ?>

			</div>
		</div>
	</div>
</section>

<section class="home-featured-products" style="display:none;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="home-featured-img home-sm pad-b">
					<img src="<?php echo get_field('left_first_image');?>" alt="Moisturizer">
					<div class="home-featured-desc">
						<?php echo get_field('left_first_description');?>
						<a class="btn btn-primary" href="<?php echo get_field('left_first_button_link');?>"><?php echo get_field('left_first_button_text');?></a>	
					</div>
				</div>
				<div class="home-featured-img home-lg pad-a">
					<img src="<?php echo get_field('left_second_image');?>" alt="Serums">	
					<div class="home-featured-desc">
						<?php echo get_field('left_second_description');?>
						<a class="btn btn-primary" href="<?php echo get_field('left_second_button_link');?>"><?php echo get_field('left_second_button_text');?></a>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="home-featured-img home-lg pad-b">
					<img src="<?php echo get_field('middle_first_image');?>" alt="Hypochlorous Acid">
					<div class="home-featured-desc">
						<?php echo get_field('middle_first_description');?>
						<a class="btn btn-primary" href="<?php echo get_field('middle_first_button_link');?>"><?php echo get_field('middle_first_button_text');?></a>	
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="home-featured-img home-sm pad-b">
					<img src="<?php echo get_field('right_first_image');?>" alt="Facial Cleansers">
					<div class="home-featured-desc">
						<?php echo get_field('right_first_description');?>
						<a class="btn btn-primary" href="<?php echo get_field('right_first_button_link');?>"><?php echo get_field('right_first_button_text');?></a>	
					</div>
				</div>
				<div class="home-featured-img home-lg pad-a">
					<img src="<?php echo get_field('right_second_image');?>" alt="Eye Treatments">
					<div class="home-featured-desc">
						<?php echo get_field('right_second_description');?>
						<a class="btn btn-primary" href="<?php echo get_field('right_second_button_link');?>"><?php echo get_field('right_second_button_text');?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $testimonial_id = get_id_by_slug('testimonials'); ?>

<section class="home-page-testimonials-carousel">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h2 class="section-blurb">Read What Our Customers Have to Say</h2>
			</div>
			<div class="col-xs-11 col-md-10 col-centered">
				<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="5400">
					<div class="carousel-inner">
					<?php 
					if( have_rows('testimonial', $testimonial_id) ):
						$i=0;
						while ( have_rows('testimonial', $testimonial_id) ) : the_row();?>
						<div class="item <?php if($i==0) { $i=1; echo 'active'; } ?>">
							<div class="carousel-col">
							<div class="review">
								<!-- <h4><?php echo the_sub_field('blurb');?></h4> -->
								<p class="logo-circle"><img src="<?php echo get_template_directory_uri(); ?>/img/curativa-circle.jpg" alt="Curativa" style="max-width:100px; display:inline-block;"></p>
								<p><?php echo the_sub_field('testimonial_content');?></p>
								<p><?php echo the_sub_field('customer_name');?></p>
								<p><a href="<?php echo the_sub_field('read_more_link');?>" target="_blank" >Read More</a></p>
							</div>
							</div>
						</div>
					<?php endwhile;
					else :
			    // no rows found
						endif;
					?>	
					</div>

					<!-- Controls -->
					<div class="left carousel-control">
						<a href="#carousel" role="button" data-slide="prev">
							<!-- <span class="xglyphicon xglyphicon-chevron-left icon-prev" aria-hidden="true"></span> -->
							<i class="fa fa-angle-left left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
					</div>
					<div class="right carousel-control">
						<a href="#carousel" role="button" data-slide="next">
							<!-- <span class="xglyphicon xglyphicon-chevron-right icon-next" aria-hidden="true"></span> -->
							<i class="fa fa-angle-right right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
jQuery('.carousel[data-type="multi"] .item').each(function() {
	var next = jQuery(this).next();
	if (!next.length) {
		next = jQuery(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo(jQuery(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo(jQuery(this));
	}
});
</script>

<!-- 	<section class="products-display">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php //echo do_shortcode('[products limit="3" columns="3" category="moisturizer, serums" cat_operator="OR" class=""]'); ?>
			<?php //echo do_shortcode('[products limit="3" columns="3" category="facial-cleansers" class=""]'); ?>

			<?php //echo do_shortcode('[products limit="3" columns="3" class="custom-product-1"]'); ?>

			<?php //echo do_shortcode('[products limit="3" category="facial-cleansers" class="custom-product-2"]'); ?>
			</div>
		</div>
	</div>
</section> -->

<?php get_template_part('inc/primary-cta' ); ?>
