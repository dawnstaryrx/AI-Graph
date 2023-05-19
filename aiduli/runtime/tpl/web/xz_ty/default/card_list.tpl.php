<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">福利名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>
<div style="margin-bottom:15px;clear:left"></div>
	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">appid</label>
        <div class="col-sm-10">
          <input type="text" id="appid" class="form-control" value="<?php  echo $config_db['appid'];?>">
        </div>
      </div><div style="margin-bottom:15px;clear:left"></div>

	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">小程序路径</label>
        <div class="col-sm-10">
          <input type="text" id="mainpage" class="form-control" value="<?php  echo $config_db['mainpage'];?>">
        </div>
      </div>

<div style="margin-bottom:15px;clear:left"></div>

   <div class="form-group">
	  <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>

<div style="margin-bottom:15px;clear:left"></div>

	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">推广图片</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('imgpath',$imgpath,$imgpath_view)?> </div>
        </div>
      </div>
<div style="margin-bottom:15px;clear:left"></div>

	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">操作</label>
        <div class="col-sm-10">
          <button  class="btn btn-primary btn-lg"  onClick="add()">提交</button>
        </div>
      </div>
	  </div>

</div>


</div>
	<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>编号</th>
			<th>名称</th>
            <th>排序</th>
            <th>图片</th>
			<th>编辑</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			<td><?php  echo $itme['name'];?></td>
			<td><?php  echo $itme['pos'];?></td>
		<td><img src="<?php  echo $picpath_root;?><?php  echo $itme['imgpath'];?>" style="width:100px; height:auto"></td>
			<td>
			<button  class="btn btn-primary"  onClick="edit(<?php  echo $itme['id'];?>)">编辑</button>
			<button  class="btn btn-danger" onClick="del(<?php  echo $itme['id'];?>)">删除</button>
			
			</td>
		</tr>
		<?php  } } ?>
	</tbody>
</table>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>


<script>
	require(['../../../addons/xz_ty/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])


	function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('card')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('card')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('card')?>", {
			
			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			appid: $('#appid').val(),
			about: $('#about').val(),

			mainpage: $('#mainpage').val(),
			pos: $('#pos').val(),
			imgpath: $('input[name="imgpath"]').val(),

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('card')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('card')?>"+"&type=edit&id="+idd	

	}
	
</script>




