<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package TTCMA
 */

namespace WP_Rig\WP_Rig;

if ( ! TTCMA()->is_primary_nav_menu_active() ) {
	return;
}

?>

<nav id="<?php echo apply_filters( 'TTCMA_site_navigation_id', 'site-navigation' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>" class="<?php echo apply_filters( 'TTCMA_site_navigation_classes', 'main-navigation nav--toggle-sub nav--toggle-small' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>" aria-label="<?php esc_attr_e( 'Main menu', 'TTCMA' ); ?>"
	<?php
	if ( TTCMA()->is_amp() ) {
		?>
		[class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small' "
		<?php
	}
	?>
>
	<?php
	if ( TTCMA()->is_amp() ) {
		?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
		<?php
	}
	?>

	<?php
	$menu_toggle_button = '<button class="menu-toggle" aria-label="' . esc_html__( 'Open menu', 'TTCMA' ) . '" aria-controls="primary-menu" aria-expanded="false">
					' . esc_html__( 'Menu', 'TTCMA' ) . '
					</button>';
	$menu_toggle_button = apply_filters( 'TTCMA_menu_toggle_button', $menu_toggle_button );
	?>

	<?php echo $menu_toggle_button; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>

	<div class="primary-menu-container">
		<?php TTCMA()->display_primary_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
