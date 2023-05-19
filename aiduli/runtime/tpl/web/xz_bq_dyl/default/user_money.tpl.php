<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
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
<link href="../../../addons/xz_bq_dyl/css/style.css" rel='stylesheet' type='text/css' />
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/com.js"></script>

<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.monthpicker_user.js"></script>

<link rel="stylesheet" type="text/css" href="../../../addons/xz_bq_dyl/template/libs/jquery.monthpicker.css">


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
<body>

<div style="text-align:center;margin-left:2%;margin-top:20px"><img src="../../../../addons/xz_bq_dyl/images/location.png" class="img-responsive" alt=""  /></div>

<button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-405px;background-color:#1430da;display:<?php  if($shop_db['moneymode']==1) { ?>block<?php  } else { ?>none<?php  } ?>;" onClick="getmoney()">申请提现</button>

<a href="<?php  echo $outlink;?>" style="display:<?php  if($shop_db['moneymode']==1) { ?>block<?php  } else { ?>none<?php  } ?>;"><button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-300px;">提现记录</button></a>
<a href="<?php  echo $backlink;?>"><button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-150px">返回列表</button></a>
</div>



<div class="btn-group" style="margin:20px;width:96%;margin-left:2%">
   <?php  if($showdy=="1") { ?>
	<a href="<?php  echo $dymoney_link;?>"><button type="button" class="btn btn-default btn-lg active">抖音收益</button></a><?php  } ?>
	 <?php  if($showwx=="1") { ?>
    <a href="<?php  echo $wxmoney_link;?>"><button type="button" class="btn btn-primary btn-lg">微信收益</button></a><?php  } ?>
	 <?php  if($showks=="1") { ?>
    <a href="<?php  echo $ksmoney_link;?>"><button type="button" class="btn btn-primary btn-lg">快手收益</button></a><?php  } ?>
</div>

<div class="panel panel-default"   style="margin-top:-20px;width:96%;margin-left:2%">
	<div class="panel-heading">
		<h2 class="panel-title">
			<div style="margin:20px;width:100%">



 <input type="text" id="monthly"  placeholder="选择月份" style="height:40px;border-radius:20px;text-align:center">


<button id="showbtn" type="button" class="btn btn-primary  btn-lg" style="margin-top:-7px;margin-left:10px" onClick="showbtn()">查看</button>

<div style="float:right;margin-right:20px;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:-10px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $money?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">抖音总收益</div></div>

<div style="display:<?php  if($shop_db['moneymode']==1) { ?>block<?php  } else { ?>none<?php  } ?>;float:right;margin-right:10px;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:-10px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $less?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">抖音可提现</div></div>


<div style="display:<?php  if($shop_db['moneymode']==1) { ?>block<?php  } else { ?>none<?php  } ?>;float:right;margin-right:10px;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:-10px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $outmoney?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">抖音已提现</div></div>

</div>
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	<thead>
		<tr>
			<th>日期</th>
			<th>广告PV</th>
			<th>ecpm(1000次广告PV的预期收益)</th>
			<th>单价(观看一次广告价格)</th>
		<th>个人</th>
<th>团队</th>
			<th>总收益</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
		
			<td><?php  echo $itme['time'];?></td>
			<td><?php  echo $itme['count'];?></td>
			<td><?php  echo $itme['ecpm'];?>元</td>
			<td><?php  echo $itme['per'];?>元</td>
			<td><?php  echo $itme['backupmoney'];?>元</td>
			<td><?php  echo $itme['childmoney'];?>元</td>
			<td><?php  echo $itme['money'];?>元</td>

		</tr>
		<?php  } } ?>
	</tbody>
</table>

	</div>
</div>
<div style="width:100%;height:80px;line-height:80px;text-align:center"><?php  echo $btnname?></div>
<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>

<script>
var starttime_obj="<?php  echo $_GPC['start_time']?>";
if(starttime_obj==""){
	
var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
   // month = month > 9 ? month : "0" + month;
    var nowMonth = year + "-" + month;

let start = new Date( year + "/" + month + "/01" ).getTime()/1000
//结束时间 时间戳
if( month == 12 ){
	 //十二月的时候进位，这里直接用加减法算了  
	 //也可以用 time.setMonth( month + 1 )去计算并获取结束时间的月份和年份
	month = 0;
	year += 1;
}
let end = new Date( year + "/" + ( month + 1 )  + "/01").getTime()/1000-86400


window.location.href="<?php  echo $this->createWebUrl('user')?>&pt=user_money&start_time="+start+"&end_time="+end;

};


function getmoney(){

alertf('是否申请提现','提醒',function(){
	
$.post("<?php  echo $this->createWebUrl('user')?>", {
		
		            pt:'user_newout'
	
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						  	 if(obj['res']==2){
		
		            alertf('不足提现金额，最低限额'+obj['num']+'元','提醒',function(){location.reload(); })
		
						 }

						 	 if(obj['res']==3){
		
		            alertf('尚有未完成的提现申请，结清后可继续提现','提醒',function(){ location.reload();})
		
						 }
						
		
			})


})


	
		
}







function showbtn(){
if(timeArr.length!=2){
	
	alertf('请先选择月份')
	return;

}


window.location.href="<?php  echo $this->createWebUrl('user')?>&pt=user_money&start_time="+timeArr[0]+"&end_time="+timeArr[1];

}
var timeArr=[];
$(function(){
	$('#monthly').monthpicker({
        years: [new Date().getFullYear(),2022, 2023, 2024, 2025, 2026,2027, 2028, 2029, 2030, 2031],
        topOffset: 6
    });
	$('#monthly').monthpicker({
		 years: [new Date().getFullYear(),2022, 2023, 2024, 2025, 2026,2027, 2028, 2029, 2030, 2031],
        topOffset: 6,
        onMonthSelect: function(m, y) {

        console.log(y+'/'+(m+1));

let time = new Date(y+'/'+(m+2)+'/01');//当前月 要计算其他时间点自己传入即可
let year = time.getFullYear();
let month = parseInt( time.getMonth());



//开始时间 时间戳
let start = new Date( year + "/" + month + "/01" ).getTime()
//结束时间 时间戳
if( month == 12 ){
	 //十二月的时候进位，这里直接用加减法算了  
	 //也可以用 time.setMonth( month + 1 )去计算并获取结束时间的月份和年份
	month = 0;
	year += 1;
}
let end = new Date( year + "/" + ( month + 1 )  + "/01").getTime()


timeArr=[start/1000,end/1000-86400]
console.log(timeArr);


        }
	})

for (var i = 0; i < $("#monthly option").length; i++) {
                   alert(1)
                }

});

	function setpos(id){
		

$.post("<?php  echo $this->createWebUrl('setpos')?>", {

			pos: $('#input'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('flash')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}


	function hid(id){
		$("#show"+id).css('display','none')
	$("#hid"+id).css('display','none')	

$.post("<?php  echo $this->createWebUrl('visible')?>", {

			type:'hid',
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒')
				 }else{
				   window.alertf(obj['res'])
				 }

	})
return;

	}

	function show(id){
			$("#show"+id).css('display','none')
	$("#hid"+id).css('display','none')

$.post("<?php  echo $this->createWebUrl('visible')?>", {

			type:'show',
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

alertf('操作成功','提醒')
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



function showPopover(target, msg) {
	
    target.attr("data-original-title", msg);
    $('[data-toggle="tooltip"]').tooltip();
    target.tooltip('show');
    target.focus();

    //2秒后消失提示框
    var id = setTimeout(
        function () {
            target.attr("data-original-title", "");
            target.tooltip('hide');
        }, 2000
    );
}








</script>
