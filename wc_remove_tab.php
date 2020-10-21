// remove tab
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
  
add_action( 'woocommerce_after_single_product_summary', 'mrc_wc_output_long_description', 10 );
  
function mrc_wc_output_long_description() {
?>
   <div class="woocommerce-tabs">
   <?php the_content(); ?>
   </div>
<?php
}
