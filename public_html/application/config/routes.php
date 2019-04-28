<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/index'] = 'posts/index';
$route['posts/create']='posts/create';
$route['posts/update']='posts/update';
$route['posts/(:any)']='posts/view/$1';
$route['posts']='posts/index';

$route['product']='product/index';
$route['product/(:any)']='product/view/$1';

$route['supplier']='supplier/index';
$route['supplier/create']='supplier/create';
$route['supplier/(:any)']='supplier/view/$1';

$route['default_controller'] = 'pages/view';

$route['sale']='sale/index';
$route['sale/sale']='sale/sale';


$route['purchase']='purchase/index';
$route['purchase/purchase']='purchase/purchase'; 	

$route['customer']='customer/index';
$route['customer/create']='customer/create';
$route['customer/(:any)']='customer/view/$1';

$route['category']='category/index';
$route['category/create']='category/create';
$route['category/posts/(:any)']='category/posts/$1';

$route['users/register']='users/register';
$route['migrate']= 'Migrate/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
