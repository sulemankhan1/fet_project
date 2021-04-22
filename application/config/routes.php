<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['view_profile'] = 'pages/view_profile';
$route['timetable'] = 'pages/timetable';
$route['faculty'] = 'pages/faculty';
$route['contact'] = 'pages/contact_us';
$route['news'] = 'pages/news';
$route['news/(:any)'] = 'pages/single_news/$1';
$route['timetable'] = 'pages/timetable';
$route['login'] = 'pages/login';
$route['register'] = 'pages/register';
$route['about'] = 'pages/about';
