<?php 
// add to functions.php
//if (class_exists('Woocommerce')) require get_template_directory() . '/functions/woocommerce-functions.php'; 


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce', array(
'gallery_thumbnail_image_width' => 150,
) ); // This tells woocommerce that your theme supports it
    //add_theme_support( 'wc-product-gallery-zoom' ); //last three add support for woocommerce 3.0 features
    add_theme_support( 'wc-product-gallery-lightbox' );
    //add_theme_support( 'wc-product-gallery-slider' );
}


// Tells woocommerce not to load its own css so you can add theme to your main.min file through sass
// add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
// function jk_dequeue_styles( $enqueue_styles ) {
// 	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
// 	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
// 	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
// 	return $enqueue_styles;
// }

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

//content wrapper
add_action( 'woocommerce_before_main_content',  'dei_output_content_wrapper', 8);
function dei_output_content_wrapper(){
	
	$sidebarActive =  is_active_sidebar( 'aside-sidebar' ) ? true : false;
	$mainWidth = $sidebarActive ? 8 : 12; 

	echo 
	'<main id="main-content" class="flex-grow">
	<div class="container-fluid">
		<div class="row">';

			if ( $sidebarActive ) { get_sidebar();}
			
			echo '<section class="col-sm-'. $mainWidth . '">';

		}

//end content wrapper
		add_action( 'woocommerce_after_main_content', 'dei_output_content_wrapper_end', 8);
		function dei_output_content_wrapper_end(){
			echo 	
			'</section>
		</div>
	</div>
</main>';
}

//remove categories listings on product pages 
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


// Hide category product count in product archives
add_filter( 'woocommerce_subcategory_count_html', '__return_false' );

// adds the decription under the title on the category page
function addCatDescUnderTitle( $category ) {
	echo '<div class="cat-rel"><h2>' . $category->name .'</h2><span class="category_description"><p>' . $category->description . '</p></span><p class="view-all-link btn btn-primary">View Products</p></div>';
}
add_action( 'woocommerce_after_subcategory_title', 'addCatDescUnderTitle', 10, 1 );


//Move product tabs beside the product image - WooCommerce
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

//Add a custom product tabs
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab

	if(get_field('directions_for_use')){
		$tabs['directions_tab'] = array(
		'title' 	=> __( 'Directions for Use', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
		);
}

	if(get_field('ingredients')){
		$tabs['ingredients_tab'] = array(
		'title' 	=> __( 'Ingredients', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_ta_content'
		);
}

	return $tabs;
}

function woo_new_product_tab_content() {
    	$directions = get_field('directions_for_use');
    	 	echo  $directions;	
}

function woo_new_product_ta_content() {
		$ingredients = get_field('ingredients');
		echo  $ingredients;
}

//move the price below the short description
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );

function wooSearch() {
	if( is_shop() || is_product_category() || is_checkout() ){
		get_search_form();
	}
}

add_action( 'woocommerce_before_main_content', 'wooSearch', 10 );



//SHOP PAGE ADD TO CART STUFF
//open div around image
// add_action('woocommerce_before_shop_loop_item', 'dei_open_shop_div', 5);
// function dei_open_shop_div(){
// 	echo '<div class="dei-shop-thumb-wrapper">';
// }

// //move add to cart button to div 
// remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
// add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 7);

// //close div
// add_action('woocommerce_after_shop_loop_item', 'dei_close_shop_div', 15);
// function dei_close_shop_div(){
// 	echo '</div>';
// }

//move the image priority
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 20);

//move the title lower
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 20);

//move the price lower
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price');
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 25);

/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    // unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab
    $tabs['reviews']['priority'] = 75;		// Remove the reviews tab

    return $tabs;
}


/**
 * Hide shipping rates when free shipping is available.
 * Updated to support WooCommerce 2.6 Shipping Zones.
 *
 * @param array $rates Array of rates found for the package.
 * @return array
 */
function my_hide_shipping_when_free_is_available( $rates ) {
	$free = array();
	foreach ( $rates as $rate_id => $rate ) {
		if ( 'free_shipping' === $rate->method_id ) {
			$free[ $rate_id ] = $rate;
			break;
		}
	}
	return ! empty( $free ) ? $free : $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );


add_filter( 'woocommerce_show_addons_page', 'handsome_bearded_guy_hide_extensions_menu' );

function handsome_bearded_guy_hide_extensions_menu( $show_addons_page ) {
    //an array of user ids that can access the extensions menu
    $users_who_can_access = array(5) ;
    if ( ! in_array( get_current_user_id(), $users_who_can_access ) ) {
        $show_addons_page = false;
    }
    return $show_addons_page;
}