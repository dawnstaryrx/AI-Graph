<?php
error_reporting(E_ALL ^ E_NOTICE);
@set_time_limit(0);
ob_start();
define('IA_ROOT', str_replace("\\",'/', dirname(__FILE__)));
define('APP_URL', $_SERVER['HTTP_HOST'].'/web/');
define('APP_STORE_URL', $_SERVER['HTTP_HOST'].'/web');
define('APP_STORE_API', $_SERVER['HTTP_HOST'].'/api.php');
if($_GET['res']) {
    $res = $_GET['res'];
    $reses = tpl_resources();
    if(array_key_exists($res, $reses)) {
        if($res == 'css') {
            header('content-type:text/css');
        } else {
            header('content-type:image/png');
        }
        echo base64_decode($reses[$res]);
        exit();
    }
}

$actions = array('license', 'env', 'db', 'finish');
$action = $_COOKIE['action'];
$action = in_array($action, $actions) ? $action : 'license';
$ispost = strtolower($_SERVER['REQUEST_METHOD']) == 'post';

if(file_exists(IA_ROOT . '/install.lock') && $action != 'finish') {
    header('location: ./index.php');
    exit;
}
header('content-type: text/html; charset=utf-8');
if($action == 'license') {
    if($ispost) {
        setcookie('action', 'env');
        header('location: ?refresh');
        exit;
    }
    tpl_install_license();
}
if($action == 'env') {
    if($ispost) {
        setcookie('action', $_POST['do'] == 'continue' ? 'db' : 'license');
        header('location: ?refresh');
        exit;
    }
    $ret = array();
    $ret['server']['os']['value'] = php_uname();
    if(PHP_SHLIB_SUFFIX == 'dll') {
        $ret['server']['os']['remark'] = '建议使用 Linux 系统以提升程序性能';
        $ret['server']['os']['class'] = 'warning';
    }
    $ret['server']['sapi']['value'] = $_SERVER['SERVER_SOFTWARE'];
    if(PHP_SAPI == 'isapi') {
        $ret['server']['sapi']['remark'] = '建议使用 Apache 或 Nginx 以提升程序性能';
        $ret['server']['sapi']['class'] = 'warning';
    }
    $ret['server']['php']['value'] = PHP_VERSION;
    $ret['server']['dir']['value'] = IA_ROOT;
    if(function_exists('disk_free_space')) {
        $ret['server']['disk']['value'] = floor(disk_free_space(IA_ROOT) / (1024*1024)).'M';
    } else {
        $ret['server']['disk']['value'] = 'unknow';
    }
    $ret['server']['upload']['value'] = @ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'unknow';

    $ret['php']['version']['value'] = PHP_VERSION;
    $ret['php']['version']['class'] = 'success';
    if(version_compare(PHP_VERSION, '5.3.0') == -1) {
        $ret['php']['version']['class'] = 'danger';
        $ret['php']['version']['failed'] = true;
        $ret['php']['version']['remark'] = 'PHP版本必须为 5.3.0 以上. <a href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58062">详情</a>';
    }

    $ret['php']['pdo']['ok'] = extension_loaded('pdo') && extension_loaded('pdo_mysql');
    if($ret['php']['pdo']['ok']) {
        $ret['php']['pdo']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['pdo']['class'] = 'success';
    } else {
        $ret['php']['pdo']['failed'] = true;
        $ret['php']['pdo']['value'] = '<span class="glyphicon glyphicon-remove text-warning"></span>';
        $ret['php']['pdo']['class'] = 'warning';
        $ret['php']['pdo']['remark'] = '您的PHP环境不支持PDO, 请开启此扩展. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58074">详情</a>';
    }

    $ret['php']['fopen']['ok'] = @ini_get('allow_url_fopen') && function_exists('fsockopen');
    if($ret['php']['fopen']['ok']) {
        $ret['php']['fopen']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
    } else {
        $ret['php']['fopen']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
    }

    $ret['php']['curl']['ok'] = extension_loaded('curl') && function_exists('curl_init');
    if($ret['php']['curl']['ok']) {
        $ret['php']['curl']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['curl']['class'] = 'success';
    } else {
        $ret['php']['curl']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['curl']['class'] = 'danger';
        $ret['php']['curl']['remark'] = '您的PHP环境不支持cURL, 也不支持 allow_url_fopen, 系统无法正常运行. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58086">详情</a>';
        $ret['php']['curl']['failed'] = true;
    }

    $ret['php']['ssl']['ok'] = extension_loaded('openssl');
    if($ret['php']['ssl']['ok']) {
        $ret['php']['ssl']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['ssl']['class'] = 'success';
    } else {
        $ret['php']['ssl']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['ssl']['class'] = 'danger';
        $ret['php']['ssl']['failed'] = true;
        $ret['php']['ssl']['remark'] = '没有启用OpenSSL, 将无法访问公众平台的接口, 系统无法正常运行. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58109">详情</a>';
    }

    $ret['php']['gd']['ok'] = extension_loaded('gd');
    if($ret['php']['gd']['ok']) {
        $ret['php']['gd']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['gd']['class'] = 'success';
    } else {
        $ret['php']['gd']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['gd']['class'] = 'danger';
        $ret['php']['gd']['failed'] = true;
        $ret['php']['gd']['remark'] = '没有启用GD, 将无法正常上传和压缩图片, 系统无法正常运行. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58110">详情</a>';
    }

    $ret['php']['dom']['ok'] = class_exists('DOMDocument');
    if($ret['php']['dom']['ok']) {
        $ret['php']['dom']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['dom']['class'] = 'success';
    } else {
        $ret['php']['dom']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['dom']['class'] = 'danger';
        $ret['php']['dom']['failed'] = true;
        $ret['php']['dom']['remark'] = '没有启用DOMDocument, 将无法正常安装使用模块, 系统无法正常运行. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58111">详情</a>';
    }

    $ret['php']['session']['ok'] = ini_get('session.auto_start');
    if($ret['php']['session']['ok'] == 0 || strtolower($ret['php']['session']['ok']) == 'off') {
        $ret['php']['session']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['session']['class'] = 'success';
    } else {
        $ret['php']['session']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['session']['class'] = 'danger';
        $ret['php']['session']['failed'] = true;
        $ret['php']['session']['remark'] = '系统session.auto_start开启, 将无法正常注册会员, 系统无法正常运行. <a target="_blank" href="http://www.xiaohuhd.com/forum.php?mod=redirect&goto=findpost&ptid=3564&pid=58111">详情</a>';
    }

    $ret['php']['asp_tags']['ok'] = ini_get('asp_tags');
    if(empty($ret['php']['asp_tags']['ok']) || strtolower($ret['php']['asp_tags']['ok']) == 'off') {
        $ret['php']['asp_tags']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['php']['asp_tags']['class'] = 'success';
    } else {
        $ret['php']['asp_tags']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['php']['asp_tags']['class'] = 'danger';
        $ret['php']['asp_tags']['failed'] = true;
        $ret['php']['asp_tags']['remark'] = '请禁用可以使用ASP 风格的标志，配置php.ini中asp_tags = Off';
    }

    $ret['write']['root']['ok'] = local_writeable(IA_ROOT . '/');
    if($ret['write']['root']['ok']) {
        $ret['write']['root']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['write']['root']['class'] = 'success';
    } else {
        $ret['write']['root']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['write']['root']['class'] = 'danger';
        $ret['write']['root']['failed'] = true;
        $ret['write']['root']['remark'] = '本地目录无法写入, 将无法使用自动更新功能, 系统无法正常运行.  <a href="http://www.xiaohuhd.com/">详情</a>';
    }
    $ret['write']['data']['ok'] = local_writeable(IA_ROOT . '/application');
    if($ret['write']['data']['ok']) {
        $ret['write']['data']['value'] = '<span class="glyphicon glyphicon-ok text-success"></span>';
        $ret['write']['data']['class'] = 'success';
    } else {
        $ret['write']['data']['value'] = '<span class="glyphicon glyphicon-remove text-danger"></span>';
        $ret['write']['data']['class'] = 'danger';
        $ret['write']['data']['failed'] = true;
        $ret['write']['data']['remark'] = 'application目录无法写入, 将无法写入配置文件, 系统无法正常安装. ';
    }

    $ret['continue'] = true;
    foreach($ret['php'] as $opt) {
        if($opt['failed']) {
            $ret['continue'] = false;
            break;
        }
    }
    if($ret['write']['failed']) {
        $ret['continue'] = false;
    }
    tpl_install_env($ret);
}
if($action == 'db') {
    if($ispost) {
        if($_POST['do'] != 'continue') {
            setcookie('action', 'env');
            header('location: ?refresh');
            exit();
        }
        $family = $_POST['family'] == 'x' ? 'x' : 'v';
        $db = $_POST['db'];
        $user = $_POST['user'];
        try {
            $pieces = explode(':', $db['server']);
            $db['server'] = $pieces[0];
            $db['port'] = !empty($pieces[1]) ? $pieces[1] : '3306';
            $link = new PDO("mysql:host={$db['server']};port={$db['port']}", $db['username'], $db['password']); 	// dns可以没有dbname
            $link->exec("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
            $link->exec("SET sql_mode=''");
            if ($link->errorCode() != '00000') {
                $errorInfo = $link->errorInfo();
                $error = $errorInfo[2];
            } else {
                $statement = $link->query("SHOW DATABASES LIKE '{$db['name']}';");
                $fetch = $statement->fetch();
                if (empty($fetch)){
                    if (substr($link->getAttribute(PDO::ATTR_SERVER_VERSION), 0, 3) > '4.1') {
                        $link->query("CREATE DATABASE IF NOT EXISTS `{$db['name']}` DEFAULT CHARACTER SET utf8");
                    } else {
                        $link->query("CREATE DATABASE IF NOT EXISTS `{$db['name']}`");
                    }
                }
                $statement = $link->query("SHOW DATABASES LIKE '{$db['name']}';");
                $fetch = $statement->fetch();
                if (empty($fetch)) {
                    $error .= "数据库不存在且创建数据库失败. <br />";
                }
                if ($link->errorCode() != '00000') {
                    $errorInfo = $link->errorInfo();
                    $error .= $errorInfo[2];
                }
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            if (strpos($error, 'Access denied for user') !== false) {
                $error = '您的数据库访问用户名或是密码错误. <br />';
            } else {
                $error = iconv('gbk', 'utf8', $error);
            }
        }
        if(empty($error)) {
            $link->exec("USE {$db['name']}");
            $statement = $link->query("SHOW TABLES LIKE '{$db['prefix']}%';");
            if ($statement->fetch()) {
                $error = '您的数据库不为空，请重新建立数据库或是清空该数据库或更改表前缀！';
            }
        }
        if(empty($error)) {
            $config = local_config();
            $cookiepre = local_salt(4) . '_';
            $authkey = local_salt(8);
            $config = str_replace(array(
                '{db-server}', '{db-username}', '{db-password}', '{db-port}', '{db-name}', '{db-tablepre}', '{cookiepre}', '{authkey}', '{attachdir}'
            ), array(
                $db['server'], $db['username'], $db['password'], $db['port'], $db['name'], $db['prefix'], $cookiepre, $authkey, 'attachment'
            ), $config);

            $dbfile = IA_ROOT . '/doc/database/install.sql';
            if(file_exists(IA_ROOT . '/index.php') && is_dir(IA_ROOT . '/web') &&  file_exists($dbfile)) {
                $sql = file_get_contents($dbfile);
                if(empty($sql)) {
                    die('<script type="text/javascript">alert("安装包不正确, 数据安装脚本缺失.");history.back();</script>');
                }
                run_sql($sql);
            } else {
                die('<script type="text/javascript">alert("你正在使用本地安装, 但未下载完整安装包, 请下载完整安装包后重试.");history.back();</script>');
            }

            $password = md5(md5($user['password']) . 'tp_we');
            $link->exec("INSERT INTO {$db['prefix']}store_user (user_name, password,real_name,is_delete,wxapp_id,is_super,create_time, update_time) VALUES('{$user['username']}', '{$password}','超级管理员',0,10001,1, '" . time() . "', '" . time() . "')");

            $link->exec("INSERT INTO `{$db['prefix']}wxapp` (`wxapp_id`, `uniacid`, `name`, `displayorder`, `app_id`, `app_secret`, `type`, `mchid`, `apikey`, `cert_pem`, `key_pem`, `is_recycle`, `is_delete`, `create_time`, `over_time`, `update_time`) VALUES (10001, '10001', '删掉这个后新建平台', '10', '', '', '1', '', '', NULL, NULL, '0', '1', '" . time() . "', '" . time() . "', '" . time() . "');");
            local_mkdirs(IA_ROOT . '/data');
            file_put_contents(IA_ROOT . '/data/config.php', $config);
            touch(IA_ROOT . '/install.lock');
            setcookie('action', 'finish');
            header('location: ?refresh');
            exit();
        }
    }
    tpl_install_db($error);

}
if($action == 'finish') {
    setcookie('action', '', -10);
    tpl_install_finish();
}

function local_writeable($dir) {
    $writeable = 0;
    if(!is_dir($dir)) {
        @mkdir($dir, 0777);
    }
    if(is_dir($dir)) {
        if($fp = fopen("$dir/test.txt", 'w')) {
            fclose($fp);
            unlink("$dir/test.txt");
            $writeable = 1;
        } else {
            $writeable = 0;
        }
    }
    return $writeable;
}

function local_config() {
    $cfg = <<<EOF
<?php
// 数据库配置

return \$config= [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '{db-server}',
    // 数据库名
    'database' => '{db-name}',
    // 用户名
    'username' => '{db-username}',
    // 密码
    'password' => '{db-password}',
    // 端口
    'hostport' => '{db-port}',
    // 连接dsn
    'dsn' => '',
    // 数据库连接参数
    'params' => [],
    // 数据库编码默认采用utf8
    'charset' => 'utf8',
    // 数据库表前缀
    'prefix' => '{db-tablepre}',
    // 数据库调试模式
    'debug' => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => false,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
    // 是否严格检查字段是否存在
    'fields_strict' => true,
    // 数据集返回类型
    'resultset_type' => 'collection',
    // 自动写入时间戳字段
    'auto_timestamp' => true,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain' => false,
];

EOF;
    return trim($cfg);
}

function local_mkdirs($path) {
    if(!is_dir($path)) {
        local_mkdirs(dirname($path));
        mkdir($path);
    }
    return is_dir($path);
}

function run_sql($sql) {
    global $link, $db;

    if(!isset($sql) || empty($sql)) return;

    $link->exec($sql);
    if ($link->errorCode() != '00000') {
        $errorInfo = $link->errorInfo();
        echo $errorInfo[0] . ": " . $errorInfo[2] . "<br />";
    }
}



function tpl_frame() {
    global $action, $actions;
    $action = $_COOKIE['action'];
    $step = array_search($action, $actions);
    $steps = array();
    for($i = 0; $i <= $step; $i++) {
        if($i == $step) {
            $steps[$i] = ' list-group-item-info';
        } else {
            $steps[$i] = ' list-group-item-success';
        }
    }
    $progress = $step * 25 + 25;
    $content = ob_get_contents();
    ob_clean();
    $tpl = <<<EOF
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>安装系统 - 多平台管理</title>
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<style>
			html,body{font-size:13px;font-family:"Microsoft YaHei UI", "微软雅黑", "宋体";}
			.pager li.previous a{margin-right:10px;}
			.header a{color:#FFF;}
			.header a:hover{color:#428bca;}
			.footer{padding:10px;}
			.footer a,.footer{color:#eee;font-size:14px;line-height:25px;}
		</style>
		<!--[if lt IE 9]>
		  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="background-color:#ff6f3d;">
		<div class="container">
			<div class="header" style="margin:15px auto;">
			</div>
			<div class="row well" style="margin:auto 0;">
				<div class="col-xs-12">
					<div class="progress" title="安装进度">
						<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="{$progress}" aria-valuemin="0" aria-valuemax="100" style="width: {$progress}%;">
							{$progress}%
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							安装步骤
						</div>
						<ul class="list-group">
							<a href="javascript:;" class="list-group-item{$steps[0]}"><span class="glyphicon glyphicon-copyright-mark"></span> &nbsp; 许可协议</a>
							<a href="javascript:;" class="list-group-item{$steps[1]}"><span class="glyphicon glyphicon-eye-open"></span> &nbsp; 环境监测</a>
							<a href="javascript:;" class="list-group-item{$steps[2]}"><span class="glyphicon glyphicon-cog"></span> &nbsp; 参数配置</a>
							<a href="javascript:;" class="list-group-item{$steps[3]}"><span class="glyphicon glyphicon-ok"></span> &nbsp; 成功</a>
						</ul>
					</div>
				</div>
				<div class="col-xs-12">
					{$content}
				</div>
			</div>

		</div>
		<script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
		<script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
EOF;
					echo trim($tpl);
}

function tpl_install_license() {
    echo <<<EOF
		<div class="panel panel-default">
			<div class="panel-heading">阅读许可协议</div>
			<div class="panel-body" style="overflow-y:scroll;max-height:400px;line-height:20px;">
			
				<p>
					感谢您选择多应用 - 多平台管理系统（以下简称多应用，多应用基于 TinkPHP + MySQL的技术开发，全部源码开放。 <br />
					为了使你合法正确的使用本软件，请你在使用前务必阅读清楚下面的协议条款：
				</p>
				<p>
					<strong>一、本授权协议适用且仅适用于多应用系统任何版本。</strong>
				</p>
				<p>
					<strong>二、协议许可的权利 </strong>
					<ol>
						<li>您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。</li>
						<li>您可以在协议规定的约束和限制范围内修改多应用源代码或界面风格以适应您的网站要求。</li>
						<li>您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。</li>
						<li>如果想获取更高权益，可以获得商业授权，您将可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。</li>
					</ol>
				</p>
				<p>
					<strong>三、协议规定的约束和限制 </strong>
					<ol>
						<li>未经官方许可，不得对本软件或与之关联的商业抵押或发放子许可证。</li>
						<li>未经官方许可，只禁止在多应用的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。</li>
						<li>如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。</li>
					</ol>
				</p>
				<p>
					<strong>四、有限担保和免责声明 </strong>
					<ol>
						<li>本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
						<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺对免费用户提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
						<li>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始确认本协议并安装  多应用，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</li>
						<li>如果本软件带有其它软件的整合API示范例子包，这些文件版权不属于本软件官方，并且这些文件是没经过授权发布的，请参考相关软件的使用许可合法的使用。</li>
					</ol>
				</p>
			</div>
		</div>
		<form class="form-inline" role="form" method="post">
			<ul class="pager">
				<li class="pull-left" style="display:block;padding:5px 10px 5px 0;">
					<div class="checkbox">
						<label>
							<input type="checkbox"> 我已经阅读并同意此协议
						</label>
					</div>
				</li>
				<li class="previous"><a href="javascript:;" onclick="if(jQuery(':checkbox:checked').length == 1){jQuery('form')[0].submit();}else{alert('您必须同意软件许可协议才能安装！')};">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</form>
EOF;
    tpl_frame();
}

function tpl_install_env($ret = array()) {
    if(empty($ret['continue'])) {
        $continue = '<li class="previous disabled"><a href="javascript:;">请先解决环境问题后继续</a></li>';
    } else {
        $continue = '<li class="previous"><a href="javascript:;" onclick="$(\'#do\').val(\'continue\');$(\'form\')[0].submit();">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>';
    }
    echo <<<EOF
		<div class="panel panel-default">
			<div class="panel-heading">服务器信息</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">参数</th>
					<th>值</th>
					<th></th>
				</tr>
				<tr class="{$ret['server']['os']['class']}">
					<td>服务器操作系统</td>
					<td>{$ret['server']['os']['value']}</td>
					<td>{$ret['server']['os']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['sapi']['class']}">
					<td>Web服务器环境</td>
					<td>{$ret['server']['sapi']['value']}</td>
					<td>{$ret['server']['sapi']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['php']['class']}">
					<td>PHP版本</td>
					<td>{$ret['server']['php']['value']}</td>
					<td>{$ret['server']['php']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['dir']['class']}">
					<td>程序安装目录</td>
					<td>{$ret['server']['dir']['value']}</td>
					<td>{$ret['server']['dir']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['disk']['class']}">
					<td>磁盘空间</td>
					<td>{$ret['server']['disk']['value']}</td>
					<td>{$ret['server']['disk']['remark']}</td>
				</tr>
				<tr class="{$ret['server']['upload']['class']}">
					<td>上传限制</td>
					<td>{$ret['server']['upload']['value']}</td>
					<td>{$ret['server']['upload']['remark']}</td>
				</tr>
			</table>
		</div>

		<div class="alert alert-warning">PHP环境要求必须满足下列所有条件，否则系统或系统部份功能将无法使用。</div>
		<div class="panel panel-default">
			<div class="panel-heading">PHP环境要求</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">选项</th>
					<th style="width:180px;">要求</th>
					<th style="width:50px;">状态</th>
					<th>说明及帮助</th>
				</tr>
				<tr class="{$ret['php']['version']['class']}">
					<td>PHP版本</td>
					<td>5.3或者5.3以上</td>
					<td>{$ret['php']['version']['value']}</td>
					<td>{$ret['php']['version']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['curl']['class']}">
					<td>cURL</td>
					<td>支持</td>
					<td>{$ret['php']['curl']['value']}</td>
					<td>{$ret['php']['curl']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['pdo']['class']}">
					<td>PDO</td>
					<td>支持</td>
					<td>{$ret['php']['pdo']['value']}</td>
					<td>{$ret['php']['pdo']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['ssl']['class']}">
					<td>openSSL</td>
					<td>支持</td>
					<td>{$ret['php']['ssl']['value']}</td>
					<td>{$ret['php']['ssl']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['gd']['class']}">
					<td>GD2</td>
					<td>支持</td>
					<td>{$ret['php']['gd']['value']}</td>
					<td>{$ret['php']['gd']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['dom']['class']}">
					<td>DOM</td>
					<td>支持</td>
					<td>{$ret['php']['dom']['value']}</td>
					<td>{$ret['php']['dom']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['session']['class']}">
					<td>session.auto_start</td>
					<td>关闭</td>
					<td>{$ret['php']['session']['value']}</td>
					<td>{$ret['php']['session']['remark']}</td>
				</tr>
				<tr class="{$ret['php']['asp_tags']['class']}">
					<td>asp_tags</td>
					<td>关闭</td>
					<td>{$ret['php']['asp_tags']['value']}</td>
					<td>{$ret['php']['asp_tags']['remark']}</td>
				</tr>
			</table>
		</div>

		<div class="alert alert-warning">系统要求多应用整个安装目录必须可写, 才能使用多应用所有功能。</div>
		<div class="panel panel-default">
			<div class="panel-heading">目录权限监测</div>
			<table class="table table-striped">
				<tr>
					<th style="width:150px;">目录</th>
					<th style="width:180px;">要求</th>
					<th style="width:50px;">状态</th>
					<th>说明及帮助</th>
				</tr>
				<tr class="{$ret['write']['root']['class']}">
					<td>/</td>
					<td>整目录可写</td>
					<td>{$ret['write']['root']['value']}</td>
					<td>{$ret['write']['root']['remark']}</td>
				</tr>
				<tr class="{$ret['write']['data']['class']}">
					<td>/</td>
					<td>data目录可写</td>
					<td>{$ret['write']['data']['value']}</td>
					<td>{$ret['write']['data']['remark']}</td>
				</tr>
			</table>
		</div>
		<form class="form-inline" role="form" method="post">
			<input type="hidden" name="do" id="do" />
			<ul class="pager">
				<li class="previous"><a href="javascript:;" onclick="$('#do').val('back');$('form')[0].submit();"><span class="glyphicon glyphicon-chevron-left"></span> 返回</a></li>
				{$continue}
			</ul>
		</form>
EOF;
				tpl_frame();
}

function tpl_install_db($error = '') {
    if(!empty($error)) {
        $message = '<div class="alert alert-danger">发生错误: ' . $error . '</div>';
    }
    $insTypes = array();
    if(file_exists(IA_ROOT . '/index.php') && is_dir(IA_ROOT . '/app') && is_dir(IA_ROOT . '/web')) {
        $insTypes['local'] = ' checked="checked"';
    } else {
        $insTypes['remote'] = ' checked="checked"';
    }
    if (!empty($_POST['type'])) {
        $insTypes = array();
        $insTypes[$_POST['type']] = ' checked="checked"';
    }
    $disabled = empty($insTypes['local']) ? ' disabled="disabled"' : '';
    echo <<<EOF
	{$message}
	<form class="form-horizontal" method="post" role="form">
		<div class="panel panel-default">
			<div class="panel-heading">数据库选项</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库主机</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[server]" value="127.0.0.1">
						<a style="color:red;" >特别注意：<br>如果是win系统，请填"127.0.0.1"，<br>如果是linux系统，请填"localhost"</a>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库用户</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[username]" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[password]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">表前缀</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[prefix]" value="tpwe_" readonly="readonly" onclick="javascript:alert('禁止修改表前缀！')">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">数据库名称</label>
					<div class="col-sm-4">
						<input class="form-control" type="text" name="db[name]" value="">
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">管理选项</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">管理员账号</label>
					<div class="col-sm-4">
						<input class="form-control" type="username" name="user[username]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">管理员密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="password" name="user[password]">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">确认密码</label>
					<div class="col-sm-4">
						<input class="form-control" type="password"">
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="do" id="do" />
		<ul class="pager">
			<li class="previous"><a href="javascript:;" onclick="$('#do').val('back');$('form')[0].submit();"><span class="glyphicon glyphicon-chevron-left"></span> 返回</a></li>
			<li class="previous"><a href="javascript:;" onclick="if(check(this)){jQuery('#do').val('continue');if($('input[name=type]:checked').val() == 'remote'){alert('在线安装时，安装程序会下载精简版快速完成安装，完成后请务必注册云服务更新到完整版。')}$('form')[0].submit();}">继续 <span class="glyphicon glyphicon-chevron-right"></span></a></li>
		</ul>
	</form>
	<script>
		var lock = false;
		function check(obj) {
			if(lock) {
				return;
			}
			$('.form-control').parent().parent().removeClass('has-error');
			var error = false;
			$('.form-control').each(function(){
				if($(this).val() == '') {
					$(this).parent().parent().addClass('has-error');
					this.focus();
					error = true;
				}
			});
			if(error) {
				alert('请检查未填项');
				return false;
			}
			if($(':password').eq(0).val() != $(':password').eq(1).val()) {
				$(':password').parent().parent().addClass('has-error');
				alert('确认密码不正确.');
				return false;
			}
			lock = true;
			$(obj).parent().addClass('disabled');
			$(obj).html('正在执行安装');
			return true;
		}
	</script>
EOF;
	tpl_frame();
}

function tpl_install_finish() {
    echo <<<EOF
	<div class="page-header"><h3>安装完成</h3></div>
	<div class="alert alert-success">
		恭喜您!已成功安装“多应用 - 多平台管理”系统，您现在可以：　 <a target="_blank" class="btn btn-success" href="./index.php">访问网站首页</a>
	</div>
EOF;
    tpl_frame();
}

function local_salt($length = 8) {
    $result = '';
    while(strlen($result) < $length) {
        $result .= sha1(uniqid('', true));
    }
    return substr($result, 0, $length);
}

function showerror($errno, $message = '') {
    return array(
        'errno' => $errno,
        'error' => $message,
    );
}



