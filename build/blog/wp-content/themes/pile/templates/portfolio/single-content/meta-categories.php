<?php
/**
 * The template for the displaying the category list and the date.
 * @package Pile
 * @since   Pile 1.0
 */

$categories = get_the_terms( get_the_ID(), wpgrade::shortname() . '_portfolio_categories' );
if ( ! is_wp_error( $categories ) && ! empty( $categories ) ):
	echo '<hr class="separator" />' . PHP_EOL;
	echo '<div class="meta-list  meta-list--categories">' . PHP_EOL;
	foreach ( $categories as $category ) {
		echo '<a class="meta-list__item" href="' . get_term_link( $category->slug, $category->taxonomy ) . '" title="' . esc_attr( sprintf( __( "View all projects in %s", wpgrade::textdomain() ), $category->name ) ) . '" rel="tag">' . $category->name . '</a>' . PHP_EOL;
	};
	echo '</div>' . PHP_EOL;
endif; ?>