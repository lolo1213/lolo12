<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);


$routes->get('/', 'Home::index');
$routes->get('/products', 'Home::products');
$routes->get('/contact', 'Home::contact');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/product-details', 'Home::productDetails');
$routes->get('/about-us', 'Home::aboutUs');
$routes->get('/blog', 'Home::blog');
$routes->get('/testimonials', 'Home::testimonials');
$routes->get('/terms', 'Home::terms');

$routes->get('/logout', 'DestroyController::logout');