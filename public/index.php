<?php
require_once '../helpers.php';
require_once basePath('Framework/Router.php');
require basePath('Framework/Database.php');

$config = require basePath('config/db.php');

$db = new Database($config);

// Instantiating the router
$router = new Router();

// Get routes
$routes = require_once basePath('routes.php');

// Get current uri and http method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
