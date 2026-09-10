<?php 

$text = get_field('custom_product_text_2');
if( $text ) {
	echo '<div class="custom-product-text-2">' . wp_kses_post( $text ) . '</div>'; 
}