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
