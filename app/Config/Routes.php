<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Home::index');
$routes->get('profile', 'Home::profile');
$routes->get('portfolio', 'Home::portfolio');
$routes->get('articles', 'Home::articles');
$routes->get('about', 'Home::about');
