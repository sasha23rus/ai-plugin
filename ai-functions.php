<?php
add_action( 'wp_footer', 'ai_footer_text' );
function ai_footer_text(){
	$ai_footer_text = get_option( 'ai_footer_text' );

	do_action( 'ai_footer_text', $ai_footer_text );

	echo '<p class="ai-footer-text -ai-ajax-">'.esc_html( $ai_footer_text ).'</p>';
}

/*
add_action( 'ai_footer_text', 'change_text', 10, 1 );
function change_text( $text ){
	$text = 'my_text';
	echo $text;
}
*/
