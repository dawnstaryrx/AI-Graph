<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-pills nav-justified" style="width:100px;margin-bottom:10px">

<li class="active" ><a href="javascript:window.history.go(-1)">返回</a></li>
</ul>
<div class="panel panel-default" style="">

	<div class="panel-body">

		<table class="table table-hover"  id='adduser' style="display:none">
	
	<thead>
	<tr>
		<th style="width:50%">
		添加会员(下载量比例与结算比例为0，调用全局设置)： <br>

<input type="hidden" id="id" value="" placeholder="">
<input type="text" id="shopname" value="" placeholder="例如：xx表情包">
<input type="text" id="name" value="" placeholder="账号">
<input type="text" id="pw" value="" placeholder="密码">
<input type="text" id="kw" value="" placeholder="取图编码">

<input type="text" id="payid" value="" placeholder="支付宝账号">
<input type="text" id="payname" value="" placeholder="账号姓名">
<input type="text" id="showtime" value="" placeholder="标签：剪辑|配音|制作|起号">
<input type="text" id="about" value="" placeholder="简介">
<input type="text" id="pos" value="" placeholder="排序">
 <select id="payclass">
  <option value ="0" selected>不收徒 </option>
  <option value ="1" >收徒 </option>

</select>

		</th>
			
	</tr>
	<tr>
		<td >设定头像<div style="width:300px"><?php  echo tpl_form_field_image('headimgpath',$headimgpath,$headimgpath_view)?></div> </td>
</td>
	</tr>
	<tr>
		
		<td>
<div style="clear:left"><button id="addbutton" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:0px" onClick="adduser()">添加会员</button></div></td>

	</tr>
	</thead>
</table>
	<table class="table table-hover" id="listdiv">
<thead>
		<tr>
			
			<th>日期</th>
			<th>会员</th>
			<th>上级</th>
			<th>广告播放</th>
			<th>ecpm</th>
			<th>单价</th>
			<th>微信收益</th>
			<th>团队收益</th>
		     <th>总收益</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?>

		<tr >
			

<td><?php  echo $itme['time'];?></td>
<td><?php  echo $itme['shopname'];?></td>
<td><?php  if($itme['parentname']==0) { ?>平台<?php  } else { ?><?php  echo $itme['parentname'];?><?php  } ?></td>
<td><?php  echo $itme['count'];?></td>
<td><?php  echo $itme['ecpm'];?></td>
<td><?php  echo $itme['per'];?></td>
<td><?php  echo $itme['backupmoney'];?></td>
<td><?php  echo $itme['childmoney'];?></td>
<td><?php  echo $itme['money'];?></td>

		</tr>
		<?php  } } ?>
	</tbody>
</table>

	<?php  echo $pager;?>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script>
	
function edit(id){
	$('#adduser').css('display','block')

$.post("<?php  echo $this->createWebUrl('editshop')?>", {

			type: 'show',
			id: id
			
		},function (data) {
			
var obj = JSON.parse(data);
if(obj['res']==1){
$('#id').val(obj['db']['id']);
$('#shopname').val(obj['db']['shopname']);
$('#name').val(obj['db']['name']);
$('#kw').val(obj['db']['kw']);
$('#pw').val('不修改');

$('#pos').val(obj['db']['pos']);
$('#payid').val(obj['db']['payid']);
$('#payname').val(obj['db']['payname']);
$('#showtime').val(obj['db']['showtime']);
$('#about').val(obj['db']['about']);
$('input[name="headimgpath"]').val(obj['db']['headimgpath']);

$('#payclass').val(obj['db']['payclass']);


$('#addbutton').html('修改');

				 }else{
				  
				 }
				

	})
return;

}
	
	function lock(id){
		

$.post("<?php  echo $this->createWebUrl('setshoplock')?>", {

			lock: $('#lock'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#lock"+id),"操作成功")
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}


function showfun(id){

$.post("<?php  echo $this->createWebUrl('setshopshow')?>", {

			show: $('#show'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#show"+id),"操作成功")
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



function payfun(id){
		

$.post("<?php  echo $this->createWebUrl('setshoppay')?>", {

			pay: $('#pay'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#pay"+id),"操作成功")
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
		
		$.post("<?php  echo $this->createWebUrl('delshop')?>", {
		
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
	window.location.href="<?php  echo $this->createWebUrl('usercode')?>"+"&search="+$('#search').val();
	

}
var adding=false;
function adduser(){





if($('#id').val()){
$.post("<?php  echo $this->createWebUrl('editshop')?>", {
		
		            shopname:$('#shopname').val(),
					name:$('#name').val(),
					pw:$('#pw').val(),
					kw:$('#kw').val(),
payclass:$('#payclass').val(),
	payid:$('#payid').val(),
	pos:$('#pos').val(),
					payname:$('#payname').val(),
					showtime:$('#showtime').val(),
					about:$('#about').val(),
					headimgpath:$('input[name="headimgpath"]').val(),
					id:$('#id').val()

				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
	
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }else{
							 alertf('用户名或取图码重复','提醒',function(){location.reload();})

						 }
						
		
			})	


	return;
}


	if(adding){
		alert('请不要重复点击')
		return;

	}

if(!$('#name').val()||!$('#pw').val()){
	
alert('请填写完整');
exit;

}

	if(window.confirm('是否添加会员')){
	                 //alert("确定");
					 
					 adding=true;
					 addfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function addfun(){
		


		$.post("<?php  echo $this->createWebUrl('adduser')?>", {
		
		            shopname:$('#shopname').val(),
					name:$('#name').val(),
					pw:$('#pw').val(),
					kw:$('#kw').val(),
					payid:$('#payid').val(),
					pos:$('#pos').val(),
					payname:$('#payname').val(),
					showtime:$('#showtime').val(),
					payclass:$('#payclass').val(),
					about:$('#about').val(),
					headimgpath:$('input[name="headimgpath"]').val()
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		adding=false;
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }else{
							 alertf('用户名或取图码重复','提醒',function(){location.reload();})

						 }
						
		
			})
		
	}

}
//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)
function download(){
	if(!$('#search').val()){
		
		alert('填写内容')
		return;

	}
	 delfun();

	function delfun(){
		

		$.post("<?php  echo $this->createWebUrl('download_usercode')?>", {

					search:$('#search').val()
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 alert('复制链接下载：'+obj['res'])

		          //  alertf('操作成功','提醒',function(){location.reload(); })
		
						 
						
		
			})
		
	}

}
function showform(){
	
$('#adduser').css('display','block')

}
</script>
