<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>


<ul class="nav nav-tabs">
  <li  style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $this->createWebUrl('ask')?>">返回</a></li>
  <li class="active"><a href="<?php  echo $this->createWebUrl('addfindgame')?>">添加<?php  if($_GPC['classname']) { ?><?php  echo $_GPC['classname'];?><?php  } else { ?>点图问答<?php  } ?></a></li>

</ul>

<div class="panel panel-default" style='margin-top:20px'>

  <div class="panel-body"> 
    <!--内容-->
    
    <form role="form" >

      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">





<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">标题</label>
        <div class="col-sm-10">
          <input type="text" id="title" class="form-control" value="<?php  echo $config_db['title'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">介绍</label>
        <div class="col-sm-10">
          <input type="text" id="about" class="form-control" value="<?php  echo $config_db['about'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">答案提示</label>
        <div class="col-sm-10">
          <input type="text" id="tips" class="form-control" value="<?php  echo $config_db['tips'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">正确答案</label>
        <div class="col-sm-10">
          <input type="text" id="ans" class="form-control" value="<?php  echo $config_db['ans'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">关卡图片</label>
        <div class="col-sm-10">
          <div class="mui-input-cell"> <?php  echo tpl_form_field_image('imgpath',$imgpath,$imgpath_view)?> </div>
		</div>
      </div>

	

 <div class="form-group" style="text-align: center">

        <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="submitform()">提交表单</button> 

      </div>



	  </form>
	 </div>
	 </div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>



<script>
	require(['../../../addons/xz_tn/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])


	function submitform(){





	//alert($('input[name="wxpic"]').val())
//判断字段填写
		            
         var form_arr=[]
		 
		 var emptyvalue=false;
         for(var x in form_arr){
		    if(!form_arr[x].val()){
				emptyvalue=true;
			}
		 }

		if(emptyvalue){
			window.alertf('必填字段不能为空。');
			return;	
		}

var db_var=["title","about","ans","idd","tips"]
var db_img=["imgpath"]

var db_obj={}
for(var i=0;i<db_var.length;i++){	
db_obj[db_var[i]]=$("#"+db_var[i]).val()
}
for(var i=0;i<db_img.length;i++){	
db_obj[db_img[i]]=$('input[name="'+db_img[i]+'"]').val()
}




		$.post("<?php  echo $this->createWebUrl('Addgame_ask')?>&type=save&classname=<?php  echo $_GPC['classname'];?>", db_obj,
				function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('ask')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				});
		
		
	}
	
	

</script>


