function setfun(ptype, idd) {

	switch (ptype) {
		case 'edit':
			window.location.href=window.location.href+"&pt=add&idd="+idd 
			break;
		case 'del':
			
			window.alertf("是否删除这条数据","请确认：",function(){
				delfun(ptype,idd)
			},2)
			
			function delfun(ptype,idd){
				$.post(window.location.href, {
					pt: ptype,
					idd: idd
				},
				function (data) {
				 obj = JSON.parse(data);
				
				 if(obj['res']==1){
					 console.log('删除成功')
					 location.reload();
				 }
				});

			}
			
			

			break;
	}

}

function addModal(){

  　　　$('body').append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class=""><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h2 class="modal-title" id="myModalLabel" ></h2></div><div class="modal-body" id="modalDetails" style="width:100%;font-size:16px;text-align:center"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal" id="closebtn">关闭</button><button type="button" class="btn btn-primary" onClick="window.callback()">确认</button></div></div><!-- /.modal-content --></div><!-- /.modal --></div>')
 　}


window.alertf=function(details,titles='提醒',fun=function(){$('#myModal').modal('hide')},btnnum=1){
	if(!window.addModaled){
		
		addModal()
		window.addModaled=1;
		
	}
	
	
		$("#closebtn").css('display','none')
	
	//alert(33)
	
	$('#myModal').modal('show')
	$('#myModalLabel').html(titles);
	$('#modalDetails').html(details);
	
	//$('#myModal').modal('hide')
	
	window.callback=function(){
		fun()
	};
}

