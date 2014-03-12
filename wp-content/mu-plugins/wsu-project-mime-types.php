<?php

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