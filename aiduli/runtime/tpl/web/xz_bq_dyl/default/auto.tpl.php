<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>

<div class="panel panel-default">
	<ul class="nav nav-pills nav-justified">
	<li class="active"><a href="javascript:window.history.go(-1)" style="font-size:20px;">>> 返回</a></li>
<li class="active"  style="text-align:center;font-size:20px;background-color:#e7e7e7">正在采集 <span style="font-weight: bolder">[<?php  echo $classinfo['name'];?>]</span></li>
</ul>
	<div class="panel-body">
    <div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">

  <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label" style="float:left;color:#d60043">推文采集(推荐)</label>
        <div class="col-sm-10">
          
<span id="text"></span>
        </div>
      </div>

   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label" style="clear:left">推文链接</label>
        <div class="col-sm-10">
          <input type="text" id="path" class="form-control" value="">
		</div>
      </div>


  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label" style="clear:left">会员ID</label>
        <div class="col-sm-10">
          <input type="text" id="name" class="form-control" value="0">
		  采集存入某个加盟博主的账号，填写用户的ID（会员管理页复制对应ID）。如果作为公共图片，写0
		</div>
      </div>


 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">采集内容</label>
        <div class="col-sm-10">
 <select id="fw_tw">
  <option value ="0" selected>全部都采 </option>
  <option value ="1" >只采GIF </option>
</select>
        </div>
      </div>


	   <div class="form-group" style="display:none">
        <label for="firstname" class="col-sm-2 control-label">保存原图</label>
        <div class="col-sm-10">
 <select id="savepic">
  <option value ="0" selected>保存 </option>
  <option value ="1" >不保存 </option>
</select>
        </div>
      </div>

  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">操作</label>
        <div class="col-sm-10">
          <button  class="btn btn-primary"  onClick="pathauto()">推文采集</button>
<span id="textb"></span>
        </div>
      </div>

  <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label"> </label>
        <div class="col-sm-10">
          
<span id="text"></span>
        </div>
      </div>
	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label"> </label>
        <div class="col-sm-10">
          
<span id="text"></span>
        </div>
      </div>
	    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label"> </label>
        <div class="col-sm-10">
          
<span id="text"></span>
        </div>
      </div>


<div style="display:none" id="keysearch">
  <div class="form-group" style="clear:left">
        <label for="firstname" class="col-sm-2 control-label" style="float:left;color:#d60043">关键词采集(图老)</label>
        <div class="col-sm-10">
          
<span id="text"></span>
        </div>
      </div>

	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label" style="clear:left">开始页</label>
        <div class="col-sm-10">
          <input type="text" id="start" class="form-control" value="">
		</div>
      </div>

<div role="form" >
      <input type="hidden" id="idd"  value="<?php  echo $idd;?>">
     
	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label" style="clear:left">结束页</label>
        <div class="col-sm-10">
          <input type="text" id="end" class="form-control" value="">
		例如填写：1-5页。采集品质不好把控，列表内可自行删除（删除后无残留）。
		</div>
      </div>

  <div class="form-group">
	  <label for="firstname" class="col-sm-2 control-label">关键词</label>
        <div class="col-sm-10">
          <input type="text" id="kw" class="form-control" value="">

例如输入关键词：晚安，将自动采集这个关键词的表情，录入表情会自动带两个搜索关键词，晚安+分类名。

        </div>
      </div>


 <div class="form-group" >
        <label for="firstname" class="col-sm-2 control-label">采集内容</label>
        <div class="col-sm-10">
 <select id="fw_kw">
  <option value ="0" selected>全部都采 </option>
  <option value ="1" >只采GIF </option>
</select>
        </div>
      </div>


	   <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">操作</label>
        <div class="col-sm-10">
          <button  class="btn btn-primary"  onClick="auto()">关键词采集</button>
<span id="text"></span>
        </div>
      </div>
	  </div><br><br><br>
两种方式二选一，经常更新就用推文采集，但是会采集到推文装饰用的图片，采集完一定到列表那删一下。关键词采集图片比较老了，而且还有很多重复的，属于补充功能。<br><br><br>
	  </div>

</div>


</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>



<script>




//$.post("<?php  echo $this->createWebUrl('auto')?>", {
			
			//type:'add',
			//ptype:3,
			//classid:272,
			//imgpath:'http://img.doutula.com/production/uploads/image/2020/04/14/20200414866864_lZizuN.jpg'

		//},function (data) {
			
				 //var obj = JSON.parse(data);
				 	 //if(obj['res']==1){

//alert(123)

				 //}else{
				   //window.alertf(obj['res'])
				 //}
				
	//})

function auto(idd){
		
 if(window.confirm('每获取1页数据大约需要2-3秒，页数越多越慢，请耐心等待。确认获取数据吗')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('auto')?>", {
			
			kw:$('#kw').val(),
			fw_kw:$('#fw_kw').val(),
			start:$('#start').val(),
			end:$('#end').val(),
			type:'getlist'

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){


if(window.confirm('共检索到'+obj['num']+'条数据，是否开始采集')){
        //继续执行

num=0;////当前采集书店
getimg()

function getimg(){

$('#text').text('采集进度:'+(num+1)+'/'+obj['num']+' （ ← 刷新页面自动中断）')
$.post("<?php  echo $this->createWebUrl('auto')?>", {
			
			type:'add',
			kw:$('#kw').val(),
			
			classid:'<?php  echo $_GPC["classid"]?>',
			ptype:'<?php  echo $_GPC["ptype"]?>',
			imgpath:obj['list'][num]

		},function (data) {
			
				 var sobj = JSON.parse(data);
				 	 if(sobj['res']==1){

num++

if(num<parseInt(obj['num'])){
	
getimg()
}else{
	
	alert('采集完成，可以去列表查看采集成果')

}

				 }else{
				   window.alertf(obj['res'])
				 }

	})

}

    }else{

    }

				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function add(){

$.post("<?php  echo $this->createWebUrl('swiper')?>", {
			
			type:'add',
			id: $('#idd').val(),
			name: $('#name').val(),
			path: $('#path').val(),
			pos: $('#pos').val(),
			imgpath: $('input[name="imgpath"]').val(),

		},function (data) {
		
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒',function(){window.location.href="<?php  echo $this->createWebUrl('swiper')?>" })
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function edit(idd){

		window.location.href="<?php  echo $this->createWebUrl('swiper')?>"+"&type=edit&id="+idd	

	}




	function pathauto(){
		
 if(window.confirm('请耐心等待数据获取，确定采集吗')){
        //继续执行
    }else{
		
return;
    }
$.post("<?php  echo $this->createWebUrl('auto')?>", {
			
		
			path:$('#path').val(),
			fw_tw:$('#fw_tw').val(),
			save:0,
			name:$('#name').val(),
			type:'getpath_list'
		

		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){



if(window.confirm('共检索到'+obj['num']+'条数据，是否开始采集')){
        //继续执行

num=0;////当前采集书店
getimg()

function getimg(){

var tempnum=(num+1);
if(num+1>obj['num']){
	
tempnum=obj['num']
}
$('#textb').text('采集进度:'+tempnum+'/'+obj['num']+' （ ← 刷新页面自动中断）')
$.post("<?php  echo $this->createWebUrl('auto')?>", {
			
			type:'add',
			kw:' ',
	       opath:1,
			classid:'<?php  echo $_GPC["classid"]?>',
			ptype:'<?php  echo $_GPC["ptype"]?>',
			save:$('#savepic').val(),
			name:$('#name').val(),
			imgpath:obj['list'][num]

		},function (data) {
			
				 var sobj = JSON.parse(data);
				 	 if(sobj['res']==1){

num++

if(num<=parseInt(obj['num'])){
	
getimg()
}else{
	
	alert('采集完成，可以去列表查看采集成果')

}

				 }else{
				   window.alertf(obj['res'])
				 }

	})

}

    }else{

    }

				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	var typekey=3;
	if(typekey==3){
		
		//$("#keysearch").css('display','block')

	}
</script>


