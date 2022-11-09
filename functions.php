<?php
/**
 * Candy Shop functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package candyshop
 */


/**
 * Include other functions
 */
foreach ( glob( __DIR__ . '/inc/*.{php,inc}', GLOB_BRACE ) as $filename ) {
	include $filename;
}