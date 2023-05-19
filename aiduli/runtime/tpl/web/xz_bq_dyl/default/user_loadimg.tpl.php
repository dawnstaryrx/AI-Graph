<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>创作者中心</title>
<meta name="viewport" id="WebViewport" content="width=750px,initial-scale=1,target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=5,user-scalable=no" />  
<meta name="apple-mobile-web-app-capable" content="yes">  
<meta name="apple-mobile-web-app-status-bar-style" content="black">  
<meta name="format-detection" content="telephone=no">  
    <!-- 新 Bootstrap4 核心 CSS 文件 -->
	<link href="./resource/css/bootstrap.min.css?v=202201190002" rel="stylesheet">
<link href="../../../addons/xz_bq_dyl/css/style.css" rel='stylesheet' type='text/css' />

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/jquery.cookie.min.js"></script>
	<script type="text/javascript" src="../../../addons/xz_bq_dyl/template/libs/com.js"></script>

	<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->

    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
	<script type="text/javascript" src="./resource/js/lib/bootstrap.min.js"></script>
 	<style>

  @viewport  
{  
    zoom: 1.0;  
    width: 750px;  
}  
@-ms-viewport  
{  
    width: 750px;  
    zoom: 1.0;  
}
</style>
<script>
	
var bfb
if (screen.width < 750) {
	document.getElementById('WebViewport').setAttribute('content', 'width=750px,initial-scale=' + screen.width / 750 + ',target-densitydpi=device-dpi,minimum-scale=0.3,maximum-scale=5');
}

</script>  <style>
	
	.file {
            position: relative;
            background: rgb(244,255,251);
            border: 1px solid #00D6A3;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #00D6A3;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
            margin-left: 20px;
            cursor: pointer;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }
        .file:hover {
            background:  #00D6A3;
            border-color:  #00D6A3;
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }

   </style>
</head>
<body>


<div style="text-align:center;margin-left:2%;margin-top:20px"><img src="../../../../addons/xz_bq_dyl/images/location.png" class="img-responsive" alt=""  /></div>

<a href="<?php  echo $backlink;?>"><button  type="button" class="btn btn-primary btn-lg" style="position:absolute;top:50px;left:100%;margin-left:-150px">返回列表</button></a>

</div>

<div class="panel panel-default"  style="margin:20px;width:96%;margin-left:2%">

	<div class="panel-body" style="border-radius:50px">

    <div role="form" style="border-radius:50px">
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

	    <div class="form-group" style="height:30px">

        <div class="col-sm-12">
<div class="mui-input-cell"> 

<select id="classid"  class="form-control" style="height:60px;font-size:24px;line-height:60px">

  <option value =""><?php  echo $select_name?></option>

<?php  if(is_array($classlist)) { foreach($classlist as $index => $itme) { ?>
  <option value ="<?php  echo $itme['id'];?>"><?php  echo $itme['name'];?></option>
<?php  } } ?>

</select>

</div>
        </div>

      </div> 

 <div class="form-group" style="height:10px;margin-top:10px">
 </div>
    <div class="form-group" style="height:30px;margin-top:30px">


     

<div class="col-sm-12">
<div class="mui-input-cell"> 

<input type="text" id="path" class="form-control" value="" style="height:60px;font-size:24px;line-height:60px;"  placeholder="粘贴公众号推文连接，采集推文内图片">

<select onChange="showmode(this.value)" id="mode"  class="form-control" style="height:60px;font-size:24px;line-height:60px;display:none">

<option value ="">选择模式</option>
<option value ="1">仅图片</option>
<option value ="2">仅视频</option>
<option value ="3">视频+图片</option>
</select>
</div>
        </div>
      </div> 



<div class="form-group" style="display:none" id="inputA">
<div style="height:50px"></div>
        <div class="col-sm-12">
<div class="mui-input-cell" style="font-size:22px"> 

  <div style="float:left"> 选择图片：</div>
  
  
  <div style="margin-bottom:20px;float:left">
      <span style="float:left;display:inline-block;position:relative;margin-top:-10px;width:200px; height:52px; border:1px solid #ccc;border-radius:4px;text-align:center;line-height:52px;background-image:-moz-linear-gradient(top,#fff,#EAEAEA);background-image:-webkit-gradient(linear,left top,left bottom, color-stop(0,#fff),color-stop(1,#EAEAEA)); ">
          点击上传图片
          <input style="height:52px;position:absolute;z-index:1;left:0px;width:200px;top:0;opacity:0;filter:alpha(opacity=0);cursor:pointer;" type="file" class="upload_file1" id="inputfile" name="p1" size="1" onChange="document.getElementById('imgtxt').innerHTML='已选择 √'">
      </span>
    <span style="float:left; margin-left:10px" id="imgtxt" > (支持jpg、gif、小于5M)</span>
  </div>
 
 </div>
       </div>
      </div> 
<div style="height:40px"></div>

<div class="form-group" style="display:none" id="inputB" >
<div style="height:30px"></div>
        <div class="col-sm-12">
<div class="mui-input-cell" style="font-size:22px"> 

  <div style="float:left">上传视频：</div>
  
  <div style="margin-bottom:20px;float:left">
  <span style="float:left;display:inline-block;position:relative;margin-top:-10px;width:200px; height:52px; border:1px solid #ccc;border-radius:4px;text-align:center;line-height:52px;background-image:-moz-linear-gradient(top,#fff,#EAEAEA);background-image:-webkit-gradient(linear,left top,left bottom, color-stop(0,#fff),color-stop(1,#EAEAEA)); ">
          点击上传视频
          <input style="height:52px;position:absolute;z-index:1;left:0px;width:200px;top:0;opacity:0;filter:alpha(opacity=0);cursor:pointer;" type="file" class="upload_file1" id="video_inputfile" name="p1" size="1" onChange="document.getElementById('imgtxtb').innerHTML='已选择 √'">
      </span>
    <div style="float:left; margin-left:10px" id="imgtxtb"> (支持MP4、小于<?php  echo $paytext?>M)</div>
  </div>
  
 
 </div>
        </div>
      </div> 

<div id="txt" style="width:100%;text-align:center;font-size:22px"></div>
<div style="height:60px;width:100%"  class="col-sm-12"></div>


	   <div class="form-group col-sm-12" style="clear:left"  >
       
        <div class="col-sm-12">
          <button id="subbtn" class="btn btn-primary btn-lg"  onClick="add()" style="width:100%;height:60px;font-size:24px;clear:left">开始采集</button>
<br>
		  <div style="color:#e70000;font-size:22px"><div style="height:20px"></div> </div>

        </div>
      </div>
	  </div>

</div>

</div>
<div style="width:100%;height:80px;line-height:80px;text-align:center"><?php  echo $btnname?></div>
<script>$(function(){$('img').attr('onerror', '').on('error', function(){if (!$(this).data('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('') == -1 ? this.src.replace('', '') : this.src.replace('', '');$(this).data('check-src', true);}});});</script></body>
</html>

<script>

var posturl="<?php  echo $this->createWebUrl('auto')?>"
posturl=posturl.replace('user', 'auto')


var appid='<?php  echo $apptoke['0']?>';

	function add(){

if(!$('#classid').val()){
	 alertf('选择分类');
	return;
}

if(!$('#path').val()){
	 alertf('输入采集的推文链接');
	return;
}


pathauto()

	}


function showmode(mode){

	switch(mode){
		
		case '1':
	
$('#inputA').css('display','block')
$('#inputB').css('display','none')
		break;
		case '2':


<?php  if($paymode==1) { ?>

$('#inputA').css('display','block')
$('#inputB').css('display','block')

$('#imgtxt').html(' (请上传视频的静态缩略图)')

<?php  } else { ?>

alertf('系统不支持视频功能，请联系管理员')

<?php  } ?>


		break;
		case '3':

<?php  if($paymode==1) { ?>

$('#inputA').css('display','block')
$('#inputB').css('display','block')
$('#imgtxt').html(' (支持jpg、gif、小于5M)')

<?php  } else { ?>

alertf('系统不支持视频功能，请联系管理员')

<?php  } ?>

		break;
	}

}






function pathauto(){

alertf('请耐心等待数据获取，确定采集吗','提醒',function(){
	

$.post(posturl, {

			path:$('#path').val(),
			fw_tw:1,
			save:0,
			name:<?php  echo $this->getuid()?>,
			type:'getpath_list'
	
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){




if(obj['num']>(parseInt(<?php  echo $config_db['maxnum'];?>)-parseInt(<?php  echo $todaylist_num;?>))){
	
alertf('采集数量超过每日限量，限量：<?php  echo $config_db['maxnum'];?>','提醒');
exit;

}


alertf('共检索到'+obj['num']+'条数据，是否开始采集','提醒',function(){
        //继续执行
$('#myModal').modal('hide');


num=0;////当前采集书店
getimg()

function getimg(){

var tempnum=(num+1);
if(num+1>obj['num']){
	
tempnum=obj['num']
}




$('#txt').text('采集进度:'+tempnum+'/'+obj['num']+' （ ← 刷新页面自动中断）')


$.post(posturl, {
			
			type:'add',
			kw:' ',
	        opath:1,
			classid:$("#classid").val(),
			ptype:'<?php  echo $_GPC["type"]?>',
			save:0,
			name:<?php  echo $this->getuid()?>,
			imgpath:obj['list'][num]

		},function (data) {
			
				 var sobj = JSON.parse(data);
				 	 if(sobj['res']==1){

num++

if(num<=parseInt(obj['num'])){
	
getimg()
}else{
	
	alertf('采集完成，可以去列表查看采集成果')

}

				 }else{
				   window.alertf(obj['res'])
				 }

	})

}

    })



				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
})

	
return;

	}




</script>

