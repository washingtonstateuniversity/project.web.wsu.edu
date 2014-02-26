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

