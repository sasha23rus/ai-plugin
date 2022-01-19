<?php
add_action('admin_menu', 'ai_admin_menu');
function ai_admin_menu(){
	add_submenu_page(
		'options-general.php',
		'AI Plugin',
		'AI Plugin',
		'manage_options',
		'ai',
		'ai_admin_screen'
	);
}

function ai_admin_screen(){
	if ( isset( $_POST['_wpnonce'] ) && ! wp_verify_nonce( $_POST['_wpnonce'], '_wpnonce' ) ) {
		$ai_footer_text = isset( $_POST['ai_footer_text'] ) ? sanitize_text_field( $_POST['ai_footer_text'] ) : false;
		update_option( 'ai_footer_text', $ai_footer_text );
	}
	?>
	<h1>AI Sttings</h1>
	<form method="POST" action="">
		<input type="text" name="ai_footer_text" id="ai_footer_text" value="<?php echo esc_html( get_option( 'ai_footer_text' ) );?>">
		<?php wp_nonce_field(); ?>
		<p><input type="submit" value="<?php echo esc_html__('Save', 'ai'); ?>" class="button-primary"/></p>
	</form>
	<?php
}