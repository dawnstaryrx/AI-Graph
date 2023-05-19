<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<title>创作者中心</title>
<meta name="viewport" id="WebViewport" content="width=750px,initial-scale=1,target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=5,user-scalable=no" />  
<meta name="apple-mobile-web-app-capable" content="yes">  
<meta name="apple-mobile-web-app-status-bar-style" content="black">  
<meta name="format-detection" content="telephone=no">  
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="App Loction Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>

    <meta charset="utf-8" />


    <!-- 新 Bootstrap4 核心 CSS 文件 -->

<link href="../../../addons/xz_bq_dyl/css/style.css" rel='stylesheet' type='text/css' />
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/com.js"></script>

	<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->

    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->



   	<style>

  @viewport  
{  
    zoom: 1.0;  
    width: 750px;  
}  
@-ms-viewport  
{  
    width: 750px;  
    zoom: 1.0;  
}
</style>
<script>

var bfb
if (screen.width < 750) {
	document.getElementById('WebViewport').setAttribute('content', 'width=750px,initial-scale=' + screen.width / 750 + ',target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=5');
}

</script>
</head>
<body><h1></h1>
		<div class="app-location">
			<h2>欢迎登录创作者中心</h2>
			<div class="line"><span></span></div>
			<div class="location" style="text-align:center"><img src="../../../../addons/xz_bq_dyl/images/location.png" class="img-responsive" alt=""  /></div>
		
				<input type="text"  id="user" class="text" autocomplete = "off" >
				<input type="password"  id="password"  >
				<div class="submit"><input type="submit"  value="登录"  onclick="login()" style="height:80px"></div>
				<div class="clear"></div>
			
		
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p><?php  echo $btnname?></p>
		</div>


<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>

 <script>

        function register() {
            //跳转到注册界面register.html进行注册
           
        }
        function login() {

$.post("<?php  echo $this->createWebUrl('user')?>/pt/login", {
user: $('#user').val(),
password: $('#password').val()

		},
				function (data) {
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){

window.location.href='<?php  echo $loginlink;?>';

				 }else{
				   window.alert(obj['res'])
				 }
				})
        }
    </script>