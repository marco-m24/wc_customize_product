add_filter( 'woocommerce_product_single_add_to_cart_text', 'mrc_add_symbol_add_cart_button_single' );
 
function mrc_add_symbol_add_cart_button_single( $button ) {
$button_new = '&oplus; ' . $button;
return $button_new;
}
