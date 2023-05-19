<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="btn-group">
    <a href="<?php  echo $this->createWebUrl('pay')?>"><button type="button" class="btn btn-default btn-lg active" style="border-radius:10px 10px 0 0">抖音收益管理</button ></a>
    <a href="<?php  echo $this->createWebUrl('pay_wx')?>"><button type="button" class="btn btn-primary btn-lg" style="border-radius:10px 10px 0 0">微信收益管理</button></a>
    <a href="<?php  echo $this->createWebUrl('pay_ks')?>"><button type="button" class="btn btn-primary btn-lg" style="border-radius:10px 10px 0 0">快手收益管理</button></a>
</div>
<div style="height:3px;background-color:#1562af"></div>

<div class="panel panel-default" style="">

	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
	<tr>
		<th style="width:33%">
		抖音收益excel： <br>
 <input type="file" id="inputfile" name=""  style="float:left">

<button id="addbutton" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="addexcel()">导入</button>
		</th>
		<th style="width:33%">
	
		</th>
		<th style="width:34%">
	
		</th>
		</tr>

		<tr>
			<th style="width:33%">
		抖音收益（格式：2022/02/02）： <br>

 <input type="text" id="time"  placeholder="粘贴日期" style="width:185px">
  <input type="text" id="money"  placeholder="粘贴金额" style="width:128px">

<button id="addbutton" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="addpay()">录入</button>
		</th>

		<th style="width:33%">
	
		</th>

		<th style="width:34%">
		
		</th>

			
	</tr>



	</thead>
</table>
	<table class="table table-hover">
<thead>
		<tr>
			<th style="width:50px">选择</th>
			<th>时间</th>
			<th>抖音收益</th>
	

<th>百分比</th>
<th>收益明细</th>
		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?>

		<tr >
			
<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
<td><?php  echo $itme['time'];?></td>
<td><?php  echo $itme['money'];?>元 (分佣:<?php  echo $itme['pmoney'];?>元)</td>


<td><?php  echo $itme['bfb'];?></td>
<th>
<button id="showbtn" type="button" class="btn btn-primary  btn-lg" style="margin-top:-7px;margin-left:10px" onClick="showdetail(<?php  echo $itme['o_time'];?>,<?php  echo $itme['id'];?>)">明细</button>
</th>
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
	
$.post("<?php  echo $this->createWebUrl('editshop')?>", {

			type: 'show',
			id: id
			
		},function (data) {
			
var obj = JSON.parse(data);
if(obj['res']==1){
$('#id').val(obj['db']['id']);
$('#shopname').val(obj['db']['shopname']);
$('#name').val(obj['db']['name']);
$('#pw').val('不修改');
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


function show(id){
		

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



function pay(id){
		

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

function addpay(){

if(!$('#time').val()){
	
	alert('内容不能为空')
	return
}

if(!$('#money').val()){
	
	alert('内容不能为空')
	return
}

		$.post("<?php  echo $postlink;?>"+'&pt=addpay', {

					time:$('#time').val(),
                    money:$('#money').val(),
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						
 if(obj['res']==1){
					
					alert('生成完成');
location.reload();
				 }
		               //  alertf('操作成功','提醒',function(){location.reload(); })

			})
}
function addexcel(){



	 var data = new FormData();
        //为FormData对象添加数据
        $.each($('#inputfile')[0].files, function(i, file) {
			
            data.append('upload_file'+i, file);
        });
 



 $.ajax({
            url:"<?php  echo $postlink;?>"+'&pt=addexcel', /*去过那个php文件*/
            type:'POST',  /*提交方式*/
            data:data,
            cache: false,
            contentType: false,        /*不可缺*/
            processData: false,         /*不可缺*/
            success:function(data){   
				 var obj = JSON.parse(data);
				 if(obj['res']==1){
					
					alert('生成完成');
location.reload();
				 }
            },
            error:function(){
                alert('上传出错');
            }
        });

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

function showdetail(ee,idd){
	window.location.href="<?php  echo $this->createWebUrl('detail')?>&o_time="+ee+"&shopid="+idd

}

 var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth() + 1;
    var d = date.getDate() - 1;
    if (d == "0") {
        m = m - 1;
        var temp = new Date(y, m, d);
        d = temp.getDate();
    }
    var Yesterday = [y, m, d];
    Yesterday = Yesterday.join("/");

$('#time').val(Yesterday)
</script>
