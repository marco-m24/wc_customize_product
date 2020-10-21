
// Edit Single Product Page Add to Cart
 
add_filter( 'woocommerce_product_single_add_to_cart_text', 'mrc_custom_add_cart_button_single_product' );
 
function mrc_custom_add_cart_button_single_product( $label ) {
    
   foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
      $product = $values['data'];
      if( get_the_ID() == $product->get_id() ) {
         $label = __('Già nel carrello. Aggiungere dinuovo?', 'woocommerce');
      }
   }
    
   return $label;
 
}
 
// Edit Loop Pages Add to Cart
 
add_filter( 'woocommerce_product_add_to_cart_text', 'mrc_custom_add_cart_button_loop', 99, 2 );
 
function mrc_custom_add_cart_button_loop( $label, $product ) {
    
   if ( $product->get_type() == 'simple' && $product->is_purchasable() && $product->is_in_stock() ) {
       
      foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
         $_product = $values['data'];
         if( get_the_ID() == $_product->get_id() ) {
            $label = __('Già nel carrello. Aggiungere dinuovo?', 'woocommerce');
         }
      }
       
   }
    
   return $label;
    
}
