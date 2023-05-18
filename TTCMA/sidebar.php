<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TTCMA
 */

namespace WP_Rig\WP_Rig;

if ( ! TTCMA()->is_primary_sidebar_active() ) {
	return;
}

TTCMA()->print_styles( 'TTCMA-sidebar', 'TTCMA-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area" aria-label="Sidebar">
	<?php TTCMA()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
