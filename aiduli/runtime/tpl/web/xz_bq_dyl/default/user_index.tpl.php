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

<?php  if($userupload!=1) { ?>
<div class="dropdown"  style="position:absolute;top:50px;left:100%;margin-left:-443px" >
	<button type="button" class="btn btn-primary btn-lg" id="dropdownMenu1" 
			data-toggle="dropdown">
		+上传素材
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $addlink;?>/type/3" style="font-size:28px">表情</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $addlink;?>/type/4" style="font-size:28px">头像</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $addlink;?>/type/5" style="font-size:28px">壁纸</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $addlink;?>/type/6" style="font-size:28px">背景</a>
		</li>
	</ul>
</div>
<?php  } ?>


<div class="dropdown"  style="position:absolute;top:50px;left:100%;margin-left:-302px" >
	<button type="button" class="btn btn-primary btn-lg" id="dropdownMenu1" 
			data-toggle="dropdown">
		+采集素材
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $loadlink;?>/type/3" style="font-size:28px">表情</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $loadlink;?>/type/4" style="font-size:28px">头像</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $loadlink;?>/type/5" style="font-size:28px">壁纸</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $loadlink;?>/type/6" style="font-size:28px">背景</a>
		</li>
	</ul>
</div>




<div class="dropdown"  style="position:absolute;top:50px;left:100%;margin-left:-162px" >
	<button type="button" class="btn btn-primary btn-lg" id="dropdownMenu1" 
			data-toggle="dropdown">
		收益查询
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	<?php  if($showdy=="1") { ?>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $moneylink_dy;?>" style="font-size:28px">抖音收益</a>
		</li>
		<li role="presentation" class="divider"></li><?php  } ?>
			<?php  if($showwx=="1") { ?>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $moneylink_wx;?>" style="font-size:28px">微信收益</a>
		</li>
		<li role="presentation" class="divider"></li><?php  } ?>
				<?php  if($showks=="1") { ?>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="<?php  echo $moneylink_ks;?>" style="font-size:28px">快手收益</a>
		</li><?php  } ?>
		
	</ul>
</div>


<div style="margin:20px;width:96%;margin-left:2%">
<div style="text-align:center"><img src="../../../../addons/xz_bq_dyl/images/location.png" class="img-responsive" alt=""  /></div>

</div>
 
<div class="panel panel-default" style="margin-top: 30px; width:96%;margin-left:2%">
<div class="panel-heading" style="text-align:center;height:90px">
<div style="float:left;margin-left:10px;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:3px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $yesad?><font style="font-size:12px"> 次</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">昨日总广告</div></div>
<div style="float:left;margin-left:10px;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:3px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $nowad?><font style="font-size:12px"> 次</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">今日总广告</div></div>
<?php  if($showdy=="1") { ?>
<div style="float:left;margin-left:10px;;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:3px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $yesmoney?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">昨日抖音收益</div></div><?php  } ?>
<?php  if($showwx=="1") { ?>
<div style="float:left;margin-left:10px;;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:3px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $monmoney?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">昨日微信收益</div></div><?php  } ?>
<?php  if($showks=="1") { ?>
<div style="float:left;margin-left:10px;;width:120px;background-color:#fff;border-radius:10px;height:60px;margin-top:3px"><div style=";width:120px;text-align:center;font-size:24px;height:35px;line-height:30px;overflow:hidden;"><?php  echo $tolmoney?><font style="font-size:12px"> 元</font></div><div style="with:100%;height:1px;background-color:#ebecf1"></div><div style=";width:120px;text-align:center;font-size:12px;line-height:22px">昨日快手收益</div></div><?php  } ?>

	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>选择</th>
			<th>id</th>
			
			<th>缩略图</th>
			<th>视频</th>
		
            <th style="display:none">隐藏</th>
		
			 <th>分类</th>
			  <th>有效广告</th>
			  <th>今日</th>
<th>添加视频</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
			<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
			<td><?php  echo $itme['id'];?></td>
			
						<td><img src="<?php  echo $path;?><?php  echo $itme['simgpath'];?>" style="width:100px; height:auto"></td>

			<td>
			<?php  if($itme['videopath']!='') { ?><button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="javascript:window.location.href='<?php  echo $path;?><?php  echo $itme['videopath'];?>'">播放</button><?php  } else { ?>/<?php  } ?></td>
			

			<td style="display:none" >   <select id="hid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hid')">
  <option value ="0" <?php  if($itme['hid']!=1) { ?>selected<?php  } ?>>显示</option>
  <option value ="1" <?php  if($itme['hid']==1) { ?>selected<?php  } ?>>隐藏</option>

</select></td>

<td>
<select id="classid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onChange="setapi(<?php  echo $itme['id'];?>,'classid')">
<?php  if(is_array($classlist)) { foreach($classlist as $index => $itmeb) { ?>
  <option value ="<?php  echo $itmeb['id'];?>" <?php  if($itmeb['id']==$itme['classid']) { ?>selected<?php  } ?>><?php  echo $itmeb['name'];?></option>
<?php  } } ?>
</select>
</td>
<td><?php  echo $itme['nums'];?></td>
<td><?php  if($itme['t_nums']) { ?><?php  echo $itme['t_nums'];?><?php  } else { ?>0<?php  } ?></td>

<td><button onClick="window.location.href='<?php  echo $this->createWebUrl('user')?>/pt/user_addvideo/imgid/<?php  echo $itme['id'];?>'">上传视频</button></td>
		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx;float:left" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="del()">批量删除</button>

<input type="text" id="pagenum" class="form-control" value="" placeholder="每页显示多少条" style=";width:200px;float:left">

<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="setpagenum()">更改</button>

<div style="float:left;margin-left:10px;margin-top:-22px"><?php  echo $pager;?></div>
	
	</div>
</div>
<div style="width:100%;height:80px;line-height:80px;text-align:center"><?php  echo $btnname?></div>
<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>

<script>


function addvideo(idd){
	

}
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


$.post("<?php  echo $this->createWebUrl('user')?>", {

            pt:type,
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
	
alertf('确认删除吗？','提醒',function(){
	
 delfun();

})


	
	function delfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('user')?>", {
		
		            pt:'del',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){
						window.location.href='<?php  echo $this->createWebUrl('user')?>/pt/user_index/r=123'
						
						})
		
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
</script>
