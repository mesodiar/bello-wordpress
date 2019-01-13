<?php

add_filter( 'the_title', 'upperText', 10, 1 ); // priority กะ จน argumentไม่ใส่ก็ได้
function upperText( $title ){
	return strtoupper( $title );
}

add_action( 'print_credits', 'print_my_credits', 10, 1 );
function print_my_credits( $text ){
	echo strtoupper( $text );
}

add_filter( 'replace_pronto_to_me', 'replace_pronto_to_mils', 10, 2);
function replace_pronto_to_mils( $text ){
	return str_replace( 'Pronto', 'mils', $text );
}
