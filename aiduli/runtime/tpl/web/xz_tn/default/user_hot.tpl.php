<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" id="WebViewport" content="width=750px,initial-scale=1,target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=1,user-scalable=no" />  

<meta name="apple-mobile-web-app-capable" content="yes">  
<meta name="apple-mobile-web-app-status-bar-style" content="black">  
<meta name="format-detection" content="telephone=no">  
<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/com.js"></script>
<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
<title>账号配置资料</title>
<!-- write your code here -->
	<style>
  #animation_container {
	position:absolute;
	margin:auto;
	left:0;right:0;
  }
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
	document.getElementById('WebViewport').setAttribute('content', 'width=750px,initial-scale=' + screen.width / 750 + ',target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=1,user-scalable=no');
}

</script>


<!-- write your code here -->
</head>
<body onload="" style="text-align:center">
<div style="width:750px;height:auto;margin:0 auto;line-height:0px">

<img src="/addons/xz_bq_dyl/wxapp_img/uu_01.jpg"/>
<a href="/addons/xz_bq_dyl/wxapp_img/u1.jpg" download />
<img src="/addons/xz_bq_dyl/wxapp_img/uu_02.jpg"/>
</a>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_03.jpg"/>
<div style="text-align:center;width:750px;height:150px; background:url(/addons/xz_bq_dyl/wxapp_img/uu_04.jpg)">
	<div style="height:20px;width:100%	"></div>
	<div style="margin:0 auto;width:80%;height:auto;text-align:left;font-size:28px;line-height:42px" id="txt1">
	首页搜索「<?php  echo $config_db['title'];?>」小程序，进入小程序输入<?php  echo $shop_db['kw'];?>点击查询，即可获取表情包/壁纸</div>

</div>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_05.jpg" onClick="copyfun($('#txt1').html())"/>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_06.jpg"/>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_07.jpg"/>
<div style="text-align:center;width:750px;height:150px; background:url(/addons/xz_bq_dyl/wxapp_img/uu_04.jpg)">
	<div style="height:20px;width:100%	"></div>
	<div style="margin:0 auto;width:80%;height:auto;text-align:left;font-size:28px;line-height:42px" id="txt2">
	首页搜索“<?php  echo $config_db['title'];?>”进入小程序，输入【<?php  echo $shop_db['kw'];?>】点击查询，即可免费获取</div>

</div>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_05.jpg" onClick="copyfun($('#txt2').html())"/>

<img src="/addons/xz_bq_dyl/wxapp_img/uu_09.jpg"/>
<div style="text-align:center;width:750px;height:150px; background:url(/addons/xz_bq_dyl/wxapp_img/uu_04.jpg)">
	<div style="height:20px;width:100%	"></div>
	<div style="margin:0 auto;width:80%;height:auto;text-align:left;font-size:28px;line-height:42px" id="txt3">
	首页搜索【<?php  echo $config_db['title'];?>】，注意是XX小程序，进入输入【<?php  echo $shop_db['kw'];?>】，即可下载</div>

</div>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_05.jpg" onClick="copyfun($('#txt3').html())"/>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_11.jpg"/>
<div style="text-align:center;width:750px;height:150px; background:url(/addons/xz_bq_dyl/wxapp_img/uu_04.jpg)">
	<div style="height:20px;width:100%	"></div>
	<div style="margin:0 auto;width:80%;height:auto;text-align:left;font-size:28px;line-height:42px" id="txt4">
	首页搜索{<?php  echo $config_db['title'];?>}小程序，输入<?php  echo $shop_db['kw'];?>，查询，即可免费获取原图。</div>

</div>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_05.jpg" onClick="copyfun($('#txt4').html())"/>
<img src="/addons/xz_bq_dyl/wxapp_img/uu_13.jpg"/>

</div>
<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
<script>
function handleCopy(text) {
  const input = document.createElement('input')
  input.style.cssText = 'opacity: 0;';
  input.type = 'text';
  input.value = text; // 修改文本框的内容
  document.body.appendChild(input)
  input.select(); // 选中文本
  document.execCommand("copy"); // 执行浏览器复制命令
  alert('复制成功')
}
function copyfun(txt){
	handleCopy(txt)

}
</script>
</html>