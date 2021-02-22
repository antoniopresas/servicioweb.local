<?php 

function mis_estilos()
{
     wp_enqueue_style( 'child-theme-css', '[URL_CSS_PARENT]' );
}
add_action( 'wp_enqueue_scripts', 'mis_estilos' );