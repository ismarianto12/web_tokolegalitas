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
//$route['default_controller'] = 'main';
$route['default_controller'] = 'front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['informasi'] = 'front/informasi';
$route['informasi/(:any)'] = 'front/informasi/$1';

$route['pasisiapanel'] = 'CMS_viewer/pathGuide'; // show default page
$route['view/(:any)'] = 'CMS_viewer/pathGuide/$1'; // show specific page
$route['view/(:any)/(:any)'] = 'CMS_viewer/pathGuide/$1/$2'; // show specific page with param
$route['view/(:any)/(:any)/(:any)'] = 'CMS_viewer/pathGuide/$1/$2/$3'; // show specific page with param
//login-logout
$route['login'] = 'CMS_manager/identify/acknowledge'; // login
$route['logout'] = 'CMS_manager/identify/revoke'; // logout
//data
$route['manage'] = 'CMS_manager/process'; // create, update, or delete
$route['object'] = 'CMS_retriever/record'; // read/retrieve data
$route['object/(:any)'] = 'CMS_retriever/record/$1'; // read/retrieve data for MR|PO|PL list detail
$route['objects/(:any)'] = 'CMS_retriever/records/$1'; // read/retrieve list
$route['objects/(:any)/(:any)/(:any)'] = 'CMS_retriever/records/$1/$2/$3/no'; // read/retrieve list with param
$route['pick/(:any)'] = 'CMS_retriever/records/$1/null/null/yes'; // read/retrieve list with param for picker
$route['pick/(:any)/(:any)/(:any)'] = 'CMS_retriever/records/$1/$2/$3/yes'; // read/retrieve list with param for picker
//uploader
$route['doupload'] = 'CMS_uploader/proses_upload'; //doupload
$route['doupload_slide'] = 'CMS_uploader/proses_upload_slide'; //doupload slide
$route['doupload_gallery'] = 'CMS_uploader/proses_upload_gallery'; //doupload gallery
//
$route['send_guestbook'] = 'CMS_guestbook/proses'; //
$route['send_ebook'] = 'CMS_downloadhistory/proses'; //
$route['send_employee_seeker'] = 'CMS_employee_seeker/proses'; //
//
$route['proses_email/(:any)/(:any)'] = 'CMS_manager/do_mail/$1/$2';
//search
$route['search'] = 'CMS_finder/resultdata'; //pencarian
$route['search/(:any)'] = 'CMS_finder/resultdata/$1'; //pencarian
$route['kontak-kami'] = 'Page/contact'; //For contact
$route["pengajuan-proposal"] ="/Page/pengajuanproposal";

$route['page/(:any)'] = 'Page/profile/$1'; //for page single
$route['article/$1'] = 'Article/program/$1'; //for page single
$route['article/$1'] = 'Article/training/$1'; //for page single
$route['program/(:any)'] = 'Article/program_detail/$1'; //for page single
$route['program'] = 'Article/program'; //for page single
$route['album'] = 'Gallery/gallery_list';
$route['album/(:any)'] = 'Gallery/gallery_detail/$1';
$route['promo'] = 'Article/promo';
$route['promo/(:any)'] = 'Article/promo_detail/$1';
$route['article'] = 'Article/article';
$route['article/(:any)'] = 'Article/article_detail/$1';
$route['ebook'] = 'Ebook/ebook';
$route['video'] = 'Gallery/video_list';
$route['admin'] = 'CMS_viewer/pathGuide';
/*$route['page/job/(:any)'] = 'Page_single/jobvacancy/$1'; //for page single
$route['page/portofolio/(:any)'] = 'Page_single/portofolio/$1'; //for page portofolio
$route['page/job/detail/(:any)'] = 'Page_single/detail_job/$1'; //for detail job
$route['contact/(:any)'] = 'Contact/load_by_nameset/$S'; //For contact
$route['news/news/(:any)'] = 'News/detail_news/$1'; //for news (berita) detail
$route['news/fotos/(:any)'] = 'News/detail_fotos/$1'; //for news (berita) detail*/

//set cover gallery
$route['set_cover_gallery/(:num)'] = 'CMS_manager/set_cover_gallery/$1'; //for set cover gallery

$route['send_comment'] = 'CMS_comment/proses'; //for process comment from guest.
$route['approve_comment'] = 'CMS_comment/changeStatus'; //approve & unapprove comment