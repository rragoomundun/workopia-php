<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../helpers.php';

use Framework\Router;

// Instantiating the router
$router = new Router();

// Get routes
$routes = require_once basePath('routes.php');

// Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
