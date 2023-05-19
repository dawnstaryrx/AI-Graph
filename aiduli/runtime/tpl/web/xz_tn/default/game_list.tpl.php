<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>


<ul class="nav nav-tabs">
  <li class="active">

<div class="btn-group">
	<button type="button" class="btn btn-default" data-toggle="dropdown">全部点图答题</button>
	<button type="button" class="btn btn-default dropdown-toggle" 
			data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">切换下拉菜单</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a href="<?php  echo $this->createWebUrl('find')?>/classname/找不同">切换找不同</a></li>
		<li><a href="<?php  echo $this->createWebUrl('find')?>/classname/看图找卧底">切换看图找卧底</a></li>
		<li><a href="<?php  echo $this->createWebUrl('find')?>/classname/汉字找茬">切换汉字找茬</a></li>
	</ul>
</div>

  </li>
  <li style="background-color:#ececec;border-radius:10px 10px 0 0 ">
	
	<div class="btn-group">
	<button type="button" class="btn btn-default" data-toggle="dropdown">○ 添加点图答题</button>
	<button type="button" class="btn btn-default dropdown-toggle" 
			data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">切换下拉菜单</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li><a href="<?php  echo $this->createWebUrl('Addfindgame')?>&classname=找不同">添加找不同</a></li>
		<li><a href="<?php  echo $this->createWebUrl('Addfindgame')?>&classname=看图找卧底">添加看图找卧底</a></li>
		<li><a href="<?php  echo $this->createWebUrl('Addfindgame')?>&classname=汉字找茬">添加汉字找茬</a></li>
	</ul>
</div>

  </li>
</ul>

<div class="panel panel-default" style="margin-top: 30px;">
	<div class="panel-heading">
		<h2 class="panel-title">
			<?php  echo $_GPC['classname'];?>管理
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>选择</th>
			<th>id</th>
            <th>标题</th>
			<th>图片</th>
			<th>类型</th>
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
			<td><?php  echo $itme['title'];?></td>
			<td><img src="<?php  echo $root_path;?><?php  echo $itme['imgpath'];?>" style="width:100px; height:auto"  onerror="$(this).css('display','none')"></td>
<td><?php  echo $itme['type'];?></td>
			<th><input data-toggle="tooltip" data-placement="top"  value="<?php  echo $itme['pos'];?>" style="width:40px" id="pos<?php  echo $itme['id'];?>"></input><button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="setapi(<?php  echo $itme['id'];?>,'pos')">确认</button></th>
		    
			
			<td >   <select id="hid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hid')">
  <option value ="0" <?php  if($itme['hid']!=1) { ?>selected<?php  } ?>>显示</option>
  <option value ="1" <?php  if($itme['hid']==1) { ?>selected<?php  } ?>>隐藏</option>

</select></td>

<th> <button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="edit(<?php  echo $itme['id'];?>)">编辑</button> <button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="setans(<?php  echo $itme['id'];?>)">答案</button></th>

		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx;float:left" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="del()">批量删除</button>


<input type="text" id="pagenum" class="form-control" value="" placeholder="每页显示多少条" style=";width:200px;float:left">

<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;float:left" onClick="setpagenum()">更改</button>






	<?php  echo $pager;?>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script>
	require(['../../../addons/xz_tn/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])
	


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


$.post("<?php  echo $this->createWebUrl('setapi_gamelist')?>", {

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
		
		$.post("<?php  echo $this->createWebUrl('setapi_gamelist')?>", {
		
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



function select_all(){
	
    var cks =document.getElementsByName("del");
 //实现点击全选按钮，小按钮的状态跟着全选按钮变化
 
    for (var i = 0; i < cks.length; i++) {
      cks[i].checked=true;
    }


}


function edit(idd){
	
window.location.href="<?php  echo $this->createWebUrl('Addfindgame')?>"+"&idd="+idd;

}

function setpagenum(){
	window.location.href=window.location.href+'&pagenum='+$('#pagenum').val();
	;

}
//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)
function setans(idd){
window.location.href="<?php  echo $this->createWebUrl('Gameanslist')?>"+"&gameidd="+idd;


}


</script>
