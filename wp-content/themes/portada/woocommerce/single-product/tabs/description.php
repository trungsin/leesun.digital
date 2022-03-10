<?php
/**
 * Description tab
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'portada' ) ) );
?>

<?php if ( $heading ): ?>

<?php echo do_shortcode('[pb_header underline_enable="1" important="4" css_class="aligncenter"]'.$heading.'[/pb_header]'); ?>

<?php endif; ?>

<?php the_content(); ?>
