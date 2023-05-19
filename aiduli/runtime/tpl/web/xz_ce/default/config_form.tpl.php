<?php defined('IN_IA') or exit('Access Denied');?> <?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?> 

<div class="panel panel-default">

  <div class="panel-body"> 
    <!--内容-->
    
    <form role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

 <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">小程序模式</label>
        <div class="col-sm-10">
         <select id="pass">
  <option value ="0" <?php  if($config_db['pass']!=1) { ?>selected<?php  } ?>>审核模式 </option>
  <option value ="1" <?php  if($config_db['pass']==1) { ?>selected<?php  } ?>>运营模式 </option>

</select>
        </div>
      </div>

 <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">应用类型</label>
        <div class="col-sm-10">

<select id="dbid">

  <option value ="1" <?php  if($config_db['dbid']==1) { ?>selected<?php  } ?>>主应用 </option>
  <option value ="2" <?php  if($config_db['dbid']==2) { ?>selected<?php  } ?>>子应用 </option>
  <option value ="3" <?php  if($config_db['dbid']==3) { ?>selected<?php  } ?>>独立应用 </option>

</select>
[主应用]：子应用可调用主应用数据。[子应用]：不需要维护任何资料调用主应用。[独立应用]：独立数据应用。

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

</select>
        </div>
      </div>


	   <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">静态模式</label>
        <div class="col-sm-10">


<input type="text" id="startnum" class="form-control" value="0"  style="float:left;width:100px" >
         <select id="small"  onchange="loadsmall()"  style="float:left">


  <option value ="0" <?php  if($config_db['small']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['small']==1) { ?>selected<?php  } ?>>开启 </option>
</select><span id="smalltext"></span>开启后等待图片压缩完成。第一次开启必须选生成缩略图。(子应用需要开启，但不需要重新生成一遍缩略图)如果哪里卡住了，修改数字可以断点继续。<span onClick="delpic()">【跳过】</span>
        </div>
      </div>


	   <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">appid</label>
        <div class="col-sm-10">
          <input type="text" id="appid" class="form-control" value="<?php  echo $config_db['appid'];?>">
        </div>
      </div>
	
   <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">AppSecret</label>
        <div class="col-sm-10">
          <input type="text" id="pwkey" class="form-control" value="<?php  echo $config_db['pwkey'];?>">
        </div>
      </div>
		

  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">小程序标题</label>
        <div class="col-sm-10">
          <input type="text" id="title" class="form-control" value="<?php  echo $config_db['title'];?>">
        </div>
      </div>
      

      <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">request域名</label>
        <div class="col-sm-10">
          <input type="text" id="token" class="form-control" value="<?php  echo $config_db['token'];?>">
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
 
		  <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">关键词编辑   </label>
        <div class="col-sm-10">
          <input type="text" id="kw" class="form-control" value="<?php  echo $config_db['kw'];?>">
       关键词用|间隔，例如“抖音|沙雕|可爱|晚安|红包”
		</div>
      </div>
		  

 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">海报显示头像</label>
        <div class="col-sm-10">
<select id="sharemode" >
  <option value ="0" <?php  if($config_db['sharemode']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['sharemode']==1) { ?>selected<?php  } ?>>开启 </option>
</select>
        </div>
      </div>

 <div class="form-group" name='填充' >
        <label for="firstname" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">

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


  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">激励视频广告</label>
        <div class="col-sm-10">
          <input type="text" id="comead" class="form-control" value="<?php  echo $config_db['comead'];?>">
       
		</div>
      </div>

 <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">下载次数</label>
        <div class="col-sm-10">
          <input type="text" id="downloadtimes" class="form-control" value="<?php  if(empty($config_db['downloadtimes'])) { ?>10<?php  } else { ?><?php  echo $config_db['downloadtimes'];?><?php  } ?>">看一次激励广告，一段时间内可以下载多少次（10-20次最佳。请不要写0）
        </div>
      </div>

	    <div class="form-group"   style="display:none">
        <label for="firstname" class="col-sm-2 control-label">视频广告</label>
        <div class="col-sm-10">
          <input type="text" id="videoad" class="form-control" value="<?php  echo $config_db['videoad'];?>">
        </div>
      </div>

	    <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">banner广告</label>
        <div class="col-sm-10">
          <input type="text" id="bannerad" class="form-control" value="<?php  echo $config_db['bannerad'];?>">
        </div>
      </div>

	     <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">插屏广告</label>
        <div class="col-sm-10">
          <input type="text" id="addad" class="form-control" value="<?php  echo $config_db_i['addad'];?>">
        </div>
      </div>
 <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">插屏广告  (过渡页)</label>
        <div class="col-sm-10">
          <input type="text" id="addadb" class="form-control" value="<?php  echo $config_db_i['addadb'];?>">
        </div>
      </div>


<div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">原生格子</label>
        <div class="col-sm-10">
          <input type="text" id="boxad" class="form-control" value="<?php  echo $config_db['boxad'];?>">
		  
        </div>
      </div>


 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">插屏广告</label>
        <div class="col-sm-10">
          <input type="text" id="cad" class="form-control" value="<?php  echo $config_db['cad'];?>">
        </div>
      </div>



	  	  <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">oss域名</label>
        <div class="col-sm-10">
          <input type="text" id="ossurl" class="form-control" value="<?php  echo $config_db['ossurl'];?>">没有配置oss的请不要填写
        </div>
      </div>

	   <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">关注按钮</label>
        <div class="col-sm-10">
          <input type="text" id="btnname" class="form-control" value="<?php  echo $config_db['btnname'];?>">设置名称底部会出现一个跳转按钮，这里编辑按钮上的文字。(公众号文章内二维码，可以在小程序内长按识别)
        </div>
      </div>

	<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">关注链接</label>
        <div class="col-sm-10">
          <input type="text" id="btnurl" class="form-control" value="<?php  echo $config_db['btnurl'];?>">设置关联公众号文章，或业务域名页面（企业号有业务域名）
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



   <div class="form-group"  style="display:none">
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



 <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label" >禁止PC</label>
        <div class="col-sm-10">
         <select id="stoppc">
  <option value ="0" <?php  if($config_db['stoppc']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['stoppc']==1) { ?>selected<?php  } ?>>开启 </option>



</select>开启后，PC微信可以浏览，但看不了动图。提示手机微信打开下载。这样节省很多流量。因为pc基本上没广告。
        </div>
      </div>




 <div class="form-group"  style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">使用公众号图文素材</label>
        <div class="col-sm-10">
         <select id="uselink">
  <option value ="0" <?php  if($config_db['uselink']!=1) { ?>selected<?php  } ?>>关闭 </option>
  <option value ="1" <?php  if($config_db['uselink']==1) { ?>selected<?php  } ?>>开启 </option>



</select>开启后，公众号采集的素材，将直接调用素材链接，不走服务器或OSS。
        </div>
      </div>

 <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">头像模块</label>
        <div class="col-sm-10">
         <select id="showhead">
  <option value ="0" <?php  if($config_db['showhead']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['showhead']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>
        </div>
      </div>

	   <div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">壁纸模块</label>
        <div class="col-sm-10">
         <select id="showbg">
  <option value ="0" <?php  if($config_db['showbg']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['showbg']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>
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

<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">是否显示首页banner</label>
        <div class="col-sm-10">
         <select id="showbanner">
  <option value ="0" <?php  if($config_db['showbanner']!=1) { ?>selected<?php  } ?>>隐藏 </option>
  <option value ="1" <?php  if($config_db['showbanner']==1) { ?>selected<?php  } ?>>显示 </option>

</select>
        </div>
      </div>
 <div class="form-group" name='填充' >
        <label for="firstname" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">

        </div>
      </div>
<div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">是否显示轮播</label>
        <div class="col-sm-10">
         <select id="showswiper">
  <option value ="0" <?php  if($config_db['showswiper']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['showswiper']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>

        </div>
      </div>

 <div class="form-group" name='填充' >
        <label for="firstname" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">

        </div>
      </div>
	  <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">搜索状态</label>
        <div class="col-sm-10">
         <select id="hidsearch">
  <option value ="0" <?php  if($config_db['hidsearch']!=1) { ?>selected<?php  } ?>>显示 </option>
  <option value ="1" <?php  if($config_db['hidsearch']==1) { ?>selected<?php  } ?>>隐藏 </option>

</select>
        </div>
      </div>
 <div class="form-group" name='填充' >
        <label for="firstname" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">

        </div>
      </div>
  <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">授权二维码</label>
        <div class="col-sm-10">

<div id="qrcode"></div>
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


<div class="form-group"  style="display:none">
        <label for="firstname" class="col-sm-2 control-label">首页随机</label>
        <div class="col-sm-10">
         <select id="ran">
  <option value ="0" <?php  if($config_db['ran']!=1) { ?>selected<?php  } ?>>显示更新 </option>
  <option value ="1" <?php  if($config_db['ran']==1) { ?>selected<?php  } ?>>显示随机 </option>



</select>
        </div>
      </div>

<div class="form-group" style="display:none" >
        <label for="firstname" class="col-sm-2 control-label">首页是否显示分类</label>
        <div class="col-sm-10">
         <select id="showclass">
  <option value ="0" <?php  if($config_db['showclass']!=1) { ?>selected<?php  } ?>>隐藏 </option>
  <option value ="1" <?php  if($config_db['showclass']==1) { ?>selected<?php  } ?>>显示 </option>



</select>
        </div>
      </div>

      </div>

      </div>
	  
      <div class="form-group" style="text-align: center">
        <button type="button" class="btn btn-primary" style="margin:0 auto;" onClick="submitform()">提交表单</button> 
		<button type="button" class="btn btn-primary" onClick="submitformB()"  style="display:none">一次性写入基础数据</button>
		
        <button type="button" class="btn btn-primary" onClick="submitformC()"  style="display:none">清除未成年数据</button>
		<button type="button" class="btn btn-primary"  onClick="submitformD()"  style="display:none">清除基础数据</button>

		<button type="button" class="btn btn-primary" style="margin:0 auto;" onClick="submitformB()" id='tbtns'>写入数据</button>

 <button type="button" class="btn btn-primary" style="margin:0 auto;" onClick="installapp()">提交前端审核</button> 

 <button type="button" class="btn btn-primary" style="margin:0 auto;" onClick="checkapp()">查看审核进度</button> 

		<input type="text" id="stxt" class="form-control" value="0"  style="float:left;width:50px;display:none" ><input type="text" id="ttxt" class="form-control" value="0"  style="float:left;width:50px;display:none" >
		
	  </div>
    </form>
  </div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?> 
<script>



var cput=true;
var templist=[];
var temppath='';
	require(['../../../addons/xz_ce/template/libs/com.js?r=<?php  echo mt_rand(1000,1000000)?>'])

	require(['../../../addons/xz_ce/template/libs/qrcode.min.js?r=<?php  echo mt_rand(1000,1000000)?>'])

	function submitformB(){
		 if(cput){
						cput=false
					 }else{
						
						alert('请不要重复点击')
return;
					 }
					
if(window.confirm('基础数据来源于互联网，仅作为页面填充使用，确认写入基础数据吗？')){
	                 //alert("确定");
					
				$.post("<?php  echo $this->createWebUrl('config')?>", {
			
type:'creatdb'
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
	var cputb=true;
	function submitformD(){
		 if(cputb){
						cputb=false
					 }else{
						
						alert('请不要重复点击，如果长时间没响应。请刷新页面。')
return;
					 }
					
if(window.confirm('确认清除所有基础数据吗，时间会比较长需耐心等待，如果长时间无响应，可以刷新页面再点击')){
	                 //alert("确定");
					
				$.post("<?php  echo $this->createWebUrl('deletedb')?>", {
			

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
		

			qcode:$('input[name="qcode"]').val(),
 mwaimai: $('#mwaimai').val(),

meleme: $('#meleme').val(),
 noad: $('#noad').val(),
 gl: 1000,
 showbanner: $('#showbanner').val(),
			 appid: $('#appid').val(),
			 pwkey: $('#pwkey').val(),
			 token: $('#token').val(),
			 small:$('#small').val(),
			uselink:$('#uselink').val(),
			  stoppc:$('#stoppc').val(),
	  hidgroup:$('#hidgroup').val(),
	  	  hidsearch:$('#hidsearch').val(),
loginabout:$('#loginabout').val(),
			 comead: $('#comead').val(),
			 bannerad: $('#bannerad').val(),
			 videoad: $('#videoad').val(),
cansearch:$('#cansearch').val(),
			 fad: $('#fad').val(),
			 cad: $('#cad').val(),
			 ossurl: $('#ossurl').val(),
			
			 title: $('#title').val(),
			 btnmode: $('#btnmode').val(),

			  pass: $('#pass').val(),
			  harfad: $('#harfad').val(),
			  ttmode: $('#ttmode').val(),
			  qcodeabled:$('#qcodeabled').val(),
			  downloadtimes:$('#downloadtimes').val(),


showclass:$('#showclass').val(),

showhead: $('#showhead').val(),
showbg: $('#showbg').val(),
showpic: $('#showpic').val(),
ran: $('#ran').val(),

dbid: $('#dbid').val(),
showswiper: $('#showswiper').val(),
boxad: $('#boxad').val(),
addad: $('#addad').val(),
addadb: $('#addadb').val(),
kw: $('#kw').val(),
appmode: $('#appmode').val(),
hbmode: $('#hbmode').val(),
s_title: $('#s_title').val(),
s_pic:$('input[name="s_pic"]').val(),

linknum: $('#linknum').val(),

sharemode: $('#sharemode').val(),
woa_name: $('#woa_name').val(),

btnname: $('#btnname').val(),
btnurl: $('#btnurl').val(),

a_pic:$('input[name="a_pic"]').val(),
min_pro_nameA: $('#min_pro_nameA').val(),
min_pro_appidA: $('#min_pro_appidA').val(),

b_pic:$('input[name="b_pic"]').val(),
min_pro_nameB: $('#min_pro_nameB').val(),
min_pro_appidB: $('#min_pro_appidB').val(),

c_pic:$('input[name="c_pic"]').val(),
min_pro_nameC: $('#min_pro_nameC').val(),
min_pro_appidC: $('#min_pro_appidC').val(),

d_pic:$('input[name="d_pic"]').val(),
min_pro_nameD: $('#min_pro_nameD').val(),
min_pro_appidD: $('#min_pro_appidD').val(),

e_pic:$('input[name="e_pic"]').val(),
min_pro_nameE: $('#min_pro_nameE').val(),
min_pro_appidE: $('#min_pro_appidE').val(),

f_pic:$('input[name="f_pic"]').val(),
min_pro_nameF: $('#min_pro_nameF').val(),
min_pro_appidF: $('#min_pro_appidF').val(),

g_pic:$('input[name="g_pic"]').val(),
min_pro_nameG: $('#min_pro_nameG').val(),
min_pro_appidG: $('#min_pro_appidG').val(),

h_pic:$('input[name="h_pic"]').val(),
min_pro_nameH: $('#min_pro_nameH').val(),
min_pro_appidH: $('#min_pro_appidH').val(),

i_pic:$('input[name="i_pic"]').val(),
min_pro_nameI: $('#min_pro_nameI').val(),
min_pro_appidI: $('#min_pro_appidI').val(),

j_pic:$('input[name="j_pic"]').val(),
min_pro_nameJ: $('#min_pro_nameJ').val(),
min_pro_appidJ: $('#min_pro_appidJ').val(),


			 /////
			
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

function submitformC(){
if(window.confirm('仅能清理基础资源包的未成年软色情图片，自己上传的需自行清理')){
	                 //alert("确定");
					
				$.post("<?php  echo $this->createWebUrl('cleardb')?>", {

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

function submitformE(){
		
if(window.confirm('确认写入数据吗')){
	                 //alert("确定");

			setdb($('#stxt').val())
 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	}

function checkapp(){
	

$.post("<?php  echo $this->createWebUrl('checkapp')?>", {

		},function (data) {
			
	 var obj = JSON.parse(data);
			
	

alertf(obj['msg'])


		})

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
	function setdb(nn){
		nn=parseInt(nn)
			$.post("<?php  echo $this->createWebUrl('loaddb_b')?>"+'&idd='+nn, {
			

		},function (data) {
			$('#tbtns').html('正在写入'+(nn+1)+'/7240');
			nn+=1;
				if(nn<7240){
					
					
						setTimeout(function(){
				setdb(nn)
			},parseInt($('#ttxt').val()))
				}else{
				$('#tbtns').html('写入完成');	

				}

		
//alertf('操作成功。','提醒',function(){ location.reload()})//
				
				})	 

	}
</script> 
