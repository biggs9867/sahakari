<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */
?>

<aside id="theme-sidebar" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'lawyer-hub' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>