<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login
$route['login'] = 'auth/index';

//forgetpassword
$route['forget_password'] = 'auth/forget_password_email';
$route['send_token'] = 'auth/is_email_valid';
$route['change_password/(:any)'] = 'auth/change_password/$1';
$route['password_changed'] = 'auth/password_changed';

//registeration
$route['create_new_account'] = 'reg/online_registration';
$route['registered'] = 'reg/save_registeration';

//dashboard
$route['dashboard'] = 'admin/dashboard';

// Manage
$route['manage/subjects'] = 'Subjects';
$route['add_subject'] = 'Subjects/add';
$route['save_subject'] = 'Subjects/save';
$route['edit_subject/(:any)'] = 'Subjects/edit/$1';
$route['delete_subject/(:any)'] = 'Subjects/delete/$1';
$route['manage/classrooms'] = 'Classrooms';
$route['add_classroom'] = 'Classrooms/add';
$route['save_classroom'] = 'Classrooms/save';
$route['edit_classroom/(:any)'] = 'Classrooms/edit/$1';
$route['delete_classroom/(:any)'] = 'Classrooms/delete/$1';


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
$route['update_user'] = 'users/update_user';
$route['view_users'] = 'users/view_users';
$route['view_users/(:any)'] = 'users/view_users/$1';
$route['change_user_status/(:any)/(:any)'] = 'users/change_user_status/$1/$2';
$route['delete_user/(:any)'] = 'users/delete_user/$1';
$route['view_user/(:any)'] = 'users/user_details/$1';



//roles
$route['roles'] = 'roles/view_roles';
$route['add_role'] = 'roles/add_roles';
$route['save_role'] = 'roles/save_role';
$route['edit_role/(:any)'] = 'roles/edit_role/$1';
$route['delete_role/(:any)'] = 'roles/delete_role/$1';


//profile
$route['edit_profile'] = 'profile/edit_profile';
$route['update_profile'] = 'profile/update_profile';
$route['view_profile/(:any)'] = 'users/user_details/$1';
$route['change_password'] = 'profile/change_password';
$route['update_password'] = 'profile/update_password';
$route['notification_settings'] = 'profile/notification_settings';


//setting
$route['settings'] = 'settings/index';
$route['save_settings'] = 'settings/save_settings';
$route['delete_setting/(:any)/slider_setting'] = 'settings/delete_setting/$1/$2';
$route['update_slider'] = 'settings/update_slider';
$route['change_status/(:any)/(:any)'] = 'settings/change_slider_status/$1/$2';

// notifications
$route['notifications'] = 'admin/show_all_notifications';
$route['new_notification'] = 'Notification/new';
$route['save_notification'] = 'Notification/save';
$route['view_notifications'] = 'Notification/index';
$route['edit_notification/(:any)'] = 'Notification/edit/$1';
$route['delete_notification/(:any)'] = 'Notification/delete/$1';


// timetable
$route['new_timetable'] = 'Timetable/new';
$route['create_timetable'] = 'Timetable/create';
$route['edit_timetable'] = 'Timetable/edit';
$route['customize_timetable/(:any)'] = 'Timetable/customize_timetable/$1';
$route['view_timetables'] = 'Timetable/index';
