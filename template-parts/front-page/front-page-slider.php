<?php
/**
 * Template part for displaying slider content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since Photoway 1.0.0
 */

$layout_class = '';
if( photoway_get_option( 'slider_section_layout' ) == 'slider_section_layout_one' ){
	$layout_class = 'slider-layout-one';
}

add_revslider('youtube-hero');

?>