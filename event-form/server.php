<?php

<<<<<<< HEAD
$uri = urldecode(
	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
=======
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
>>>>>>> 30c3bdc6187271b006d9f4554ef17e39155695dc
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
<<<<<<< HEAD
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri))
{
	return false;
=======
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
>>>>>>> 30c3bdc6187271b006d9f4554ef17e39155695dc
}

require_once __DIR__.'/public/index.php';
