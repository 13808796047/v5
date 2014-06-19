<?php
define('GROUP_TEMPLATE','cms/Common/Template/');
define('DEBUG',true);
define('GROUP_PATH','Cms/');
//缓存目录
define('CACHE_PATH','data/cache');
if(!is_file('install/lock.php')){
	header('location:install');exit;
}
require 'hdphp/hdphp/hdphp.php';