<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage promethues

 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	
	 *
	 * @return void
	 */
	function promethues_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'promethues-columns-overlap',
				'label' => esc_html__( 'Overlap', 'promethues' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'promethues-border',
				'label' => esc_html__( 'Borders', 'promethues' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'promethues-border',
				'label' => esc_html__( 'Borders', 'promethues' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'promethues-border',
				'label' => esc_html__( 'Borders', 'promethues' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'promethues-image-frame',
				'label' => esc_html__( 'Frame', 'promethues' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'promethues-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'promethues' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'promethues-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'promethues' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'promethues-border',
				'label' => esc_html__( 'Borders', 'promethues' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'promethues-separator-thick',
				'label' => esc_html__( 'Thick', 'promethues' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'promethues-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'promethues' ),
			)
		);
	}
	add_action( 'init', 'promethues_register_block_styles' );
}
