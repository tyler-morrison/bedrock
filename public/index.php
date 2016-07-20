<?php

/** @var string Directory containing all of the site's files */
$root_dir = dirname(__DIR__);

/**
 * Expose global env() function from oscarotero/env
 */
require_once($root_dir . '/vendor/autoload.php');
Env::init();

/**
 * Use Dotenv to set required environment variables and load .env file in root
 */
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
    $dotenv->required(['DB_USER', 'DB_PASSWORD', 'DB_NAME', 'CRAFT_HOME']);
}

/**
 * Set up our global environment constant and load its config first
 * Default: development
 */
define('CRAFT_ENVIRONMENT', getenv('CRAFT_ENV') ?: 'development');

/** Path to your craft/ folder */
$craftPath = '../app';
define('CRAFT_BASE_PATH', $root_dir . '/');

/** Do not edit below this line */
$path = rtrim($craftPath, '/').'/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
