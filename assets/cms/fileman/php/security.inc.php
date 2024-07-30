<?php
/*
  RoxyFileman - web based file manager. Ready to use with CKEditor, TinyMCE. 
  Can be easily integrated with any other WYSIWYG editor or CMS.

  Copyright (C) 2013, RoxyFileman.com - Lyubomir Arsov. All rights reserved.
  For licensing, see LICENSE.txt or http://RoxyFileman.com/license

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.

  Contact: Lyubomir Arsov, liubo (at) web-lobby.com
*/
  /*========= start edited by arisnew =========*/
require '../../../../application/third_party/CoreIgniter.php';
    
//Specify the root directory of CI installation
$root = dirname('../../../../index.php');

//Specify the path to the system folder
$basepath = $root.'/system/';

//Specify the path to the application folder
$apppath = $root.'/application/';

//Specify the supposed environment of the instance
$environment = 'production';

//Specify the $assign_to_config array if you use it
$assign_to_config = array('url_suffix' => '.html');// null;// array('key' => 'value');

//Create the instance
try {
    $CI = CoreIgniter::init($basepath, $apppath, $environment, $assign_to_config);
} catch (CoreIgniterException $e) {
    exit($e->getMessage());
}

//Use it as usual
$CI->load->library('session');

$me = $CI->session->userdata('_USER_ID');
if ($me == null) {
    exit();
}

function checkAccess($action){
  if(!session_id())
    session_start();
}
?>