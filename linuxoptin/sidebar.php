<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package linuxoptin
 */

if ( ! is_active_sidebar( 'side-widgets' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'side-widgets' ); ?>
</aside><!-- #secondary -->
