<style>
	.bottom-home-page {
		background-image: url(<?php echo get_template_directory_uri(); ?>/img/gradient-img.jpg);
	}
	@media (min-width: 1200px) {
		.bottom-home-page {
			background-image: url(<?php echo get_field('left_home_image');?>), url(<?php echo get_template_directory_uri(); ?>/img/gradient-img.jpg);
		}
	}

	.home-page-testimonials-carousel h2.section-blurb,
	.home-featured-products h2.section-blurb { font-family:"Montserrat", sans serif; color:#6db2ac; font-size:1.75em; font-weight:700; margin:1em 0em; }
	






.col-centered {
    float: none;
    margin: 0 auto;
}

.carousel-control { 
    width: 8%;
    width: 0px;
    color:black;
    text-shadow:unset;
}
.carousel-control.left,
.carousel-control.right { 
    margin-right: auto; /*40px;*/
    margin-left: auto; /*32px; */
    background-image: none;
    opacity: 1;
}

.carousel-control .fa.left { margin-left:-30px; font-size:64px; }
.carousel-control .fa.right { margin-right:-30px; font-size:64px; }

.carousel-control > a > span {
    color: black;
	font-size: 29px !important;
}

.carousel-col { 
    position: relative; 
    min-height: 1px; 
    padding: 15px; 
    float: left;
 }

 .carousel-col .review p { margin:0rem 2.4rem 1.4rem; line-height:1.4; font-weight:500; font-size:16px; }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

/*xs*/
@media (max-width: 767px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
	.carousel-inner .next        { left:  33%; }
	.carousel-inner .prev		     { left: -33%; }
  .carousel-col                { width: 33%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}

/*lg*/
@media (min-width: 1200px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
	.carousel-inner .next        { left:  33%; }
	.carousel-inner .prev		     { left: -33%; }
  .carousel-col                { width: 33%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}
</style>














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


	<section class="bottom-home-page" style="display:none;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<img class="empty-spacer" src="<?php echo get_field('left_home_image');?>" alt="All Natural Skin Care Products">
				</div>
				<div class="col-md-6">
					<?php echo get_field('home_page_text'); ?>
				</div>
			</div>
		</div>
	</section>

<?php $testimonial_id = get_id_by_slug('testimonials'); ?>

	<section class="home-page-testimonials" style="display:none;">
		<div class="container">
			<div class="row display-flex">
				<?php //$cnt=0;
				//if( have_rows('testimonial', $testimonial_id) ):
					//while ( have_rows('testimonial', $testimonial_id) && $cnt<6 ) : $cnt++; the_row();?>
					<div class="col-sm-6 col-lg-3">
						<div class="review">
							<!-- <h4><?php //echo the_sub_field('blurb');?></h4> -->
							<p class="logo-circle"><img src="<?php echo get_template_directory_uri(); ?>/img/curativa-circle.jpg" alt="Curativa"></p>
							<p><?php //echo the_sub_field('testimonial_content');?></p>
							<p><?php //echo the_sub_field('customer_name');?></p>
							<p><a href="<?php //echo the_sub_field('read_more_link');?>" target="_blank" >Read More</a></p>
						</div>
					</div>
				<?php //endwhile;
				//else :
		    // no rows found
					//endif;
				?>	
			</div>
		</div>
	</section>




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


	<section class="products-display">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php //echo do_shortcode('[products limit="3" columns="3" category="moisturizer, serums" cat_operator="OR" class=""]'); ?>
				<?php //echo do_shortcode('[products limit="3" columns="3" category="facial-cleansers" class=""]'); ?>

				<?php echo do_shortcode('[products limit="3" columns="3" class="custom-product-1"]'); ?>

				<?php //echo do_shortcode('[products limit="3" category="facial-cleansers" class="custom-product-2"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('inc/primary-cta' ); ?>
