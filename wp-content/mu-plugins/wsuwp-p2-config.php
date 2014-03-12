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
add_filter( 'pre_option_comment_moderation', '__return_false' );
add_filter( 'pre_option_comment_whitelist', '__return_false' );
