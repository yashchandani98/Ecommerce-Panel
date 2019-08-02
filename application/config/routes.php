<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
//$route['default_controller'] = 'LoginRegister/index';
$route['404_override'] = '';
$route['Dealer/Register'] = 'LoginRegister/register';
$route['Dealer/Login'] = 'LoginRegister/index';
$route['Dealer/Dashboard']='main/dashboard';
$route['dealer/loginCheck']='LoginRegister/loginCheck';
$route['dealer/register']='LoginRegister/registerDealer';
=======
$route['default_controller'] = 'LoginRegister/index';
$route['404_override'] = '';
$route['Dealer/Register'] = 'LoginRegister/register';
$route['Dealer/Login'] = 'LoginRegister/index';
$route['Dealer/Dashboard']='Main/dashboard';
$route['dealer/loginCheck']='LoginRegister/loginCheck';
$route['dealer/register']='LoginRegister/registerDealer';
$route['Product/Add']='Product/add';
$route['product/register']='Product/register';
$route['Dealer/Logout']='LoginRegister/logout';
$route['Dealer/Account']='Main/accountEdit';
>>>>>>> 3015471eb805ce11df823647f8848c9cd7c70ca9
$route['translate_uri_dashes'] = FALSE;
?>