<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?> 

<ul class="nav nav-pills nav-justified" style="width:100%;margin-left:0%">
<li style="100%" class="active" ><a href="" style="border-radius:5px;font-size:20px;width:100%">抖音管理</a></li>

<li style="100%"  class="active" style='margin-left:30px'><a href="<?php  echo $class_link;?>" style="border-radius:5px;font-size:20px;width:100%">分类管理</a></li>
<li style="100%"  class="active" ><a href="<?php  echo $image_link;?>" style="border-radius:5px;font-size:20px;width:100%">表情管理</a></li>
<li style="100%"  class="active" ><a href="<?php  echo $head_link;?>" style="border-radius:5px;font-size:20px;width:100%">头像管理</a></li>
<li style="100%"  class="active" ><a href="<?php  echo $bg_link;?>" style="border-radius:5px;font-size:20px;width:100%">壁纸管理</a></li>
<li style="100%"  class="active" ><a href="<?php  echo $fbg_link;?>" style="border-radius:5px;font-size:20px;width:100%">背景管理</a></li>
<li style="100%"  class="active" ><a href="<?php  echo $feedback_link;?>" style="border-radius:5px;font-size:20px;width:100%;background-color:#faa048">学徒/入驻(<?php  echo $feedback_num?>)</a></li>
</ul>

<div class="panel panel-default" style='margin-top:20px'>
  <div class="panel-body"> 
    <!--内容-->
    <form role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">


<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">预览模式</label>
        <div class="col-sm-10">
         <select id="viewmode">
  <option value ="0" <?php  if($config_db['viewmode']==0) { ?>selected<?php  } ?>>自动 </option>
  <option value ="1" <?php  if($config_db['viewmode']==1) { ?>selected<?php  } ?>>显示动图 </option>
  <option value ="2" <?php  if($config_db['viewmode']==2) { ?>selected<?php  } ?>>显示视频 </option>
</select>
        </div>
      </div>

<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">会员上传</label>
        <div class="col-sm-10">
         <select id="userupload">
  <option value ="0" <?php  if($config_db['userupload']==0) { ?>selected<?php  } ?>>允许 </option>
  <option value ="1" <?php  if($config_db['userupload']==1) { ?>selected<?php  } ?>>关闭 </option>

</select>
        </div>
      </div>


<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">首页数据源</label>
        <div class="col-sm-10">
         <select id="skintype">
  <option value ="0" <?php  if($config_db['skintype']==0) { ?>selected<?php  } ?>>全部 </option>
  <option value ="3" <?php  if($config_db['skintype']==3) { ?>selected<?php  } ?>>表情包 </option>
  <option value ="4" <?php  if($config_db['skintype']==4) { ?>selected<?php  } ?>>头像 </option>
  <option value ="5" <?php  if($config_db['skintype']==5) { ?>selected<?php  } ?>>壁纸 </option>
  <option value ="6" <?php  if($config_db['skintype']==6) { ?>selected<?php  } ?>>背景图 </option>
</select>
        </div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">提现限额</label>
        <div class="col-sm-10">
          <input type="text" id="limit" class="form-control" value="<?php  echo $config_db['limit'];?>">
       只针对会员资料为【提现制】的会员生效。
		</div>
      </div>

	   <div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">appid</label>
        <div class="col-sm-10">
          <input type="text" id="appid" class="form-control" value="<?php  echo $config_db['appid'];?>">
        </div>
      </div>
	
   <div class="form-group"  style="display:none"  >
        <label for="firstname" class="col-sm-2 control-label">AppSecret</label>
        <div class="col-sm-10">
          <input type="text" id="secret" class="form-control" value="<?php  echo $config_db['secret'];?>">
        如果需要启动图片审查功能正确填写这两个参数即可,务必检查不要有空格，开启后上传会变慢。<font style="color:#fa0000">重要：抖音提供的接口面向全行业过滤标准，因此无法过滤萌娃和低俗壁纸，需要结合人工审图功能使用。</font>
		
		</div>
      </div>

 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">会员每日最大上传量</label>
        <div class="col-sm-10">
          <input type="text" id="maxnum" class="form-control" value="<?php  echo $config_db['maxnum'];?>">
		</div>
      </div>

<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">首页入驻按钮</label>
        <div class="col-sm-10">
         <select id="targetid">
  <option value ="0" <?php  if($config_db['targetid']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['targetid']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>


 <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">显示表情包</label>
        <div class="col-sm-10">
         <select id="showindex">
  <option value ="1" <?php  if($config_db['showindex']!=0) { ?>selected<?php  } ?>>显示 </option>
  <option value ="0" <?php  if($config_db['showindex']==0) { ?>selected<?php  } ?>>隐藏 </option>

</select>
        </div>
      </div>


 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">表情包样式</label>
        <div class="col-sm-10">
         <select id="indexmode">
  <option value ="4" <?php  if($config_db['indexmode']==4) { ?>selected<?php  } ?>>一行4列 </option>
  <option value ="2" <?php  if($config_db['indexmode']==2) { ?>selected<?php  } ?>>一行2列 </option>

</select>博主热图的显示格式。
        </div>
      </div>


   <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">表情包数量</label>
        <div class="col-sm-10">
          <input type="text" id="indexnum" class="form-control" value="<?php  echo $config_db['indexnum'];?>">
      首页显示表情包图片数量
		</div>
   </div>
<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">显示头像</label>
        <div class="col-sm-10">
         <select id="showhead">
  <option value ="0" <?php  if($config_db['showhead']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['showhead']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>
	     <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">头像数量</label>
        <div class="col-sm-10">
          <input type="text" id="headnum" class="form-control" value="<?php  echo $config_db['headnum'];?>">
      首页显示头像图片数量
		</div>
   </div>

	  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">显示壁纸</label>
        <div class="col-sm-10">
         <select id="showbg">
  <option value ="0" <?php  if($config_db['showbg']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['showbg']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>

	     <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">壁纸数量</label>
        <div class="col-sm-10">
          <input type="text" id="bgnum" class="form-control" value="<?php  echo $config_db['bgnum'];?>">
      首页显示壁纸图片数量
		</div>
   </div>



	  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">显示背景图</label>
        <div class="col-sm-10">
         <select id="showfbg">
  <option value ="0" <?php  if($config_db['showfbg']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['showfbg']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>

	     <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">背景数量</label>
        <div class="col-sm-10">
          <input type="text" id="fbgnum" class="form-control" value="<?php  echo $config_db['fbgnum'];?>">
      首页显示背景图数量
		</div>
   </div>


<div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">是否开启视频下载</label>
        <div class="col-sm-10">
         <select id="paymode">
  <option value ="0" <?php  if($config_db['paymode']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['paymode']==1) { ?>selected<?php  } ?>>开启 </option>

</select>开启后。博主可以上传视频。
        </div>
      </div>



     <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">视频大小限制</label>
        <div class="col-sm-10">
                 <input type="text" id="paytext" class="form-control" value="<?php  if($config_db['paytext']=='') { ?>10<?php  } else { ?><?php  echo $config_db['paytext'];?><?php  } ?>">
       只写数字，单位是：M
        </div>
      </div>


     <div class="form-group"  style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">价格</label>
        <div class="col-sm-10">
                 <input type="text" id="money" class="form-control" value="<?php  echo $config_db['money'];?>">
        如果9.9元，就写9.9
        </div>
      </div>


 <div class="form-group"  style="display:none" >
	////////////////////////////////////////////////////////////////////////////////////

 </div>

 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">普通下载</label>
        <div class="col-sm-10">
         <select id="showtime">
  <option value ="0" <?php  if($config_db['showtime']!=1) { ?>selected<?php  } ?>>开启 </option>
  <option value ="1" <?php  if($config_db['showtime']==1) { ?>selected<?php  } ?>>关闭 </option>

</select>审核后可关闭。强制激励视频下载
        </div>
      </div>

 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">是否显示搜索</label>
        <div class="col-sm-10">
         <select id="showsearch">
  <option value ="0" <?php  if($config_db['showsearch']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['showsearch']==1) { ?>selected<?php  } ?>>开启 </option>

</select>
        </div>
      </div>





	   <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">最近更新模式</label>
        <div class="col-sm-10">
         <select id="showmode">
  <option value ="0" <?php  if($config_db['showmode']!=1) { ?>selected<?php  } ?>>随机显示 </option>
  <option value ="1" <?php  if($config_db['showmode']==1) { ?>selected<?php  } ?>>显示最新 </option>

</select>首页底部的更新表情包显示方式，可以按照更新显示，也可以随机显示。
        </div>
      </div>

   



 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">是否显示更新</label>
        <div class="col-sm-10">
         <select id="shownew">
  <option value ="1" <?php  if($config_db['shownew']!=0) { ?>selected<?php  } ?>>显示 </option>
  <option value ="0" <?php  if($config_db['shownew']==0) { ?>selected<?php  } ?>>隐藏 </option>

</select>突出原创表情包，提高原创表情包下载率（节省流量），可以隐藏收集。一个人多次访问广告收益很小。
        </div>
      </div>



   <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">博主热图文字</label>
        <div class="col-sm-10">
          <input type="text" id="bartxt" class="form-control" value="<?php  echo $config_db['bartxt'];?>">
        替换原博主热图四个字
		</div>
   </div>


	  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">顶部头图</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('topimg',$topimg,$topimg_view)?> </div>
        自定义图片后会跑服务器流量。可以自定义图片+外链方式，做某种引流（引流属于违规行为，慎用）。
		</div>
      </div>


 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">首页数据模式</label>
        <div class="col-sm-10">
<select id="mode">
  <option value ="0" <?php  if($config_db['mode']==0) { ?>selected<?php  } ?>>普通模式 </option>
  <option value ="1" <?php  if($config_db['mode']==1) { ?>selected<?php  } ?>>智能模式 </option>
</select>
开启智能模式，当天下载量高的图片会自动显示到首页。
        </div>
      </div>


<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">首页博主数量</label>
        <div class="col-sm-10">
         <input type="text" id="imgurl" class="form-control" value="<?php  echo $config_db['imgurl'];?>">
       博主数量填写后，首页会显示博主列表，但是收徒功能自动关闭（抖音规则限制）
		</div>
</div>


 



 <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">激励视频安全模式</label>
        <div class="col-sm-10">
         <select id="harfad">
  <option value ="0" <?php  if($config_db['harfad']!=1) { ?>selected<?php  } ?>>正常模式 </option>
  <option value ="1" <?php  if($config_db['harfad']==1) { ?>selected<?php  } ?>>安全模式 </option>

</select>开启后，激励视频每2次显示1次。正常模式有一定概率会被判定违规。
        </div>
      </div>

 <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">天天模式</label>
        <div class="col-sm-10">
         <select id="ttmode">
  <option value ="0" <?php  if($config_db['ttmode']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['ttmode']==1) { ?>selected<?php  } ?>>开启 </option>



</select>开启后，兼容天天变现应用，非天天变现用户请关闭。
        </div>
      </div>


 <div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">二维码功能</label>
        <div class="col-sm-10">
         <select id="qcodeabled">
  <option value ="0" <?php  if($config_db['qcodeabled']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['qcodeabled']==1) { ?>selected<?php  } ?>>开启 </option>

</select>制图带二维码。
        </div>
      </div>


	   <div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">静态模式</label>
        <div class="col-sm-10">


<input type="text" id="startnum" class="form-control" value="0"  style="float:left;width:100px" >
         <select id="small"  onchange="loadsmall()"  style="float:left">


  <option value ="0" <?php  if($config_db['small']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['small']==1) { ?>selected<?php  } ?>>开启 </option>
</select><span id="smalltext"></span>开启后等待图片压缩完成。第一次开启必须选生成缩略图。(子应用需要开启，但不需要重新生成一遍缩略图)如果哪里卡住了，修改数字可以断点继续。<span onClick="delpic()">【跳过】</span>
        </div>
      </div>


   <div class="form-group"    style="display:none">
        <label for="firstname" class="col-sm-2 control-label">接口域名</label>
        <div class="col-sm-10">
          <input type="text" id="apipath" class="form-control" value="<?php  echo $config_db['apipath'];?>">
        </div>
      </div>





  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">小程序标题</label>
        <div class="col-sm-10">
          <input type="text" id="title" class="form-control" value="<?php  echo $config_db['title'];?>">
        </div>
      </div>
      

	   <div class="form-group" style='display:none'>
        <label for="firstname" class="col-sm-2 control-label">更多按钮</label>
        <div class="col-sm-10">
         <select id="btnmode">
  <option value ="0" <?php  if($config_db['btnmode']!=1) { ?>selected<?php  } ?>>返回列表页</option>
  <option value ="1" <?php  if($config_db['btnmode']==1) { ?>selected<?php  } ?>>显示关注二维码</option>

</select>
        </div>
      </div>


	  <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">关键词功能</label>
        <div class="col-sm-10">
         <select id="cansearch">
  <option value ="0" <?php  if($config_db['cansearch']!=1) { ?>selected<?php  } ?>>关闭</option>
  <option value ="1" <?php  if($config_db['cansearch']==1) { ?>selected<?php  } ?>>开启</option>

</select>
是否显示搜索下方的关键词（懒得对表情进行分类，就关闭此选项，不然点击关键词后是空白）
        </div>
      </div>
 
		  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">关键词编辑   </label>
        <div class="col-sm-10">
          <input type="text" id="kw" class="form-control" value="<?php  echo $config_db['kw'];?>">
       关键词用|间隔，例如“抖音|沙雕|可爱|晚安|红包”
		</div>
      </div>

		  <div class="form-group"  >
          <label for="firstname" class="col-sm-2 control-label">加盟图</label>
          <div class="col-sm-10">
           
			   <div class="mui-input-cell"> <?php  echo tpl_form_field_image('qcode',$qcode,$qcode_view)?> </div>
          </div>
        </div>

  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">其他</label>
        <div class="col-sm-10">
          <input type="text" id="btnname" class="form-control" value="<?php  echo $config_db['btnname'];?>">
        </div>
      </div>

 <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">观看视频次数</label>
        <div class="col-sm-10">
          <input type="text" id="token" class="form-control" value="<?php  echo $config_db['token'];?>">
		  观看多少次视频，就不再显示激励视频（防止用户刷激励视频）
        </div>
      </div>

	  <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">最大下载次数</label>
      <div class="col-sm-10">
          <input type="text" id="wtimes" class="form-control" value="<?php  echo $config_db['wtimes'];?>">
         一段时间内（关闭小程序30分钟左右重置），下载图片最大次数，不要写0，不限制可以写9999。
		</div>
      </div>


 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">看广告下载次数</label>
        <div class="col-sm-10">
          <input type="text" id="downloadtimes" class="form-control" value="<?php  if(empty($config_db['downloadtimes'])) { ?>10<?php  } else { ?><?php  echo $config_db['downloadtimes'];?><?php  } ?>">看一次激励广告，一段时间内可以下载多少次（建议写2或者1）
        </div>
      </div>

	    <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">视频广告 </label>
        <div class="col-sm-10">
          <input type="text" id="videoad" class="form-control" value="<?php  echo $config_db['videoad'];?>">
        </div>
      </div>

	    <div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">banner广告   <span style="color:#e30000">(推荐)</span></label>
        <div class="col-sm-10">
          <input type="text" id="bannerad" class="form-control" value="<?php  echo $config_db['bannerad'];?>">
        </div>
      </div>


<div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">格子广告  <span style="color:#e30000">(推荐)</span></label>
        <div class="col-sm-10">
          <input type="text" id="boxad" class="form-control" value="<?php  echo $config_db['boxad'];?>">
		  格子广告即将线下。需要填写‘原生广告模板-左侧格子-多格子（默认参数）’的广告代码
        </div>
      </div>

 <div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">插屏广告 <span style="color:#e30000">(推荐)</span></label>
        <div class="col-sm-10">
          <input type="text" id="cad" class="form-control" value="<?php  echo $config_db['cad'];?>">
        </div>
      </div>

	  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">原生全屏   </label>
        <div class="col-sm-10">
          <input type="text" id="fad" class="form-control" value="<?php  echo $config_db['fad'];?>">一段时间内进入应用，会强制显示10秒全屏广告。非流量巨大慎填
        </div>
      </div>

	  	  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">oss域名</label>
        <div class="col-sm-10">
          <input type="text" id="ossurl" class="form-control" value="<?php  echo $config_db['ossurl'];?>">没有配置oss的请不要填写
        </div>
      </div>

	 
	  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">吸粉模式</label>
        <div class="col-sm-10">
         <select id="sharemode">
  <option value ="0" <?php  if($config_db['sharemode']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['sharemode']==1) { ?>selected<?php  } ?>>开启 </option>

</select>开启后，用户分享出去小程序，用户打开后是引导关注页面。<span style="color:#e50000">不要长时间开启，吸粉需要小心翼翼，你懂的。</span>
        </div>
      </div>
  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">公众号名称</label>
        <div class="col-sm-10">
          <input type="text" id="woa_name" class="form-control" value="<?php  echo $config_db['woa_name'];?>">
        开启了吸粉模式，并且没有填写关注链接，会引导用户通过公众号名称进行关注。
		</div>
      </div>

	   <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">奖励模式</label>
        <div class="col-sm-10">
         <select id="appmode">
  <option value ="0" <?php  if($config_db_i['appmode']!=1) { ?>selected<?php  } ?>>激励视频看答案 </option>
  <option value ="1" <?php  if($config_db_i['appmode']==1) { ?>selected<?php  } ?>>强制分享看答案 </option>

</select>
        </div>
      </div>

<div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">海报模式</label>
        <div class="col-sm-10">

<select id="hbmode">
  <option value ="0" <?php  if($config_db_i['hbmode']!=1) { ?>selected<?php  } ?>>生成无头像海报 </option>
  <option value ="1" <?php  if($config_db_i['hbmode']==1) { ?>selected<?php  } ?>>分享海报加入头像（需要用户授权） </option>
</select>

        </div>
</div>




  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">公众号名称</label>
        <div class="col-sm-10">
          <input type="text" id="woa_name" class="form-control" value="<?php  echo $config_db['woa_name'];?>">
        
		</div>
      </div>




	  

	  <div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">小程序外链(非必填)</label>
        <div class="col-sm-10">
         <select id="linknum" onchange="setlinknum()">
  <option value ="0" <?php  if($config_db_i['linknum']==0) { ?>selected<?php  } ?>>0个 </option>
  <option value ="1" <?php  if($config_db_i['linknum']==1) { ?>selected<?php  } ?>>1个 </option>
  <option value ="2" <?php  if($config_db_i['linknum']==2) { ?>selected<?php  } ?>>2个 </option>
  <option value ="3" <?php  if($config_db_i['linknum']==3) { ?>selected<?php  } ?>>3个 </option>
  <option value ="4" <?php  if($config_db_i['linknum']==4) { ?>selected<?php  } ?>>4个 </option>
  <option value ="5" <?php  if($config_db_i['linknum']==5) { ?>selected<?php  } ?>>5个 </option>
  <option value ="6" <?php  if($config_db_i['linknum']==6) { ?>selected<?php  } ?>>6个 </option>
  <option value ="7" <?php  if($config_db_i['linknum']==7) { ?>selected<?php  } ?>>7个 </option>
  <option value ="8" <?php  if($config_db_i['linknum']==8) { ?>selected<?php  } ?>>8个 </option>
  <option value ="9" <?php  if($config_db_i['linknum']==9) { ?>selected<?php  } ?>>9个 </option>
  <option value ="10"<?php  if($config_db_i['linknum']==10) { ?>selected<?php  } ?>>10个 </option>

</select>
<br><br>
 缩略图建议宽度不超过600px，高度等比例自动缩放
        </div>
</div>

 <div class="form-group" style="display:none" id="appA_div">
        <label for="firstname" class="col-sm-2 control-label">小程序1</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('a_pic',$a_pic,$a_pic_view)?> <br> <input type="text" id="min_pro_nameA" class="form-control" value="<?php  echo $config_db_i['min_pro_nameA'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidA" class="form-control" value="<?php  echo $config_db_i['min_pro_appidA'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" >
			
			</div>
        </div>
      </div>

 <div class="form-group" style="display:none" id="appB_div">
        <label for="firstname" class="col-sm-2 control-label">小程序2</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('b_pic',$b_pic,$b_pic_view)?>   <input type="text" id="min_pro_nameB" class="form-control" value="<?php  echo $config_db_i['min_pro_nameB'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidB" class="form-control" value="<?php  echo $config_db_i['min_pro_appidB'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appC_div">
        <label for="firstname" class="col-sm-2 control-label">小程序3</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('c_pic',$c_pic,$c_pic_view)?>  <input type="text" id="min_pro_nameC" class="form-control" value="<?php  echo $config_db_i['min_pro_nameC'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidC" class="form-control" value="<?php  echo $config_db_i['min_pro_appidC'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	 
 <div class="form-group" style="display:none" id="appD_div">
        <label for="firstname" class="col-sm-2 control-label">小程序4</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('d_pic',$d_pic,$d_pic_view)?>   <input type="text" id="min_pro_nameD" class="form-control" value="<?php  echo $config_db_i['min_pro_nameD'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidD" class="form-control" value="<?php  echo $config_db_i['min_pro_appidD'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appE_div">
        <label for="firstname" class="col-sm-2 control-label">小程序5</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('e_pic',$e_pic,$e_pic_view)?>  <input type="text" id="min_pro_nameE" class="form-control" value="<?php  echo $config_db_i['min_pro_nameE'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidE" class="form-control" value="<?php  echo $config_db_i['min_pro_appidE'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appF_div">
        <label for="firstname" class="col-sm-2 control-label">小程序6</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('f_pic',$f_pic,$f_pic_view)?>  <input type="text" id="min_pro_nameF" class="form-control" value="<?php  echo $config_db_i['min_pro_nameF'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidF" class="form-control" value="<?php  echo $config_db_i['min_pro_appidF'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	 
 <div class="form-group" style="display:none" id="appG_div">
        <label for="firstname" class="col-sm-2 control-label">小程序7</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('g_pic',$g_pic,$g_pic_view)?>  <input type="text" id="min_pro_nameG" class="form-control" value="<?php  echo $config_db_i['min_pro_nameG'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidG" class="form-control" value="<?php  echo $config_db_i['min_pro_appidG'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appH_div">
        <label for="firstname" class="col-sm-2 control-label">小程序8</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('h_pic',$h_pic,$h_pic_view)?>  <input type="text" id="min_pro_nameH" class="form-control" value="<?php  echo $config_db_i['min_pro_nameH'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidH" class="form-control" value="<?php  echo $config_db_i['min_pro_appidH'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appI_div">
        <label for="firstname" class="col-sm-2 control-label">小程序9</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('i_pic',$i_pic,$i_pic_view)?>   <input type="text" id="min_pro_nameI" class="form-control" value="<?php  echo $config_db_i['min_pro_nameI'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidI" class="form-control" value="<?php  echo $config_db_i['min_pro_appidI'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
 <div class="form-group" style="display:none" id="appJ_div">
        <label for="firstname" class="col-sm-2 control-label">小程序10</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('j_pic',$j_pic,$j_pic_view)?>  <input type="text" id="min_pro_nameJ" class="form-control" value="<?php  echo $config_db_i['min_pro_nameJ'];?>" placeholder="小程序名称"   style="width:45%;float:left"" >
		     <input type="text" id="min_pro_appidJ" class="form-control" value="<?php  echo $config_db_i['min_pro_appidJ'];?>" placeholder="APPid（不填写将不显示）"  style="width:45%;float:left; margin-left:5%" ></div>
        </div>
      </div>
	  
	  <div class="form-group" style="display:none">
	    <label for="firstname" class="col-sm-2 control-label">美团外卖链接</label>
	    <div class="col-sm-10">
	      <input type="text" id="mwaimai" class="form-control" value="<?php  echo $config_db['mwaimai'];?>">
	    </div>
	  </div>

	   <div class="form-group" style="display:none">
	    <label for="firstname" class="col-sm-2 control-label">饿了么外卖链接</label>
	    <div class="col-sm-10">
	      <input type="text" id="meleme" class="form-control" value="<?php  echo $config_db['meleme'];?>">
例如taoke/pages/shopping-guide/index?scene=PYscQou
	    </div>
	  </div>
	  
	  <div class="form-group" style="display:none">
	    <label for="firstname" class="col-sm-2 control-label">误点击概率</label>
	    <div class="col-sm-10">
	      <input type="text" id="gl" class="form-control" value="<?php  echo $config_db['gl'];?>">
		  如果开启了静态模式，预览窗口‘换一张’按钮可以激活插屏广告显示，例如输入10，就是有1/10的概率，尝试激活插屏显示（插屏不是每次激活就能显示）。建议根据自己的流量主收益报告，找到最适合自己的参数。默认值1000，就是不激活'换一张'插屏。
	    </div>
	  </div>



   <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">会员是否免广告</label>
        <div class="col-sm-10">
         <select id="noad">
  <option value ="0" <?php  if($config_db['noad']!=1) { ?>selected<?php  } ?>>不免</option>
  <option value ="1" <?php  if($config_db['noad']==1) { ?>selected<?php  } ?>>免</option>

</select>
选择【免】，不看会员账号不看激励视频。
        </div>
      </div>


<div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">注册规则说明</label>
        <div class="col-sm-10">
          <input type="text" id="loginabout" class="form-control" value="<?php  echo $config_db['loginabout'];?>">
        </div>
      </div>



 <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">禁止PC</label>
        <div class="col-sm-10">
         <select id="stoppc">
  <option value ="0" <?php  if($config_db['stoppc']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['stoppc']==1) { ?>selected<?php  } ?>>开启 </option>



</select>开启后，PC微信可以浏览，但看不了动图。提示手机微信打开下载。这样节省很多流量。因为pc基本上没广告。
        </div>
      </div>




 <div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">使用公众号图文素材</label>
        <div class="col-sm-10">
         <select id="uselink">
  <option value ="0" <?php  if($config_db['uselink']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['uselink']==1) { ?>selected<?php  } ?>>开启 </option>



</select>开启后，公众号采集的素材，将直接调用素材链接，不走服务器或OSS。
        </div>
      </div>




<div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">隐藏帮助栏目</label>
        <div class="col-sm-10">
         <select id="showpic">
  <option value ="0" <?php  if($config_db['showpic']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['showpic']==1) { ?>selected<?php  } ?>>隐藏 </option>



</select>
        </div>
      </div>








<div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">是否显示首页banner</label>
        <div class="col-sm-10">
         <select id="showbanner">
  <option value ="0" <?php  if($config_db['showbanner']!=1) { ?>selected<?php  } ?>>隐藏 </option>
  <option value ="1" <?php  if($config_db['showbanner']==1) { ?>selected<?php  } ?>>显示 </option>



</select>
        </div>
      </div>

<div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">是否显示轮播</label>
        <div class="col-sm-10">
         <select id="showswiper">
  <option value ="0" <?php  if($config_db['showswiper']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['showswiper']==1) { ?>selected<?php  } ?>>隐藏 </option>



</select>
隐藏轮播方法：先启用轮播（轮播管理随便传个图，然后这里设置隐藏就好了）
        </div>
      </div>


	  <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">隐藏搜索</label>
        <div class="col-sm-10">
         <select id="hidsearch">
  <option value ="0" <?php  if($config_db['hidsearch']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['hidsearch']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>
        </div>
      </div>

<div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">隐藏套图</label>
        <div class="col-sm-10">
         <select id="hidgroup">
  <option value ="0" <?php  if($config_db['hidgroup']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['hidgroup']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>
        </div>
      </div>

	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">小程序博主入口</label>
        <div class="col-sm-10">
          <input type="text" id="btnurl" class="form-control" value="<?php  echo $config_db['btnurl'];?>">填写会员入口域名，并且添加webview域名（详见帮助文档）

		  <?php  echo $_W['siteroot']?>/index.php?s=/api/api/run/m/xz_bq_dyl/do/user/uniacid/<?php  echo $_W['uniacid']?>

        </div>
      </div>





	   <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">分享标题</label>
        <div class="col-sm-10">
          <input type="text" id="s_title" class="form-control" value="<?php  echo $config_db['s_title'];?>">
        </div>
      </div>

	  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">我的板块图片</label>
        <div class="col-sm-10">
            <div class="mui-input-cell"> <?php  echo tpl_form_field_image('s_pic',$s_pic,$s_pic_view)?> </div>
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

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">抖音广告设置</label>
        <div class="col-sm-10">
        </div>
      </div>


	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">激励视频广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="comead" class="form-control" value="<?php  echo $config_db['comead'];?>">
        </div>
      </div>

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">插屏广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="addad" class="form-control" value="<?php  echo $config_db['addad'];?>">
        </div>
      </div>

<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">微信广告设置</label>
        <div class="col-sm-10">
        </div>
      </div>

	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">激励视频广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="wx_comead" class="form-control" value="<?php  echo $config_db['wx_comead'];?>">
        </div>
      </div>

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">插屏广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="wx_addad" class="form-control" value="<?php  echo $config_db['wx_addad'];?>">
        </div>
      </div>

	  <div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">快手广告设置</label>
        <div class="col-sm-10">
        </div>
      </div>

	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">激励视频广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="ks_comead" class="form-control" value="<?php  echo $config_db['ks_comead'];?>">
        </div>
      </div>

	  	<div class="form-group"  >
        <label for="firstname" class="col-sm-2 control-label">插屏广告ID</label>
        <div class="col-sm-10">
          <input type="text" id="ks_addad" class="form-control" value="<?php  echo $config_db['ks_addad'];?>">
        </div>
      </div>

	  <div class="form-group" style="text-align: center">

        <button type="button" class="btn btn-primary" style="margin:0 auto;" onClick="submitform()">提交表单</button> 
      </div>


    </form>
  </div> 
</div>


<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?> 
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
					
if(window.confirm('确认写入基础数据吗？400条数据，请等待写入成功提示框。多次写入不会出现重复数据。')){
	                 //alert("确定");
					
				$.post("<?php  echo $this->createWebUrl('loaddb')?>", {
			

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

$.post("<?php  echo $this->createWebUrl('config')?>&pt=add", {

viewmode: $('#viewmode').val(),

appid: $('#appid').val(),
secret: $('#secret').val(),

targetid: $('#targetid').val(),
pass: $('#pass').val(),
title: $('#title').val(),
wtimes: $('#wtimes').val(),
btnname: $('#btnname').val(),
btnurl: $('#btnurl').val(),
comead: $('#comead').val(),
addad: $('#addad').val(),

wx_comead: $('#wx_comead').val(),
wx_addad: $('#wx_addad').val(),

ks_comead: $('#ks_comead').val(),
ks_addad: $('#ks_addad').val(),

imgurl: $('#imgurl').val(),
showmode: $('#showmode').val(),
teampay: $('#teampay').val(),

bgnum: $('#bgnum').val(),
headnum: $('#headnum').val(),
fbgnum: $('#fbgnum').val(),

showtime: $('#showtime').val(),
skintype: $('#skintype').val(),
paymode: $('#paymode').val(),
paytext: $('#paytext').val(),
limit: $('#limit').val(),
downloadtimes:$("#downloadtimes").val(),
token: $('#token').val(),
showsearch: $('#showsearch').val(),
showindex:$("#showindex").val(),
indexmode:$("#indexmode").val(),
indexnum:$("#indexnum").val(),
shownew:$("#shownew").val(),
maxnum:$("#maxnum").val(),
mode:$("#mode").val(),
showfbg:$("#showfbg").val(),
bartxt:$("#bartxt").val(),
topimg:$('input[name="topimg"]').val(),
  
paymode:$("#paymode").val(),
money:$("#money").val(),
paytext:$("#paytext").val(),

s_title: $('#s_title').val(),
s_pic:$('input[name="s_pic"]').val(),

pay: $('#pay').val(),
show: $('#show').val(),

showhead:$('#showhead').val(),
showbg:$('#showbg').val(),
userupload:$('#userupload').val(),
qcode:$('input[name="qcode"]').val(),			
idd:$('#idd').val()
			
		},
				function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('config')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				});
		
		
	}
	
var linkdiv_arr=[
$('#appA_div'),
$('#appB_div'),
$('#appC_div'),
$('#appD_div'),
$('#appE_div'),
$('#appF_div'),
$('#appG_div'),
$('#appH_div'),
$('#appI_div'),
$('#appJ_div')
]

	function setlinknum(){
		
       var linknum=$("#linknum").val()
       for(var i=0;i<linkdiv_arr.length;i++){
		 linkdiv_arr[i].css('display','none');
       }

	   for(var i=0;i<linknum;i++){
		 linkdiv_arr[i].css('display','block');
       }

	}

var i=0;
window.onload = function () {
          
setlinknum()

        }

		function loadsmall(){
			if($('#small').val()==1){
				 if(window.confirm('开始生成缩略图，时间需要占用很久，如果无需走生成流程，选取消。')){
        //继续执行
	
$('#smalltext').html('（←请等待，数据正在整理中）')

$.post("<?php  echo $this->createWebUrl('smalllist')?>", {
			

		},function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){

templist=[];
i=$('#startnum').val();



loadimgstage(obj);	


				 }else{
				   window.alertf(obj['res'])
				 }
				})	 

    }else{
		
    }

			}

		}

		function getsmallobjstate(imgpath_var,objs){
			
					$.post("<?php  echo $this->createWebUrl('getsmallstate')?>", {
			
       imgpath: imgpath_var

		},function (data) {
			
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){

///////////////////////
templist[templist.length]=objs['list'][i];
i++
if(i<objs['list'].length){
loadimgstage(objs);
}else{
alert('已完成')
}
////////////////////////

				 }else{
				 
			///////////////////////

i++
if(i<objs['list'].length){
loadimgstage(objs);
}else{
alert('已完成')
}
////////////////////////

				 }
				})	

		}

function loadimgstage(obj){

$('#smalltext').html('（←正在生成缩略图'+(i+1)+'/'+obj['num']+'）,刷新终止。')

root_imgpath=obj['list'][i];
getsmallobjstate(obj['list'][i],obj)

}
var root_imgpath='';
function delpic(){

		if(window.confirm('如果确认卡顿，将会删除这个编码错误图片文件。')){


$.post("<?php  echo $this->createWebUrl('delimgpath')?>", {
		
		      
					imgpath:root_imgpath
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('输入停止的数字-10（例如：停止在1000就输入990），选择开启继续生成缩略图','提醒',function(){})
		
						 }

			})

	                 return true;
	              }else{

	                 return false;
	             }

}

var startnum=0
var totalnum=0
var listarr=[]

function submitformC(){

if(window.confirm('开始写入文件，应用配置仅需操作一次')){

				$.post("<?php  echo $this->createWebUrl('loadfile')?>", {

		},function (data) {
			
				 obj = JSON.parse(data);

		        	
				startnum=$('#sm').val();
                totalnum=obj['res']
				listarr=obj['list']

				saveimg()
				function saveimg(){
					  $('#filetxt').html('写入进度：'+(startnum+1)+'/'+totalnum)	 
////////////
$.post("<?php  echo $this->createWebUrl('Savefile')?>", {
imgpath:listarr[startnum]['imgpath'],
simgpath:listarr[startnum]['simgpath'],
opath:listarr[startnum]['opath'],
		},function (data) {
			
				 obj = JSON.parse(data);

		       if((startnum+1)==totalnum){
				
 $('#filetxt').html('写入成功')	

		       }else{

setTimeout(function(){

startnum++	
saveimg()

},$('#jt').val())
		       }
				
				})	 
///////////

				}



				})	 

			

	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	


		

	}
</script> 
