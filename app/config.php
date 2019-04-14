<?php
/**
 * WP Emerge configuration.
 *
 * @link https://docs.wpemerge.com/#/framework/configuration
 *
 * @package WPEmergeTheme
 */

return [
	/**
	 * Array of service providers you wish to enable.
	 */
	'providers'           => [
		\App\Routing\RouteConditionsServiceProvider::class,
	],

	/**
	 * Register middleware class aliases.
	 * Use fully qualified middleware class names.
	 */
	'middleware'          => [
		// phpcs:ignore
		// 'mymiddleware' => \App\Middleware\MyMiddleware::class,
	],

	/**
	 * Register middleware groups.
	 * Use fully qualified middleware class names or registered aliases.
	 * There are a couple built-in groups that you may override:
	 * - 'web'    - Automatically applied to web routes.
	 * - 'admin'  - Automatically applied to admin routes.
	 * - 'ajax'   - Automatically applied to ajax routes.
	 * - 'global' - Automatically applied to all of the above.
	 *
	 * Warning: The 'global' group contains some internal WP Emerge
	 * middleware which you should avoid overriding.
	 */
	'middleware_groups'   => [
		'web'   => [],
		'ajax'  => [],
		'admin' => [],
	],

	/**
	 * Optionally specify middleware execution order.
	 * Use fully qualified middleware class names.
	 */
	'middleware_priority' => [
		// phpcs:ignore
		// \App\Middleware\MyMiddlewareThatShouldRunFirst::class,
		// \App\Middleware\MyMiddlewareThatShouldRunSecond::class,
	],

	/**
	 * Custom directory to search for views.
	 * Use an absolute path or leave blank to disable.
	 * Applies only to the default PhpViewEngine.
	 */
	'views'               => '',

	/**
	 * Other config goes after this comment.
	 */

];
