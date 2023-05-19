<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

<div style="height:40px;margin-left:15px;color:#d72400">
	
<br>

</div>
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">导航名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>
<div style="margin-bottom:20px;clear:left"></div>
	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">appid(支持导航跳小程序)</label>
        <div class="col-sm-10">
          <input type="text" id="appid" class="form-control" value="<?php  echo $config_db['appid'];?>">
        </div>
      </div>
<div style="margin-bottom:20px;clear:left"></div>
	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">路径</label>
        <div class="col-sm-10">
          <input type="text" id="path" class="form-control" value="<?php  echo $config_db['path'];?>">
      
		要跳转推文链接必须带https，小程序链接根据说明文档填写。 
		<br><br>
		</div>
      </div>

	  <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>

<div style="margin-bottom:20px;clear:left"></div>

	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图标（未点击）</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('icon',$icon,$icon_view)?> </div>
        </div>
      </div>

	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图标（已点击）</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('picon',$picon,$picon_view)?> </div>
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
			外链列表
		</h2>
	</div>

		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>编号</th>
			<th>名称</th>
            <th>排序</th>
          
			<th>编辑</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			
			<td><?php  echo $itme['name'];?></td>
			<td><?php  echo $itme['pos'];?></td>
		
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
	require(['../../../addons/xz_ty/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])


	function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('tab')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('tab')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('tab')?>", {
			
			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			appid: $('#appid').val(),
			pos: $('#pos').val(),
			path: $('#path').val(),
			icon: $('input[name="icon"]').val(),
			picon: $('input[name="picon"]').val(),

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('tab')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('tab')?>"+"&type=edit&id="+idd	

	}
	
</script>


