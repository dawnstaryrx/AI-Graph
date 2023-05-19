<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><?= $setting['store']['values']['name'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="assets/common/i/favicon.ico"/>



    <meta name="apple-mobile-web-app-title" content="<?= $setting['store']['values']['name'] ?>"/>
    <link rel="stylesheet" href="assets/store/css/app.css?v=<?= $version ?>"/>
    <link rel="stylesheet" href="assets/store/css/common.css?v=<?= $version ?>"/>





    
    
<link rel="stylesheet" href="/runtime/tpl/web/xz_bq_dyl/default/newlib/css/common.css"/>  
<link rel="stylesheet" href="/runtime/tpl/web/xz_bq_dyl/default/newlib/css/bootstrap.min.css"/>  
<link rel="stylesheet" href="/runtime/tpl/web/xz_bq_dyl/default/newlib/css/style.css"/>  
<script type="text/javascript" src="/runtime/tpl/web/xz_bq_dyl/default/newlib/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/runtime/tpl/web/xz_bq_dyl/default/newlib/jquery.validate.min.js"></script>
<script type="text/javascript" src="/runtime/tpl/web/xz_bq_dyl/default/newlib/jquery.cookie.min.js"></script>
<script type="text/javascript" src="/runtime/tpl/web/xz_bq_dyl/default/newlib/bootstrap.min.js"></script>
	
<script src="assets/store/js/file.library.js?v=<?php  echo time();?>"></script>
<script src="assets/common/js/webuploader.html5only.js"></script>
<script src="assets/store/js/app.js?v=<?php  echo time();?>"></script>
<script src="assets/common/plugins/layer/layer.js"></script>

<script src="assets/common/js/art-template.js"></script>

 
 <link rel="stylesheet" href="assets/common/css/amazeui.min.css"/>



    <link rel="stylesheet" href="assets/store/css/app.css?v=<?= $version ?>"/>
    <link rel="stylesheet" href="//at.alicdn.com/t/font_2462106_vsb4mwm4lmg.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_2462198_dkndzmy523.css">





<script type="text/javascript" src="/addons/xz_bq_dyl/template/libs/com.js"></script>

    <script>
        BASE_URL = '<?php  echo $base_url;?>';
        STORE_URL = '<?php  echo $store_url;?>';
        var require = window.top.require;
    </script>

     <?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/tpl/file_image', TEMPLATE_INCLUDEPATH)) : (include template('common/tpl/file_image', TEMPLATE_INCLUDEPATH));?>

</head>

<body data-type="" style="background-color:#ffffff">

<div class="am-g tpl-g" >
    <!-- 头部 -->
    <header class="tpl-header"  style="display:none">
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-button switch-button">
                <i class="iconfont icon-menufold"></i>
            </div>
            <!-- 刷新页面 -->
            <div class="am-fl tpl-header-button refresh-button">
                <i class="iconfont icon-refresh"></i>
            </div>
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="<?= url('store.user/renew') ?>" style="font-size:15px">欢迎你，<span><?php  echo $_W['admin']['user']['user_name'];?></span>
                        </a>
                    </li>
                    <!-- 退出 -->
                    <li class="am-text-sm" >
                        <a href="<?= url('passport/logout') ?>"  style="font-size:15px">
                            <i class="iconfont icon-tuichu"></i> 退出
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar dis-flex">
        <!-- 一级菜单 -->
        <ul class="sidebar-nav" style="">
            <li class="sidebar-nav-heading" style="text-align:center;"><?php  echo $_W['modules']['name'];?></li>
            <li class="sidebar-nav-link" style="margin: 0px;padding: 0px;" ><a class="sidebar-nav-link" style="height: 12px;line-height: 12px;padding: 0px;text-align: center;" href="<?php  echo url('wxapp/list',array('uniacid'=>$_W['uniacid']))?>"> <img class="iconfont sidebar-nav-link-logo" src="assets/store/img/qiehuan.png" alt="切换"></a></li>
			
            <?php  if(is_array($_W['menus'])) { foreach($_W['menus'] as $key => $item) { ?>
                <li class="sidebar-nav-link" style="text-align:center">
                    <a href="<?php  echo $this->createWebUrl($item['do']['do']);?>"  class="<?php  if(!empty($item['active'])) { ?> 'active' <?php  } ?>">
                         <i class="iconfont sidebar-nav-link-logo icon-setting"></i>
                        <?php  echo $item['name'];?>
                    </a>
                </li>
           <?php  } } ?>
        </ul>
        <!-- 子级菜单-->

    </div>

    <!-- 内容区域 start -->
    <div class="tpl-content-wrapper <?= empty($second) ? 'no-sidebar-second' : '' ?>" style="background: #fff;">
<div style="width:90%;margin-left:5%">
