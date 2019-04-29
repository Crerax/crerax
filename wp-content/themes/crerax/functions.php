<?php
//Child Theme Functions File

add_action( 'wp_enqueue_scripts', 'enqueue_wp_child_theme' );

function enqueue_wp_child_theme() 
{
	wp_enqueue_style('parent-css', get_template_directory_uri().'/style.css' );
	wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri().'/style/owl.carousel.min.css');
	//wp_enqueue_style('child-css', get_stylesheet_uri());
	wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true );
}
// Showing excerpt box
add_post_type_support( 'page', 'excerpt' );

// Latest News Shortcode
function latest_news_func( $atts ) {
	$atts = shortcode_atts( array(
		'no_of_posts' => 3,
		'baz' => 'default baz'
	), $atts, 'latest-news' );
	
	// get the posts
    $posts = get_posts(
        array(
            'numberposts'   => $atts['no_of_posts']
        )
    );

    // No posts? run away!
    if( empty( $posts ) ) return '';
	
	$out = '<span class="red-circle"></span><ul class="owl-carousel owl-theme custom-nav" id="blog_news">';
    foreach( $posts as $post )
    {
	$out .='<li>';
        $out .= '<div class="img-wrapper"><img src="'.get_the_post_thumbnail_url($post->ID, "full").'"></div>
     	<div class="desc-wrap"><div class="date-time">'.get_the_date().'</div>
     	<div class="news-desc">'.$post->post_excerpt.'</div>
    	<a href="'.get_permalink($post->ID).'">View more</a>';
	$out .='</li>';
    }
    $out .= '</ul>';
    return $out;
}
add_shortcode( 'latest-news', 'latest_news_func' );

// Add custom post type of jobs
/*
* Creating a function to create our CPT
*/
 
function custom_post_jobs() {
 
// Set UI labels for Custom Post Jobs
    $labels = array(
        'name'                => _x( 'Jobs', 'Post Type General Name', 'crerax' ),
        'singular_name'       => _x( 'job', 'Post Type Singular Name', 'crerax' ),
        'menu_name'           => __( 'Jobs', 'crerax' ),
        'parent_item_colon'   => __( 'Parent job', 'crerax' ),
        'all_items'           => __( 'All Jobs', 'crerax' ),
        'view_item'           => __( 'View job', 'crerax' ),
        'add_new_item'        => __( 'Add New job', 'crerax' ),
        'add_new'             => __( 'Add New', 'crerax' ),
        'edit_item'           => __( 'Edit job', 'crerax' ),
        'update_item'         => __( 'Update job', 'crerax' ),
        'search_items'        => __( 'Search job', 'crerax' ),
        'not_found'           => __( 'Not Found', 'crerax' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'crerax' ),
    );
     
// Set other options for Custom Post Jobs
     
    $args = array(
        'label'               => __( 'jobs', 'crerax' ),
        'description'         => __( 'job news and reviews', 'crerax' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Jobs
    register_post_type( 'jobs', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_jobs', 0 );


// Add custom post type products
/*
* Creating a function to create our CPT
*/
 
function custom_post_products() {
 
// Set UI labels for Custom Post Jobs
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'crerax' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'crerax' ),
        'menu_name'           => __( 'Products', 'crerax' ),
        'parent_item_colon'   => __( 'Parent Product', 'crerax' ),
        'all_items'           => __( 'All Products', 'crerax' ),
        'view_item'           => __( 'View Product', 'crerax' ),
        'add_new_item'        => __( 'Add New Product', 'crerax' ),
        'add_new'             => __( 'Add New', 'crerax' ),
        'edit_item'           => __( 'Edit Product', 'crerax' ),
        'update_item'         => __( 'Update Product', 'crerax' ),
        'search_items'        => __( 'Search Product', 'crerax' ),
        'not_found'           => __( 'Not Found', 'crerax' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'crerax' ),
    );
     
// Set other options for Custom Post Jobs
     
    $args = array(
        'label'               => __( 'products', 'crerax' ),
        'description'         => __( 'Products and reviews', 'crerax' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
		'show_in_rest' 		  => true,
    );
     
    // Registering your Custom Post Jobs
    register_post_type( 'products', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_products', 0 );

// Job listing shortcode
function latest_jobs_func( $atts ) {
	$atts = shortcode_atts( array(
		'no_of_posts' => 3,
	), $atts, 'latest-jobs' );
	
	// get the posts
    $jobs = get_posts(
        array(
            'numberposts'   => $atts['no_of_posts'],
			'post_type' => 'jobs'
        )
    );

    // No posts? run away!
    if( empty( $jobs ) ) return '';
	
	$job_html = '<div class="all-jobs"><ul>';
    foreach( $jobs as $job )
    {
	$job_positions = get_post_meta($job->ID, 'Positions', true);
	$job_type = get_post_meta($job->ID, 'JobType', true);
	$job_html .='<li>';
        $job_html .= '<div class="job-title"><h5>'.$job->post_title.'</h5></div>
     	<div class="job-position">Positions<span>'.$job_positions.'</span></div>
     	<div class="job-type">JobType <span>'.$job_type.'</span></div>
    	<div class="job-link"><a href="'.get_permalink($job->ID).'"></a></div>';
	$job_html .='</li>';
    }
    $job_html .= '</ul></div>';
    return $job_html;
}
add_shortcode( 'latest-jobs', 'latest_jobs_func' );

// Job listing shortcode
function latest_products_func( $atts ) {
	$atts = shortcode_atts( array(
		'no_of_posts' => 6,
	), $atts, 'latest-products' );
	
	// get the posts
    $products = get_posts(
        array(
            'numberposts'   => $atts['no_of_posts'],
			'post_type' => 'products',
			'orderby'          => 'date',
			'order'            => 'ASC'
        )
    );

    // No posts? run away!
    if( empty( $products ) ) return '';
	
	$product_html = '<div class="all-products"><ul>';
	$counter = 1;
    foreach( $products as $product )
    {
	$product_icons = get_field( "product_icons", $product->ID );
	//$job_positions = get_post_meta($job->ID, 'Positions', true);
	//$job_type = get_post_meta($job->ID, 'JobType', true);
	$product_html .='<li>';
        $product_html .= '<div class="product-img '.$product_icons.'"></div>
    	<h5>'.$product->post_title.'</h5>
		<p class="products-desc">'.$product->post_excerpt.'</p>
		<a href="'.get_permalink($product->ID).'">Read More</a>';
	$product_html .='</li>';
		$counter++;
    }
    $product_html .= '</ul>';
	$product_html .= '<span class="obj-blue"></span>';
	$product_html .= '<span class="obj-circle-grey"></span>';
	$product_html .= '</div>';
    return $product_html;
}
add_shortcode( 'latest-products', 'latest_products_func' );
?>