<?php
/**
 * Plugin Name: Custom Fields for WooCommerce
 * Description: Add custom fields to Order Admin
 * Version: 1.0.0
 * Author: Edwynn Flores
 * Author URI: https://linmago.com/
 * Text Domain: cfwc
 * WC requires at least: 3.4.0
 * WC tested up to: 3.4.2
*/
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
 exit;
}
/**
 * Display the custom text field
 * @since 1.0.0
 */

add_action( 'woocommerce_before_order_itemmeta', 'storage_location_of_order_items', 10, 3 );
function storage_location_of_order_items( $item_id, $item, $product ){
    // Only on backend order edit pages
    if( ! ( is_admin() && $item->is_type('line_item') ) ) return;

	
    // Get your ACF product value (replace the slug by yours below)
    if( $acf_value = get_field( 'clave_sat', $product->get_id() ) ) {
		
		
        $acf_label = __('Clave SAT: ');

        // Outputing the value of the "location storage" for this product item
        echo '<div class="wc-order-item-sku"><strong>' . $acf_label . $acf_value . '</strong></div>';

}
	
	
	// The product ID (in WooCommerce 3+)
	//global $product;

    //$product_id = $product->get_id();
	
	
	
	/*No marca Error
	$product_id = wc_get_product( $product_id );

    // Get your ACF product value (replace the slug by yours below)
    $acf_value = __('Clave SAT: ') . get_field( 'clave_sat', $product_id );
	*/
	
	


 // Get your ACF product value (replace the slug by yours below)
    if( $acf_value_nombre_proveedor = get_field( 'nombre_del_proveedor', $product->get_id() ) ) {
        $acf_label_nombre_proveedor = __('Nombre del Proveedor: ');

        // Outputing the value of the "location storage" for this product item
        echo '<div class="wc-order-item-sku"><strong>' . $acf_label_nombre_proveedor . $acf_value_nombre_proveedor . '</strong></div>';

    }

     // Get your ACF product value (replace the slug by yours below)
    if( $acf_value_precio_distribuidor = get_field( 'precio_distribuidor', $product->get_id() ) ) {
        $acf_label_precio_distribuidor = __('Precio Distribuidor: ');

        // Outputing the value of the "location storage" for this product item
        echo '<div class="wc-order-item-sku"><strong>' . $acf_label_precio_distribuidor . $acf_value_precio_distribuidor . '</strong></div>';

    }


     // Get your ACF product value (replace the slug by yours below)
    if( $acf_value_pesokg = get_field( 'peso_en_kg', $product->get_id() ) ) {
        $acf_label_pesokg = __('Peso: ');

        // Outputing the value of the "location storage" for this product item
        echo '<div class="wc-order-item-sku"><strong>' . $acf_label_pesokg . $acf_value_pesokg . '</strong></div>';

    }





}
