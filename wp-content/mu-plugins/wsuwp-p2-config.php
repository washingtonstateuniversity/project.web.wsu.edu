<?php
/*
Plugin Name: WSUWP P2 Configuration
Plugin URI: http://web.wsu.edu/
Description: Miscellaneous configurations for P2 in WSUWP
Author: washingtonstateuniversity, jeremyfelt
Version: 0.1
*/

/**
 * Per @danielbachhuber - https://gist.github.com/danielbachhuber/9508957
 *
 * Improve comment settings:
 * - Turn off moderation
 * - Don't require new authors to have one approved comment
 */
add_filter( 'pre_option_comment_moderation', '__return_zero' );
add_filter( 'pre_option_comment_whitelist', '__return_zero' );

/**
 * Disable pingbacks to outside sources.
 * Don't accept pingbacks from outside sources.
 */
add_filter( 'pre_option_default_pingback_flag', '__return_zero' );
add_filter( 'pre_option_default_ping_status', '__return_zero' );

add_filter( 'upload_mimes', 'wsu_project_upload_mimes', 10, 1 );
/**
 * Additional mime types required by project.web.wsu.edu
 *
 * @param array $types Current mime types supported.
 *
 * @return array Modified list of mime types.
 */
function wsu_project_upload_mimes( $types ) {
	$types['ai']  = 'application/postscript';
	$types['psd'] = 'image/psd';
	$types['eps'] = 'application/postscript';

	return $types;
}

add_filter( 'pre_site_option_upload_filetypes', 'wsu_project_upload_filetypes', 10 );
/**
 * Set the allowed list of upload filetypes.
 *
 * Removed - midi, mid
 * Added - pdf, ai, psd, eps, doc, xls, zip
 *
 * @return string Allowed upload filetypes on the network.
 */
function wsu_project_upload_filetypes() {
	return 'jpg jpeg png gif mp3 mov avi wmv pdf ai psd eps doc xls zip';
}