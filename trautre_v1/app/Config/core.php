<?php
	Configure::write('debug', 2);
	Configure::write('Error', array(
		'handler' => 'ErrorHandler::handleError',
		'level' => E_ALL & ~E_DEPRECATED,
		'trace' => true
	));

	Configure::write('Exception', array(
		'handler' => 'ErrorHandler::handleException',
		'renderer' => 'ExceptionRenderer',
		'log' => true
	));

	Configure::write('App.encoding', 'UTF-8');
Configure::write('Routing.prefixes', array('admin'));
Configure::write('Cache.disable', true);
	define('LOG_ERROR', 2);

	Configure::write('Session', array(
		'defaults' => 'php'
	));
	Configure::write('Security.level', 'medium');
	Configure::write('Security.salt', 'wobm0i6iuui68kge0');
	Configure::write('Security.cipherSeed', '56162056505794');
	Configure::write('Acl.classname', 'DbAcl');
	Configure::write('Acl.database', 'default');
	date_default_timezone_set('UTC');
$engine = 'File';
if (extension_loaded('apc') && function_exists('apc_dec') && (php_sapi_name() !== 'cli' || ini_get('apc.enable_cli'))) {
	$engine = 'Apc';
}

// In development mode, caches should expire quickly.
$duration = '+999 days';
if (Configure::read('debug') >= 1) {
	$duration = '+10 seconds';
}

$prefix = 'myapp_';
Cache::config('_cake_core_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_core_',
	'path' => CACHE . 'persistent' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));

Cache::config('_cake_model_', array(
	'engine' => $engine,
	'prefix' => $prefix . 'cake_model_',
	'path' => CACHE . 'models' . DS,
	'serialize' => ($engine === 'File'),
	'duration' => $duration
));
