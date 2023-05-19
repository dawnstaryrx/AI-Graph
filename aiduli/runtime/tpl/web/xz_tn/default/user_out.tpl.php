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
<link href="../../../addons/xz_tn/css/style.css" rel='stylesheet' type='text/css' />
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_tn/template/libs/com.js"></script>

		<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.monthpicker.js"></script>

<link rel="stylesheet" type="text/css" href="../../../addons/xz_tn/template/libs/jquery.monthpicker.css">


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

<div style="text-align:center;margin-left:2%;margin-top:20px"><div style="text-align:left;height:120px">
	
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





<a href="<?php  echo $backlink;?>"><button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-140px">返回列表</button></a>

</div>

<div class="panel panel-default"   style="margin:20px;width:96%;margin-left:2%">
	<div class="panel-heading">
		<h2 class="panel-title">
			<div style="margin:20px;width:100%">


</div>
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	<thead>
		<tr>
			<th>提现时间</th>
			<th>平台</th>
			<th>提现金额</th>
			<th>状态</th>
			
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
		
			<td><?php  echo $itme['time'];?></td>
		<td><?php  if($itme['type']==0) { ?>抖音<?php  } else if($itme['type']==1) { ?>微信<?php  } else { ?>快手<?php  } ?></td>
			<td><?php  echo $itme['money'];?>元</td>
			<td><?php  if($itme['state']==0) { ?>待支付<?php  } else { ?>已结算<?php  } ?></td>
		

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


function showbtn(){
if(timeArr.length!=2){
	
	alert('请先选择月份')
	return;

}


window.location.href="<?php  echo $this->createWebUrl('user')?>/pt/user_money/start_time/"+timeArr[0]+"/end_time/"+timeArr[1];

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

function setapi(idd,type){


$.post("<?php  echo $this->createWebUrl('setapi')?>", {

            type:type,
			val:$("#"+type+idd).val(),
			id: idd
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

            showPopover($("#"+type+idd),"操作成功")

				 }
				

	})


return;


	

}

function del(){
	
	if(window.confirm('确认删除吗？')){
	                 //alert("确定");
					 
					 
					 delfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function delfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'del',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}
	
	
	
}



function setdesign(){
	
	if(window.confirm('确认设置为定制吗？')){
	                 //alert("确定");
					 
					 
					 designfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function designfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'design',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}
	
	
	
}

function select_all(){
	
    var cks =document.getElementsByName("del");
 //实现点击全选按钮，小按钮的状态跟着全选按钮变化
 
    for (var i = 0; i < cks.length; i++) {
      cks[i].checked=true;
    }


}
function jumpclassid(){
	window.location.href=window.location.href+'/classid/'+$('#jumpclass').val();
	;

}


function setpagenum(){
	window.location.href=window.location.href+'/pagenum/'+$('#pagenum').val();
	;

}
//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)
function clearkw(){
	
	if(window.confirm('确认清除已选择表情关键词？')){
	                 //alert("确定");
					 
					 
					 designfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function designfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'clearkw',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}
	
	
	
}



function addkw(){
	
	if(window.confirm('确认批量添加关键词？')){
	                 //alert("确定");
					 
					 
					 designfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function designfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'addkw',
					kw:$('#kw').val(),
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}
	
	
	
}
function setclassid(){
	
	//alert($('#myclassid').val())
		
	if(window.confirm('确认批量更改分类')){
	                 //alert("确定");
					 
					 
					 classfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }

				 function classfun(){
		
		
		    var classid = $('#myclassid').val(); 
		 var str = ''; 
		 var obj=document.getElementsByName('del');
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'myclassid',
					list:str,
					classid:classid
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}


}


function addhome(){
	

	//alert($('#myclassid').val())
		
	if(window.confirm('确定设为首页')){
	                 //alert("确定");
					 
					 
					 indexfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }

				 function indexfun(){
		
		
		  
		 var str = ''; 
		 var obj=document.getElementsByName('del');
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'addindex',
					list:str,
				
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}

}



function removehome(){
	

	//alert($('#myclassid').val())
		
	if(window.confirm('是否批量取消首页')){
	                 //alert("确定");
					 
					 
					 removeindexfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }

				 function removeindexfun(){
		
		
		  
		 var str = ''; 
		 var obj=document.getElementsByName('del');
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'removeindex',
					list:str,
				
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}

}

function getmoney(){
		if(window.confirm('是否申请提现')){ 
		$.post("<?php  echo $this->createWebUrl('getmoney')?>", {
		
		            type:'addindex'
	
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

		
		}else{
	                 //alert("取消");
	                 return false;
	             }

		
}

</script>
