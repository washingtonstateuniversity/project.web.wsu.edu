<?php
/*
Plugin Name: WSU SMTP Email
Plugin URI: http://web.wsu.edu/
Description: Use SMTP to send email from WordPress
Author: washingtonstateuniversity, jeremyfelt
Version: 0.1
*/

add_action( 'phpmailer_init', 'wsuwp_smtp_email' );
/**
 * @param PHPMailer $phpmailer
 */
function wsuwp_smtp_email( $phpmailer ) {
	$phpmailer->Mailer = 'smtp';
	$phpmailer->From = 'www-data@wsuwp-indie-prod-01.web.wsu.edu';
	$phpmailer->FromName = 'WSU News';
	$phpmailer->Sender = $phpmailer->From;
	$phpmailer->Host = 'smtp.wsu.edu';
	$phpmailer->Port = 25;
	$phpmailer->SMTPAuth = false;
}