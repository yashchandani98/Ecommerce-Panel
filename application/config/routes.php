<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'LoginRegister/index';
$route['404_override'] = '';
$route['Dealer/Register'] = 'LoginRegister/register';
$route['Dealer/Login'] = 'LoginRegister/index';
$route['Dealer/Dashboard']='main/dashboard';
$route['dealer/loginCheck']='LoginRegister/loginCheck';
$route['dealer/register']='LoginRegister/registerDealer';
$route['translate_uri_dashes'] = FALSE;
?>