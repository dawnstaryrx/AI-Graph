<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="<?php  echo $backlink;?>&type=<?php  echo $_GPC['type']?>" style="font-size:20px;">返回</a></li>


</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">



	    <div class="form-group" style="height:30px">
        <label for="firstname" class="col-sm-2 control-label">类别</label>

        <div class="col-sm-10">
<div class="mui-input-cell"> 

<select id="classid">

  <option value ="">全部</option>

<?php  if(is_array($classlist)) { foreach($classlist as $index => $itme) { ?>
  <option value ="<?php  echo $itme['id'];?>"><?php  echo $itme['name'];?></option>
<?php  } } ?>

</select>

</div>
        </div>
      </div> 


 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">批量上传图片</label>

        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_multi_image('multi-image');?> </div>
        </div>
      </div> 
 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label" style="clear:left">会员ID</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="0">
		  存入某个博主的账号，填写会员的ID（会员管理页复制对应ID）。如果作为公共图片，写0
		</div>
      </div>

 <div class="form-group col-sm-12" style="height:20px" >

   
      </div> 


	   <div class="form-group" style="margin-top:30px" >
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



	function del(idd){
		
 if(window.confirm('你确定？')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('wxapp')?>", {
			
			type:'del',
			id:idd

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

alertf('删除成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('wxapp')?>" })

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

var imgpath=''
 $("input[name='multi-image[]']").each(function(){
            imgpath+=$(this).val()+'|';
})

if(imgpath==''&&!$("#attid").val()){

alertf('没有选择任何图片','提醒')
	return;
}

if($("#classid").val()==0){
	alertf('请选择分类','提醒')
	return;

}

$.post("<?php  echo $this->createWebUrl('addpic')?>", {
			
			type:'add',
			classid:$("#classid").val(),
			attid:$("#attid").val(),
			shopid:$("#name").val(),
			ptype:getQueryVariable('type'),
			imgpath: imgpath

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功,返回列表查看，或继续添加','提醒',function(){location.reload() })
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


