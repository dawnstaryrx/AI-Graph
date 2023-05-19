<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $backlink;?>" style="font-size:20px;">分类管理</a></li>
  <li class="active" style="text-align:center;font-size:20px;background-color:#e7e7e7"> </li>

</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">分类名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>


	  <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>



	   


	    <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">缩略图(250宽度最佳)</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('s_pic',$s_pic,'')?> </div>
        </div>
      </div>


	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">操作</label>
        <div class="col-sm-10">
          <button  class="btn btn-primary"  onClick="add()">提交</button>
        </div>
      </div>
	  </div>

</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2 class="panel-title">
			分类列表
		</h2>
	</div>

		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>编号</th>
			<th>名称</th>
         
			<th>排序</th>
		
			<th>隐藏</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			
			<td><?php  echo $itme['name'];?></td>
			
			<td><?php  echo $itme['pos'];?></td>
	
			<td>  <select id="my<?php  echo $itme['id'];?>" data-toggle="tooltip" data-placement="top"  onchange="my(<?php  echo $itme['id'];?>,'my')">
  <option value ="0" <?php  if($itme['my']!=1) { ?>selected<?php  } ?>>显示</option>
  <option value ="1" <?php  if($itme['my']==1) { ?>selected<?php  } ?>>隐藏</option>

</select></td>
			<td>
			<button  class="btn btn-primary"  onClick="edit(<?php  echo $itme['id'];?>)">编辑</button>
			<button  class="btn btn-danger" onClick="del(<?php  echo $itme['id'];?>)">删除</button>
		
			</td>
		</tr>
		<?php  } } ?>
	</tbody>
</table>
	
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>



<script>
	require(['../../../addons/xz_ce/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])


	function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('class')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('class')?>"+'&ptype='+GetQueryString('ptype') })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('class')?>", {

			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			pos: $('#pos').val(),
			pid:GetQueryString('ptype'),
			 imgpath:$('input[name="s_pic"]').val(),
			

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('class')?>"+'&ptype='+GetQueryString('ptype') })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('class')?>"+"&type=edit&id="+idd+'&ptype='+GetQueryString('ptype')

	}
	

function GetQueryString(name) {
var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
var r = window.location.search.substr(1).match(reg);
if (r != null) {
return unescape(r[2]);
}
return null;
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



function auto(idd){
window.location.href="<?php  echo $this->createWebUrl('auto')?>"+"&classid="+idd+"&ptype="+"<?php  echo $_GPC['ptype']?>"
}

function vip(idd){
	

	
	$.post("<?php  echo $this->createWebUrl('vip')?>", {

			classid:idd,
			vip:$('#vip'+idd).val()

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

 showPopover($("#vip"+idd),"操作成功")

				 }else{
				   window.alertf(obj['res'])
				 }
				

	})

}


function my(idd,str){
	

	
	$.post("<?php  echo $this->createWebUrl('my')?>", {

			classid:idd,
			my:$('#my'+idd).val()

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

 showPopover($("#my"+idd),"操作成功")

				 }else{
				   window.alertf(obj['res'])
				 }
				

	})

}
</script>


