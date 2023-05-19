<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $backlink;?>" style="font-size:20px;;border-radius:100px;">返回</a></li>
  <li class="active" style="text-align:center;font-size:20px;background-color:#e7e7e7;border-radius:100px;"> </li>

</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $config_db['id']?>">
      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">文字答案</label>
        <div class="col-sm-10">
          <input type="text" id="text" class="form-control" value="<?php  echo $config_db['text'];?>">
        </div>
      </div>

   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图片答案</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('imgpath',$imgpath,$imgpath_view)?></div>
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
			列表
		</h2>
	</div>

		<!--内容-->
		<table class="table table-hover">
	
	<thead>
		<tr>
			<th>编号</th>
			<th>文字答案</th>
			<th>图片答案</th>
          
			<th>编辑</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			<td><?php  echo $itme['text'];?></td>
			<td><?php  echo $itme['imgpath'];?></td>
	
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
$.post("<?php  echo $this->createWebUrl('ans')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){location.reload()})
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function add(){

$.post("<?php  echo $this->createWebUrl('ans')?>", {
			
			type:'add',
			id: $('#idd').val(),
			text: $('#text').val(),
			imgpath: $('input[name="imgpath"]').val(),
            listid:<?php  echo $_GPC['listid']?>,
	
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){
	

window.location.href="<?php  echo $this->createWebUrl('ans')?>"+"&type=edit&listid="+<?php  echo $_GPC['listid']?>	

})
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('ans')?>"+"&type=edit&id="+idd+"&listid="+<?php  echo $_GPC['listid']?>	

	}
	
</script>


