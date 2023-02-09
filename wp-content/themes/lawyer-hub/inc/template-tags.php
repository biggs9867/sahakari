<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lawyer Hub
 * @subpackage lawyer_hub
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function lawyer_hub_categorized_blog() {
	$lawyer_hub_category_count = get_transient( 'lawyer_hub_categories' );

	if ( false === $lawyer_hub_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$lawyer_hub_category_count = count( $categories );

		set_transient( 'lawyer_hub_categories', $lawyer_hub_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $lawyer_hub_category_count > 1;
}

if ( ! function_exists( 'lawyer_hub_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since lawyer_hub
 */
function lawyer_hub_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in lawyer_hub_categorized_blog.
 */
function lawyer_hub_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'lawyer_hub_categories' );
}
add_action( 'edit_category', 'lawyer_hub_category_transient_flusher' );
add_action( 'save_post',     'lawyer_hub_category_transient_flusher' );