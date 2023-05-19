<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>创作者中心</title>
<meta name="viewport" id="WebViewport" content="width=750px,initial-scale=1,target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=5,user-scalable=no" />  
<meta name="apple-mobile-web-app-capable" content="yes">  
<meta name="apple-mobile-web-app-status-bar-style" content="black">  
<meta name="format-detection" content="telephone=no">  
    <!-- 新 Bootstrap4 核心 CSS 文件 -->
	<link href="./resource/css/bootstrap.min.css?v=202201190002" rel="stylesheet">
<link href="../../../addons/xz_tn/css/style.css" rel='stylesheet' type='text/css' />

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/com.js"></script>
	

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

</script>  <style>
	
	.file {
            position: relative;
            background: rgb(244,255,251);
            border: 1px solid #00D6A3;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #00D6A3;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
            margin-left: 20px;
            cursor: pointer;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }
        .file:hover {
            background:  #00D6A3;
            border-color:  #00D6A3;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }

   </style>
</head>
<body><div style="text-align:center;margin-left:2%;margin-top:20px"><div style="text-align:left;height:120px">
	
<!---->
  <div style="width:110px;height:82px;float:left;margin-top:15px">
	  <div style="height:10px"></div>
        <img src="<?php  echo $rootpath;?><?php  echo $config_db['s_pic'];?>" style="margin-left:5px;border-radius:200px;width:65px;height:65px"/>
      </div>

	  <div style="width:auto;height:82px;float:left;float:left;font-size:22px;font-weight:bolder;height:85px;line-height:25px;margin-top:5px;margin-left:-20px;margin-top:-5px;text-align:left;color:#ffffff">
		<div style="height:48px"></div>
		<?php  echo $shop_db['shopname'];?> 

	  </div>



<!---->

</div></div>

<a href="<?php  echo $backlink;?>"><button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-150px">返回列表</button></a>

</div>


<div class="panel panel-default"  style="margin:20px;width:96%;margin-left:2%">



	<div class="panel-body" style="border-radius:50px">



    <div role="form" style="border-radius:50px">
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">


    
<!---->
<div class="col-sm-12" style="margin-bottom:20px">
		<div class="col-sm-3" style="font-size:24px;line-height:60px">创作者名称：</div><div class="col-sm-9">	
			<div class="mui-input-cell"> 
<input type="text" id="shopname" class="form-control" value="<?php  echo $shop_db['shopname'];?>" style="height:60px;font-size:24px;line-height:60px;"  placeholder="">
</div>
		</div>
</div>

 
<!---->
<div class="col-sm-12" style="margin-bottom:20px">
		<div class="col-sm-3" style="font-size:24px;line-height:60px">支付宝账号：</div><div class="col-sm-9">	
			<div class="mui-input-cell"> 
<input type="text" id="payid" class="form-control" value="<?php  echo $shop_db['payid'];?>" style="height:60px;font-size:24px;line-height:60px;"  placeholder="">
</div>
		</div>
</div>
<!---->
<div class="col-sm-12" style="margin-bottom:20px">
		<div class="col-sm-3" style="font-size:24px;line-height:60px">收款姓名：</div><div class="col-sm-9">	
			<div class="mui-input-cell"> 
<input type="text" id="payname" class="form-control" value="<?php  echo $shop_db['payname'];?>" style="height:60px;font-size:24px;line-height:60px;"  placeholder="">
</div>
		</div>
</div>

      </div> 

	   <div class="form-group col-sm-12" style="clear:left"  >
       
        <div class="col-sm-12">
          <button id="subbtn" class="btn btn-primary btn-lg"  onClick="add()" style="width:100%;height:60px;font-size:24px;clear:left" >保存</button>
<br>
		  <div style="color:#e70000;font-size:22px"><div style="height:20px"></div></div>

        </div>
      </div>
	  </div>

</div>

<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>

<script>


function add(){

$.post("<?php  echo $postlink;?>", {
			
	
			shopname:$("#shopname").val(),
			payid:$("#payid").val(),
			payname:$("#payname").val()
		

		},function (data) {

var obj = JSON.parse(data);
if(obj['res']==1){

alertf('保存成功')}

        
       })


	}


</script>

