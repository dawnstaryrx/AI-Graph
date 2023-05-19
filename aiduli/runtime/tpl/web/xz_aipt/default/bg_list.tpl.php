<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
  <li><a href="<?php  echo $config_link;?>">配置中心</a></li>

<li ><a href="<?php  echo $class_link;?>">分类管理</a></li>
<li  class="active"><a href="<?php  echo $aiimg_link;?>">AI图片</a></li>
<li ><a href="<?php  echo $baidu_link;?>">百度接口</a></li>
<li ><a href="<?php  echo $huoshan_link;?>">火山接口</a></li>
<li ><a href="<?php  echo $card_link;?>">外链管理</a></li>
<li ><a href="<?php  echo $swiper_link;?>">轮播管理</a></li>
<li ><a href="<?php  echo $tab_link;?>">导航管理</a></li>
<li ><a href="<?php  echo $user_link;?>">用户管理</a></li>

</ul>

<div class="panel panel-default" style="margin-top: 30px;">
	<div class="panel-heading">
		<h2 class="panel-title">
			管理
		</h2>
	</div>
	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>选择</th>
			<th>id</th>
			<th>图片</th>
			<th>分类</th>
			<th>制图</th>
            <th>首页推荐</th>
			
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
			<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
			<td><?php  echo $itme['id'];?></td>

			<td><img src="<?php  echo $root_path;?><?php  echo $itme['imgpath'];?>" style="width:100px; height:auto"></td>
            <td><?php  echo $itme['name'];?></td>
			<td><?php  if($itme['userid']==0) { ?>平台<?php  } else { ?><?php  echo $itme['userid'];?><?php  } ?></td>
			<td ><select id="hid<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'hid')">
  <option value ="0" <?php  if($itme['hid']!=1) { ?>selected<?php  } ?>>显示</option>
  <option value ="1" <?php  if($itme['hid']==1) { ?>selected<?php  } ?>>隐藏</option>

</select></td>



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
	require(['../../../addons/xz_aipt/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])

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



function select_all(){
	
    var cks =document.getElementsByName("del");
 //实现点击全选按钮，小按钮的状态跟着全选按钮变化
 
    for (var i = 0; i < cks.length; i++) {
      cks[i].checked=true;
    }


}


function edit(idd){
	
window.location.href="<?php  echo $this->createWebUrl('addpic')?>"+"&idd="+idd;

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
