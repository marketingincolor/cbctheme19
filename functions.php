<?php
/*
* Child Theme functions - with links to wordpress documentation on each
*
* 
*/

//add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
//function enqueue_parent_styles() {
//   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
//}

function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}

function cbtheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'cbtheme_add_woocommerce_support' );


//content wrapper
add_action( 'woocommerce_before_main_content',  'cbtheme_output_content_wrapper', 8);
function cbtheme_output_content_wrapper(){
	
	$sidebarActive =  is_active_sidebar( 'aside-sidebar' ) ? true : false;
	$mainWidth = $sidebarActive ? 8 : 12; 

	echo 
	'<main id="main-content" class="flex-grow">
	<div class="container not-fluid">
		<div class="row">';

			if ( $sidebarActive ) { get_sidebar();}
			
			echo '<section class="col-sm-'. $mainWidth . '">';

}

//end content wrapper
		add_action( 'woocommerce_after_main_content', 'cbtheme_output_content_wrapper_end', 8);
		function cbtheme_output_content_wrapper_end(){
			echo 	
			'</section>
		</div>
	</div>
</main>';
}


//add_action( 'woocommerce_archive_description', 'show_tags', 20 );
add_action( 'woocommerce_before_shop_loop', 'show_tags', 20 );
//add_action( 'woocommerce_after_shop_loop_item', 'show_tags', 20 );
function show_tags() {
  global $product;
  if ( !is_shop() ) {
	$display = "display:none;";
  }
  // get the product_tags of the current product
  $current_tags = get_terms( 'product_tag', array( 'number' => '5' ) );
  //$current_tags = get_the_terms( get_the_ID(), 'product_tag' );
  // only start if we have some tags
  if ( $current_tags && ! is_wp_error( $current_tags ) ) { 
    //create a list to hold our tags
    echo '<br><ul class="product-tags" style="'.$display.'">';
    // for each tag we create a list item
    foreach ( $current_tags as $tag ) {
      $tag_title = $tag->name; // tag name
      $tag_link = get_term_link( $tag ); // tag archive link
      echo '<li><a class="btn btn-primary" href="'.$tag_link.'">'.$tag_title.'</a></li>';
    }
    echo '</ul><br>';
  }

}

//[woo_products_by_tags tags="shoes,socks"]
function woo_products_by_tags_shortcode( $atts, $content = null ) {
  
	// Get attribuets
	extract(shortcode_atts(array(
		"tags" => ''
	), $atts));
	
	ob_start();
	// Define Query Arguments
	$args = array( 
				'post_type' 	 => 'product', 
				'posts_per_page' => 6, 
				'product_tag' 	 => $tags 
				);
	
	// Create the new query
	$loop = new WP_Query( $args );
	
	// Get products number
	$product_count = $loop->post_count;
	
	// If results
	if( $product_count > 0 ) :
	
		echo '<ul class="products">';
		
			// Start the loop
			while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			
				global $post;
				
				echo "<li><p>" . $thePostID = $post->post_title. " </p>";
				
				if (has_post_thumbnail( $loop->post->ID )) 
					echo  get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
				else 
					echo '<img src="'.$woocommerce->plugin_url().'/assets/images/placeholder.png" alt="" width="'.$woocommerce->get_image_size('shop_catalog_image_width').'px" height="'.$woocommerce->get_image_size('shop_catalog_image_height').'px" /> </li>';
		
			endwhile;
		
		echo '</ul><!--/.products-->';
	
	else :
	
		_e('No product matching your criteria.');
	
	endif; // endif $product_count > 0
	
	return ob_get_clean();
}
add_shortcode("woo_products_by_tags", "woo_products_by_tags_shortcode");





