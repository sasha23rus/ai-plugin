<?php

add_action('wp_enqueue_scripts', 'ai_script');
function ai_script() {
    wp_register_script( 'ai-script', plugins_url('assets/ai-script.js', __FILE__), array(), _S_VERSION, true );
    wp_enqueue_script( 'ai-script' );
    wp_localize_script( 'ai-script', 'AiParam', array( 'ajaxUrl' => plugins_url('ai-plugin') ) );
}

