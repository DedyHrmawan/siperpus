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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// pengarang
$route['pengarang']             = 'admin/PengarangController/vPengarang';
$route['pengarang/store']       = 'admin/PengarangController/store';
$route['pengarang/ajxDetail']   = 'admin/PengarangController/ajxDetail';
$route['pengarang/edit']        = 'admin/PengarangController/edit';
$route['pengarang/destroy']     = 'admin/PengarangController/destroy';

// penerbit
$route['penerbit']             = 'admin/PenerbitController/vPenerbit';
$route['penerbit/store']       = 'admin/PenerbitController/store';
$route['penerbit/ajxDetail']   = 'admin/PenerbitController/ajxDetail';
$route['penerbit/edit']        = 'admin/PenerbitController/edit';
$route['penerbit/destroy']     = 'admin/PenerbitController/destroy';

// kategori
$route['kategori']             = 'admin/KategoriController/vKategori';
$route['kategori/store']       = 'admin/KategoriController/store';
$route['kategori/ajxDetail']   = 'admin/KategoriController/ajxDetail';
$route['kategori/edit']        = 'admin/KategoriController/edit';
$route['kategori/destroy']     = 'admin/KategoriController/destroy';

// petugas
$route['petugas']             = 'admin/PetugasController/vPetugas';
$route['petugas/store']       = 'admin/PetugasController/store';
$route['petugas/ajxDetail']   = 'admin/PetugasController/ajxDetail';
$route['petugas/edit']        = 'admin/PetugasController/edit';
$route['petugas/destroy']     = 'admin/PetugasController/destroy';

// anggota
$route['anggota']             = 'admin/AnggotaController/vAnggota';
$route['anggota/store']       = 'admin/AnggotaController/store';
$route['anggota/ajxDetail']   = 'admin/AnggotaController/ajxDetail';
$route['anggota/edit']        = 'admin/AnggotaController/edit';
$route['anggota/destroy']     = 'admin/AnggotaController/destroy';

// buku
$route['buku']             = 'admin/BukuController/vBuku';
$route['buku/store']       = 'admin/BukuController/store';
$route['buku/ajxDetail']   = 'admin/BukuController/ajxDetail';
$route['buku/edit']        = 'admin/BukuController/edit';
$route['buku/destroy']     = 'admin/BukuController/destroy';

//Overview
$route['admin-overview']     = 'admin/AdminOverviewController/vOverview';