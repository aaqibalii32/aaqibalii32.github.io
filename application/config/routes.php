<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'dashboard/index';

$route['404_override'] = 'My404';
$route['translate_uri_dashes'] = FALSE;
$route['my-chart'] = "Dashboard";