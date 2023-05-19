<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $config_link;?>" style="font-size:20px;;border-radius:100px;">外链管理</a></li>
  <li class="active" style="text-align:center;font-size:20px;background-color:#e7e7e7;border-radius:100px;"> </li>
</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">小程序名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>


<div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">简单说明（一句话）</label>
        <div class="col-sm-10">
          <input type="text" id="about" class="form-control" value="<?php  echo $config_db['about'];?>">
        </div>
      </div>


	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">appid</label>
        <div class="col-sm-10">
          <input type="text" id="appid" class="form-control" value="<?php  echo $config_db['appid'];?>">
        </div>
      </div>
	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">路径（为空跳首页）</label>
        <div class="col-sm-10">
          <input type="text" id="mainpage" class="form-control" value="<?php  echo $config_db['mainpage'];?>">
        </div>
      </div>

	  <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>


  <label for="firstname" class="col-sm-2 control-label">位置</label>
        <div class="col-sm-10">
     
<select id="index"  data-toggle="tooltip" data-placement="top" >


  <option value ="0" <?php  if($config_db['index']==0) { ?>selected<?php  } ?>>不推荐</option>
 <option value ="1" <?php  if($config_db['index']==1) { ?>selected<?php  } ?>>重点推荐</option>
  <option value ="2" <?php  if($config_db['index']==2) { ?>selected<?php  } ?>>图标推荐</option>
</select>
        </div>
      </div>


 <div class="form-group" name='填充' >
        <label for="firstname" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">

        </div>
      </div>

	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">应用icon</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('imgpath',$imgpath,$imgpath_view)?> </div>
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
            <th>引流</th>
			<th>编辑</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			<td><?php  echo $itme['name'];?></td>
			<td><?php  echo $itme['pos'];?></td>
			<td><?php  echo $itme['click'];?></td>
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
$.post("<?php  echo $this->createWebUrl('link')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('link')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('link')?>", {
			
			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			appid: $('#appid').val(),
			about: $('#about').val(),
			index: $('#index').val(),

			mainpage: $('#mainpage').val(),
			pos: $('#pos').val(),
			imgpath: $('input[name="imgpath"]').val(),

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){
	window.location.href="<?php  echo $this->createWebUrl('link')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('link')?>"+"&type=edit&id="+idd	

	}
	
</script>


