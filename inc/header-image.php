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
<!-- <?php 
//if ( is_shop()) {
//	$headerPhot = get_field( 'woo_header_image','options');
//	$headerDes = get_field( 'category_header_description','options' );
	?>
	<?php //if( get_field('woo_header_image','options') ): ?>
		<div class="cat-banner" style="background-image: url(<?php //echo $headerPhot ?>);">
			<div class="catdesc"> <?php //echo $headerDes ?>
			</div>
		</div>
	<?php //endif; ?>
<?php //}; ?>
 -->


<?php 
if ( is_shop() ) {
	//get_template_part( 'inc/slider');
	$show_gallery = 'shop';
; ?>

<div class="container">
<div class="row">
<div class="col-sm-12">

<?php
// Slider for post type 'slide' 
$gallery = get_field('choose_slide_gallery'); 
$tax_query = $gallery ? array(array('taxonomy'=>'slide-gallery','field'=>'slug','terms'=>$gallery->slug)) : array();
?>
<div id="motion" class="carousel slide <?php the_field('slide_transition');?>" 
	data-ride="carousel" 
	data-interval="<?php the_field('slide_delay');?>"
	data-pause="<?php echo get_field('pause_on_hover') ? 'hover' : 'false';?>">    
      <div class="carousel-inner">
      <?php // begin template for each slide -----------------------------//
      	  $firstClass = 'active';
      	  $slideId = 0;
        	$indicators= ''; 
        	$slide_query = new WP_Query(array(
					'post_type'  => 'slide',
					'slide-gallery' => $show_gallery,
					'tax_query' => $tax_query,
	        'orderby'       => 'menu_order',
	        'order'         => 'ASC'
					)); // 'slide-gallery' => optionally add the slug of a specific gallery to the 'slide-gallery'  
			if ($slide_query->have_posts()) : while ($slide_query->have_posts()) : $slide_query->the_post(); ?>
	        <div class="item <?php echo $firstClass; ?>" id="slide<?php echo $slideId ?>">
	        			<?php set_query_var( 'slideId', $slideId); ?>
						<?php get_template_part('inc/content-slide'); ?>
	        </div><!--  item -->
			<?php 
					$indicators .= '<li data-target="#motion" data-slide-to="'.$slideId.'" class="'.$firstClass.'"></li>';
				  $firstClass = "";
	        $slideId += 1; endwhile; endif; wp_reset_query(); 
	        ?> 
      </div><!-- carousel-inner -->
      <?php 
      if ($slideId > 1): // only show arrows and dots if there is more than one slide
      echo '<ol class="carousel-indicators">'.$indicators.'</ol>'; ?>
      <a class="left carousel-control" href="#motion" role="button" data-slide="prev"><span class="left fa fa-angle-left"></span></a>
      <a class="right carousel-control" href="#motion" role="button" data-slide="next"><span class="right fa fa-angle-right"></span></a>
    	<?php endif; ?>
</div><!-- /.carousel -->   


</div>
</div>
</div>

<?php }; ?>