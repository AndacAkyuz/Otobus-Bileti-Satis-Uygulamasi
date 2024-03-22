<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');

$routes->get('/index', 'Index::index');
$routes->get('/iletisim', 'Iletisim::index');
$routes->get('/ebilet', 'Ebilet::index');
$routes->get('/filomuz', 'Filomuz::index');
$routes->get('/login', 'Login::index');
$routes->get('/kvkk-yasal-sozlesmeleri', 'Kvkk::index');
$routes->get('/servisler', 'Servisler::index');
$routes->get('/seyehat', 'Seyehat::index');
$routes->get('/tarihce', 'Tarihce::index');
$routes->get('/kullanici', 'Kullanici::index');
$routes->get('/yolcu-haklari', 'Yolcuhaklari::index');
$routes->get('/logout', 'Logout::index');

$routes->get('/authcode', 'Authcode::index');
$routes->post('authcode/login', 'Authcode::login');
