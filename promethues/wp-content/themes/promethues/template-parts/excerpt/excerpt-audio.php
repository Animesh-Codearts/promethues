<?php
/**
 * Show the appropriate content for the Audio post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage promethues
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	promethues_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	promethues_print_first_instance_of_block( 'core/embed', $content );
} else {
	promethues_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
