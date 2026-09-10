<?php 

$text = get_field('custom_product_text');
if( $text ) {
	echo '<div class="custom-product-text">' . wp_kses_post( $text ) . '</div>'; 
}