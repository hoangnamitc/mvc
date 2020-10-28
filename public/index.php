<?php

use app\core\Application;
/**
 * User: hoangnamitc
 * Date: 28/10/2020
 * Time: 23:23 PM
 */

require_once dirname(__DIR__).'/vendor/autoload.php';

$app = new Application();

$app->router->get('/', function() {
	return 'THIS IS HOMEPAGE';
});

$app->router->get('/contact', 'contact');

$app->run();