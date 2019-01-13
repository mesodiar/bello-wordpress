<?php

add_filter( 'the_title', 'upperText', 10, 1 ); // priority กะ จน argumentไม่ใส่ก็ได้
function upperText( $title ){
	global $post;

	if ( 'projects' == $post->post_type ) {
		return $title;
	} else {
		return strtoupper( $title );
	}
}

add_action( 'print_credits', 'print_my_credits', 10, 1 );
function print_my_credits( $text ){
	echo strtoupper( $text );
}

add_filter( 'replace_pronto_to_me', 'replace_pronto_to_mils', 10, 2);
function replace_pronto_to_mils( $text ){
	return str_replace( 'Pronto', 'mils', $text );
}

wp_enqueue_style( 'style', get_stylesheet_uri() ); //https://developer.wordpress.org/themes/basics/including-css-javascript/
wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main.css' );
wp_enqueue_script(
	'main_script',
	get_template_directory_uri() . '/js/main.js',
	array( 'jquery' ), // wordpress สร้างมาให้อยู่แล้ว
	1.0,
	true
);

add_action('add_meta_boxes', 'add_my_custom_box');
function add_my_custom_box(){
	add_meta_box(
		'my_box_id',           // Unique ID
		'My Custom Meta Box Title',  // Box title
		'my_custom_box_html',  // Content callback, must be of type callable
		'post'                   // Post type
	);
}

function my_custom_box_html( $post ) {
?>
	<label for="my_field">Place the custom data yeah </label>
	<input type="text" name="my_custom_data" value="<?php echo get_post_meta( $post->ID, 'my_custom_data', true); ?>"/>

<?php
}

add_action('save_post', 'save_my_postdata');
function save_my_postdata( $post_id ){
	update_post_meta(
		$post_id,
		'my_custom_data',
		$_POST['my_custom_data']
	);
}

wp_enqueue_script(
	'my-ajax-script',
	get_template_directory_uri() . '/js/myjquery.js',
	array('jquery')
);

wp_localize_script(
	'my-ajax-script',
	'my_ajax_url',
	admin_url( 'admin-ajax.php' )
);
wp_localize_script(
	'my-ajax-script',
	'my_verbose',
	'Thorhirah'
);

add_action( 'wp_ajax_show_me_who_verbose', 'my_ajax_handler' );
function my_ajax_handler(){
	$my_name = $_POST['my_name'];
	$my_verbose = $_POST['my_verbose'];

	echo $my_name . ' said she is ' . $my_verbose . ' THOHIRAH <3 ';
}
