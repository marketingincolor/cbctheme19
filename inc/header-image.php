<!-- header images on interior pages -->
<?php 
if ( get_field('interior_header') ) {
	$intPhoto = get_field('interior_header');
	$intDesc = get_field('interior_header_description');
	?>
	<div class="cat-banner" style="background-image: url(<?php echo $intPhoto ?>);">
		<div class="catdesc"> <?php echo $intDesc ?>
		</div>
	</div>
	<?php }; ?>

	<!-- header images on product category pages -->
	<?php 
	if ( is_product_category() ) {

		$queried_object = get_queried_object(); 
		$taxonomy = $queried_object->taxonomy;
		$term_id = $queried_object->term_id;  
		$photo = get_field( 'woo_header_image', $queried_object );
		$photo = get_field( 'woo_header_image', $taxonomy . '_' . $term_id );
		$photoDesc = get_field( 'category_header_description', $queried_object );
		$photoDesc = get_field( 'category_header_description', $taxonomy . '_' . $term_id );
		?>
		<?php if( get_field('woo_header_image', $queried_object) ): ?>
			<div class="cat-banner" style="background-image: url(<?php echo $photo ?>);">
				<div class="catdesc"> <?php echo $photoDesc ?>
				</div>
			</div>
		<?php endif; ?>
		<?php }; ?>

		<!-- header images on product pages -->
		<?php 
		if ( is_product()) { 
			$headerPhoto = get_field( 'woo_header_image');
			$headerDesc = get_field( 'category_header_description' );
			?>
			<?php if( get_field('woo_header_image') ): ?>
				<div class="cat-banner" style="background-image: url(<?php echo $headerPhoto ?>);">
					<div class="catdesc"> <?php echo $headerDesc ?>
					</div>
				</div>
			<?php endif; ?>
			<?php }; ?>

			<!-- header image on shop page -->
			<?php 
			if ( is_shop()) {
				$headerPhot = get_field( 'woo_header_image','options');
				$headerDes = get_field( 'category_header_description','options' );
				?>
				<?php if( get_field('woo_header_image','options') ): ?>
					<div class="cat-banner" style="background-image: url(<?php echo $headerPhot ?>);">
						<div class="catdesc"> <?php echo $headerDes ?>
						</div>
					</div>
				<?php endif; ?>
				<?php }; ?>




