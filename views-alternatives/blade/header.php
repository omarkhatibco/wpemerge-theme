<?php
/**
 * This file is required by WordPress. Delegates the actual rendering to header.blade.php.
 *
 * @package WPEmergeTheme
 * phpcs:disable
 */
add_filter( 'wpemerge.partials.header.hook', '__return_false' );
App::render( 'header' );
remove_filter( 'wpemerge.partials.header.hook', '__return_false' );