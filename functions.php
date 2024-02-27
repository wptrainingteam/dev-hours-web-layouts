<?php
/**
 * Theme functions file, which is auto-loaded by WordPress. Use this file to
 * load additional PHP files and bootstrap the theme.
 *
 * @author    Your Name <youremail@domain.tld>
 * @copyright Copyright (c) 2023, Your Name
 * @link      https://yourwebsite.tld
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Enqueue editor styles.
add_action('after_setup_theme', 'themeslug_editor_styles');

function themeslug_editor_styles(): void
{
	add_editor_style(get_stylesheet_uri());
}

// Enqueue front-end assets.
add_action('wp_enqueue_scripts', 'themeslug_enqueue_styles');

function themeslug_enqueue_styles(): void
{
	wp_enqueue_style('themeslug', get_stylesheet_uri(), [], '20240226');
}

// Register block styles.
add_action( 'init', 'themeslug_register_block_styles' );

function themeslug_register_block_styles(): void
{
	// Scrolling Reel style with CSS included.
	// Must be used with Row variation.
	register_block_style( 'core/group', [
		'name'  => 'reel',
		'label' => __('Scrolling Reel', 'themeslug'),
		'inline_style' => '.wp-block-group.is-style-reel {
			overflow-x: auto;
			overflow-y: hidden;
		}
		.wp-block-group.is-style-reel > * {
			flex-shrink: 0;
		}'
	]);

	// Reveal image/text styles.
	// The CSS for these are in `style.css`.
	register_block_style( 'core/cover', [
		'name'  => 'reveal-image',
		'label' => __('Image Reveal', 'themeslug')
	]);

	register_block_style( 'core/cover', [
		'name'  => 'reveal-text',
		'label' => __('Text Reveal', 'themeslug')
	]);
}

// Register a custom pattern category for the Dev Hours patterns.
add_action('init', 'themeslug_register_pattern_categories');

function themeslug_register_pattern_categories(): void
{
	register_block_pattern_category('themeslug-dev-hours', [
		'label' => __('Developer Hours', 'themeslug')
	]);
}