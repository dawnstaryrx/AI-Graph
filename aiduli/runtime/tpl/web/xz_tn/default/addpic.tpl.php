<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>


<ul class="nav nav-tabs">
<li  style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $this->createWebUrl('list')?>">返回</a></li>
  <li class="active"><a href="">添加测试</a></li>
</ul>


<div class="panel panel-default">

	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $_GPC['id']?>">





 <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">状态</label>

        <div class="col-sm-10">
<div class="mui-input-cell"> 

<select id="status">


  <option value ="0" <?php  if($config_db['status']==0) { ?>selected<?php  } ?>>最新</option>
  <option value ="1" <?php  if($config_db['status']==1) { ?>selected<?php  } ?>>热门</option>
  <option value ="2" <?php  if($config_db['status']==2) { ?>selected<?php  } ?>>搞笑</option>
  <option value ="3" <?php  if($config_db['status']==3) { ?>selected<?php  } ?>>最热</option>

</select>

</div>
        </div>
      </div> 

   <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">标题</label>
        <div class="col-sm-10">
          <input type="text" id="title" class="form-control" value="<?php  echo $config_db['title'];?>">
        </div>
      </div>

   <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">关键词</label>
        <div class="col-sm-10">
          <input type="text" id="kw" class="form-control" value="<?php  echo $config_db['kw'];?>">
        </div>
      </div>


   <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">简介</label>
        <div class="col-sm-10">
          <input type="text" id="about" class="form-control" value="<?php  echo $config_db['about'];?>">
        </div>
      </div>

   <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">内容</label>
        <div class="col-sm-10">
          <input type="text" id="content" class="form-control" value="<?php  echo $config_db['content'];?>">
        </div>
      </div>


	     <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">排序</label>
        <div class="col-sm-10">
          <input type="text" id="pos" class="form-control" value="<?php  echo $config_db['pos'];?>">
        </div>
      </div>

	  	     <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">访问量</label>
        <div class="col-sm-10">
          <input type="text" id="num" class="form-control" value="<?php  echo $config_db['num'];?>">
        </div>
      </div>

 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">图片</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('s_pic',$s_pic,$s_pic_view)?> </div>
        </div>
      </div> 

 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">首页图片</label>

        <div class="col-sm-10">
             <div class="mui-input-cell"> <?php  echo tpl_form_field_image('sb_pic',$sb_pic,$sb_pic_view)?> </div>
	
        </div>

	
      </div> 



     

	   <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">操作</label>
        <div class="col-sm-10">
          <button  class="btn btn-primary"  onClick="add()">提交</button>
        </div>
      </div>
	  </div>

</div>


</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>



<script>
	require(['../../../addons/xz_tn/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])


	function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('list')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('list')?>" })

				 }else{
				   window.alertf(obj['res'])
				 }
	
	})
return;

	}





	function add(){


if($("#classid").val()==''){
	
	alertf('请先添加分类','提醒')
	return;

}

$.post("<?php  echo $this->createWebUrl('addpic')?>", {
			
			type:'add',
			id:$("#idd").val(),
			classid:1,
		title:$("#title").val(),
			kw:$("#kw").val(),
			pos:$("#pos").val(),
content:$("#content").val(),
status:$("#status").val(),
num:$("#num").val(),
about:$("#about").val(),
imgpath:$('input[name="s_pic"]').val(),
index_imgpath:$('input[name="sb_pic"]').val()
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){location.reload() })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('wxapp')?>"+"&type=edit&id="+idd	

	}
	

	function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
</script>


