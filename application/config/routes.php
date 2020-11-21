<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['blogs/(:any)'] = 'blogs/$1';

$route['blogs/show/(:any)'] = 'blogs/show/$1';

$route['blogs/edit/(:any)'] = 'blogs/edit/$1';

$route['blogs/delete/(:any)'] = 'blogs/delete/$1';

$route['blogs/contact/(:any)'] = 'blogs/contact/$1';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
