<?php get_header();
$sidebarActive =  is_active_sidebar( 'aside-sidebar' ) ? true : false;
$mainWidth = $sidebarActive ? 8 : 12;
// if a widget sidebar or custom sidebar exists, the col size is set to 8, or 12 if neither is true
?>
<main id="main-content" class="flex-grow">
 <div class="container-fluid">
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

<section class="products-display">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">


<div id="faq" role="tablist" aria-multiselectable="true">
	<h3>Healing and Medicinal Uses</h3>
	<div class="panel">
		<div class="" role="tab" id="questionOne">
			<h5 class="">
				<a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">How does HOCL speed the wound healing process?</a>
			</h5>
		</div>
		<div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
			<div class="">
				Healing of skin wounds starts with control of infection and damage to tissues, followed by repair and restoration. HOCL has direct effects on healing by attacking infectious germs, stopping bleeding from damaged blood vessels, and stimulating repair by making new blood vessels to feed the recovering tissues. HOCL also speeds the movement of skin cells across the damaged area. The net result is the outer skin layers move to close the wound, and the tissues underneath are reorganized to restore them to their original healthy condition, with minimal scarring.
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="" role="tab" id="questionTwo">
			<h5 class="">
				<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">Why is HOCL considered the best anti-microbial and disinfectant?</a>
			</h5>
		</div>
		<div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
			<div class="">
				Nature protects human and animal tissues against infectious germs by making HOCL at sites of injury or contamination by bacteria. The HOCL is made on demand, as needed, at sites of tissue damage and is the most powerful local anti-germ substance manufactured in the body. It has to protect against all classes of invaders, including bacteria, yeasts, viruses, and molds, and it has to be able to kill them quickly. White blood cells circulating in the blood are a rich source of HOCL, and they move into the local tissues where there are injuries or damage. Because HOCL kills so fast and so efficiently but has to be compatible with all the healthy tissues in the body, it is uniquely powerful yet uniquely safe. Nothing can develop resistance to HOCL because it attacks at many different places on and in contaminating germs of all kinds.
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="" role="tab" id="questionThree">
			<h5 class="">
				<a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="true" aria-controls="answerThree">What is the recommended daily application?</a>
			</h5>
		</div>
		<div id="answerThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionThree">
			<div class="">
				HOCL goes through the skin and works lightning fast, but disappears fast, so it’s best to apply it to injured sites in the form of ‘little and often’ rather than trying to coat or smother the area with the solution only once a day. For injuries such as burns, cuts, or blisters, you can’t apply our signature HOCL Spray too many times per day, but for practical purposes, 4-5 times would be a good number as a routine.
			</div>
		</div>
	</div>
</div>

			</div>
		</div>
	</div>
</section>
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