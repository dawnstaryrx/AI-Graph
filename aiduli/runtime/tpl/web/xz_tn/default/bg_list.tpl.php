<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>



<ul class="nav nav-tabs">

  <li class="active"><a href="">测试列表</a></li>
  <li style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $addlink;?>&ptype=<?php  echo $ptype;?>">○ 添加测试</a></li>
</ul>


<div class="panel panel-default" style="margin-top: 30px;">
	<div class="panel-heading">
		<h2 class="panel-title">
			测试管理
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>选择</th>
			<th>口令</th>
			<th>图片</th>
			<th>首页图片</th>
			<th>名称</th>
			<th>排序</th>
            <th>隐藏</th>
			
			<th>操作</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
			<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
			<td><?php  echo $itme['id'];?></td>
			<td><img src="<?php  echo $picpath_root;?><?php  echo $itme['imgpath'];?>" style="width:100px; height:auto"></td>
			<td><img src="<?php  echo $picpath_root;?><?php  echo $itme['index_imgpath'];?>" style="width:100px; height:auto"></td>
			
			<td><?php  echo $itme['title'];?></td>
<td><?php  echo $itme['pos'];?></td>


	<td >   <select id="hid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hid')">
  <option value ="0" <?php  if($itme['hid']!=1) { ?>selected<?php  } ?>>显示</option>
  <option value ="1" <?php  if($itme['hid']==1) { ?>selected<?php  } ?>>隐藏</option>

</select></td>


<td><button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="ask(<?php  echo $itme['id'];?>)">问题管理</button> <button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="ans(<?php  echo $itme['id'];?>)">答案管理</button> <button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="editfun(<?php  echo $itme['id'];?>)">编辑</button></td>

		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx;float:left" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="del()">批量删除</button>



	<?php  echo $pager;?>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script>
	require(['../../../addons/xz_tn/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])
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


$.post("<?php  echo $this->createWebUrl('setapi_ceshi')?>", {

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
		
		$.post("<?php  echo $this->createWebUrl('setapi_ceshi')?>", {
		
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
	window.location.href=window.location.href+'&classid='+$('#jumpclass').val();
	;

}


function setpagenum(){
	window.location.href=window.location.href+'&pagenum='+$('#pagenum').val();
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


function editfun(ee){
		
	
		window.location.href="<?php  echo $addlink;?>&id="+ee; 

	}

	function ask(ee){
			window.location.href="<?php  echo $this->createWebUrl('Ask_list')?>&listid="+ee; 

	}

		function ans(ee){
			window.location.href="<?php  echo $this->createWebUrl('ans_list')?>&listid="+ee; 

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
