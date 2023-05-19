<?php defined('IN_IA') or exit('Access Denied');?> <?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?> 



<ul class="nav nav-tabs">

<li class="active"><a href="<?php  echo $config_link;?>">配置中心</a></li>
<li ><a href="<?php  echo $tab_link;?>">导航管理</a></li>
<li ><a href="<?php  echo $wxapp_link;?>">外链管理</a></li>
<li ><a href="<?php  echo $swiper_link;?>">轮播管理</a></li>

 
</ul>

<div class="panel panel-default" style='margin-top:20px'>
  
  <div class="panel-body"> 
    <!--内容-->
     <form role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

<div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">提现限额</label>
        <div class="col-sm-10">
          <input type="text" id="limit" class="form-control" value="<?php  echo $config_db['limit'];?>">
		</div>
      </div>



     <div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">免会员价格</label>
        <div class="col-sm-10">
                 <input type="text" id="money" class="form-control" value="<?php  if($config_db['money']=='') { ?>9.9|29.9|99.9<?php  } else { ?><?php  echo $config_db['money'];?><?php  } ?>">
        第一个是日卡，第二个是月卡，第三个是年卡
        </div>
      </div>


 <div class="form-group"  style="display:none" >
	////////////////////////////////////////////////////////////////////////////////////

 </div>


  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">小程序标题</label>
        <div class="col-sm-10">
          <input type="text" id="title" class="form-control" value="<?php  echo $config_db['title'];?>">
        </div>
      </div>
    
	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">小程序博主入口</label>
        <div class="col-sm-10">
          <input type="text" id="btnurl" class="form-control" value="<?php  echo $config_db['btnurl'];?>">个人小程序填写引导关注的推文链接，公众号二级菜单放入口链接。企业小程序需要添加webview域名填写，入口链接：
		  <?php  echo $_W['siteroot']?>/index.php?s=/api/api/run/m/xz_tn/do/user/uniacid/<?php  echo $_W['uniacid']?>

        </div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">是否允许入驻</label>
        <div class="col-sm-10">
         <select id="userupload">
  <option value ="0" <?php  if($config_db['userupload']!=1) { ?>selected<?php  } ?>>开启 </option>
  <option value ="1" <?php  if($config_db['userupload']==1) { ?>selected<?php  } ?>>关闭 </option>
</select>
        </div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">是否审核新注册博主</label>
        <div class="col-sm-10">
         <select id="viewmode">
  <option value ="0" <?php  if($config_db['viewmode']!=1) { ?>selected<?php  } ?>>不审核 </option>
  <option value ="1" <?php  if($config_db['viewmode']==1) { ?>selected<?php  } ?>>审核 </option>
</select>
        </div>
      </div>


  <div class="form-group"  style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">其他</label>
        <div class="col-sm-10">
          <input type="text" id="btnname" class="form-control" value="<?php  echo $config_db['btnname'];?>">
        </div>
      </div>

 <div class="form-group"  style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">观看视频次数</label>
        <div class="col-sm-10">
          <input type="text" id="token" class="form-control" value="<?php  echo $config_db['token'];?>">
		  观看多少次视频，就不再显示激励视频（防止用户刷激励视频）
        </div>
      </div>

	  <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">最大下载次数</label>
      <div class="col-sm-10">
          <input type="text" id="wtimes" class="form-control" value="<?php  echo $config_db['wtimes'];?>">
         一段时间内（关闭小程序30分钟左右重置），下载图片最大次数，不要写0，不限制可以写9999。
		</div>
      </div>

	<div class="form-group"  style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">小程序博主入口</label>
        <div class="col-sm-10">
          <input type="text" id="imgurl" class="form-control" value="<?php  if($config_db['imgurl']=='') { ?><?php  echo $_W['siteroot']?>web/index.php?c=site&a=entry&do=user&module_name=xz_tn&uid=<?php  echo $_W['uniacid']?><?php  } else { ?><?php  echo $config_db['imgurl'];?><?php  } ?>">

        </div>
      </div>


	  <br>


<div style="width:100%;text-align:center">-------------------------------评测参数设置-------------------------------</div>

<div class="form-group"  style="">
        <label for="firstname" class="col-sm-2 control-label">评测激励视频</label>
        <div class="col-sm-10">
         <select id="targetid">
  <option value ="0" <?php  if($config_db['targetid']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['targetid']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>

 <div class="form-group" style='display:none'>
        <label for="firstname" class="col-sm-2 control-label">海报显示头像</label>
        <div class="col-sm-10">
<select id="sharemode" >
  <option value ="0" <?php  if(1==1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" >开启 </option>
</select>
        </div>
      </div>

 
	  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">海报文案</label>
        <div class="col-sm-10">
          <input type="text" id="fad" class="form-control" value="<?php  echo $config_db['fad'];?>">
        </div>
      </div>
		  <div class="form-group"  >
          <label for="firstname" class="col-sm-2 control-label">海报二维码</label>
          <div class="col-sm-10">
           
			   <div class="mui-input-cell"> <?php  echo tpl_form_field_image('qcode',$qcode,$qcode_view)?> </div>
          </div>
        </div>

  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">分享标题</label>
        <div class="col-sm-10">
          <input type="text" id="s_title" class="form-control" value="<?php  echo $config_db['s_title'];?>">
        </div>
      </div>

	  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">分享图片(对话图片)</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('s_pic',$s_pic,$s_pic_view)?> </div>
        </div>
      </div>
 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">对话名称</label>
        <div class="col-sm-10">
          <input type="text" id="woa_name" class="form-control" value="<?php  echo $config_db['woa_name'];?>">
       
		</div>
      </div>


<div style="width:100%;text-align:center">-------------------------------微信小程序参数设置-------------------------------</div>
<br><br>



<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信appid</label>
        <div class="col-sm-10">
          <input type="text" id="wx_id" class="form-control" value="<?php  echo $config_db['wx_id'];?>">
        </div>
      </div>
<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信密钥</label>
        <div class="col-sm-10">
          <input type="text" id="wx_pw" class="form-control" value="<?php  echo $config_db['wx_pw'];?>">
        </div>
      </div>

  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信激励</label>
        <div class="col-sm-10">
          <input type="text" id="wx_comead" class="form-control" value="<?php  echo $config_db['wx_comead'];?>">
        </div>
      </div>

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信插屏</label>
        <div class="col-sm-10">
          <input type="text" id="wx_addad" class="form-control" value="<?php  echo $config_db['wx_addad'];?>">
        </div>
      </div>


	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信视频</label>
        <div class="col-sm-10">
          <input type="text" id="wx_videoad" class="form-control" value="<?php  echo $config_db['wx_videoad'];?>">
        </div>
      </div>

	    	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信banner</label>
        <div class="col-sm-10">
          <input type="text" id="wx_banner" class="form-control" value="<?php  echo $config_db['wx_banner'];?>">
        </div>
      </div>


<div style="width:100%;text-align:center">-------------------------------抖音小程序参数设置-------------------------------</div>
<br><br>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">抖音appid</label>
        <div class="col-sm-10">
          <input type="text" id="dy_id" class="form-control" value="<?php  echo $config_db['dy_id'];?>">
        </div>
      </div>
<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">抖音密钥</label>
        <div class="col-sm-10">
          <input type="text" id="dy_pw" class="form-control" value="<?php  echo $config_db['dy_pw'];?>">
        </div>
      </div>




<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">抖音激励</label>
        <div class="col-sm-10">
          <input type="text" id="comead" class="form-control" value="<?php  echo $config_db['comead'];?>">
        </div>
      </div>

	  	<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">抖音插屏</label>
        <div class="col-sm-10">
          <input type="text" id="addad" class="form-control" value="<?php  echo $config_db['addad'];?>">
        </div>
      </div>


<div style="width:100%;text-align:center">-------------------------------快手小程序参数设置-------------------------------</div>
<br><br>
<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">快手appid</label>
        <div class="col-sm-10">
          <input type="text" id="ks_id" class="form-control" value="<?php  echo $config_db['ks_id'];?>">
        </div>
      </div>
<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">快手密钥</label>
        <div class="col-sm-10">
          <input type="text" id="ks_pw" class="form-control" value="<?php  echo $config_db['ks_pw'];?>">
        </div>
      </div>

<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">快手激励</label>
        <div class="col-sm-10">
          <input type="text" id="ks_comead" class="form-control" value="<?php  echo $config_db['ks_comead'];?>">
        </div>
      </div>

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">快手插屏</label>
        <div class="col-sm-10">
          <input type="text" id="ks_addad" class="form-control" value="<?php  echo $config_db['ks_addad'];?>">
        </div>
      </div>
	

<div style="width:100%;text-align:center">-------------------------------入驻参数设置-------------------------------</div>


<div class="form-group"  >
<label for="firstname" class="col-sm-2 control-label">加盟图</label>
<div class="col-sm-10">
<div class="mui-input-cell"> <?php  echo tpl_form_field_image('jiameng',$jiameng,$jiameng_view)?> </div>
</div>
</div>


<div class="form-group"   >
        <label for="firstname" class="col-sm-2 control-label">结算比例</label>
        <div class="col-sm-10">
          <input type="text" id="pay" class="form-control" value="<?php  echo $config_db['pay'];?>">
          收益的百分之多少，分配给会员。填写0-100。（100为全部给会员，80是80%金额分配给入驻博主）<font style="color:#ec0000">注意：配置中心分佣参数更改后会改变历史数据，如需修改分成——会员资料设置扣量不会影响历史数据。</font>
		</div>
      </div>
<div class="form-group"   >
        <label for="firstname" class="col-sm-2 control-label">下载量比例</label>
        <div class="col-sm-10">
          <input type="text" id="show" class="form-control" value="<?php  echo $config_db['show'];?>">
          会员下载量与真实下载量比例。如果填写50，即显示下载量的50%，下载量显示越低，下载单价越高。（用户都喜欢单价高）
		</div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">团队返佣</label>
        <div class="col-sm-10">
          <input type="text" id="teampay" class="form-control" value="<?php  echo $config_db['teampay'];?>">
       介绍人抽取下线创作者的百分比。
		
		</div>
      </div>  
	  
	  <div class="form-group"    >
        <label for="firstname" class="col-sm-2 control-label">验证域名</label>
        <div class="col-sm-10">
          <input type="text" id="apipath" class="form-control" style="float:left;width:400px"  value="<?php  echo $config_db['apipath'];?>" ><button type="button" class="btn btn-primary " style="margin:0 auto;float:left;" onClick="getcode()">获取</button>
		  <br><br>填写微信appid并保存后再获取。
<view style="display:none">	<?php  echo $config_db['wx_id'];?>|<?php  echo $_W['siteroot'];?>|<?php  echo $_W['uniacid'];?>|<?php  echo $_W['attachurl'];?></view>
        </div>
      </div> 
<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">webview设置</label>
        <div class="col-sm-10">
          <input type="text" id="webview" class="form-control" value="" style="width:300px;float:left"> <button type="button" class="btn btn-primary " style="margin:0 auto;float:left;" onClick="setwebview()">设置</button> <button type="button" class="btn btn-primary " style="margin:0 auto;float:left;" onClick="getwebviewfile()">获取验证文件</button> 
       <br><br>
	   注意，域名需要带https://不带最后/，多个域名需要|分割。如提示权限不足，请先扫码授权。
		</div>
    </div>
  <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">授权二维码</label>
        <div class="col-sm-10">

<div id="qrcode"></div>
        </div>
      </div>

	<div class="form-group" style="text-align: center">
        <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="submitform()">提交表单</button> 
	<button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="submitformB()">重置数据</button> 
	 <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="installapp()">扫码授权</button> 

 <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;" onClick="checkapp()">发布小程序</button> 

  <button type="button" class="btn btn-primary btn-lg" style="margin:0 auto;float:right" onClick="checkupdata()">更新系统</button>   <input type="text" id="updatacode" class="form-control" value="" style="width:100px;height:45px;float:right">
      </div>

    </form>
   
  </div> 
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?> 

<script src='../../../addons/xz_tn/template/libs/qrcode.min.js'></script>
<script>

var cput=true;
var templist=[];
var temppath='';
	

	function submitformB(){
		 if(cput){
						cput=false
					 }else{
						
			alert('请不要重复点击，如果长时间没响应。请刷新页面，再次点击。如果出现重复数据，点击清除基础数据，再次写入。')
return;
					 }
					
if(window.confirm('确认写入基础数据吗？请等待写入成功提示框。多次写入不会出现重复数据。')){
	                 //alert("确定");
					
				$.post("<?php  echo $this->createWebUrl('config')?>&type=creatdb", {
			

		},function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
alertf('操作成功。','提醒',function(){ location.reload()})//
				 }else{
				   window.alertf(obj['res'])
				 }
				})	 
	
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	}
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

var db_var=["woa_name","sharemode","fad","wx_id","wx_pw","ks_id","ks_pw","dy_id","dy_pw","tt_id","tt_pw","ks_comead","ks_addad","wx_comead","wx_addad","wx_banner","wx_videoad","btnname","limit","targetid","money","apipath","title","token","wtimes","btnurl","imgurl","comead","addad","s_title","pay","show","teampay","idd","viewmode","userupload"]
var db_img=["s_pic","qcode","jiameng"]

var db_obj={}
for(var i=0;i<db_var.length;i++){	
db_obj[db_var[i]]=$("#"+db_var[i]).val()
}
for(var i=0;i<db_img.length;i++){	
db_obj[db_img[i]]=$('input[name="'+db_img[i]+'"]').val()
}


		$.post("<?php  echo $this->createWebUrl('config')?>&type=save", db_obj,
				function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('config')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				});

	}

var i=0;
window.onload = function () {

        }

function installapp(){
       //   
$.post("<?php  echo $this->createWebUrl('loadqcode')?>", {

},function (data) {
			
var obj = JSON.parse(data);

alertf('扫码授权')

document.getElementById("qrcode").innerHTML='';
new QRCode(document.getElementById("qrcode"), obj['path']); 

		})

	}

function checkapp(){

$.post("<?php  echo $this->createWebUrl('checkapp')?>", {

		},function (data) {
			
	 var obj = JSON.parse(data);

alertf(obj['msg'])

		})

}

setTimeout(function(){
var db_obj={}
	$.post("<?php  echo $this->createWebUrl('checkwebview')?>", db_obj,
	function (data) {
			
	obj = JSON.parse(data);
				
	$('#webview').val(obj.res);
//obj['res']

	});

},100)

function setwebview(){

var db_obj={};

db_obj['urlpath']=$('#webview').val()

$.post("<?php  echo $this->createWebUrl('setwebview')?>", db_obj,function (data) {
			
	 var obj = JSON.parse(data);

alertf(obj.res)

		})

}


function getwebviewfile(){

var db_obj={};

$.post("<?php  echo $this->createWebUrl('getwebviewfile')?>", db_obj,function (data) {
			
	 var obj = JSON.parse(data);

alertf(obj.res)

		})

}

function getcode(){
	
var db_obj={};

$.post("<?php  echo $this->createWebUrl('getcode')?>", db_obj,function (data) {
	alertf('获取成功后保存')		
$('#apipath').val(data)
		})

}

function checkupdata(){
		
if($('#updatacode').val()!='9527'){
	alertf('权限不足')
}else{
var con;
         con=confirm("确定要更新系统文件吗?"); 
         //在页面上弹出对话框
         if (con==true){
			
         var db_obj={};
$.post("<?php  echo $this->createWebUrl('checkupdatas')?>", db_obj,function (data) {
alertf('更新完成');
		})
         }
}

}

</script> 
