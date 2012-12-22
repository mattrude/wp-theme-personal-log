<?php

$_SERVER['HTTPS']='on';
define('WP_SITE_URI', ($_SERVER["HTTPS"]?"https://":"http://").$_SERVER["SERVER_NAME"]);
define('WP_SITEURI', ($_SERVER["HTTPS"]?"https://":"http://").$_SERVER["SERVER_NAME"]);

//if ( ! is_admin() ) { add_action( 'get_header', 'load_pl_style', 20 ); }

function load_pl_style() {
    wp_register_style( 'personal-log-style', get_stylesheet_directory_uri() . '/style.css', null, '1' );
    wp_enqueue_style( 'personal-log-style' );
}

?>
