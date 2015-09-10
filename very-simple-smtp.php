<?php
/**
 * @package Very Simple SMTP
 * @version 0.1
 */
/*
Plugin Name: Very Simple SMTP
Plugin URI:
Description: A very simple plugin to configure SMTP email in WordPress.
Author: Ryan Brockman
Version: 0.1
Author URI: https://www.ryanbrockman.com
*/
function reb123_phpmailer_config( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.email.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 465;
    $phpmailer->Username = 'user';
    $phpmailer->Password = 'pass';

    // Additional settings…
    $phpmailer->SMTPSecure = "ssl"; // Choose SSL or TLS, if necessary for your server
    $phpmailer->From = "address@email.com";
    $phpmailer->FromName = "Name";
}

add_action( 'phpmailer_init', 'reb123_phpmailer_config' );

?>
