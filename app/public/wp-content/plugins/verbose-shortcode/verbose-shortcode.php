<?php
/*
* Plugin name: Verbose Shortcode
*/
function render_verbose_shortcode( $atts ) {
	$default_atts = array(
		'size' => 12,
	);
	$atts = shortcode_atts( $default_atts, $atts );

	//if ( $atts['size'] ){
	$size = $atts['size'];
	//}
	return '<strong style="font-size: ' . $size . 'px;">Thor</strong>';
}
add_shortcode( 'verbose', 'render_verbose_shortcode' );
