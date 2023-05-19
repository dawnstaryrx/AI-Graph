<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<ul class="nav nav-tabs">
<li><a href="<?php  echo $config_link;?>">配置中心</a></li>
<li><a href="<?php  echo $class_link;?>">分类管理</a></li>
<li ><a href="<?php  echo $aiimg_link;?>">AI图片</a></li>
<li class="active"><a href="<?php  echo $baidu_link;?>">百度接口</a></li>
<li ><a href="<?php  echo $huoshan_link;?>">火山接口</a></li>
<li ><a href="<?php  echo $card_link;?>">外链管理</a></li>
<li ><a href="<?php  echo $swiper_link;?>">轮播管理</a></li>
<li ><a href="<?php  echo $tab_link;?>">导航管理</a></li>
<li ><a href="<?php  echo $user_link;?>">用户管理</a></li>

</ul>

	<div class="panel-body" style="margin-top:20px">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
      <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">接口名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
        </div>
      </div>

 <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">KEY</label>
        <div class="col-sm-10">
          <input type="text" id="key" class="form-control" value="<?php  echo $config_db['key'];?>">
        </div>
      </div>


	   <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">密钥</label>
        <div class="col-sm-10">
          <input type="text" id="pw" class="form-control" value="<?php  echo $config_db['pw'];?>">
        </div>
      </div>

 <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">每日限量</label>
        <div class="col-sm-10">
          <input type="text" id="minnum" class="form-control" value="<?php  echo $config_db['minnum'];?>">
        </div>
      </div>


	  <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">总额度</label>
        <div class="col-sm-10">
          <input type="text" id="maxnum" class="form-control" value="<?php  echo $config_db['maxnum'];?>">
        </div>
      </div>



	  <div class="form-group" style="height:30px;display:none">
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
         <th>今日使用/每日</th>
		 <th>累计使用/总量</th>
			<th>排序</th>
		
			<th>隐藏</th>
		</tr>
	</thead>
	<tbody>
		<?php  if(is_array($applist)) { foreach($applist as $index => $itme) { ?>
		<tr>
			<td><?php  echo $itme['id'];?></td>
			<td><?php  echo $itme['name'];?></td>
			<td><?php  echo $itme['todayuse'];?>/<?php  echo $itme['minnum'];?></td>

			<td><?php  echo $itme['totaluse'];?>/<?php  echo $itme['maxnum'];?></td>
			
			<td><?php  echo $itme['pos'];?></td>
	
			<td>  <select id="my<?php  echo $itme['id'];?>" data-toggle="tooltip" data-placement="top"  onchange="my(<?php  echo $itme['id'];?>,'my')">
  <option value ="0" <?php  if($itme['my']!=1) { ?>selected<?php  } ?>>启用</option>
  <option value ="1" <?php  if($itme['my']==1) { ?>selected<?php  } ?>>关闭</option>

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
	require(['../../../addons/xz_aipt/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])

function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('baidu')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('baidu')?>"+'&ptype='+GetQueryString('ptype') })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function add(){

$.post("<?php  echo $this->createWebUrl('baidu')?>", {

			type:'add',
			id: $('#idd').val(),
key: $('#key').val(),
pw: $('#pw').val(),
			name: $('#name').val(),
			minnum: $('#minnum').val(),
			maxnum: $('#maxnum').val(),
			pos: $('#pos').val(),
			pid:GetQueryString('ptype'),
			 imgpath:$('input[name="s_pic"]').val(),
			

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('baidu')?>"+'&ptype='+GetQueryString('ptype') })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('baidu')?>"+"&type=edit&id="+idd+'&ptype='+GetQueryString('ptype')

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
	

	
	$.post("<?php  echo $this->createWebUrl('mybaidu')?>", {

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


