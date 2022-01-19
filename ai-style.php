<?php
add_action('wp_enqueue_scripts', 'ai_style');
function ai_style() {
	wp_register_style('ai-style', plugins_url('assets/ai-style.css', __FILE__), false, false, 'all');
	wp_enqueue_style('ai-style');
}

add_action('admin_enqueue_scripts', 'ai_admin_style');
function ai_admin_style() {
	if ( isset($_GET['page'] ) && $_GET['page'] == 'ai' ) {
		wp_register_style('ai-admin-style', plugins_url('assets/ai-admin-style.css', __FILE__), false, false, 'all');
		wp_enqueue_style('ai-admin-style');
	}
}