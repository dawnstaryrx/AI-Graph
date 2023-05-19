<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
<li  style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $this->createWebUrl('ask')?>">返回</a></li>
  <li class="active"><a href="<?php  echo $this->createWebUrl('Gameanslist')?>">选项列表</a></li>
  <li style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $this->createWebUrl('Addgameans_ask')?>&gameidd=<?php  echo $_GPC['gameidd']?>">○ 添加选项</a></li>

</ul>

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
            <th>选项</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?> 

		<tr >
			<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
			<td><?php  echo $itme['id'];?></td>

<td><?php  echo $itme['text'];?></td>

<th> <button type="button" class="btn btn-primary" style="margin:0 auto; margin-left:5px" onClick="edit(<?php  echo $itme['id'];?>)">编辑</button> </th>

		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx;float:left" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;;float:left" onClick="del()">批量删除</button>

<input type="text" id="pagenum" class="form-control" value="" placeholder="每页显示多少条" style=";width:200px;float:left" />

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
		
		$.post("<?php  echo $this->createWebUrl('setapi_gamelist_xx')?>", {
		
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
	
window.location.href="<?php  echo $this->createWebUrl('Addgameans_ask')?>"+"&idd="+idd+"&gameidd=<?php  echo $_GPC['gameidd']?>";

}

function setpagenum(){
	window.location.href=window.location.href+'&pagenum='+$('#pagenum').val();
	;

}


//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)



</script>
