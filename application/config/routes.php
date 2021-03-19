<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['login'] = 'auth/index';

//forgetpassword
$route['forget_password'] = 'auth/forget_password_email';
$route['send_token'] = 'auth/is_university_email_valid';
$route['change_password/(:any)'] = 'auth/change_password/$1';
$route['password_changed'] = 'auth/password_changed';

//registeration
$route['create_new_account'] = 'reg/online_registration';
$route['registered'] = 'reg/save_registeration';

//dashboard
$route['dashboard'] = 'admin/dashboard';

//departments
$route['departments'] = 'departments/view_departments';
$route['add_department'] = 'departments/add_departments';
$route['save_department'] = 'departments/save_department';
$route['edit_department/(:any)'] = 'departments/edit_department/$1';
$route['delete_department/(:any)'] = 'departments/delete_department/$1';


//users
$route['create_user'] = 'users/create_user';
$route['save_user'] = 'users/save_user';
$route['edit_user/(:any)'] = 'users/edit_user/$1';
$route['view_active_users'] = 'users/view_active_users';
$route['view_deactive_users'] = 'users/view_deactive_users';
$route['change_user_status/(:any)'] = 'users/change_user_status/$1';
$route['delete_user/(:any)'] = 'users/delete_user/$1';


//roles
$route['roles'] = 'roles/view_roles';
$route['add_role'] = 'roles/add_roles';
$route['save_role'] = 'roles/save_role';
$route['edit_role/(:any)'] = 'roles/edit_role/$1';
$route['delete_role/(:any)'] = 'roles/delete_role/$1';


//profile
$route['edit_profile'] = 'profile/edit_profile';
$route['update_profile'] = 'profile/update_profile';
$route['view_profile'] = 'profile/view_profile';
$route['update_password'] = 'profile/update_password';
$route['notification_settings'] = 'profile/notification_settings';


//setting
$route['settings'] = 'settings/index';
$route['save_settings'] = 'settings/save_settings';


// notifications
$route['notifications'] = 'admin/show_all_notifications';
$route['new_notification'] = 'Notification/new';
$route['save_notification'] = 'Notification/save';
$route['view_notifications'] = 'Notification/index';
$route['edit_notification/(:any)'] = 'Notification/edit/$1';
$route['delete_notification/(:any)'] = 'Notification/delete/$1';


// timetable
$route['new_timetable'] = 'Timetable/new';
