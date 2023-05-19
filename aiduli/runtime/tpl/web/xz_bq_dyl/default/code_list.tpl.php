<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default" style="">

<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $config_link;?>" style="font-size:20px;border-radius:100px;">>> 返回系统配置</a></li>
<li class="active"  style="text-align:center;font-size:20px;background-color:#e7e7e7;border-radius:100px;">用户管理</li>
</ul>

	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
	<tr>
		<th>
		根据注册码搜索： <input type="text" id="search" value=""><button type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="search()">搜索</button>
		</th>
	</tr>
		<tr>
			<th>选择</th>
			<th>openid</th>
		
			<th>审核</th>
       
        
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?>

		<tr >
			
<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
<td><?php  echo $itme['openid'];?></td>

<td><select id="state<?php  echo $itme['id'];?>"  data-toggle="tooltip" data-placement="top" onchange="setapi(<?php  echo $itme['id'];?>,'state')">
  <option value ="0" <?php  if($itme['state']==0) { ?>selected<?php  } ?>>非会员</option>
  <option value ="1" <?php  if($itme['state']==1) { ?>selected<?php  } ?>>会员</option>


</select></td>
		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px" onClick="del()">批量删除</button>
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


$.post("<?php  echo $this->createWebUrl('setapiuser')?>", {

         
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
		
		$.post("<?php  echo $this->createWebUrl('setapi_user')?>", {
		
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


function pass(){
	
	if(window.confirm('确认全部审核吗？')){
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
		
		$.post("<?php  echo $this->createWebUrl('pass_user')?>", {
		
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
function jumpclassid(){
	window.location.href=window.location.href+'&classid='+$('#jumpclass').val();
	;

}
function search(){
	window.location.href="<?php  echo $this->createWebUrl('code')?>"+"&search="+$('#search').val();
	

}
//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)

</script>
