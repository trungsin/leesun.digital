<?php
/**
 * Downloads
 *
 * Shows downloads on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/downloads.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action( 'woocommerce_before_account_downloads', $has_downloads ); ?>

<?php if ( $has_downloads ) : ?>

	<?php do_action( 'woocommerce_before_available_downloads' ); ?>

	<table class="woocommerce-MyAccount-downloads shop_table theme-table-responsive-on" data-table-responisve-width="730">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_downloads_columns() as $column_id => $column_name ) : ?>
					<th class="<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<?php foreach ( $downloads as $download ) : ?>
			<tr>
				<?php foreach ( wc_get_account_downloads_columns() as $column_id => $column_name ) : ?>
					<td class="<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
						<?php
							if ( has_action( 'woocommerce_account_downloads_column_' . $column_id ) ) {
								do_action( 'woocommerce_account_downloads_column_' . $column_id, $download );
							} else {
								switch ( $column_id ) {
									case 'download-product' : ?>
										<a href="<?php echo esc_url( get_permalink( $download['product_id'] ) ); ?>">
											<?php echo esc_html( $download['product_name'] ); ?>
										</a>
										<?php break;
									case 'download-file' : ?>
										<a href="<?php echo esc_url( $download['download_url'] ); ?>" class="woocommerce-MyAccount-downloads-file">
											<?php echo esc_html( $download['file']['name'] ); ?>
										</a>
										<?php break;
									case 'download-remaining' :
										echo is_numeric( $download['downloads_remaining'] ) ? esc_html( $download['downloads_remaining'] ) : __( '&infin;', 'portada' );
										break;
									case 'download-expires' : ?>
										<?php if ( ! empty( $download['access_expires'] ) ) : ?>
											<time datetime="<?php echo date( 'Y-m-d', strtotime( $download['access_expires'] ) ); ?>" title="<?php echo esc_attr( strtotime( $download['access_expires'] ) ); ?>"><?php echo date_i18n( get_option( 'date_format' ), strtotime( $download['access_expires'] ) ); ?></time>
										<?php else : ?>
											<?php _e( 'Never', 'portada' ); ?>
										<?php endif; ?>
										<?php break;
									case 'download-actions' : ?>
										<?php
											$actions = array(
												'download'  => array(
													'url'  => $download['download_url'],
													'name' => __( 'Download', 'portada' ),
												),
											);
											if ( $actions = apply_filters( 'woocommerce_account_download_actions', $actions, $download ) ) {
												foreach ( $actions as $key => $action ) {
													echo '<a href="' . esc_url( $action['url'] ) . '" class="button woocommerce-Button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
												}
											}
										?>
										<?php break;
								}
							}
						?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php do_action( 'woocommerce_after_available_downloads' ); ?>
<?php else : ?>
<?php
		$shortcode=
		'
			[pb_notice css_class="pb-margin-bottom-50" close_button_enable="0"]
			[pb_notice_first_line]'.__('Error','portada').'[/pb_notice_first_line]
			[pb_notice_second_line]'.__('No downloads available yet.','portada').'[/pb_notice_second_line]
			[/pb_notice]		
		';
		
		echo do_shortcode($shortcode);
?>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_downloads', $has_downloads ); ?>