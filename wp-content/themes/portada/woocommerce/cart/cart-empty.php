<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

$shortcode=null;
if(wc_get_page_id('shop')>0)
    $shortcode='&nbsp;<a href="'.apply_filters('woocommerce_return_to_shop_redirect',get_permalink(wc_get_page_id('shop'))).'">'.__('Return to shop','portada').'</a>';

$shortcode=
'
    [pb_notice css_class="pb-margin-bottom-30" close_button_enable="0"]
    [pb_notice_first_line]'.__('Cart','portada').'[/pb_notice_first_line]
    [pb_notice_second_line]'.__('Your cart is currently empty.','portada').$shortcode.'[/pb_notice_second_line]
    [/pb_notice]		
';

echo do_shortcode($shortcode);