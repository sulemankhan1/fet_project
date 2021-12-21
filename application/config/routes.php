<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['view_profile/(:any)'] = 'pages/view_profile/$1';
$route['timetable'] = 'pages/timetable';
$route['faculty'] = 'pages/faculty';
$route['contact'] = 'pages/contact_us';
$route['news'] = 'pages/news';
$route['news/(:any)'] = 'pages/single_news/$1';
$route['timetable'] = 'pages/timetable';
$route['login'] = 'pages/login';
$route['save_login'] = 'pages/save_login';
$route['edit_profile/(:any)'] = 'pages/edit_profile/$1';
$route['update_profile'] = 'pages/update_profile';
$route['logout'] = 'pages/logout';
$route['register'] = 'pages/register';
$route['save_reg'] = 'pages/save_reg';
$route['about'] = 'pages/about';
$route['subscribe'] = 'pages/subscribe';
$route['genrated_timetable'] = 'pages/genrated_timetable';
$route['all_programs'] = 'pages/all_programs';
$route['software_eng'] = 'pages/software_eng';
$route['information_tech'] = 'pages/information_tech';
$route['electronics'] = 'pages/electronics';
$route['telecommunication'] = 'pages/telecommunication';
$route['fetch_timetable'] = 'pages/fetch_timetable';

// forget password
$route['forgot_password'] = 'pages/forgot_password';
$route['check_email'] = 'pages/check_email';
