<?php 
    // Add new constant that returns true if WooCommerce is active
    define( 'WPEX_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );
     
    // Checking if WooCommerce is active
    if ( WPEX_WOOCOMMERCE_ACTIVE ) {
        // Do something...
        // Such as including a new file with all your Woo edits.
    }

    //enables woocommerce removing this will not show shop page / pdp
    add_action( 'after_setup_theme', function() {
         add_theme_support( 'woocommerce' );
    } );

    //remove woocommerce basic styles
    //add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

    //In WooCommerce 3.0 they introduced a new product gallery, zoom and lightbox. These must all be enabled via “add_theme_support” if you want to make use of them in your theme.
    add_theme_support( 'wc-product-gallery-slider' );
    // add_theme_support( 'wc-product-gallery-zoom' );
    // add_theme_support( 'wc-product-gallery-lightbox' );

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 ); 
    add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );
    
    
    
    
    
    add_filter( 'woocommerce_product_tabs', 'ingredients' );
    function ingredients( $tabs ) {	
	// Adds the new tab
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Ingredients', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'ingredients_content'
	);
	return $tabs;
}
    function ingredients_content() {

	// The new tab content

	echo '<h2>Ingredients</h2>';
	echo the_field('ingredients_tab_content');
	
}


add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Details' );		// Rename the description tab
	//$tabs['reviews']['title'] = __( 'Ratings' );				// Rename the reviews tab
	//$tabs['additional_information']['title'] = __( 'Product Data' );	// Rename the additional information tab

	return $tabs;

}

add_filter( 'woocommerce_product_tabs', 'additional' );
    function additional( $tabs ) {	
	// Adds the new tab
	$tabs['test_tab_2'] = array(
		'title' 	=> __( 'Additional information', 'woocommerce' ),
		'priority' 	=> 20,
		'callback' 	=> 'additional_information'
	);
	return $tabs;
}
    function additional_information() {

	// The new tab content

	echo '<h2>Additional information</h2>';
	echo the_field('additional_information');
	
}

add_filter( 'woocommerce_product_tabs', 'allergen' );
    function allergen( $tabs ) {	
	// Adds the new tab
	$tabs['test_tab_5'] = array(
		'title' 	=> __( 'Allergen Info', 'woocommerce' ),
		'priority' 	=> 20,
		'callback' 	=> 'allergen_content'
	);
	return $tabs;
}
    function allergen_content() {

	// The new tab content

	echo '<h2>Allergen Info</h2>';
	echo the_field('allergen_tab_content');
	
}



add_filter( 'woocommerce_product_tabs', 'my_remove_reviews_tab' );
 
function my_remove_reviews_tab( $tabs ) {
  unset( $tabs['reviews'] );
  return $tabs;
}
    
    
?>