<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
    <small style="display:block">&copy Copyright Tchelo Alvez <?php echo date('Y') ?></small>
	<a href="<?php echo esc_url( __( 'https://silvablack.me/', 'silvablackdev' ) ); ?>" class="imprint">
		<?php printf( __( 'Desenvolvido por %s', 'silvablackdev' ), 'Silva Black' ); ?>
	</a>
</div><!-- .site-info -->
