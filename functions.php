<?php
//
// Child Theme functions - with links to wordpress documentation on each
//

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