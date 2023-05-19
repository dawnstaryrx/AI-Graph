<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<link  href="/addons/xz_tn/css/cropper.css" rel="stylesheet">

<ul class="nav nav-tabs">
  <li  style="background-color:#ececec;border-radius:10px 10px 0 0 "><a href="<?php  echo $this->createWebUrl('Gameanslist')?>&gameidd=<?php  echo $_GPC['gameidd']?>">返回答案列表</a></li>
  <li class="active"><a href="#">添加</a></li>

</ul>

<div class="panel panel-default" style='margin-top:20px'>
<iframe id="iframe-one" name="iframe-one" src="<?php  echo $this->createWebUrl('setpos')?>&gameidd=<?php  echo $_GPC['gameidd']?>" width="80%" height="90%" scrolling="no"
            frameborder="0" style="display:none;position:fixed;z-index:1000;height:80%"></iframe>
<div id="iframe-two" style="display:none;position:fixed;z-index:100;width:100%;height:100%;background-color:#ffffff"></div>


  <div class="panel-body"> 
    <!--内容-->
 

    <form role="form" >

      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">名称</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="<?php  echo $config_db['name'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">坐标X</label>
        <div class="col-sm-10">
          <input type="text" id="posx" class="form-control" value="<?php  echo $config_db['posx'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">坐标Y</label>
        <div class="col-sm-10">
          <input type="text" id="posy" class="form-control" value="<?php  echo $config_db['posy'];?>">
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">宽度</label>
        <div class="col-sm-10">
          <div class="mui-input-cell">  <input type="text" id="posw" class="form-control" value="<?php  echo $config_db['posw'];?>"> </div>
		</div>
      </div>

	 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">高度</label>
        <div class="col-sm-10">
          <div class="mui-input-cell">  <input type="text" id="posh" class="form-control" value="<?php  echo $config_db['posh'];?>"></div>
		</div>
      </div>

 <div class="form-group" style="text-align: center">

<button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="showpos()">获取坐标</button> 

        <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="submitform()">提交表单</button> 

      </div>



	  </form>
	 </div>
	 </div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>



<script>

require(['../../../addons/xz_tn/js/cropper.js?r=<?php  echo mt_rand(1000,1000000)?>'])

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

var db_var=["posx","posy","posw","posh","gameid","name"]
var db_img=[]

var db_obj={}
for(var i=0;i<db_var.length;i++){	
db_obj[db_var[i]]=$("#"+db_var[i]).val()
}
for(var i=0;i<db_img.length;i++){	
db_obj[db_img[i]]=$('input[name="'+db_img[i]+'"]').val()
}




		$.post("<?php  echo $this->createWebUrl('Addgameans')?>&type=save&idd=<?php  echo $_GPC['idd']?>&gameidd=<?php  echo $_GPC['gameidd']?>", db_obj,
				function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('Gameanslist')?>&gameidd=<?php  echo $_GPC['gameidd']?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				});
		
		
	}
	
	function setposnum(aa,bb,cc,dd){

$("#iframe-one").css('display','none');
$("#iframe-two").css('display','none');

		$("#posx").val(aa);
		$("#posy").val(bb);
		$("#posw").val(cc);
		$("#posh").val(dd);

		$("#iframe-one").attr('src',"")
	}
	function showpos(){


var xx=$("#posx").val()
var yy=$("#posy").val()
var ww=$("#posw").val()
var hh=$("#posh").val()

if(!xx){
	
	xx=0
	yy=0
	ww=0
	hh=0
}

$("#iframe-one").attr('src',"<?php  echo $this->createWebUrl('setpos')?>&gameidd=<?php  echo $_GPC['gameidd']?>&xx="+xx+"&yy="+yy+"&ww="+ww+"&hh="+hh)
$("#iframe-one").css('display','block');
$("#iframe-two").css('display','block');

	}
	function closepos(){
		
$("#iframe-one").css('display','none');
$("#iframe-two").css('display','none');
$("#iframe-one").attr('src',"")
	}

</script>


