<?php
function mytheme_styles() {
	wp_enqueue_style(
		'mytheme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get('Version')
	);
}

add_action('wp_enqueue_scripts', 'mytheme_styles');

function mytheme_assets() {
	wp_enqueue_script(
		'theme-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true
	);	
}
	
add_action('wp_enqueue_scripts', 'mytheme_assets');

add_filter('woocommerce_grouped_price_html', function( $price, $product ) {
	$children = array_filter( array_map( 'wc_get_product', $product->get_children() ) );
	$total = 0;

	foreach ( $children as $child ) {
		$total += (float) $child->get_price(); 
	}

	return wc_price( $total );
} , 10, 2);

add_filter('use_block_editor_for_post_type' , function($use, $post_type){
	if( $post_type === 'product'){
		return true;
	}
	return $use;
}, 10, 2);

add_action('init' , function(){
	register_block_type( get_template_directory() . '/blocks/custom-product-text' );
});
add_action('init' , function(){
	register_block_type( get_template_directory() . '/blocks/custom-product-text-2' );
});

add_filter( 'loop_shop_per_page' , function() {
	return 14;
}, 20 );

?>