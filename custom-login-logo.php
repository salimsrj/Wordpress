<?php
function custom_login_page_logo() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
	padding-bottom: 30px; 
	height: 100px;
    width: 100%;
    background-size: auto 100%;
} 
</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'custom_login_page_logo' );
