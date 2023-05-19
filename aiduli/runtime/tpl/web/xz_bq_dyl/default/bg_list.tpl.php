<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<a href="<?php  echo $backlink;?>"><button  type="button" class="btn btn-primary">返回</button></a>

<a href="<?php  echo $addlink;?>/type/<?php  echo $ptype;?>"><button  type="button" class="btn btn-primary"><?php  echo  $btnname?></button></a>

 筛选：

<select id="jumpclass"  data-toggle="tooltip" data-placement="top" onChange="jumpclassid()">
<option value ="0" >全部</option>
<?php  if(is_array($classlist)) { foreach($classlist as $index => $itmeb) { ?>
  <option value ="<?php  echo $itmeb['id'];?>" <?php  if($_GPC['classid']==$itmeb['id']) { ?>selected<?php  } ?>><?php  echo $itmeb['name'];?></option>
<?php  } } ?>
</select>

<a href="<?php  echo $uncheck;?>"><button  type="button" class="btn btn-primary">查看未人工审核图片</button></a>
<a href="javascript:checkall()"><button  type="button" class="btn btn-primary">全部确认审核</button></a>


<div class="panel panel-default" style="margin-top: 30px;">
	<div class="panel-heading">
		<h2 class="panel-title">
			表情管理
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->

		
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>选择</th>
			<th>id</th>
			<th>归属</th>
			<th>图片</th>
			<th>缩略图</th>
			<th>取图码</th>
			<th>排序</th>
            <th>首页</th>
           
            <th>隐藏</th>
			
			 <th>分类</th>
			 <th>查看</th>
			 <th>累计广告</th>
			 <th>今日广告</th>
			  <th>审查</th>
			  <th style="display:none">视频名</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
			<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
			<td><?php  echo $itme['id'];?></td>
			<td><?php  if($itme['shopid']==0) { ?>平台<?php  } else { ?><?php  echo $itme['shopname'];?><?php  } ?></td>
			<td><img src="<?php  echo $itme['imgpath'];?>" style="width:100px; height:auto"></td>
			<td>
			<?php  if($small==1) { ?><img src="<?php  echo $itme['simgpath'];?>" style="width:100px; height:auto"><?php  } else { ?>/<?php  } ?></td>

			<td><input data-toggle="tooltip" data-placement="top"  value="<?php  echo $itme['kw'];?>" style="width:140px" id="kw<?php  echo $itme['id'];?>"></input><button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="setapi(<?php  echo $itme['id'];?>,'kw')">确认</button></td>

			<th><input data-toggle="tooltip" data-placement="top"  value="<?php  echo $itme['pos'];?>" style="width:40px" id="pos<?php  echo $itme['id'];?>"></input><button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="setapi(<?php  echo $itme['id'];?>,'pos')">确认</button></th>
			<td>         <select id="hot<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hot')">
  <option value ="0" <?php  if($itme['hot']==0) { ?>selected<?php  } ?>>普通</option>
  <option value ="1" <?php  if($itme['hot']==1) { ?>selected<?php  } ?>>首页</option>

</select></td>
			
			<td >   <select id="hid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hid')">
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
<td><?php  echo $itme['click'];?></td>
<td><?php  echo $itme['nums'];?></td>
<td><?php  if($itme['t_nums']) { ?><?php  echo $itme['t_nums'];?><?php  } else { ?>0<?php  } ?></td>
<td><?php  if($itme['about']=='') { ?>未审查<?php  } else { ?><?php  echo $itme['about'];?><?php  } ?></td>
			<td  style="display:none"><input data-toggle="tooltip" data-placement="top"  value="<?php  echo $itme['about'];?>" style="width:50px" id="about<?php  echo $itme['id'];?>"></input><button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="setapi(<?php  echo $itme['id'];?>,'about')">确认</button></td>

		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx;float:left" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="del()">批量删除</button>


<button type="button" class="btn btn-primary" style="display:none;margin:30px auto;margin-top:0px;float:left" onClick="setdesign()">批量设为定制</button>



<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="clearkw()">批量清空取图码</button>

<input type="text" id="kw" class="form-control" value="" placeholder="这里输入取图码" style=";width:200px;float:left">

<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="addkw()">批量设定取图码</button>

<input type="text" id="pagenum" class="form-control" value="" placeholder="每页显示多少条" style=";width:200px;float:left">

<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="setpagenum()">更改</button>
<select id="myclassid"  data-toggle="tooltip" data-placement="top" style="margin-left:20rpx;float:left">
<?php  if(is_array($classlist)) { foreach($classlist as $index => $itmeb) { ?>
  <option value ="<?php  echo $itmeb['id'];?>" <?php  if($itmeb['id']==$itme['classid']) { ?>selected<?php  } ?>><?php  echo $itmeb['name'];?></option>
<?php  } } ?>
</select>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="setclassid()">更改</button>

<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="addhome()">批量设为首页</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="removehome()">批量取消首页</button>


	<?php  echo $pager;?>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script>
	
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
	
	if(window.confirm('确认清除已选择表情取图码？')){
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
	
	if(window.confirm('确认批量添加取图码？')){
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
function checkall(){
	

		if(window.confirm('是否将全部未审核图片设为已审核，请查阅完所有未审核图片后点击确认')){
	                 //alert("确定");
					 
					 	$.post("<?php  echo $this->createWebUrl('setapi')?>", {
		
		            type:'checklist',
					ptype:<?php  echo $_GPC['type']?>

				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){ window.location.href="<?php  echo $pagepath?>"+'/type/'+<?php  echo $_GPC['type']?> })
		
						 }
						
		
			})
					
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }


}
</script>
