<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// url member
$route['dashboard'] = 'Member/index';
$route['katalog'] = 'Member/katalog';
$route['detail-katalog/(:num)'] = 'Member/detail_katalog/$1';
$route['testimoni'] = 'Member/testimoni';
$route['pelatihan-aktif'] = 'Member/pelatihan_aktif';
$route['kurikulum'] = 'Member/kurikulum';
$route['kelas'] = 'Member/kelas';
$route['sertifikat'] = 'Member/sertifikat';
$route['detail-profil'] = 'Member/detail_profil';

// url admin
$route['dashboard-admin'] = 'Admin/index';
$route['list-data-member'] = 'Admin/list_member';
$route['detail-data-member/(:num)'] = 'Admin/detail_member/$1';
$route['list-data-voucher'] = 'Admin/list_voucher';
$route['list-transaksi-masuk'] = 'Admin/list_transaksi_masuk';
$route['detail-transaksi-masuk/(:num)'] = 'Admin/detail_transaksi_masuk/$1';
$route['list-transaksi-selesai'] = 'Admin/list_transaksi_selesai';
$route['detail-transaksi-selesai/(:num)'] = 'Admin/detail_transaksi_selesai/$1';
$route['list-data-pelatihan'] = 'Admin/list_program_pelatihan';
$route['detail-program-pelatihan/(:num)'] = 'Admin/detail_pelatihan/$1';
$route['kurikulum/(:num)'] = 'Admin/list_kurikulum/$1';
$route['unit-kompetensi/(:num)'] = 'Admin/list_kurikulum_materi/$1';
$route['detail-profil-admin'] = 'Admin/detail_profil_admin';
$route['input-data-materi/(:num)/(:any)'] = 'Admin/list_materi/$1/$2';

