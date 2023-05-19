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
<head>
    <meta charset="utf-8" />
    <title>登录界面</title>

    <!-- 新 Bootstrap4 核心 CSS 文件 -->

<link href="../../../addons/xz_bq_dyl/css/style.css" rel='stylesheet' type='text/css' />
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/com.js"></script>

	<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->

    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
	<script type="text/javascript" src="./resource/js/lib/bootstrap.min.js"></script>
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
<div class="app-location" style="margin-top:-40px">
		<h2 style="margin-top:-40px;font-weight:bold">创作者中心</h2>
			<div class="line" ><span></span></div>
		<div style="height:20px"></div>
<div class="location" style="text-align:center">

<!--个人资料-->
<div style="margin-top:-20px;width:auto;height:auto;background-color:#fff;border-radius:10px"> <a href='<?php  echo $infolink;?>'><button style="position:absolute;float:right;box-shadow: 0px 0px 10px #1430da;margin-top:18px; width:180px height:60px; text-align:center; line-height:40px;z-index:100;font-size:17px;po;background:#1430da;border:1px solid  ce6766;color:#fff;border-radius:10px;width:120px;color:#fff;margin-left:100px" >完善资料</button></a>
  
	 <div  style="width:100%;height:auto; overflow:hidden;padding:0px">
    
      <div style="width:110px;height:82px;float:left;margin-top:-30px">
	  <div style="height:5px"></div>
        <img src="<?php  echo $rootpath;?><?php  echo $shop_db['headimgpath'];?>" style="box-shadow:3px 3px 15px #eeedf4;margin-left:-15px;border-radius:200px;width:65px;height:65px"/>
      </div>
      <div style="width:auto;height:auto;float:left;margin-left:-20px;">

        <div style="float:left;font-size:22px;font-weight:bolder;height:85px;line-height:25px;margin-top:5px;margin-left:0px;margin-top:-5px;text-align:left;overflow:hidden"><div style="height:20px;width:240px"></div><?php  echo $shop_db['shopname'];?><br><font style="font-size:18px;color:#9b9b9b">博主口令：<?php  echo $shop_db['kw'];?></font></div>

		  


       <div style="width:100%;height:10px;background-color:#ffffff"></div>
  
      </div>

</div>
</div>
		<!--个人资料-->		
 <a href="<?php  echo $newlink;?>"> <img  src="/addons/xz_bq_dyl/wxapp_img/topnew.jpg" style="width:100%;height:auto;border-radius:15px"/></a>


<div style="width:100%;height:auto;border:2px solid #000;border-radius:20px;overflow:hidden">
	 <a href="<?php  echo $moneypage;?>"><button style="position:absolute;float:right;box-shadow: 0px 0px 10px #1430da;margin-top:18px; width:180px height:60px; text-align:center; line-height:40px;z-index:100;font-size:17px;po;background:#1430da;border:1px solid  ce6766;color:#fff;border-radius:10px;width:120px;color:#fff;;margin-left:100px" >查看收益</button></a>
<div style="width:100%;height:auto;">
		  
<div style="width:100%;height:auto;background-color:#000000;height:80px;text-align:left">
<div style="height:10px"></div>
	<div style="color:#ffffff;font-size:17px;margin-left:20px">目前累计收益</div>
	<div><font style="font-size:28px;font-weight:bold;color:#ffde00;margin-left:20px"><?php  echo $money;?></font><font style="color:#ffffff;font-size:20px"> 元</font></div>
</div>
	</div>

	<div style="width:100%;height:auto;background-color:#ffffff">
		<div style="height:50px;line-height:50px;font-size:20px;width:33%;height:auto;float:left;background-color:#ffffff">
		昨日
	</div>
	<div style="height:50px;line-height:50px;font-size:20px;width:33%;height:auto;float:left;background-color:#ffffff">
		本周
	</div>
	<div style="height:50px;line-height:50px;font-size:20px;width:34%;height:auto;float:left;background-color:#ffffff">
		提现余额
	</div>
	
	</div>

	

	<div style="width:100%;height:130px;background-color:#ffffff">
		<div style="height:80px;line-height:60px;font-size:25px;width:33%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $list_dy;?><font style="font-size:14px"> 元</font>
	</div>
	<div style="height:80px;line-height:60px;font-size:25px;width:33%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $week_money_dy;?><font style="font-size:14px"> 元</font>
	</div>
	<div style="height:80px;line-height:60px;font-size:25px;width:34%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $less_dy;?><font style="font-size:14px"> 元</font>
	</div>
	
	</div>

</div>
		<!--个人资料-->		


<div style="height:20px"></div>
			</div>
 <a href="<?php  echo $hotlink;?>"> <img  src="/addons/xz_bq_dyl/wxapp_img/miduser.jpg" style="width:100%;height:auto;border-radius:15px" /></a>



<!---->

<div style="width:100%;height:auto;border:2px solid #000;border-radius:20px;overflow:hidden">
	 
<div style="width:100%;height:auto;">

	</div>

	<div style="width:100%;height:auto;background-color:#ffffff">
		<div style="height:50px;line-height:50px;font-size:20px;width:33%;height:auto;float:left;background-color:#ffffff">
		今日广告
	</div>
	<div style="height:50px;line-height:50px;font-size:20px;width:33%;height:auto;float:left;background-color:#ffffff">
		昨日广告
	</div>
	<div style="height:50px;line-height:50px;font-size:20px;width:34%;height:auto;float:left;background-color:#ffffff">
		本周广告
	</div>
	
	</div>

	

	<div style="width:100%;height:120px;background-color:#ffffff">
		<div style="height:80px;line-height:60px;font-size:25px;width:33%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $t_count_dy_num;?>
	</div>
	<div style="height:80px;line-height:60px;font-size:25px;width:33%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $y_count_dy_num;?>
	</div>
	<div style="height:80px;line-height:60px;font-size:25px;width:34%;height:auto;float:left;background-color:#ffffff">
		<?php  echo $w_count_dy_num;?>
	</div>
	
	</div>

</div>


<!---->

				<a href='<?php  echo $indexlink;?>'  target="_blank"><div class="submit" style="width:100%;height:150px;background-color:#0bd38a;border-radius:15px;line-height:20px;font-align:center;color:#fff;">
				<div style="height:30px"></div>
				<font style="font-size:50px;font-weight:bold">+</font><br>
				<div style="height:10px"></div>
				<font style="font-size:24px;font-weight:bold;margin-top:20px">添加资料</font><br>
				<div style="height:10px"></div>
				<font style="font-size:18px;color:#b3ffe3">(每日可上传<?php  echo $config_db['maxnum']?>个)</font>
				</div></a>
					
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

window.location.href=' <?php  echo $_W['siteroot']?>index.php?c=site&a=entry&do=user&module_name=xz_bq_dyl&uid=<?php  echo $_W['uniacid']?>';
return;

$.post("<?php  echo $this->createWebUrl('user')?>&pt=login", {
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