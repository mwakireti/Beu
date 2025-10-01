<?php
require 'functions.php';


$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
}
elseif ($uri === '/about') {
    require 'controllers/about.php';
} elseif ($uri === '/services') {
    require 'controllers/services.php';
} elseif ($uri === '/products') {
    require 'controllers/products.php';
} elseif ($uri === '/contact') {
    require 'controllers/contact.php';
} else {
    http_response_code(404);
    require 'views/404.php';
}