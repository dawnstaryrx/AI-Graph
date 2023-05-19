<?php


// [ 应用入口文件 ]

// 定义运行目录
define('WEB_PATH', __DIR__ . '/');
define('IN_IA','WE');
//兼容微擎
define("IA_ROOT",  __DIR__ . '/');
define('TEMPLATE_DISPLAY', 0);
define('TEMPLATE_FETCH', 1);
define('TEMPLATE_INCLUDEPATH', 2);
define("IMS_FAMILY", 'v');
// 定义应用目录
define('APP_PATH', WEB_PATH . 'application/');
define('ADDONS_PATH', WEB_PATH . 'addons/');
// 加载框架引导文件
if(!file_exists(IA_ROOT . '/install.lock')) {
    header('location: ./install.php');
    exit;
}

require APP_PATH . '../thinkphp/start.php';
