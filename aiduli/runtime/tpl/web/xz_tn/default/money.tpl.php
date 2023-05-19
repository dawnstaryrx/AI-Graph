<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-pills nav-justified" style="width:1300px;margin-bottom:10px">

<li class="active"  style="float:right; position:absolute;left:95%;;margin-left:-300px"><a href="<?php  echo $out_link;?>" style="border-radius:5px;font-size:20px;width:300px;background-color:#faa048">提现申请(<?php  echo $out_num?>)</a></li>
</ul>

<div class="btn-group">
    <a href="<?php  echo $this->createWebUrl('money')?>"><button type="button" class="btn btn-default btn-lg active" style="border-radius:10px 10px 0 0">抖音结算</button></a>
    <a href="<?php  echo $this->createWebUrl('money_wx')?>"><button type="button" class="btn btn-primary btn-lg" style="border-radius:10px 10px 0 0">微信结算</button></a>
    <a href="<?php  echo $this->createWebUrl('money_ks')?>"><button type="button" class="btn btn-primary btn-lg" style="border-radius:10px 10px 0 0">快手结算</button></a>
</div>
<div style="height:3px;background-color:#1562af"></div>
<div class="panel panel-default" style="">

	<div class="panel-body">
		<!--内容-->
		<table class="table table-hover">
	
	<thead>
	<tr>
		
			<th style="width:33%">
		月结算： <br><br>

 <input type="text" id="monthly"  placeholder="选择月份">


<button id="showbtn" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="showbtn()">查看</button>
		</th>

			<th style="width:34%">
		日结算：(直接粘贴抖音广告指标明细的日期，如：2022/03/11，避免出错) <br><br>

      <input type="text" id="showday"  value="" placeholder='粘贴日期'>


<button id="bbtt" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="showday()">查看</button>
		</th>
			<th style="width:33%">
		自定义结算（日期格式2022/03/11）： <br><br>

      <input type="text" id="start_day"  value="" placeholder='粘贴日期'>

<input type="text" id="end_day"  value="" placeholder='粘贴日期'>
<button id="bbtt" type="button" class="btn btn-primary" style="margin-top:-7px;margin-left:10px" onClick="showdiyday()">查看</button>
		</th>
	</tr>
	</thead>
</table>
<table class="table table-hover">
<thead>
		<tr>
			<th style="width:50px">选择</th>
			<th>名称</th>
			<th>账号</th>

			<th>显示比例</th>
			<th>额外扣除</th>
			<th>抖音佣金</th>

		</tr>
	</thead>
	<tbody>

		<?php  if(is_array($list)) { foreach($list as $index => $itme) { ?>

		<tr >
			
<td><input type="checkbox"  name="del" value="<?php  echo $itme['id'];?>" style="width:26px;height:26px" /></td>
<td><?php  echo $itme['shopname'];?></td>
<td><?php  echo $itme['name'];?></td>
<td><?php  echo $itme['show'];?>%</td>
<td><?php  echo $itme['pay'];?>%</td>
<td><?php  echo $itme['totalmoney'];?>元</td>


		</tr>
		<?php  } } ?>
	</tbody>
</table>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px;margin-right:20rpx" onClick="select_all()">全选</button>
<button type="button" class="btn btn-primary" style="margin:30px auto;margin-top:0px" onClick="excelfun()">导出支付宝批量支付excel</button>

	<?php  echo $pager;?>
	</div>
</div>

	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>

<script type="text/javascript" src="../../../addons/xz_tn/template/libs/jquery.monthpicker.js"></script>

<link rel="stylesheet" type="text/css" href="../../../addons/xz_tn/template/libs/jquery.monthpicker.css">

<script>

var starttime_obj="<?php  echo $_GPC['start_time']?>";
if(starttime_obj==""){
	
var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
   // month = month > 9 ? month : "0" + month;
    var nowMonth = year + "-" + month;

let start = new Date( year + "/" + month + "/01" ).getTime()/1000
//结束时间 时间戳
if( month == 12 ){
	 //十二月的时候进位，这里直接用加减法算了  
	 //也可以用 time.setMonth( month + 1 )去计算并获取结束时间的月份和年份
	month = 0;
	year += 1;
}
let end = new Date( year + "/" + ( month + 1 )  + "/01").getTime()/1000-86400


window.location.href="<?php  echo $this->createWebUrl('Money')?>&type=showorder&start_time="+start+"&end_time="+end;

};


var timeArr_day=[];
function showday(){
	
if($('#showday').val()==''){
	
alert('请填写日期')
return;
}

	var tempdate=(Date.parse(new Date($('#showday').val()))/1000)

	timeArr_day=[tempdate,tempdate]
if(timeArr_day.length!=2){
	
	alert('请填写日期')
	return;

}
window.location.href="<?php  echo $this->createWebUrl('Money')?>&type=showorder&start_time="+timeArr_day[0]+"&end_time="+timeArr_day[1];


}

function showdiyday(){
	
if($('#start_day').val()==''){
	
alert('请填写日期1')
return;
}

if($('#end_day').val()==''){
	
alert('请填写日期2')
return;
}

var tempdate=(Date.parse(new Date($('#start_day').val()))/1000)
var tempdateb=(Date.parse(new Date($('#end_day').val()))/1000)

	timeArr_day=[tempdate,tempdateb]
if(timeArr_day.length!=2){
	
	alert('请填写日期')
	return;

}
window.location.href="<?php  echo $this->createWebUrl('Money')?>&type=showorder&start_time="+timeArr_day[0]+"&end_time="+timeArr_day[1];


}
function showbtn(){
if(timeArr.length!=2){
	
	alert('请先选择月份')
	return;

}
window.location.href="<?php  echo $this->createWebUrl('Money')?>&type=showorder&start_time="+timeArr[0]+"&end_time="+timeArr[1];

}
var timeArr=[];
$(function(){
	$('#monthpicker').monthpicker({
        years: [2022, 2023, 2024, 2025, 2026,2027, 2028, 2029, 2030, 2031],
        topOffset: 6
    });
	$('#monthly').monthpicker({
		 years: [2022, 2023, 2024, 2025, 2026,2027, 2028, 2029, 2030, 2031],
        topOffset: 6,
        onMonthSelect: function(m, y) {

        console.log(y+'/'+(m+1));

let time = new Date(y+'/'+(m+2));//当前月 要计算其他时间点自己传入即可
let year = time.getFullYear();
let month = parseInt( time.getMonth());

//开始时间 时间戳
let start = new Date( year + "-" + month + "-01 00:00:00" ).getTime()
//结束时间 时间戳
if( month == 12 ){
	 //十二月的时候进位，这里直接用加减法算了  
	 //也可以用 time.setMonth( month + 1 )去计算并获取结束时间的月份和年份
	month = 0;
	year += 1;
}
let end = new Date( year + "-" + ( month + 1 )  + "-01 00:00:00" ).getTime()


timeArr=[start/1000,end/1000-86400]
console.log(timeArr);

        }
	})
});
		
function edit(id){
	
$.post("<?php  echo $this->createWebUrl('editshop')?>", {

			type: 'show',
			id: id
			
		},function (data) {
			
var obj = JSON.parse(data);
if(obj['res']==1){
$('#id').val(obj['db']['id']);
$('#shopname').val(obj['db']['shopname']);
$('#name').val(obj['db']['name']);
$('#pw').val('不修改');
$('#addbutton').html('修改');

				 }else{
				  
				 }
				

	})
return;

}
	
	function lock(id){
		

$.post("<?php  echo $this->createWebUrl('setshoplock')?>", {

			lock: $('#lock'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#lock"+id),"操作成功")
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}


function show(id){
		

$.post("<?php  echo $this->createWebUrl('setshopshow')?>", {

			show: $('#show'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#show"+id),"操作成功")
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



function pay(id){
		

$.post("<?php  echo $this->createWebUrl('setshoppay')?>", {

			pay: $('#pay'+id).val(),
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

				  showPopover($("#pay"+id),"操作成功")
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}



	function hid(id){
		$("#show"+id).css('display','none')
	$("#hid"+id).css('display','none')	

$.post("<?php  echo $this->createWebUrl('visible')?>", {

			type:'hid',
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){
alertf('操作成功','提醒')
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

	}

	function show(id){
			$("#show"+id).css('display','none')
	$("#hid"+id).css('display','none')

$.post("<?php  echo $this->createWebUrl('visible')?>", {

			type:'show',
			id: id
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

alertf('操作成功','提醒')
				 }else{
				   window.alertf(obj['res'])
				 }
				

	})
return;

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

function setapi(idd,type){


$.post("<?php  echo $this->createWebUrl('setapiuser')?>", {

         
			val:$("#"+type+idd).val(),
			id: idd
			
		},function (data) {
			
				 var obj = JSON.parse(data);
				 	 if(obj['res']==1){

            showPopover($("#"+type+idd),"操作成功")

				 }
				

	})


return;


	

}

function del(){
	
	if(window.confirm('确认删除吗？')){
	                 //alert("确定");
					 
					 
					 delfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function delfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('delshop')?>", {
		
		            type:'del',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }
						
		
			})
		
	}
	
	
	
}


function pass(){
	
	if(window.confirm('确认全部审核吗？')){
	                 //alert("确定");
					 
					 
					 delfun();
					 
	                 return true;
	              }else{
	                 //alert("取消");
	                 return false;
	             }
	

	
	function delfun(){
		
		var obj=document.getElementsByName('del');
		    var str = ''; 
		    for(var i=0; i<obj.length; i++){ 
		    if(obj[i].checked) str+=obj[i].value+'|'; 
		}
		
		$.post("<?php  echo $this->createWebUrl('pass_user')?>", {
		
		            type:'del',
					list:str
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 	 if(obj['res']==1){
		
		            alertf('操作成功','提醒',function(){location.reload(); })
		
						 }

			})

	}

}

function select_all(){
	
    var cks =document.getElementsByName("del");
 //实现点击全选按钮，小按钮的状态跟着全选按钮变化
 
    for (var i = 0; i < cks.length; i++) {
      cks[i].checked=true;
    }


}
function jumpclassid(){
	window.location.href=window.location.href+'&classid='+$('#jumpclass').val();
	;

}
function search(){
	window.location.href="<?php  echo $this->createWebUrl('usercode')?>"+"&search="+$('#search').val();
	

}
var adding=false;

function addpay(){

if(!$('#time').val()){
	
	alert('内容不能为空')
	return
}

if(!$('#money').val()){
	
	alert('内容不能为空')
	return
}

		$.post("<?php  echo $postlink;?>"+'&pt=addpay', {

					time:$('#time').val(),
                    money:$('#money').val(),
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						
 if(obj['res']==1){
					
					alert('生成完成');

				 }
		               //  alertf('操作成功','提醒',function(){location.reload(); })

			})
}
function addexcel(){

	 var data = new FormData();
        //为FormData对象添加数据
        $.each($('#inputfile')[0].files, function(i, file) {
            data.append('upload_file'+i, file);
        });
 
 $.ajax({
            url:"<?php  echo $postlink;?>"+'&pt=addexcel', /*去过那个php文件*/
            type:'POST',  /*提交方式*/
            data:data,
            cache: false,
            contentType: false,        /*不可缺*/
            processData: false,         /*不可缺*/
            success:function(data){   
				 var obj = JSON.parse(data);
				 if(obj['res']==1){
					
					alert('生成完成');

				 }
            },
            error:function(){
                alert('上传出错');
            }
        });

}
function getQueryString(name) {
    var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)', 'i');
    var r = window.location.search.substr(1).match(reg);
    if (r != null) {
        return unescape(r[2]);
    }
    return null;
}
//setTimeout(function(){showPopover($("#name8"),"操作成功");},1000)
function download(){
	if(!$('#search').val()){
		
		alert('填写内容')
		return;

	}
	 delfun();

	function delfun(){
	

		$.post("<?php  echo $this->createWebUrl('download_usercode')?>", {

					start_time:getQueryString('start_time'),
					end_time:getQueryString('end_time')
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 alert('复制链接下载：'+obj['res'])

		          //  alertf('操作成功','提醒',function(){location.reload(); })

			})
		
	}

}

function excelfun(){

if(getQueryString('start_time')==null){
	alert('请先生成收益清单')
	return;
}

$.post("<?php  echo $this->createWebUrl('download_usercode')?>", {

					start_time:getQueryString('start_time'),
					end_time:getQueryString('end_time')
					
				},function (data) {
					
						 var obj = JSON.parse(data);
						 alert('复制链接下载：'+obj['res'])

		          //  alertf('操作成功','提醒',function(){location.reload(); })

			})

}
</script>
