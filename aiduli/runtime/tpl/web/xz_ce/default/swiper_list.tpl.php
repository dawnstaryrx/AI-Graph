<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $config_link;?>" style="font-size:20px;border-radius:100px;">轮播管理</a></li>
<li class="active"  style="text-align:center;font-size:20px;background-color:#e7e7e7;border-radius:100px;"> </li>
</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">轮播图名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>


<div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
     
	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">跳转链接</label>
        <div class="col-sm-10">
          <input type="text" id="path" class="form-control" value="<?php  echo $config_db['path'];?>">
        
		模式1：企业资质支持业务域名和推文链接，链接需要带https<br>
		模式2：支持跳转测试（输入测试ID号即可，测试ID去测试列表查看）
		<br><br>
		</div>
      </div>

	  <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>


	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">轮播图</label>

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
            <th>链接</th>
			<th>编辑</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			
			<td><?php  echo $itme['name'];?></td>
			<td><?php  echo $itme['pos'];?></td>
			<td><?php  echo $itme['path'];?></td>
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
$.post("<?php  echo $this->createWebUrl('swiper')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('swiper')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('swiper')?>", {
			
			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			path: $('#path').val(),
			pos: $('#pos').val(),
			imgpath: $('input[name="imgpath"]').val(),

		},function (data) {
		
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('swiper')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('swiper')?>"+"&type=edit&id="+idd	

	}
	
</script>


